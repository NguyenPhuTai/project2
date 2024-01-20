<?php

use App\Http\Controllers\AccountControler;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiachiController;
use App\Http\Controllers\OrderController;
use App\Models\diachi;
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

Route::group(['prefix' => ''], function () {
    route::get('/', [HomeController::class, 'index'])->name('home.index');
});

Route::group(['prefix' => 'account'], function () {
    route::get('/login', [AccountControler::class, 'login'])->name('account.login');
    route::post('/login', [AccountControler::class, 'check_login']);
});
Route::group(['prefix'=>''], function () {
    route::get('/',[HomeController::class,'index'])->name('home.index');
    route::get('/cat/{cat}',[HomeController::class,'category'])->name('home.category');
    route::get('/pro/{pro}',[HomeController::class,'product'])->name('home.product');
});

Route::group(['prefix'=>'account'], function () {
    route::get('/login',[AccountControler::class,'login'])->name('account.login');
    route::get('/verify-acc/{email}',[AccountControler::class,'verify'])->name('account.verify');
    route::get('/verify-order/{id}',[OrdersController::class,'verify'])->name('order.verify');
    route::post('/login',[AccountControler::class,'check_login']);


    route::get('/logout', [AccountControler::class, 'logout'])->name('account.logout');


    route::get('/register', [AccountControler::class, 'register'])->name('account.register');
    route::post('/register', [AccountControler::class, 'check_register']);
    Route::group(['middleware' => 'customer'], function () {
        route::get('/profile', [AccountControler::class, 'profile'])->name('account.profile');
        route::post('/profile', [AccountControler::class, 'check_profile']);

        route::get('/address', [AccountControler::class, 'address'])->name('account.address');
        route::post('/address', [DiachiController::class, 'check_address']);
        route::post('/address', [DiachiController::class, 'update_address'])->name('account.update_address');
        route::delete('/address', [DiachiController::class, 'delete_address'])->name('account.delete_address');

        route::get('/charge-password', [AccountControler::class, 'charge_password'])->name('account.charge_password');
        route::post('/charge-password', [AccountControler::class, 'check_charge_password']);

        route::get('/address',[AccountControler::class,'address'])->name('account.address');
        route::post('/',[DiachiController::class,'check_address'])->name('account.check_address');
        route::post('/address',[DiachiController::class,'update_address'])->name('account.update_address');
        route::delete('/address',[DiachiController::class,'delete_address'])->name('account.delete_address');

        route::get('/charge-password',[AccountControler::class,'charge_password'])->name('account.charge_password');
        route::post('/charge-password',[AccountControler::class,'check_charge_password']);

        route::get('/favorites',[HomeController::class,'favorites'])->name('home.favorites');
        route::get('/{pro}',[HomeController::class,'check_favorites'])->name('home.check_favorites');
        route::get('/favorites/{pro}',[HomeController::class,'delete_favorites'])->name('home.delete_favorites');

    });

    route::get('/forgot-password', [AccountControler::class, 'forgot_password'])->name('account.forgot_password');
    route::post('/forgot-password', [AccountControler::class, 'check_forgot_password']);

    route::get('/reset-password', [AccountControler::class, 'reset_password'])->name('account.reset_password');
    route::post('/reset-password', [AccountControler::class, 'check_reset_password']);
});

Route::group(['prefix'=>'cart', 'middleware'=> 'customer'], function () {
    Route::get('/',[CartController::class, 'index'])->name('cart.index');
    Route::post('/add',[CartController::class, 'add'])->name('cart.add');
    Route::get('/delete/{product}',[CartController::class, 'delete'])->name('cart.delete');
    Route::get('/update/{product}',[CartController::class, 'update'])->name('cart.update');
    Route::get('/clear',[CartController::class, 'clear'])->name('cart.clear');
});
Route::group(['prefix'=>'order', 'middleware'=> 'customer'], function () {
    Route::get('/',[OrdersController::class, 'index'])->name('order.index');
    Route::get('/order-success/{order}',[OrdersController::class, 'success'])->name('order.success');
    Route::post('/create-order',[OrdersController::class, 'add'])->name('order.add');
    Route::get('/order-history',[OrdersController::class, 'history'])->name('order.history');
    Route::get('/order-history-detail/{order}',[OrdersController::class, 'history_detail'])->name('order.history_detail');
});



Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::get('/order/detail/{id}', [OrderController::class, 'detail'])->name('order.detail');
Route::put('/order/edit/{id}', [OrderController::class, 'update'])->name('order.update');
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::get('product-delete-image/{image}', [ProductController::class, 'destroyImage'])->name('product.destroyImage');
Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');



});