<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_line_address' => ['required', 'string', 'min:4'],
            'second_line_address' => ['required', 'min:4'],
            'city' => ['required','min:3'],
            'postal_code' => 'postal_code:GB',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
