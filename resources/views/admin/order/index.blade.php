@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
    <div class="mb-4">
        <a class="btn btn-warning w-100" href="{{ route('order.create') }}">Create Order</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Order name</th>
                    <th>Product name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $order)
                        <tr>
                            <td>
                                <p>{{ $order->name_order }}</p>
                            </td>
                            <td>
                                <p>{{ $order->product->name }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('order.show', $order->id) }}" class="btn btn-success">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('order.edit', $order->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('order.destroy', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button href="{{ route('logout') }}"  onclick="return confirm('Apakah anda akan menghapus orderan ini?')" class="btn btn-danger">
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
