<?php

namespace App\Http\Controllers;

use App\Http\Requests\sizeRequest;
use App\Models\sizeModel;
use Illuminate\Http\Request;
use Size;

class sizeController extends Controller
{
    public function index()
    {
        return view('admin.size');
    }

    public function getData()
    {

        // $sanPham =DB::table('san_phams')
        //             ->join('hinh_anh','san_phams.id','hinh_anh.id')
        //             ->select('san_phams.ten_san_pham','hinh_anh.hinh_anh')
        //             ->get();
        $size = sizeModel::orderBy('created_at', 'DESC')->get();
        return response()->json([
            'size'  => $size,
        ]);
    }
    public function create(sizeRequest $request)
    {
        $data = sizeModel::create([
            'size' => $request->size,
        ]);
        return response()->json([
            'trangThai' =>  true,
            'data' => $data,
        ]);
    }
    public function delete($id)
    {
        $size = sizeModel::find($id);
        if ($size) {
            $size->delete();
            return response()->json([
                'status'  =>  true,

            ]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }
}
