<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Mail\VerifyAccount;
use App\Models\diachi;
use App\Models\khachhang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail ;

class AccountControler extends Controller
{
    public function login(){
        return view('account.login');
    }
    public function verify($email){
        $acc = khachhang::where('email',$email)->whereNULL('email_verified_at')->firstOrFail();
        khachhang::where('email',$email)->update(['email_verified_at'=> date('Y-m-d')]);
        return redirect()->route('account.login')->with('ok','Xác nhận mail thành công!');
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
        if(auth('cus')->check()){
            return view('account.profile');
        }
        return redirect()->route('account.login');
    }
    public function address(){
        $id=auth('cus')->user()->id;
        $data =diachi::all('id','name','id_khachhang','address','phone')->where('id_khachhang',$id);
        $d = diachi::all('id');
            return view('account.address',compact('data'));   
    }
    public function charge_password(){
        return view('account.charge_password');
    }
    public function check_charge_password(Request $req){
        $auth= auth('cus')->user()->password;
        $auth2= auth('cus')->user();
        $req-> validate([
            'OldPassword'=> ['required',function($attr, $value, $fail){
                global $auth;
                if(Hash::check($value,$auth)){
                    $fail ('Your password is not match');
                }
            }],
            'Password'=>'required|min:6',
            'ConfirmPassword'=> 'required|same:Password',
        ]);
        $data['password'] = bcrypt($req->Password);
        if($auth2->update($data)){
            return redirect()->route('home.index')->with('ok','Đổi mật khẩu thành công');
        };
        return redirect()->route('account.charge_password')->with('no','Đổi mật không khẩu thành công');

    }
    public function forgot_password(){
        return view('account.forgot_password');
    }

    public function check_forgot_password(Request $req){
        $req -> validate([
            'email'=> 'required|exists:khachhangs'
        ]);
        $cus = khachhang::where('email',$req->email);
        Mail::to($cus-> email)->send(new ForgotPassword($cus));
    }
}
