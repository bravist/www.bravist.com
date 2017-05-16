<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'    => 'required|email|max:255',
            'password' => 'required|min:6',
        ];
    }

    /**
     * Custom the field message.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ' :attribute 不能为空',
            'max'      => ':attribute 最大值不能为 :max',
            'email'    => ':attribute 邮箱格式不正确',
            'min'      => ':attribute 最小值不能小于 :min',
        ];
    }
}
