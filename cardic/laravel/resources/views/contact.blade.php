@extends('layouts.master')

@section('title', 'Contact | Cardic Instruments')

@section('content')

    <style>
        .card {
            width: 250px;
            height: 315px;
            background: #FAFAFA;
            padding: 1.1rem 1.5rem;
            transition: box-shadow .3s ease, transform .2s ease;
        }

        .card-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform .2s ease, opacity .2s ease;
        }

        /*Image*/
        .card-avatar {
            --size: 150px;
            background: linear-gradient(to top, #f1e1c1 0%, #fcbc97 100%);
            width: var(--size);
            height: var(--size);

            transition: transform .2s ease;

        }


        .card-social {
            transform: translateY(10%);
            /* Smaller push to start */
            display: flex;
            justify-content: space-around;
            width: 100%;
            opacity: 0;
            transition: transform .2s ease, opacity .2s ease;
        }


        .card-social__item {
            list-style: none;
        }



        /*Text*/
        .card-title {
            color: #333;
            font-size: 1em;
            font-weight: 600;
            line-height: 2rem;
        }

        .card-subtitle {
            color: #859ba8;
            font-size: 0.8em;
            margin-top: -10px;
        }

        /*Hover*/
        .card:hover {
            box-shadow: 0 8px 40px rgba(245, 130, 31, 0.2);
        }


        .card:hover .card-info {
            transform: translateY(-5%);
        }

        .card:hover .card-social {
            transform: translateY(0%);
            opacity: 1;
        }


        .card-social__item svg:hover {
            fill: #232323;
            transform: scale(1.1);
        }

        .card-avatar:hover {
            transform: scale(1.1);
        }

        .contact-form ::placeholder {
            color: #ffffff !important;
            opacity: 1;
        }

        /* IE / Edge legacy */
        .contact-form :-ms-input-placeholder {
            color: #ffffff !important;
        }

        .contact-form ::-ms-input-placeholder {
            color: #ffffff !important;
        }
    </style>

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url('{{ asset('assets/frontend/images/front-images/card-contact-banner.jpg') }}')">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Contact Us"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        Over the years, our commitment to excellence and passion for
                        clients has been recognized.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start breadcrumb -->
    <section class="pt-15px pb-15px border-bottom border-color-extra-medium-gray">
        <div class="container">

            <div class="row">
                <div class="col-12 breadcrumb breadcrumb-style-01 fs-15">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Contact us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <!-- start section -->
    <section class="bg-very-light-gray overlap-height position-relative" id="attorneys">
        <div class="container overlap-gap-section">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color">Conatct our experts</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px">
                        Meet our
                        <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Top Managemet</span>
                    </h3>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "perspective": [900, 1200], "scaleY": [1.1, 1], "rotateY": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                <!-- start team member item -->
                <div class="col transition-inner-all team-style-06 mb-30px">
                    <div
                        class="d-flex flex-column p-40px pb-20px md-p-30px h-100 align-items-center text-center border-radius-6px bg-white box-shadow-quadruple-large">
                        <a href="#">
                            <img class="rounded-circle w-150px h-150px mb-15px"
                                src="{{ asset('assets/images/download.jpeg') }}" alt="">
                        </a>
                        <a href="#" class="text-dark-gray alt-font fs-19 fw-600 mb-5px">M.AFZAL CHOUDHRY</a>
                        <p class="w-90 mx-auto lh-28">Managing Director</p>
                        <p class="w-90 mx-auto lh-28">
                            PHONE:
                            <a href="tel:+923009617546" class="text-dark-gray text-decoration-line-bottom fw-500">
                                0092 300-9617546
                            </a>
                        </p>
                        <p class="w-90 mx-auto lh-28">
                            EMAIL:
                            <a href="mailto:choudhry@cardic.com.pk"
                                class="text-dark-gray text-decoration-line-bottom fw-500">
                                choudhry@cardic.com.pk
                            </a>
                        </p>
                    </div>
                </div>
                <!-- end team member item -->

                <!-- start team member item -->
                <div class="col transition-inner-all team-style-06 mb-30px">
                    <div
                        class="d-flex flex-column p-40px pb-20px md-p-30px h-100 align-items-center text-center border-radius-6px bg-white box-shadow-quadruple-large">
                        <a href="#">
                            <img class="rounded-circle w-150px h-150px mb-15px"
                                src="{{ asset('assets/images/download.jpeg') }}" alt="">
                        </a>
                        <a href="#" class="text-dark-gray alt-font fs-19 fw-600 mb-5px">USMAN CHAUDHRY</a>
                        <p class="w-90 mx-auto lh-28">Sales Director</p>
                        <p class="w-90 mx-auto lh-28">
                            PHONE:
                            <a href="tel:+923336117118" class="text-dark-gray text-decoration-line-bottom fw-500">
                                0092 333-6117118
                            </a>
                        </p>
                        <p class="w-90 mx-auto lh-28">
                            EMAIL:
                            <a href="mailto:usman@cardic.com.pk" class="text-dark-gray text-decoration-line-bottom fw-500">
                                usman@cardic.com.pk
                            </a>
                        </p>
                    </div>
                </div>
                <!-- end team member item -->

                <!-- start team member item -->
                <div class="col transition-inner-all team-style-06 mb-30px">
                    <div
                        class="d-flex flex-column p-40px pb-20px md-p-30px h-100 align-items-center text-center border-radius-6px bg-white box-shadow-quadruple-large">
                        <a href="#">
                            <img class="rounded-circle w-150px h-150px mb-15px"
                                src="{{ asset('assets/images/download.jpeg') }}" alt="">
                        </a>
                        <a href="#" class="text-dark-gray alt-font fs-19 fw-600 mb-5px">KAMRAN SALEEM</a>
                        <p class="w-90 mx-auto lh-28">Import/Export Manager</p>
                        <p class="w-90 mx-auto lh-28">
                            PHONE:
                            <a href="tel:+923025203121" class="text-dark-gray text-decoration-line-bottom fw-500">
                                0092 302-5203121
                            </a>
                        </p>
                        <p class="w-90 mx-auto lh-28">
                            EMAIL:
                            <a href="mailto:kamran@cardic.com.pk" class="text-dark-gray text-decoration-line-bottom fw-500">
                                kamran@cardic.com.pk
                            </a>
                        </p>
                    </div>
                </div>
                <!-- end team member item -->

            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section>
        <div class="container">

            <div class="row justify-content-center align-items-center mb-8">
                <div class="col-xl-5 col-lg-6 md-mb-50px"
                    data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 text-base-color mb-5px d-block">Get in touch with us</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px mb-60px sm-mb-40px">
                        Do you need help?
                        <span class="fw-700 font-style-italic text-decoration-line-bottom-medium">Contact with us
                            now!</span>
                    </h3>
                    <!-- start features box item -->
                    <div class="icon-with-text-style-01 mb-8 md-mb-30px">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="https://via.placeholder.com/160x160" class="h-80px" alt="" />
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="d-block text-dark-gray fw-600 alt-font fs-19 mb-5px">Are you ready for
                                    coffee?</span>
                                <p class="w-60 md-w-100">
                                    P.O.Box : 147, Nishat Park, Opposite: Sialkot Chamber Of Commerce & Indutry, Sialkot -
                                    51310, Pakistan
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="icon-with-text-style-01 mb-8 md-mb-30px">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="https://via.placeholder.com/160x160" class="h-80px" alt="" />
                            </div>
                            <div class="feature-box-content">
                                <span class="d-block text-dark-gray fw-600 alt-font fs-19 mb-5px">Feel free to get in
                                    touch?</span>
                                <div class="w-100 d-block">
                                    <span class="d-block">Phone: <a href="tel:0092524267708">0092 52 426 7708</a></span>
                                    <span class="d-block">Fax: 0092 52 427 2688</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="icon-with-text-style-01">
                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                            <div class="feature-box-icon me-25px">
                                <img src="https://via.placeholder.com/160x160" class="h-80px" alt="" />
                            </div>
                            <div class="feature-box-content">
                                <span class="d-block text-dark-gray fw-600 alt-font fs-19 mb-5px">How can we help
                                    you?</span>
                                <div class="w-100 d-block">
                                    <a href="mailto:info@cardic.com.pk">info@cardic.com.pk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
                <div class="col-lg-6 offset-xl-1"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div
                        class="contact-form-style-03 position-relative border-radius-10px bg-dark-gray p-12 md-p-8 box-shadow-double-large overflow-hidden last-paragraph-no-margin">
                        <h1 class="fw-600 text-white fancy-text-style-4 ls-minus-2px">
                            Say
                            <span
                                data-fancy-text='{ "effect": "rotate", "string": ["hello!", "hallå!", "salve!"] }'></span>
                        </h1>
                        <!-- start contact form -->
                        <form action="{{ route('SendMail') }}" method="post" class="contact-form">
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-person icon-extra-medium"></i></span>
                                <input
                                    class="ps-0 border-radius-0px text-white bg-transparent border-color-transparent-white-light form-control required"
                                    type="text" name="name" placeholder="Enter your name*" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-envelope icon-extra-medium"></i></span>
                                <input
                                    class="ps-0 border-radius-0px text-white bg-transparent border-color-transparent-white-light form-control required"
                                    type="email" name="email" placeholder="Enter your email*" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-envelope icon-extra-medium"></i></span>
                                <input
                                    class="ps-0 border-radius-0px text-white bg-transparent border-color-transparent-white-light form-control required"
                                    type="text" name="subject" placeholder="Enter your email*" />
                            </div>
                            <div class="position-relative z-index-1 form-group form-textarea mb-0">
                                <textarea class="ps-0 border-radius-0px text-white bg-transparent border-color-transparent-white-light form-control"
                                    name="message" placeholder="Enter your message" rows="3"></textarea>
                                <span class="form-icon text-white"><i
                                        class="bi bi-chat-square-dots icon-extra-medium"></i></span>
                                <div style="margin-bottom:20px;margin-left:-15px;" id="g-recaptcha-response"
                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12 g-recaptcha"
                                    data-sitekey="6Lclt5oUAAAAAEe18M4a-eoQmK46wXYfiz3_Ylyz"></div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <button
                                    class="btn btn-large fw-600 btn-white btn-round-edge btn-box-shadow mb-25px mt-30px  w-100"
                                    type="submit">
                                    Send message
                                </button>
                            </div>
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-auto text-center text-md-end sm-mb-20px"
                    data-anime='{ "translateX":[-30,0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h6 class="text-dark-gray fw-600 mb-0 alt-font">
                        Connect with social media
                    </h6>
                </div>
                <div class="col-2 d-none d-lg-inline-block"
                    data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                </div>
                <!-- start social icon -->
                <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0"
                    data-anime='{ "translateX":[30,0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <ul class="large-icon dark">
                        <li class="m-0">
                            <a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                    class="fa-brands fa-facebook-f"></i><span></span></a>
                        </li>
                        <li class="m-0">
                            <a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                                    class="fa-brands fa-dribbble"></i><span></span></a>
                        </li>
                        <li class="m-0">
                            <a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                    class="fa-brands fa-twitter"></i><span></span></a>
                        </li>
                        <li class="m-0">
                            <a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                    class="fa-brands fa-instagram"></i><span></span></a>
                        </li>
                        <li class="m-0">
                            <a class="linkedin" href="http://www.linkedin.com" target="_blank"><i
                                    class="fa-brands fa-linkedin-in"></i><span></span></a>
                        </li>
                    </ul>
                </div>
                <!-- end social icon -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.686383495888!2d74.5385915!3d32.5078104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea509e215ba3%3A0xfb59dda454550ba9!2sCardic%20Instruments!5e0!3m2!1sen!2s!4v1762412119765!5m2!1sen!2s"
                        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->







@endsection
