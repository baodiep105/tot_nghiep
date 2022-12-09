<?php

namespace App\Http\Controllers;

use App\Http\Requests\mauRequest;
use App\Models\MauSacModel;
use Illuminate\Http\Request;

class mauController extends Controller
{

    public function getData()
    {

        // $sanPham =DB::table('san_phams')
        //             ->join('hinh_anh','san_phams.id','hinh_anh.id')
        //             ->select('san_phams.ten_san_pham','hinh_anh.hinh_anh')
        //             ->get();
        $mau = MauSacModel::orderBy('created_at', 'DESC')->get();
        return response()->json([
            'mau'  => $mau,
        ]);
    }
    public function create(mauRequest $request)
    {
        $data = MauSacModel::create([
            'ten_mau' => $request->ten_mau,
            'hex' => $request->ma_mau,
        ]);
        return response()->json([
            'trangThai' =>  true,
            'data' => $data,
        ]);
    }
    public function delete($id)
    {
        $mau = MauSacModel::find($id);
        if ($mau) {
            $mau->delete();
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
