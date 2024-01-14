<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::orderBy('id', 'ASC')->paginate(20);
        return view('admin.order.index',compact('data'));
    }
    public function edit(Order $order,Request $request)
    {
        $data=DB::table('orders')->where('id','=',$request->id)->get();
        
        return view('admin.order.edit', compact('order','data'));
        
        
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:0,1',
        ]);
        $order = Order::find($id);
        if (!$order) {
            return redirect()->back()->with('error', 'Loi');
        }
        $order->status = $request->status;
        $order->save();
        return redirect()->route('order.index')->with('success', 'Status updated successfully.');
    }
}
