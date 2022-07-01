<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'seller_id' => 'required|exists:sellers,id',
            'order_value' => 'required|numeric|min:0.01'
        ];
    }
}
