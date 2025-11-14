@extends('admin.layout.master')
@section("title", "Sales")
@section('content')
<div class="container py-4">

    <h2 class="fw-bolder text-white mb-4">Sales Records</h2>

    <div class="card">
    <div class="card-header bg-primary text-white rounded-top">
        Sold Properties
    </div>

        <div class="card-body p-0">

            <table class="table  table-striped mb-0">
                <thead>
                    <tr>
                       
                        <th>Property Title</th>
                        <th>Buyer Name</th>
                        <th>Location</th>
                        <th>Buyer Name</th>
                        <th>Sale Price</th>
                        <th>Date Sold</th>
                        <th>Deed</th>
                    </tr>
                </thead>

<tbody>
    @foreach ($sales as $sale)
    <tr>
        <td>{{ $sale->property_title }}</td>
        <td>{{ $sale->buyer_name }}</td>
        <td>{{ $sale->buyer_phone }}</td>
        <td>{{ $sale->sale_price }}</td>
        <td>{{ $sale->paid_price }}</td>
        <td>{{ $sale->sale_date ?? '-' }}</td>
        <td>
            <a href="{{ route('properties.deed', $sale->id) }}">
                <img src="{{ asset('deed-icon.png') }}" style="max-width: 40px" alt="Show Deed" title="Show Deed">
            </a>
        </td>
    </tr>
    @endforeach
</tbody>


            </table>

        </div>
    </div>

</div>
@endsection
