<?php

namespace App\Http\Requests\Admin\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => ['required', 'max:200', Rule::unique('roles')->where(function ($query) {
                                                    $query->where('name', $this->get('name'))
                                                    ->where('id', '!=',$this->get('role'));
                                                })],
            'display_name' => 'required|max:200',
            'description' => 'required|max:200',
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
            'unique' => ':attribute ' . $this->get('name') . '已经被占用',
        ];
    }
}
