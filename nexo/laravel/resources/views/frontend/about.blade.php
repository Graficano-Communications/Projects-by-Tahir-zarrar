@extends('frontend.layout.master')
@section('title', 'Core Star Sports')
@section('main-container')


    <!-- Start Breadcrumb
                    ============================================= -->
    <div class="breadcrumb-area text-center" style="background-image: url(assets/img/shape/10.jpg);">
        <div class="light-banner-active bg-gray bg-cover" style="background-image: url(assets/img/shape/6.jpg);"></div>
        <div class="container">
            <div class="breadcrumb-item">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>About Company</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
                    ============================================= -->
    <div class="about-style-four-area default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="about-style-four-thumb">
                        <img src="{{ asset('assets/frontend/img/about/1.jpg') }}" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-style-four-info">
                        <div class="content">
                            <p class="split-text">
                                Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts
                                by garret. Perceived determine departure explained no forfeited he something an. Contrasted
                                dissimilar get joy you instrument out reasonably. Again keeps at no meant stuff.
                            </p>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="progress-style-two">
                                <!-- Progress Bar Start -->
                                <div class="progress-box">
                                    <h5>Creative Development</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="88">
                                            <span>88%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Branding Solution</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="95">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Design & Development</h5>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" data-width="80">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Progressbar -->
                            </div>
                            <div class="thumb upDownScrolSlow">
                                <img src="{{ asset('assets/frontend/img/about/4.jpg') }}" alt="Image Not Found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Fun Factor
                    ============================================= -->
    <div class="fun-factor-circle-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-fact-circle-lists">
                        <!-- Single item -->
                        <div class="fun-fact wow fadeInDown">
                            <div class="counter">
                                <div class="timer">360</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">World Customer</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact wow fadeInUp" data-wow-duration="0.5s">
                            <div class="counter">
                                <div class="timer">98</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Positive Rating</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact wow fadeInDown">
                            <div class="counter">
                                <div class="timer">874</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Total Branch</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact wow fadeInUp" data-wow-duration="0.5s">
                            <div class="counter">
                                <div class="timer">35</div>
                            </div>
                            <span class="medium">Years experience</span>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->

    <!-- Start Team
                    ============================================= -->
    <div class="team-style-one-area relative overflow-hidden default-padding-bottom bg-gray">
        <div class="team-style-one-heading">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 text-center">
                        <div class="site-heading">
                            <h4 class="sub-title">Team members</h4>
                            <h2 class="title split-text">Turn Information Into Actionable Insights</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-style-one-items">
                <div class="row">
                    <div class="col-xl-4">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                                    type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                    <strong>Our Mission</strong>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2"
                                    type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                    <strong>Our Vision</strong>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3"
                                    type="button" role="tab" aria-controls="tab3" aria-selected="false">
                                    <strong>Our Values</strong>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-7 offset-xl-1">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                aria-labelledby="tab1-tab">
                                <div class="info">
                                    <h2 class="title text">Our Mission</h2>
                                    <p class="text">
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as
                                        hearts by garret. Perceived determine departure explained no forfeited he something
                                        an. Contrasted dissimilar get joy you instrument out reasonably
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as
                                        hearts by garret. Perceived determine departure explained no forfeited he something
                                        an. Contrasted dissimilar get joy you instrument out reasonably
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <div class="info">
                                    <h2 class="title text">Our Vision</h2>
                                    <p class="text">
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as
                                        hearts by garret. Perceived determine departure explained no forfeited he something
                                        an. Contrasted dissimilar get joy you instrument out reasonably
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as
                                        hearts by garret. Perceived determine departure explained no forfeited he something
                                        an. Contrasted dissimilar get joy you instrument out reasonably
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <div class="info">
                                    <h2 class="title text">Our Values</h2>
                                    <p class="text">
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as
                                        hearts by garret. Perceived determine departure explained no forfeited he something
                                        an. Contrasted dissimilar get joy you instrument out reasonably
                                        Give lady of they such they sure it. Me contained explained my education. Vulgar as
                                        hearts by garret. Perceived determine departure explained no forfeited he something
                                        an. Contrasted dissimilar get joy you instrument out reasonably
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team -->

    <!-- Start Team Area
            ============================================= -->
    <div class="team-style-three-area default-padding bottom-less">
        <div class="container">
            <div class="site-heading">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <h4 class="sub-title">Team member</h4>
                        <h2 class="title split-text">Meet our experts</h2>
                    </div>
                    <div class="col-lg-6 text-end">
                        <a href="services.html" class="btn-circle">
                            <div class="button-content">
                                <span><img src="assets/img/icon/arrow-long-right.png" alt="Image Not Found"></span>
                                <strong>All Members</strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-one-item">
                        <div class="thumb">
                            <img src="assets/img/team/1.jpg" alt="Image Not Found">
                            <div class="social-overlay">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <h4><a href="team-details.html">James Baker</a></h4>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-one-item">
                        <div class="thumb">
                            <img src="assets/img/team/1.jpg" alt="Image Not Found">
                            <div class="social-overlay">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <h4><a href="team-details.html">James Baker</a></h4>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-one-item">
                        <div class="thumb">
                            <img src="assets/img/team/1.jpg" alt="Image Not Found">
                            <div class="social-overlay">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <h4><a href="team-details.html">James Baker</a></h4>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-one-item">
                        <div class="thumb">
                            <img src="assets/img/team/1.jpg" alt="Image Not Found">
                            <div class="social-overlay">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                </ul>
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <h4><a href="team-details.html">James Baker</a></h4>
                            <span>CEO & Founder</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
            </div>
        </div>
    </div>
    <!-- End Team Area -->

     <!-- Start Partner Area 
        ============================================= -->
        <div class="partner-style-two-area default-padding overflow-hidden blurry-shape-right">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="brand-style-two-items">
                          
                            <div class="brand-two-carousel swiper mt-60">
                            <div class="swiper-wrapper">
                                    
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp1.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp2.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp3.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                    <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp4.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                     <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp5.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                     <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp6.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                     <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp7.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                     <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp8.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                     <!-- Single Item -->
                                    <div class="swiper-slide">
                                          <img width="180px" height="180px" src="{{ asset('assets/frontend/img/front/nexocomp9.png') }}" alt="Image Not Found">
                                    </div>
                                    <!-- End Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner -->



@endsection
