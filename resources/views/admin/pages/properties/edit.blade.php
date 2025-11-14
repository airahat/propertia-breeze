@extends('admin.layout.master')
@section('title', 'Edit Property')

@section('content')
    <div class=" py-3">
        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-primary mb-0">Add New Property</h3>
            <a href="{{ route('properties.index') }}" class="btn btn-outline-secondary">
                <i class="fa fa-arrow-left me-1"></i> Back to List
            </a>
        </div>

        {{-- Card Form --}}
        <div class="card border-0 shadow-lg rounded-4">
            <div class="card-header bg-primary text-white rounded-top-4">
                <h5 class="mb-0"><i class="fa-solid fa-building me-2"></i> Update Property</h5>
            </div>

            <div class="card-body p-4">
                <form action="
            {{ route('properties.store') }}
              " method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    {{-- Property Title --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Property Title</label>
                        <input type="text" name="title" class="form-control shadow-sm"
                            placeholder="Ex: Modern Apartment in Banani" required value="{{ $property['title'] }}">
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="description" class="form-control shadow-sm" rows="4"
                            placeholder="Write details about the property..." required >{{ $property['description'] }}</textarea>
                    </div>

                    {{-- Dropdowns --}}
                    <div class="row g-3 mb-3">
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Property Type</label>
                            <select name="property_type_id" class="form-select shadow-sm" required>
                                <option value="">-- Select Type --</option>
                                @foreach ($propertyTypes as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Purpose</label>
                            <select name="property_purpose_id" class="form-select shadow-sm" required>
                                <option value="">-- Select Purpose --</option>
                                @foreach ($propertyPurposes as $purpose)
                                    <option value="{{ $purpose->id }}">{{ $purpose->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Price (৳)</label>
                            <input type="number" name="price" class="form-control shadow-sm" placeholder="Ex: 35000"
                                required value="{{ $property['price'] }}">
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Address</label>
                            <input type="text" name="address" class="form-control shadow-sm"
                                placeholder="Ex: House 12, Road 3, Banani, Dhaka" value="{{ $property['address'] }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-semibold">City</label>
                            <input type="text" name="city" class="form-control shadow-sm" placeholder="Ex: Dhaka" value="{{ $property['city'] }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Area</label>
                            <input type="text" name="area" class="form-control shadow-sm" placeholder="Ex: locality" value="{{ $property['area'] }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-semibold">Size</label>
                            <input type="number" name="size" class="form-control shadow-sm" placeholder="Ex: 1200" value="{{ $property['size'] }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-semibold" for="measurement">Measurement</label>
                            <select class="form-select shadow-sm" name="measurement" id="measurement">
                                <option value="">--Select Measurement</option>
                                @foreach ($measurements as $measurement)
                                    <option value="{{ $measurement['id'] }}">{{ $measurement['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Upload Images --}}
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Upload Images</label>
                        <input type="file" name="images[]" class="form-control shadow-sm" multiple>
                        <small class="text-muted">You can upload multiple images.</small>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                        <i class="fa fa-save me-1"></i> Save Property
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Optional: Hover and Shadow Effects --}}
    <style>
        .card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.15);
        }
    </style>
@endsection
