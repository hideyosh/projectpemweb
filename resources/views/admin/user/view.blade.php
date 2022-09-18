@extends('admin.app')
@section('content')
{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-3">Data Siswa</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>

                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tabel Siswa</h4>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <tr>
                            <td>Nama</td>

                            <td>{{ $user->name }}</td>
                            </tr>

                            <tr>
                            <td>Email</td>

                            <td>{{ $user->email }}</td>
                            </tr>
                        </table>
                        <a class="btn btn-primary waves-effect waves-light" href="/user" role="button">Kembali</a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div> --}}
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <tr>
                            <td>Name</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>{{ $user->role }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{ $user->telepon }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $user->alamat }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-warning waves-effect waves-light" href="/user" role="button">Kembali</a>
                </div>
            </div>
        </div>
</div>
@endsection
