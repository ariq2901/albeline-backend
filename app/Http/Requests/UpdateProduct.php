<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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

    public $validator = null;

    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'desc' => 'sometimes|min:3',
            'price' => 'sometimes|integer',
            'stock' => 'sometimes|integer',
            'condition' => 'sometimes|boolean',
            'heavy' => 'sometimes|integer',
            'categories' => 'sometimes',
        ];
    }
}
