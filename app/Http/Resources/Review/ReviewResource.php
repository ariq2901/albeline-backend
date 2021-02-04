<?php

namespace App\Http\Resources\Review;

use App\Http\Resources\Review\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'comment' => $this->comment,
            'rate' => $this->rate,
            'user' => new UserResource($this->user),
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
