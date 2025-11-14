@extends('admin.layout.master')

@section ('title', 'Projects')

@section('content')


    <div class="container ">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-white">Projects</h3>
            <a href="/rent" class="btn btn-primary">Assign New Rent</a>
        </div>


        <div class="card border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Project Code</th>
                            <th>Project Name</th>
                            <th>Location</th>
                            <th>Start Date</th>
                            <th>Est. Completion</th>
                            <th>Est. Cost</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PRJ-2026-01</td>
                            <td>Modern Apartment in Banani</td>
                            <td>Dhaka</td>
                            <td>2026-01-01</td>
                            <td>2027-01-01</td>
                            <td>2.5cr</td>
                            <td>{{ Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolor ipsam eveniet adipisci iure totam earum voluptas necessitatibus accusantium repellat, optio soluta maiores incidunt nobis nisi rem alias vero perferendis!", 10) }}
                            </td>
                            <td><span class="badge bg-success">Active</span></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-info" title="View"><i
                                        class="fa-regular fa-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary" title="Edit"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-danger" title="End"><i
                                        class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>






@endsection