<?php

namespace App\Http\Resources;

use App\Http\Resources\Review\ReviewResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductByCategoryResources extends JsonResource
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
            'images' => $images,
            'sold' => $this->sold,
            'stock' => $this->stock,
        ];
    }
}
