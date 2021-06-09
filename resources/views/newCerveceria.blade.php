@extends('app')
@section('title','Contact With Us')
@section('content')


<!-- ======= Contact Section ======= -->

<section id="contact" class="contact">
    <div class="container">




        <form action="{{route("create")}}" method="POST" role="form" class="php-email-form">
            @csrf
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="description" placeholder="description"
                        required>
                </div>
                <div class="col-md-4 form-group">
                    <input type="number" name="number" class="form-control" id="capacity" placeholder="capacity"
                        required>
                </div>

                <div class="text-center"><button type="submit">Run</button></div>
        </form>

    </div>
</section>
@endsection
