@extends('admin.layout.master')

@section('title', 'View Message')

@section('content')

<div class="container py-4">
    <div class="card">
        <div class="card-title p-3 fw-bolder">
            <h2>Message Details</h2>
        </div>
        <div class="card-body">

            {{-- Sender Name --}}
            <div class="form-group">
                <label for="name" class="fw-bolder mb-2 mt-3">Sender's Name:</label>
                <input type="text" id="name" disabled class="form-control" 
                    value="{{ $message->getFrom()[0]->personal ?? 'Unknown' }}">
            </div>

            {{-- Sender Email --}}
            <div class="form-group">
                <label for="email" class="fw-bolder mb-2 mt-3">Sender's Email:</label>
                <input type="text" id="email" disabled class="form-control" 
                    value="{{ $message->getFrom()[0]->mail ?? 'Unknown' }}">
            </div>

            {{-- Message Body --}}
            <div class="fw-bolder fs-6 mb-2 mt-3">Message:</div>
            <div class="card-text p-3 border border-secondary" style="white-space: pre-wrap;">
                {!! $message->getHTMLBody(true) ?: nl2br(e($message->getTextBody())) !!}
            </div>

            {{-- Reply Form --}}
            <div class="form-group">
                <label for="reply" class="fw-bolder mb-2 mt-3">Send a Reply:</label>
                <textarea name="reply" class="form-control" id="reply" rows="4"></textarea>
            </div>

            {{-- Submit Button --}}
            <div class="text-center mt-3">
                <button class="btn btn-outline-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

@endsection
