<?php

namespace App\Http\Resources\Detail;

use App\Http\Resources\ImageResource;
use App\Http\Resources\Review\ReviewResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $reviews = ReviewResource::collection($this->reviews);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'store' => new StoreResource($this->store),
            'image' => ImageResource::collection($this->images),
            'categories' => CategoryResource::collection($this->categories),
            'sold' => $this->sold,
            'price' => $this->price,
            'rate' => $reviews->avg('rate'),
            'reviews' => $reviews,
            'stock' => $this->stock,
            'heavy' => $this->heavy,
            'condition' => $this->condition,    
            'description' => $this->desc,
        ];
    }
}
