@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-white text-dark mb-4">
                    <div class="card-body">User</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="bi bi-caret-right-fill"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-white text-dark mb-4">
                    <div class="card-body">Product</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="bi bi-caret-right-fill"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-white text-dark mb-4">
                    <div class="card-body">Order</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="bi bi-caret-right-fill"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-white text-dark mb-4">
                    <div class="card-body">Transaction</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-dark stretched-link" href="#">View Details</a>
                        <div class="small text-dark"><i class="bi bi-caret-right-fill"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user me-1"></i>
                Pengguna Yang Baru Bergabung
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</main>
@endsection
