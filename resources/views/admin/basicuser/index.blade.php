@extends('admin.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">{{ $title }}</h1>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($basicuser as $basicuser)
                        <tr>
                            <td>
                                <p>{{ $basicuser->name }}</p>
                            </td>
                            <td>
                                <p>{{ $basicuser->email }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ route('basicuser.show', $basicuser->id) }}" class="btn btn-warning">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('basicuser.edit', $basicuser->id) }}" class="btn btn-warning">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <form action="{{ route('user.destroy', $basicuser->id) }}" method="POST" class="d-inline">
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
