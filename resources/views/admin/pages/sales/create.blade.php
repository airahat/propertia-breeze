@extends('admin.layout.master')
@section('title', 'Sell Property')

@section('content')
    <div class="container py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Record a Property Sale</h3>
            <a href="#" class="btn btn-secondary">Back</a>
        </div>


        <div class="card border-0 shadow-sm p-4">
            <form action="{{ route('sales.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Select Property</label>
                    <select class="form-select" name="property_id" id="propertySelect">
                        <option selected disabled>Select a property...</option>
                        @foreach ($properties as $property)
                            <option value="{{ $property['id'] }}">{{ $property['title'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Address</label>
                        <input type="text" id="address" name="address" class="form-control shadow-sm"
                            placeholder="Ex: House 12, Road 3, Banani, Dhaka">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">City</label>
                        <input type="text" id="city" name="city" class="form-control shadow-sm"
                            placeholder="Ex: Dhaka">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Area</label>
                        <input type="text" id="area" name="area" class="form-control shadow-sm"
                            placeholder="Ex: locality">
                    </div>
                    <div>

                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Size</label>
                        <input type="text" id="size" name="size" class="form-control shadow-sm"
                            placeholder="Ex: 1200">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label fw-semibold">Measurement</label>
                        <input type="hidden" id="measurement_id" name="measurement_id" >
                        <input type="text" id="measurement"  class="form-control shadow-sm">
                    </div>

                </div>

                <div class="mb-3">
                    <label class="form-label">Buyer Name</label>
                    <input type="text" name="buyer_name" class="form-control" placeholder="Enter buyer name" />
                </div>


                <div class="mb-3">
                    <label class="form-label">Buyer Phone</label>
                    <input type="text" name="buyer_phone" class="form-control" placeholder="Enter buyer phone" />
                </div>


                
                <div class="mb-3">
                    <label class="form-label">Selling Price (৳)</label>
                    <input type="number" id="price" name="price" class="form-control" placeholder="Enter sold price" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Paid Price (৳)</label>
                    <input type="number" id="paid_price" name="paid_price" class="form-control" placeholder="Enter sold price" />
                </div>

                <div class="mb-3">
                    <label class="form-label">Remaining Price (৳)</label>
                    <input type="number" id="remaining_price" name="remaining_price" class="form-control" placeholder="Enter sold price"  />
                </div>


                <div class="row g-3 mb-3">

                    <div class="col-md-6">
                        <label class="form-label">Payment Status</label>
                        <select class="form-select" name="payment_status_id">
                            <option value="">--Select Payment Status--</option>
                            @foreach ($paymentStatus as $status )
                            <option value="{{ $status['id'] }}">{{ $status['name'] }}</option>
                            
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Notes (optional)</label>
                    <textarea class="form-control" name="notes" rows="3" placeholder="Any additional details..."></textarea>
                </div>


                <button type="submit" class="btn btn-primary w-100">Save Sale Record</button>
            </form>
        </div>


    @endsection
