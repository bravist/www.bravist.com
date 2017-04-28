<?php

namespace App\Http\Requests\Admin\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|max:255|unique:permissions',
            'display_name' => 'required|max:255',
            'description' => 'required',
        ];
    }

    /**
     * Custom the field message
     * 
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ' :attribute 不能为空',
            'max' => ':attribute 最大值不能为 :max',
            'unique' => ':attribute 账号已经被占用',
        ];
    }
}
