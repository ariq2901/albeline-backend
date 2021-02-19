<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCart;
use App\Http\Requests\checkoutRequest;
use App\Http\Requests\RemoveCart;
use App\Http\Resources\Buyer\CartCollection;
use App\Http\Resources\Buyer\CartResource;
use App\Http\Resources\Buyer\CheckoutCollection;
use App\Http\Resources\Buyer\ListResource as BuyerListResource;
use App\Http\Resources\ListResource;
use App\Mail\CheckoutMail;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Image;
use App\Models\Product;
use App\Models\Track;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class BuyerController extends Controller
{
    public function getCart()
    {
        try {
            $carts = Cart::where("user_id", Auth::user()->id)->get();
        } catch (\Throwable $e) {
            return response()->error("Cart not found", StatusCode::NOT_FOUND);
        }
        
        $list_product_id = [];
        foreach ($carts as $cart) {
            array_push($list_product_id, $cart->product_id);
        }

        $products = Product::whereIn('id', $list_product_id)->get();
        foreach ($products as $product) {
            $product['amount'] = Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->first()->product_amount;
        }
        return response()->successWithKey(new CartCollection($products));
    }

    public function addCart(AddCart $request)
    {
        $input = $request->validated();
        $input['user_id'] = $request->user()->id;

        $cartnull = Cart::where('product_id', null)->where('user_id', $input['user_id'])->first();

        if ($cartnull) {
            $cartnull->delete();
        }

        foreach ($input['product_id'] as $productId) {
            $product = Product::where("id", $productId)->first();
            Cart::create(["user_id" => $input["user_id"], "product_id" => $productId, "product_price" => $product->price]);
        }
        
        return response()->success("success update cart");
    }
    
    public function removeCart(RemoveCart $request)
    {
        $input = $request->validated();
        try {
            $cart = Cart::where("product_id", $input['product_id'])->where("user_id", Auth::user()->id)->first();
        } catch (\Throwable $e) {
            return response()->error("Cart item not found", StatusCode::NOT_FOUND);
        }

        if (!$cart) {
            return response()->error("There is no item in the cart with that product id in this user cart", StatusCode::NOT_FOUND);
        }
        
        $cart->delete();
        return response()->success("success delete cart");
    }

    public function handleCheckout(checkoutRequest $request)
    {
        $input = $request->validated();

        // $checkout = Checkout::create(["user" => Auth::user()->id, "total_price" => $input['price'], "courier" => $input['courier'], "courier_cost" => $input['courier_cost'], "invoice" => Checkout::where('user_id', Auth::user()->id)->max('checkout_ke') + 1 ]);

        // //? Update checked out products from user cart & Create tracking order
        foreach ($input['product_id'] as $product_id) {
            $cart = Cart::where("user_id", Auth::user()->id)->where("product_id", $product_id);
            $cart->update(['checked_out' => true]);
            Track::create(['user_id' => Auth::user()->id, 'product_id' => $product_id]);
        }
        
        // $data = $input;
        // $data['user'] = Auth::user()->username;
        // $data['products'] = [];
        // $products = Product::whereIn("id", $input['product_id'])->get();

        // foreach ($products as $product) {
        //     array_push($data['products'], $product);
        // }
        // foreach ($data['products'] as $item) {
        //     $item['image'] = $item->images()->where('thumbnail', true)->first()->id;
        // }
        // return view('checkout')->with(['data' => $data]);

        // if ($checkout) {
            // $this->checkoutMail(Auth::user()->email, $data);
        // }
    }

    public function checkoutMail($receiver, $data)
    {
        Mail::to($receiver, "Albeline")->send(new CheckoutMail($data));
    }
}
