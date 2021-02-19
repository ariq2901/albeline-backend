<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|max:255|sometimes|min:3',
            'username' => 'string|max:255|sometimes|min:3',
            'profile' => 'string|sometimes|min:3',
            'dob' => 'string|sometimes',
            'address' => 'string|sometimes',
            'hp' => 'string|sometimes',
            'gender' => 'string|sometimes',
            'city_id' => 'integer|sometimes',
            'email' => 'sometimes|max:255|email|string|unique:users,email,' . $this->user()->id,
            'password' => 'string|max:255|sometimes|min:8'
        ];
    }
}
