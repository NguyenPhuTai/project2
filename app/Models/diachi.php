<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diachi extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'id_khachhang',
    ];
}
