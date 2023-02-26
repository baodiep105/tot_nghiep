<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewNhanVienController extends Controller
{

    public function main(){
        return view('nhan_vien.master');
    }
    public function ViewChiTietSanPham(){
        return view('nhan_vien.SanPham.chi_tiet_san_pham');
    }
    public function ViewQuanLyAnh(){
        return view('nhan_vien.SanPham.ql_anh');
    }
    public function ViewThemSanPham(){
        return view('nhan_vien.san_pham');
    }
    public function ViewQuanLySanPham(){
        return view('nhan_vien.SanPham.ql_san_pham');
    }
    public function ViewSizeMau(){
        return view('nhan_vien.size');
    }
    public function ViewDanhGia(){
        return view('nhan_vien.danh_gia');
    }
    public function ViewDanhMuc(){
        return view('nhan_vien.danh_muc');
    }
    public function ViewBanner(){
        return view('nhan_vien.ql_banner');
    }
    public function ViewKhuyenMai(){
        return view('nhan_vien.ql_khuyen_mai');
    }
    public function ViewUser(){
        return view('nhan_vien.ql_user');
    }
    public function ViewCapNhatDonHang(){
        return view('nhan_vien.cap_nhat_don_hang');
    }
    public function ViewQLDanhGia(){
        return view ('nhan_vien.danh_gia');
    }
}
