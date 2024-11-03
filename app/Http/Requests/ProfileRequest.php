<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
        ];
    }

    public function messages(){

        return [
            'logo.required' => __('admin/request.required'),
            'logo.image'=> __('admin/request.image'),
            'logo.mimes'=> __('admin/request.mimes'),
            'firstname.required' => __('admin/request.required'),
            'firstname.max' => __('admin/request.max'),
            'firstname.string' => __('admin/request.string'),
            'lastname.required' => __('admin/request.required'),
            'lastname.max' => __('admin/request.max'),
            'lastname.string' => __('admin/request.string'),
        ];
    }
}
