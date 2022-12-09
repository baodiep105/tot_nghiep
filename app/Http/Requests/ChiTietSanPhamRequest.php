<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChiTietSanPhamRequest extends FormRequest
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
    {   return [
            'id_sanpham'        =>  'required|exists:san_phams,id',
            'id_mau'            =>  'required|exists:mau_sac,id',
            'id_size'           =>  'required|exists:size,id',
            'sl'                =>  'required|numeric|min_digits:1',
            'trang_thai'        =>  'required|boolean',
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
            'id_san_pham'      =>  'sản phẩm',
            'id_mau'     =>  'màu',
            'id_size'   =>  'size',
            'sl'   =>  'số lượng',
            'is_open'      =>  'Tình trạng',
        ];
    }

}
