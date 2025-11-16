@extends('admin.layout.master')
@section('title', 'Create Agent')
@section('content')
    <div class="container-fluid py-4 ">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h4 class="card-title fw-bold text-white">Create New Agent</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('agents.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Agent</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection