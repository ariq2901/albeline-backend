<?php

namespace App\Http\Resources\Store;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $sold_list = [];

        foreach ($this->products as $product) {
            array_push($sold_list, $product->sold);
        }

        $products = ListResource::collection($this->products);
        
        return [
            'total' => count($products),
            'products' => $products,
            'total_sold' => array_sum($sold_list)
        ];
    }
}
