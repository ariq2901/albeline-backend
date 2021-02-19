<?php

namespace App\Http\Resources\Buyer;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CheckoutCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'products' => ListResource::collection($this->collection)
        ];
    }
}
