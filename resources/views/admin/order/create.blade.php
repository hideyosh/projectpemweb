@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('user.store') }}" method="POST" class="mx-2">
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
                        <label class="form-label">Nama Product</label>
                        <select name="product_id" class="form-select" aria-label="Default select example">
                               @foreach ($product as $product)
                               <option value="{{ $product->id }}">{{ $product->name }}</option>
                               @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama User</label>
                        <select name="user_id" class="form-select" aria-label="Default select example">
                               @foreach ($user as $user)
                               <option value="{{ $user->id }}">{{ $user->name }}</option>
                               @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_product" class="form-label">Jumlah</label>
                        <input type="text" class="form-control" name="jumlah_product" placeholder="Masukan jumlah">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_product" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal" placeholder="Masukan tanggal">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-warning mt-3 mb-2 w-100">Create</button>
                    </div>
               </form>
            </div>
        </div>
</div>
@endsection
