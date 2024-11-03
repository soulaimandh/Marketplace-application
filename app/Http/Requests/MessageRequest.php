<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
                'name' => 'required|string|max:100',
                'email' => 'required|email|max:255',
                'subject' => 'required|string',
                'message' => 'required|max:2000',
        ];
    }

    public function messages(){
        return [
            'name.required' => __('admin/request.required'),
            'name.max'=> __('admin/request.max'),
            'name.string'=> __('admin/request.string'),
            'email.required' =>__('admin/request.required'),
            'email.email'=> __('admin/request.email'),
            'email.max'=> __('admin/request.max'),
            'subject.required'=> __('admin/request.required'),
            'subject.string'=> __('admin/request.string'),
            'message.required'=> __('admin/request.required'),
            'message.max'=> __('admin/request.max'),
        ];
}
}