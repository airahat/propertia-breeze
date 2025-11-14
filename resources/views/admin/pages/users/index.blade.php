@extends('admin.layout.master')
@section('title', 'Users')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Users</h2>
        <a href="{{ url('/users/create') }}" class="btn btn-primary">
            <i class="fa-solid fa-user-plus me-1"></i> Add User
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <table class="table table-hover align-middle table-striped">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>

                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $i =>$user)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>
                            <img src="https://placehold.co/60x60" class="rounded-circle border" alt="photo" width="50" height="50">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>

                        <td class="text-center">
                            <a href="#" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
