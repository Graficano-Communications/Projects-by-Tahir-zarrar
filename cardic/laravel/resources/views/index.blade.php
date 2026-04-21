@extends('layouts.master')
@section('title', 'Home | Cardic Instruments')
@section('content')

    <!-- start banner slider -->
    <section class="p-0 ">
        <div class="swiper full-screen ipad-top-space-margin md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 5000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'
            data-number-pagination="1">
            <div class="swiper-wrapper">
                <!-- start slider item -->
                 @php $banners = \App\banner::all()->sortby('sequence') @endphp
                 @foreach ($banners as $key => $banner)
                <div class="swiper-slide cover-background"
                    style="background-image:url('{{ asset('images/banners/' . $banner->image) }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end slider item -->
            </div>
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 position-relative">
                        <!-- start slider pagination -->
                        <div class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number">
                        </div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
            <!-- start slider navigation -->
            <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
                        <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
            <!-- end slider navigation -->
        </div>
    </section>
    <!-- end banner slider -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 position-relative md-mb-50px">
                    <div class="overflow-hidden position-relative  md-w-90 ms-auto" data-shadow-animation="true"
                        data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <img src="{{ asset('assets/images/c-Logo-comp.png') }}" class="w-100 border-radius-6px" alt="">
                    </div>
                </div>
                <div class="col-lg-6 "
                    data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <img src="https://via.placeholder.com/144x136" class="w-60px mb-25px" alt="">
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">About Us</h3>
                    <p class="w-85 lg-w-100 mb-20px">With over four decades of experience, Cardic Instruments is a
                        distinguished leader in the healthcare industry renowned for precision, innovation and
                        unwavering commitment to excellence.

                        Our mission is simple yet powerful: to simplify the work of healthcare professionals by
                        providing the finest surgical instrumentation and unparalleled service.

                        Through continuous innovation, strict quality control and a dedicated team we offer tailored
                        solutions that elevate the quality of patient care and make the professional lives of our
                        partners easier.</p>

                    <div class="d-inline-block mt-30px">
                        <a href="{{ route('aboutusall') }}"
                            class="btn btn-large btn-rounded with-rounded btn-dark-gray btn-box-shadow me-20px">About
                            Us<span class="bg-blue-licorice text-white"><i
                                    class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-50px pb-50px bg-very-light-gray overflow-hidden">
        <div class="container">
            <div class="row justify-content-center align-items-center md-m-0">
                <div class="col-lg-1 p-0">
                    <div
                        class="divider-style-03 divider-style-03-03 border-color-base-color w-50 md-w-100 float-end md-mb-15px">
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-9 col-lg-10 position-relative text-center">
                    <h5 class="alt-font text-dark-gray fw-500 mb-0 fancy-text-style-4 font-style-italic ls-minus-1px">
                        Committed to providing solutions for <span class="fw-700"
                            data-fancy-text='{ "effect": "rotate", "string": ["contract creation", "commercial affairs", "negotiation support"] }'></span>
                    </h5>
                </div>
                <div class="col-lg-1 p-0">
                    <div class="divider-style-03 divider-style-03-03 border-color-base-color w-50 md-w-100 md-mt-15px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden  position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 md-mb-40px text-center text-lg-start"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color mb-10px d-block">Areas of practice</span>
                    <h3 class="alt-font text-cardic mb-55px md-mb-40px ls-minus-1px">Different case, need <span
                            class="fw-600 font-style-italic text-decoration-line-bottom-medium">different</span> <span
                            class="fw-600 font-style-italic text-decoration-line-bottom-medium">services.</span></h3>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-blue-licorice">
                            <i class="bi bi-arrow-left-short icon-very-medium text-white"></i>
                        </div>
                        <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-blue-licorice">
                            <i class="bi bi-arrow-right-short icon-very-medium text-white"></i>
                        </div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="outside-box-right-25 sm-outside-box-right-0"
                        data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor base-color slider-one-slide"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                 @php $category = \App\Category::all() @endphp
                                    @foreach ($category as $key => $cat)
                                    @if ($cat && isset($cat->id) && isset($cat->name) && isset($cat->image) && isset($cat->instrument_img))
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <img src="{{ asset('images/cats/' . $cat->image) }}" alt="" />
                                            <figcaption
                                                class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-55px xl-p-35px">
                                                <a href="{{ route('category', ['id' => $cat->id, 'name' => $cat->name]) }}">
                                                    <img src="{{ asset('images/cats/' . $cat->instrument_img) }}" alt="">
                                                </a>
                                                <div class="d-flex w-100 align-items-center mt-auto">
                                                    <a href="{{ route('category', ['id' => $cat->id, 'name' => $cat->name]) }}"
                                                        class="circle-box bg-white w-55px h-55px rounded-circle ms-auto position-relative rounded-box">
                                                        <i
                                                            class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div
                                                    class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9">
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <span class="fs-20 text-black text-center mb-10px d-block">{{ $cat->name }}</span>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                @endif
                                @endforeach
                                <!-- end slider item -->
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="position-relative overflow-hidden py-0">
        <a href="{{ route('news_parallex') }}">
        <div class="skrollr-parallax mx-auto pt-7 pb-7 md-pt-12 md-pb-12" data-bottom-top="width: 63%"
            data-center-top="width: 100%;" data-parallax-background-ratio="0.5"
            style="background-image: url('assets/images/Black-and-white.jpg')">
            <div class="opacity-extra-medium bg-gradient-black-dark-orange"></div>
            <div class="container">
                <div class="row justify-content-center align-items-center mb-5">
                    <div
                        class="col-xl-9 col-lg-10 text-center position-relative last-paragraph-no-margin parallax-scrolling-style-2">

                        <h1 class="text-base-color fw-500 alt-font ls-minus-2px text-shadow-double-large">Discover the Cardic
                            Difference</h1>
                    </div>
                </div>

            </div>
        </div>
        </a>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start awards logo -->
                <div class="col-6 col-lg-2 col-md-3 sm-mb-30px text-center">
                    <img src="{{ asset('assets/images/CE (1).png') }}" alt="">
                </div>
                <!-- start awards logo -->
                <div class="col-6 col-lg-2 col-md-3 sm-mb-30px text-center">
                    <img src="{{ asset('assets/images/CFDA (2).png') }}" alt="">
                </div>
                <!-- start awards logo -->
                <!-- end awards logo -->
                <div class="col-6 col-lg-2 col-md-3 sm-mb-30px text-center">
                    <img src="{{ asset('assets/images/FDA (1).png') }}" alt="">
                </div>
                <!-- start awards logo -->
                <!-- end awards logo -->
                <div class="col-6 col-lg-2 col-md-3 sm-mb-30px text-center">
                    <img src="{{ asset('assets/images/Iao-13458 (1).png') }}" alt="">
                </div>
                <!-- start awards logo -->
                <!-- end awards logo -->
                <div class="col-6 col-lg-2 col-md-3 sm-mb-30px text-center">
                    <img src="{{ asset('assets/images/Iso-9001 (1).png') }}" alt="">
                </div>
                <!-- end awards logo -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="demo-vertical-portfolio magic-cursor drag-cursor p-0 cover-background position-relative"
        style="background-image:url('{{ asset('assets/frontend/images/front-images/cardic.png') }}');">
        <div class="absolute-middle-right right-100px top-150px mt-70px z-index-1">
            <img class="animation-float" src="{{ asset('assets/frontend/images/front-images/cardic.png') }}" alt="">
        </div>
        <div class="swiper full-screen ipad-top-space-margin swiper-light-pagination swiper-pagination-bullets-right"
            data-slider-options='{ 
        "slidesPerView": 1, 
        "direction": "vertical", 
        "loop": false, 
        "parallax": true, 
        "speed": 1000, 
        "mousewheel": { "enabled": true, "releaseOnEdges": true },
        "pagination": { "el": ".swiper-pagination-bullets-right", "clickable": true },
        "autoplay": { "delay": 4000, "disableOnInteraction": false },
        "keyboard": { "enabled": true, "onlyInViewport": true },
        "breakpoints": { "1199": { "direction": "vertical" }},
        "effect": "slide" 
        }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide">
                    <a href="{{ route('warrantiesandPolicies') }}">
                        <div class="container h-100">
                        <div class="row h-100 position-relative z-index-1">
                            <div
                                class="col-lg-10 col-md-11 position-relative d-flex flex-column justify-content-center h-100">
                                <div class="d-flex align-items-center position-relative ps-45px xs-ps-0">
                                    <div class="position-absolute left-0px top-0px h-100 w-110px d-none d-sm-block">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-12 ls-4px text-uppercase text-white"
                                                data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                                <span class="d-inline-block">Warrenties and Policies</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute z-index-1 top-30px right-40px xs-top-15px xs-right-25px d-flex align-items-center text-white fs-13">
                                        <span class="w-25px h-1px bg-white me-10px"></span> 01
                                    </div>
                                    <img src="{{ asset('assets/frontend/images/front-images/warranty-and-policy.jpg') }}" class="border-radius-8px"
                                        alt="">
                                    <div
                                        class="alt-font position-absolute right-minus-120px md-right-110px sm-right-auto fs-180 md-fs-140 xs-fs-80 text-white sm-w-90 xs-w-100 text-center">
                                        <span class="text-shadow-large swiper-parallax-fancy-text"
                                            data-fancy-text='{ "opacity": [0, 1], "delay": 800, "speed": 50, "string": ["Warrenties"], "easing": "easeOutQuad" }'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start marquees -->
                        <div
                            class="marquees-text slider-big-title alt-font ls-minus-10px text-olive-green text-nowrap position-absolute top-0px left-0px d-none d-md-block">
                            Warrenties</div>
                        <!-- end marquees -->
                    </div>
                    </a>
                    
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide">
                    <a href="{{ route('InstrumentsCare') }}">
                    <div class="container h-100">
                        <div class="row h-100 position-relative z-index-1">
                            <div
                                class="col-lg-10 col-md-11 position-relative d-flex flex-column justify-content-center h-100">
                                <div class="d-flex align-items-center position-relative ps-45px xs-ps-0">
                                    <div class="position-absolute left-0px top-0px h-100 w-110px d-none d-sm-block">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-12 ls-4px text-uppercase text-white"
                                                data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                                <span class="d-inline-block">Instruments Care</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute z-index-1 top-30px right-40px xs-top-15px xs-right-25px d-flex align-items-center text-white fs-13">
                                        <span class="w-25px h-1px bg-white me-10px"></span> 02
                                    </div>
                                    <img src="{{ asset('assets/frontend/images/front-images/intrument-care.jpg') }}" class="border-radius-8px"
                                        alt="">
                                    <div
                                        class="alt-font position-absolute right-minus-120px md-right-110px sm-right-auto fs-180 md-fs-140 xs-fs-80 text-white sm-w-90 xs-w-100 text-center">
                                        <span class="text-shadow-large swiper-parallax-fancy-text"
                                            data-fancy-text='{ "opacity": [0, 1], "delay": 800, "speed": 50, "string": ["Instruments Care"], "easing": "easeOutQuad" }'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start marquees -->
                        <div
                            class="marquees-text slider-big-title alt-font ls-minus-10px text-olive-green text-nowrap position-absolute top-0px left-0px d-none d-md-block">
                            Instruments Care</div>
                        <!-- end marquees -->
                    </div>
                    </a>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide">
                    <a href="{{ route('catlogue') }}">
                    <div class="container h-100">
                        <div class="row h-100 position-relative z-index-1">
                            <div
                                class="col-lg-10 col-md-11 position-relative d-flex flex-column justify-content-center h-100">
                                <div class="d-flex align-items-center position-relative ps-45px xs-ps-0">
                                    <div class="position-absolute left-0px top-0px h-100 w-110px d-none d-sm-block">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-12 ls-4px text-uppercase text-white"
                                                data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                                <span class="d-inline-block">Catalouges</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute z-index-1 top-30px right-40px xs-top-15px xs-right-25px d-flex align-items-center text-white fs-13">
                                        <span class="w-25px h-1px bg-white me-10px"></span> 03
                                    </div>
                                    <img src="{{ asset('assets/frontend/images/front-images/catalogue.jpg') }}" class="border-radius-8px"
                                        alt="">
                                    <div
                                        class="alt-font position-absolute right-minus-120px md-right-110px sm-right-auto fs-180 md-fs-140 xs-fs-80 text-white sm-w-90 xs-w-100 text-center">
                                        <span class="text-shadow-large swiper-parallax-fancy-text"
                                            data-fancy-text='{ "opacity": [0, 1], "delay": 800, "speed": 50, "string": ["Catalouges"], "easing": "easeOutQuad" }'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start marquees -->
                        <div
                            class="marquees-text slider-big-title alt-font ls-minus-10px text-olive-green text-nowrap position-absolute top-0px left-0px d-none d-md-block">
                            Catalouges</div>
                        <!-- end marquees -->
                    </div>
                    </a>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide">
                    <a href="{{ route('career') }}">
                    <div class="container h-100">
                        <div class="row h-100 position-relative z-index-1">
                            <div
                                class="col-lg-10 col-md-11 position-relative d-flex flex-column justify-content-center h-100">
                                <div class="d-flex align-items-center position-relative ps-45px xs-ps-0">
                                    <div class="position-absolute left-0px top-0px h-100 w-110px d-none d-sm-block">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-12 ls-4px text-uppercase text-white"
                                                data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                                <span class="d-inline-block">Career</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute z-index-1 top-30px right-40px xs-top-15px xs-right-25px d-flex align-items-center text-white fs-13">
                                        <span class="w-25px h-1px bg-white me-10px"></span> 04
                                    </div>
                                    <img src="{{ asset('assets/frontend/images/front-images/career-cardic.jpg') }}" class="border-radius-8px"
                                        alt="">
                                    <div
                                        class="alt-font position-absolute right-minus-120px md-right-110px sm-right-auto fs-180 md-fs-140 xs-fs-80 text-white sm-w-90 xs-w-100 text-center">
                                        <span class="text-shadow-large swiper-parallax-fancy-text"
                                            data-fancy-text='{ "opacity": [0, 1], "delay": 800, "speed": 50, "string": ["Career"], "easing": "easeOutQuad" }'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start marquees -->
                        <div
                            class="marquees-text slider-big-title alt-font ls-minus-10px text-olive-green text-nowrap position-absolute top-0px left-0px d-none d-md-block">
                            Career</div>
                        <!-- end marquees -->
                    </div>
                    </a>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide">
                    <a href="{{ route('brochures') }}">
                    <div class="container h-100">
                        <div class="row h-100 position-relative z-index-1">
                            <div
                                class="col-lg-10 col-md-11 position-relative d-flex flex-column justify-content-center h-100">
                                <div class="d-flex align-items-center position-relative ps-45px xs-ps-0">
                                    <div class="position-absolute left-0px top-0px h-100 w-110px d-none d-sm-block">
                                        <div class="vertical-title-center align-items-center">
                                            <div class="title fs-12 ls-4px text-uppercase text-white"
                                                data-anime='{ "el": "childs", "rotateX": [90, 0], "opacity": [0,1], "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                                <span class="d-inline-block">New Arrival</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="position-absolute z-index-1 top-30px right-40px xs-top-15px xs-right-25px d-flex align-items-center text-white fs-13">
                                        <span class="w-25px h-1px bg-white me-10px"></span> 05
                                    </div>
                                    <img src="{{ asset('assets/frontend/images/front-images/new-aarival-cardic.jpg') }}" class="border-radius-8px"
                                        alt="">
                                    <div
                                        class="alt-font position-absolute right-minus-120px md-right-110px sm-right-auto fs-180 md-fs-140 xs-fs-80 text-white sm-w-90 xs-w-100 text-center">
                                        <span class="text-shadow-large swiper-parallax-fancy-text"
                                            data-fancy-text='{ "opacity": [0, 1], "delay": 800, "speed": 50, "string": ["New Arrival"], "easing": "easeOutQuad" }'></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start marquees -->
                        <div
                            class="marquees-text slider-big-title alt-font ls-minus-10px text-olive-green text-nowrap position-absolute top-0px left-0px d-none d-md-block">
                            New Arrival</div>
                        <!-- end marquees -->
                    </div>
                    </a>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets-right"></div>
            <!-- end slider pagination -->
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-very-light-gray overlap-height position-relative pb-0">
        <div class="container-fluid overlap-gap-section">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color">Instagram</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">Cardicinstruments </h3>
                </div>
            </div>
            <div class="row">

               @foreach ($instagramWidgets as $post)
                <div class="col-md-2 col-sm-4 col-4 p-1">
                    <div class="instagram-post">
                        <a href="{{ $post->link }}"
                            target="_blank">

                            <img src="{{ asset('images/instagram/' . $post->image) }}"
                                alt="{{ $post->alt_text }}" class="img-fluid"
                                style="width: 100%; height: auto; object-fit: cover;" loading="lazy" />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Instagram Scripts Ends -->


        </div>
        </div>
    </section>
    <!-- end section -->


@endsection

