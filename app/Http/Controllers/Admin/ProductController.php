<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::orderBy('id', 'DESC')->paginate(20);
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('name', 'ASC')->select('id', 'name')->get();
        return view('admin.product.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|numeric',
            'sale_price' => 'numeric|lte:price',
            'img' => 'file|mimes:jpg,jpeg,png,gif',
            'category_id' => 'required|exists:categories,id',
        ],);

        $data = $request->only('name', 'price', 'sale_price', 'status', 'description', 'category_id');
        $imag_name = $request->img->hashName();
        $request->img->move(public_path('uploads/product'), $imag_name);
        $data['image'] = $imag_name;
        if ($product = Product::create($data)) {
            if ($request->has('other_img')) {
                foreach ($request->other_img as $img) {
                    $other_name = $img->hashName();
                    $img->move(public_path('uploads/product'), $other_name);
                    ProductImage::create([
                        'image' => $other_name,
                        'product_id' => $product->id,
                    ]);
                }
            }
            return redirect()->route('product.index')->with('ok', 'Them thanh cong');
        }
        return redirect()->back()->with('no', 'Loi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cats = Category::orderBy('name', 'ASC')->select('id', 'name')->get();
        return view('admin.product.edit', compact('cats', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:4',
            'price' => 'required|numeric',
            'sale_price' => 'numeric|lte:price',
            'img' => 'file|mimes:jpg,jpeg,png,gif',
            'category_id' => 'required|exists:categories,id',
        ],);

        $data = $request->only('name', 'price', 'sale_price', 'status', 'description', 'category_id');
        if ($request->has('img')) {
            $img_name = $product->image;
            $image_path = public_path('uploads/product') . '/' . $img_name;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            $imag_name = $request->img->hashName();
            $request->img->move(public_path('uploads/product'), $imag_name);
            $data['image'] = $imag_name;
        }
        if ($product->update($data)) {
            if ($request->has('other_img')) {
                if ($product->images->count() > 0) {
                    foreach ($product->images as $img) {
                        $other_image = $img->image;
                        $other_path = public_path('uploads/product') . '/' . $other_image;
                        if (file_exists($other_path)) {
                            unlink($other_path);
                        }
                    }
                }
                ProductImage::WHERE('product_id', $product->id)->delete();
                foreach ($request->other_img as $img) {
                    $other_name = $img->hashName();
                    $img->move(public_path('uploads/product'), $other_name);
                    ProductImage::create([
                        'image' => $other_name,
                        'product_id' => $product->id,
                    ]);
                }
            }
            return redirect()->route('product.index')->with('ok', 'Sua thanh cong');
        }
        return redirect()->back()->with('no', 'Loi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $img_name = $product->image;
        if ($product->images->count() > 0) {
            foreach ($product->images as $img) {
                $other_image = $img->image;
                $other_path = public_path('uploads/product') . '/' . $other_image;
                if (file_exists($other_path)) {
                    unlink($other_path);
                }
            }
            ProductImage::WHERE('product_id', $product->id)->delete();
            if ($product->delete()) {
                $image_path = public_path('uploads/product') . '/' . $img_name;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }

                return redirect()->route('product.index')->with('ok', 'Xoa thanh cong');
            }
        } else {
            if ($product->delete()) {
                $image_path = public_path('uploads/product') . '/' . $img_name;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }

                return redirect()->route('product.index')->with('ok', 'Xoa thanh cong');
            }
        }
        return redirect()->back()->with('no', 'Loi');
    }

    public function destroyImage(ProductImage $image)
    {
        $img_name = $image->image;

        if ($image->delete()) {
            $image_path = public_path('uploads/product') . '/' . $img_name;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
            return redirect()->back()->with('ok', 'Xoa anh thanh cong');
        }
        return redirect()->back()->with('no', 'Loi');
    }
}
