@extends('front-layouts.master')

@section('title', 'Departments')

@section('content')

<style>
    .check-up-img{
        top: -70px;
    }
    @media (max-width: 991px) {
        .check-up-img {
            top: -15px; /* Adjusted style for screens below 992px */
        }
    }
</style>

<!-- Page Banner Area -->
<div class="page-banner-area bg-5">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Departments</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>All departments</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@foreach ($portfolios as $portfolio)
<div id="portfolio-{{ $portfolio->id }}" class="check-up-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="check-up-text">
                    <div class="section-title-two">
                        <h2>{{ $portfolio->name }}</h2>
                        <p>{!! $portfolio->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="check-up-img">
                    <div class="main-img">
                        <img src="{{ asset($portfolio->detail_image) }}" alt="Image" height="500px" width="500px">
                    </div>
                    <div class="shape">
                        <img src="{{ asset('medimax_assets/img/shapes/shape-5.png') }}" alt="Shape">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach











<!-- <div id="gallery" class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="section-title-one">
            <h2>Let's check-out our departments and their acitvity</h2>
        </div>

        <div class="gallery-menu">
            <ul>
                <li class="filter" data-filter="all">All Department</li>
                @foreach ($portfolios as $portfolio)
                <li class="filter" data-filter=".portfolio-{{ $portfolio->id }}">{{ $portfolio->name }}</li>
                @endforeach
            </ul>
        </div>


        <div class="row" id="Container">
            @foreach ($portfolios as $portfolio)
            @foreach ($portfolio->images as $image)
            <div class="col-lg-4 col-sm-6 mix portfolio-{{ $portfolio->id }}">
                <div class="single-gallery">
                    <img src="{{ asset('images/portfolio/' . $image->images) }}" alt="{{ $portfolio->name }}">
                    <div class="caption">
                        <div class="d-table">
                          
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach
        </div>

    </div>
</div> -->


<script>
    // Define `track` using `var` for older browser compatibility
    var track = document.getElementById("image-track");

    var handleOnDown = function(e) {
        track.dataset.mouseDownAt = e.clientX;
    };

    var handleOnUp = function() {
        track.dataset.mouseDownAt = "0";
        track.dataset.prevPercentage = track.dataset.percentage;
    };

    var handleOnMove = function(e) {
        if (track.dataset.mouseDownAt === "0") return;

        var mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX;
        var maxDelta = window.innerWidth / 2;

        var percentage = (mouseDelta / maxDelta) * -100;
        var nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage) + percentage;
        var nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, 0), -100);

        track.dataset.percentage = nextPercentage;

        track.animate({
            transform: `translate(${nextPercentage}%, -50%)`
        }, {
            duration: 1200,
            fill: "forwards"
        });

        var images = track.getElementsByClassName("image");
        for (var i = 0; i < images.length; i++) {
            images[i].animate({
                objectPosition: `${100 + nextPercentage}% center`
            }, {
                duration: 1200,
                fill: "forwards"
            });
        }
    };

    window.onmousedown = handleOnDown;
    window.ontouchstart = function(e) {
        handleOnDown(e.touches[0]);
    };
    window.onmouseup = handleOnUp;
    window.ontouchend = function(e) {
        handleOnUp(e.touches[0]);
    };
    window.onmousemove = handleOnMove;
    window.ontouchmove = function(e) {
        handleOnMove(e.touches[0]);
    };
</script>





@endsection