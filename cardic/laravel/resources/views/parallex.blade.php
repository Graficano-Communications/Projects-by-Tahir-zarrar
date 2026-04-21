@extends('layouts.master')

@section('title', 'COMPETENCE | Cardic Instruments')

@section('content')

    <style>
        .abd {
            text-decoration: none;
        }

        .abd:hover {
            color: #f5821f;
            text-decoration: none;
        }
    </style>

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('assets/frontend/images/front-images/card-broucher-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Area Of Competence"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        Discover our areas of expertise through our brochures and booklets.
                        Access is available upon request via info@cardic.com.pk.
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
                        <li>Area Of Competence</li>
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
                        COMPETENCE
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
    <section>
        <div class="container">

            @php $about = \App\About::all() @endphp
            @foreach ($about as $key => $about)
                <div
                    class="row align-items-center justify-content-center mb-7 sm-mb-40px  {{ $key % 2 != 0 ? 'flex-lg-row-reverse' : '' }}">

                    <div class="col-xl-6 col-lg-6 col-md-12 md-mb-50px">
                        <span class="col-xl- col-lg-6 col-md-12 md-mb-50px"
                            data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                            <span
                                class="fs-16 text-uppercase text-base-color fw-600 mb-5px d-block">Cardic-Instruments</span>

                            <a href="{{ route('pages', $about->id) }}">
                                <h3 class="fw-700 abd ls-minus-2px mb-30px  text-dark-gray"
                                    data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
                                    {{ $about->page_name }}
                                </h3>
                            </a>

                            {!! $about->points !!}

                            <div class="d-inline-block mt-30px">
                        <a href="{{ route('pages', $about->id) }}"
                            class="btn btn-large btn-rounded with-rounded btn-dark-gray btn-box-shadow me-20px">Learn
                            more<span class="bg-blue-licorice text-white"><i
                                    class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                    </div>
                    <div class="col-lg-6  position-relative z-index-1"
                        data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <a href="{{ route('pages', $about->id) }}">
                            <div class="atropos" data-atropos data-atropos-perspective="2450">
                                <div class="atropos-scale">
                                    <div class="atropos-rotate">
                                        <div class="atropos-inner">

                                            <img src="{{ asset('images/about/' . $about->image) }}"
                                                alt="{{ $about->page_name }}" class="border-radius-6px w-100" />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            @endforeach
            <div class="row align-items-center justify-content-center mb-7 sm-mb-40px flex-row-reverse">
                <div class="col-xl- col-lg-6 col-md-12 md-mb-50px"
                    data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <span class="fs-16 text-uppercase text-base-color fw-600 mb-5px d-block">Cardic-Instruments</span>
                    <a href="{{ route('history') }}">
                        <h3 class="fw-700 text-dark-gray ls-minus-2px mb-30px abd"
                            data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
                            Company History
                        </h3>
                    </a>

                    <ul>
                        <li>CFD & Sons | Hand Tools</li>
                        <li>Technical Tools | Machining Tools</li>
                        <li>Cardic Instruments | Surgical Instruments</li>
                    </ul>
                </div>

                <div class="col-lg-6 position-relative z-index-1"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="{{ route('history') }}">
                        <div class="atropos" data-atropos data-atropos-perspective="2450">

                            <div class="atropos-scale">
                                <div class="atropos-rotate">
                                    <div class="atropos-inner">

                                        <img src="{{ asset('images/about/comapny-history.jpg') }}" alt="Company History"
                                            class="border-radius-6px w-100" />

                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
            </div>


        </div>

    </section>
    <!-- end section -->

@endsection
