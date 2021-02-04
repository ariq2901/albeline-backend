<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpenStore;
use App\Http\Requests\UpdateStore;
use App\Http\Resources\StoreResource;
use App\Models\Store;
use App\Models\User;
use App\StatusCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function openStore(OpenStore $request)
    {
        $input = $request->only(['name']);
        try {
            $store = Store::create(array_merge($input, ['user_id' => $request->user()->id]));
            // $store->user()->assignRole(['pembeli', 'penjual']);
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

        return response()->successWithKey(new StoreResource($store), 'store');
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
        if($store->user->id !== $user) {
            return response()->error('You are not the owner\'s store!', StatusCode::UNAUTHORIZED);
        }
        $store->delete();
        return response()->successWithMessage('Store has been deleted successfully', StatusCode::OK);
    }
}
