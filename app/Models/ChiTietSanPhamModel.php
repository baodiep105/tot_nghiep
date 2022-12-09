<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietSanPhamModel extends Model
{
    use HasFactory;

    protected $table='chi_tiet_san_pham';
    protected $fillable=[
        'id_sanpham',
        'id_mau',
        'id_size',
        'sl_chi_tiet',
        'status',
    ];
}
