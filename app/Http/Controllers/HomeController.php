<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\favorites;
use App\Models\khachhang;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function category(Category $cat)
    {
        $product = Product::where('category_id', $cat->id)->paginate(20);
        return view('product',compact('product','cat'));
    }
    public function product(Product $pro)
    {
        $img = $pro-> images()->get();
        $product=Product::where('id', $pro->id)->get();
        return view('detail_product',compact('product','img'));
    }
    public function favorites(Product $pro, khachhang $cus,favorites $favorites)
    {
        // $cus= auth('cus')->user()->id;
        // $favorites2 =favorites::where('id_khachhangs', $cus)->where('id_products', 19)->get();
        $product = Product::paginate(20);
        
        return view('favorites',compact('product'));
    }
    public function check_favorites($pro){
        $data= [
            'id_products'=> $pro,
            'id_khachhangs' => auth('cus')->user()->id
        ];
        if ($acc = favorites::create($data)) {
            return redirect()->back()->with('ok','Đã thêm 1 sản phâm vào yêu thích!');
        }
        
        return redirect()->back()->with('no','Thêm 1 sản phâm vào yêu thích không thành công!');
    }
    public function delete_favorites($pro){
        $data= [
            'id_products'=> $pro,
            'id_khachhangs' => auth('cus')->user()->id
        ];
        if ($acc = favorites::where(['id_products'=> $pro,'id_khachhangs'=> auth('cus')->user()->id])->delete()) {
            return redirect()->back()->with('ok','Đã bỏ 1 sản phâm khỏi yêu thích!');
        }
        
        return redirect()->back()->with('no','Thêm 1 sản phâm vào yêu thích không thành công!');
    }
}
