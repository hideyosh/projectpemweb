<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::with('order')->where('status', 'belum_lunas')->paginate('5');
        return view('admin.transaksi.index', [
            'title' => 'Transaction Table',
            'transaksi' => $transaksi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = transaksi::with('order')->get();
        $order = order::with('transaksi')->get();

        return view('admin.transaksi.create',[
            'title' => 'Create Transaction',
            'transaksi' => $transaksi,
            'order' => $order,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, transaksi $transaksi)
    {
        $request -> validate([
            'order_id' => ['required'],
            'jenis_pembayaran' => ['required'],
            'desc' => ['required'],
            // 'total_transaksi' => ['required'],
            'tanggal' => ['required'],
        ]);


        $store = $request->all();
        $transaksi->create($store);

        return redirect()->route('transaksi.index')->withToastSuccess('Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        $transaksis = transaksi::with('order')->get();
        $order = order::with('transaksi')->get();

        return view('admin.transaksi.view',[
            'title' => 'Detail Transaction',
            'transaksis' => $transaksis,
            'transaksi' => $transaksi,
            'order' => $order,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        $transaksis = transaksi::with('order')->get();
        $order = order::with('transaksi')->get();

        return view('admin.transaksi.edit',[
            'title' => 'Edit Transaction',
            'transaksis' => $transaksis,
            'transaksi'=> $transaksi,
            'order' => $order,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        $request -> validate([
            'order_id' => ['required'],
            'jenis_pembayaran' => ['required'],
            'desc' => ['required'],
            // 'total_transaksi' => ['required'],
            'tanggal' => ['required'],
        ]);


        $update = $request->all();
        $transaksi->update($update);

        return redirect()->route('transaksi.index')->withToastSuccess('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')->withToastSuccess('Deleted Successfully!');
    }
}
