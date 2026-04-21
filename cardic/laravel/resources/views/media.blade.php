@extends('layouts.master')

@section('title', 'Media | Cardic Instruments')

@section('content')

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('assets/frontend/images/front-images/card-media-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Media"], "easing": "easeOutQuad" }'>
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
                        <li>Media</li>
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
                        Media
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
    <section >
    <div class="container ">
        <div class="row">

            @if ($mediafiles->isEmpty())
                <div class="col-12 text-center">
                    <h2>Coming Soon....</h2>
                </div>
            @else
                @foreach ($mediafiles as $media)
                    @php
                        $videoId = substr($media->link, 18);
                    @endphp

                    <div class="col-lg-6 col-md-6 mb-5">
                        <div class=" border-radius-6px overflow-hidden"
                             data-anime='{"scale":[0.9,1],"opacity":[0,1],"duration":600,"easing":"easeOutQuad"}'>

                            {{-- Vimeo Iframe --}}
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://player.vimeo.com/video/{{ $videoId }}?byline=0&title=0&portrait=0"
                                    allowfullscreen>
                                </iframe>
                            </div>

                            {{-- Title --}}
                            <div class="p-3 text-center">
                                <h5 class="mb-0 text-black text-center mb-10px d-block">{{ $media->title }}</h5>
                            </div>

                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</section>

@endsection
