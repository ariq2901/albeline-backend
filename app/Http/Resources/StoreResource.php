<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $products = ListResource::collection($this->products);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'city_id' => $this->city_id,
            'city_name' => $this->city_name,
            'user' => new UserResource($this->user),
            'products' => $products,
            'reviews'  => $this->reviews,
            'product_stats'  => $this->product_stats
        ];
    }
}
