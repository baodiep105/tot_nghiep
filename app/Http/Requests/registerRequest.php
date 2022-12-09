<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'username'  => 'required|unique:users,username',
            'password'  => 'required|min:6',
            're_password'=>'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'min'           =>  ':attribute quá ngắn',
            'exists'        =>  ':attribute không tồn tại',
            'boolean'       =>  ':attribute chỉ được chọn True/False',
            'unique'        =>  ':attribute đã tồn tại',
            'numeric'       =>  ':attribute phải là số',
        ];
    }

    public function attributes()
    {
        return [
            'usename'         =>   'user name',
            'password'              =>   'password',
            're_password'       =>   're_password',
        
        ];
    }
}
