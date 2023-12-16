<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable =['image','product_id','status'];
    public function cat(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
