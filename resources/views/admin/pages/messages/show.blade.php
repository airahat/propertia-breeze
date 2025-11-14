@extends('admin.layout.master')

@section('title', 'View Message')

@section('content')

    <div class="container py-5">
        <div class="card">
            <div class="card-title p-3 fw-bolder">
                <h2>Messages</h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="fw-bolder mb-2 mt-3">Sender's Name:</label>
                    <input type="text" id="name" disabled class="form-control" value="A.I. Rahat">
                </div>
                <div class="form-group">
                    <label for="name" class="fw-bolder mb-2 mt-3">Sender's Email:</label>
                    <input type="text" id="email" class="form-control" disabled value="abc@example.com">
                </div>

                 <div class="fw-bolder fs-6 mb-2 mt-3">Message:</div>


                <div class="card-text p-3 border border-secondary" >
                    {{-- <label for="message" class="fw-bolder mb-2 mt-3">Message:</label>
                    <textarea name="message" class="form-control"  id="message" style="height: 150px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit culpa quidem impeditreiciendis quae placeat porro optio inventore libero, ducimus excepturi cum aperiam doloribus rem, dolorem adipisci, a quaerat commodi? Modi recusandae et accusantium similique, vel magnam aperiam explicabo voluptas, expedita optio nostrum ab perspiciatis assumenda adipisci rerum! Sunt itaque sit non enim! Quaerat consequatur quam impedit numquam quas distinctio!Fugiat hic libero voluptas obcaecati sunt architecto, a omnis saepe ratione aperiam consectetur in! Saepe sapiente exercitationem eaque sint esse. Minima aliquam dignissimos quos a autem molestias impedit eaque illum.
                   </textarea> --}}


                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, quos cumque delectus repudiandae vitae ullam! Doloremque quas, impedit expedita quis modi mollitia qui. Sunt aut excepturi repellat adipisci dolorem rem!
                   Consequatur, aut dolorum? Tempore autem ipsum error sint reiciendis voluptate exercitationem officia distinctio ea commodi magni quas explicabo ducimus officiis, odio aperiam, optio, cum aliquam soluta suscipit hic nulla nisi.
                   Autem laudantium sequi adipisci, voluptatum odit exercitationem? Qui nobis quidem reprehenderit inventore totam hic exercitationem eligendi alias! Saepe nobis accusamus possimus quidem, nisi dolor eos velit natus. Nam, eos expedita!


                </div>


                <div class="form-group">
                    <label for="reply" class="fw-bolder mb-2 mt-3">Send a Reply:</label>
                   <textarea name="reply" class="form-control" id="reply"></textarea>
                </div>


                <div class="text-center mt-3">
                    <button class="btn btn-outline-primary">Submit</button>
                </div>
            </div>
        </div>

    </div>


@endsection
