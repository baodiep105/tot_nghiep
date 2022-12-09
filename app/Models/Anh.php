<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anh extends Model
{
    use HasFactory;

    protected $table='hinh_anh';
    protected $fillable=[
        'anh',
        'id_san_pham',
    ];
}
