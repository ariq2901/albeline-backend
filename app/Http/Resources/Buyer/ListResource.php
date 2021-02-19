<?php

namespace App\Http\Resources\Buyer;

use App\Http\Resources\ImageResource;
use App\Models\Image;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'amount' => $this->amount,
            'image' => ImageResource::collection($this->images->where('thumbnail', true)),
            'price' => $this->price,
            'store' => $this->store->name,
        ];
    }
}
