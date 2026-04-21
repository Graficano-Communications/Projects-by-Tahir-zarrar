@extends('layouts.master')

@section('meta_title', 'Hiring | digital marketing services agency')
@section('meta_description',
    'From Digital Marketing to website development, we’re here for you. We’re your next digital
    partner.')
@section('meta_tags', 'digital marketing, website development, seo services')


@section('SpecificStyles')

@stop
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
        <div class="container container-1230 pb-20">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                            <div class="ar-about-us-4-title-box shape-color d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre tp_fade_anim">Career</span>
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
                <a href="{{ route('team') }}">
                    <span class="st-hero-btn-svg"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            viewBox="0 0 22 22" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.3793 3.0269C14.6433 2.80336 18.8918 1.42595 22 0C20.5735 3.10763 19.1955 7.35556 18.9725 10.6196L16.8278 6.04382L1.05218 21.82C0.936508 21.9354 0.77977 22.0001 0.616396 22C0.494507 22 0.375362 21.9638 0.274025 21.8961C0.172686 21.8284 0.0936985 21.7321 0.0470581 21.6195C0.000415802 21.5069 -0.0117893 21.383 0.0119839 21.2634C0.0357552 21.1439 0.0944386 21.034 0.180614 20.9478L15.9563 5.17221L11.3793 3.0269Z"
                                fill="currentColor" />
                        </svg></span>
                    <span class="st-hero-btn-text">Meet with <br> the team</span>
                </a>
            </div>
        </div>
    </div>
    <!-- hero area end -->


    <!-- banner area start -->
    <div class="ar-banner-area">
        <div class="ar-banner-wrap ar-about-us-4">
            <img class="w-100" src="{{ asset('assets/img/front-images/graficano-job.jpg') }}" alt="" data-speed=".8">
        </div>
    </div>
    <!-- banner area end -->

     <!-- career opening area start -->
    <section class="tp-career-opening-ptb pt-100">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-benefit-heading mb-100">
                        <div class="ar-about-us-4-title-box shape-color tp_fade_anim d-flex align-items-center mb-15">
                            <span class="tp-section-subtitle pre">Jobs</span>
                            <div class="ar-about-us-4-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9"
                                    fill="none">
                                    <rect y="4" width="80" height="1" fill="#ffffffba" />
                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#ffffffba" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="tp-section-title lts tp_fade_anim">Current Openings</h3>
                    </div>
                </div>
            </div>
            @foreach ($Careers as $index => $career)
                <div class="tp-career-opening-item ptb">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="tp-career-opening-title">
                                <h4 class="tp-career-opening-title-name">{{ $career->title }}</h4>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tp-career-opening-role">
                                <span>{{ $career->post_date }}</span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="tp-career-opening-Type d-flex justify-content-between align-items-center">
                                <span>Full-Time</span>
                                <div class="tp-career-opening-btn">
                                    <a href="{{ route('hiring_form', ['job_url' => $career->url]) }}"
                                        class="tp-btn-black btn-red-bg">
                                        <span class="tp-btn-black-filter-blur">
                                            <svg width="0" height="0">
                                                <defs>
                                                    <filter id="buttonFilter">
                                                        <feGaussianBlur in="SourceGraphic" stdDeviation="5"
                                                            result="blur"></feGaussianBlur>
                                                        <feColorMatrix in="blur"
                                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9">
                                                        </feColorMatrix>
                                                        <feComposite in="SourceGraphic" in2="buttonFilter"
                                                            operator="atop"></feComposite>
                                                        <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="tp-btn-black-filter d-inline-flex align-items-center"
                                            style="filter: url(#buttonFilter)">
                                            <span class="tp-btn-black-text">Apply Now</span>
                                            <span class="tp-btn-black-circle">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- career opening area end -->



    <!-- benefit area start -->
    <section class="tp-benefit-ptb pt-140 pb-160">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-benefit-heading mb-85">
                        <div class="ar-about-us-4-title-box shape-color tp_fade_anim d-flex align-items-center mb-15">
                            <span class="tp-section-subtitle pre">Benefit</span>
                            <div class="ar-about-us-4-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9"
                                    fill="none">
                                    <rect y="4" width="80" height="1" fill="#ffffffba" />
                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#ffffffba" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="tp-section-title lts tp_fade_anim">Our benefit</h3>
                    </div>
                </div>
            </div>
            <div class="tp-benefit-box">
                <div class="row gx-0">
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item tp-benefit-borber-bottom">
                            <div class="tp-benefit-item-icon pb-30">
                                <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-competitive-salary.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Competitive Salary Package</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item tp-benefit-borber-bottom">
                            <div class="tp-benefit-item-icon pb-30">
                                <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-annual-salary-increment.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Annual Salary Increment</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item tp-benefit-borber-bottom">
                            <div class="tp-benefit-item-icon pb-30">
                                <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-paid-annual-leaves.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Paid Annual Leave Benefits</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item tp-benefit-borber-bottom">
                            <div class="tp-benefit-item-icon pb-30">
                                <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-freeteaandcoffee.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Free Tea & Coffee Breaks
                                </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item br">
                            <div class="tp-benefit-item-icon pb-30">
                                <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-paid-training.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Paid Training & Learning</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item br">
                            <div class="tp-benefit-item-icon pb-30">
                             <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-careergrowth.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Career Growth & Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item br">
                            <div class="tp-benefit-item-icon pb-30">
                               <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-friendlywork.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Friendly Work Environment</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-benefit-item">
                            <div class="tp-benefit-item-icon pb-30">
                                <img width="70px" height="60px" src="{{ asset('assets/img/front-images/graficano-icons-teamoutings.png') }}" alt="">
                            </div>
                            <h4 class="tp-benefit-item-title">Team Outings & Trips</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefit area end -->


    <!-- career slider area start -->
    <div class="tp-career-slider-ptb pb-180">
        <div class="tp-career-slider-wrapper">
            <div class="tp-career-slider-active swiper-container">
                <div class="swiper-wrapper align-items-center slide-transtion">
                    <div class="swiper-slide">
                        <div class="tp-career-slider-thumb">
                            <img src="{{ asset('assets/img/front-images/graficanojob1-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-career-slider-thumb">
                            <img src="{{ asset('assets/img/front-images/graficanojob1-4.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-career-slider-thumb">
                            <img src="{{ asset('assets/img/front-images/graficanojob1-2.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-career-slider-thumb">
                            <img src="{{ asset('assets/img/front-images/graficanojob1-5.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-career-slider-thumb">
                            <img src="{{ asset('assets/img/front-images/graficanojob1-3.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-career-slider-thumb">
                            <img src="{{ asset('assets/img/front-images/graficanojob1-6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- career slider area end -->


   


@endsection
@section('SpecificScripts')

@stop
