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

    public function check_login(){
        
    }

    public function register(){
        return view('account.register');
    }

    public function check_register(Request $req){
        $req-> validate([
            'name'=>'required|min:6|max:100',
            'email'=>'required|email|min:6|max:100|unique:khachhang',
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

    public function fogot_password(){
        return view('account.fogot_password');
    }

    public function check_fogot_password(){
        
    }
}
