@extends('app')
@section('content')
@include('_nav')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background: url(/img/slide/slide-3.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h3 class="text-white">@if(session("message"))
                                Your message has been sent!
                                @endif</h3>
                            <h2 class="animate__animated animate__fadeInDown"><span>Best</span> Breweries in Spain</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="{{route("cervecerias")}}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                    Breweries</a>
        
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background: url(/img/slide/slide-2.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h3 class="text-white">@if(session("message"))
                                Your message has been sent!
                                @endif</h3>
                            <h2 class="animate__animated animate__fadeInDown">Beauty is in the eye of the beer holder.
                            </h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="{{route("cervecerias")}}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                    Breweries</a>
                                <a href="#"
                                    class="btn-book animate__animated animate__fadeInUp scrollto">Our Beers</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background: url(/img/slide/slide-3.jpg);">
                    <div class="carousel-background"><img src="/img/slide/slide-3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h3 class="text-white">@if(session("message"))
                                Your message has been sent!
                                @endif</h3>
                            <h2 class="animate__animated animate__fadeInDown">If you don't drink alcohol, you' ve
                                something to cover.</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="{{route("cervecerias")}}"
                                    class="btn-menu animate__animated animate__fadeInUp scrollto">Our
                                    Breweries</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section>
@endsection
<!-- End Hero -->
