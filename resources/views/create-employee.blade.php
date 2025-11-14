@extends('admin.layout.master') {{-- or your master layout --}}
@section('title', 'Add New Employee')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Add New Employee</h2>
        <a href="{{ url('/employees') }}" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label fw-semibold">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter employee name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter employee email">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="phone" class="form-label fw-semibold">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+880 1XXX-XXXXXX">
                    </div>
                    <div class="col-md-6">
                        <label for="position" class="form-label fw-semibold">Position</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="e.g., Property Agent">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="salary" class="form-label fw-semibold">Salary</label>
                        <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                    </div>
                    <div class="col-md-6">
                        <label for="photo" class="form-label fw-semibold">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label fw-semibold">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter full address"></textarea>
                </div>

                <div class="text-end">
                    <button type="reset" class="btn btn-light border">Reset</button>
                    <button type="submit" class="btn btn-success">
                        <i class="fa-solid fa-floppy-disk me-1"></i> Save Employee
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
