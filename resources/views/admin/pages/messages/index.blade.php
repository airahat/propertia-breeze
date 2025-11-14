@extends('admin.layout.master')
@section("title", "Messages")
@section('content')
<div class="container py-3 ">
        <h3 class="fw-bolder text-white">Messages</h3>
        <table class="table table-bordered table-hover table-striped bg-white">
            <thead>
                <tr class="bg-light">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($messages as $msg) --}}
                <tr>
                    <td>
                        {{-- {{ $msg->name }} --}}
                        A.I.Rahat
                    </td>
                    <td>
                        {{-- {{ $msg->email }} --}}
                        abc@example.com
                    </td>
                    <td>
                        {{ Str::limit("Totam earum voluptas necessitatibus accusantium repellat, Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolor ipsam eveniet adipisci iure totam earum voluptas necessitatibus accusantium repellat, optio soluta maiores incidunt nobis nisi rem alias vero perferendis!", 50) }}
                        {{-- {{ Str::limit($msg->message, 50) }} --}}
                    </td>
                    <td>
                        <a href="/messages/show" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                {{-- @endforeach --}}
                {{-- @foreach($messages as $msg) --}}
                <tr>
                    <td>
                        {{-- {{ $msg->name }} --}}
                        Mr. Rayhan
                    </td>
                    <td>
                        {{-- {{ $msg->email }} --}}
                        rayhan@example.com
                    </td>
                    <td>
                        {{ Str::limit("Lrepellat, optio soluta maiores incidunt nobi orem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolor ipsam eveniet adipisci iure totam earum voluptas necessitatibus accusantium repellat, optio soluta maiores incidunt nobis nisi rem alias vero perferendis!", 50) }}
                        {{-- {{ Str::limit($msg->message, 50) }} --}}
                    </td>
                    <td>
                        <a href="/messages/show" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                {{-- @endforeach --}}
                {{-- @foreach($messages as $msg) --}}
                <tr>
                    <td>
                        {{-- {{ $msg->name }} --}}
                        Mr. Sohel
                    </td>
                    <td>
                        {{-- {{ $msg->email }} --}}
                        sohel@example.com
                    </td>
                    <td>
                        {{ Str::limit("Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolor ipsam eveniet adipisci iure totam earum voluptas necessitatibus accusantium repellat, optio soluta maiores incidunt nobis nisi rem alias vero perferendis!", 50) }}
                        {{-- {{ Str::limit($msg->message, 50) }} --}}
                    </td>
                    <td>
                        <a href="/messages/show" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection