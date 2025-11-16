@extends('admin.layout.master')
@section('title', 'Create Agent')
@section('content')
    <div class="container-fluid py-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header bg-success d-flex justify-content-between align-items-center">
                        <h4 class="card-title fw-bold text-white">All Agents</h4>
                        <a href="{{ route('agents.create') }}" class="btn btn-outline-light btn-sm">Add New Agent</a>
                    </div>
                    <div class="card-body">
                       <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agents as $agent)
                                <tr>
                                    <td>{{ $agent->id }}</td>
                                    <td>{{ $agent->name }}</td>
                                    <td>{{ $agent->email }}</td>
                                    <td>{{ $agent->phone }}</td>
                                    <td>
                                        <a href="{{ route('agents.show', $agent->id) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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