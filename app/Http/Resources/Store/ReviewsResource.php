<?php

namespace App\Http\Resources\Store;

use App\Http\Resources\Review\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $container = [];
        foreach ($this as $key) {
            foreach ($key as $item) {
                foreach ($item as $hasil) {
                    array_push($container, $hasil);
                }
            }
        }
        return [
            'total' => count($container),
            'reviews' => $container
        ];
    }
}
