@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')


@section('main-container')
    <style>



    </style>

<!-- Hero Section Start -->
@if($banners)
<div class="hero parallaxie"
     style="background: url('{{ asset('uploads/banners/' . $banners->image) }}') no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">welcome our Emerald Instruments</h3>
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            {{ $banners->caption }}
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            {{ $banners->description }}
                        </p>
                    </div>

                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="contact.html" class="btn-default">
                            <span>explore more</span>
                        </a>
                    </div>
                </div>
                <!-- Hero Content End -->
            </div>

            <div class="col-lg-12">
                <div class="excellence-innovating-list wow fadeInUp" data-wow-delay="0.6s">
                    <ul>
                        <li>Advanced Manufacturing Solutions</li>
                        <li>Quality Assurance Systems</li>
                        <li>State-of-the-Art Technology</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Hero Section End -->




    {{-- <div class="main-box main-bg ontop">

        <!-- Hero Section  -->
        <div class="hero hero-slider-layout  ">
            <div class="swiper">
                <div class="swiper-wrapper ">
                    <!-- Hero Slide  -->
                    @foreach ($banners as $banner)
                        <div class="swiper-slide">
                            <div class="hero-slide ">
                                <!-- Slider Image  -->
                                <div class="hero-slider-image  ">
                                    <img src="{{ asset('uploads/banners/' . $banner->image) }}" alt="">
                                </div>
                                <!-- Slider Image -->

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <!-- Hero Content  -->
                                            <div class="hero-content">
                                                <!-- Section Title  -->
                                                <div class="section-title dark-section">
                                                    <h3 class="wow fadeInUp">welcome our Emerald Instruments</h3>
                                                    <h1 class="text-anime-style-2" data-cursor="-opaque">
                                                        {{ $banner->caption }}</h1>
                                                    <p class="wow fadeInUp" data-wow-delay="0.25s">
                                                        {{ $banner->description }}</p>
                                                </div>
                                                <!-- Section Title -->

                                                <!-- Hero Button  -->
                                                <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                                                    <a href="{{ route('contact') }}" class="btn-default"><span>explore
                                                            more</span></a>
                                                </div>
                                                <!-- Hero Button -->
                                            </div>
                                            <!-- Hero Content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Hero Slide -->
                </div>
                <div class="hero-pagination"></div>
            </div>
        </div>
        <!-- Hero Section -->
    </div> --}}

    <!-- Our Category Section  -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title  -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">WHAT WE MANUFACTURE</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Discover <span> our Products </span>
                        </h2>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Agency Support Slider  -->
                    <div class="testimonial-company-slider2 position-relative">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($category as $cat)
                                    <div class="swiper-slide">
                                        <div>
                                            <a href="{{ route('products', $cat->slug) }}">
                                                <img class="rounded-5" width="500" height="500"
                                                    src="{{ asset('uploads/categories/' . $cat->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="text-center py-3">
                                            <a href="{{ route('products', $cat->slug) }}">
                                                <h3>{{ $cat->name }}</h3>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="company-button-prev">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="company-button-next">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>


                    <!-- Agency Support Slider -->
                </div>

            </div>
        </div>
    </div>
    <!-- Our Category Section -->



    <!-- Our Service  -->
    <div class="our-services parallaxie">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title  -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">services</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Comprehensive solutions <span>for Medical Industry</span>
                        </h2>
                    </div>
                    <!-- Section Title -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content  -->
                    <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                        <p>
                            We invest in innovation, modern machinery, and skilled technicians to shape
                            next-generation tools.
                            Our mission is long-term partnership, growth, and superior performance.
                        </p>
                    </div>
                    <!-- Section Title Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service -->

    <!-- Our Service List  -->
    <div class="our-services-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Services List Box  -->
                    <div class="services-list-box">
                        <!-- Service Item  -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/frontend/images/emd-cnc.png') }}" alt="" />
                            </div>

                            <div class="service-body">
                                <h3>CNC Precision Manufacturing</h3>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item  -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/frontend/images/emd-private.png') }}" alt="" />
                            </div>

                            <div class="service-body">
                                <h3>OEM / Private Label Production</h3>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item  -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/frontend/images/emd-custom.png') }}" alt="" />
                            </div>

                            <div class="service-body">
                                <h3>Custom Instrument Development</h3>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item  -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/frontend/images/emd-doc.png') }}" alt="" />
                            </div>

                            <div class="service-body">
                                <h3> EU MDR Documentation Support</h3>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Service Item  -->
                        <div class="service-item">
                            <div class="icon-box">
                                <img src="{{ asset('assets/frontend/images/emd-globalshipping.png') }}" alt="" />
                            </div>

                            <div class="service-body">
                                <h3>Global Shipping & Logistics</h3>
                            </div>
                        </div>
                        <!-- Service Item -->
                        <!-- Services List Box -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Our Service List -->

    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title  -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our Certifications</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Our Verified <span>Certificates</span>
                        </h2>
                    </div>
                    <!-- Section Title -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content  -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>
                            Our certifications reflect our commitment to meeting international standards, ensuring quality,
                            compliance, and excellence across every project we deliver.
                        </p>
                    </div>
                    <!-- Section Title Content -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Agency Support Slider  -->
                    <div class="testimonial-company-slider mt-0">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img height="160px" src="{{ asset('assets/frontend/images/comp-emd-1.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->

                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img height="160px" src="{{ asset('assets/frontend/images/comp-emd-2.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->

                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img height="160px" src="{{ asset('assets/frontend/images/comp-emd-3.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->

                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img height="160px" src="{{ asset('assets/frontend/images/comp-emd-4.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->
                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img height="160px" src="{{ asset('assets/frontend/images/comp-emd-5.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->
                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img height="160px" src="{{ asset('assets/frontend/images/comp-emd-6.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->
                            </div>
                        </div>
                    </div>
                    <!-- Agency Support Slider -->
                </div>
            </div>
        </div>
    </div>



    <!-- Our Work Section  -->
    <div class="our-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title  -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Facrory Tour</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Our successful <span>Departments</span>
                        </h2>
                    </div>
                    <!-- Section Title -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content  -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>
                            Our successful project initiatives showcase our commitment to
                            excellence and innovation across various industries.
                        </p>
                    </div>
                    <!-- Section Title Content -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Project Item Boxes  -->
                    <div class="row project-item-boxes align-items-center">

                        @foreach ($departments as $department)
                            <div class="col-md-6 project-item-box">
                                <!-- Project Item  -->
                                <div class="project-item wow fadeInUp">

                                    <!-- Image -->
                                    <div class="project-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('uploads/departments/' . explode(',', $department->image)[0]) }}"
                                                alt="{{ $department->name }}" />
                                        </figure>
                                    </div>

                                    <!-- Department Name + Link -->
                                    <div class="project-tag">
                                        <a href="{{ route('departments') }}">
                                            {{ $department->name }}
                                        </a>
                                    </div>

                                </div>
                                <!-- Project Item -->
                            </div>
                        @endforeach

                    </div>
                    <!-- Project Item Boxes -->
                </div>
            </div>

        </div>
    </div>
    <!-- Our Work Section -->


    <!-- Our History  -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image  -->
                    <div class="about-image">
                        <!-- About Image  -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/frontend/images/emd-manf-2.jpg') }}" alt="" />
                            </figure>
                        </div>
                        <!-- About Image -->

                        <!-- About Image  -->
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('assets/frontend/images/emd-manf-1.jpg') }}" alt="" />
                            </figure>
                        </div>
                        <!-- About Image -->

                        <!-- Company Experience  -->
                        <div class="company-experience">
                            <div class="company-experience-counter">
                                <h2><span class="counter">45</span>+</h2>
                            </div>
                            <div class="company-experience-content">
                                <p>years of experience</p>
                            </div>
                        </div>
                        <!-- Company Experience -->
                    </div>
                    <!-- About Us Image -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content  -->
                    <div class="about-content">
                        <!-- Section Title  -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">What we are</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">
                                Leading the Future of <span>Medical Instrumentation</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">
                                Emerald Instruments delivers dependable industrial instrumentation solutions built on
                                engineering precision and operational reliability. We specialize in supplying and supporting
                                products that meet strict industrial standards, ensuring accuracy, consistency, and
                                long-term performance across critical applications. Our strength lies in technical
                                competence, controlled processes, and a clear understanding of industry specific
                                requirements.
                            </p>
                        </div>
                        <!-- Section Title -->

                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- About List Btn Box  -->
                                    <div class="about-list-btn">
                                        <!-- About Content List  -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li>Industry Expertise – Practical experience in industrial instrumentation
                                                    and control systems.</li>
                                                <li>High Precision – Engineered solutions designed for accuracy and
                                                    consistent performance.</li>
                                                <li>Quality Assurance – Strict quality checks to meet international
                                                    standards.</li>
                                                <li>Custom Solutions – Systems tailored to specific operational
                                                    requirements.</li>
                                                <li>Reliable Support – Ongoing technical assistance and after-sales service.
                                                </li>
                                                <li>Proven Trust – Trusted by industries for dependable and
                                                    long-term performance.</li>
                                            </ul>
                                        </div>
                                        <!-- About Content List -->

                                        <!-- About Content Btn  -->
                                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                            <a href="{{ route('about') }}" class="btn-default"><span>About Us</span></a>
                                        </div>
                                        <!-- About Content Btn -->
                                    </div>
                                    <!-- About List Btn Box -->
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- About Content -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->


    <!-- Our Blog Section  -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title  -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest blog</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">
                            Insights from our <span>latest blogs</span>
                        </h2>
                    </div>
                    <!-- Section Title -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content  -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>
                            Stay updated with the latest trends, innovations, and expert
                            insights in the manufacturing and industrial sectors
                        </p>
                    </div>
                    <!-- Section Title Content -->
                </div>
            </div>

            <div class="row">
                @foreach ($blog as $blogs)
                    <div class="col-md-6">
                        <!-- Post Item  -->
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image -->
                            <div class="post-featured-image">
                                <figure>
                                    <a href="{{ route('blog.detail', $blogs->slug) }}" class="image-anime"
                                        data-cursor-text="View">
                                        <img src="{{ asset('uploads/blogs/' . $blogs->image) }}" alt="" />
                                    </a>
                                </figure>
                            </div>
                            <!-- Post Featured Image -->

                            <!-- Post Item Body  -->
                            <div class="post-item-body">
                                <!-- Post Item Content  -->
                                <div class="post-item-content">
                                    <h2>
                                        <a href="{{ route('blog.detail', $blogs->slug) }}">{{ $blogs->name }}</a>
                                    </h2>
                                </div>
                                <!-- Post Item Content -->

                                <!-- Post Item Button  -->
                                <div class="post-item-btn">
                                    <a href="{{ route('blog.detail', $blogs->slug) }}"><img
                                            src="{{ asset('assets/frontend/images/arrow-white.svg') }}"
                                            alt="" /></a>
                                </div>
                                <!-- Post Item Button -->
                            </div>
                            <!-- Post Item Body -->
                        </div>
                        <!-- Post Item -->
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Our Blog Section -->

    <!-- Our Insta Section  -->
    <div class="container-fluid">
        <a href="https://www.instagram.com/emeraldinstruments/" target="_blank">
            <h2 class="text-center text-yellow"><i class="fab fa-instagram"></i> emeraldinstruments</h2>
        </a>
        <div class="row mt-4">
            <div class="col-md-2 col-sm-4 col-4 p-1">
                <div class="instagram-post"><a href="//www.instagram.com/graficano_/p/DILz0XeIjkU/" target="_blank"><img
                            width="250px" height="276px" src="{{ asset('assets/frontend/images/emd-insta-1.jpg') }}"
                            alt="Laser" loading="lazy"></a></div>
            </div>
        </div>
    </div>
    <!-- Our Insta Section  -->


@endsection
