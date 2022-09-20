@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
    <div class="mb-4">
        <a class="btn btn-warning w-100" href="{{ route('product.create') }}">Create Product</a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $product)
                        <tr>
                            <td>
                                <p>{{ $product->name }}</p>
                            </td>
                            <td>
                                <p>{{ $product->harga }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('product.show', $product->id) }}" class="btn btn-warning">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus {{ $product->name }}?')" class="btn btn-warning">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
