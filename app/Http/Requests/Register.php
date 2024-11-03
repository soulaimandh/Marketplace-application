<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "avatar" => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'address' => 'string|max:255',
            'type' => 'required',
            'city' => 'required',
            'phone' => 'required|max:20|unique:users,phone|min:10',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ];
    }
}