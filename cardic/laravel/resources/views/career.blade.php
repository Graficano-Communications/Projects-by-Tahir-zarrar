@extends('layouts.master')

@section('title', 'Career | Cardic Instruments')

@section('content')
    <style>
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
        style="background-image: url({{ asset('assets/frontend/images/front-images/card-career-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Career"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        Access our career brochures and guides securely.
                        Email us at info@cardic.com.pk to receive a password.
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
                        <li>Career</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section class="overflow-hidden position-relative pt-2 pb-0 xl-pt-5 lg-pt-8 md-pt-11 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-lg-5 col-md-6">
                    <div
                        class="fs-300 xl-fs-250 lg-fs-200 text-dark-orange fw-600 ls-minus-20px word-break-normal position-relative">
                        Career
                        <div
                            class="position-absolute left-minus-100px top-minus-80px xl-w-230px md-w-200px xl-left-minus-50px xl-top-minus-100px d-none d-md-block z-index-9">
                            <img src="{{ asset('assets/frontend/images/front-images/cardictext.png') }}"
                                class="animation-rotation" alt="" />
                            <div class="absolute-middle-center w-100 z-index-minus-1">
                                <img src="{{ asset('assets/frontend/images/front-images/cardic-round.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="pb-140">
        <div class="container">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row space-bottom align-items-center">
                <div class="col-md-6">
                    <br />
                    <form action="{{ route('SendcareerMail') }}" method="post" enctype="multipart/form-data"
                        class="contact-form">

                        {{ csrf_field() }}

                        <div
                            class="contact-form-style-03 position-relative border-radius-10px bg-dark-gray p-12 md-p-8 box-shadow-double-large overflow-hidden last-paragraph-no-margin">

                            <p class="fw-600 text-white fancy-text-style-4 text-center mb-30px">
                                Be great at what you do
                            </p>

                            <!-- Name -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-person"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="name" name="name" required placeholder="Enter Name">
                            </div>

                            <!-- Email -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-envelope"></i></span>
                                <input type="email"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="email" name="email" required placeholder="Enter Email">
                            </div>

                            <!-- Job Title -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-briefcase"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="title" name="title" required placeholder="Job Title">
                            </div>

                            <!-- Previous Company -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-building"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="company" name="company" required placeholder="Previous Company">
                            </div>

                            <!-- Address -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-geo-alt"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="address" name="address" required placeholder="Enter Address">
                            </div>

                            <!-- City -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-pin-map"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="city" name="city" required placeholder="Enter City">
                            </div>

                            <!-- Zip -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-mailbox"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="zip" name="zip" required placeholder="Enter Zip">
                            </div>

                            <!-- Expected Salary -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-currency-dollar"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="salary" name="salary" required placeholder="Enter Expected Salary Please..">
                            </div>

                            <!-- Phone -->
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-telephone"></i></span>
                                <input type="text"
                                    class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control"
                                    id="phone" name="phone" required placeholder="Enter Phone">
                            </div>

                            <!-- CV Upload (unchanged) -->
                            <div class="mb-20px">
                                <span class="text-white d-block mb-5px">Upload Your Pdf CV only:</span>
                                <input type="file" id="upload" name="upload" accept="application/pdf">
                            </div>

                            <!-- Message -->
                            <div class="position-relative form-group form-textarea mb-20px">
                                <span class="form-icon text-white"><i class="bi bi-chat-square-dots"></i></span>
                                <textarea class="ps-0 text-white bg-transparent border-color-transparent-white-light form-control" id="message"
                                    name="message" required placeholder="Write Cover Note" rows="3"></textarea>
                            </div>

                            <!-- reCAPTCHA (unchanged) -->
                            <div style="margin-bottom:20px;margin-left:-15px;" id="g-recaptcha-response"
                                class="col-lg-12 col-md-12 col-sm-12 col-xs-12 g-recaptcha"
                                data-sitekey="6Lclt5oUAAAAAEe18M4a-eoQmK46wXYfiz3_Ylyz"></div>

                            <!-- Submit -->
                            <button type="submit"
                                class="btn btn-large fw-600 btn-white btn-round-edge btn-box-shadow w-100">
                                Submit
                            </button>

                        </div>
                    </form>

                </div>

                <div class="col-md-6">
                    <br>
                    <img style="border-radius: 20px;" src="{{ asset('assets/images/Careers-with-cardic.jpg') }}"
                        width="100%" height="780px">
                </div>

            </div>
        </div>
    </section>
@endsection
