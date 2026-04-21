@extends('layouts.master')
@section('meta_title', 'Events | Digital Marketing|SEO Services')
@section('meta_description',
    'Our blogs section is where you will find the digital marketing aspects among the SEO
    service and graphic designing linked content. Stay tuned for the techniques & strategies for digital marketing & web
    development.')
@section('meta_tags', 'digital marketing, web development, SEO services, graphic designing')

@section('content')


    <!-- hero area start -->
    <div class="ar-hero-area p-relative" data-background="{{ asset('assets/img/blog/blog-masonry/blog-bradcum-bg.png') }}">
        <div class="tp-career-shape-1">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
                    <path
                        d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344"
                        stroke="#ffffff" stroke-width="1.5" />
                </svg></span>
        </div>
        <div class="container container-1230">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                            <div class="ar-about-us-4-title-box shape-color d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre tp_fade_anim">Events</span>
                                <div class="ar-about-us-4-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9"
                                        fill="none">
                                        <rect y="4" width="80" height="1" fill="#fff" />
                                        <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tp-career-title">Join us &  Grow  <br>
                                Your Career with  <br>
                                <span class="shape-2"><img src="{{ asset('assets/img/front-images/grf-about-sect-2.png') }}"
                                        alt=""></span> Team.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-career-btn">
            <div class="st-hero-btn tp_fade_anim" data-delay=".3" data-fade-from="top" data-ease="bounce">
                <a href="{{ route('contact') }}">
                    <span class="st-hero-btn-svg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            viewBox="0 0 22 22" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.3793 3.0269C14.6433 2.80336 18.8918 1.42595 22 0C20.5735 3.10763 19.1955 7.35556 18.9725 10.6196L16.8278 6.04382L1.05218 21.82C0.936508 21.9354 0.77977 22.0001 0.616396 22C0.494507 22 0.375362 21.9638 0.274025 21.8961C0.172686 21.8284 0.0936985 21.7321 0.0470581 21.6195C0.000415802 21.5069 -0.0117893 21.383 0.0119839 21.2634C0.0357552 21.1439 0.0944386 21.034 0.180614 20.9478L15.9563 5.17221L11.3793 3.0269Z"
                                fill="currentColor" />
                        </svg></span>
                    <span class="st-hero-btn-text">Meet with <br>  graficano</span>
                </a>
            </div>
        </div>
    </div>
    <!-- hero area end -->


    <!-- banner area start -->
    <div class="ar-banner-area">
        <div class="ar-banner-wrap ar-about-us-4">
            <img class="w-100" src="{{ asset('assets/img/front-images/graficanoevents-banner.jpg') }}" alt=""
                data-speed=".8">
        </div>
    </div>
    <!-- banner area end -->

    <!-- testimonial area start -->
    @foreach ($events as $key => $event)
        <div class="cr-testimonial-area cr-testimonial-ptb pt-100">
            <div class="container container-1230">
                <div class="cr-testimonial-box">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cr-testimonial-wrap pt-40 pl-50">
                                <div class="cr-testimonial-content">
                                    <span>Event # {{ $key + 1 }}</span>
                                </div>
                                <h3 class="cr-testimonial-title ">{{ $event->title }}</h3>
                                <div class="cr-testimonial-nav">
                                    <button class="cr-testimonial-prev">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13 7H1M1 7L7 1M1 7L7 13" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <button class="cr-testimonial-next">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 7H13M13 7L7 1M13 7L7 13" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="cr-testimonial-wrapper z-index-1">
                                <div class="swiper-container cr-testimonial-active fix">
                                    <div class="swiper-wrapper">
                                        @foreach (json_decode($event->images) ?? [] as $image)
                                            <div class="swiper-slide">
                                                <div class="cr-testimonial-item z-index-1 text-center">
                                                    <div class="cr-testimonial-item-top pb-40">
                                                        <p class="cr-testimonial-item-subtitle">Cliced On {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</p>
                                                        <img height="410px" src="{{ asset('images/events/' . $image) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="cr-testimonial-item-user">
                                                        <span>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
    @endforeach



    <!-- project area start -->
    {{-- @foreach ($events as $key => $event)
        <div class="crp-project-area tp-panel-pin-area pt-100 mb-150">
            <div class="container container-1330">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="crp-project-title-box tp-panel-pin pt-4">
                            <h4 class="tp-section-title-teko fs-70 mb-50 tp_fade_anim" data-delay=".3">

                                <span> {{ $event->title }}</span>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="crp-project-right">

                            <!-- Thumbnail image -->
                            <div class="crp-project-item tp-panel-pin mb-40">
                                <div class="crp-project-meta d-flex justify-content-between align-items-center">
                                    <span>01</span>
                                    <span>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</span>
                                </div>
                                <div class="crp-project-thumb text-center"
                                    data-background="{{ asset('assets/img/home-09/project/project-img-bg-shape.png') }}">
                                    <img src="{{ asset('images/events/' . $event->thumbnail_image) }}" alt="">
                                </div>
                            </div>

                            <!-- Gallery images -->
                            @foreach (json_decode($event->images) as $index => $image)
                                <div class="crp-project-item tp-panel-pin mb-40">
                                    <div class="crp-project-meta d-flex justify-content-between align-items-center">
                                        <span>{{ $index + 2 }}</span>
                                        <span>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }}</span>
                                    </div>
                                    <div class="crp-project-thumb text-center"
                                        data-background="{{ asset('assets/img/home-09/project/project-img-bg-shape.png') }}">
                                        <img height="410px" src="{{ asset('images/events/' . $image) }}" alt="">
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach --}}


@endsection
