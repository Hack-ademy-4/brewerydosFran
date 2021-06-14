@extends('app')
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
   
     
<!-- ======= Cervecerias Section ======= -->
<section id="menu" class="menu">
    <div class="container-fluid my-5 py-5">
        <div class="section-title">
            <h2>Check your favourite<span>Brewery</span></h2>
        </div>
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-6 mb-5">
                <div class="member">
                    <div class="pic"><img src="/img/slide/slide-4.jpg" class="img-fluid shadow rounded-3" alt=""></div>
                    <div class="member-info">
                        <h5 class="card-title mt-3">{{$cerveceria->name}}</h5>
                        <p class="card-title mt-3 small">{{$cerveceria->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- End Cervecerias Section -->
