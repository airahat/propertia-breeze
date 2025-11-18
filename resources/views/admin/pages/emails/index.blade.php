@extends('admin.layout.master')
@section('title', 'Inbox')
@section('content')

@php use Carbon\Carbon; @endphp

<div class="container py-3">
    <h3 class="fw-bolder text-white">Inbox</h3>
    <table class="table table-bordered table-hover table-striped bg-white">
        <thead>
            <tr class="bg-light">
                <th>From</th>
                <th>Subject</th>
                <th>Preview</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $msg)
            <tr @if(!$msg->getFlags()->contains('\Seen')) class="fw-bold" @endif>
                <td>
                    {{ $msg->getFrom()[0]->personal ?? $msg->getFrom()[0]->mail ?? 'Unknown' }}
                    <br>
                    <small class="text-muted">{{ $msg->getFrom()[0]->mail ?? 'Unknown' }}</small>
                </td>
                <td>{{ $msg->getSubject() ?? 'No Subject' }}</td>
                <td>{{ Str::limit(strip_tags($msg->getTextBody() ?: $msg->getHTMLBody(true)), 50) }}</td>
                <td>{{ $msg->getDate() ? Carbon::parse($msg->getDate())->format('d M Y H:i') : '' }}</td>
                <td>
                    <a href="{{ url('admin/emails/read/'.$msg->getUid()) }}" class="btn btn-sm btn-primary">View</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">No emails found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
