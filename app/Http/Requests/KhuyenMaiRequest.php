<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhuyenMaiRequest extends FormRequest
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
            'id_san_pham'          =>   'required|exists:san_phams,id|unique:khuyen_mai,id_san_pham',
            'ty_le'                 =>'required|numeric|min:1|max:100',
            'is_open'           =>   'required|boolean',

        ];
    }

    public function messages()
    {
        return [
            'required'      =>  ':attribute không được để trống',
            'max'           =>  ':attribute phải bé hơn 100',
            'min'           =>  ':attribute phải lớn hơn 0',
            // 'digits_between'=>  ':attribute phải > 0 và < 100 ',
            'exists'        =>  ':attribute không tồn tại',
            'boolean'       =>  ':attribute chỉ được chọn True/False',
            'unique'        =>  ':attribute đã tồn tại',
            'numeric'       =>  ':attribute phải là số',
        ];
    }

    public function attributes()
    {
        return [
            'id_san_pham'=>'Sản phẩm',
            'ty_le'=>'tỷ lệ khuyến mãi',
            'trang_thai'=>'Tình trạng',
        ];
    }
}
