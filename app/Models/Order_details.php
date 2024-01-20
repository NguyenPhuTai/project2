<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;
    protected $fillable =['id','id_order','id_khachhangs','id_products','created_at','updated_at','quantity','price'];
}
