<?php

namespace App\Http\Resources;

use App\Http\Resources\Store\ListResource;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::where('id', $this->user_id)->first();
        $product = Product::where('id', $this->product_id)->first();

        return [
            'id' => $this->id,
            'status' => $this->status,
            'user' => new UserResource($user),
            'product' => new ListResource($product),
            'order_amount' => $this->order_amount,
            'total_product_price' => $this->total_product_price,
            'compacted_shipment' => $this->compacted_shipment,
            'courier_cost' => $this->courier_cost,
        ];
    }
}
