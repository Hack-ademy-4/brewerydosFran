@extends('app')
@section('title','Contact With Us')
@section('content')


<header class="fixed-top d-flex align-items-center bg-dark py-2">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="logo me-auto">
            <h1 class="h3"><a href="index.html">Breweries</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route("home")}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route("cervecerias")}}">Breweries</a></li>
                <li><a class="nav-link scrollto" href="{{route("create")}}">Create</a></li>
                <li><a class="nav-link scrollto" href="{{route("contact")}}">Contact</a></li>
            </ul>    
    </div>
</header>

<!-- ======= Contact Section ======= -->

<section id="contact" class="contact">
<div class="container-fluid text-center">
<h1>Edit Brewery</h1>
</div>
    <div class="container mt-5 pt-5">
   
        <form action="{{route("breweries.update",['id'=>$cerveceria->id])}}" method="POST" role="form" class="php-email-form">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" name="description" class="form-control" id="description" placeholder="description"
                        required>
                </div>
                <div class="col-md-4 form-group">
                    <input type="number" name="capacity" class="form-control" id="capacity" placeholder="capacity"
                        required>
                </div>
                <div class="text-center"><button type="submit">Run</button></div>
        </form>
    </div>
</section>

@endsection