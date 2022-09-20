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
        // $order = DB::table('orders')
        // ->join('products', 'orders.product_id', 'products.id')
        // ->join ('users', 'orders.user_id', 'users.id')->get();

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
     $validated =  $request->validate([
            'name' => ['required'],
            'product_id' => ['required'],
            'user_id' => ['required'],
            'jumlah' => ['required','max:255'],
            'tanggal' => ['required']
        ]);

        // $store = $request->all();
        $validated['user_id'] = auth()->user()->id;
        $order->create($$validated);

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
