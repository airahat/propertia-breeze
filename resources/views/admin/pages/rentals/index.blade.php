@extends("admin.layout.master")
@section("title", "Rentals")

@section("content")
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Active Rentals</h3>
            <a href="{{ route('rentals.create') }}" class="btn btn-primary">Assign New Rent</a>
        </div>


        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Property</th>
                            <th>Tenant</th>
                            <th>Rent Amount</th>
                            <th>Start Date</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rentals as $data)
                        
                        <tr>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->tenant_name }}</td>
                            <td>{{ $data->monthly_rent }}</td>
                            <td>{{ $data->start_date }}</td>
                            <td class="fw-bolder">{{ $data->due_date }} of each Month</td>
                            <td><span class="badge bg-success">{{ $data->status }}</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-info" title="View"><i class="fa-regular fa-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" title="End"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
            </div>

@endsection