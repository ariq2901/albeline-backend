<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCart;
use App\Http\Requests\checkoutRequest;
use App\Http\Requests\makeOrderRequest;
use App\Http\Requests\RemoveCart;
use App\Http\Resources\Buyer\CartCollection;
use App\Http\Resources\Buyer\CartResource;
use App\Http\Resources\Buyer\CheckoutCollection;
use App\Http\Resources\Buyer\ListResource as BuyerListResource;
use App\Http\Resources\ListResource;
use App\Http\Resources\OrderResource;
use App\Http\Resources\TrackResource;
use App\Mail\CheckoutMail;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Image;
use App\Models\Order;
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
            // $product = Product::where("id", $productId)->first();
            Cart::create(["user_id" => $input["user_id"], "product_id" => $productId]);
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

    public function makeOrder(makeOrderRequest $request)
    {
        $data = json_decode($request->data);
        // return response()->json(["datanya" => $data]);

        //TODO $table->foreignId('product_id');
        //TODO $table->foreignId('user_id');
        //TODO $table->integer('order_amount');
        //TODO $table->integer('courier_cost');
        //TODO $table->boolean('compacted_shipment');
        //TODO $table->bigInteger('total_product_price');

        $order_input = [];
        $success_order = [];
        $mail_data = [];

        $checkoutke = Order::max('checkout_ke');
        if ($checkoutke === null) {
            $order_input['checkout_ke'] = 1;
        } else {
            $order_input['checkout_ke'] = $checkoutke;
        }
        
        foreach ($data as $store) {
            $order_input['user_id'] = $request->user()->id;
            $order_input['courier_cost'] = $store->courier_cost;

            if (count($store->products) >= 2) {
                $order_input['compacted_shipment'] = true;
            } else {
                $order_input['compacted_shipment'] = false;
            }
            
            foreach ($store->products as $product) {
                $get_prod = Product::where('id', $product->id)->first();
                $prod = Product::where('id', $product->id);
                $prod->update(['stock' => ((int) $get_prod->stock - (int) $product->amount), 'sold' => ((int) $get_prod->sold + (int) $product->amount)]);
                Cart::where('user_id', Auth::user()->id)->where('product_id', $product->id)->delete();
                $order_input['product_id'] = $product->id;
                $order_input['order_amount'] = $product->amount;
                $order_input['total_product_price'] = ($product->price * $product->amount);
                $order_input['store_id'] = $get_prod->store->id;
                $order = Order::create($order_input);
                array_push($success_order, $order);
            }
        }
        
        $mail_data['user'] = $request->user()->name;
        $mail_data['products'] = $success_order;

        foreach ($mail_data['products'] as $product) {
            $product['name'] = Product::where('id', $product->product_id)->first()->name;
            $product['store'] = Product::where('id', $product->product_id)->first()->store->name;
            $product['image'] = Product::where('id', $product->product_id)->first()->images()->where('thumbnail', true)->first()->id;
        }


        // // dd($mail_data);
        // return view('checkout')->with(['data' => $mail_data]);
        $this->checkoutMail($request->user()->email, $mail_data);

        return response()->successWithKey(OrderResource::collection($success_order), 'orders');
    }

    // Track freshly order with status 1
    public function trackPackage($status) //? yes & no compacted shipment
    {
        $order = Order::where('user_id', Auth::user()->id)->where('status', $status)->get();
        return response()->successWithKey(OrderResource::collection($order), 'packages');
    }
}
