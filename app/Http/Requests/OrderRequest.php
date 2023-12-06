<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string','min:3'],
            'email' => ['required','string','email'],
            'first_line_address' => ['required', 'string', 'min:4'],
            'second_line_address' => ['required', 'min:4'],
            'city' => ['required','min:3'],
            'postcode' => ['required','postal_code:GB']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
