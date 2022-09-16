@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
    <div class="mb-4">
        <a class="btn btn-warning w-100" href="{{ route('product.create') }}">Create Admin</a>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $product)
                        <tr>
                            <td>
                                <p>{{ $product->name }}</p>
                            </td>
                            <td>
                                <p>{{ $product->email }}</p>
                            </td>
                            <td>
                                <p>{{ $product->alamat }}</p>
                            </td>
                            <td>
                                <p>{{ $product->telepon }}</p>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-warning">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus data ini?')" class="btn btn-warning">
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
