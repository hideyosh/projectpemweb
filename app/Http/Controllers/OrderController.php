<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;
use App\Models\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::with('user', 'product')->paginate('5');
        return view('admin.order.index',[
            'title' => 'Order Table',
            'order' => $order,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::with('user', 'product')->get();
        $user = User::with('order')->where('role', 'user')->get();
        $product = product::with('order')->get();

        return view('admin.order.create',[
            'title' => 'Create Order',
            'order' => $order,
            'user' => $user,
            'product' => $product,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
     $request->validate([
            'name_order' => ['required'],
            'product_id' => ['required'],
            'user_id' => ['required'],
            // 'jumlah_product' => ['required'],
            'tanggal' => ['required']
        ]);

        $store = $request->all();
        $order->create($store);

        return redirect()->route('order.index')->withToastSuccess('Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        $orders = Order::with('user', 'product')->get();
        // $user = User::with('order')->where('role', 'user')->get();
        // $product = product::with('order')->get();

        return view('admin.order.view',[
            'title' => 'Detail Order',
            'order' => $order,
            'orders' => $orders,
            // 'user' => $user,
            // 'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        $orders = Order::with('user', 'product')->get();
        $user = User::with('order')->where('role', 'user')->get();
        $product = product::with('order')->get();

        return view('admin.order.edit',[
            'title' => 'Edit Order',
            'product' => $product,
            'user' => $user,
            'order' => $order,
            'orders' => $orders,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        $request->validate([
            'name_order' => ['required'],
            'product_id' => ['required'],
            'user_id' => ['required'],
            // 'jumlah_product' => ['required'],
            'tanggal' => ['required']
        ]);

        $update = $request->all();
        $order->update($update);

        return redirect()->route('order.index')->withToastSuccess('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        $order->delete();
        return redirect()->route('order.index')->withToastSuccess('Deleted Successfully!');
    }
}
