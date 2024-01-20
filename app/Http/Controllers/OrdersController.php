<?php

namespace App\Http\Controllers;

use App\Mail\Verifyorder;
use App\Models\cart;
use App\Models\diachi;
use App\Models\khachhang;
use App\Models\order_detail;
use App\Models\orders;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    public function index(){
        $add = diachi::where('id_khachhang',auth('cus')->user()->id)->get();
        
        return view("order",compact("add"));
    }
    public function add(Request $req){
        $auth = auth("cus")->user();
        $data =[
            'id_khachhangs' => $req->khachhangs,
            'id_address'=>$req->address,
            'price'=>$req->payment,
            'note'=>$req->note,
        ];
       
        if ($or = orders::create($data)) {
            foreach( $auth->carts as $cart ){
                $data2= [
                    'id_order' => $or->id,
                    'id_khachhangs'=> $cart->id_khachhangs,
                    'id_products'=> $cart->id_products,
                    'quantity'=> $cart->quantity,
                    'price'=> $cart->price,
                ];
                order_detail::create($data2);
            }
            cart::where('id_khachhangs',auth('cus')->user()->id)->delete();
            
            Mail::to($auth->email)->send(new Verifyorder($or));
            return redirect()->route('order.success',$or->id)->with('ok','Đặt hàng thành công!');
        }
    }
    public function success($order){
        $add = orders::where('id',$order)->value('id_address');
        $ad = diachi::where('id',$add)->get();
        $price = orders::where('id',$order)->value('price');
        
        $cus = auth('cus')->user();
        
        $detail = order_detail::where('id_order', $order)->get();
        
        return view("order_success",compact("ad","cus","detail","price"));
    }
    public function verify($id){
        $acc = orders::where('id',$id)->whereNULL('status')->firstOrFail();
        orders::where('id',$id)->update(['status'=> 1]);
        return redirect()->route('home.index')->with('ok','Xác nhận mail thành công!');
    }
    public function history(){
        $or = orders::where('id_khachhangs',auth('cus')->user()->id)->get();
        // dd($or);
        return view("order_history",compact('or'));
    }
    public function history_detail($order){
        $or = orders::where('id',$order)->get();
        $detail = order_detail::where('id_order',$order)->get();
        // dd($detail);
        return view("order_history_detail",compact('or','detail'));
    }
}
