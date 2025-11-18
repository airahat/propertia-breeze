@extends('admin.layout.master')

@section('title', "Add New Project")
@section('content')
<div class="container py-4">

    <h2 class="mb-4 fw-bold text-white">Add New Construction Project</h2>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <!-- Project Name -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Name</label>
                        <input type="text" class="form-control" name="project_name" placeholder="Example: Lake View Residency" value="Malibagh Residence">
                    </div>

                    <!-- Project Code -->
                    {{-- <div class="col-md-6 mb-3">
                        <label class="form-label">Project Code (Optional)</label>
                        <input type="text" class="form-control"  placeholder="Example: PRJ-2025-001" value="PRJ-2025-0123">
                    </div> --}}

                    <!-- Location -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Example: Bashundhara, Dhaka" value="Malibagh, Dhaka">
                    </div>

                    <!-- Project Status -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option>Planning</option>
                            <option>Under Construction</option>
                            <option>Completed</option>
                            <option>On Hold</option>
                        </select>
                    </div>

                    <!-- Start Date -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="start_date">
                    </div>

                    <!-- Expected Completion -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Expected Completion</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>

                    <!-- Total Estimated Cost -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Estimated Cost (৳)</label>
                        <input type="number" name="cost" class="form-control" placeholder="Example: 5000000" value="520000">
                    </div>

                    <!-- Project Photo -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Project Image (Optional)</label>
                        <input type="file" class="form-control">
                    </div>

                    <!-- Description -->
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Project Description</label>
                        <textarea class="form-control" name="description" rows="4" placeholder="Describe project details..."> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa voluptates veniam non sunt iste nam deserunt suscipit quod ea nemo fuga dignissimos corrupti sed, recusandae culpa esse deleniti similique. Voluptatibus? </textarea>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary mt-2">Save Project</button>
            </form>

        </div>
    </div>

</div>
@endsection
