<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khachhang;
use App\Models\Admin;
use DB;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function check_login(Request $request)
    {
        // khachhang::create([
        //     'name'=> 'duong',
        //     'email'=>'duong1@gmail.com',
        //     'password'=>bcrypt('duong123'),
        //     'phone'=>'0123121178'   
        // ]);

    //     $req->validate([
    //         'email' => 'required|email|exists:khachhang',
    //         'password' => 'required'
    //     ]);

    //     $data = $req->only('email', 'password');

    //     $check = auth('adm')->attempt($data);
    //     if ($check) {
    //         return redirect()->route('admin.index')->with('ok', 'ok');
    //     } else {
    //         return redirect()->back()->with('err', 'van sai cai gi day');
    //     }

    $arr = [
        'email' => $request->email,
        'password' => $request->password,
    ];
    if ($request->remember == trans('remember.Remember Me')) {
        $remember = true;
    } else {
        $remember = false;
    }
    //kiểm tra trường remember có được chọn hay không
    
    if (Auth::guard('admin')->attempt($arr)) {
        
        //dd('đăng nhập thành công');
        return redirect()->route('admin.index')->with('ok', 'ok');
        //..code tùy chọn
        //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
    } else {
        return redirect()->back()->with('err', 'van sai cai gi day');
        //dd('tài khoản và mật khẩu chưa chính xác');
        //...code tùy chọn
        //đăng nhập thất bại hiển thị đăng nhập thất bại
    }
}
    


    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login')->with('logout', 'logout');
    }
}
