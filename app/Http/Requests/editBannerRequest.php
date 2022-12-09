<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editBannerRequest extends FormRequest
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
    public function rules(){
        return [
            'hinh_anh_1_edit'      =>  'required',
            'hinh_anh_2_edit'      =>  'required',
            'hinh_anh_3_edit'      =>  'required',
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
        'banner_1'      =>  'banner 1',
        'banner_2'     =>  'banner 2',
        'banner_3'   =>  'banner 3'
    ];
}
}
