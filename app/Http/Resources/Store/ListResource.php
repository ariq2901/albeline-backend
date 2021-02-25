<?php

namespace App\Http\Resources\Store;

use App\Http\Resources\Detail\CategoryResource;
use App\Http\Resources\ImageResource;
use App\Http\Resources\ListResource as ResourcesListResource;
use App\Http\Resources\Review\ReviewResource;
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
        $images = ImageResource::collection($this->images->where('thumbnail', true));
        $categories = CategoryResource::collection($this->categories);
        $reviews = ReviewResource::collection($this->reviews);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'rate' => $reviews->avg('rate'),
            'images' => $images,
            'weight' => $this->heavy,
            'sold' => $this->sold,
            'price' => $this->price,
            'quantity' => $this->qty,
        ];
    }
}
