<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\order;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = transaksi::with('order')->where('status', 'lunas')->paginate('5');
        return view('admin.laporan.index',[
            'laporan' => $laporan,
            'title' => 'Report Table',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $laporan)
    {
        $laporan = transaksi::with('order')->first();
        // $order = order::with('transaksi')->get();
        return view('admin.laporan.view',[
            'laporan'=> $laporan,
            // 'order' => $order,
            'title' => 'Report Detail',
        ]);
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
    public function destroy(transaksi $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporan.show')->withToastSuccess('Deleted Successfully!');
    }

    public function exportpdf()
    {
        $laporan = transaksi::with('order')->get();
        $pdf = Pdf::loadview('admin.laporan.pdf',[
            'laporan' => $laporan,
        ]);
        return $pdf->download('laporan.pdf');
    }
}
