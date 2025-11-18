@extends('admin.layout.master')

@section('title', 'Projects')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-white">Projects</h3>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Add New Project</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Location</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->project_name }}</td>
                            <td>{{ $project->location }}</td>
                            <td>{{ $project->start_date }}</td>
                            <td>{{ $project->end_date }}</td>
                            <td>
                                @if($project->status == 'Active')
                                    <span class="badge bg-success">{{ $project->status }}</span>
                                @elseif($project->status == 'Completed')
                                    <span class="badge bg-primary">{{ $project->status }}</span>
                                @else
                                    <span class="badge bg-secondary">{{ $project->status }}</span>
                                @endif
                            </td>
                            <td>{{ Str::limit($project->description, 50) }}</td>
                            <td>
                                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-sm btn-outline-info" title="View">
                                    <i class="fa-regular fa-eye"></i>
                                </a>
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete" onclick="return confirm('Are you sure?')">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No projects found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
