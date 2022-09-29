@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
<h1 class="mt-4 mb-4">{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-editable table-nowrap align-middle table-edits">
                    <tr>
                        <td>Nama order</td>
                        <td>{{ $laporan->order->name_order }}</td>
                    </tr>
                    <tr>
                        <td>Nama product</td>
                        <td>{{ $laporan->order->product->name }}</td>
                    </tr>
                    <tr>
                        <td>Nama user</td>
                        <td>{{ $laporan->order->user->name }}</td>
                    </tr>
                    <tr>
                        <td>Total transaksi</td>
                        <td>{{ $laporan->order->product->harga }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pembayaran</td>
                        <td>{{ $laporan->jenis_pembayaran }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>{{ $laporan->tanggal }}</td>
                    </tr>
                    <tr>
                        <td>Stauts transaksi</td>
                        <td>{{ $laporan->status }}</td>
                    </tr>
                </table>
                <a class="btn btn-warning waves-effect waves-light" href="/laporan" role="button">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
