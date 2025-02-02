<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
                "name" => 'required|unique:categories,name',
                Rule::unique('categories')->ignore($this->id),

        ];
    }

    public function messages(){
        return [
            'name.required' => __('admin/request.required'),
            'name.unique' => __('admin/request.unique'),
        ];
}

}