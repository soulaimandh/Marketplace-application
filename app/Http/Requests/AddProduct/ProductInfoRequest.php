<?php

namespace App\Http\Requests\AddProduct;

use Illuminate\Foundation\Http\FormRequest;

class ProductInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "type" => 'required|numeric',
            "transaction_type" => 'required|numeric',
            "city" => "required|string",
            "sector" => "required|numeric",
        ];
    }
}
