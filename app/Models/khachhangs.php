<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhangs extends Model
{
    use HasFactory;
    protected $fillable =['id','name','email','email_verified_at','created_at','updated_at','phone','password','remember_token'];
}
