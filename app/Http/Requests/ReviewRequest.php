<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'description' => ['required'],
            'rating' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
