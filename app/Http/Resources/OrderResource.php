<?php

namespace App\Http\Resources;

use App\Http\Resources\Store\ListResource;
use App\Models\Product;
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
        return [
            'user_id' => $this->user_id,
            'product' => new ListResource(Product::where('id', $this->product_id)->first()),
            'order_amount' => $this->order_amount,
            'total_product_price' => $this->total_product_price,
            'compacted_shipment' => $this->compacted_shipment,
            'courier_cost' => $this->courier_cost,
        ];
    }
}
