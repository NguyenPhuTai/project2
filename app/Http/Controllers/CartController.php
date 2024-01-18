<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cart = cart::where('id_khachhangs',auth('cus')->user()->id)->OrderBy("quantity","ASC")->get();
        $total_price = cart::where('id_khachhangs',auth('cus')->user()->id)->sum('price');
        
        return view("cart",compact("cart","total_price"));
    }
    public function add(Product $product, Request $req){
        $quantity=  cart::where(["id_products"=>$req-> id,"id_khachhangs"=>auth('cus')->user()->id])->value('quantity');
        $cartexist = cart::where(["id_products"=>$req-> id,"id_khachhangs"=>auth('cus')->user()->id])->first();
        if($cartexist){
            $quan = $quantity + $req->quantity;
            $pri = $req->price * $quan;
            cart::where(["id_products"=>$req-> id,"id_khachhangs"=>auth('cus')->user()->id])
            ->update(['quantity'=> $quan,'price'=> $pri]);
            return redirect()->route('cart.index')->with('ok','Đã thêm 2 sản phẩm vào giỏ hàng!');
        }else{
            $data = [
                'id_khachhangs'=>auth('cus')->user()->id,
                'id_products' =>$req->id,
                'price' => $req->price,
                'quantity' => $req->quantity,
            ];
            if ($acc = cart::create($data)) {
                return redirect()->route('cart.index')->with('ok','Đã thêm 1 sản phẩm vào giỏ hàng!');
            }
        }

    }
    public function delete($product){
        if ($acc = cart::where('id',$product)->delete()) {
            return redirect()->back()->with('ok','Đã bỏ 1 sản phâm khỏi giỏ hàng!');
        }
        
        return redirect()->back()->with('no','Thêm 1 sản phâm vào yêu thích không thành công!');
    }
    public function clear(){
        return view("cart");
    }
}
