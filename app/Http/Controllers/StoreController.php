<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpenStore;
use App\Http\Requests\UpdateStore;
use App\Http\Resources\ListResource;
use App\Http\Resources\OrderResource;
use App\Http\Resources\Store\ListCollection;
use App\Http\Resources\Store\ProductResource;
use App\Http\Resources\Store\ReviewsResource;
use App\Http\Resources\StoreResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function openStore(OpenStore $request)
    {
        $input = $request->validated();
        $input['city_id'] = (int) $input['city_id'];
        try {
            Store::create(array_merge($input, ['user_id' => $request->user()->id]));
            $user = User::findOrFail(Auth::user()->id);
            $user->syncRoles(['pembeli', 'penjual']);
        } catch (\Throwable $th) {
            return response()->error('Failed to create Store', StatusCode::INTERNAL_SERVER_ERROR);
        }

        return response()->successWithMessage('Success to create your store!', StatusCode::CREATED);
    }

    public function show($id)
    {
        $s_id = (int)$id;
        try {
            $store = Store::findOrFail($s_id);
        } catch (\Throwable $th) {
            return response()->error('Store is not found', StatusCode::NOT_FOUND);
        }

        $store['reviews'] = $this->getRating2($id);
        $store['product_stats'] = $this->getProducts2($id);
        
        return response()->successWithKey(new StoreResource($store), 'store');
    }
    
    public function getSellerStore($user_id)
    {
        try {
            $user = User::findOrFail($user_id);
            $store = $user->store;
        } catch (\Throwable $th) {
            return response()->error('Store is not found', StatusCode::NOT_FOUND);
        }

        return response()->success($store);
    }

    public function update(UpdateStore $request, $id)
    {
        try {
            $store = Store::findOrFail($id);
            $user = User::findOrFail($request->user()->id);
        } catch(\Throwable $th) {
            return response()->error('An error occured', StatusCode::INTERNAL_SERVER_ERROR);
        }
        if($store->user->id !== $user->id) {
            
        }

        $store->fill($request->validated());
        $store->update();
        return response()->successWithKey(new StoreResource($store), 'store');
    }

    public function delete($id)
    {
        try {
            $store = Store::findOrFail($id);
            $user = Auth::user()->id;
        } catch(\Throwable $th) {
            return response()->error('An error occured', StatusCode::INTERNAL_SERVER_ERROR);
        }
        if($store->user_id !== $user) {
            return response()->error('You are not the owner\'s store!', StatusCode::UNAUTHORIZED);
        }
        $store->delete();
        return response()->successWithMessage('Store has been deleted successfully', StatusCode::OK);
    }
    
    public function getProducts()
    {
        try {
            $user = Auth::user();
            if ($user->store === null) {
                return response()->error("User doesn't have a store");
            }
            $store = Store::findOrFail($user->store->id);
        } catch(\Throwable $th) {
            return response()->error('An error occured', StatusCode::INTERNAL_SERVER_ERROR);
        }

        if($store->user_id !== $user->id) {
            return response()->error('You are not the owner\'s store!', StatusCode::UNAUTHORIZED);
        }

        return response()->successWithKey(new ProductResource($store));
    }
    
    public function getProducts2($store_id)
    {
        try {
            $store = Store::findOrFail($store_id);
        } catch(\Throwable $th) {
            return 'Store not found';
        }

        return new ProductResource($store);
    }

    public function getRating()
    {
        try {
            $user = Auth::user();
            if ($user->store === null) {
                return response()->error("User doesn't have a store");
            }
            $store = Store::with('Products.Reviews')->find($user->store->id);
        } catch(\Throwable $th) {
            return response()->error('An error occured', StatusCode::INTERNAL_SERVER_ERROR);
        }

        if($store->user_id !== $user->id) {
            return response()->error('You are not the owner\'s store!', StatusCode::UNAUTHORIZED);
        }

        $reviews = [];
        foreach ($store->products as $product) {
            array_push($reviews, $product->reviews);
        }

        return response()->successWithKey(new ReviewsResource($reviews));
    }

    public function getRating2($store_id)
    {
        try {
            $store = Store::with('Products.Reviews')->find($store_id);
        } catch(\Throwable $th) {
            return 'Store not found';
        }

        $reviews = [];
        foreach ($store->products as $product) {
            array_push($reviews, $product->reviews);
        }

        return new ReviewsResource($reviews);
    }

    public function checkStore()
    {
        if (Auth::user()->store !== null) {
            return response()->successWithMessage(true);
        }
        return response()->error(false, StatusCode::NOT_FOUND);
    }

    public function trackOrder($status)
    {
        $order = Order::where('store_id', Auth::user()->store->id)->where('status', $status)->get();
        return response()->successWithKey(OrderResource::collection($order), 'packages');
    }

    public function handleOrder($id, $nextstatus) //? order id
    {
        $order = Order::where('id', $id)->first();

        if ($order->store_id !== Auth::user()->store->id) {
            return response()->error('You\'re not the store owner', StatusCode::UNAUTHORIZED);
        }

        Order::where('id', $id)->update(['status' => (int) $nextstatus]);
        
        return response()->success('success update order\'s status');
    }
}
