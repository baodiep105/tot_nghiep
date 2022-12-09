<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use Illuminate\Http\Request;

class giohangController extends Controller
{
    public function kiemTraSoLuong(Request $request)
    {
        if($request->so_luong<0){
            return response()->json([
                'status'=>false,
                'message'=>'Số lượng phải lớn hơn 0',
            ]);
        };
        $id_san_pham_chi_tiet = ChiTietDonHang::where('id_sanpham', $request->id_san_pham)
            ->where('id_mau', $request->id_mau)
            ->where('id_size', $request->id_size)
            ->select('id', 'so_luong')
            ->get();
        if ($request->so_luong >= $id_san_pham_chi_tiet->so_luong) {
            return response()->json([
                'status' => false,
                'so_luong' => $id_san_pham_chi_tiet->so_luong,
                'message' => 'Số lượng sản phẩm trong kho không đủ',
            ]);
        } else {
            return response()->json([
                'status' => true,
            ]);
        }
    }

    // public function addCart(Request $request){
    //     if($request->so_luong<0){
    //         return response()->json([
    //             'status'=>false,
    //             'message'=>'Số lượng phải lớn hơn 0',
    //         ]);
    //     };

    //     $chi_tiet_don_hang=ChiTietDonHang::create([
    //         'id_sanpham'=>id
    //     ]);
    }
}
