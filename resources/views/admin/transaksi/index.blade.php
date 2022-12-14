@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
    <div class="mb-4">
        <a class="btn btn-warning w-100" href="{{ route('transaksi.create') }}">Create Transaction</a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name order</th>
                    <th>Date</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksis as $transaksi)
                        <tr>
                            <td>
                                <p>{{ $transaksi->order->name_order }}</p>
                            </td>
                            <td>
                                <p>{{ $transaksi->order->tanggal }}</p>
                            </td>
                            <td>
                                <p>{{ $transaksi->status }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus transaksi ini?')" class="btn btn-danger">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            <td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
