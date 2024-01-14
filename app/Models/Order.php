<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable =['id','id_khachhangs','price','id_address','created_at','updated_at','note','status'];
    public function cat(){
        return $this->hasOne(khachhangs::class,'id','id_khachhangs');
    }
    public function add(){
        return $this->hasOne(diachis::class,'id','id_address');
    }
}
