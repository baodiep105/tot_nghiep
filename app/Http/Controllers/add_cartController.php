<?php

namespace App\Http\Controllers;

use App\Http\Requests\donhangRequest;
use App\Models\ChiTietDonHang;
use App\Models\ChiTietSanPhamModel;
use App\Models\DonHang;
use Illuminate\Http\Request;

class add_cartController extends Controller
{
    public function DonHang(donhangRequest $request)
    {
        if($request->don_hang>0){
            $donHang = DonHang::create([
                'email' => $request->email,
                'tong_tien' => $request->tong_tien,
                'tien_giam_gia' => $request->tien_giam,
                'thuc_tra' => $request->thuc_tra,
                'status' => 0,
                'dia_chi' => $request->dia_chi,
                'nguoi_nhan' => $request->nguoi_nhan,
                'sdt' => $request->sdt,
                'ghi_chu' => $request->ghi_chu,
            ]);
            // dd($request->don_hang[0]);
            foreach ($request->don_hang as $value) {
                $chiTietDonHang = ChiTietDonHang::create([
                    'id_chi_tiet_san_pham' => $value['id_chi_tiet_san_pham'],
                    'don_gia' => $value['don_gia'],
                    'so_luong' => $value['so_luong'],
                    'don_hang_id' => $donHang->id,
                ]);
            }
            return response()->json([
                'status' => 'success',
                'email' => $donHang->email,
            ]);
        }
        return response()->json([
            'status'=>'success',
            'message'=>'giỏ hàng rỗng',
        ]);

    }
}
