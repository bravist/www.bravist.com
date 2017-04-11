<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:managers',
            'password' => 'required|min:6|confirmed',
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
            'email' => ':attribute 邮箱格式不正确',
            'unique' => ':attribute 账号已经被占用',
            'min' => ':attribute 最小值不能小于 :min',
            'confirmed' => ':attribute 两次输入不匹配'
        ];
    }
}
