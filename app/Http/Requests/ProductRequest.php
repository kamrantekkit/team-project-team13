<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'archived' => ['required'],
            'image_path' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
