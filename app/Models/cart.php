<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_khachhangs',
        'id_products',
        'quantity',
        'price',
    ];
    public function pro(){
        return $this->hasOne(Product::class,'id','id_products');
    }
}
