<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;

    protected $table='don_hangs';

    protected $fillable=[
        'email',
        'tong_tien',
        'tien_giam_gia',
        'thuc_tra',
        'status',
        'dia_chi',
        'nguoi_nhan',
        'sdt',
        'ghi_chu'
    ];
}
