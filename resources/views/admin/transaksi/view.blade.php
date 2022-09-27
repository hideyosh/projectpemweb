@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <tr>
                            <td>Name order</td>
                            <td>{{ $transaksi->order->name_order }}</td>
                        </tr>
                        <tr>
                            <td>Nama product</td>
                            <td>{{ $transaksi->order->product->name }}</td>
                        </tr>
                        <tr>
                            <td>Nama user</td>
                            <td>{{ $transaksi->order->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Total transaksi</td>
                            <td>{{ $transaksi->order->product->harga }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>{{ $transaksi->tanggal }}</td>
                        </tr>
                        <tr>
                            <td>Stauts transaksi</td>
                            <td>{{ $transaksi->status }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-warning waves-effect waves-light" href="/transaksi" role="button">Kembali</a>
                </div>
            </div>
        </div>
</div>
@endsection
