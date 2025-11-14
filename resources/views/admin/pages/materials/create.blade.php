@extends('admin.layout.master')
@section('title', 'Add Materials')

@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Add Materials & Cost</h2>
            <a href="{{ url('/materials') }}" class="btn btn-secondary">
                <i class="fa-solid fa-arrow-left me-1"></i> Back
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{ route('materials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">Material Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Material name">
                        </div>
                        <div class="col-md-6">
                            <label for="units" class="form-label fw-semibold">Unit</label>
                            <select name="unit_id" id="units" class="form-select">
                                <option value="">Select Unit</option>
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>

                                @endforeach

                            </select>
                        </div>

                    </div>



                    <div class="row mb-3">

                        <div class="col-md-6">
                            <label for="cost" class="form-label fw-semibold">Cost/Unit</label>
                            <input type="text" class="form-control" id="cost" name="cost_per_unit" placeholder="Enter cost per unit">
                        </div>



                        {{-- Buttons --}}
                        <div class="text-end">
                            <button type="reset" class="btn btn-light border">Reset</button>
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-floppy-disk me-1"></i> Save Data
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection