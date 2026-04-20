@extends('frontend.layout.master')
@section('title', 'Black Bear')
@section('main-container')
<style>
    .sideimg-numbers .bg-blz {
  position: absolute;
  top: 0;
  right: 0;
  width: 45%;
  height: 100%;
  z-index: 2;
}
@media screen and (max-width: 992px) {
    .sideimg-numbers .bg-blz {
    position: static;
    width: 100%;
    height: 400px;
    margin-top: 50px;
  }
}
</style>

    <!-- ==================== Start Navbar ==================== -->

    @include('frontend.layout.header')

    <!-- ==================== End Navbar ==================== -->

    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding pb-0">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="caption">
                            <h6 class="sub-title">Who We Are ?</h6>
                            <h1 class="fz-55">We’re a manufacturing and export company in Pakistan.</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 offset-lg-4">
                        <div class="text mt-30">
                            <p>We help our clients succeed by producing high-quality casual wear, fitness gear, and boxing
                                products that combine style, comfort, and durability for active lifestyles worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-marq xlrg section-padding pb-0">
                <div class="slide-har st1">
                    <div class="box">
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                        <div class="item">
                            <h4>About Us</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start intro ==================== -->

        <section class="about section-padding main-bg">
            <div class="container ontop">
                <div class="row">
                    <div class="col-lg-5 valign">
                        <div class="about-circle-crev md-hide">
                            <div class="circle-button">
                                <div class="rotate-circle fz-16 ls1 text-u">
                                    <svg class="textcircle" viewBox="0 0 500 500">
                                        <defs>
                                            <path id="textcircle" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                            </path>
                                        </defs>
                                        <text>
                                            <textPath xlink:href="#textcircle" textLength="900"> Black Bear
                                                Industries - Black Bear Industries - </textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                            {{-- <div class="half-circle-img">
                                <img src="assets/imgs/about/1.jpg" alt="">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-7 valign">
                        <div class="cont sec-lg-head">
                            <h6 class="dot-titl mb-20">About Black Bear</h6>
                            <h2 class="d-slideup wow">
                                <span class="sideup-text"><span class="up-text">We’re bold fitness minds</span></span>
                                <span class="sideup-text"><span class="up-text">built for the driven and
                                        relentless</span></span>
                            </h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text mt-20">
                                        <p>Empowering athletes through strength-focused gear, real training culture, and
                                            high-performance design — made to fuel movement, sharpen discipline, and
                                            elevate every rep.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End intro ==================== -->
        <!-- ==================== Start Mission ==================== -->

        <section class="sideimg-numbers section-padding sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cont">
                            <div>
                                <h6 class="sub-title mb-15 wow fadeIn">Our Mission</h6>
                                <h2 class="d-slideup wow fz-50">
                                    <span class="sideup-text">
                                        <span class="up-text">Shaping the Quality Future</span>
                                    </span>
                                    <p style="text-align: justify">At Black Bear, our mission is to deliver high-quality products built on trust and
                                        reliability. We strive to exceed customer expectations through innovation,
                                        sustainable practices, and exceptional service. Our goal is to empower our clients’
                                        growth and success in global markets by consistently providing value and excellence.
                                    </p>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-img bg-left  d-flex align-items-center justify-content-center"
                data-background="{{ asset('assets/frontend/images/mission.jpg') }}">
                <div class="vid-circle bg-white text-dark" style="display: none;">
                    <span class="icon">
                        <svg class="default" width="13" height="20" viewBox="0 0 13 20" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 20L13 10L0 0V20Z"></path>
                        </svg>
                    </span>

                </div>
            </div>
            <div class="container-fluid mt-100">
                <div class="row">
                    <div class="col-12">
                        <div class="main-marq xlrg">
                            <div class="slide-har st1 strok">
                                <div class="box">
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Mission</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Mission ==================== -->


        <!-- ==================== Start Vision ==================== -->

        <section class="sideimg-numbers section-padding sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="cont">
                            <div>
                                <h6 class="sub-title mb-15 wow fadeIn">Our Vision</h6>
                                <h2 class="d-slideup wow fz-50">
                                    <span class="sideup-text">
                                        <span class="up-text">Driven by innovation</span>
                                    </span>
                                    <p style="text-align: justify">We aim to be a global leader in manufacturing and export by delivering innovative,
                                        high-quality products that inspire trust and foster lasting partnerships. Our vision
                                        is to continuously evolve, embracing new technologies and sustainable practices to
                                        create value for our clients and communities worldwide.</p>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-img bg-blz  d-flex align-items-center justify-content-center offset-lg-6"
                data-background="{{ asset('assets/frontend/images/vission.jpg') }}">
                <div class="vid-circle bg-white text-dark" style="display: none;">
                    <span class="icon">
                        <svg class="default" width="13" height="20" viewBox="0 0 13 20" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 20L13 10L0 0V20Z"></path>
                        </svg>
                    </span>

                </div>
            </div>
            <div class="container-fluid mt-100">
                <div class="row">
                    <div class="col-12">
                        <div class="main-marq xlrg">
                            <div class="slide-har st1 strok">
                                <div class="box">
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                    <div class="item">
                                        <h4 class="stroke opacity-4">Our Vision</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Vision ==================== -->



        <!-- ==================== Start team ==================== -->

        <section class="team-crev section-padding pb-0 bord-thin-bottom">
            <div class="container-fluid rest">
                <div class="row">
                    <div class="col-12">
                        <div class="sec-head-lg text-center text-u mb-80" id="sticky_item">
                            <h2>Team</h2>
                        </div>
                        <div class="swiper4" data-carousel="swiper" data-items="4" data-loop="true" data-space="60"
                            data-center="true" data-speed="1000">
                            <div id="content-carousel-container-unq-team" class="swiper-container"
                                data-swiper="container">
                                <div class="swiper-wrapper">
                                    @foreach ($team as $team)
                                        <div class="swiper-slide">
                                            <div class="item">
                                                <div class="img">
                                                    <img src="{{ asset('uploads/teams/' . $team->image) }}"
                                                        alt="">
                                                </div>
                                                <div class="info">
                                                    <div class="main-marq team-position">
                                                        <div class="slide-har st1 non-strok">
                                                            <div class="box">
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                            </div>
                                                            <div class="box">
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->designation }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="main-marq team-name">
                                                        <div class="slide-har st1 non-strok">
                                                            <div class="box">
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                            </div>
                                                            <div class="box">
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                                <div class="item">
                                                                    <h4>{{ $team->name }}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

        <!-- ==================== End team ==================== -->



        <!-- ==================== Start clients ==================== -->

        <div class="clients section-padding pb-100 position-re">
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
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/compliances-1.png') }}" alt="">
                                    </div>
                                    {{-- <a href="#0" class="link" data-splitting>www.Black Bear.com</a> --}}
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                    <div class="">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/compliances-2.png') }}" alt="">
                                    </div>
                                    {{-- <a href="#0" class="link" data-splitting>www.Black Bear.com</a> --}}
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".8s">
                                    <div class="">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/compliances-3.png') }}" alt="">
                                    </div>
                                    {{-- <a href="#0" class="link" data-splitting>www.Black Bear.com</a> --}}
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brand box-bg">
                                <div class="item mb-30 wow fadeIn" data-wow-delay=".3s">
                                    <div class="">
                                        <img class="img-fluid" src="{{ asset('assets/frontend/images/compliances-4.png') }}" alt="">
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

    </main>





    <!-- ==================== Start Footer ==================== -->

    @include('frontend.layout.footer')

    <!-- ==================== End Footer ==================== -->


    @push('scripts')
        <!-- jQuery -->
        <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>


        <!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
    @endpush




@endsection
