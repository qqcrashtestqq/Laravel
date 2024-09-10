<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorCardProductRequest extends FormRequest
{
    public function prepareForValidation()
    {
        $this->price = floatval($this->request->get('price'));
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string',
//                'min:6',
                'max:255'],
            'description' => ['required', 'string',
//                'min:8',
                'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'price' => ['required',
                'decimal:8,2',
//                'min:3', 'max:10'
            ]
        ];
    }

    public function messages()
    {
        return [
            'price.decimal' => 'price is not correct',

        ];
    }
}
