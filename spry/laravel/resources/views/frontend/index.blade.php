@extends('frontend.layout.master')
@section('title', 'Home – SPRY Sports Corp.')
@section('main-container')
    <style>
        .bg-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
    <main class="main-bg">


        <div class="main-box main-bg ontop">
            <!-- ==================== Start Slider ==================== -->

            @foreach ($banners as $banner)
                <header class="header-main full-height valign bg-img parallaxie"
                    data-background="{{ asset('uploads/banners/' . $banner->image) }} " data-overlay-dark="2">
                    <div class="container ontop">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="caption">
                                    <h5 class="fw-300 mb-15">{{ $banner->caption }}</h5>
                                    <h1 class="fz-80">{{ $banner->description }}</h1>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-end justify-content-end justify-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <a href="{{ route('contact') }}" class="hover-this">
                                            <div class="circle-button hover-anim">
                                                <div class="rotate-circle fz-30 text-u">
                                                    <svg class="textcircle" viewBox="0 0 500 500">
                                                        <defs>
                                                            <path id="textcircle"
                                                                d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                                            </path>
                                                        </defs>
                                                        <text>
                                                            <textPath xlink:href="#textcircle" textLength="900">Explore More
                                                                -
                                                                Explore More -</textPath>
                                                        </text>
                                                    </svg>
                                                </div>
                                                <div class="arrow">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <h6 class="sub-title">Conatct for <br> Our Products</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            @endforeach

            <!-- ==================== End Slider ==================== -->

            <!-- ==================== Start intro ==================== -->

            <section class="about section-padding  main-bg pb-0">
                <div class="container ontop">
                    <div class="row">
                        <div class="col-lg-5 valign">
                            <div class="img" style="width: 100%; min-height: 300px; background: #000;">
                                <iframe src="https://player.vimeo.com/video/1181900001" width="100%" height="350"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-lg-7 valign">
                            <div class="cont sec-lg-head">
                                <h6 class="dot-titl mb-20">About Us</h6>
                                <h2 class="d-slideup wow">
                                    <span class="sideup-text"><span class="up-text">Welcome to SPRY Sports Corporation —
                                            where passion meets precision.</span></span>
                                </h2>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text mt-20">
                                            <p>Founded in 2002 by Ghulam Nabi, Shamas Ghulam and Nadeem Ghulam. SPRY began
                                                as a small, ambitious venture in Sialkot, Pakistan — the global hub of
                                                premium sports goods manufacturing. Today, we are proud to be recognized as
                                                one of the most innovative and progressive manufacturers in the region,
                                                trusted by clients around the world for our commitment to quality and
                                                performance.
                                                At SPRY, we specialize in designing and producing high-quality sports
                                                garments and fashion wear for customers across the globe. From concept to
                                                creation, every product is made using the finest materials and advanced
                                                manufacturing techniques, ensuring durability, comfort, and style.
                                            </p>
                                        </div>
                                        <div class="underline">
                                            <a href="{{ route('about') }}" class="mt-30 ls1 sub-title">Read More <i
                                                    class="ml-5">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                            fill="currentColor"></path>
                                                    </svg></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End intro ==================== -->



            <!-- ==================== Start Categories ==================== -->

            <section class="work-carsouel section-padding position-re o-hidden">
                <div class="container">
                    <div class="sec-lg-head mb-80">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="dot-titl-non mb-15 wow fadeIn">Categories</h6>
                                <h3 class="d-slideup wow">
                                    <span class="sideup-text">
                                        <span class="up-text">Our Categories</span>
                                    </span>
                                </h3>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="full-width">
                                    <div class="d-flex justify-content-end justify-end">
                                        <div class="swiper-controls arrow-out d-flex">
                                            <div class="swiper-button-prev" tabindex="0" role="button"
                                                aria-label="Previous slide">
                                                <span class="left">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="swiper-button-next ml-50" tabindex="0" role="button"
                                                aria-label="Next slide">
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
                        </div>
                    </div>
                </div>
                <div class="container-fluid rest">
                    <div class="row">
                        <div class="col-12">
                            <div class="work-crus work-crus3 out" data-carousel="swiper" data-items="3"
                                data-center="center" data-loop="true" data-space="40" data-swiper-speed="1000">
                                <div id="content-carousel-container-unq-w" class="swiper-container"
                                    data-swiper="container">
                                    <div class="swiper-wrapper">
                                        @foreach ($category as $cat)
                                            <div class="swiper-slide">
                                                <div class="item">
                                                    <div class="img">
                                                        <img src="{{ asset('uploads/categories/' . $cat->image) }}"
                                                            alt="">
                                                        <div class="cont">

                                                            <h6 class="fz-18">{{ $cat->name }}</h6>
                                                        </div>
                                                        <a href="{{ route('products', $cat->slug) }}" class="plink"></a>
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
            </section>

            <!-- ==================== End Categories ==================== -->




            <!-- ==================== Start Services ==================== -->

            {{-- <section class="services section-padding block-pattern">
                <div class="container">

                </div>
                <div class="container-fluid rest">
                    <div class="serv-items-crev">
                        <div class="serv-swiper" data-carousel="swiper" data-items="5" data-loop="true" data-space="0"
                            data-speed="1000">
                            <div id="content-carousel-container-unq-serv" class="swiper-container"
                                data-swiper="container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide wow fadeIn" data-wow-delay=".9s">
                                        <div class="item">
                                            <div class="icon-img-60 mb-40">
                                                <img src="assets/imgs/serv-icons/0.png" alt="">
                                            </div>
                                            <h6 class="mb-15">Marketing Strategy</h6>
                                            <p>Praesent faucibus nisl sit amet nulla pretium a sed purus.</p>

                                        </div>
                                    </div>
                                    <div class="swiper-slide wow fadeIn" data-wow-delay=".7s">
                                        <div class="item">
                                            <div class="icon-img-60 mb-40">
                                                <img src="assets/imgs/serv-icons/1.png" alt="">
                                            </div>
                                            <h6 class="mb-15">Product Design</h6>
                                            <p>Praesent faucibus nisl sit amet nulla pretium a sed purus.</p>

                                        </div>
                                    </div>
                                    <div class="swiper-slide wow fadeIn" data-wow-delay=".5s">
                                        <div class="item">
                                            <div class="icon-img-60 mb-40">
                                                <img src="assets/imgs/serv-icons/2.png" alt="">
                                            </div>
                                            <h6 class="mb-15">Website Design</h6>
                                            <p>Praesent faucibus nisl sit amet nulla pretium a sed purus.</p>

                                        </div>
                                    </div>
                                    <div class="swiper-slide wow fadeIn" data-wow-delay=".3s">
                                        <div class="item">
                                            <div class="icon-img-60 mb-40">
                                                <img src="assets/imgs/serv-icons/1.png" alt="">
                                            </div>
                                            <h6 class="mb-15">E-Commerce</h6>
                                            <p>Praesent faucibus nisl sit amet nulla pretium a sed purus.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-pattern bg-img" data-background="assets/imgs/patterns/bg-lines-1.svg"></div>
            </section> --}}

            <!-- ==================== End Services ==================== -->


            <!-- ==================== Start Departments ==================== -->

            <section class="serv-img-reveal section-padding">
                <div class="container">
                    <div class="sec-head mb-80">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="sub-title mb-15 wow fadeIn">Our Departments</h6>
                                <h2 class="d-slideup wow fz-50">
                                    <span class="sideup-text">
                                        <span class="up-text">Featured Departments.</span>
                                    </span>
                                </h2>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="full-width d-flex justify-content-end justify-end">
                                    <div class="vew-all wow fadeIn">
                                        <a href="{{ route('departments') }}">View All Departments
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
                    <div class="row md-marg content">

                        @php
                            $half = ceil($departments->count() / 2);
                            $firstHalf = $departments->take($half);
                            $secondHalf = $departments->slice($half);
                        @endphp

                        {{-- First Column --}}
                        <div class="col-lg-6">
                            <ul class="rest">
                                @foreach ($firstHalf as $department)
                                    @php
                                        $images = explode(',', $department->image);
                                        $firstImage = $images[0] ?? 'default.jpg';
                                    @endphp

                                    <li class="block" data-fx="1">
                                        <a href="" class="mb-30 pb-30 bord-thin-bottom full-width block__title"
                                            data-img="{{ asset('uploads/departments/' . trim($firstImage)) }}">

                                            <div class="d-flex align-items-center">

                                                {{-- <div class="mr-80">
                                <span class="icon-img-50">
                                    <img src="{{ asset('uploads/departments/' . trim($firstImage)) }}"
                                         alt="{{ $department->name }}">
                                </span>
                            </div> --}}

                                                <div>
                                                    <h5>{{ $department->name }}</h5>
                                                </div>

                                                <div class="ml-auto">
                                                    <div class="arrow">
                                                        <span class="circle">
                                                            <svg width="18" height="18" viewBox="0 0 18 18"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                        {{-- Second Column --}}
                        <div class="col-lg-6">
                            <ul class="rest">
                                @foreach ($secondHalf as $department)
                                    @php
                                        $images = explode(',', $department->image);
                                        $firstImage = $images[0] ?? 'default.jpg';
                                    @endphp

                                    <li class="block" data-fx="1">
                                        <a href="" class="mb-30 pb-30 bord-thin-bottom full-width block__title"
                                            data-img="{{ asset('uploads/departments/' . trim($firstImage)) }}">

                                            <div class="d-flex align-items-center">

                                                {{-- <div class="mr-80">
                                <span class="icon-img-50">
                                    <img src="{{ asset('uploads/departments/' . trim($firstImage)) }}"
                                         alt="{{ $department->name }}">
                                </span>
                            </div> --}}

                                                <div>
                                                    <h5>{{ $department->name }}</h5>
                                                </div>

                                                <div class="ml-auto">
                                                    <div class="arrow">
                                                        <span class="circle">
                                                            <svg width="18" height="18" viewBox="0 0 18 18"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>

                </div>
            </section>

            <!-- ==================== End Departments ==================== -->


            <!-- ==================== Start Feature Products ==================== -->

            <section class="team section-padding pt-0">
                <div class="container">
                    <div class="sec-head mb-80">
                        <div class="row">
                            <div class="col-lg-8">
                                <h6 class="sub-title opacity-8 wow fadeInUp">products</h6>
                                <h2 class="d-rotate wow">
                                    <span class="rotate-text">Our Hot Selling</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row md-marg">
                        @foreach ($featured_products as $product)
                            <div class="col-lg-3 col-md-6">
                                <div class="item mb-50">

                                    <div class="img">
                                        @php
                                            $images = json_decode($product->service_images, true);
                                        @endphp

                                        @if (!empty($images) && isset($images[0]))
                                            <img src="{{ asset('images/services/' . $images[0]) }}"
                                                alt="{{ $product->image_alt ?? $product->name }}">
                                        @endif

                                    </div>

                                    <div class="info mt-20">
                                        <h6 class="fz-18">
                                            <a href="{{ route('product.detail', $product->slug) }}">
                                                {{ $product->name }}
                                            </a>
                                        </h6>
                                    </div>

                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-3 col-md-6">
                            <div class="item-join valign">
                                <div class="full-width">
                                    <h6 class="text-u ls2">Make your <br> Order</h6>
                                    <a href="page-team.html" class="arrow mt-30">
                                        <span class="circle">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <span class="fz-12 text-u ml-10">Contact us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== End Feature Products ==================== -->

            <!-- ==================== Start Catalouges ==================== -->
            <section class="portfolio clasic section-padding pt-0" data-scroll-index="3">
                <div class="container">
                    <div class="sec-lg-head mb-50">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="position-re">
                                    <h6 class="dot-titl-non mb-10 fadeIn">Catalouges</h6>
                                    <h2 class="fz-50 d-rotate wow">
                                        <span class="rotate-text">Our Catalouges</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-5 d-flex align-items-center">
                                <div class="full-width d-flex justify-content-end justify-end">
                                    <div class="vew-all">
                                        <a href="{{ route('catalouges') }}">View All Catalouges
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
                        @foreach ($catalouges as $cata)
                            <div class="col-lg-4">
                                <div class="item mt-30">
                                    <div class="o-hidden">
                                        <div class="img imago wow">
                                            <img src="{{ asset('uploads/catalogues/' . $cata->image) }}" alt=""
                                                class="radius-10">
                                            <a href="{{ route('catalouges') }}" class="tag">
                                                <span>Catalouges</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cont mt-30 d-flex wow fadeIn" data-wow-delay=".4s">
                                        <div>
                                            <h6 class="line-height-1"><a
                                                    href="{{ route('catalouges') }}">{{ $cata->name }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- ==================== End Catalouges ==================== -->

            <!-- ==================== Start clients ==================== -->

            <div class="clients section-padding pb-100 position-re pt-0">
                <div class="container">
                    <div class="row justify-content-center mb-80">
                        <div class="col-lg-6 text-center">
                            <div class="text">
                                <h3>We create <span>experiences</span> and turn ideas into reality.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="row md-marg">
                                <div class="col-md-3 col-6 brand box-bg">
                                    <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                        <div class="">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/images/compliances-1.png') }}"
                                                alt="">
                                        </div>
                                        {{-- <a href="#0" class="link" data-splitting>www.Black Bear.com</a> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brand box-bg">
                                    <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                        <div class="">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/images/compliances-2.png') }}"
                                                alt="">
                                        </div>
                                        {{-- <a href="#0" class="link" data-splitting>www.Black Bear.com</a> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brand box-bg">
                                    <div class="item mb-30 wow fadeIn" data-wow-delay=".8s">
                                        <div class="">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/images/compliances-3.png') }}"
                                                alt="">
                                        </div>
                                        {{-- <a href="#0" class="link" data-splitting>www.Black Bear.com</a> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brand box-bg">
                                    <div class="item mb-30 wow fadeIn" data-wow-delay=".3s">
                                        <div class="">
                                            <img class="img-fluid"
                                                src="{{ asset('assets/frontend/images/compliances-4.png') }}"
                                                alt="">
                                        </div>
                                        {{-- <a href="#0" class="link" data-splitting>www.Black Bear.com</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==================== End clients ==================== -->



            <!-- ==================== Start section image ==================== -->

            <div class="back-image states position-relative">

                <!-- Background Video -->
                <video autoplay muted loop playsinline class="bg-video">
                    <source src="{{ asset('assets/frontend/video/spry-sports.mp4') }}" type="video/mp4">
                </video>

                <div class="container box position-re">
                    <ul class="rest">
                        {{-- <li class="sd-dark">
                                <span class="numb">5920</span>
                                <h5>Quality Products Delivered <br> Worldwide</h5>
                            </li> --}}

                        <li class="blur">
                            <h5>Start Your Bulk Order</h5>
                            <span>
                                <a href="{{ route('contact') }}">
                                    <span class="icon pe-7s-paper-plane"></span>
                                </a>
                            </span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- ==================== End section image ==================== -->


            <!-- ==================== Start Blog ==================== -->

            {{-- <section class="blog-modern section-padding">
                <div class="container">
                    <div class="sec-lg-head mb-80">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="position-re">
                                    <h6 class="dot-titl mb-10">Our Latest News </h6>
                                    <h2 class="fz-70 fw-700">Our Blogs</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 d-flex align-items-center">
                                <div class="text">
                                    <p>Stay updated with the latest trends in sports ball manufacturing and teamwear
                                        production.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-carsouel" data-carousel="swiper" data-items="3" data-loop="true" data-space="10"
                        data-speed="1000">
                        <div id="content-carousel-container-unq-blog" class="swiper-container" data-swiper="container">
                            <div class="swiper-wrapper curs-scroll">
                                @foreach ($blog as $blogs)
                                    <div class="swiper-slide wow fadeInUp" data-wow-delay=".1s">
                                        <div class="item">
                                            <div class="img">
                                                <img src="{{ asset('uploads/blogs/' . $blogs->image) }}" alt="">
                                                <div class="date">
                                                    <a href="{{ route('blog.detail', $blogs->slug) }}">30 august 2021</a>
                                                </div>
                                            </div>
                                            <div class="cont mt-30">
                                                <h6>
                                                    <a
                                                        href="{{ route('blog.detail', $blogs->slug) }}">{{ $blogs->name }}</a>
                                                </h6>
                                                <a href="{{ route('blog.detail', $blogs->slug) }}"
                                                    class="mt-20 ls1 sub-title">Read More <i class="ml-5"><svg
                                                            width="18" height="18" viewBox="0 0 18 18"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                                fill="currentColor"></path>
                                                        </svg></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
    </main>


    @push('scripts')
        <!-- custom scripts -->
        <script src="assets/js/scripts.js"></script>
        <!-- jQuery -->
        <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>

        <script src="{{ asset('assets/frontend/js/imgReveal/charming.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/imgReveal/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/imgReveal/TweenMax.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/imgReveal/demo.js') }}"></script>


        <!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollSmoother.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/frontend/js/smoother-script.js') }}"></script> --}}
        <script src="{{ asset('assets/frontend/js/parallax.min.js') }}"></script>
    @endpush
@endsection
