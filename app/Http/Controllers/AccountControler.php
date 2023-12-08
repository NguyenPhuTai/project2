<?php

namespace App\Http\Controllers;

use App\Mail\VerifyAccount;
use App\Models\khachhang;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class AccountControler extends Controller
{
    public function login(){
        return view('account.login');
    }
    public function logout(){
        auth('cus')->logout();
        return redirect()->route('home.index')->with('ok','Đăng xuất thành công');
    }

    public function check_login(Request $req){
        $req-> validate([
            'email'=>'exists:khachhangs',
            'password'=>'required',
        ],
    [
        'email.required'=>'Họ và tên không được để trống',
        'name.min'=> 'Họ và tên không được dưới 6 kí tự',
    ]);
        $data = $req->only('email','password');
        $check = auth('cus')->attempt($data);
        if($check){
            if(auth('cus')->user()->email_verified_at == ''){
                auth('cus')->logout();
                return redirect()->back()->with('no','your account is not verify');
            }
            return redirect()->route('home.index')->with('ok','welcome back');
        }
        return redirect()->back()->with('no','Your account or password not match');
    }

    public function register(){
        return view('account.register');
    }

    public function check_register(Request $req){
        $req-> validate([
            'name'=>'required|min:6|max:100',
            'email'=>'required|email|min:6|max:100|unique:khachhangs',
            'phone'=>'required|numeric|digits:10',
            'password'=>'required|min:6|',
            'confirm_password'=>'required|same:password',
        ],
    [
        'name.required'=>'Họ và tên không được để trống',
        'name.min'=> 'Họ và tên không được dưới 6 kí tự',
    ]);
        $data = $req-> only('name','email','phone');
        $data['password']= bcrypt($req->password);
        if($acc=khachhang::Create($data)){
            Mail::to($acc->email)->send(new VerifyAccount($acc));
            dd('ok');
        }
        dd('no ok');
    }
    public function profile(){
        return view('account.profile');
    }
    public function fogot_password(){
        return view('account.fogot_password');
    }

    public function check_fogot_password(){
        
    }
}
