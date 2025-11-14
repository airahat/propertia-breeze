@extends("admin.layout.master")
@section("title", "Tenants")

@section("content")
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold">Active Tenants</h3>
            <a href="/tenants/create" class="btn btn-primary">Add New Tenant</a>
        </div>


        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Name</th>
                            <th>NID</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tenants as $data )
                        
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{ $data->nid }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->address }}</td>
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