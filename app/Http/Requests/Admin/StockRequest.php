<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StockRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'quantity' => ['required', 'integer', 'min:1'],
            'restock_date' => ['required', 'date', 'after:today']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
