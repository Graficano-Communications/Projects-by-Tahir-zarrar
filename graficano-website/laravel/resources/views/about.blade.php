@extends('layouts.master')

@section('meta_title', 'Creative writing | Digital agency')
@section('meta_description',
    'Here are the clients we worked with serving the quality solutions functioning in a
    collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')
    <style>
        section {
            padding-top: 100px;
            padding-bottom: 10px;
            overflow: hidden;
        }
    </style>
    <!-- hero area start -->
    <div class="ar-hero-area p-relative include-bg" data-background="{{ asset('') }}">

        <div class="container container-1230">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                            <h3 class="ar-about-us-4-title">THINK OF US AS YOUR CREATIVE SUPERHERO </h3>
                            <div class="ar-about-us-4-title-box ">
                                <p>Our years of experience and creativity blend with the latest tech to make your brand
                                    stand out. We love pushing limits because we believe in bringing a bright future to your
                                    business.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">

                        <img src="{{ asset('assets/img/front-images/graficano-superhero.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->
    <!-- about us 4 area start -->
    <section class="ar-about-us-4-text-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ar-about-us-4-text-warp">
                        <div class="swiper-container tp-brand-active">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">
                                        About Us
                                    </h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">
                                        About Us
                                    </h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">
                                        About Us
                                    </h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">
                                        About Us
                                    </h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">
                                        About Us
                                    </h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="ar-about-us-4-text-title">
                                        About Us
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us 4 area end -->

    <!-- about area start -->
    <div class="tp-about-area pt-140 pb-140 tp-bounce-trigger" data-bg-color="#1A1B1E">
        <div class="container">
            <div class="tp-about-box p-relative">
                <div class="tp-about-shape-1 tp-bounce d-none d-md-block">
                    <img src="{{ asset('assets/img/home-01/about/about-shape-1.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="tp-about-title-box">
                            <span class="tp-section-subtitle pre tp_fade_anim">WHO WE ARE</span>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tp-about-wrap">
                            <div class="tp-about-text tp_fade_anim">
                                <p>
                                    We are an independent design and branding studio founded in 2010. We focus on building
                                    strong brand identities through clear strategy, practical experience, and long term
                                    collaboration with our clients.
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-xl-5 col-lg-4 col-md-5">
                                    <div class="tp-about-thumb">
                                        <img data-speed=".8"
                                            src="{{ asset('assets/img/front-images/graficano-about-us.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-8 col-md-7">
                                    <div class="tp-about-funcact-wrap">
                                        <div class="tp-about-avater-info">
                                            <img class="tp_fade_anim" data-delay=".3" data-fade-from="right"
                                                src="{{ asset('assets/img/front-images/grf-about-sect-2.png') }}"
                                                alt="">
                                            <div class="tp_text_anim">
                                                <p>Empowering brands with creative, affordable solutions <br> that drive growth and lasting success.</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="tp-about-funcact-item tp_fade_anim mb-30" data-delay=".3">
                                                    <span><i data-purecounter-duration="1" data-purecounter-end="98"
                                                            class="purecounter">0</i>%</span>
                                                    <p>Client satisfaction and repeat <br> partnerships</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="tp-about-funcact-item tp_fade_anim mb-30" data-delay=".5">
                                                    <span><i data-purecounter-duration="1" data-purecounter-end="4500"
                                                            class="purecounter">0</i>+</span>
                                                    <p>Projects completed for brands across global markets</p>
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
        </div>
    </div>
    <!-- about area end -->



    <!-- work area start -->
    <div class="tp-work-area pt-120 pb-145 tp-panel-pin-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-work-title-box tp-panel-pin">
                        <span class="tp-section-subtitle pre mb-20">Work Flow</span>
                        <h2 class="tp-section-title fs-140">Our <br> design thinking process</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-work-wrapper">
                        <div class="tp-work-item tp-panel-pin mb-15">
                            <div class="tp-work-number p-relative">
                                <span></span>
                                <i>01</i>
                            </div>
                            <div class="tp-work-content">
                                <h4 class="tp-work-title">Pitch</h4>
                                <p style="text-align: justify">At Graficano Communications, we believe in powerful
                                    connections. We research your target audience and define your unique selling
                                    proposition. Our expert team tailors each pitch to fit your needs and showcases past
                                    successful campaigns. With deep expertise and experience, we craft compelling messages
                                    that convert. We also follow up and maintain strong relationships for smooth
                                    collaboration.</p>
                            </div>
                        </div>
                        <div class="tp-work-item tp-panel-pin mb-15">
                            <div class="tp-work-number p-relative">
                                <span></span>
                                <i>02</i>
                            </div>
                            <div class="tp-work-content">
                                <h4 class="tp-work-title">Present</h4>
                                <p style="text-align: justify">Our presentations are designed to engage and inform. We start
                                    by highlighting tailored strategies and showcasing our past successful campaigns. We
                                    emphasize our unique approach to achieving your goals and ensure you understand each
                                    step. By presenting our expertise and demonstrating our track record, we build trust and
                                    foster collaboration. This engaging and insightful presentation makes a compelling case
                                    for choosing Graficano Communications as your partner, ensuring you see the value we
                                    bring to your business.</p>
                            </div>
                        </div>
                        <div class="tp-work-item tp-panel-pin mb-15">
                            <div class="tp-work-number p-relative">
                                <span></span>
                                <i>03</i>
                            </div>
                            <div class="tp-work-content">
                                <h4 class="tp-work-title">Assessment</h4>
                                <p style="text-align: justify">After our presentation, we conduct a thorough assessment to
                                    fine-tune our strategies based on your needs and feedback. This step is crucial for
                                    aligning our approach with your objectives. We value your input, using it to tailor our
                                    methods for maximum impact. Our team reviews all aspects of the project, identifying
                                    areas for improvement and ensuring every detail is optimized. This detailed assessment
                                    process ensures our solutions are perfectly aligned with your goals.</p>
                            </div>
                        </div>
                        <div class="tp-work-item tp-panel-pin mb-15">
                            <div class="tp-work-number p-relative">
                                <span></span>
                                <i>04</i>
                            </div>
                            <div class="tp-work-content">
                                <h4 class="tp-work-title">Design & Development</h4>
                                <p style="text-align: justify">In the design and development phase, we bring your vision to
                                    life with creativity and precision. Our skilled team crafts customized solutions that
                                    resonate with your target audience. We focus on innovation, quality, and alignment with
                                    your objectives. By collaborating closely with you, we ensure that every detail meets
                                    your expectations. Our design and development process is thorough and meticulous,
                                    ensuring that the final product is both impactful and effective, setting the stage for
                                    successful implementation.</p>
                            </div>
                        </div>
                        <div class="tp-work-item tp-panel-pin mb-15">
                            <div class="tp-work-number p-relative">
                                <span></span>
                                <i>05</i>
                            </div>
                            <div class="tp-work-content">
                                <h4 class="tp-work-title">Launch</h4>
                                <p style="text-align: justify">During the launch, we execute our plan with precision,
                                    ensuring all elements come together seamlessly. Our team monitors performance in
                                    real-time, making necessary adjustments to optimize results. We aim for a strong start,
                                    leveraging our strategies to create immediate impact. The launch phase is crucial for
                                    setting the stage for ongoing success, ensuring our campaign delivers the desired
                                    outcomes and drives significant results for your business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work area end -->



    <!-- award area start -->

    <div class="tp-award-area tp-award-bg " >
        <div class="container container-1320">
            <div class="row">
                <div class="studio-project-top-wrap mb-70">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2">
                            <div class="studio-project-subtitle-box">
                                <h3 class="tp-section-subtitle-clash color-red mb-0">
                                    Our <br> Achievement
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
                                    <div class="col-xl-11 col-lg-11">
                                        <div class="studio-project-title-box">
                                            <h3 class="tp-section-title-clash mb-0 tp-text-revel-anim">OUR Awards</h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1">
                                        {{-- <div class="studio-project-btn text-start text-lg-end">
                                            <a class="tp-btn-red-border" href="portfolio-col-3.html">Explore work</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-1230">
            <div class="row">

                <div class="tp-award-item-wrap p-relative">
                    <div class="tp-award-item hover-reveal-item p-relative mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="tp-award-box-left z-index-3">
                                    <span class="tp-award-year">2018</span>
                                    <span class="tp-award-text">Pakistan Design Expo</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                    <span class="tp-award-position">Sponser</span>
                                    <span class="tp-award-icon">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tp-award-reveal-img"
                            data-background="{{ asset('assets/images/team/gallery-13.webp') }}"></div>
                    </div>
                </div>
                <div class="tp-award-item-wrap p-relative">
                    <div class="tp-award-item hover-reveal-item p-relative mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="tp-award-box-left z-index-3">
                                    <span class="tp-award-year">2019</span>
                                    <span class="tp-award-text">Lettering with Cemma O'Brien</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                    <span class="tp-award-position">Winner</span>
                                    <span class="tp-award-icon">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tp-award-reveal-img"
                            data-background="{{ asset('assets/images/team/gallery-14.webp') }}"></div>
                    </div>
                </div>
                <div class="tp-award-item-wrap p-relative">
                    <div class="tp-award-item hover-reveal-item p-relative mb-5">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="tp-award-box-left z-index-3">
                                    <span class="tp-award-year">2020</span>
                                    <span class="tp-award-text">Digital Sialkot Event</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div
                                    class="tp-award-box-right z-index-3 d-flex justify-content-between align-items-center">
                                    <span class="tp-award-position">Speaker</span>
                                    <span class="tp-award-icon">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tp-award-reveal-img"
                            data-background="{{ asset('assets/images/team/gallery-15.webp') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- award area end -->







@endsection
