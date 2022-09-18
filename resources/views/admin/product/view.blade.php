@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <tr>
                            <td>Name</td>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{ $product->harga }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $product->desc }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-warning waves-effect waves-light" href="/product" role="button">Kembali</a>
                </div>
            </div>
        </div>
</div>
@endsection
