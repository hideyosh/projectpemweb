@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="card">
            <div class="card-body">
               <form action="{{ route('product.store') }}" method="POST" class="mx-2">
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
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan nama">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Price</label>
                        <input type="text" class="form-control" name="harga" placeholder="Masukan harga">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="desc" placeholder="Masukan deskripsi barang" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn bg-warning mt-3 mb-2 w-100">Create</button>
                    </div>
               </form>
            </div>
        </div>
</div>
@endsection
