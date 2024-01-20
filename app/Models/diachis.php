<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diachis extends Model
{
    use HasFactory;
    protected $fillable =['id','name','phone','address','created_at','updated_at','id_khachhang'];
}
