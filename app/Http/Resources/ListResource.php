<?php

namespace App\Http\Resources;

use App\Http\Resources\Detail\CategoryResource;
use App\Http\Resources\Review\ReviewResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ListResource extends JsonResource
{
    public static $wrap = 'products';

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
            'categories' => $categories,
            'rate' => $reviews->avg('rate'),
            'condition' => $this->condition,
            'images' => $images,
            'sold' => $this->sold,
            'price' => $this->price,
            'stock' => $this->stock,
            'desc' => $this->desc,
        ];
    }
}
