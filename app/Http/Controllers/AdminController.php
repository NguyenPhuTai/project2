<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\khachhang;
use DB;

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

    public function check_login(Request $req)
    {
        khachhang::create([
            'name'=> 'duong',
            'email'=>'duong1@gmail.com',
            'password'=>bcrypt('duong123'),
            'phone'=>'0123121178'   
        ]);

        $req->validate([
            'email' => 'required|email|exists:khachhang',
            'password' => 'required'
        ]);

        $data = $req->only('email', 'password');

        $check = auth()->attempt($data);
        if ($check) {
            return redirect()->route('admin.index')->with('ok', 'ok');
        } else {
            return redirect()->back()->with('err', 'err');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login')->with('logout', 'logout');
    }
}
