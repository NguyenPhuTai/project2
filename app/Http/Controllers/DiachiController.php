<?php

namespace App\Http\Controllers;

use App\Models\diachi;
use Illuminate\Http\Request;

class DiachiController extends Controller
{
    public function check_address(Request $req){
        $req-> validate([
            'name'=>'required|min:6|max:100',
            'address'=>'required',
            'phone'=>'required|numeric|digits:10',

        ],
    [
        'name.required'=>'Họ và tên không được để trống',
        'phone.min'=> 'Họ và tên không được dưới 6 kí tự',
    ]);
        $data = $req->only('name','phone','address','id_khachhang');
        if($acc=diachi::Create($data)){
            return redirect()->route('account.address')->with('ok','Tạo dịa chỉ thành công');
        }
        return redirect()->route('account.address')->with('no','Tạo dịa chỉ thất bại');
    }
    public function update_address(Request $req){
        $req-> validate([
            'name'=>'required|min:6|max:100',
            'address'=>'required',
            'phone'=>'required|numeric|digits:10',

        ],
    [
        'name.required'=>'Họ và tên không được để trống',
        'phone.min'=> 'Họ và tên không được dưới 6 kí tự',
    ]);
    $data = $req->only('name','phone','address','id');
    $up = diachi::where('id',$req->id)->update($data);
    if($up){
        return redirect()->route('account.address')->with('ok','Thay đổi dịa chỉ thành công');
        }
    else{    
        return redirect()->route('account.address')->with('no','Thay đổi dịa chỉ thất bại');
        }
    }
    public function delete_address(Request $req){
        $id_address = $req->all('id');
        $del = diachi::where('id',$id_address)->delete();
        if($del){
            return redirect()->route('account.address')->with('ok','Xóa dịa chỉ thành công');
        }
    }

}
