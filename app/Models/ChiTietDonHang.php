<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    use HasFactory;

    protected $table='chi_tiet_don_hangs';
    protected $fillable=[
        'id_chi_tiet_san_pham',
        'so_luong',
        'don_gia',
        'don_hang_id'
    ];
}
