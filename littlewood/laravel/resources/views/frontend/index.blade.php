@extends('frontend.layouts.master')
@section('title', 'Littlewood')
@section('main-container')


    <style>
        .bg-parrot-green {
            background-color: #808080 !important;
        }

        .slider-zoom-slide .swiper-slide.swiper-slide-active .slider-zoom-content {

            /* white with light opacity */
        }

        .text-greenish-gray {
            color: #fb8500 !important;
        }

        .parallax {
            position: relative !important;
            background-size: cover !important;
            overflow: hidden;
            background-attachment: fixed !important;
            transition-duration: 0s;
            -moz-transition-duration: 0s;
            -webkit-transition-duration: 0s;
            -o-transition-duration: 0s
        }

        .yw {
            color: #fb8500 !important;
        }

        .yv {
            color: #011647 !important;
        }

        .bg-medium-gray {
            background-color: #fb8500 !important;
        }

        .lmd p,
        h6 {
            color: #ffffff !important;
        }

        .parallax-content {
            z-index: 2;
        }

        .parallax::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* optional dark overlay */
            z-index: 1;
        }

        .banner {
            height: 100vh;
        }

        @media (max-width: 992px) {
            .banner {
                height: auto !important;
            }
        }
    </style>


    <!-- start section -->
    <section class="p-0">
        <div class="swiper-container"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                @foreach ($banners as $banner)
                    <div class="swiper-slide cover-background">
                        {{-- <div class="overlay-bg bg-gradient-dark-slate-blue"></div> --}}
                        <div class="container-fluid">
                            <div class="row gx-0 p-0">
                                <img class="w-100  p-0 banner" src="{{ asset('uploads/banners/' . $banner->image) }}"
                                    alt="">
                                {{-- <div
                                    class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column position-relative">
                                    <p
                                        class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom">
                                        {{ $banner->caption }}</p>
                                    <h2
                                        class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">
                                        {!! $banner->description !!}</h2>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-light-pagination"></div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class=" padding-100px-tb position-relative half-section overflow-visible">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div
                    class="col-12 col-lg-6 col-md-10 position-relative bottom-minus-50px z-index-1 md-bottom-inherit md-margin-50px-top sm-margin-20px-top md-margin-9-rem-bottom">
                    <div class="w-80 position-relative z-index-1 wow animate__fadeInLeft">
                        <img src="{{ asset('frontend/images/about.jpg') }}" alt="" />
                    </div>
                    <div class="w-80 h-100 bg-fast-yellow position-absolute right-30px bottom-minus-50px overflow-hidden wow animate__fadeInLeft"
                        data-wow-delay="0.2s" data-parallax-layout-ratio="1">
                        <span
                            class="text-overlap-style-04 alt-font font-weight-600 text-greenish-gray letter-spacing-minus-3px">About
                            Us</span>
                    </div>
                </div>
                <div class="col-12 col-xl-4 offset-xl-1 col-lg-5 col-md-10 margin-6-rem-bottom xs-margin-5-rem-bottom wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <h5 class="alt-font font-weight-500  margin-2-rem-bottom text-extra-dark-gray">Legacy in Every
                        Stitch,<span class="font-weight-600"> Since 1985</span></h5>
                    <p class="opacity-6  text-extra-medium w-95 line-height-32px" style="text-align: justify">Founded by Mr.
                        Naeem Malik, Little Wood began with leather motorbike and weightlifting gloves. Over decades, we
                        evolved into a full-scale manufacturer of protective gloves, motorcycle apparel, and finished
                        leather. Backed by a family legacy, technical expertise, and an in-house tannery, we now create
                        gloves that perform under pressure—trusted worldwide for durability, comfort, and craft.</p>
                    <a href="{{ route('about-us') }}" class="alt-font text-extra-medium  margin-15px-top yw">More about us<i
                            class="line-icon-Arrow-OutRight icon-medium align-middle margin-15px-left"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    {{-- <section class="p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-orange-pink  text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our
                        Product
                    </span>
                    <h5
                        class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95 mb-0">
                        Product Portfolio</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-xl-6 row-cols-md-3 row-cols-sm-2">
                <!-- start fancy text box item -->
                @foreach ($portfolios as $port)
                    <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                        <div class="text-box-wrapper align-items-center d-flex">
                            <div class="position-relative text-center w-100">
                                <div class="text-box ">
                                    <div class="feature-box-icon mb-2">
                                        <img src="{{ asset('uploads/portfolios/' . $port->image) }}" alt="">
                                    </div>

                                    <span
                                        class="alt-font text-dark-charcoal font-weight-500 text-uppercase">{{ $port->caption }}</span>
                                </div>
                                <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                    <span
                                        class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">{{ $port->caption }}</span>
                                    <p class="line-height-26px d-inline-block lg-w-70 md-w-100">{!! $port->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end fancy text box item -->

            </div>
        </div>
    </section> --}}
    <!-- end section -->

     <!-- start section -->
        <section class="bg-light-blue">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center  wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-orange-pink  text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our
                        Portfolio
                    </span>
                    <h5
                        class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95 mb-0">
                        Our Portfolio</h5>
                </div>
            </div>
        </div>
            <div class="container-fluid padding-6-rem-lr md-padding-2-rem-lr xs-padding-15px-lr">
                <div class="row">
                    <div class="col-12 filter-content">
                        <ul class="portfolio-classic portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            
                            <!-- start portfolio item -->
                            @foreach ($portfolios as $port)
                            <li class="grid-item branding logos wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="portfolio-box border-radius-6px box-shadow-large">
                                    <div class="portfolio-image bg-gradient-fast-blue-purple">
                                        <img src="{{ asset('uploads/portfolios/' . $port->image) }}" alt="" />
                                    </div>
                                    <div class="portfolio-caption bg-white padding-30px-tb lg-padding-20px-tb" style="height: 180px;">
                                        <a href="single-project-page-03.html"><span class="alt-font text-extra-dark-gray font-weight-500">{{ $port->caption }}</span></a>
                                        <span class="text-medium d-block margin-one-bottom px-2">{!! $port->description !!}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            <!-- end portfolio item -->
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


    <!-- start section -->
    {{-- <section class="bg-light-gray wow animate__fadeIn" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-orange-pink  text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our Product
                        </span>
                    <h5
                        class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95 mb-0">
                        Product Portfolio</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                <!-- start feature box item -->
                @foreach ($portfolios as $port) 
                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="feature-box feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                        <div class="feature-box-icon mb-2">
                           <img src="{{ asset('uploads/portfolios/' . $port->image) }}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="text-large alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">{{$port->caption}}</span>
                            <p>{!!$port->description !!}</p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                @endforeach
                <!-- end feature box item -->
            </div>
        </div>
    </section> --}}
    <!-- end section -->



    <!-- start section -->
    {{-- <section class=" padding-100px-top md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn" data-wow-delay="0.2s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center  wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-orange-pink  text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our
                        Categories
                    </span>
                    <h5
                        class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95 mb-0">
                        Our Categories</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 margin-8-rem-top portfolio-colorful md-margin-5-half-rem-top">
                    <div class="swiper-container swiper-auto-slide"
                        data-slider-options='{ "loop": true, "slidesPerView": "auto", "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "spaceBetween": 25, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            @foreach ($category as $cat)
                                <div class="swiper-slide">
                                    <a href="{{ route('catalogues') }}">
                                        <div class="portfolio-box position-relative">
                                            <div class="portfolio-image">
                                                <img src="{{ asset('uploads/categories/' . $cat->image) }}" alt="">
                                                <div class="portfolio-hover d-flex flex-row justify-content-between align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all"
                                                    style="background-color: rgba(255, 255, 255, 0); opacity: 1; visibility: visible; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                                    <div class="text-start">
                                                        <h6
                                                            class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0">
                                                            <span
                                                                style="
                                                        font-size: 40px;
                                                        background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
                                                        -webkit-background-clip: text;
                                                        -webkit-text-fill-color: transparent;
                                                        display: inline-block;">
                                                                {{ $cat->name }}
                                                            </span>

                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end section -->


    <!-- start section -->
    <section class="parallax one-third-screen d-flex align-items-center justify-content-center text-center text-white"
        data-parallax-background-ratio="0.5"
        style="background-image: url('{{ asset('frontend/images/banner-parallex.jpg') }}'); position: relative; background-size: cover; background-position: center;">

        <div class="parallax-content">
            <h2 class="display-4 fw-bold text-gradient-orange-pink">Driven by Skill. Backed by Legacy.</h2>
            <p class="lead mb-4">Experience the difference with our services</p>
            <a href="{{ route('sample-request') }}" class="btn btn-fancy btn-small btn-dark-gray">Request a Sample</a>
        </div>

    </section>

    <!-- end section -->

    <!-- start section -->
    <section class="pb-0 wow animate__fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-orange-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Product
                        Manufacturing</span>
                    <h5
                        class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95">
                        Our Departments</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="swiper-container slider-zoom-slide black-move h-550px p-0 lg-h-500px sm-h-600px"
                    data-slider-options='{ "centeredSlides": true, "spaceBetween": 60, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav-2", "prevEl": ".swiper-button-previous-nav-2" }, "autoplay": { "delay": "4500", "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "991": { "slidesPerView": 2 }, "767": { "slidesPerView": 1 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        @foreach ($Department as $index => $department)
                            <div class="swiper-slide">
                                <div class="col-12 p-0 cover-background align-items-end d-flex justify-content-end h-100"
                                    style="background: url({{ asset('uploads/departments/' . $department->image) }})">
                                    <div
                                        class="w-45  padding-5-rem-tb padding-5-half-rem-lr slider-zoom-content xl-w-55 xl-padding-3-rem-all lg-w-70 md-w-50 md-padding-5-rem-all sm-w-60 xs-w-95 lmd">
                                        <div
                                            class="col-12 p-0 margin-20px-bottom d-md-inline-block align-items-center justify-content-center">
                                            <span
                                                class="alt-font text-greenish-gray d-inline-block font-weight-500 align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                            <span
                                                class="w-30px h-1px d-inline-block align-middle bg-medium-gray margin-10px-left margin-10px-right "></span>
                                            <span
                                                class="d-inline-block alt-font text-greenish-gray text-uppercase font-weight-500 align-middle">Department</span>
                                        </div>
                                        <h6 class="alt-font align-self-center text-extra-dark-gray font-weight-500">
                                            {{ $department->name }}</h6>
                                        <p class="margin-35px-bottom text-white">{!! $department->description !!}</p>
                                        <a href="{{ route('department', $department->id) }}"
                                            class="btn btn-fancy btn-small btn-dark-gray">Explore ALL</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- end slider item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="swiper-container text-center"
                        data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } } }'>
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-1.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-2.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-3.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-4.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-5.png') }}"></a></div>
                            <!-- end slider item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-orange-pink  text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Our
                        Product
                    </span>
                    <h5
                        class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95 mb-0">
                        Our Blogs</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-12 blog-content px-sm-0 ">
                    <ul
                        class="blog-masonry blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @foreach ($blog as $blog)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white">
                                    {{-- <div
                                        class="d-flex justify-content-center align-items-center font-weight-500 padding-30px-lr padding-15px-tb">
                                        <a class="text-small me-auto text-slate-blue text-extra-dark-gray-hover">
                                            {{ \Carbon\Carbon::parse($blog->created_at)->format('d F Y') }}
                                        </a>

                                        
                                    </div> --}}
                                    <div class="blog-post-image">
                                        <a href="{{ route('blog-detail', $blog->id) }}" title=""><img
                                                src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                                alt="{{ $blog->name }}"></a>
                                        {{-- <div class="alt-font blog-category"><a  class="text-uppercase text-extra-dark-gray">Blog</a></div> --}}
                                    </div>
                                    <div
                                        class="post-details padding-3-rem-lr padding-2-half-rem-tb lg-padding-2-rem-all md-padding-2-half-rem-tb md-padding-3-rem-lr">
                                        <a href="{{ route('blog-detail', $blog->id) }}"
                                            class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-extra-dark-gray-hover d-block margin-15px-bottom">{{ $blog->name }}</a>
                                        {{-- <p>{!! $blog->description !!}</p> --}}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- end blog item -->

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


@endsection
