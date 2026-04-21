@extends('frontend.layout.master')
@section('title' ,'Dua Real Estate')
@section('main-container')
<style>
.nav-tabs {
    justify-content: center;
    border-bottom: none; /* Remove bottom border from nav-tabs */
}

.nav-link {
    border: none;
    outline: none;
}

/* Optional: Add spacing between tabs */
.nav-item {
    margin: 0 5px;
}
.nav-tabs .nav-link
{
    color: #000000 !important;
}
.nav-tabs .nav-link.active 
{
    color: var(--white) !important;
    background-color: var(--base-color) !important;
    border-color: var(--white) !important;
}
.nav-tabs .nav-link:hover 
{
    color: var(--white) !important;
    background-color: var(--dark-gray) !important;
    border-color: var(--dark-gray) !important;
}
    </style>
    <!-- start page title -->
    <section class="cover-background page-title-big-typography ipad-top-space-margin">
        <div class="container">
            <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-base-color">Media Dua Real Estate</h1>
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
                    <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 ls-minus-5px xs-ls-minus-2px position-absolute right-minus-50px lg-right-0px bottom-minus-80px md-bottom-minus-60px xs-bottom-minus-40px text-white text-outline text-outline-width-3px" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">media</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <!-- Tabs Navigation -->
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                Images
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                Videos
                            </button>
                        </li>
                    </ul>
    
                    <!-- Tabs Content -->
                    <div class="tab-content mt-4" id="myTabContent">
                        <!-- Tab 1 Content -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="container-fluid">
                                <div class="row align-items-center mb-6 xs-mb-8">
                                    <div class=" text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                        <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none text-center" data-shadow-animation="true" data-animation-delay="700">
                                            Our  <span class="fw-700 text-highlight d-inline-block">Images <span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <!-- start box item -->
                                    @foreach ( $images as $images)
                                    <div class="col-lg-4 col-md-6  mb-30px">
                                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                                            <div class="image position-relative">
                                                <img src="{{ asset('uploads/images/' . $images->image) }}" alt="">
                                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">
                                                    {{$images->caption}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- end box item -->
                                </div>  
                            </div>
                        </div>
                        <!-- Tab 2 Content -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="container-fluid">
                                <div class="row align-items-center mb-6 xs-mb-8">
                                    <div class=" text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                        <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none text-center" data-shadow-animation="true" data-animation-delay="700">
                                            Our  <span class="fw-700 text-highlight d-inline-block">Videos <span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <!-- start box item -->
                                    @foreach ( $videos as $videos)
                                    <div class="col-lg-4 col-md-6 mb-30px">
                                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                                            <div class="video-wrapper position-relative">
                                                <!-- YouTube Video Embed -->
                                                <iframe 
                                                    width="100%" 
                                                    height="250" 
                                                    src="{{$videos->link}}" 
                                                    frameborder="0" 
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                    allowfullscreen>
                                                </iframe>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- end box item -->
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-very-light-gray">
        
    </section>
    <!-- end section -->
@endsection