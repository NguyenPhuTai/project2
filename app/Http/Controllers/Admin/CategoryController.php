<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::orderBy('id', 'ASC')->paginate(20);
        return view('admin.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');

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
            'name'=>'required|min:4'
        ],[

        ]);
        $data=$request->only('name','status');
        if (Category::create($data)) {
            return redirect()->route('category.index')->with('ok', 'Them thanh cong');
        }
        return redirect()->back()->with('no', 'Loi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data = Category::orderBy('name', 'ASC')->paginate(20);
        return view('admin.category.edit',compact('data','category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required|min:4'
        ],[

        ]);
        $data=$request->only('name','status');
        
        if ($category->update($data)) {
            return redirect()->route('category.index')->with('ok', 'Sua thanh cong');
        }
        return redirect()->back()->with('no', 'Loi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return redirect()->route('category.index')->with('ok', 'Xoa thanh cong');
        }
        return redirect()->back()->with('no', 'Loi');
    }
}
