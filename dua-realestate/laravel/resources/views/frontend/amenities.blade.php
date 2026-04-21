@extends('frontend.layout.master')
@section('title' ,'Dua Real Estate')
@section('main-container')
    <!-- start page title -->
    <section class="cover-background page-title-big-typography ipad-top-space-margin">
        <div class="container">
            <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-base-color">Amenities Dua Real Estate</h1>
                    <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Welcome to   Dua Real Estate!</span></h2>
                </div>
                <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                    <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Welcome to Dua Real Estate, your trusted source for premium properties in Sialkot. We specialize in connecting you with residential and commercial plots in ideal locations.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="overflow-hidden p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0 position-relative">
                    <img src="{{ asset('assets/frontend/images/About-us (2).jpg') }}" alt="" class="w-100">
                    <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 ls-minus-5px xs-ls-minus-2px position-absolute right-minus-50px lg-right-0px bottom-minus-80px md-bottom-minus-60px xs-bottom-minus-40px text-white text-outline text-outline-width-3px" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">amenities</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0"> 
        <div class="container">
            <div class="row align-items-center">
                @foreach ($amenities as $index => $amenity)
                    @if ($index % 2 == 0)
                        <!-- Image on the Left, Text on the Right -->
                        <div class="col-lg-6 position-relative align-self-center mt-3" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"tb", "easing": "easeOutQuad", "delay":50 }'> 
                            <figure class="position-relative m-0 ">
                                <img src="{{ $amenity->image ? asset('uploads/amenities/' . $amenity->image) : asset('assets/frontend/images/default.jpg') }}" class="w-100" alt="{{ $amenity->caption }}">
                            </figure>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 mt-3" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                            <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">
                                {{ $amenity->caption }}
                            </h2> 
                            <p class="w-80 lg-w-100" style="text-align: justify">
                                {{ $amenity->description }}
                            </p>
                        </div>
                    @else
                        <!-- Text on the Left, Image on the Right -->
                        <div class="col-xl-5 col-lg-6 mt-3" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                            <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">
                                {{ $amenity->caption }}
                            </h2> 
                            <p class="w-80 lg-w-100" style="text-align: justify">
                                {{ $amenity->description }}
                            </p>
                        </div>
                        <div class="col-lg-6 position-relative align-self-center mt-3" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"tb", "easing": "easeOutQuad", "delay":50 }'> 
                            <figure class="position-relative m-0">
                                <img src="{{ $amenity->image ? asset('uploads/amenities/' . $amenity->image) : asset('assets/frontend/images/default.jpg') }}" class="w-100" alt="{{ $amenity->caption }}">
                            </figure>
                        </div>
                    @endif
                @endforeach
            </div>
            
            
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-very-light-gray">
        
    </section>
    <!-- end section -->
@endsection