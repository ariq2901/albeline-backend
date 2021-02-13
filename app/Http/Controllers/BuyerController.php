<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCart;
use App\Http\Requests\RemoveCart;
use App\Http\Resources\Buyer\CartCollection;
use App\Http\Resources\Buyer\CartResource;
use App\Models\Cart;
use App\Models\Product;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
}
