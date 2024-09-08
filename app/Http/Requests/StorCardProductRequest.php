<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorCardProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255', 'min:6'],
            'description' => ['required', 'string', 'max:255', 'min:8'],
            'image' => ['required', 'file', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'price' => ['required', 'string', 'max:10', 'min:3']
        ];
    }
}
