@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('transaksi.store') }}" method="POST" class="mx-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Order</label>
                        <select name="order_id" class="form-select" aria-label="Default select example">
                               @foreach ($order as $order)
                               <option value="{{ $order->id }}">{{ $order->name_order }}</option>
                               @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Pembayaran</label>
                        <select name="jenis_pembayaran" class="form-select" aria-label="Default select example">
                                <option value="transfer">Transfer</option>
                                <option value="langsung">Langsung</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Status</label>
                        <select name="status" class="form-select" aria-label="Default select example">
                                <option value="lunas">Lunas</option>
                                <option value="belum_lunas">Belum lunas</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Total harga</label>
                        <input type="text" class="form-control" name="total_transaksi" placeholder="Masukan Total Transaksi">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Masukan tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="desc" placeholder="Masukan deskripsi transaksi" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-warning mt-3 mb-2 w-100">Create</button>
                    </div>
               </form>
            </div>
        </div>
</div>
@endsection
