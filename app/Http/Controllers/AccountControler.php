<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function check_register(){
        
    }

    public function fogot_password(){
        return view('account.fogot_password');
    }

    public function check_fogot_password(){
        
    }
}
