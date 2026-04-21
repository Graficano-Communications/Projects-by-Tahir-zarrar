@extends('layouts.master')

@section('meta_title', 'Graficano | Full Service Advertising Agency in Dix Hills, NY')
@section('meta_description',
    'Graficano, a full-service advertising agency in Dix Hills, NY, can handle all your
    advertising and marketing needs, from web design to marketing, and printing')

@section('content')

    <style>
        .pp-about-me-tool-item-icon span img {
            mix-blend-mode: normal !important;
        }

        .bg-cli {
            background-color: #F5F5F5;
        }

        .pt-sm-160 {
            padding-top: 160px;
        }

        .pb-sm-200 {
            padding-bottom: 200px;
        }

        @media (max-width: 575px) {

            .pt-sm-160,
            .pb-sm-200 {
                padding: 0 !important;
            }
        }
    </style>

    <!-- hero area start -->
    <section class="hero-slider">
        <div class="tp-portfolio-slider__main tp-portfolio-slider__style-2 fix">

            <div class="tp-portfolio-slider__copyright">
                <p>We love to design</p>
            </div>
            <div class="tp-portfolio-slider__mail">
                <a href="mailto:zaka@graficano.com">zaka@graficano.com</a>
            </div>
            {{-- <div class="tp-portfolio-slider__social">
                <a href="https://wa.me/+923129320163"><i class="fab fa-whatsapp fa-3x" style="color: #25D366;"></i> +92 312 9320163</a>
            </div> --}}

            {{-- Main Slider --}}
            <div class="tp-portfolio-slider__wrap slider slider--bg">
                @foreach ($banners as $banner)
                    <div class="tp-portfolio-slider__item">
                        <div class="tp-portfolio-slider__item-inner"
                            data-background="{{ asset('images/banners/' . $banner->image) }}"></div>
                    </div>
                @endforeach
            </div>
            {{-- Navigation --}}
            <nav class="slider-nav mb-80">
                <button class="slider-nav__item slider-nav__item--prev d-flex align-items-center ml-100">
                    <span class="icon-1">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1L1 7L7 13" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                    <span class="slider-nav-text ml-5">Prev</span>
                </button>
                <button class="slider-nav__item slider-nav__item--next d-flex align-items-center mr-100">
                    <span class="slider-nav-text mr-5">Next</span>
                    <span class="icon-2">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 13L7 7L1 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </nav>

            {{-- Small Slider (if needed) --}}
            <div class="tp-portfolio-slider__wrap tp-portfolio-slider-small__wrap slider slider--fg d-none">
                @foreach ($banners as $banner)
                    <div class="tp-portfolio-slider__item">
                        <div class="tp-portfolio-slider__item-inner"
                            data-background="{{ asset('images/banners/small/' . $banner->small_image ?? $banner->image) }}">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Slider Titles / Names --}}
            <div class="tp-portfolio-slider-type" style="display: none !important;">
                @foreach ($banners as $banner)
                    <a href="{{ $banner->url }}">
                        <div class="type__item">
                            <h4 class="tp-portfolio-slider-type-title">
                                <a href="{{ $banner->url }}">{{ $banner->title ?? 'Untitled' }}</a>
                            </h4>
                        </div>
                    </a>
                @endforeach
            </div>


        </div>
    </section>
    <!-- hero area end -->

    <!-- about area start -->

    <div class="pp-about-area pp-about-ptb p-relative z-index-3 pt-160" data-bg-color="#0E0F11">

        <div class="pp-about-shape">
            <img data-speed=".8" src="{{ asset('assets/img/front-images/about-shape.png') }}" alt="" />
        </div>
        <div class="container container-1320">
            <div class="row ">
                <div class="studio-project-top-wrap mb-70">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2">
                            <div class="studio-project-subtitle-box">
                                <h3 class="tp-section-subtitle-clash color-red mb-0">
                                    About <br> Us
                                    <i>
                                        <svg width="102" height="9" viewBox="0 0 102 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M98 8L101.5 4.5L98 1M1 4H101V5H1V4Z" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </h3>
                            </div>
                        </div>
                        <div class="col-xxl-10 col-xl-10">
                            <div class="studio-project-title-wrap">
                                <div class="row align-items-end">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="studio-project-title-box">
                                            <h3 class="tp-section-title-clash mb-0 tp-text-revel-anim">About Us</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="studio-project-btn text-start text-lg-end">
                                            <a class="tp-btn-red-border" href="{{ route('about') }}">Explore About</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-1430">
            <div class="row">
                {{-- <div class="col-lg-3">
                    <div class="pp-about-left">
                        <span class="tp-section-subtitle-clash clash-subtitle-pos body-ff">
                            About Us
                            <i>
                                <svg width="102" height="9" viewBox="0 0 102 9" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M98 8L101.5 4.5L98 1M1 4H101V5H1V4Z" stroke="currentcolor"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                        </span>
                    </div>
                </div> --}}
                <div class="col-lg-12 mx-auto">
                    <div class="pp-about-heading pb-55">
                        <h3 class="tp-section-title-teko fs-80 tp_fade_anim">
                            Your Full Service <span>Advertising Agency</span>
                            Since 2010, Graficano has been the go-to
                            partner for numerous businesses in
                            New York and beyond.
                        </h3>
                    </div>
                    <div class="pp-about-content tp_text_anim">
                        <p style="text-align: justify;">
                            We offer specialized solutions tailored to help your brand grow. Our competencies include
                            digital marketing, design & illustration, software development, video & photography, and
                            printing & packaging. Whether it's online or offline, we make your business stand out with very
                            affordable yet effective IT solutions. When you work with Graficano, you are investing in the
                            future of your business. The designs, marketing strategies, and software solutions that we offer
                            are designed to foster long-term engagement, improve brand visibility, and establish
                            long-lasting customer relationships. You will see the returns continue because your brand grows
                            stronger, your customer base expands, and your business stays ahead of the competition.
                        </p>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-6">
                            <div class="pp-about-heading ">
                                <h3 class="tp-section-title-teko fs-60 tp_fade_anim">
                                    <span>What problem are we solving?</span>
                                </h3>
                            </div>
                            <div class="pp-about-content tp_text_anim">
                                <p style="text-align: justify;">
                                    We know reaching out in the noise of the market is not easy. Our advertising services
                                    will help you nail these challenges by uplifting your brand's online presence, smoothing
                                    operational processes with customized software, and delivering captivating visuals that
                                    your target audience can resonate with. We are actually into solving bigger problems-
                                    enabling your business to grow and succeed in a fast-paced digital world.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="pp-about-heading ">
                                <h3 class="tp-section-title-teko fs-80 tp_fade_anim">
                                    <span>Who Is Graficano For?</span>
                                </h3>
                            </div>
                            <div class="pp-about-content tp_text_anim">
                                <p style="text-align: justify;">
                                    Graficano is ideal for businesses looking to make their mark it a start-up, a growing
                                    brand, or an established company. Whether your business requires creative solutions such
                                    as rebranding, a new website, or a new digital marketing strategy, we are the perfect
                                    fit. Our clients are forward-looking companies that believe in innovation and the
                                    long-term value of professional branding and digital presence.
                                </p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-12 text-center">
                        <div class="pp-about-btn">
                            <div class="tp-btn-red-circle-box tp-pp-btn-style tp_fade_anim" data-delay=".7"
                                data-fade-from="top" data-ease="bounce">
                                <a class="tp-btn-red-circle-icon" href="{{ route('about') }}">
                                    <span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                                <a class="tp-btn-red-circle-text" href="{{ route('about') }}">About Us</a>
                                <a class="tp-btn-red-circle-icon" href="{{ route('about') }}">
                                    <span>
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- portfolio area start -->
    <div class="des-portfolio-area pt-sm-160 pb-sm-200">
        <div class="container container-1750 pb-sm-100">
            <div class="row">
                <div class="col-xl-12">
                    <div class="des-portfolio-wrap">
                        @foreach ($portfolios as $portfolio)
                            @php
                                $image = \App\Media::where('portfolio_id', $portfolio->id)
                                    ->where('thumbnail', 1)
                                    ->first();
                            @endphp

                            <div class="des-portfolio-item des-portfolio-panel p-relative not-hide-cursor mb-30"
                                data-cursor="View<br>Demo">
                                <a class="cursor-hide" href="{{ route('details_portfolios', $portfolio->url) }}">
                                    <div class="des-portfolio-thumb p-relative">
                                        @if ($image)
                                            @if ($image->type == 'vimeo')
                                                <!-- Vimeo video -->
                                                <iframe width="560" height="315"
                                                    src="https://player.vimeo.com/video/{{ substr($image->value, 18) }}?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=false&amp;muted=1&amp;controls=0&amp;sidedock=0">
                                                </iframe>
                                            @else
                                                <img src="{{ asset('images/portfolio/' . $image->value) }}"
                                                    alt="{{ $portfolio->title }}" />
                                            @endif
                                        @else
                                            <img src="{{ asset('images/portfolio/no_image.jpg') }}"
                                                alt="{{ $portfolio->title }}" />
                                        @endif
                                    </div>

                                    <div class="des-portfolio-category">
                                        <span>Portfolio</span>
                                        <span>{{ $portfolio->service }}</span>
                                    </div>

                                    <div class="des-portfolio-category portfolio-meta">
                                        <span>{{ $portfolio->title }}</span>
                                    </div>
                                </a>

                                <div class="des-portfolio-content">
                                    <h2 class="des-portfolio-title">
                                        <a href="{{ route('details_portfolios', $portfolio->url) }}"></a>
                                    </h2>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio area end -->

    <!-- cr feature 2 area start -->
    <div class="cr-feature-2-area p-relative cr-feature-2-ptb">
        <div class="cr-feature-2-bg">
            <img src="{{ asset('assets/img/home-13/feature/feature-2/feature-2-bg.png') }}" alt="" />
        </div>
        <div class="container-fluid gx-0">
            <div class="row g-0">
                <div class="col-xxl-4 col-xl-6 order-2 order-xxl-1">
                    <div class="cr-feature-2-left">
                        <div class="cr-feature-2-box">
                            <div class="row row-cols-xl-5 gx-0">
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon">
                                            <img src="{{ asset('assets/img/front-images/tech-1.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img src="{{ asset('assets/img/front-images/tech-2.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cr-feature-2-box">
                            <div class="row row-cols-xl-5 gx-0">
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon">
                                            <img src="{{ asset('assets/img/front-images/tech-3.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img src="{{ asset('assets/img/front-images/tech-4.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon">
                                            <img src="{{ asset('assets/img/front-images/tech-5.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img src="{{ asset('assets/img/front-images/tech-6.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cr-feature-2-box">
                            <div class="row row-cols-xl-5 gx-0">
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon">
                                            <img src="{{ asset('assets/img/front-images/tech-7.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img src="{{ asset('assets/img/front-images/tech-8.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 order-xl-12 order-1 order-xxl-2">
                    <div class="cr-feature-2-heading text-center">
                        <div class="tp-section-subtitle-gradient ct mb-20 tp_fade_anim" data-delay=".3">
                            Technologies
                        </div>
                        <h4 class="tp-section-title-onest tp-text-revel-anim">
                            Our Technology Stacks
                        </h4>
                        <div class="tp_text_anim">
                            <p> At Graficano, technology is the foundation that drives everything we create. <br /> We
                                leverage modern tools, intelligent systems, and scalable architectures <br /> to build
                                digital solutions that are fast, secure, and future-ready. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 order-2 order-xxl-3">
                    <div class="cr-feature-2-right">
                        <div class="cr-feature-2-box">
                            <div class="row row-cols-xl-5 gx-0 justify-content-end">
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img src="{{ asset('assets/img/front-images/tech-9.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cr-feature-2-item"></div>
                                </div>
                            </div>
                        </div>
                        <div class="cr-feature-2-box">
                            <div class="row row-cols-xl-5 gx-0">
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon">
                                            <img src="{{ asset('assets/img/front-images/tech-10.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img src="{{ asset('assets/img/front-images/tech-11.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon">
                                            <img src="{{ asset('assets/img/front-images/tech-12.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation">
                                            <img src="{{ asset('assets/img/front-images/tech-13.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cr-feature-2-box">
                            <div class="row row-cols-xl-5 gx-0">
                                <div class="col"></div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon">
                                            <img style="filter: invert(1)"
                                                src="{{ asset('assets/img/front-images/tech-14.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col"></div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img style="filter: invert(1)"
                                                src="{{ asset('assets/img/front-images/tech-15.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="cr-feature-2-item">
                                        <span class="bullet-top-left"></span>
                                        <span class="bullet-top-right"></span>
                                        <span class="bullet-bottom-left"></span>
                                        <span class="bullet-bottom-right"></span>
                                        <div class="cr-feature-2-item-icon animation-2">
                                            <img src="{{ asset('assets/img/front-images/tech-16.png') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cr feature 2 area end -->


    <!-- service area start -->
    @php
        use App\Service as AppService;
        use App\SubService;

        // Fetch all services with their associated sub-services

        $services = AppService::with('subServices')->orderBy('sequence')->get();

    @endphp
    <div class="tp-service-area pt-160 ">
        <div class="container container-1320">
            <div class="row">
                <div class="studio-project-top-wrap mb-70">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2">
                            <div class="studio-project-subtitle-box">
                                <h3 class="tp-section-subtitle-clash color-red mb-0">
                                    Our <br> Services
                                    <i>
                                        <svg width="102" height="9" viewBox="0 0 102 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M98 8L101.5 4.5L98 1M1 4H101V5H1V4Z" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </h3>
                            </div>
                        </div>
                        <div class="col-xxl-10 col-xl-10">
                            <div class="studio-project-title-wrap">
                                <div class="row align-items-end">
                                    <div class="col-xl-9 col-lg-9">
                                        <div class="studio-project-title-box">
                                            <h3 class="tp-section-title-clash mb-0 tp-text-revel-anim">Our Services</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3">
                                        <div class="studio-project-btn text-start text-lg-end">
                                            <a class="tp-btn-red-border" href="{{ route('service.show', $service->slug) }}">Explore work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="studio-project-wrap">
                @foreach ($services as $index => $service)
                    <div class="studio-project-item mb-80">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="studio-project-content-wrap d-flex align-items-start">
                                    <div class="studio-project-number">
                                        <span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                        <i>
                                            <svg width="202" height="9" viewBox="0 0 202 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M198 8L201.5 4.5L198 1M1 4H201V5H1V4Z" stroke="currentcolor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="studio-project-content">
                                        <h4 class="studio-project-title-sm"><a
                                                href="{{ route('service.show', $service->slug) }}">{{ $service->name }}</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="tp-service-item mt-30">
                                    <div class="tp-service-content">
                                        <div class="tp-service-category">
                                            @foreach ($service->subServices as $subService)
                                                <span><a
                                                        href="{{ route('sub-service.show', [$service->slug, $subService->slug]) }}">{{ $subService->name }}</a></span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="not-hide-cursor" data-cursor="View<br>Demo">
                                    <a class="cursor-hide" href="{{ route('service.show', $service->slug) }}">
                                        <div class="studio-project-thumb">
                                            <img src="{{ asset($service->ser_image ? 'images/service/' . $service->ser_image : 'assets/img/home-06/project/project-2.jpg') }}"
                                                alt="{{ $service->name }}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- service area end -->

    <!-- tp-feature-area-start -->
    <div class="container container-1320">
        <div class="row  pt-30">
            <div class="studio-project-top-wrap mb-70">
                <div class="row">
                    <div class="col-xxl-2 col-xl-2">
                        <div class="studio-project-subtitle-box">
                            <h3 class="tp-section-subtitle-clash color-red mb-0">
                                Our <br> Clients
                                <i>
                                    <svg width="102" height="9" viewBox="0 0 102 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M98 8L101.5 4.5L98 1M1 4H101V5H1V4Z" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </i>
                            </h3>
                        </div>
                    </div>
                    <div class="col-xxl-10 col-xl-10">
                        <div class="studio-project-title-wrap">
                            <div class="row align-items-end">
                                <div class="col-xl-9 col-lg-9">
                                    <div class="studio-project-title-box">
                                        <h3 class="tp-section-title-clash mb-0 tp-text-revel-anim">Top Clients</h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3">
                                    <div class="studio-project-btn text-start text-lg-end">
                                        <a class="tp-btn-red-border" href="{{ route('clients') }}">Explore Clients</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="feature" class="tp-feature-area tp-sm-pt tp-sm-pb tp-bg-black-2 section-meinus  pb-30">
        <div class="container container-1230">
            <div class="row">
                <div class="col-12">
                    <div class="tp-feature-include-wrap">
                        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                            @foreach ($clients as $client)
                                <div class="col">
                                    <div class="tp-feature-include-item text-center tp-fade-anim mb-25 bg-cli"
                                        data-delay=".2">
                                        <span class="d-inline-block mb-30">
                                            <img src="{{ asset('images/clients/' . $client->image) }}" alt="" />
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-feature-area-end -->

    <!-- testimonial area start -->
    <div class="app-testimonial-area app-testimonial-ptb p-relative pb-20 pt-20">
        <div class="app-testimonial-shape">
            <div class="shape-1" data-speed=".9">
                <img src="{{ asset('assets/img/home-10/testimonial/testimonial-shape-1.png') }}" alt="" />
            </div>
            <div class="shape-2" data-speed="1.1">
                <img src="{{ asset('assets/img/home-10/testimonial/testimonial-shape-2.png') }}" alt="" />
            </div>
            <div class="shape-3">
                <img src="{{ asset('assets/img/home-10/testimonial/testimonial-shape-circle.png') }}" alt="" />
            </div>
        </div>
        <div class="container container-1230">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="app-testimonial-warp mb-55">
                        <div class="app-testimonial-heading text-center p-relative mb-40">
                            <h3 class="tp-section-title-phudu mb-20 tp_fade_anim text-white" data-delay=".5">
                                Trusted by 21,000+ <br />
                                customers
                            </h3>
                            <div class="app-testimonial-big-text">
                                <h3>4.86</h3>
                            </div>
                        </div>
                        <div class="app-testimonial-review-width tp_fade_anim" data-delay=".6" data-fade-from="top"
                            data-ease="bounce">
                            <div class="app-testimonial-review">
                                <div class="app-testimonial-review-icon">
                                    <a href="https://share.google/oOxTzsTvMjJlwntd2">
                                        <span>
                                            <img width="38px" height="38px"
                                                src="{{ asset('assets/img/front-images/gra-google.png') }}"
                                                alt="">
                                        </span>
                                    </a>
                                </div>
                                <div class="app-testimonial-review-content">
                                    <a href="https://share.google/oOxTzsTvMjJlwntd2">
                                        <span><i>4.9/5</i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z"
                                                    fill="#FFAF1B" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z"
                                                    fill="#FFAF1B" />
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z"
                                                    fill="#FFAF1B" />
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z"
                                                    fill="#FFAF1B" />
                                            </svg><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                viewBox="0 0 13 13" fill="none">
                                                <path
                                                    d="M6.12215 1.09728C6.24667 0.739057 6.75328 0.739057 6.8778 1.09728L8.17194 4.82036C8.22687 4.97839 8.37435 5.08554 8.54162 5.08895L12.4824 5.16925C12.8616 5.17698 13.0181 5.6588 12.7159 5.88792L9.57495 8.26922C9.44163 8.37029 9.3853 8.54366 9.43375 8.70379L10.5751 12.4765C10.685 12.8395 10.2751 13.1373 9.9638 12.9207L6.72845 10.6693C6.59112 10.5738 6.40883 10.5738 6.2715 10.6693L3.03615 12.9207C2.72485 13.1373 2.31499 12.8395 2.42481 12.4765L3.5662 8.70379C3.61465 8.54366 3.55832 8.37029 3.425 8.26922L0.284053 5.88792C-0.0181605 5.6588 0.138392 5.17698 0.517561 5.16925L4.45833 5.08895C4.6256 5.08554 4.77308 4.97839 4.82801 4.82036L6.12215 1.09728Z"
                                                    fill="#FFAF1B" />
                                            </svg></span>
                                    </a>
                                    <a href="https://share.google/oOxTzsTvMjJlwntd2">
                                        <p>Based on 1,258 reviews</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-1680">
            <div class="row">
                <div class="col-lg-12">
                    <div class="app-testimonial-wrapper">
                        <div class="app-testimonial-slider d-flex">
                            @foreach ($clients->take(10) as $client)
                                <div class="app-testimonial-item">
                                    <div class="app-testimonial-item-icon-box d-flex align-items-center mb-20">
                                        <div class="app-testimonial-item-icon">
                                            <span>
                                                <img src="{{ asset('images/clients/' . $client->testimonial_image) }}"
                                                    alt="{{ $client->name }}" />
                                            </span>
                                        </div>
                                        <div class="app-testimonial-item-icon-content">
                                            <h4 class="app-testimonial-item-icon-title">
                                                {{ $client->name }}
                                            </h4>
                                            <p>{{ $client->designation ?? '' }}</p>
                                        </div>
                                    </div>

                                    <div class="app-testimonial-item-content">
                                        @if ($client->review)
                                            <p>
                                                "{{ Str::limit($client->review, 350) }}"
                                            </p>
                                        @endif

                                        <div class="app-testimonial-item-star">
                                            @for ($i = 0; $i < $client->rating; $i++)
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z"
                                                            fill="#FFAF1B" />
                                                    </svg>
                                                </span>
                                            @endfor

                                            @for ($i = 0; $i < 5 - $client->rating; $i++)
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 15 15" fill="none">
                                                        <path
                                                            d="M7.21451 0.878193C7.30431 0.6018 7.69534 0.6018 7.78514 0.878193L9.34084 5.66614C9.381 5.78975 9.49619 5.87343 9.62616 5.87343L14.6605 5.87343C14.9511 5.87343 15.0719 6.24532 14.8368 6.41614L10.764 9.37525C10.6588 9.45164 10.6148 9.58706 10.655 9.71066L12.2107 14.4986C12.3005 14.775 11.9841 15.0048 11.749 14.834L7.67616 11.8749C7.57101 11.7985 7.42864 11.7985 7.32349 11.8749L3.25062 14.834C3.01551 15.0048 2.69916 14.775 2.78897 14.4986L4.34467 9.71066C4.38483 9.58706 4.34083 9.45164 4.23568 9.37525L0.162814 6.41614C-0.0723004 6.24532 0.0485323 5.87343 0.339149 5.87343L5.37349 5.87343C5.50346 5.87343 5.61865 5.78975 5.65881 5.66614L7.21451 0.878193Z"
                                                            fill="#ddd" />
                                                    </svg>
                                                </span>
                                            @endfor
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
    <!-- testimonial area end -->

    <!-- Instagram area start -->
    <div class="pb-50 pt-50">
        <div class="app-benefits-area p-relative">
            <div class="tp-gsap-bg"></div>
            <div class="container container-1510">
                <div class="app-benefits-wrapper">
                    <div class="row gx-24">
                        <div class="tp-testimonial-title-box mb-50 text-center">
                            <h4 class="tp-section-title text-white">
                                <a href="//instagram.com/graficano_?igshid=MzRlODBiNWFlZA==" target="_blank">
                                    <span>
                                        <img src="{{ asset('assets/img/front-images/insta.png') }}" alt="">
                                    </span>

                                    graficano_</a>
                            </h4>
                        </div>
                        @foreach ($instagramPosts as $post)
                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                <div class="app-benefits-item z-index-1 mb-25">
                                    <a href="{{ $post->instagram_url }}" target="_blank">
                                        <img src="{{ asset('images/instagrams/' . $post->image) }}"
                                            alt="{{ $post->name }}" />
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('SpecificScripts')
    <script type="text/javascript">
        function hover(element, src) {
            element.style.cursor = 'pointer';
            element.setAttribute('src', 'images/clients/' + src);
        }

        function unhover(element, src) {
            element.setAttribute('src', 'images/clients/' + src);
        }
        // Check the screen width and adjust the display of the video section
        function checkScreenWidth() {
            var videoSection = document.getElementById('video-section');
            if (window.innerWidth <= 1025) {
                videoSection.style.display = 'none';
            } else {
                videoSection.style.display = 'block';
            }
        }

        // Run the function when the window is resized or when the page loads
        window.onresize = checkScreenWidth;
        window.onload = checkScreenWidth;
    </script>
@stop
