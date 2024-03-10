<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'customer_id' => ['required', 'exists:users,id'],
            'first_name' => ['required','string', 'regex:/^[A-Za-z\s]*$/','max:40'],
            'last_name' => ['required','string','regex:/^[A-Za-z\s]*$/','max:40'],
            'email' => ['required', 'email', 'max:254'],
        ];
    }

    public function authorize(): bool
    {
        return True;
    }
}
