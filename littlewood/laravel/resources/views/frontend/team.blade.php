@extends('frontend.layouts.master')
@section('title', 'Littlewood')
@section('main-container')
    <style>
        section {
            padding: 80px 0 !important;
        }

        .parallax {
            position: relative !important;
            background-size: cover !important;
            overflow: hidden;
            background-attachment: fixed !important;
            transition-duration: 0s;
            -moz-transition-duration: 0s;
            -webkit-transition-duration: 0s;
            -o-transition-duration: 0s
        }
        .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
    </style>

    <section class="half-section parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('frontend/images/team-banner.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Our History Timeline
                    </h1> --}}
                    <h2
                        class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Our Team</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-4-half-rem-bottom sm-margin-3-rem-bottom">
                    <span class="d-inline-block alt-font text-large text-gradient-sky-blue-pink text-uppercase font-weight-500 sm-margin-15px-bottom">The Leadership team</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500">Creative people</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 justify-content-center">
                <!-- start team item -->
                <div class="col team-style-02 text-center sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{ asset('frontend/images/members-1.jpg') }}">

                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                Taimur Malik</div>
                            <span class="text-small text-uppercase">Managing Director</span>
                        </figcaption>

                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{ asset('frontend/images/members-2.jpg') }}">
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                Mohsin Malik</div>
                            <span class="text-small text-uppercase">Head Strategic Partnerships and Business Development</span>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{ asset('frontend/images/members-3.jpg') }}">
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                Arqam Malik</div>
                            <span class="text-small text-uppercase">Head Creative Design and Textile Engineering</span>
                        </figcaption>
                    </figure>
                </div>
                <!-- start team item -->
                <div class="col team-style-02 text-center sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{ asset('frontend/images/members-4.jpg') }}">

                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                Usama Malik</div>
                            <span class="text-small text-uppercase">Head Leather Technologies</span>
                        </figcaption>

                    </figure>
                </div>
                <!-- end team item -->
            </div>
            <div class="bg-medium-light-gray margin-6-rem-bottom margin-3-rem-top w-100 h-1px"></div>
            {{-- <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-7 col-md-8 col-sm-10 text-center text-md-start sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500 mb-0 md-w-90 sm-w-100"><strong class="text-decoration-underline">Creative thinkers,</strong> clever developer and marketing superheroes apply for work with us.</h6>
                    </div>
                    <div class="col-12 col-xl-5 col-md-4 text-center text-md-end wow animate__fadeIn" data-wow-delay="0.2s">
                        <a href="contact-us-classic.html" class="btn btn-large btn-round-edge btn-transparent-fast-blue btn-slide-right-bg">Join the team<span class="bg-fast-blue"></span></a>
                    </div>
                </div> --}}
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->
@endsection
