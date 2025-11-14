@extends('admin.layout.master')

@section('content')
<div class="container">
    <h2>Add Recipe</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('recipes.store') }}" class="bg-white p-3">
        @csrf

        <!-- Recipe Info -->
        <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label>Base Area (sqft)</label>
            <input type="number" name="base_area" class="form-control" required>
        </div>

        <!-- Materials Table -->
        <h4>Materials</h4>
        <table class="table" id="materials_table">
            <thead>
                <tr>
                    <th>Material</th>
                    <th>Unit</th>
                    <th>Cost/unit</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- First Row -->
                <tr class="material-row">
                    <td>
                        <select name="materials[0][id]" class="form-control material-select" required>
                            <option value="">Select Material</option>
                            @foreach($materials as $material)
                                <option value="{{ $material->id }}" data-unit="{{ $material->unit->name }}" data-cost="{{ $material->cost_per_unit }}">
                                    {{ $material->name }}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td class="unit"></td>
                    <td class="cost_per_unit"></td>
                    <td>
                        <input type="number" name="materials[0][quantity]" class="form-control" min="0" value="0">
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-row">Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="button" id="add_material" class="btn btn-secondary mb-3">Add Material</button>
        <br>
        <button type="submit" class="btn btn-primary">Save Recipe</button>
    </form>
</div>

<!-- Hidden Template for New Material Row -->
<template id="material-row-template">
    <tr class="material-row">
        <td>
            <select name="" class="form-control material-select" required>
                <option value="">Select Material</option>
                @foreach($materials as $material)
                    <option value="{{ $material->id }}" data-unit="{{ $material->unit->name }}" data-cost="{{ $material->cost_per_unit }}">
                        {{ $material->name }}
                    </option>
                @endforeach
            </select>
        </td>
        <td class="unit"></td>
        <td class="cost_per_unit"></td>
        <td>
            <input type="number" name="" class="form-control" min="0" value="0">
        </td>
        <td>
            <button type="button" class="btn btn-danger remove-row">Remove</button>
        </td>
    </tr>
</template>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    let rowIndex = 1;

    // Function to update unit and cost/unit on material selection
    function updateRow(row) {
        let select = row.querySelector('.material-select');
        let unitCell = row.querySelector('.unit');
        let costCell = row.querySelector('.cost_per_unit');

        select.addEventListener('change', function() {
            let selected = select.options[select.selectedIndex];
            unitCell.textContent = selected.dataset.unit || '';
            costCell.textContent = selected.dataset.cost || '';
        });
    }

    // Initialize first row
    updateRow(document.querySelector('.material-row'));

    // Add new row
    document.getElementById('add_material').addEventListener('click', function() {
        let template = document.getElementById('material-row-template');
        let newRow = template.content.cloneNode(true);

        // Set unique names for new row
        newRow.querySelector('.material-select').setAttribute('name', `materials[${rowIndex}][id]`);
        newRow.querySelector('input[type="number"]').setAttribute('name', `materials[${rowIndex}][quantity]`);

        // Append to table
        document.querySelector('#materials_table tbody').appendChild(newRow);

        // Initialize change event for new row
        updateRow(document.querySelector('#materials_table tbody tr:last-child'));

        rowIndex++;
    });

    // Remove row
    document.querySelector('#materials_table').addEventListener('click', function(e) {
        if(e.target.classList.contains('remove-row')) {
            e.target.closest('tr').remove();
        }
    });
});
</script>
@endsection
