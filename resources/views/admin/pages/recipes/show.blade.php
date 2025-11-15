@extends('admin.layout.master')
@section('title', 'Recipe Details')

@section('content')
<div class="container py-4">

    <h2 class="fw-bold text-white mb-4">Recipe Details</h2>

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ $recipe->name }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong> {{ $recipe->description ?? '-' }}</p>
            <p><strong>Base Area:</strong> {{ $recipe->base_area }} sqft</p>
            <p><strong>Total Cost:</strong> <span class="fw-bold">{{ number_format($recipe->total_cost, 2) }}</span></p>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Materials Used</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Material</th>
                        <th>Unit</th>
                        <th>Quantity</th>
                        <th>Cost per Unit</th>
                        <th>Total Cost</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recipe->materials as $index => $material)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $material->name }}</td>
                            <td>{{ $material->unit->name }}</td>
                            <td>{{ $material->pivot->quantity }}</td>
                            <td>{{ number_format($material->cost_per_unit, 2) }}</td>
                            <td>{{ number_format($material->pivot->cost, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">No materials added.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('recipes.index') }}" class="btn btn-secondary">Back</a>
        <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-warning">Edit</a>
    </div>

</div>
@endsection
