<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate('10');
        return view('admin.product.index', [
            'product' => $product,
            'title' => 'Product table'

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create',[
            'title' => 'Create Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product )
    {
        $validated = $request->validate([
            'name' => ['required','max:30'],
            'harga' => ['required','max:255'],
            'desc' => ['required','max:255']
        ]);

        $store = $request->all();
        $store['password'] = Hash::make($request->password);
        $product->create($store);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.product.view',[
            'product' => $product,
            'title' => 'Detail Product',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'product' => $product,
            'title' => 'Edit Product'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => ['required','max:30'],
            'harga' => ['required','max:255'],
            'desc' => ['required','max:255']
        ]);

        $update = $request->all();
        $product->update($update);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
