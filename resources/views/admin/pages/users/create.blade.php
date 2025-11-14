@extends('admin.layout.master')
@section('title', 'Add New User')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Add New User</h2>
        <a href="{{ url('/users') }}" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Name + Email --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label fw-semibold">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter user's name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-semibold">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter user's email">
                    </div>
                </div>

                {{-- Password + Confirm --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="col-md-6">
                        <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
                    </div>
                </div>

                {{-- Role + Status --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="role" class="form-label fw-semibold">Role</label>
                        <select name="role_id" id="role" class="form-select">
                            <option value="">Select role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            
                            @endforeach
                           
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label fw-semibold">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="active" selected>Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                </div>

                {{-- Photo Upload --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="photo" class="form-label fw-semibold">Profile Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="text-end">
                    <button type="reset" class="btn btn-light border">Reset</button>
                    <button type="submit" class="btn btn-success">
                        <i class="fa-solid fa-floppy-disk me-1"></i> Save User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
