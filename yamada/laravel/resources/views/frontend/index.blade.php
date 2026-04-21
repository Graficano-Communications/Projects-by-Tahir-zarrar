@extends('frontend.layout.master')
@section('title', 'Yamada - Home')
@section('main-container')
    <style>
        .widget-tab-3 .nav-tab-item a {
            display: flex;
            justify-content: center;
            width: 100%;
            font-size: 25px;
            line-height: 38.4px;
            font-weight: 400;
            white-space: nowrap;
            padding-bottom: 12px;
            border-bottom: 2px solid transparent;
            -webkit-transition: all 0.3sease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3sease;
            color: var(--text);
        }

        .widget-tab-3 .nav-tab-item a.active {
            font-weight: 500;
            border-bottom-color: #B80000;
            color: #B80000;
        }

        .widget-card-store.type-1 .store-item-info {
            background: linear-gradient(135deg, #B80000, #660000);
        }

        .sub-heading {
            color: #B80000;
        }

        .btn-fill {
            background: linear-gradient(135deg, #B80000, #660000);
            border: 1px solid #B80000;
            color: var(--white);
        }

        .blog-article-item .article-label a {
            background: linear-gradient(135deg, #B80000, #660000);
            color: #ffffff;
            font-size: 10px;
            font-weight: 700;
            line-height: 12px;
            padding: 0 16px;
            height: 31px;
            border-color: #B80000;
        }

        .widget-card-store .description p {
            font-size: 16px;
            line-height: 22.4px;
            color: #ffffff;
        }
        .bg_yamada{
            background: linear-gradient(135deg, #B80000, #660000);
        }
        h1 {
            font-size: 60px;
            line-height: 70px;
        }
    </style>
    <!-- Slider -->
    <div class="tf-slideshow slider-home-2 slider-effect-fade position-relative">
        <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false"
            data-space="0" data-loop="true" data-auto-play="true" data-delay="2000" data-speed="1000">
            <div class="swiper-wrapper">
                @foreach ($banners as $banner)
                    <div class="swiper-slide" lazy="true">
                        <div class="wrap-slider">
                            <img class="lazyload" data-src="{{ asset('uploads/banners/' . $banner->image) }}"
                                src="{{ asset('uploads/banners/' . $banner->image) }}" alt="fashion-slideshow-01">
                            <div class="box-content">
                                <div class="container">
                                    <h1 class="fade-item fade-item-1 text-white">{{ $banner->caption }}</h1>
                                    <p class="fade-item fade-item-2 text-white">{{ $banner->description }}</p>
                                    {{-- <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="wrap-pagination sw-absolute-2">
            <div class="container">
                <div class="sw-dots sw-pagination-slider"></div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <section class="flat-spacing-27">
        <div class="container">
            <div class="tf-grid-layout md-col-2 tf-img-with-text style-5">
                <div class="tf-image-wrap wow fadeInUp" data-wow-delay="0s">
                    <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/about-us-home.jpg') }}"
                        src="{{ asset('assets/frontend/images/front-images/about-us-home.jpg') }}" alt="collection-img">
                </div>
                <div class="tf-content-wrap wow fadeInUp" data-wow-delay="0s">
                    <div class="sub-heading fw-7">About Us</div>
                    <div class="heading ">Embark the journey of
                        reliable tools with us</div>
                    <p class="description text_black-2 fs-14" style="text-align: justify;">Yamada is a trusted provider of premium orthodontic, dental, and surgical instruments, dedicated to enhancing professional efficiency and patient care. With a strong focus on precision, our expert team meticulously designs and tests each tool to meet the highest industry standards. Our products are MDR, FDA, ISO 9001, and ISO 13485 certified, ensuring compliance and reliability in every instrument. We take pride in delivering durable, ergonomic, and high-performance solutions that professionals can rely on. At Yamada, our mission is to support healthcare practitioners worldwide by providing tools that enhance treatment accuracy and improve patient outcomes.</p>
                    <a href="{{ route('about') }}"
                        class="tf-btn style-2 btn-fill btn-icon rounded-full animate-hover-btn">View More <i
                            class="icon icon-arrow1-top-left"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Us -->

    <!-- Text Slide -->
    <div class="tf-marquee marquee-xl">
        <div class="wrap-marquee">
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Orthodontic</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Dental Surgery</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Orthodontic</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Dental Surgery</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Orthodontic</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Dental Surgery</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Orthodontic</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Dental Surgery</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Orthodontic</p>
            </div>
            <div class="marquee-item">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                        fill="none">
                        <path
                            d="M14 2C14 0.9 14.9 0 16 0H34C35.1 0 36 0.9 36 2V14H48C49.1 14 50 14.9 50 16V34C50 35.1 49.1 36 48 36H36V48C36 49.1 35.1 50 34 50H16C14.9 50 14 49.1 14 48V36H2C0.9 36 0 35.1 0 34V16C0 14.9 0.9 14 2 14H14V2Z"
                            fill="#B80000" />
                    </svg>

                </div>
                <p class="text">Dental Surgery</p>
            </div>

        </div>
    </div>
    <!-- /Text Slide -->

    <!-- Category -->
    <section class="flat-spacing-15 bg_beige-3 flat-control-sw">
        <div class="container pb-5 text-center">
            <p class="sub-heading text-center">Categories</p>
            <h3 class="heading">Our Categories</h3>

        </div>
        <div class="container-full">
            <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="3" data-mobile="1.3"
                data-space-lg="30" data-space-md="15" data-space="30" data-pagination="1" data-pagination-md="1"
                data-pagination-lg="1" data-autoplay="true">
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v2 hover-img">
                                <a href="{{ route('product.show', ['categorySlug' => $category->slug]) }}"
                                    class="collection-inner">
                                    <div class="collection-image img-style">
                                        <img class="lazyload"
                                            data-src="{{ asset('uploads/categories/' . $category->image) }}"
                                            src="{{ asset('uploads/categories/' . $category->image) }}"
                                            alt="collection-img">
                                    </div>
                                    <div class="collection-content justify-content-end">
                                        <div class="bottom wow fadeInUp" data-wow-delay="0s">
                                            <h5 class="heading text-white">{{ $category->name }}</h5>
                                            <button
                                                class="tf-btn btn-line btn-line-light collection-other-link fw-6"><span>View
                                                    Products</span><i class="icon icon-arrow1-top-left"></i></button>
                                        </div>
                                    </div>
                                </a>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category -->

    <!-- Catalouges -->
    <section class="flat-spacing-5 pt_0">
        <div class="container py-5 text-center">
            <p class="sub-heading text-center">Catalogues</p>
            <h3 class="heading">Our Catalogues</h3>
        </div>
        <div class="container">
            <div
                class="wrapper-thumbs-testimonial-v2 flat-thumbs-testimonial flat-thumbs-testimonial-v2 testimonial-gaming-accessories">
                <img class="lazyload" data-src="{{ asset('assets/frontend/images/front-images/cat-bg.jpg') }}"
                    src="{{ asset('assets/frontend/images/front-images/cat-bg.jpg') }}" alt="image-product">
                <div class="box-left">
                    <div dir="ltr" class="swiper tf-sw-tes-2" data-preview="1" data-space-lg="40"
                        data-space-md="30">
                        <p class="sub-heading ">Catalogues</p>
                        <h3 class="heading text-white">Our Catalogues</h3>
                        <div class="swiper-wrapper">
                            @foreach ($catalogues as $catalogue)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <p class="text text-white">
                                            {{ $catalogue->name }}
                                        </p>
                                        <div class="author box-author">
                                            <div class="content">
                                                <div class="name text-white fw-6 py-2"> Click below to view the catalogue.
                                                </div>
                                                <a href="{{ route('catalouges') }}"
                                                    class="tf-btn style-2 btn-fill btn-icon animate-hover-btn"><span>View
                                                        Catalogues</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="d-md-flex d-none box-sw-navigation">
                        <div class="nav-sw nav-next-slider line-white nav-next-tes-2"><span
                                class="icon icon-arrow-left"></span></div>
                        <div class="nav-sw nav-prev-slider line-white nav-prev-tes-2"><span
                                class="icon icon-arrow-right"></span></div>
                    </div> --}}
                    <div class="d-md-none sw-dots style-2 dots-white sw-pagination-tes-2"></div>
                </div>
                <div class="box-right">
                    <div dir="ltr" class="swiper tf-thumb-tes" data-preview="1" data-space="30">
                        <div class="swiper-wrapper">
                            @foreach ($catalogues as $catalogue)
                                <div class="swiper-slide">
                                    <div class="box-img item-2 hover-img radius-10 o-hidden ">
                                        <div class="img-style">
                                            <img class="lazyload shadow-lg"
                                                data-src="{{ asset('uploads/catalogues/' . $catalogue->image) }}"
                                                src="{{ asset('uploads/catalogues/' . $catalogue->image) }}"
                                                alt="Catalogue Image">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-md-flex d-none box-sw-navigation justify-content-center align-items-center mt-3">
                        <div class="nav-sw nav-next-slider line-white nav-next-tes-2"><span
                                class="icon icon-arrow-left"></span></div>
                        <div class="nav-sw nav-prev-slider line-white nav-prev-tes-2"><span
                                class="icon icon-arrow-right"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Catalouges -->


    <!-- Process -->
    <section class="">
        <div class="container py-5 text-center">
            <a  class="card-box text-md-start text-center rounded-0">
                <p class="sub-heading text-center">Our Process</p>
                <h3 class="heading">Our Working Processes</h3>
            </a>
        </div>
        <div class="container">
            <div class="flat-tab-store flat-animate-tab overflow-unset">
                <ul class="widget-tab-3 d-flex justify-content-center flex-wrap" role="tablist">
                    @foreach ($processSteps as $index => $step)
                        <li class="nav-tab-item" role="presentation">
                            <a href="#tab-{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"
                                data-bs-toggle="tab">
                                {{ $step->caption }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content">
                    @foreach ($processSteps as $index => $step)
                        <div class="tab-pane {{ $index == 0 ? 'active show' : '' }}" id="tab-{{ $index }}"
                            role="tabpanel">
                            <div
                                class="widget-card-store radius-20 overflow-hidden type-1 align-items-center tf-grid-layout md-col-2">
                                <div class="store-img">
                                    <img class="lazyload" data-src="{{ asset('uploads/process-steps/' . $step->image) }}"
                                        src="{{ asset('uploads/process-steps/' . $step->image) }}">
                                </div>
                                <div class="store-item-info text-center">
                                    <h5 class="store-heading text-white">{{ $step->caption }}</h5>
                                    <div class="description">
                                        <p class="text-white">{{ $step->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- /Store -->


    <!-- Brand -->
    <section class="flat-spacing-12 pt-0">
        <div class="wrap-carousel wrap-brand wrap-brand-v2 autoplay-linear">
            <div dir="ltr" class="swiper tf-sw-brand border-0" data-play="true" data-loop="true" data-preview="6"
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

    <!-- Categories -->
    <section class="flat-spacing-9 bg_yamada flat-bg-collection">
        <div class="container">
            <div class="flat-title gap-12">
                <span class="title text-white wow fadeInUp" data-wow-delay="0s">Our Healthcare</span>
                <p class="sub-title text_white wow fadeInUp" data-wow-delay="0s">Are you ready to get precision or durability, customized tools?</p>
            </div>
            <div dir="ltr" class="swiper tf-sw-collection sw-auto wow fadeInUp" data-wow-delay="0s" data-preview="auto" data-tablet="auto" data-mobile="auto" data-space-lg="10" data-space-md="10" data-space="10" data-loop="false" data-auto-play="false">
                <div class="swiper-wrapper justify-content-md-center">
                        <div class="swiper-slide">
                            <a  class="collection-title-v2">
                                ORTHODONTICS
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a  class="collection-title-v2">
                                DENTAL
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a  class="collection-title-v2">
                                MAXIOFACIAL SURGERY
                            </a>
                        </div>
                </div>
                <div class="sw-dots dots-white sw-pagination-collection justify-content-center"></div>
            </div>
            <div class="d-flex justify-content-center wow fadeInUp" data-wow-delay="0s">
                <a href="{{ route('contact') }}" title="all collection" class="tf-btn style-2 btn-fill btn-icon rounded-full animate-hover-btn mt-3">Contact Us<i class="icon icon-arrow1-top-left"></i></a>
            </div>
        </div>
    </section>
    <!-- /Categories -->

    <!-- blog-grid-main -->
    <div class="blog-grid-main">
        <div class="container py-5 text-center">
            <a  class="card-box text-md-start text-center rounded-0">
                <p class="sub-heading text-center">Our Blogs</p>
                <h3 class="heading">Our Blogs</h3>
            </a>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="blog-article-item">
                            <div class="article-thumb">
                                <a href="{{ route('blog.detail', $blog->id) }}">
                                    <img class="lazyload" data-src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                        src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="img-blog">
                                </a>
                                <div class="article-label">
                                    <a href="{{ route('blog.detail', $blog->id) }}"
                                        class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">Blogs</a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="{{ route('blog.detail', $blog->id) }}"
                                        class="">{{ $blog->name }}</a>
                                </div>
                                <div class="article-btn">
                                    <a href="{{ route('blog.detail', $blog->id) }}" class="tf-btn btn-line fw-6">Read
                                        more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
