<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'description' => ['required', 'string', 'min:3'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
