<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\DanhMucAPIController;
use App\Http\Requests\DanhMucSanPham as RequestsDanhMucSanPham;
use App\Http\Resources\DanhMucSanPhamResource;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Response as HttpResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\editDanhMucRequest;
use App\Http\Requests\updatdeDanhMucRequest;
use App\Models\ChiTietSanPhamModel;
use App\Models\DanhMucSanPham;
use App\Models\SanPham;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Page;
use toan_cuc;

class DanhMucSanPhamController extends Controller
{
    protected $danhMucSanPham;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.danh_muc');
    }

    // public function createCategory (Request $request) {
    //     // $validator = $request->validate([

    //     // ]);

    //     $validator =  Validator::make($request->all(),[
    //         'ten_danh_muc'      =>  'required|max:50',
    //         'slug_danh_muc'     =>  'required|max:50',
    //         'id_danh_muc_cha'   =>  'required',
    //         'is_open'           =>  'required|boolean',
    //     ],[
    //         'required'      =>  ':attribute không được để trống',
    //         'max'           =>  ':attribute quá dài',
    //         'exists'        =>  ':attribute không tồn tại',
    //         'boolean'       =>  ':attribute chỉ được chọn True/False',
    //         'unique'        =>  ':attribute đã tồn tại',
    //     ]);

    //     // $rules = [
    //     //     'ten_danh_muc'      =>  'required',
    //     //     'id_danh_muc_cha'   =>  'required',
    //     //     'is_open'           =>  'required|boolean',
    //     // ];
    //     // $input = $request->only('ten_danh_muc','slug_danh_muc','id_danh_muc_cha','is_open');

    //     // $validator = Validator::make($input,$rules);
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
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(RequestsDanhMucSanPham $request)
    {
        $danhmuc = DanhMucSanPham::create([
            'ten_danh_muc'      =>  $request->ten_danh_muc,
            'slug_danh_muc'     =>  Str::slug($request->ten_danh_muc),
            'hinh_anh'          =>  $request->hinh_anh,
            'id_danh_muc_cha'   =>  empty($request->id_danh_muc_cha) ? 0 : $request->id_danh_muc_cha,
            'is_open'           =>  $request->is_open,

        ]);

        return response()->json([
            'trangThai'         =>  true,
            'danhMuc'           => $danhmuc,
        ]);
    }

    public function getData()
    {
        $danh_muc_cha = DanhMucSanPham::where('id_danh_muc_cha', 0)->get();

        $sql = 'SELECT a.*, b.ten_danh_muc as `ten_danh_muc_cha`
                FROM `danh_muc_san_phams` a LEFT JOIN `danh_muc_san_phams` b
                on a.id_danh_muc_cha = b.id';

        $data = DB::select($sql);
        $collection = collect($data);
        $count = $collection->count();
        $list = array();
        for ($i = $count - 1; $i >= 0; $i--) {
            array_push($list, $collection[$i]);
        }
        return response()->json([
            'list'          => $list,
            'danh_muc_cha'  => $danh_muc_cha,
        ]);
    }

    public function doiTrangThai($id)
    {
        $danh_muc = DanhMucSanPham::find($id);
        if ($danh_muc) {
            $danh_muc->is_open = !$danh_muc->is_open;
            $danh_muc->save();
            return response()->json([
                'trangThai'         =>  true,
                'tinhTrangDanhMuc'  =>  $danh_muc->is_open,
            ]);
        } else {
            return response()->json([
                'trangThai'         =>  false,
            ]);
        }
    }

    public function update(updatdeDanhMucRequest $request)
    {

        $danh_muc = DanhMucSanPham::find($request->idEdit);

        $danh_muc->update([
            'ten_danh_muc'      =>  $request->ten_danh_muc_edit,
            'slug_danh_muc'     =>  Str::slug($request->ten_danh_muc_edit),
            'hinh_anh'          =>  $request->hinh_anh_edit,
            'id_danh_muc_cha'   =>  empty($request->id_danh_muc_cha_edit) ? 0 : $request->id_danh_muc_cha_edit,
            'is_open'           =>  $request->is_open_edit,
        ]);
        return response()->json([
            'status' => true,
            'data'  => $request->all(),
        ]);
    }

    public function edit($id)
    {
        $danh_muc = DanhMucSanPham::find($id);
        if ($danh_muc) {
            $danh_muc_cha = DanhMucSanPham::where('id_danh_muc_cha', 0)->get();
            return response()->json([
                'status'  =>  true,
                'danhMuc'    =>  $danh_muc,
                'danhMucCha' => $danh_muc_cha,
            ]);
        } else {
            // toastr()->error("Danh mục không tồn tại!")
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $danh_muc = DanhMucSanPham::find($id);
        if ($danh_muc) {
            DB::table('san_phams')->join('chi_tiet_san_pham', 'san_phams.id', 'chi_tiet_san_pham.id_sanpham')->where('id_danh_muc', $id)->delete();
            $danh_muc->delete();
            return response()->json([
                'status'  =>  true,
            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }

    public function search(Request $request)
    {
        if ($request->search == "") {
            $data = DB::table('danh_muc_san_phams as a')->leftJoin('danh_muc_san_phams as b', 'a.id_danh_muc_cha', 'b.id')->select('a.*', 'b.ten_danh_muc as ten_danh_muc_cha')->get();
        } else
            $data =             $data = DB::table('danh_muc_san_phams as a')
                ->leftJoin('danh_muc_san_phams as b', 'a.id_danh_muc_cha', 'b.id')
                ->select('a.*', 'b.ten_danh_muc as ten_danh_muc_cha')
                ->Where('a.ten_danh_muc', 'like', '%' . $request->search . '%')
                ->orWhere('a.created_at', 'like', '%' . $request->search . '%')
                ->get();
        // dd($data);
        return response()->json([
            'search' => $data
        ]);
    }
}
