@extends('frontend.layouts.master')
@section('title', 'Littlewood')
@section('main-container')
    <style>
        section {
            padding: 80px 0 !important;
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

        .text-greenish-gray {
            color: #fb8500 !important;
        }

        .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
    </style>


    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image: url('{{ asset('frontend/images/about-banner.jpg') }}');">
        {{-- <div class="opacity-extra-medium bg-extra-dark-gray"></div> --}}
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div
                    class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-white opacity-6 margin-20px-bottom">About our company</h1> --}}
                    <h2
                        class="banner-text alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        About Our Company</h2>
                </div>
                <div class="down-section text-center"><a href="#about" class="section-link"><i
                            class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
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
                    {{-- <a href="{{route('about-us')}}" class="alt-font text-extra-medium  margin-15px-top yw">More about us<i
                            class="line-icon-Arrow-OutRight icon-medium align-middle margin-15px-left"></i></a> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Text column -->
                <div class="col-12 col-md-6  text-center text-md-start wow animate__fadeIn" data-wow-delay="0.3s">
                    <span
                        class="alt-font font-weight-600 text-gradient-orange-pink letter-spacing-1px d-inline-block text-uppercase margin-20px-bottom sm-margin-10px-bottom">
                        Our Mission
                    </span>
                    <h5 class="alt-font font-weight-500 text-medium-slate-blue">
                        Dedicated to Driving Growth and Value for Your Business
                    </h5>
                    <blockquote
                        class="border-width-4px border-color-olivine-green text-extra-medium padding-25px-left pe-0 margin-40px-top margin-30px-bottom lg-w-95">
                        To inspire innovation and shape a better future.
                    </blockquote>

                    <p>
                        At Littlewood Corp, our mission is to design and manufacture premium quality gloves, workwear, and
                        protective apparel by combining advanced technology, sustainable practices, and decades of expertise
                        — serving global industries and professionals who demand the highest standards.
                    </p>
                </div>
                <!-- Image column -->
                <div class="col-12 col-md-6 text-center sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                    <img class="md-padding-30px-right" src="{{ asset('frontend/images/mission.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Text column -->
                <!-- Image column -->
                <div class="col-12 col-md-6 text-center sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                    <img src="{{ asset('frontend/images/vission.jpg') }}" alt="" />
                </div>
                <div class="col-12 col-md-6 text-center text-md-start wow animate__fadeIn" data-wow-delay="0.3s">
                    <span
                        class="alt-font font-weight-600 text-gradient-orange-pink letter-spacing-1px d-inline-block text-uppercase margin-20px-bottom sm-margin-10px-bottom">
                        Our Vision
                    </span>
                    <h5 class="alt-font font-weight-500 text-medium-slate-blue">
                        Shaping a Future Where Innovation Meets Impact
                    </h5>
                    <blockquote
                        class="border-width-4px border-color-olivine-green text-extra-medium padding-25px-left pe-0 margin-40px-top margin-30px-bottom lg-w-95">
                        To lead with innovation and create meaningful value for a better tomorrow.
                    </blockquote>

                    <p>
                        To be the world’s most trusted manufacturer of high-performance gloves and protective wear —
                        blending craftsmanship, innovation, and safety to protect those who power the world.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-light-gray wow animate__fadeIn" data-wow-delay="0.4s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-4-half-rem-bottom">
                    <span
                        class="alt-font margin-10px-bottom d-block text-uppercase text-large font-weight-500 text-gradient-orange-pink">How
                        we maintaine our Quality</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500 letter-spacing-minus-1px">Our Capabilities
                    </h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- start fancy text box item -->
                <div class="col-12 col-lg-6 col-md-8 col-sm-10 margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box feature-box-left-icon-middle padding-2-half-rem-all bg-white box-shadow-small box-shadow-extra-large-hover border-radius-6px lg-padding-1-half-rem-lr xs-padding-2-rem-all">
                        <div
                            class="feature-box-icon margin-10px-lr lg-margin-10px-lr xs-margin-10px-right xs-no-margin-left">
                            <h4
                                class="alt-font no-margin-bottom text-gradient-orange-pink font-weight-600 letter-spacing-minus-1px">
                                20k sq. ft</h4>
                        </div>
                        <div
                            class="feature-box-content border-left border-color-medium-gray padding-45px-lr lg-padding-35px-lr xs-padding-20px-left xs-no-padding-right last-paragraph-no-margin">
                            <span class="text-extra-dark-gray alt-font font-weight-500 text-large">Total Area</span>
                            <p>200,000 sq. ft. of finished leather produced monthly</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col-12 col-lg-6 col-md-8 col-sm-10 margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box feature-box-left-icon-middle padding-2-half-rem-all bg-white box-shadow-small box-shadow-extra-large-hover border-radius-6px lg-padding-1-half-rem-lr xs-padding-2-rem-all">
                        <div
                            class="feature-box-icon margin-10px-lr lg-margin-10px-lr xs-margin-10px-right xs-no-margin-left">
                            <h4
                                class="alt-font no-margin-bottom text-gradient-orange-pink font-weight-600 letter-spacing-minus-1px">
                                18k+</h4>
                        </div>
                        <div
                            class="feature-box-content border-left border-color-medium-gray padding-45px-lr lg-padding-35px-lr xs-padding-20px-left xs-no-padding-right last-paragraph-no-margin">
                            <span class="text-extra-dark-gray alt-font font-weight-500 text-large">Production
                                Capacity</span>
                            <p>180,000+ garments manufactured annually across leather and textile lines</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col-12 col-lg-6 col-md-8 col-sm-10 margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box feature-box-left-icon-middle padding-2-half-rem-all bg-white box-shadow-small box-shadow-extra-large-hover border-radius-6px lg-padding-1-half-rem-lr xs-padding-2-rem-all">
                        <div
                            class="feature-box-icon margin-10px-lr lg-margin-10px-lr xs-margin-10px-right xs-no-margin-left">
                            <h4
                                class="alt-font no-margin-bottom text-gradient-orange-pink font-weight-600 letter-spacing-minus-1px">
                                40+ Year</h4>
                        </div>
                        <div
                            class="feature-box-content border-left border-color-medium-gray padding-45px-lr lg-padding-35px-lr xs-padding-20px-left xs-no-padding-right last-paragraph-no-margin">
                            <span class="text-extra-dark-gray alt-font font-weight-500 text-large">Years of
                                Experience</span>
                            <p>40+ years of excellence in leather and textile manufacturing</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col-12 col-lg-6 col-md-8 col-sm-10 margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box feature-box-left-icon-middle padding-2-half-rem-all bg-white box-shadow-small box-shadow-extra-large-hover border-radius-6px lg-padding-1-half-rem-lr xs-padding-2-rem-all">
                        <div
                            class="feature-box-icon margin-10px-lr lg-margin-10px-lr xs-margin-10px-right xs-no-margin-left">
                            <h4
                                class="alt-font no-margin-bottom text-gradient-orange-pink font-weight-600 letter-spacing-minus-1px">
                                500+</h4>
                        </div>
                        <div
                            class="feature-box-content border-left border-color-medium-gray padding-45px-lr lg-padding-35px-lr xs-padding-20px-left xs-no-padding-right last-paragraph-no-margin">
                            <span class="text-extra-dark-gray alt-font font-weight-500 text-large">No of Employees</span>
                            <p>500+ workers work make this milestone into reality</p>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
        </div>
    </section>
    <!-- end section -->



    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-sm-8 text-center ">
                    <span
                        class="alt-font margin-10px-bottom d-block text-uppercase text-large font-weight-500 text-gradient-orange-pink ">Browse
                        our amazing Complainces</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500  sm-w-100">Our Complainces</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="swiper-container text-center"
                        data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 } } }'>
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="#" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-1.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="#" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-2.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="#" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-3.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="#" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-4.png') }}"></a></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><a href="#" target="_blank"><img alt=""
                                        src="{{ asset('frontend/images/compliance-5.png') }}"></a></div>
                            <!-- end slider item -->
                        </div>
                    </div>
                    <!-- start slider navigation -->
                    <div
                        class="swiper-button-next-nav swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large">
                        <i class="feather icon-feather-arrow-right"></i>
                    </div>
                    <div
                        class="swiper-button-previous-nav swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large">
                        <i class="feather icon-feather-arrow-left"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


@endsection
