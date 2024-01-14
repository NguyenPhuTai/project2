<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_khachhangs',
        'id_address',
        'note',
        'price',
        'status',
    ];
    public function order(){
        return $this->hasOne(khachhang::class,'id','id_khachhangs');
    }
}
