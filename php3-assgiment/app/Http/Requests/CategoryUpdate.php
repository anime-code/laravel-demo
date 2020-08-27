<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdate extends FormRequest
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
            'cate_name' => 'required|min:4',
            'desc' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'cate_name.required' => 'Tên danh mục không được để trống',
            'cate_name.min' => 'Tên danh mục tối tiểu 4 ký tự',
            'desc.required' => 'Mô tả danh mục không được để trống'
        ];
    }
}
