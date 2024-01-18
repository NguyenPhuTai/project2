<?php

namespace App\Providers;

use App\Models\cart;
use App\Models\Category;
use App\Models\favorites;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (auth('cus')->check()) {
                $pro = Product::all();
                $cats = Category::where('status',1)->get();
                $fav = favorites::where('id_khachhangs',auth('cus')->user()->id)->count();
                $total_pro = cart::where('id_khachhangs',auth('cus')->user()->id)->sum('quantity');
                $cart = cart::where('id_khachhangs',auth('cus')->user()->id)->get();
                $total_price = cart::where('id_khachhangs',auth('cus')->user()->id)->sum('price');
                $view->with(compact('cats','pro','total_pro','cart','total_price','fav'));
            }
            
            $pro = Product::all();
            $cats = Category::where('status',1)->get();
            $view->with(compact('cats','pro'));
        });
    }
}
