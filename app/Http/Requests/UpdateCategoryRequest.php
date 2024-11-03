<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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
                'description' => 'required',
                "title" => 'required|unique:categories|title',
                Rule::unique('categories')->ignore($this->id),

        ];
    }

    public function messages(){
        return [
            'description.required' => __('admin/request.required'),
            'title.required' => __('admin/request.required'),
            'title.unique' => __('admin/request.unique'),
        ];
}

}