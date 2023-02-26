<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSanPhamRequest extends FormRequest
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
            'id'                   =>   'required|exists:san_phams,id',
            'ten_san_pham'         =>   'max:100|required|unique:san_phams,ten_san_pham,'.$this->id,
            'gia_ban'              =>   'required|numeric|min:1',
            'brand'                =>   'required',
            'mo_ta_ngan'           =>   'required',
            'mo_ta_chi_tiet'       =>   'required',
            'id_danh_muc'          =>   'required|exists:danh_muc_san_phams,id',
            'trang_thai'           =>   'required|boolean',

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
            'ten_san_pham'         =>   'Tên sản phẩm',
            'gia_ban'              =>   'Giá bán',
            'brand'                =>   'thương hiệu',
            'mo_ta_ngan'           =>   'Mô tả ngắn',
            'mo_ta_chi_tiet'       =>   'Mô tả chi tiết',
            'id_danh_muc'          =>   'Danh mục',
            'trang_thai'           =>   'trạng thái',
            'id'                   =>   'id',
        ];
    }
}
