@extends('frontend.layout.master')
@section('title' ,'Dua Real Estate')
@section('main-container')
      <style>
        .btn-gradient-purple-pink {
            background-image: linear-gradient(to right, #28306e, #70add9, #28306e);
            background-size: 200% auto;
            color: var(--white);
        }
        .video-play-icon-wrapper {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #70add9;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .video-icon a {
            color: #28306e;
            font-size: 40px;
            text-decoration: none;
        }

        .video-icon a:hover {
            color: #FFFFFF;
        }
       
        



        </style>  
    <!-- start banner slider -->
    <section class="p-0 top-space-margin">
        <div class="swiper full-screen md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor drag-cursor" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }' data-number-pagination="1">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide cover-background" style="background-image: url('{{ asset('uploads/banners/' . $banner->image) }}');">
                    </div>
                @endforeach
            </div>            
            <!-- start slider pagination --> 
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 position-relative">
                        <!-- start slider pagination --> 
                        <div class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number fs-14 alt-font ls-05px"></div>  
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <!-- <div class="slider-one-slide-prev-1 icon-very-small text-white swiper-button-prev slider-navigation-style-06"><i class="line-icon-Arrow-OutLeft icon-extra-large"></i></div>
            <div class="slider-one-slide-next-1 icon-very-small text-white swiper-button-next slider-navigation-style-06"><i class="line-icon-Arrow-OutRight icon-extra-large"></i></div> -->
            <!-- end slider navigation --> 
        </div>
    </section>
    <!-- end banner slider --> 
    
    <!-- start section --> 
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px position-relative" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure class="position-relative mb-0 overflow-hidden border-radius-6px"> 
                        <img src="{{ asset('assets/frontend/images/About-us (1).jpg') }}" alt="" class="w-100">
                        <!-- <figcaption class="position-absolute border-radius-left-8px bg-base-color right-0px bottom-0px p-45px last-paragraph-no-margin">
                            <i class="feather icon-feather-home icon-medium text-white mb-15px d-block"></i>
                            <h4 class="alt-font fw-700 text-white mb-0 d-block">258,952+</h4>
                            <p class="text-white">Properties listed for sell</p>
                        </figcaption> -->
                    </figure>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Your Trusted Real Estate Partner in Sialkot</span> 
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none sm-w-85" data-shadow-animation="true" data-animation-delay="700">We make it easy to find your<span class="fw-700 text-highlight"> ideal property.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2> 
                    <p class="md-w-100">Our collaboration with CA Gold City offers you exclusive access to prime residential and commercial plots in Sialkot’s finest community, with installment plans customized to your needs.</p>
                    <div class="mb-35px">
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08 mb-10px">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i> 
                                </div>
                                <div class="feature-box-content"> 
                                    <span class="text-dark-gray">Flexible installment options for your Plot ownership</span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i> 
                                </div>
                                <div class="feature-box-content"> 
                                    <span class="text-dark-gray">10,000+ clients trust us with their property needs</span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                    <div class="d-inline-block">
                        <a href="{{ url('about-us') }}" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">About company</a> 
                        {{-- <a href="test" class="btn btn-large btn-link btn-hover-animation-switch text-dark-gray p-0">
                            <span>
                                <span class="btn-text">Find property</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span> 
                        </a> --}}
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section --> 
    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row align-items-center mb-6 xs-mb-8">
                <div class="col-md-8 text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Property for <span class="fw-700 text-highlight d-inline-block">sell <span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                </div>
                {{-- <div class="col-md-4" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <a href="" class="fw-600 alt-font text-dark-gray text-dark-gray-hover d-flex align-items-center">View all property<span class="d-flex align-items-center justify-content-center bg-dark-gray h-40px w-40px text-center rounded-circle fs-16 text-white ms-10px"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div> --}}
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
                            <div class="bg-white" >
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
        </div>
    </section>
    <!-- end section --> 

    <!-- start section -->
    {{-- <section class="cover-background one-third-screen sm-h-500px pb-0 position-relative" style="background-image:url('{{ asset('assets/frontend/images/parallax.jpg') }}');">
        <div class="opacity-extra-medium bg-dark-gray"></div> 
        <div class="container h-100"> 
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-xl-8 col-lg-10 mb-9 md-mb-15 position-relative z-index-1 text-center d-flex flex-wrap align-items-center justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>   
                    <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-inline-flex align-items-center text-start sm-lh-20"><i class="bi bi-megaphone text-white d-inline-block align-middle icon-small me-10px"></i> Let’s Make Your Dream into Reality</span>
                    <h1 class="text-white fw-600 ls-minus-2px mb-50px">Expert solutions for luxury properties in Sialkot!</h1> 
                    <a href="{{ url('contact-us') }}" class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink btn-rounded me-10px">
                        <span>
                            <span class="btn-double-text" data-text="Contact Us">Contact Us</span>
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a> 
                </div>  
            </div> 
        </div>
        <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block"> 
            <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff"> 
            <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
            <animate
                attributeName="d"
                dur="5s"
                values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                repeatCount="indefinite"
                />
            </path>
            </svg>
        </div>
    </section> --}}
    <section class="cover-background one-third-screen sm-h-500px pb-0 position-relative" style="background-image:url('{{ asset('assets/frontend/images/parallax.jpg') }}');">
        <div class="opacity-extra-medium bg-dark-gray"></div> 
        <div class="container h-100"> 
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-xl-8 col-lg-10 position-relative z-index-1 text-center">
                    <!-- Circular video icon -->
                    <span class="ps-25px pe-25px pt-5px pb-5px mb-25px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-inline-flex align-items-center text-start sm-lh-20"><i class="bi bi-megaphone text-white d-inline-block align-middle icon-small me-10px"></i> Let’s Make Your Dream Property a Reality</span>
                    <h1 class="text-white fw-600 ls-minus-2px mb-50px">We provide solutions for finding premium property!
                    </h1> 
                    <div class="video-play-icon-wrapper position-relative mx-auto">
                        <div class="video-icon">
                            <a href="https://www.youtube.com/embed/xGxrhXVmkYc?si=bwIIZDdl9DJwkpv1" class="video-popup">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>  
            </div> 
        </div>
        <div class="shape-image-animation p-0 w-100 bottom-minus-40px xl-bottom-0px d-none d-md-block"> 
            <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewBox="0 180 2500 200" fill="#ffffff"> 
            <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
            <animate
                attributeName="d"
                dur="5s"
                values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                        M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250"
                repeatCount="indefinite"
                />
            </path>
            </svg>
        </div>
    </section>

    <!-- start section -->
    <section class="">
        <div class="container-fluid">
            <div class="row align-items-center mb-6 xs-mb-8">
                <div class=" text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none text-center" data-shadow-animation="true" data-animation-delay="700">
                       Our  <span class="fw-700 text-highlight d-inline-block">Amenities <span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span>
                    </h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start box item -->
                @foreach ( $amenities as $amenity)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30px">
                    <div class="border-radius-6px overflow-hidden box-shadow-large">
                        <div class="image position-relative">
                            <a href="{{ route('amenities') }}">
                                <img src="{{ asset('uploads/amenities/' . $amenity->image) }}" alt="">
                            </a>
                            <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">
                                {{$amenity->caption}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end box item -->
            </div>
            <div class="row align-items-center mb-6 xs-mb-8">
                <div class=" text-center  sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="{{ route('amenities') }}" class="btn btn-extra-large btn-switch-text btn-gradient-purple-pink btn-rounded me-10px">
                        <span>
                            <span class="btn-double-text" data-text="All Amenities">All Amenities</span>
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a> 
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


     <!-- start section -->
     <section class="overflow-hidden bg-gradient-very-light-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 md-mb-50px sm-mb-35px"> 
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Exclusive Property Plans: 3-Year & 5-Year Options</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px w-90 xl-w-100 shadow-none" data-shadow-animation="true" data-animation-delay="700">We are available in <span class="fw-700 text-highlight d-inline-block">Sialkot<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                    <p class="mb-30px w-90 md-w-100">We offer flexible 3-year and 5-year payment plans with immediate on-ground possession. Secure your residential or commercial plot today with customizable options!</p>
                    <div class="d-flex">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                        <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="outside-box-right-20 sm-outside-box-right-0" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item --> 
                                @foreach ( $images as $amenity)
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src="{{ asset('uploads/images/' . $amenity->image) }}" class="w-100 border-radius-6px" alt="" />
                                                <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                            </a>
                                            
                                        </figure>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                @endforeach
                                <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- start section -->
    <section class="pt-0">
        <div class="container background-no-repeat background-position-top" style="background-image: url('images/demo-it-business-testimonial-bg.png')">
            <div class="row justify-content-center mb-2">
                <div class="col-xxl-6 col-lg-8 col-md-9 text-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                    <h3 class="text-dark-gray fw-700 ls-minus-2px">Trusted by the our reliable Clients.</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mb-6 sm-mb-8">  
                <div class="col-xl-10 position-relative">
                    <div class="swiper magic-cursor testimonials-style-06" data-slider-options='{ "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }'>
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img alt="" src="{{ asset('assets/frontend/images/testimonial1.jpg') }}">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block"><img src="images/logo-monday-dark-blue-01.svg" class="h-35px" alt=""></a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">"I recently secured a residential plot through Dua Real Estate, and I couldn't be happier! Their team guided me through every step of the process, making it easy and stress-free. I highly recommend their services!"</span>
                                        <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">Haris Mehmood</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img alt="" src="{{ asset('assets/frontend/images/testimonial2.jpg') }}">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block"><img src="images/logo-loitech-dark-blue.svg" class="h-35px" alt=""></a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">""Dua Real Estate made finding the perfect plot an enjoyable experience. Their knowledgeable staff helped me explore various options, and I found a location that fit my budget.”</span>
                                        <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">Muzamil Razzaq</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img alt="" src="{{ asset('assets/frontend/images/testimonial3.jpg') }}">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block"><img src="images/logo-invision-dark-blue.svg" class="h-35px" alt=""></a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">""As a first-time buyer, I was nervous about the process. However, Dua Real Estate made it straightforward and transparent. They helped me secure a plot in Sialkot’s finest community."
                                        </span>
                                        <span class="fs-15 text-uppercase fw-800 text-dark-gray ls-05px">Ameer Hamza</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>
                        <!-- start slider navigation -->
                        <div class="swiper-button-previous-nav swiper-button-prev md-left-0px"><i class="feather icon-feather-arrow-left icon-extra-medium text-dark-gray"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next md-right-0px"><i class="feather icon-feather-arrow-right icon-extra-medium text-dark-gray"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div> 
            </div> 
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="p-0 overlap-height">
        <div class="container overlap-gap-section">
            <div class="row align-items-center mb-2" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center">
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Latest trends <span class="fw-700 text-highlight d-inline-block">blogs<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @foreach ($blog as $item)
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                    <a href="{{ route('blog.detail', ['id' => $item->id]) }}">
                                        <img src="{{ asset('uploads/blogs/' . $item->image) }}" alt="{{ $item->name }}" />
                                    </a>
                                </div>
                                <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase">
                                        <a href="{{ route('blog.show') }}" class="text-dark-gray fw-500 categories-text">{{ $item->name }}</a>
                                        <a href="#" class="blog-date">{{ $item->created_at->format('d F Y') }}</a>
                                    </span>
                                    <a href="{{ route('blog.detail', ['id' => $item->id]) }}" class="card-title mb-10px alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">
                                        {{ \Illuminate\Support\Str::words($item->qoute, 7) }}
                                    </a>                                    
                                </div>
                            </div>
                        </li>
                    @endforeach
                        
                    </ul>
                </div>
            </div> 
        </div>
    </section>
    <!-- end section --> 
        

@endsection
  