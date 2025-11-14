@extends('admin.layout.master')
@section('title', 'Rentals')

@section('content')

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Assign Rent to Tenant</h3>
            <a href="#" class="btn btn-secondary">Back</a>
        </div>


        <div class="card border-0 shadow-sm p-4">
            <form action="{{ route('rentals.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Select Property</label>
                    <select class="form-select" name="property_id">
                        <option value="">Choose...</option>
                        @foreach ($properties as $property )
                        
                        <option value="{{ $property->id }}">{{ $property->title }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="tenantName" class="form-label">Tenant Name</label>
                    <select name="tenant_id" class="form-select" id="tenantName">
                        <option value="">Choose...</option>
                        @foreach ($tenants as $data )
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
           
                </div>


                <div class="mb-3">
                    <label class="form-label">Monthly Rent(৳)</label>
                    <input type="number" name="monthly_rent" class="form-control" placeholder="Enter rent amount" />
                </div>


                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Due Day (1-31) of Each Month</label>
                        <input type="text" name="due_date" class="form-control"/>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Security Deposit(৳)</label>
                    <input type="text" name="security_deposit" class="form-control" placeholder="Enter rent amount" />
                </div>



                <div class="mb-3">
                    <label for="tenantName" class="form-label">Rental Status</label>
                    <select name="status_id" class="form-select" id="tenantName">
                        <option value="">Choose...</option>
                        @foreach ($status as $data )
                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                        @endforeach
                    </select>
           
                </div>



                <button class="btn btn-primary w-100">Assign Rent</button>
            </form>
        </div>
    </div>

@endsection
