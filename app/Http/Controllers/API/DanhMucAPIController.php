<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\DanhMucSanPham as RequestsDanhMucSanPham;
use App\Http\Resources\DanhMucSanPhamResource;
use App\Models\DanhMucSanPham;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class DanhMucAPIController extends Controller
{
    protected $danhMucSanPham;
    public function __construct(DanhMucSanPham $danhMucSanPham)
    {
        $this->danhMucSanPham=$danhMucSanPham;
    }

    public function index(){
        $data=$this->da->paginate(4);
        $dataResource=DanhMucSanPhamResource::collection($data)->response()->getData(true);
         return response()->json([
            'data'=>$dataResource,
         ],Response::HTTP_OK);
    }
    public function createCategory (RequestsDanhMucSanPham $request) {
    //     // $validator = $request->validate([

    //     // ]);

    //     // $validator =  Validator::make($request->all(),[
    //     //     'ten_danh_muc'      =>  'required|max:50',
    //     //     'slug_danh_muc'     =>  'required|max:50',
    //     //     'id_danh_muc_cha'   =>  'required',
    //     //     'is_open'           =>  'required|boolean',
    //     // ],[
    //     //     'required'      =>  ':attribute không được để trống',
    //     //     'max'           =>  ':attribute quá dài',
    //     //     'exists'        =>  ':attribute không tồn tại',
    //     //     'boolean'       =>  ':attribute chỉ được chọn True/False',
    //     //     'unique'        =>  ':attribute đã tồn tại',
    //     // ]);

    //     $rules = [
    //         'ten_danh_muc'      =>  'required',
    //         'id_danh_muc_cha'   =>  'required',
    //         'is_open'           =>  'required|boolean',
    //     ];
    //     $input = $request->only('ten_danh_muc','id_danh_muc_cha','is_open');

    //     $validator = Validator::make($input,$rules);
    //     $random = Str::random(4);
    //     if ($validator->fails()) {
    //         return response()->json(['success' => false, 'error' => $validator->message()]);
    //     } else {
    //         $postCategory = DanhMucSanPham::create([
    //             'ten_danh_muc' =>$request->ten_danh_muc,
    //             'slug_danh_muc' => Str::slug($request->ten_danh_muc). '-' .$random,
    //             'id_danh_muc_cha' =>$request->id_danh_muc_cha,
    //             'is_open' =>$request->is_open,
    //         ]);
    //     }

    //     if(!empty($postCategory)) {
    //         return response()->json(['sucssec' => 'Thêm thành công!']);
    //     }
        $dataCreate=DanhMucSanPham::create([
            'ten_danh_muc'      =>  $request->ten_danh_muc,
            'slug_danh_muc'     => Str::slug($request->ten_danh_muc),
            'id_danh_muc_cha'   =>  $request->id_danh_muc_cha,
            'is_open'           =>$request->is_open,
        ]);
        $danhMucSanPham=$this->danhMucSanPham->create($dataCreate);
        $danhMucSanPhamResource=new DanhMucSanPhamResource($danhMucSanPham);

        return response()->json([
            'data'=>$danhMucSanPhamResource,
        ],Response::HTTP_OK);
    }
}
