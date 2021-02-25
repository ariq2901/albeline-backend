<?php

namespace App\Http\Resources\Detail;

use App\Http\Resources\UserResource;
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
        return [
            'id' => $this->id,
            'name' => $this->name,
            'city_id' => $this->city_id,
            'city_name' => $this->city_name,
            'seller_id' => $this->user->id,
            'image' => $this->user->image->id,
        ];
    }
}
