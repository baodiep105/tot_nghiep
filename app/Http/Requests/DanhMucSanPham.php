<?php

namespace App\Http\Requests;

use Dotenv\Exception\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class DanhMucSanPham extends FormRequest
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
            'ten_danh_muc'      =>  'required|max:50|unique:danh_muc_san_phams,ten_danh_muc',
            'id_danh_muc_cha'   =>  'nullable|exists:danh_muc_san_phams,id',
            'is_open'           =>  'required|boolean',
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
            'ten_danh_muc'      =>  'Tên danh mục',
            'slug_danh_muc'     =>  'Slug danh mục',
            'id_danh_muc_cha'   =>  'Danh mục cha',
            'is_open'           =>  'Tình trạng',
        ];
    }
    // protected function failedValidation(Validator $validator)
    // {
    //     $response=new Response([
    //         'erorrs'=>$validator->errors(),
    //     ],Response::HTTP_UNPROCESSABLE_ENTITY);
    //     throw (new ValidationValidationException($validator,$response));

    // }
}
