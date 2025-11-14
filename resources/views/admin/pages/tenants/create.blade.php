@extends('admin.layout.master')
@section('title', 'Add New Tenant')

@section('content')

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Add New Tenant</h3>
            <a href="#" class="btn btn-secondary">Back</a>
        </div>


        <div class="card border-0 shadow-sm p-4">
            <form action="{{ route('tenants.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Tenant Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter tenant name" />
                </div>


                <div class="mb-3">
                    <label class="form-label">NID</label>
                    <input type="text" name="nid" class="form-control" placeholder="Enter rent amount" />
                </div>


                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" min="1" max="31" />
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control" name="address" rows="3" placeholder="Any additional details..."></textarea>
                </div>


                <button type="submit" class="btn btn-primary w-100">Add Tenant</button>
            </form>
        </div>
    </div>

@endsection
