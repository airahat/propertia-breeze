@extends('admin.layout.master')
@section('title', 'Add Property Images')

@section('content')


@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Add Property Image(s)</h2>
        <a href="{{ url('/users') }}" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left me-1"></i> Back
        </a>
    </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <form action="{{route('images.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- Photo Upload --}}
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="propertyImage" class="fs-1"> <i class="fa-solid fa-images fs-4"></i></label>
                            <div class="input-group mb-3 d-none">
                                    
                                <input type="file" name="image[]" id="propertyImage" class="form-control form-control-lg" placeholder="Add Images"  multiple>
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-images fs-4"></i></span>
                            </div>
                        </div>
                    </div>

                    {{-- Buttons --}}
                    <div class="text-end">
                        <button type="reset" class="btn btn-light border">Reset</button>
                        <button type="submit" class="btn btn-success">
                            <i class="fa-solid fa-floppy-disk me-1"></i> Save Image
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
