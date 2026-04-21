@extends('frontend.layout.master')
@section('title' ,'Dua Real Estate')
@section('main-container')
    <!-- start page title -->
    <section class="cover-background page-title-big-typography ipad-top-space-margin">
        <div class="container">
            <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-base-color">Find Your Dream Plot</h1>
                    <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none"
                        data-shadow-animation="true" data-animation-delay="700">Let us help you find the <span
                            class="fw-700 text-highlight d-inline-block">perfect property.<span
                                class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span>
                    </h2>
                </div>
                <div
                    class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                    <span class="d-block w-85 lg-w-100"
                        data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>At Dua Real Estate, in partnership with CA Gold City, we are committed to building a sustainable and secure community where residents and businesses can thrive—all within Sialkot’s premier housing society.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="overflow-hidden position-relative p-0">
        <div class="opacity-very-light bg-dark-gray z-index-1"></div>
        <div class="container-fluid">
            <div class="row overlap-height">
                <div class="col-12 p-0 position-relative overlap-gap-section">
                    <img src="{{ asset('uploads/projects/' . $projects->banner_image) }}" alt="" class="w-100">
                    <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 position-absolute right-minus-170px lg-right-0px bottom-50px md-bottom-minus-60px xs-bottom-minus-50px text-white text-outline ls-minus-5px lg-right-0px text-outline-width-2px z-index-2"
                        data-bottom-top="transform: translate3d(80px, 0px, 0px);"
                        data-top-bottom="transform: translate3d(-280px, 0px, 0px);">DUA</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->  
    <section class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 md-mb-50px">
                    <div class="row mb-15px w-100">
                        <div class="col-12">
                            <span class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Property description</span>
                            <p>{!! $projects->description !!}</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- end section --> 
    <!-- start section -->
    <section class="p-0 overflow-hidden">
        <div class="container-fluid p-0"> 
            <div class="row row-cols-1 justify-content-center">
                <!-- start content carousel item -->
                <div class="col">
                    <div class="swiper magic-cursor slider-four-slide swiper-dark-pagination swiper-pagination-style-3" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 20, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- Main project image -->
                            {{-- <div class="swiper-slide">
                                <img src="{{ asset('uploads/projects/' . $projects->image) }}" alt="" class="w-100" />
                            </div> --}}
    
                            <!-- Additional images -->
                            @foreach ($additionalImages as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('uploads/projects/' . $image) }}" alt="" class="w-100" />
                                </div>
                            @endforeach
                        </div>
                        <!-- Navigation buttons (uncomment if needed)
                        <div class="slider-one-slide-prev-1 icon-very-small bg-white h-40px w-40px swiper-button-prev slider-navigation-style-01"><i class="feather icon-feather-arrow-left fs-20 text-light-gray"></i></div>
                        <div class="slider-one-slide-next-1 icon-very-small bg-white h-40px w-40px swiper-button-next slider-navigation-style-01"><i class="feather icon-feather-arrow-right fs-20 text-light-gray"></i></div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray z-index-3 position-relative">
        <div class="container">
          
            <div class="row mb-4 xs-mb-10 pt-9" id="rentals">
                <div class="col-12 text-center">
                    <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true"
                        data-animation-delay="700"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Our Projects for <span class="fw-700 text-highlight">sell<span
                                class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span>
                    </h3>
                </div>
            </div>
            <div class="row row-cols-1  row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start box item -->
                @foreach($projects->types as $type)
                    <!-- start box item -->
                    <div class="col-lg-4 col-md-6 mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="{{ route('project.detail', $type->id) }}">
                                    <img src="{{ asset('uploads/project_types/' . $type->image) }}" alt="">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">
                                    {{ $type->type == '1' ? 'Commercial' : ($type->type == '2' ? 'Residential' : ($type->type == '3' ? 'Down Town' : 'Unknown')) }}
                                </div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-20px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('project.detail', $type->id) }}" class="alt-font text-dark-gray fw-700 fs-22 me-10px">
                                            {{ $type->type == '1' ? 'Commercial' : ($type->type == '2' ? 'Residential' : ($type->type == '3' ? 'Down Town' : 'Unknown')) }}
                                        </a>
                                    </div>
                                    <p class="mb-0" style="height: 300px; text-align:justify;">{{ $type->description }}</p>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Ensure you are passing the type ID correctly -->
                                        <a href="{{ route('project.detail', $type->id) }}" class="btn btn-dark-gray btn-medium btn-round-edge fw-600">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- end box item -->
                
            </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="overflow-hidden position-relative overlap-height pb-30px">
        <div class="container overlap-gap-section">
            <div class="row mb-2">
                <div class="col-12 text-center">
                    <h5 class="alt-font fw-500 text-dark-gray">We cherish our best trading <span
                        class="text-red fs-28 ms-5px me-5px align-middle">&#x2764;</span><strong
                        class="text-decoration-line-bottom-medium">partners and the relationships we build with people.</strong></h5>
                </div>
            </div>
            <div class="row position-relative clients-style-08">
                <div class="col swiper text-center feather-shadow mb-3"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/ar.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/down.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/com.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/over.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/ar.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/down.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/com.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ asset('assets/frontend/images/over.png') }}" alt=""  /></a>
                        </div>
                        <!-- end client item -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection