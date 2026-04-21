@extends('frontend.layouts.master')
@section('title', 'Littlewood')
@section('main-container')
    <style>
        section.big-section {
            padding: 60px 0;
        }

        section {
            padding: 80px 0 !important;
        }

        section.half-section {
            padding: 120px 0 !important;
            position: relative !important;
            background-size: cover !important;
        }

        .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- start page title -->

    <section class="half-section bg-light-gray parallax " data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('frontend/images/contact-banner-new.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Contact Us</h1> --}}
                    <h2
                        class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-end">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-12 col-lg-6 col-md-4 sm-margin-30px-bottom">
                    <h5 class="alt-font w-50 text-extra-dark-gray font-weight-500 mb-0 lg-w-65 md-w-100">How can we help you
                        today?</h5>
                </div>
                <div class="col-12 col-lg-6 col-md-8">

                    <span class="alt-font d-block text-extra-dark-gray font-weight-500 margin-10px-bottom">London</span>
                    <p class="w-80 margin-5px-bottom lg-w-90">Khudija Street, Pasrur Road, Babey Beri, Sialkot, 51310</p>
                    <span class="d-block margin-10px-bottom">Tel: 123 456 7890</span>
                    <a href="https://www.google.com/maps/place/Littlewood+Corporation/@32.477891,74.551822,17z/data=!3m1!4b1!4m6!3m5!1s0x391eeb5cbd26ca07:0x657bcb0f3a5aefef!8m2!3d32.4778895!4d74.551822!16s%2Fg%2F11c2tcc0nc"
                        target="_blank"
                        class="text-uppercase text-small text-extra-dark-gray font-weight-500 text-decoration-line-bottom">View
                        on google map</a>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-12 col-lg-5 col-md-8 md-margin-50px-bottom">
                    <div class="feature-box feature-box-left-icon-middle padding-4-rem-all bg-light-gray overflow-hidden background-position-top background-no-repeat lg-padding-3-rem-lr md-padding-5-rem-all xs-padding-3-half-rem-all"
                        style="background-image: url('{{ asset('frontend/images/quotes-01.png') }}');">
                        <div class="feature-box-icon margin-25px-right xs-margin-15px-right">
                            <img class="border-radius-100 w-80px xs-w-50px" src="{{ asset('frontend/images/user-01.jpg') }}"
                                alt="">
                        </div>
                        <div class="feature-box-content">
                            <div class="text-large text-extra-dark-gray alt-font font-weight-500 w-90">More comfortable
                                talking with us?</div>
                        </div>
                        <p class="margin-30px-top margin-15px-bottom w-80 lg-w-100">Have questions or want to learn more?
                            Please fill out our contact form — we’ll get back to you shortly with all the details you need.
                        </p>
                        {{-- <a href="#"
                            class="text-small text-extra-dark-gray font-weight-500 text-decoration-line-bottom text-uppercase">Pick
                            a schedule</a> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1 col-md-8">
                    <h4 class="alt-font text-black font-weight-600">Let's get in touch with us</h4>
                    <form action="{{ route('submit.form') }}" method="post" enctype="multipart/form-data"
                        class="alt-font text-extra-dark-gray">
                        @csrf
                        <input
                            class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required"
                            type="text" name="name" placeholder="Your name" required />
                        <input
                            class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px required"
                            type="email" name="email" placeholder="Your email address" required />
                        <input
                            class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-25px-bottom border-radius-0px"
                            type="tel" name="phone" placeholder="Mobile no" required />

                        <textarea
                            class="input-border-bottom border-color-extra-dark-gray bg-transparent placeholder-dark large-input px-0 margin-35px-bottom border-radius-0px"
                            name="comment" rows="5" placeholder="How can we help you?" required></textarea>

                        <button class="btn btn-medium btn-dark-gray mb-0" type="submit">send message</button>
                        <div class="form-results d-none"></div>
                    </form>


                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start map section -->
    <section class="no-padding-tb wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0">
                    <div class="map-style-3 h-500px xs-h-300px">
                        <iframe class="w-100 h-100 filter-grayscale-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.8056579106033!2d74.5492477!3d32.4778895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eeb5cbd26ca07%3A0x657bcb0f3a5aefef!2sLittlewood%20Corporation!5e0!3m2!1sen!2s!4v1745585961997!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end map section -->

@endsection
