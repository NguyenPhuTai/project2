<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Product extends Model
{
    use HasFactory;
    protected $appends = ['favorited'];
    protected $fillable =['name','price','sale_price','image','category_id','description','status'];
    public function cat(){
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function images(){
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function getFavoritedAttribute(){
        if(auth('cus')->check()){
            $favorited = favorites::where(['id_products'=>$this->id,'id_khachhangs'=>auth('cus')->user()->id])->first();
            return $favorited ? true :false;
        }
    }

}
