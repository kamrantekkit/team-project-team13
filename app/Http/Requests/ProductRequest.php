<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:4', 'max:40'],
            'description' => ['required','string', 'min:20'],
            'price' => ['required', 'numeric','min:0.00'],
            'image' => ['required', 'image'],
            'category' => ['required'],
            'tags.*' => ['required', 'numeric']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        parent::failedValidation($validator);
        Log::info(implode(",", $validator->errors()->all()));
    }
}
