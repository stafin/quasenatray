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
            'vendedor_id' => 'required|numeric|exists:sellers,id',
            'venda_valor' => 'required|numeric|min:0.01'
        ];

    }
}
