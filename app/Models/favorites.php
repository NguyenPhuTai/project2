<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorites extends Model
{
    use HasFactory;
    protected $table = "favorites";
    protected $fillable = [
        'id',
        'id_khachhangs',
        'id_products',
    ];
}
