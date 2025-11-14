@extends('admin.layout.master')

@section('content')
<div class="container">
    <h2>Recipes</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <a href="{{ route('recipes.create') }}" class="btn btn-primary">Add New Recipe</a>
    </div>

    <table class="table table-bordered table-striped bg-white">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Base Area (sqft)</th>
                <th>Total Cost</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($recipes as $index => $recipe)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $recipe->name }}</td>
                    <td>{{ $recipe->description ?? '-' }}</td>
                    <td>{{ $recipe->base_area }}</td>
                    <td>{{ number_format($recipe->total_cost, 2) }}</td>
                    <td>
                        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-sm btn-info">View</a>
                        <!-- Optional: Edit/Delete buttons -->
                        <!--
                        <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                        -->
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No recipes found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
