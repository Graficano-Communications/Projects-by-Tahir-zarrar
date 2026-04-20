@extends('frontend.layout.master')
@section('title', 'Black Bear')





@section('main-container')
    <div id="smooth-wrapper">


        <!-- ==================== Start Navbar ==================== -->

        @include('frontend.layout.header')

        <!-- ==================== End Navbar ==================== -->

        <div id="smooth-content">


            <div class="main-box main-bg ontop">


                <!-- ==================== Start Slider ==================== -->
                @foreach ($banners as $banner)
                    <header class="header-freelancer full-height bord-thin-bottom valign position-re" data-overlay-dark="5"
                        data-scroll-index="0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="caption">
                                        <h1 class="fz-60">{{ $banner->caption }}</h1>
                                        <div class="row mt-50">
                                            <div class="col-lg-3 cal-act order2">
                                                <a href="portfolio-classic-grid.html"
                                                    class="butn-circle d-flex align-items-center text-center">
                                                    <div class="full-width">
                                                        <span><svg width="18" height="18" viewBox="0 0 18 18"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                                    fill="currentColor"></path>
                                                            </svg></span>
                                                        <span class="full-width">View Works</span>
                                                    </div>
                                                    <img src="{{ asset('assets/frontend/images/circle-star.svg') }}"
                                                        alt="" class="circle-star">
                                                </a>
                                            </div>
                                            <div class="col-lg-8 offset-lg-1 valign order1 md-mb50">
                                                <p class="fz-16">{{ $banner->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-img" data-background="{{ asset('uploads/banners/' . $banner->image) }}"></div>
                    </header>
                @endforeach
                <!-- ==================== End Slider ==================== -->




                <main class="position-re">


                    <!-- ==================== Start marq ==================== -->
                    <section class="serv-marq bord-thin-bottom">
                        <div class="container-fluid ontop sub-bg rest pt-20 pb-20">
                            <div class="row">
                                <div class="col-12">
                                    <div class="main-marq light-text">
                                        <div class="slide-har st1">
                                            <div class="box non-strok">
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Fitness</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Boxing</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Apparels</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Casual Wears</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="box non-strok">
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Fitness</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Boxing</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Apparels</span>
                                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                                    </h4>
                                                </div>
                                                <div class="item">
                                                    <h4 class="d-flex align-items-center"><span>Casual Wears</span>
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
                    <!-- ==================== Start about ==================== -->
                    <section class="intro-corp section-padding pb-0">
                        <div class="container">
                            <div class="row justify-content-around">
                                <div class="col-lg-5 valign md-mb50">
                                    <div class="imgs mb-80">
                                        <div class="img1">
                                            <img src="{{ asset('assets/frontend/images/about-2.jpg') }}" alt=""
                                                class="radius-10">
                                        </div>
                                        <div class="img2">
                                            <img src="{{ asset('assets/frontend/images/about-1.jpg') }}" alt=""
                                                class="radius-10">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 valign">
                                    <div class="cont">
                                        <div class="text">
                                            <h2 class="d-slideup wow">
                                                <span class="sideup-text">
                                                    <span class="up-text">About Us</span>
                                                </span>
                                            </h2>
                                        </div>
                                        <div class=" bord mt-40">

                                            <div class="item mb-15 wow fadeInUp" data-wow-delay=".1s">
                                                <p class="fz-16">Black Bear is where strength meets style. We create
                                                    premium
                                                    fitness
                                                    and casual wear designed for those who push limits and live boldly.
                                                    Every
                                                    piece
                                                    blends comfort, durability, and modern design — trusted by athletes and
                                                    everyday
                                                    warriors alike. Join the Black Bear movement — built for performance,
                                                    made to stand out.</p>
                                            </div>

                                        </div>
                                        <div class="vew-all mt-40">
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
                    </section>
                    <!-- ==================== End about ==================== -->


                    <!-- ==================== Start Category ==================== -->
                    <section class="serv-box section-padding" data-scroll-index="1">
                        <div class="container">
                            <div class="sec-lg-head mb-80">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="position-re">
                                            <h6 class="dot-titl-non mb-10 wow fadeIn">Featured Categories</h6>
                                            <h2 class="fz-50 d-rotate wow">
                                                <span class="rotate-text">Our Categories</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 d-flex align-items-center">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($category as $cat)
                                    <div class="col-lg-6">
                                        <div class="serv-item d-flex mb-30 radius-10 wow fadeIn" data-wow-delay=".3s">
                                            <div class="icon-img-80">
                                                <img src="{{ asset('uploads/categories/' . $cat->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="ml-60">
                                                <a href="{{ route('products', $cat->slug) }}">
                                                    <h5 class="mb-15">{{ $cat->name }}</h5>
                                                </a>
                                                <p>{!! $cat->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- ==================== End Category ==================== -->

                    <div class="container">
                        <div class="sec-lg-head mb-80">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="position-re">
                                        <h6 class="dot-titl-non mb-10 wow fadeIn">Featured Departments</h6>
                                        <h2 class="fz-50 d-rotate wow">
                                            <span class="rotate-text">Our Departments</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-flex align-items-center">
                                    <div class="full-width d-flex justify-content-end justify-end">
                                        <div class="vew-all">
                                            <a href="{{ route('departments') }}">View All Departmets
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
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

                    <section class="portfolio-fixed">
                        <div class="container-fluid rest">
                            <div class="row">
                                <!-- Left Side: Background Images -->
                                <div class="col-lg-6 rest">
                                    <div class="left" id="sticky_item">
                                        @foreach ($departments as $index => $department)
                                            <div id="tab-{{ $index + 1 }}" class="img bg-img"
                                                data-background="{{ asset('uploads/departments/' . explode(',', $department->image)[0]) }}">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Right Side: Text Content -->
                                <div class="col-lg-6 sub-bg right">
                                    @foreach ($departments as $index => $department)
                                        <div class="cont {{ $index == 0 ? 'active' : '' }}"
                                            data-tab="tab-{{ $index + 1 }}">
                                            <div class="img-hiden">
                                                <img src="{{ asset('uploads/departments/' . explode(',', $department->image)[0]) }}"
                                                    alt="">
                                            </div>
                                            <span class="sub-title mb-15">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.
                                                Department</span>
                                            <h2 class="mb-30">{{ $department->name }}</h2>
                                            <div class="row justify-content-center">
                                                <div class="col-md-11">
                                                    <p>{!!$department->description !!}</p>

                                                    <a href="{{ route('departments') }}"
                                                        class="butn-circle d-flex align-items-center text-center mt-50">
                                                        <div class="full-width">
                                                            <span>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985
                                                        12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344
                                                        13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244
                                                        13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092
                                                        13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484
                                                        13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892
                                                        4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577
                                                        4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578
                                                        4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934
                                                        4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612
                                                        4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922
                                                        4.38811 13.922 4.5Z" fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="full-width">View Details</span>
                                                        </div>
                                                        <img src="{{ asset('assets/frontend/imgs/svg-assets/circle-star.svg') }}"
                                                            alt="" class="circle-star">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>



                    <!-- ==================== Start skills ==================== -->

                    <section class="skills-exp section-padding sub-bg" data-scroll-index="4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="sec-lg-head mb-80">
                                        <div class="position-re">
                                            <h6 class="dot-titl-non mb-10 wow fadeIn">Skills & Experience</h6>
                                            <h2 class="fz-50 d-rotate wow">
                                                <span class="rotate-text">My Experience</span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="skill-item d-flex justify-content-between md-mb50">
                                        <div class="item text-center">
                                            <div class="icon-img-60 m-auto">
                                                <img src="{{ asset('assets/frontend/images/skill-2.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="mt-15">Employees</span>
                                        </div>
                                        <div class="item text-center">
                                            <div class="icon-img-60 m-auto">
                                                <img src="{{ asset('assets/frontend/images/skill-4.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="mt-15">Production</span>
                                        </div>
                                        <div class="item text-center">
                                            <div class="icon-img-60 m-auto">
                                                <img src="{{ asset('assets/frontend/images/skill-1.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="mt-15">Export</span>
                                        </div>
                                        <div class="item text-center">
                                            <div class="icon-img-60 m-auto">
                                                <img src="{{ asset('assets/frontend/images/skill-3.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="mt-15">Experience</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-5 offset-lg-1 valign">
                                    <div class="exp-items full-width">
                                        <div class="item d-flex pb-30 align-items-center pt-30 mb-30 bord-thin-top bord-thin-bottom">
                                            <div class="title">
                                                <h6>Founded in 2008</h6>
                                                <p class="fz-12">Started with a vision to craft premium quality products.</p>
                                            </div>
                                            <div class="date ml-auto text-right">
                                                <p class="fz-12">2008 – Present</p>
                                            </div>
                                           
                                        </div>
                                        <div class="item d-flex pb-30 align-items-center mb-30 bord-thin-bottom">
                                             <div class="title">
                                                <h6>Annual Capacity</h6>
                                                <p class="fz-12">Black Bear manufactures up to 400,000 pieces yearly in all categories.</p>
                                            </div>
                                            <div class="date ml-auto text-right">
                                                <p class="fz-12"> 400k Pcs / Year</p>
                                            </div>
                                        </div>
                                        <div class="item d-flex pb-30 align-items-center bord-thin-bottom">
                                            <div class="title">
                                                <h6>Export Operations Started</h6>
                                                <p class="fz-12">Official global exports launched under the Black Bear name.</p>
                                            </div>
                                            <div class="date ml-auto text-right">
                                                <p class="fz-12">2012 – Present</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ==================== End skills ==================== -->


                    <!-- ==================== Start Parallex ==================== -->
                    <div class="back-image bg-img parallaxie"
                        data-background="{{ asset('assets/frontend/images/parallax.jpg') }}" data-overlay-dark="5">
                    </div>
                    <!-- ==================== End Parallex ==================== -->


                    <!-- ==================== Start Catalouges ==================== -->
                    <section class="portfolio clasic section-padding" data-scroll-index="3">
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
                                                        <svg width="18" height="18" viewBox="0 0 18 18"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                    <img src="{{ asset('uploads/catalogues/' . $cata->image) }}"
                                                        alt="" class="radius-10">
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


                    <!-- ==================== Start Blog ==================== -->
                    <section class="blog-list-half crev section-padding sub-bg" data-scroll-index="6">
                        <div class="container">
                            <div class="sec-lg-head mb-80">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h6 class="dot-titl-non mb-10 wow fadeIn">Our Blog</h6>
                                        <h2 class="fz-50 d-rotate wow">
                                            <span class="rotate-text">Latest Blogs</span>
                                        </h2>
                                    </div>
                                    <div class="col-lg-5 d-flex align-items-center">
                                        <div class="full-width d-flex justify-content-end justify-end">
                                            <div class="vew-all">
                                                <a href="{{ route('blog.show') }}">View All Our Blogs
                                                    <span>
                                                        <svg width="18" height="18" viewBox="0 0 18 18"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                @foreach ($blog as $blog)
                                    <div class="col-lg-6">
                                        <div class="item md-mb80 wow fadeIn" data-wow-delay=".4s">
                                            <div class="row rest">
                                                <div class="col-md-6">
                                                    <div class="img">
                                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                                            alt="{{ $blog->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 valign">
                                                    <div class="cont">
                                                        <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6,
                                                            2022</span>
                                                        <h5>
                                                            <a
                                                                href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->name }}</a>
                                                        </h5>
                                                        <div class="tags colorbg mt-15">
                                                            <a href="{{ route('blog.detail', $blog->slug) }}">Blog</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                    <!-- ==================== End Blog ==================== -->


            </div>




            </main>



            <!-- ==================== Start Footer ==================== -->

            @include('frontend.layout.footer')

            <!-- ==================== End Footer ==================== -->




        </div>
    </div>

    @push('scripts')
        <!-- jQuery -->
        <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>


        <!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollSmoother.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/frontend/js/smoother-script.js') }}"></script> --}}
        <script src="{{ asset('assets/frontend/js/parallax.min.js') }}"></script>
    @endpush
@endsection
