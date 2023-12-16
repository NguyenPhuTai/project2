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

        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //$hienThiEmail=Auth('admin')->user()->name;
        //kiểm tra trường remember có được chọn hay không
        if (Auth::guard('admin')->attempt($arr)) {
            //dd($hienThiEmail);
            //return redirect()->route('admin.index');$user = Auth::user()->email();
            return redirect()->route('admin.index')->with('ok', 'Dang nhap thanh cong');
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {
            return redirect()->back()->with('err', 'Dang nhap that bai');
            //dd('tài khoản và mật khẩu chưa chính xác');
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('logout', 'logout');
    }
}
