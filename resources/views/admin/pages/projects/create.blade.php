@extends('admin.layout.master')

@section('title', "Add New Project")
@section('content')
<div class="container py-4">

    <h2 class="mb-4 fw-bold text-white">Add New Construction Project</h2>

    <div class="card">
        <div class="card-body">

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <!-- Project Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Name</label>
                        <input type="text" class="form-control" placeholder="Example: Lake View Residency">
                    </div>

                    <!-- Project Code -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Code (Optional)</label>
                        <input type="text" class="form-control" placeholder="Example: PRJ-2025-001">
                    </div>

                    <!-- Location -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" placeholder="Example: Bashundhara, Dhaka">
                    </div>

                    <!-- Project Status -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option>Planning</option>
                            <option>Under Construction</option>
                            <option>Completed</option>
                            <option>On Hold</option>
                        </select>
                    </div>

                    <!-- Start Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control">
                    </div>

                    <!-- Expected Completion -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Expected Completion</label>
                        <input type="date" class="form-control">
                    </div>

                    <!-- Total Estimated Cost -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Estimated Cost (৳)</label>
                        <input type="number" class="form-control" placeholder="Example: 5000000">
                    </div>

                    <!-- Project Photo -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Image (Optional)</label>
                        <input type="file" class="form-control">
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Project Description</label>
                        <textarea class="form-control" rows="4" placeholder="Describe project details..."></textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary mt-2">Save Project</button>
            </form>

        </div>
    </div>

</div>
@endsection
