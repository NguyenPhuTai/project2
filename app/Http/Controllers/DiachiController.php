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
}
