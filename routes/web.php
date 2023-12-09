<?php

use App\Http\Controllers\AccountControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can profile web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>''], function () {
    route::get('/',[HomeController::class,'index'])->name('home.index');
});

Route::group(['prefix'=>'account'], function () {
    route::get('/login',[AccountControler::class,'login'])->name('account.login');
    route::post('/login',[AccountControler::class,'check_login']);

    route::get('/logout',[AccountControler::class,'logout'])->name('account.logout');
    
    route::get('/register',[AccountControler::class,'register'])->name('account.register');
    route::post('/register',[AccountControler::class,'check_register']);

    route::get('/profile',[AccountControler::class,'profile'])->name('account.profile');
    route::post('/profile',[AccountControler::class,'check_profile']);

    route::get('/charge-password',[AccountControler::class,'charge_password'])->name('account.charge_password');
    route::post('/charge-password',[AccountControler::class,'check_charge_password']);

    route::get('/forgot-password',[AccountControler::class,'forgot_password'])->name('account.forgot_password');
    route::post('/forgot-password',[AccountControler::class,'check_forgot_password']);

    route::get('/reset-password',[AccountControler::class,'reset_password'])->name('account.reset_password');
    route::post('/reset-password',[AccountControler::class,'check_reset_password']);
});


Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AdminController::class,'check_login']);

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
});

//route::get('/taotest', [UserController::class,'getLogin']);
//route::post('/taotest', [UserController::class,'postLogin']);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
