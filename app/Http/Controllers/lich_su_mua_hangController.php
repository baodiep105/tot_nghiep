<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDonHang;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lich_su_mua_hangController extends Controller
{
    public function getData()
    {
        $email_user = auth()->user()->email;
        $donhang = DB::table('don_hangs')
            ->where('email', $email_user)
            ->orderBy('created_at', 'DESC')
            ->get();
        return response()->json([
            'status' => 'success',
            'donhang' => $donhang,
        ]);
    }

    public function delete($id)
    {
        $donHang = DonHang::find($id);
        if ($donHang) {
            $donHang->delete();
            $chiTietDonHang = ChiTietDonHang::where('don_hang_id', $id)->delete();
            return response()->json(['status' => true]);
        } else {
            return response()->json([
                'status'  =>  false,
            ]);
        }
    }

    public function detail($id)
    {
        $chitietdonhang = DB::table('chi_tiet_don_hangs')
            ->join('san_phams', 'chi_tiet_don_hangs.san_pham_id', 'san_phams.id')
            ->where('don_hang_id', $id)
            ->select('chi_tiet_don_hangs.*', 'san_phams.ten_san_pham')
            ->get();
        $total = 0;
        foreach ($chitietdonhang as $ey => $value) {
            $total += $value->so_luong * $value->don_gia;
        }
        return response()->json([
            'status' => 'success',
            'data' => $chitietdonhang,
        ]);
    }
}
