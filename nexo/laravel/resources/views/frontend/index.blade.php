@extends('frontend.layout.master')
@section('title', 'Black Bear')
@section('main-container')

        <!-- Start Banner 
        ============================================= -->
        
        <div class="banner-style-eight-area bg-cover "  style="background-image: url('{{ asset('assets/frontend/img/front/nexo-banner.jpg') }}'); height: 100vh;">
            <div class="light-banner-active bg-gray bg-cover" style="background-image: url('{{ asset('assets/frontend/img/front/nexo-banner.jpg') }}');"></div>      
        </div>
        <!-- End Banner -->

        <!-- Start About 
        ============================================= -->
        <div class="about-style-six-area default-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="thumb-style-four">
                            <img src="{{ asset('assets/frontend/img/front/nexo-about-us.jpg') }}" alt="Image Not Found">
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-7">
                        <div class="about-style-six-info text-scroll-animation">
                            <div class="info">
                                <div class="d-flex">
                                    <a href="#"><img src="{{ asset('assets/frontend/img/icon/arrow.png') }}" alt="Image Not Found"></a>
                                    <h2 class="title text">Excellence in Every Ride</h2>
                                </div>
                                <p class="text">
                                    NEXO is a performance-driven manufacturer of premium motorcycle sports gear created for riders who demand safety, comfort, and style on every ride.

                                    We specialize in designing and producing high-quality racing equipment for both professional bikers and everyday riding enthusiasts. Our focus is to combine innovation, durability, and modern design to deliver products that perform in real riding conditions.

                                    From city roads to racing tracks, NEXO gear is built to protect, perform, and inspire confidence.
                                </p>
                                 <a class="btn-animation mt-30" href="{{ route('departments') }}"><i class="fas fa-arrow-right"></i> <span>See Details</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About -->

        <!-- Start Categories
        ============================================= -->
        <div class="banner-style-three-area overflow-hidden default-padding">
            <div class="service-style-one-heading">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 text-center">
                                <div class="site-heading">
                                    <h4 class="sub-title">Our Categories</h4>
                                    <h2 class="title split-text">Engineered Motorcycle Gear for Speed, Safety & Comfort</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="cursor-hover-parent">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div>
            <!-- Slider main container -->
            <div class="banner-slide-counter ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Single Item -->
                    @foreach ($category as $cat)
                    <div class="swiper-slide">
                        <div class="banner-style-three">
                            <a href="{{ route('products', $cat->slug) }}" class="cursor-target" >
                                <div class="thumb">
                                    <div class="bnner">
                                        <img src="{{ asset('uploads/categories/' . $cat->image) }}" alt="Image Not Found">
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="content-info">
                                        <span>Category</span>
                                        <h2>{{ $cat->name }}</h2>
                                        <!-- <div class="date">18 October, 2024</div> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->

                    

                </div>

                <!-- Pagination -->
                <div class="banner-slide-pagination"></div>

                <!-- Navigation -->
                <div class="banner-slide-button-prev"></div>
                <div class="banner-slide-button-next"></div>

            </div>        
        </div>
        <!-- End Main -->

        <!-- Start Animate Zoom BG 
        ============================================= -->
        <div class="zoom-video-area">
            <div class="video-container">
                <video muted loop autoplay src="{{ asset('assets/frontend/video/0302.mp4') }}"></video>
        
                <div class="video-items">
                    <div class="content">
                        <h2>Ride with <strong>Confidence <i class="fas fa-star-of-life"></i></strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Animate Zoom BG  -->

        <!-- Start Department 
        ============================================= -->
        <div class="project-style-one-area default-padding blurry-shape-left overflow-hidden">
            <div class="container">
                <div class="row align-center">
                    <!-- Single Item -->
                  <div class="col-lg-4 pr-50 pr-md-15 pr-xs-15">
                            <div class="portfolio-style-one-left-info">
                                <h4 class="sub-title">Our Departments</h4>
                                <p class="split-text">
                                    Our departments work together to design, develop, and manufacture high-performance motorcycle gear. From research and product design to manufacturing and quality control, every team at NEXO is dedicated to delivering safety, comfort, and innovation for riders worldwide.
                                </p>
                                <div class="portfolio-info-card">
                                    <h5>Driven by innovation, built for performance, trusted by riders.</h5>
                                </div>
                            </div>
                        </div>

                    <div class="col-lg-8">
                        <div class="portfolio-style-one-content">
                            <!-- Slider main container -->
                            <div class="portfolio-style-two-carousel swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">

                                    <!-- Single Item -->
                                    @foreach ($departments as $department)
                                    <div class="swiper-slide">
                                        <div class="portfolio-style-one-item">
                                            <img class="regular-img" src="{{ asset('uploads/departments/' . explode(',', $department->image)[0]) }}" alt="Image Not Found">
                                            <img class="light-img" src="{{ asset('uploads/departments/' . explode(',', $department->image)[0]) }}" alt="Image Not Found">
                                            <div class="info">
                                                <h2><a href="{{ route('departments') }}">{{ $department->name }}</a></h2>
                                                <a class="btn-animation mt-30" href="{{ route('departments') }}"><i class="fas fa-arrow-right"></i> <span>See Details</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End Single Item -->
                                    
                                </div>
                            </div>

                            <!-- Navigation -->
                            <div class="project-swiper-nav">

                                <!-- Pagination -->
                                <div class="project-pagination"></div>

                                <div class="project-button-prev"></div>
                                <div class="project-button-next"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Department -->

         

        <!-- Start Complainces 
        ============================================= -->
        <div class="clients-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 mb-md-50">
                        <div class="brand-info">
                           <h4 class="sub-title">Compliances</h4>
                            <h2 class="title split-text">Certified Quality & Safety Standards</h2>
                            <p class="split-text">
                                At NEXO, quality and rider safety are our top priorities. Our manufacturing processes follow international safety and quality standards to ensure every product delivers reliable protection, durability, and performance for real riding conditions.
                            </p>

                            <!-- <div class="clients-card mt-10">
                                <img src="assets/img/team/10.jpg" alt="Image Not Found">
                                <img src="assets/img/team/11.jpg" alt="Image Not Found">
                                <img src="assets/img/team/12.jpg" alt="Image Not Found">
                                <img src="assets/img/team/13.jpg" alt="Image Not Found">
                                <i class="fas fa-plus"></i>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-7 offset-xl-1 col-lg-7">
                        <div class="client-style-one-items">
                            <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp1.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp2.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp3.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp4.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp5.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp6.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp7.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                             <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp8.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                           <!-- Single Item -->
                            <div class="client-style-one-item">
                                <img src="{{ asset('assets/frontend/img/front/nexocomp9.png') }}" alt="Image Not Found">
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Complainces -->

        


        <!-- Start Blog 
        ============================================= -->

        <div class="blog-area home-blog blog-style-two-area bg-gray default-padding bottom-less">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h4 class="sub-title">Our Blogs</h4>
                            <h2 class="title">Latest blog posts </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Single Item -->
                    @foreach ($blog as $blogs)
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="home-blog-two">
                            <div class="thumb">
                                <a href="{{ route('blog.detail', $blogs->slug) }}"><img src="{{ asset('uploads/blogs/' . $blogs->image) }}" alt="Image Not Found"></a>
                                <div class="date">14 <strong>Sep</strong></div>
                            </div>
                            <div class="info">
                                <div class="content">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="{{ route('blog.detail', $blogs->slug) }}">Blogs</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('blog.detail', $blogs->slug) }}">{{ $blogs->name }}</a></h3>
                                    <a href="{{ route('blog.detail', $blogs->slug) }}" class="button-regular">
                                        Continue Reading <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                    
                </div>
            </div>
        </div>
        <!-- End Blog -->









@endsection
