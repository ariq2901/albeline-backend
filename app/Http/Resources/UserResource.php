<?php

namespace App\Http\Resources;

use App\Http\Resources\ImageResource;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'profile' => $this->profile,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'address' => $this->address,
            'hp' => $this->hp,
            'roles' => $this->getRoleNames(),
            'image' => new ImageResource($this->image)
        ];
    }
}
