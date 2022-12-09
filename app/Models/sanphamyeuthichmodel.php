<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanphamyeuthichmodel extends Model
{
    use HasFactory;

    protected $table='san_Pham_yeu_thich';
    protected $fillable=[
        'id_user',
        'id_san_pham',
    ];
}
