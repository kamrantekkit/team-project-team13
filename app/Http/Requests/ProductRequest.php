<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:40'],
            'description' => ['required','string', 'min:20'],
            'price' => ['required', 'numeric','min:0.00'],
            'image' => ['required', 'image'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
