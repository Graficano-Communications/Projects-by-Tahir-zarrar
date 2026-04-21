@extends('frontend.layouts.master')
@section('title', 'News & Events')
@section('main-container')
    <style>
        .mtb {
            margin-top: 50px;
        }

        section.half-section {
            padding: 20px 0 !important;
        }

        .grid.xl-grid-2col li {
            width: 100%;
        }

        .swiper-container {
            width: 52%;
            /* height: 100%; */
        }

        .nav-tabs .nav-link {
            background-color: #ffffff !important;
            color: #011647 !important;
            border-color: #ffffff !important;
        }

        /* Hover state */
        .nav-tabs .nav-link:hover {
            background-color: #fb8500 !important;
            color: #011647 !important;
            border-color: #fb8500 !important;
        }

        /* Active state */
        .nav-tabs .nav-link.active {
            background-color: #fb8500 !important;
            color: #ffffff !important;
            border: 1px solid #fb8500 !important;
            margin: 0 5px;
            padding: 10px 20px !important;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
            text-transform: uppercase;
            /* font-weight: 500; */
            1 text-align: center;
        }

        .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .swiper-event {
            width: 100%;
            max-width: 650px;
            /* Adjust as needed */
            height: auto;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            object-fit: cover;
            width: 100%;
            height: auto;
        }
    </style>

    <section class="half-section bg-light-gray parallax " data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('frontend/images/news-banner.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">News & Events</h1> --}}
                    <h2
                        class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Attractive articles updated daily</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="bg-light-gray pt-0 padding-five-lr lg-no-padding-lr">

        <div class="container-fluid mtb">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our
                        Events & Expos</span>
                    <h5
                        class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95">
                        Stay Connected to Check it out.</h5>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-12 col-xl-12 col-lg-12  blog-content lg-no-padding-lr">
                    <ul
                        class="nav nav-tabs text-uppercase justify-content-start text-start alt-font font-weight-500 margin-2-rem-bottom md-margin-5-rem-bottom sm-margin-20px-bottom">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#current-events">Current Events</a>
                            <span class="tab-border bg-extra-dark-gray"></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#upcoming-events">Upcoming Events</a>
                            <span class="tab-border bg-extra-dark-gray"></span>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Current Events Tab -->
                        <div id="current-events" class="tab-pane fade in active show">
                            <ul
                                class="blog-simple blog-wrapper grid grid-loading   xl-grid-2col lg-grid-2col md-grid-1col  xs-grid-1col gutter-double-extra-large">
                                <li class="grid-sizer"></li>
                                @foreach ($currentEvents as $event)
                                    <li class="grid-item wow animate__fadeIn">
                                        <div
                                            class="product-images-box lightbox-portfolio blog-post box-shadow-small border-radius-6px">
                                            <div class="swiper-container swiper-event mx-auto"
                                                data-slider-options='{
                                                    "slidesPerView": 1,
                                                    "loop": true,
                                                    "navigation": {
                                                        "nextEl": ".swiper-button-next-nav",
                                                        "prevEl": ".swiper-button-previous-nav"
                                                    },
                                                    "keyboard": {
                                                        "enabled": true,
                                                        "onlyInViewport": true
                                                    },
                                                    "effect": "slide"
                                                }'>
                                                <div class="swiper-wrapper">
                                                    @foreach (explode(',', $event->image) as $image)
                                                        <div class="swiper-slide">
                                                            <a class="gallery-link d-block w-100"
                                                                href="{{ asset('uploads/events/' . $image) }}">
                                                                <img class="img-fluid w-100 rounded"
                                                                    src="{{ asset('uploads/events/' . $image) }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <!-- Navigation buttons -->
                                                <div
                                                    class="swiper-button-next-nav swiper-button-next slider-navigation-style-01 light">
                                                    <i class="feather icon-feather-arrow-right" aria-hidden="true"></i>
                                                </div>
                                                <div
                                                    class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-01 light">
                                                    <i class="feather icon-feather-arrow-left" aria-hidden="true"></i>
                                                </div>
                                            </div>


                                            <div class="post-details bg-white p-4 p-md-5 ">
                                                <a
                                                    class=" alt-font text-dark d-block mb-2 ">{{ $event->date }}</a>
                                                <a class="font-weight-500 h5 d-block mb-2 text-gradient-sky-blue-pink">{{ $event->name }}</a>
                                                <p class="mb-3">{!! $event->description !!}</p>
                                                <a
                                                    class="alt-font font-weight-500 text-uppercase small text-gradient-sky-blue-pink d-inline-block">{{ $event->location }}</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Upcoming Events Tab -->
                        <div id="upcoming-events" class="tab-pane fade">
                            @if ($upcomingEvents->isEmpty())
                                <h4 class="text-start mt-5">No Upcoming Events</h4>
                            @else
                                <ul
                                    class="blog-simple blog-wrapper grid grid-loading grid-3col xl-grid-2col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                                    <li class="grid-sizer"></li>
                                    @foreach ($upcomingEvents as $event)
                                        <li class="grid-item wow animate__fadeIn">
                                            <div
                                                class="product-images-box lightbox-portfolio blog-post box-shadow-small border-radius-6px">
                                                <div class="swiper-container white-move border-all border-width-12px border-color-white box-shadow-large border-radius-8px"
                                                    data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                                                    <div class="swiper-wrapper">
                                                        @foreach (explode(',', $event->image) as $image)
                                                            <div class="swiper-slide">
                                                                <a class="gallery-link"
                                                                    href="{{ asset('uploads/events/' . $image) }}"><img
                                                                        class="w-100"
                                                                        src="{{ asset('uploads/events/' . $image) }}"
                                                                        alt=""></a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div
                                                        class="swiper-button-next-nav swiper-button-next slider-navigation-style-01 light">
                                                        <i class="feather icon-feather-arrow-right" aria-hidden="true"></i>
                                                    </div>
                                                    <div
                                                        class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-01 light">
                                                        <i class="feather icon-feather-arrow-left" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-details bg-white padding-3-half-rem-all lg-padding-2-half-rem-all md-padding-3-half-rem-all">
                                                    <a
                                                        class="blog-category alt-font text-extra-dark-gray border-color-black-transparent bg-white align-self-start margin-4-half-rem-bottom xs-margin-2-half-rem-bottom">{{ $event->date }}</a>
                                                    <a
                                                        class="font-weight-500 text-large line-height-24px text-extra-dark-gray margin-15px-bottom xs-margin-10px-bottom">{{ $event->name }}</a>
                                                    <p>{{ $event->description }}</p>
                                                    <a
                                                        class="alt-font font-weight-500 text-small text-gradient-sky-blue-pink text-uppercase align-self-start">{{ $event->location }}</a>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->
    <!-- start footer -->

@endsection
