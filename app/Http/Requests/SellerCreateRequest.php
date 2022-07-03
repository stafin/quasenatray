<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerCreateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'nome'  => 'required|string|min:3|max:120',
            'email' => 'required|unique:sellers|email|max:120'
        ];
    }

}
