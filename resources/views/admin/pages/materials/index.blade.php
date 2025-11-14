@extends('admin.layout.master')

@section ('title', 'Materials & Costs')

@section('content')


<div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-white">Materials & Costs</h3>
            <a href="/materials/create" class="btn btn-primary">Add New Material</a>
        </div>


        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>SL</th>
                            <th>Material Name</th>
                            <th>Units</th>
                            <th>Cost/Unit</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materials as $i=> $material )
                        
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $material->name }}</td>
                            <td>{{ $material->unit }}</td>
                            <td>{{ $material->cost }}</td>
                            <td>2027-01-01</td>
                            
                        </tr>
                        @endforeach








                    </tbody>
            </div>







@endsection