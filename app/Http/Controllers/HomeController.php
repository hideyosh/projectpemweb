<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\order;
use App\Models\transaksi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totaluser = User::count();
        $totalproduct = product::count();
        $totalorder = order::count();
        $totaltransaksi = transaksi::count();

        return view('admin.dashboard.index', [
            'title' => 'Dashboard',
            'totaluser' => $totaluser,
            'totalproduct' => $totalproduct,
            'totaltransaksi' => $totaltransaksi,
            'totalorder' => $totalorder,
        ]);
    }
}
