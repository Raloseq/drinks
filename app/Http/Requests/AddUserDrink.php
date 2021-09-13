<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserDrink extends FormRequest
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
            'image' => [
                'nullable',
                'file',
                'image'
            ],
            'name' => [
                'max:20',
                'required'
            ],
            'recipe' => [
                'required'
            ],
            'ingredients' => [
                'required'
            ],
            'description' => [
                'required'
            ]
        ];
    }
}
