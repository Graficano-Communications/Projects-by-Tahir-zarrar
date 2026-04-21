@extends('layouts.master')

@section('title', 'About Us | Cardic Instruments')
@section('SpecificStyles')
    <style>
        .about ul li {
            padding: 10px 0px;
        }
    </style>
@stop

@section('content')
    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url('{{ asset('assets/frontend/images/front-images/card-about-banner.jpg') }}')">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["About Us"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        Over the years, our commitment to excellence and passion for
                        clients has been recognized.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start breadcrumb -->
    <section class="pt-15px pb-15px border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 breadcrumb breadcrumb-style-01 fs-15">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>About US</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section class="overlap-height">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-4 md-mb-6">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color d-block">Facts of Cardic Instruments</span>
                    <h3 class="alt-font fw-500 text-dark-gray w-95 xl-w-100 mx-auto ls-minus-1px">
                        Building trust through trusted Medical Manufacturing
                        <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Since 1981</span>
                    </h3>
                    <p>
                        We manufacture high-quality surgical instruments designed for safety, accuracy, and long-term
                        performance. Our products support medical professionals worldwide with reliable tools for modern
                        healthcare.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray">
        <div class="container overlap-section">
            <div class="row row-cols-1 row-cols-lg-2 bg-blue-whale border-radius-6px g-0 overflow-hidden mb-8"
                data-anime='{ "scale": [0.9, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col cover-background md-h-550px sm-h-400px"
                    style="background-image: url({{ asset('assets/images/about-us-image19.jpg') }})"></div>
                <div class="col pt-7 pb-7 ps-8 pe-8 xl-p-5">
                    <h3 class="alt-font fw-500 text-white ls-minus-1px">
                        About Us<span class="fw-700 font-style-italic text-decoration-line-bottom-medium"></span>
                    </h3>
                    <p class="mb-20px" style="text-align: justify">
                        With over four decades of experience, Cardic Instruments is a
                        distinguished leader in the healthcare industry renowned for
                        precision, innovation and unwavering commitment to excellence. Our
                        mission is simple yet powerful: to simplify the work of healthcare
                        professionals by providing the finest surgical instrumentation and
                        unparalleled service. Through continuous innovation, strict quality
                        control and a dedicated team we offer tailored solutions that
                        elevate the quality of patient care and make the professional
                        lives of our partners easier.
                    </p>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2 text-center justify-content-center"
                data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col last-paragraph-no-margin border-end border-color-extra-medium-gray sm-mb-40px">
                    <h2 class="alt-font fw-700 text-dark-gray mb-5px">40+</h2>
                    <p>Years of experience</p>
                </div>
                <div
                    class="col last-paragraph-no-margin border-end sm-border-end-0 border-color-extra-medium-gray sm-mb-40px">
                    <h2 class="alt-font fw-700 text-dark-gray mb-5px">1500+</h2>
                    <p>Products manufactured</p>
                </div>
                <div class="col last-paragraph-no-margin border-end border-color-extra-medium-gray">
                    <h2 class="alt-font fw-700 text-dark-gray mb-5px">60+</h2>
                    <p>Countries supplied</p>
                </div>
                <div class="col last-paragraph-no-margin">
                    <h2 class="alt-font fw-700 text-dark-gray mb-5px">99%</h2>
                    <p>Quality assurance</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overlap-height">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-4 sm-mb-10">
                <div class="col-xl-6 col-lg-7 col-md-8 text-center last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color">Why Choose Us</span>
                    <h3 class="alt-font fw-500 text-dark-gray w-80 xs-w-100 mx-auto ls-minus-1px">
                        Our refined process built on precision, expertise, and
                        <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">long-term
                            partnership</span>
                    </h3>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start process step item -->
                <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                    <i class="bi bi-chat-text text-dark-gray icon-large mb-20px"></i>
                    <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Strategic understanding</span>
                    <p>We begin with detailed consultations to fully understand clinical needs, regulatory requirements, and
                        performance expectations for every surgical instrument we manufacture.</p>
                    <div class="process-step-icon-box position-relative mt-15px">
                        <span class="progress-step-separator bg-dark-gray opacity-1 w-55 separator-line-1px"></span>
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto h-70px w-70px fs-26 fw-500 rounded-circle text-dark-gray alt-font">
                            <span class="number position-relative top-minus-2px z-index-1">01</span>
                            <div class="box-overlay bg-base-color rounded-circle"></div>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin md-mb-50px">
                    <i class="bi bi-question-circle text-dark-gray icon-large mb-20px"></i>
                    <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Precision engineering</span>
                    <p>Our experienced engineering team converts technical specifications into high-precision medical
                        instruments using advanced manufacturing systems and strict quality control procedures.</p>
                    <div class="process-step-icon-box position-relative mt-15px">
                        <span class="progress-step-separator bg-dark-gray opacity-1 w-55 separator-line-1px"></span>
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto h-70px w-70px fs-26 fw-500 rounded-circle text-dark-gray alt-font">
                            <span class="number position-relative top-minus-2px z-index-1">02</span>
                            <div class="box-overlay bg-base-color rounded-circle"></div>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin xs-mb-50px">
                    <i class="bi bi-bookmark-star text-dark-gray icon-large mb-20px"></i>
                    <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Comprehensive validation</span>
                    <p>Every product undergoes extensive inspection, testing, and certification to guarantee consistency,
                        safety, durability, and full compliance with international medical standards.</p>
                    <div class="process-step-icon-box position-relative mt-15px">
                        <span class="progress-step-separator bg-dark-gray opacity-1 w-55 separator-line-1px"></span>
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto h-70px w-70px fs-26 fw-500 rounded-circle text-dark-gray alt-font">
                            <span class="number position-relative top-minus-2px z-index-1">03</span>
                            <div class="box-overlay bg-base-color rounded-circle"></div>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
                <!-- start process step item -->
                <div class="col text-center process-step-style-02 hover-box last-paragraph-no-margin">
                    <i class="bi bi-journal-bookmark text-dark-gray icon-large mb-20px"></i>
                    <span class="d-block alt-font fw-600 fs-19 text-dark-gray mb-5px">Reliable partnership</span>
                    <p>We maintain long-term partnerships by providing dependable global delivery, responsive customer
                        support, and consistent product performance for healthcare professionals worldwide.</p>
                    <div class="process-step-icon-box position-relative mt-15px">
                        <div
                            class="process-step-icon d-flex justify-content-center align-items-center mx-auto h-70px w-70px fs-26 fw-500 rounded-circle text-dark-gray alt-font">
                            <span
                                class="number position-relative top-minus-2px z-index-1 text-dark-gray text-white-hover">04</span>
                            <div class="box-overlay bg-base-color rounded-circle"></div>
                        </div>
                    </div>
                </div>
                <!-- end process step item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray overlap-gap-section-bottom">
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 text-center justify-content-center clients-style-05 xs-mt-10"
                data-anime='{ "el": "childs", "scale": [0.9, 1], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start client item -->
                <div class="col md-mb-35px">
                    <div class="client-box">
                        <a href="#"><img src="{{ asset('assets/images/CE (1).png') }}" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col md-mb-35px">
                    <div class="client-box">
                        <a href="#"><img src="{{ asset('assets/images/CFDA (2).png') }}" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col md-mb-35px">
                    <div class="client-box">
                        <a href="#"><img src="{{ asset('assets/images/FDA (1).png') }}" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col xs-mb-35px">
                    <div class="client-box">
                        <a href="#"><img src="{{ asset('assets/images/Iao-13458 (1).png') }}" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
                <!-- start client item -->
                <div class="col">
                    <div class="client-box">
                        <a href="#"><img src="{{ asset('assets/images/Iso-9001 (1).png') }}" alt="" /></a>
                    </div>
                </div>
                <!-- end client item -->
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
