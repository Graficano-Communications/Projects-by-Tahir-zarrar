@extends('layouts.master')

@section('title', 'Instruments Care | Cardic Instruments')

@section('content')

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('assets/frontend/images/front-images/card-care-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Instruments Care"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        All Brochures and introductory booklets can be loaded directly, but for security purposes, these
                        resources are password protected. We are happy to send you a password via email. Email us at
                        info@cardic.com.pk
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
                        <li>Instruments Care</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section class="overflow-hidden position-relative pt-2 pb-0 xl-pt-5 lg-pt-8 md-pt-11 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-lg-5 col-md-6">
                    <div
                        class="fs-300 xl-fs-250 lg-fs-200 text-dark-orange fw-600 ls-minus-20px word-break-normal position-relative">
                        Care
                        <div
                            class="position-absolute left-minus-100px top-minus-80px xl-w-230px md-w-200px xl-left-minus-50px xl-top-minus-100px d-none d-md-block z-index-9">
                            <img src="{{ asset('assets/frontend/images/front-images/cardictext.png') }}"
                                class="animation-rotation" alt="" />
                            <div class="absolute-middle-center w-100 z-index-minus-1">
                                <img src="{{ asset('assets/frontend/images/front-images/cardic-round.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="overlap-height">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-4 md-mb-6">
                <div class="col-xl-6 col-lg-7 col-md-9 text-center last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color d-block">Cardic Instruments Care</span>
                    <h3 class="alt-font fw-500 text-dark-gray w-95 xl-w-100 mx-auto ls-minus-1px">
                        Instrument Care PDF have been dowloaded
                    </h3>

                </div>
                <div style="padding: 40px;">
                    <embed type="application/pdf" src="assets/pdf/Instructions_Care.pdf"
                        style="width: 100%; height:800px;"></embed>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


@endsection
