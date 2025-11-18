@extends('admin.layout.master')
@section('title', 'Add Rent Collection')
@section('content')
<div class="container-fluid py-4">

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header bg-success d-flex justify-content-between align-items-center">
                    <h4 class="card-title fw-bold text-white">Add Rent Collection</h4>
                    <a href="{{ route('rent-collection.index') }}" class="btn btn-outline-light btn-sm">Back to List</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('rent-collection.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="rental_id" class="form-label">Rental</label>
                            <select name="rental_id" id="rental_id" class="form-select" required>
                                <option value="">-- Select Rental --</option>
                                @foreach($rentals as $rental)
                                    <option value="{{ $rental->id }}">
                                        {{ $rental->tenant_name }} - {{ $rental->property_name }} ({{ $rental->monthly_rent }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="month" class="form-label">Month</label>
                            <input type="date" name="month" id="month" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="number" name="amount" id="amount" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="payment_date" class="form-label">Payment Date</label>
                            <input type="date" name="payment_date" id="payment_date" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="status_id" class="form-label">Status</label>
                            <select name="status_id" id="status_id" class="form-select" required>
                                <option value="">-- Select Status --</option>
                                @foreach($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Save Collection</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
