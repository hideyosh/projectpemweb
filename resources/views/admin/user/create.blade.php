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
                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="telepon" placeholder="Masukan phone number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukan password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea type="text" class="form-control" name="alamat" placeholder="Masukan alamat" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-warning mt-3 mb-2 w-100">Create</button>
                        </div>
                   </form>
                </div>
            </div>
    </div>
@endsection
