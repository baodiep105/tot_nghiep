<?php

namespace App\Http\Controllers;

use App\Http\Requests\donhangRequest;
use App\Models\ChiTietDonHang;
use App\Models\ChiTietSanPhamModel;
use App\Models\DonHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;
use stdClass;

class add_cartController extends Controller
{
    public function DonHang(donhangRequest $request)
    {
        foreach ($request->don_hang as $value) {
            $san_pham = ChiTietSanPhamModel::find($value['id_chi_tiet_san_pham']);
            if ($value['so_luong'] > $san_pham->sl_chi_tiet) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Số lượng trong kho không đủ',
                ]);
            }
        }
        if ($request->don_hang > 0) {
            $donHang = DonHang::create([
                'email' => $request->email,
                'tong_tien' => $request->tong_tien,
                'tien_giam_gia' => $request->tien_giam,
                'thuc_tra' => $request->thuc_tra,
                'status' => 2,
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
                $chi_tiet_san_pham = ChiTietSanPhamModel::where('id', $value['id_chi_tiet_san_pham'])->first();
                $chi_tiet_san_pham->sl_chi_tiet -= $value['so_luong'];
                $chi_tiet_san_pham->save();
            }
            return response()->json([
                'status' => 'success',
                'email' => $donHang->email,
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'giỏ hàng rỗng',
        ]);
    }
    public function LichSuDonHang(Request $request)
    {
        // dd($request->email);
        if ($request->email != null) {
            $donhang = DB::table('don_hangs')
                ->where('email', $request->email)
                ->orderBy('created_at', 'DESC')
                ->get();
            return response()->json([
                'status' => 'success',
                'donhang' => $donhang,
            ]);
        }
        return response()->json([
            'status' => 'erorr',
        ]);
    }

    public function detail($id)
    {
        $san_pham=array();
        $chitietdonhang = DB::table('chi_tiet_san_pham')
            ->join('chi_tiet_don_hangs', 'chi_tiet_san_pham.id', 'chi_tiet_don_hangs.id_chi_tiet_san_pham')
            ->join('san_phams', 'chi_tiet_san_pham.id_sanpham', 'san_phams.id')
            ->join('mau_sac', 'chi_tiet_san_pham.id_mau', 'mau_sac.id')
            ->join('size', 'chi_tiet_san_pham.id_size', 'size.id')
            ->join('don_hangs', 'chi_tiet_don_hangs.don_hang_id', 'don_hangs.id')
            ->where('don_hang_id', $id)
            ->select('chi_tiet_don_hangs.*','mau_sac.hex', 'chi_tiet_san_pham.*', 'san_phams.ten_san_pham', 'mau_sac.ten_mau', 'size.size',)
            ->get();
        $total = 0;
        // $chitietdonhang->total=0;
        // dd($chitietdonhang->donhang);
        foreach ($chitietdonhang as $ey => $value) {
            $sanpham=new stdClass;
            $sanpham=$value;
            $sanpham->total=$value->don_gia*$value->so_luong;
            $total += $value->so_luong * $value->don_gia;
            array_push($san_pham,$sanpham);
        }
        $hinh_anh = DB::table('hinh_anh')->get();
        $id = array();
        foreach ($chitietdonhang as $value) {
            array_push($id, $value->id);
        }
        $anh = array();
        foreach ($id as $key)
            foreach ($hinh_anh as $value) {
                if ($key == $value->id_san_pham) {
                    array_push($anh, $value);
                    break;
                }
            }

        foreach ($chitietdonhang as $value) {
            foreach ($anh as $key) {
                if ($value->id == $key->id_san_pham) {
                    $value->hinh_anh = $key->hinh_anh;
                    break;
                }
            }
        }
        return response()->json([
            'status' => 'success',
            'data' => $san_pham,
            'total'=> $total,
        ]);
    }
}
