@extends('app')
@section('content')

<header  class="fixed-top d-flex align-items-center bg-dark py-2">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <div class="logo me-auto">
        <h1 class="h3"><a href="index.html">Breweries</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav  class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route("home")}}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{route("cervecerias")}}">Breweries</a></li>
          <li><a class="nav-link scrollto" href="{{route("detalles")}}">Beers</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route("contact")}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>

    </div>
  </header>
<!-- ======= Cervecerias Section ======= -->
<section id="menu" class="menu">

    <div class="container-fluid my-5 py-5">

        <div class="section-title">
            <h2>Check our<span>Breweries</span></h2>
        </div>

        <div class="row justify-content-center px-5 mx-5">
        @foreach($breweries as $brewery)
            <div class="col-12 col-md-3  mx-auto">
                <ul id="menu-flters">
                    <li data-filter=".filter-starters"> <a href="{{route("detalles")}}">{{$brewery['nombre']}}</a> </li>
                </ul>
            </div>
            @endforeach
        </div>

        <div class="row align-items-baseline">
            @foreach($breweries as $brewery)
            <div class="col-12 col-md-6 mb-5">

                <div class="member">
                <div class="pic"><img src="/img/slide/slide-4.jpg" class="img-fluid shadow rounded-3" alt=""></div>
                    <div class="member-info">
                        <h5 class="card-title mt-3">{{$brewery['nombre']}}</h5>
                        <p class="card-title mt-3 small">{{$brewery['desc']}}</p>
                        <p class="card-title mt-3 small">Seats available: {{$brewery['aforo']}}</p>
                        </p>
                        
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

</section>
@endsection
<!-- End Cervecerias Section -->































