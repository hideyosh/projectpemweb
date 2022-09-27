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
                            <td>{{ $order->name_order }}</td>
                        </tr>
                        <tr>
                            <td>Nama product</td>
                            <td>{{ $order->product->name }}</td>
                        </tr>
                        <tr>
                            <td>Nama user</td>
                            <td>{{ $order->user->name }}</td>
                        </tr>
                        {{-- <tr>
                            <td>Jumlah</td>
                            <td>{{ $order->jumlah_product }}</td>
                        </tr> --}}
                        <tr>
                            <td>Tanggal</td>
                            <td>{{ $order->tanggal }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-warning waves-effect waves-light" href="/order" role="button">Kembali</a>
                </div>
            </div>
        </div>
</div>
@endsection
