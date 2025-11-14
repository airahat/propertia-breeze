@extends('admin.layout.master')
@section('title', 'Property Details')

@section('content')

    <div class="container-fluid py-4">

    @if($property)
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-primary mb-0">
                {{ $property->title }} Details
            </h3>
            <a href="{{ route('properties.create') }}" class="btn btn-primary shadow-sm">
                <i class="fa fa-plus me-1"></i> Add New Property
            </a>
        </div>

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-primary text-white rounded-top-4">
                <h5 class="mb-0"><i class="fa-solid fa-building me-2"></i> Property Information</h5>
            </div>

            <div class="card-body p-4">
                <table class="table table-borderless align-middle">
                    <tbody>
                        <tr>
                            <th class="text-muted w-25">Title</th>
                            <td class="fw-semibold text-dark">{{ $property->title }}</td>
                        </tr>

                        <tr>
                            <th class="text-muted w-25">Images</th>
                            <td class="fw-semibold text-dark">
                                @if($property->image)
                                    <img src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->title }}" class="img-fluid" style="max-width: 200px;">
                                @else
                                    No Image Available
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <th class="text-muted">Description</th>
                            <td>{{ $property->description ?? 'N/A' }}</td>
                        </tr>

                        <tr>
                            <th class="text-muted">Type</th>
                            <td><span class="badge bg-info text-dark">{{ $property->type ?? 'N/A' }}</span></td>
                        </tr>

                        <tr>
                            <th class="text-muted">Purpose</th>
                            <td><span class="badge bg-success">{{ $property->purpose ?? 'N/A' }}</span></td>
                        </tr>

                        <tr>
                            <th class="text-muted">Address</th>
                            <td>{{ $property->address ?? 'N/A' }}</td>
                        </tr>

                        <tr>
                            <th class="text-muted">City</th>
                            <td>{{ $property->city ?? 'N/A' }}</td>
                        </tr>

                        <tr>
                            <th class="text-muted">Area</th>
                            <td>{{ $property->area ?? 'N/A' }}</td>
                        </tr>

                        <tr>
                            <th class="text-muted">Size</th>
                            <td>
                                {{ $property->size ?? '0' }} 
                                <span class="fw-bolder" style="font-size: smaller">
                                    {{ $property->measurement ?? '' }}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <th class="text-muted">Price</th>
                            <td class="fw-bold text-success fs-5">
                                ${{ number_format($property->price ?? 0, 2) }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    @else
        <div class="alert alert-danger">
            Property not found.
        </div>
    @endif

</div>


@endsection
