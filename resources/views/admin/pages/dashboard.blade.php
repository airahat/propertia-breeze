@extends("admin.layout.master")
@section("title", "Dashboard")

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-white fw-bold">🏠 Real Estate Dashboard</h2>

    <!-- Stats Row -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-muted">Total Properties</h5>
                    <h2 class="fw-bold text-primary">128</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-muted">Active Listings</h5>
                    <h2 class="fw-bold text-success">94</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-muted">Apartments for Rent</h5>
                    <h2 class="fw-bold text-info">38</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-muted">Pending Sales</h5>
                    <h2 class="fw-bold text-warning">7</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Properties (For Sale) -->
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-light">
            <h5 class="mb-0">🏘️ Recent Properties for Sale</h5>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Property Name</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Agent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Sunset Villa</td>
                        <td>Gulshan, Dhaka</td>
                        <td>৳32,00,000</td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td>Rafiq Hasan</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Lakeview Apartment</td>
                        <td>Banani, Dhaka</td>
                        <td>৳22,00,000</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                        <td>Nasrin Akter</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dream Homes Duplex</td>
                        <td>Uttara, Dhaka</td>
                        <td>৳45,00,000</td>
                        <td><span class="badge bg-danger">Sold</span></td>
                        <td>Fahim Ahmed</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Green City Plot</td>
                        <td>Mirpur, Dhaka</td>
                        <td>৳18,00,000</td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td>Shamim Reza</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Rental Apartments Section -->
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-light d-flex justify-content-between align-items-center">
            <h5 class="mb-0">🏢 Apartments for Rent</h5>
            <span class="badge bg-info text-dark">38 Total</span>
        </div>
        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Apartment Name</th>
                        <th>Location</th>
                        <th>Monthly Rent</th>
                        <th>Availability</th>
                        <th>Tenant</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Skyline Apartment</td>
                        <td>Dhanmondi, Dhaka</td>
                        <td>৳35,000</td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>City View Flat</td>
                        <td>Mirpur, Dhaka</td>
                        <td>৳28,000</td>
                        <td><span class="badge bg-danger">Rented</span></td>
                        <td>Mahfuz Alam</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Lake Breeze Tower</td>
                        <td>Uttara, Dhaka</td>
                        <td>৳40,000</td>
                        <td><span class="badge bg-success">Available</span></td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Rose Garden Apartment</td>
                        <td>Banani, Dhaka</td>
                        <td>৳38,000</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                        <td>Farhana Khan</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Agent Performance -->
    <div class="card mt-5 shadow-sm mb-5">
        <div class="card-header bg-light">
            <h5 class="mb-0">👨‍💼 Top Performing Agents</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Rafiq Hasan
                    <span class="badge bg-primary rounded-pill">24 Sales</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Nasrin Akter
                    <span class="badge bg-primary rounded-pill">19 Sales</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Fahim Ahmed
                    <span class="badge bg-primary rounded-pill">15 Sales</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

