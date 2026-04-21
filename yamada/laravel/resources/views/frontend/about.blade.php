@extends('frontend.layout.master')
@section('title', 'About Us')
@section('main-container')
    <style>
        .bg_grey-2 {
            background: linear-gradient(135deg, #B80000, #660000);
        }

        .text_black-12 {
            color: #ffffff !important;
        }

        .title {
            color: #ffffff;
        }

        .flat-title .title {
            color: #B80000;
            font-size: 32px;
            line-height: 38.4px;
        }

        .flat-iconbox-v3 .tf-icon-box .icon {
            width: 74px;
            height: 74px;
            border: 1px solid #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 34px;
        }

        .flat-iconbox-v3.lg .tf-icon-box .icon i {
            font-size: 40px;
            color: #ffffff;
        }

        .heading {
            color: #B80000;
        }

        .tf-timeline-label {
            color: #B80000;
        }

        .tf-timeline-time {
            position: absolute;
            z-index: 3;
            top: 0px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #B80000, #660000);
            color: var(--white);
            font-size: 20px;
            line-height: 36px;
            border-radius: 2.5px;
            padding: 0px 35px;
        }

        .tf-timeline-line {
            position: absolute;
            width: 1px;
            border: 1px dashed #B80000;
            height: 100%;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        .tf-timeline-inner::after,
        .tf-timeline-inner::before {
            position: absolute;
            content: "";
            width: 20px;
            background: linear-gradient(135deg, #B80000, #660000);
            height: 1px;
            z-index: 3;
            top: calc(50% + 5px);
        }

        .tf-timeline-item::before {
            position: absolute;
            content: "";
            top: 50%;
            left: 50%;
            transform: translate(-50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: linear-gradient(135deg, #B80000, #660000);
        }
    </style>
    <!-- Slider -->
    <section class="tf-slideshow about-us-page position-relative">
        <div class="banner-wrapper">
            <img class="lazyload" src="{{ asset('assets/frontend/images/front-images/about-us-banner.jpg') }}"
                data-src="{{ asset('assets/frontend/images/front-images/about-us-banner.jpg') }}" alt="image-collection">
            <div class="box-content text-center">
                <div class="container">
                    <div class="text text-white">Precision. Innovation. Excellence <br class="d-xl-block d-none"> in Dental &
                        Surgical Instruments.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Slider -->
    <!-- flat-title -->
    <section class="flat-spacing-9">
        <div class="container">
            <div class="flat-title my-0">
                <div class="title">About Yamada</div>
                <p class="sub-title ">
                    Yamada is a trusted provider of premium orthodontic, dental, and surgical instruments, dedicated to
                    enhancing <br class="d-xl-block d-none">
                    surgical instruments, dedicated to enhancing professional efficiency and patient care. With a strong
                    focus on <br class="d-xl-block d-none">
                    precision, With a strong focus on precision, our expert team meticulously designs and tests each tool to
                    meet <br class="d-xl-block d-none">
                    designs and tests each tool to meet the highest industry standards. Our products are MDR, FDA, ISO 9001,
                    and ISO <br class="d-xl-block d-none">
                    13485 certified, ensuring compliance and reliability in every instrument. We take pride in delivering
                    durable, <br class="d-xl-block d-none">
                    ergonomic, and high-performance solutions that professionals can rely on. At Yamada, our mission is to
                    support <br class="d-xl-block d-none">
                    healthcare practitioners worldwide by providing tools that enhance treatment accuracy and improve
                    patient outcomes.

                </p>
            </div>
        </div>
    </section>
    <!-- /flat-title -->
    <div class="container">
        <div class="line"></div>
    </div>
    <!-- image-text -->
    <section class="flat-spacing-23 flat-image-text-section">
        <div class="container">
            <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
                <div class="tf-image-wrap">
                    <img class="lazyload w-100" data-src="{{ asset('assets/frontend/images/front-images/about-us.jpg') }}"
                        src="{{ asset('assets/frontend/images/front-images/about-us.jpg') }}" alt="collection-img">
                </div>
                <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                    <div>
                        <div class="heading">Established - 1995</div>
                        <div class="text">
                            Yamada is committed to equipping dental and surgical professionals <br
                                class="d-xl-block d-none">
                            with cutting-edge instruments that optimize treatment efficiency and <br
                                class="d-xl-block d-none">
                            precision. We focus on ergonomic designs, superior craftsmanship and <br
                                class="d-xl-block d-none">
                            technology innovation to ensure seamless performance. By collaborating <br
                                class="d-xl-block d-none">
                            with industry experts, we continuously refine our products to set new <br
                                class="d-xl-block d-none">
                            benchmarks in healthcare excellence.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flat-spacing-15">
        <div class="container">
            <div class="tf-grid-layout md-col-2 tf-img-with-text style-4">
                <div class="tf-content-wrap px-0 d-flex justify-content-center w-100">
                    <div>
                        <div class="heading">Our Mission</div>
                        <div class="text">
                            Yamada is committed to equipping dental and surgical professionals <br
                                class="d-xl-block d-none">
                            with cutting-edge instruments that optimize treatment efficiency and <br
                                class="d-xl-block d-none">
                            precision. We focus on ergonomic designs, superior craftsmanship and <br
                                class="d-xl-block d-none">
                            technology innovation to ensure seamless performance. By collaborating <br
                                class="d-xl-block d-none">
                            with industry experts, we continuously refine our products to set new <br
                                class="d-xl-block d-none">
                            benchmarks in healthcare excellence.
                        </div>

                        <div class="heading">Our Vision</div>
                        <div class="text">
                            We aspire to be a global leader in dental and surgical instrument <br class="d-xl-block d-none">
                            manufacturing, ensuring quality, durability, and precision for professionals <br
                                class="d-xl-block d-none">
                            worldwide. Our vision is to build long-term partnerships and revolutionize <br
                                class="d-xl-block d-none">
                            patient care by consistently delivering advanced tools that practitioners <br
                                class="d-xl-block d-none">
                            trust and rely on.
                        </div>
                    </div>
                </div>
                <div class="grid-img-group">
                    <div class="tf-image-wrap box-img item-1">
                        <div class="img-style">
                            <img class="lazyload" src="{{ asset('assets/frontend/images/front-images/vision.jpg') }}"
                                data-src="{{ asset('assets/frontend/images/front-images/vision.jpg') }}" alt="img-slider">
                        </div>
                    </div>
                    <div class="tf-image-wrap box-img item-2">
                        <div class="img-style">
                            <img class="lazyload" src="{{ asset('assets/frontend/images/front-images/mission.jpg') }}"
                                data-src="{{ asset('assets/frontend/images/front-images/mission.jpg') }}" alt="img-slider">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /image-text -->
    <!-- iconbox -->
    
    <!-- /iconbox -->
    <!-- Store locations -->
    <section class="flat-spacing-12">
        <div class="container">
            <div class="tf-timeline-wrap position-relative">
                <div class="tf-timeline-line"></div>
                <div class="tf-timeline-item z-2 position-relative">
                    <div
                        class="tf-timeline-inner d-flex align-items-center justify-content-between tf-timeline-content-end">
                        <span class="tf-timeline-time">1980</span>
                        <div class="tf-timeline-content">
                            <div class="tf-timeline-label fw-7">PHASE 1</div>
                            <h4 class="tf-timeline-title">Founding Years</h4>
                            <div class="tf-timeline-description">Yamada was established with a vision to redefine dental and surgical instrument quality, focusing on precision and reliability.</div>
                        </div>
                        <div class="tf-timeline-image">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/Founding-Years.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="tf-timeline-item z-2 position-relative">
                    <div class="tf-timeline-inner d-flex align-items-center justify-content-between">
                        <span class="tf-timeline-time">2000</span>
                        <div class="tf-timeline-content">
                            <div class="tf-timeline-label fw-7">PHASE 2</div>
                            <h4 class="tf-timeline-title">Expansion & Growth</h4>
                            <div class="tf-timeline-description">With increasing demand, Yamada expanded its production capabilities and introduced advanced technologies to enhance product innovation.</div>
                        </div>
                        <div class="tf-timeline-image">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/Expansion-&-Growth.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="tf-timeline-item z-2 position-relative">
                    <div
                        class="tf-timeline-inner d-flex align-items-center justify-content-between tf-timeline-content-end">
                        <span class="tf-timeline-time">2010</span>
                        <div class="tf-timeline-content">
                            <div class="tf-timeline-label fw-7">PHASE 3</div>
                            <h4 class="tf-timeline-title">Global Recognition</h4>
                            <div class="tf-timeline-description">Achieving industry certifications and forming strategic partnerships, Yamada gained recognition as a trusted name worldwide.</div>
                        </div>
                        <div class="tf-timeline-image">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/Global-Recognition.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="tf-timeline-item z-2 position-relative">
                    <div class="tf-timeline-inner d-flex align-items-center justify-content-between">
                        <span class="tf-timeline-time">2025</span>
                        <div class="tf-timeline-content">
                            <div class="tf-timeline-label fw-7">PHASE 4</div>
                            <h4 class="tf-timeline-title">Future Commitment</h4>
                            <div class="tf-timeline-description"> Continuing our legacy, we aim to innovate and elevate industry standards, ensuring professionals have the best tools for optimal patient care.</div>
                        </div>
                        <div class="tf-timeline-image">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/Future-Commitment.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Store locations -->

    <!-- Brand -->
    <section class="flat-spacing-12 pt-0">
        <div class="wrap-carousel wrap-brand wrap-brand-v2 autoplay-linear">
            <div dir="ltr" class="swiper tf-sw-brand border-0" data-play="true" data-loop="true" data-preview="5"
                data-tablet="4" data-mobile="2" data-space-lg="30" data-space-md="15">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/compliance-1.png') }}"
                                src="{{ asset('assets/frontend/images/front-images/compliance-1.png') }}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/compliance-2.png') }}"
                                src="{{ asset('assets/frontend/images/front-images/compliance-2.png') }}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/compliance-3.png') }}"
                                src="{{ asset('assets/frontend/images/front-images/compliance-3.png') }}" alt="image-brand">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-item-v2">
                            <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/compliance-4.png') }}"
                                src="{{ asset('assets/frontend/images/front-images/compliance-4.png') }}" alt="image-brand">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Brand -->

@endsection
