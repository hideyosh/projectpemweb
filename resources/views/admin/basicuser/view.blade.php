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
                            <td>{{ $basicuser->name }}</td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>{{ $basicuser->role }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $basicuser->email }}</td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>{{ $basicuser->telepon }}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{ $basicuser->alamat }}</td>
                        </tr>
                    </table>
                    <a class="btn btn-warning waves-effect waves-light" href="/basicuser" role="button">Kembali</a>
                </div>
            </div>
        </div>
</div>
@endsection
