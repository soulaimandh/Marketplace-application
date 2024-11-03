<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
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
            "thumbnail" => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            "title" => 'required',
            "content" => "required",
            "category_id" => "required",
            "tag_id" => "required",
        ];
    }

    public function messages(){

        return [
            'title.required' => __('admin/request.required'),
            'title.unique' => __('admin/request.unique'),
            'expert.required' => __('admin/request.required'),
            'expert.max' => __('admin/request.max'),
            'content.required' => __('admin/request.required'),
            'category_id.required' => __('admin/request.required'),
            'thumbnail.image'=> __('admin/request.image'),
            'thumbnail.mimes'=> __('admin/request.mimes'),
        ];
    }
}
