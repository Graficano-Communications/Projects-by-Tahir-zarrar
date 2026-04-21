@extends('frontend.layout.master')
@section('title', 'Argos Dental')
@section('main-container')


    <!-- ==================== Start Slider ==================== -->

    <header class="slider showcase-full">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ asset('uploads/banners/' . $banner->image) }}"
                        data-overlay-dark="3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-11 offset-lg-1">
                                    <div class="caption">
                                        <h6 class="sub-title mb-30" data-swiper-parallax="-1000">{{$banner->description}}</h6>
                                        <h1>
                                            <a href="#">
                                                <span data-swiper-parallax="-2000">{{$banner->caption}}</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- slider setting -->
            <div class="slider-contro">
                <div class="swiper-button-next swiper-nav-ctrl cursor-pointer">
                    <div>
                        <span>Next Slide</span>
                    </div>
                    <div><i class="fas fa-chevron-right"></i></div>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl cursor-pointer">
                    <div><i class="fas fa-chevron-left"></i></div>
                    <div>
                        <span>Prev Slide</span>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination dots"></div>
        </div>
    </header>


    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="about-intro section-padding">
        <div class="container">
            <div class="row mb-80">
                <div class="col-lg-5">
                    <div class="sec-lg-head">
                        <h6 class="dot-titl-non mb-15 wow fadeIn">About Us</h6>
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Your Trusted Partner in Dental Tools and Equipment</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 valign">
                    <div class="text">
                        <p class="d-slideup wow">
                            <span class="sideup-text">
                                <span class="up-text">At Argos Dental, we provide high-quality dental instruments designed to improve your practice. We are committed to offering tools that enhance efficiency and patient care, backed by reliable customer service and expert support</span>
                            </span>
                            {{-- <span class="sideup-text">
                                <span class="up-text">and quality in surgical instruments are crucial for</span>
                            </span>
                            <span class="sideup-text">
                                <span class="up-text">ensuring successful outcomes and patient care.</span>
                            </span> --}}
                        </p>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 rest">
                    <div class="imgs">
                        <div class="img1">
                            <div class="o-hidden">
                                <div class="imago wow">
                                    <img src="{{ asset('assets/frontend/imgs/front-images/about-1.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="img2">
                            <div class="o-hidden">
                                <div class="imago wow">
                                    <img src="{{ asset('assets/frontend/imgs/front-images/about-2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 valign rest">
                    <div class="cont">
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Our Commitment to Quality and Service</span>
                        </h2>
                        <div class="feat mt-80">
                            <div class="item-flex d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay=".4s">
                                {{-- <div>
                                    <div class="icon-img-50">
                                        <img src="{{ asset('assets/frontend/imgs/serv-icons/0.png') }}" alt="">
                                    </div>
                                </div> --}}
                                <div class="cont ml-30">
                                    {{-- <h6>Reliable Products</h6> --}}
                                    <p class="fz-15">We are committed to offering the best dental products to help dental practices give great care. Our tools are made to be easy to use, strong, and precise, helping dentists work better and faster. We believe in providing reliable instruments that make everyday tasks easier for dental professionals and improve patient care. Every product we offer is designed to last and meet the needs of dentists, helping them provide the best care possible.
                                    </p>
                                </div>
                            </div>
                            {{-- <div class="item-flex d-flex align-items-center wow fadeInUp" data-wow-delay=".8s">
                                <div>
                                    <div class="icon-img-50">
                                        <img src="assets/imgs/serv-icons/1.png" alt="">
                                    </div>
                                </div>
                                <div class="cont ml-30">
                                    <h6>Customer Support</h6>
                                    <p class="fz-15">Our team is always ready to assist with product inquiries and order assistance.
                                    </p>
                                </div>

                            </div> --}}
                            <div class="vew-all mt-50 ml-30 wow fadeIn" data-wow-delay=".8s">
                                <a href="{{ route('about') }}">About Us
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->

    <!-- ==================== Start Categories ==================== -->
    <div class="container">
        <div class="sec-lg-head ">
            <div class="row">
                <div class="col-lg-8">
                    <div class="position-re">
                        <h6 class="dot-titl-non mb-15 wow fadeIn">Categories</h6>
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Our Categories</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="text wow fadeIn">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit odit aut fugit, sed quia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="inter-links-center horizontal section-padding d-flex align-items-center">
        <div class="container-xxl">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="links-text d-flex justify-content-center">
                        <ul class="rest">
                            
                            @foreach ($categories as $index => $category)
                            <li data-tab="tab-{{ $index + 1 }}">
                                <h2>
                                    <span class="num">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                                    <a href="{{ route('product.show', ['categorySlug' => $category->slug]) }}">
                                        <span class="text">{{ $category->name }}</span>
                                    </a>
                                </h2>
                            </li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="links-img">
            @foreach ($categories as $index => $category)
                <div class="img" id="tab-{{ $index + 1 }}">
                    <img src="{{ asset('uploads/categories/' . $category->image) }}" alt="{{ $category->name }}">
                </div>
            @endforeach
        </div>
        
    </section>

    <!-- ==================== End Categories ==================== -->
    

    <!-- ==================== Start marq ==================== -->

    <section class="marquee">
        <div class="container-fluid rest">
            <div class="row">
                <div class="col-12">
                    <div class="main-marq">
                        <div class="slide-har st1">
                            <div class="box non-strok">
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Periodontal Instruments</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Endodontic Tools</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Diagnostic Equipment</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Dental Instruments</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Dental Instruments</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                            </div>
                            <div class="box non-strok">
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Dental Instruments</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Dental Instruments</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Dental Instruments</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Dental Instruments</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Dental Instruments</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End marq ==================== -->



    <!-- ==================== Start brands ==================== -->

    <div class="clients-carso2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="swiper5" data-carousel="swiper" data-items="5" data-loop="true" data-space="40">
                        <div id="content-carousel-container-unq-clients" class="swiper-container"
                            data-swiper="container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{ asset('assets/frontend/imgs/front-images/com-1.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{ asset('assets/frontend/imgs/front-images/com-1.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{ asset('assets/frontend/imgs/front-images/com-2.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{ asset('assets/frontend/imgs/front-images/com-3.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="img icon-img-100">
                                            <a href="#0">
                                                <img src="{{ asset('assets/frontend/imgs/front-images/com-4.png') }}"
                                                    alt="">
                                            </a>
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

    <!-- ==================== End brands ==================== -->


    <!-- ==================== Start Services ==================== -->

    <section class="serv-box section-padding pb-0">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="position-re">
                            <h6 class="dot-titl-non mb-15 wow fadeIn">Featured Products</h6>
                            <h2 class="d-rotate wow">
                                <span class="rotate-text">Our Best Seller</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text wow fadeIn">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit odit aut fugit, sed quia.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row md-marg">
                <div class="col-lg-3 col-md-6">
                    <div class="item mb-50">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/imgs/front-images/product-image.jpg') }}" alt="">
                        </div>
                        <div class="info mt-20">
                            <h6 class="fz-18">Dental Instruments</h6>
                            <span class="fz-14 opacity-8">$130.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item mb-50">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/imgs/front-images/product-image.jpg') }}" alt="">
                        </div>
                        <div class="info mt-20">
                            <h6 class="fz-18">Dental Instruments</h6>
                            <span class="fz-14 opacity-8">$130.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item mb-50">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/imgs/front-images/product-image.jpg') }}" alt="">
                        </div>
                        <div class="info mt-20">
                            <h6 class="fz-18">Dental Instruments</h6>
                            <span class="fz-14 opacity-8">$130.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item mb-50">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/imgs/front-images/product-image.jpg') }}" alt="">
                        </div>
                        <div class="info mt-20">
                            <h6 class="fz-18">Dental Instruments</h6>
                            <span class="fz-14 opacity-8">$130.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item md-mb50">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/imgs/front-images/product-image.jpg') }}" alt="">
                        </div>
                        <div class="info mt-20">
                            <h6 class="fz-18">Dental Instruments</h6>
                            <span class="fz-14 opacity-8">$130.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item md-mb50">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/imgs/front-images/product-image.jpg') }}" alt="">
                        </div>
                        <div class="info mt-20">
                            <h6 class="fz-18">Dental Instruments</h6>
                            <span class="fz-14 opacity-8">$130.00</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item sm-mb50">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/imgs/front-images/product-image.jpg') }}" alt="">
                        </div>
                        <div class="info mt-20">
                            <h6 class="fz-18">Dental Instruments</h6>
                            <span class="fz-14 opacity-8">$130.00</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start section ==================== -->

    <section class="serv-box section-padding pb-0">
        <div class="container">
            <div class="sec-lg-head ">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="position-re">
                            <h6 class="dot-titl-non mb-15 wow fadeIn">Departments</h6>
                            <h2 class="d-rotate wow">
                                <span class="rotate-text">Our Departments</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text wow fadeIn">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit odit aut fugit, sed quia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="works thecontainer">
        @foreach($processSteps as $pro)
        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{ asset('uploads/process-steps/' . $pro->image) }}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>{{$pro->description}}</span>
                        <h5>{{$pro->caption}}</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>
        @endforeach

    </section>

    <!-- ==================== End section ==================== -->



    <!-- ==================== Start services tabs ==================== -->

    <section class="services-tab revers  pt-0">
        <div class="container">
            <div class="row mb-80">
                <div class="col-lg-12">
                    <div class="full-width">
                        <div class="main-marq o-hidden pt-40 pb-40 bord-thin-top bord-thin-bottom">
                            <div class="slide-har st1">
                                <div class="box">
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Periodontal Instruments</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Diagnostic Equipment</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Endodontic Tools</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Dental Instruments</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Periodontal Instruments</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Dental Instruments</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Endodontic Tools</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Periodontal Instruments</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Dental Instruments</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="d-flex align-items-center fz-70"><span>Endodontic Tools</span>
                                            <span class="fz-50 ml-50 stroke icon">*</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row justify-content-center" id="tabs">
                    <div class="col-lg-5 valign">
                        <div class="serv-tab-link tab-links full-width md-mb50">
                            <div class="sec-lg-head mb-80 wow fadeIn">
                                <h6 class="dot-titl-non mb-15">Services</h6>
                                <p>We help you to go online and increase your conversion rate Better design for
                                    your
                                    digital products. </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <ul class="rest">
                                        <li class="item-link current mb-15 pb-15 bord-thin-bottom"
                                            data-tab="tabs-1"><span>01</span> UI/UX
                                            Design</li>
                                        <li class="item-link mb-15 pb-15 bord-thin-bottom" data-tab="tabs-2">
                                            <span>02</span> Branding
                                        </li>
                                        <li class="item-link mb-15 pb-15 bord-thin-bottom" data-tab="tabs-3">
                                            <span>03</span> Development
                                        </li>
                                        <li class="item-link" data-tab="tabs-4"><span>04</span> Marketing</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="serv-tab-cont">
                            <div class="tab-content current" id="tabs-1">
                                <div class="item">
                                    <div class="img">
                                        <img src="assets/imgs/sass-img/serv/4.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/0.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines
                                                in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                        <div class="bg-pattern bg-img"
                                            data-background="assets/imgs/patterns/abstact-BG.png"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-2">
                                <div class="item">
                                    <div class="img">
                                        <img src="assets/imgs/sass-img/serv/2.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/1.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines
                                                in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-3">
                                <div class="item">
                                    <div class="img">
                                        <img src="assets/imgs/sass-img/serv/3.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/2.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines
                                                in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="tabs-4">
                                <div class="item">
                                    <div class="img">
                                        <img src="assets/imgs/sass-img/serv/1.jpg" alt="">
                                    </div>
                                    <div class="cont sub-bg">
                                        <div class="icon-img-60 mb-40">
                                            <img src="assets/imgs/serv-icons/0.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p>We are a creative studio specializing in design,
                                                development and strategy many different skills and disciplines
                                                in the
                                                production of all web.</p>
                                        </div>
                                        <a href="#" class="mt-30">
                                            <span class="mr-15">Read More</span>
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </section>

    <!-- ==================== End services tabs ==================== -->



    <!-- ==================== Start testimonails ==================== -->

    <section class="testim-crv2 section-padding sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-lg-head mb-80">
                        <div class="position-re text-center">
                            <h6 class="dot-titl-non mb-15 wow fadeIn">Testimonials</h6>
                            <h2 class="d-rotate wow">
                                <span class="rotate-text">What People Says?</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 position-re wow fadeInUp" data-wow-delay=".4s">
                    <div class="bord-qoute d-flex align-items-center justify-content-center">
                        <div class="qoute-icon main-bg">
                            <img src="{{ asset('assets/frontend/imgs/svg-assets/quote.png') }}" alt="">
                        </div>
                    </div>
                    <div class="img-qoute">
                        <img src="{{ asset('assets/frontend/imgs/about/sq1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".4s">
                    <div class="testim-swiper" data-carousel="swiper" data-items="1" data-loop="true" data-space="30">
                        <div id="content-carousel-container-unq-testim" class="swiper-container" data-swiper="container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="cont mb-40">
                                            <div class="rate-stars mb-20 fz-16">
                                                <span class="rate main-color4">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="fw-400">The quality of the instruments is great, and their customer service always goes above and beyond.</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-60">
                                                    <img src="{{ asset('assets/frontend/imgs/testim/1.jpg') }}" alt=""
                                                        class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6 class="fz-16">Dr. Emily A., Dental Practitioner</h6>
                                                    {{-- <span class="opacity-7 sub-title">Customer</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="cont mb-40">
                                            <div class="rate-stars mb-20 fz-16">
                                                <span class="rate main-color4">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="fw-400">I’ve been using their tools for months now, and I couldn’t be happier. Reliable, efficient, and made to last.</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-60">
                                                    <img src="{{ asset('assets/frontend/imgs/testim/1.jpg') }}" alt=""
                                                        class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6 class="fz-16">Dr. John M., Clinic Owner</h6>
                                                    {{-- <span class="opacity-7 sub-title">Ceo</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="swiper-controls testim-controls arrow-out d-flex ml-auto">
                            <div class="swiper-button-prev">
                                <span class="left">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="swiper-button-next ml-50">
                                <span class="right">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="numbers mt-80 pt-80 bord-thin-top wow fadeIn" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="item md-mb50">
                            <h2 class="fw-800 stroke">500<span class="fz-80 fw-600">+</span></h2>
                            <h6>Partners</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-around">
                        <div class="item md-mb50">
                            <h2 class="fw-800">1<span class="fz-80 fw-600">k+</span></h2>
                            <h6>Orders</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex justify-content-around">
                        <div class="item sm-mb50">
                            <h2 class="fw-800 stroke">200<span class="fz-80 fw-600">+</span></h2>
                            <h6>Distributor</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="item ml-auto">
                            <h2 class="fw-800 ">50<span class="fz-80 fw-600">+</span></h2>
                            <h6>Countries</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End testimonails ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog-crev section-padding">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="position-re">
                            <h6 class="dot-titl colorbg-3 mb-10">Our Blogs</h6>
                            <h2 class="fz-60 fw-700">Latest News</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="full-width d-flex justify-content-end justify-end">
                            <div class="vew-all wow fadeIn">
                                <a href="#">View All Our News
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4">
                    <div class="item md-mb50">
                        <div class="img">
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}">
                            <a href="#" class="main-colorbg3">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="cont">
                            <h6 class="mt-3">
                                <a href="{{ route('blog.detail', $blog->id) }}">{{ $blog->name }}</a>
                            </h6>
                            <div class="info mt-20 mb-20 pt-20 bord-thin-top">
                                <span class="by">
                                    <a href="{{ route('blog.detail', $blog->id) }}"><i class="far fa-user fz-14 mr-10"></i> By Admin</a>
                                </span>
                                <span class="dot main-colorbg3"></span>
                                <span class="date">
                                    <a href="#"><i class="far fa-calendar-alt fz-14 mr-10"></i>
                                        {{ $blog->created_at->format('d F Y') }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- ==================== End Blog ==================== -->
    @push('scripts')
    <script src="{{url('assets/frontend/js/gsap.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/ScrollTrigger.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/ScrollSmoother.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/hscroll.js')}}"></script>
    <script src="{{url('assets/frontend/js/smoother-script.js')}}"></script>
    @endpush
@endsection
