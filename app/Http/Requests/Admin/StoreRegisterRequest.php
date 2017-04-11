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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
    }

    
    public function messages()
    {
        return [
            'required' => ':attributes 不能为空',
            'max' => ':attributes 最大值不能为 :value',
            'email' => ':attributes 邮箱格式不正确',
            'unique' => ':attributes 账号已经被占用',
            'min' => ':attributes 最小值不能小于 :value',
            'confirmed' => ':attributes 两次输入不匹配'
        ];
    }
}
