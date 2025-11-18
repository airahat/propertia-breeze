@extends('admin.layout.master')
@section('title', 'Rent Collection')
@section('content')
<div class="container-fluid py-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-success d-flex justify-content-between align-items-center">
                    <h4 class="card-title fw-bold text-white">Rent Collection List</h4>
                    <a href="{{ route('rent-collection.create') }}" class="btn btn-outline-light btn-sm">Add New Collection</a>
                </div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tenant</th>
                                <th>Property</th>
                                <th>Month</th>
                                <th>Amount</th>
                                <th>Payment Date</th>
                                <th>Status</th>
                                <th>Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($collections as $collection)
                                <tr>
                                    <td>{{ $collection->id }}</td>
                                    <td>{{ $collection->rental->tenant->name ?? 'N/A' }}</td>
                                    <td>{{ $collection->rental->property->title ?? 'N/A' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($collection->month)->format('F Y') }}</td>
                                    <td>{{ number_format($collection->amount, 2) }}</td>
                                    <td>{{ $collection->payment_date ? \Carbon\Carbon::parse($collection->payment_date)->format('F d, Y') : '-' }}</td>
                                    <td>
                                        <span class="badge bg-{{ $collection->status->name == 'Paid' ? 'success' : 'warning' }}">
                                            {{ $collection->status->name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('rent-collection.receipt', $collection->id) }}" target="_blank" class="btn btn-outline-primary btn-sm">
                                            <i class="fa-solid fa-receipt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
