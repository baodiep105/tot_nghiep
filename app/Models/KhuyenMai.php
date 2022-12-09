<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;
    protected $table='khuyen_mai';
    protected $fillable=[
        'id_san_pham',
        'ty_le',
        'is_open',
    ];
}
