<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editAnhRequest extends FormRequest
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
            'id'                =>  'required|exists:hinh_anh,id',
            'id_san_pham'      =>  'required',
            'hinh_anh'      =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute quá dài',
            'exists'        =>  ':attribute không tồn tại',
            'boolean'       =>  ':attribute chỉ được chọn True/False',
            'unique'        =>  ':attribute đã tồn tại',
        ];
    }

    public function attributes()
    {
        return [
             'id'                =>  'id ',
            'id_san_pham'      =>  'sản phẩm',
        ];
    }
}
