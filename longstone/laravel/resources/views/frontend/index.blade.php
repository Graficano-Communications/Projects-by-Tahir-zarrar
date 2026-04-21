@extends('frontend.layout.master')
@section('title', 'Long Stone Int')
@section('main-container')


    <section class="p-0">
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="swiper-container white-move full-screen p-0 md-h-650px sm-h-500px"
                    data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4500, "disableOnInteraction": false },  "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav1", "prevEl": ".swiper-button-previous-nav1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>


                    <div class="swiper-wrapper">
                        @foreach ($banners as $banner)
                        <div class="swiper-slide cover-background"
                            style="background-image: url('{{ asset('uploads/banners/' . $banner->image) }}');">
                            <div class="container h-100">
                                <div class="row h-100">
                                    <div
                                        class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column position-relative">
                                        <h3
                                            class="alt-font font-weight-600 title-medium text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom xs-w-90 mx-auto text-white">
                                             {{ $banner->caption }}
                                        </h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>



                    <div class="swiper-pagination swiper-light-pagination d-sm-none"></div>
                    <div
                        class="swiper-button-next-nav1 swiper-button-next rounded-circle slider-navigation-style-07 d-none d-sm-flex">
                        <i class="feather icon-feather-arrow-right"></i></div>
                    <div
                        class="swiper-button-previous-nav1 swiper-button-prev rounded-circle slider-navigation-style-07 d-none d-sm-flex">
                        <i class="feather icon-feather-arrow-left"></i></div>

                </div>
            </div>
        </div>
    </section>

    {{-- <section class="p-0">
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="swiper-container white-move full-screen p-0 md-h-650px sm-h-500px"
                    data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 4500, "disableOnInteraction": false },  "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        @foreach ($banners as $banner)
                            <!-- start slider item -->
                            <div class="swiper-slide cover-background"
                                style="background-image: url('{{ asset('uploads/banners/' . $banner->image) }}');">
                                <div class="container h-100">
                                    <div class="row justify-content-center h-100">
                                        <!--<div class="col-12 col-xl-6 col-sm-7 d-flex flex-column justify-content-center text-center h-100">-->
                                        <!--    <span class="alt-font font-weight-500 text-extra-medium letter-spacing-2px text-uppercase d-block margin-35px-bottom sm-margin-15px-bottom text-white">-->
                                        <!--        {{ $banner->caption }}-->
                                        <!--    </span>-->
                                        <!--    <h1 class="alt-font font-weight-800 title-large text-uppercase letter-spacing-minus-4px margin-45px-bottom sm-letter-spacing-minus-1px sm-margin-30px-bottom text-shadow-large sm-no-text-shadow xs-w-90 mx-auto text-white">-->
                                        <!--        {{ $banner->description }}-->
                                        <!--    </h1>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                        @endforeach

                    </div>
                    <!-- start slider pagination -->
                    <div class="swiper-pagination swiper-light-pagination d-sm-none"></div>
                    <!-- end slider pagination -->
                    <!-- start slider navigation -->
                    <div
                        class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07 d-none d-sm-flex">
                        <i class="feather icon-feather-arrow-right"></i></div>
                    <div
                        class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07 d-none d-sm-flex">
                        <i class="feather icon-feather-arrow-left"></i></div>
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
    </section> --}}
    <!-- end revolution slider section -->
    <!-- end section -->
    <!-- start section -->
    <section class="big-section sm-no-padding-top">
        <div class="container">
            <div class="row align-items-lg-center justify-content-center">
                <div class="col-12 col-lg-4 col-md-6 architecture fancy-text-box-style-01 text-center text-md-start md-margin-50px-bottom sm-margin-50px-bottom wow animate__fadeIn mt-md-0 mt-5"
                    data-wow-delay="0.1s">
                    <div class="fancy-text-box padding-3-half-rem-all md-padding-4-rem-all xs-padding-30px-all">
                        <div class="fancy-text-box-border-left border-color-white-transparent"></div>
                        <h1
                            class="alt-font fancy-text-content font-weight-600 text-parrot-green d-inline-block align-middle letter-spacing-minus-5px">
                            25</h1>
                        <div
                            class="alt-font text-extra-medium  text-start d-inline-block align-middle w-90px mx-auto line-height-24px position-relative top-minus-4px">
                            Years experience working</div>
                        <div class="fancy-text-box-border-right border-color-white-transparent"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-4 text-center text-md-start xs-margin-15px-bottom wow animate__fadeIn"
                    data-wow-delay="0.3s">
                    <span
                        class="alt-font d-block text-uppercase margin-20px-bottom font-weight-500 sm-margin-10px-bottom">Since
                        1999</span>
                    <div
                        class="alt-font font-weight-500 text-extra-large line-height-32px d-block  w-85 lg-w-100 sm-margin-15px-bottom">
                        Providing Quality Surgical Instruments Worldwide.</div>
                </div>
                <div class="col-12 col-lg-5 col-md-10 text-center text-md-start wow animate__fadeIn" data-wow-delay="0.5s">
                    <p class="w-85 lg-w-100 margin-20px-bottom just">Long Stone Int’l Co. has been a trusted name in the
                        industry since 1999, specializing in high-quality surgical, dental, and body care instruments. With
                        a commitment to product integrity, we provide reliable tools to professionals worldwide. Our skilled
                        team and advanced manufacturing facilities ensure that every instrument we deliver meets the highest
                        standards of quality and performance.</p>
                    <a href="{{ url('about-us') }}" class="btn btn-link btn-extra-large text-medium-gray">About company</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    
    <!-- start section -->
    <section class="py-0 wow animate__fadeIn">
        <div class="container-fluid lg-padding-30px-lr xs-padding-15px-lr">

            <div class="row justify-content-center">
                <div
                    class="col-12 text-center divider-full margin-8-rem-bottom p-0 lg-margin-5-half-rem-bottom xs-margin-3-half-rem-bottom wow animate__fadeIn">
                    <div class="divider-border divider-light d-flex align-items-center w-100">
                        <span
                            class="alt-font font-weight-500 text-parrot-green text-uppercase letter-spacing-1px d-block padding-30px-lr">Categories</span>
                    </div>
                </div>

                <div class="col-12 px-lg-0 wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="swiper-container category-swiper position-relative"
                        data-slider-options='{ 
                        "slidesPerView": 1, 
                        "spaceBetween": 30, 
                        "navigation": { "nextEl": ".swiper-button-next-cat", "prevEl": ".swiper-button-prev-cat" }, 
                        "autoplay": { "delay": 3000, "disableOnInteraction": false }, 
                        "keyboard": { "enabled": true, "onlyInViewport": true }, 
                        "breakpoints": { 
                            "1200": { "slidesPerView": 4 }, 
                            "992": { "slidesPerView": 3 }, 
                            "768": { "slidesPerView": 2 } 
                        }, 
                        "effect": "slide" 
                    }'>

                        <div class="swiper-wrapper">
                            @foreach ($categories as $category)
                                <div class="swiper-slide">
                                    <div class="col interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn px-3"
                                        data-wow-delay="0.2s">
                                        <figure class="m-0">
                                            <img src="{{ asset('uploads/categories/' . $category->image) }}"
                                                alt="{{ $category->name }}" />
                                            <div class="opacity-very-light bg-black"></div>
                                            <figcaption>
                                                <div
                                                    class="interactive-banners-content align-items-start padding-4-rem-all last-paragraph-no-margin">
                                                    <h6
                                                        class="alt-font font-weight-500 w-55 position-relative z-index-1 xl-w-80 lg-w-40 md-w-50 xs-w-60 text-white">
                                                        {{ $category->name }}
                                                    </h6>
                                                    <span
                                                        class="interactive-banners-hover-icon w-40px h-40px line-height-44px text-center d-inline-block bg-white rounded-circle">
                                                        <i
                                                            class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                                    </span>
                                                </div>
                                                <div
                                                    class="interactive-banners-hover-action align-items-end d-flex bg-transparent-gradiant-white-black">
                                                    <div class="padding-4-rem-all last-paragraph-no-margin">
                                                        <p class="interactive-banners-action-content w-85 md-w-95">
                                                            {!! $category->description !!}</p>
                                                        <a href="{{ route('category.subcategories', Str::slug($category->name)) }}"
                                                            class="alt-font text-parrot-green-hover text-small text-uppercase d-inline-block font-weight-500">
                                                            See Products
                                                            <i
                                                                class="feather icon-feather-arrow-right align-middle margin-5px-left"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 col-md-9 md-margin-40px-bottom xs-margin-30px-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <h6
                        class="alt-font line-height-44px mb-0 md-line-height-34px sm-line-height-30px sm-w-80 xs-w-100 just">
                        With over 25 years of experience, we create surgical instruments known for their quality..</h6>
                </div>
                <div class="col-12 col-lg-3 offset-lg-1 col-sm-6 last-paragraph-no-margin xs-margin-30px-bottom wow animate__fadeIn"
                    data-wow-delay="0.3s">
                    <span
                        class="alt-font font-weight-500  text-uppercase letter-spacing-1px d-block margin-5px-bottom">Quality
                        First</span>
                    <p class="w-85 lg-w-100 md-w-80 sm-w-90 xs-w-100 just">We focus on providing surgical instruments that
                        are reliable and built to last.</p>
                </div>
                <div class="col-12 col-lg-3 col-sm-6 last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.4s">
                    <span
                        class="alt-font font-weight-500  text-uppercase letter-spacing-1px d-block margin-5px-bottom">Designed
                        for Accuracy
                    </span>
                    <p class="w-85 lg-w-100 md-w-80 sm-w-90 xs-w-100 just">Each instrument is made carefully to ensure it
                        works well and meets your needs</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="cover-background p-0 wow animate__fadeIn" data-wow-delay="0.1s"
        style="background-image: url('{{ asset('assets/frontend/images/Front-images/parallex-banner.jpg') }}');">
        <div class="opacity-extra-medium bg-dark-slate-blue"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 one-half-screen d-flex flex-column justify-content-center text-center lg-h-500px sm-h-400px xs-h-300px wow animate__bounceIn"
                    data-wow-delay="0.4s">
                    <!--<a href="https://www.youtube.com/watch?v=g0f_BRYJLJE" class="popup-youtube video-icon-box video-icon-large">-->
                    <!--    <span>-->
                    <!--        <span class="video-icon bg-parrot-green">-->
                    <!--            <i class="icon-simple-line-control-play text-extra-dark-gray"></i>-->
                    <!--            <span class="video-icon-sonar">-->
                    <!--                <span class="video-icon-sonar-bfr bg-parrot-green opacity-7"></span>-->
                    <!--            </span>-->
                    <!--        </span>-->
                    <!--    </span>-->
                    <!--</a>-->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-visible pb-0 pt-md-0 wow animate__fadeIn" data-wow-delay="0.8s">
        <div class="container-fluid">
            <div class="row justify-content-end overlap-section-one-fourth">
                <div
                    class="col-12 col-xl-4 col-lg-6 col-md-7 position-relative bg-extra-medium-slate-blue text-center text-md-start padding-5-half-rem-tb padding-6-half-rem-lr xl-padding-4-half-rem-lr lg-padding-3-half-rem-all sm-padding-15px-lr sm-no-padding-tb">
                    <h4 class="alt-font font-weight-500  mb-0 letter-spacing-minus-1px text-color-orange">High-quality
                        designed <span
                            class="text-color-orange font-weight-600 text-decoration-line-bottom">instruments</span></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="padding-80px-top pb-0 md-padding-50px-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-5 row-cols-sm-2 client-logo-style-02">
                <!-- start client logo item -->
                <div class="col text-center md-margin-45px-bottom xs-margin-60px-bottom wow animate__fadeIn">
                    <a href="#" class="client-logo"><img alt=""
                            src="{{ url('assets/frontend/images/Front-images/longstone-ce.png') }}"></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center md-margin-45px-bottom xs-margin-60px-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <a href="#" class="client-logo"><img alt=""
                            src="{{ url('assets/frontend/images/Front-images/longstone-chamber.png') }}"></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center xs-margin-45px-bottom xs-margin-60px-bottom wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <a href="#" class="client-logo"><img alt=""
                            src="{{ url('assets/frontend/images/Front-images/longstone-fda.png') }}"></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                    <a href="#" class="client-logo"><img alt=""
                            src="{{ url('assets/frontend/images/Front-images/longstone-iso1.png') }}"></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center xs-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                    <a href="#" class="client-logo"><img alt=""
                            src="{{ url('assets/frontend/images/Front-images/longstone-iso2.png') }}"></a>
                </div>
                <!-- end client logo item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div
                    class="col-12 text-center divider-full margin-9-half-rem-bottom p-0 lg-margin-5-half-rem-bottom wow animate__fadeIn">
                    <div class="divider-border divider-light d-flex align-items-center w-100">
                        <span
                            class="alt-font font-weight-500 text-parrot-green text-uppercase letter-spacing-1px d-block padding-30px-lr">Process
                            Step</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-lg-0 wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="swiper-container portfolio-classic position-relative"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start slide item -->
                            @foreach ($processSteps as $process)
                                <div class="swiper-slide overflow-hidden">
                                    <div class="portfolio-box text-center">
                                        <div class="portfolio-image bg-parrot-green">
                                            <a><img src="{{ asset('uploads/process-steps/' . $process->image) }}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="portfolio-caption padding-30px-tb sm-padding-15px-tb">
                                            <a
                                                class="alt-font text-color-orange font-weight-500 text-uppercase d-inline-block margin-5px-bottom">{{ $process->caption }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- end slide item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-transparent-black-very-light position-relative wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-5 offset-lg-2 order-2 order-lg-1 wow animate__zoomIn" data-wow-delay="0.3s">
                    <img src="{{ url('assets/frontend/images/architecture-img-15.png') }}" alt="" />
                </div>
                <div class="col-12 col-xl-4 offset-xl-1 col-lg-5 col-md-7 order-1 order-lg-2 text-center text-lg-start md-margin-50px-bottom wow animate__fadeIn"
                    data-wow-delay="0.5s">
                    <h5 class="alt-font font-weight-500 lg-w-95 md-w-100 ">Serving Professionals Worldwide with Trusted
                        Instruments</h5>
                    <p class="w-80 margin-20px-bottom md-w-100 just">We deliver high-quality instruments to professionals
                        worldwide, ensuring quick delivery and reliable service across continents. </p>
                    <a href="{{ url('contact-us') }}" class="btn btn-link btn-extra-large text-medium-gray">Contact Us
                        Today!</a>
                </div>
                <div class="home-architecture-middle-text w-auto alt-font font-weight-600 text-big text-parrot-green letter-spacing-minus-10px left-minus-50px md-left-0px md-right-0px md-bottom-minus-40px position-absolute opacity-2 text-start text-md-center d-none d-lg-block"
                    data-wow-delay="0.7s">world</div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="padding-90px-bottom md-padding-75px-bottom sm-padding-50px-bottom">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div
                    class="col-12 text-center divider-full margin-8-rem-bottom p-0 lg-margin-5-half-rem-bottom xs-margin-3-half-rem-bottom wow animate__fadeIn">
                    <div class="divider-border divider-light d-flex align-items-center w-100">
                        <span
                            class="alt-font font-weight-500 text-parrot-green text-uppercase letter-spacing-1px d-block padding-30px-lr">Latest
                            blogs</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-md-0">
                    <ul
                        class="blog-metro blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @foreach ($blogs as $blog)
                            <li class="grid-item last-paragraph-no-margin wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image">
                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                            alt="{{ $blog->name }}">
                                        <div class="blog-overlay"></div>
                                    </div>
                                    <div
                                        class="post-details d-flex flex-column align-items-start padding-4-rem-lr padding-3-half-rem-tb xl-padding-3-rem-lr">
                                        <div class="mb-auto w-100">
                                            <a href="{{ route('blog.detail', $blog->id) }}"
                                                class="blog-category alt-font">Blogs</a>
                                        </div>
                                        <div class="align-self-end w-100">
                                            <a href="{{ route('blog.detail', $blog->id) }}"
                                                class="alt-font font-weight-500 text-extra-small d-inline-block text-uppercase opacity-6 margin-15px-bottom">
                                                {{ $blog->created_at->format('d F Y') }}
                                            </a>
                                            <h6 class="alt-font font-weight-500 text-extra-large mb-0">
                                                <a href="{{ route('blog.detail', $blog->id) }}"
                                                    class="">{{ $blog->name }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center margin-80px-top md-margin-70px-top sm-margin-40px-top wow animate__fadeIn"
                    data-wow-delay="0.8s">
                    <h6 class="alt-font font-weight-600  text-uppercase mb-0"> Let’s Work Together to Meet Your Instrument
                        Needs – <a href="{{ url('contact-us') }}"
                            class="text-parrot-green -hover text-decoration-line-bottom">Contact Us Today!</a></h6>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


@endsection
