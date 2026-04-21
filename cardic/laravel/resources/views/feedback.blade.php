@extends('layouts.master')

@section('title', 'Feedback | Cardic Instruments')

@section('content')
    <style>
        .form-check-input[type="radio"] {
            border-radius: 50% !important;
            appearance: auto !important;
            -webkit-appearance: radio !important;
            width: 1.1em;
            height: 1.1em;
        }

        .btn-org {
            background-color: #f5821f;
            color: white;
        }
    </style>
    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs  ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('assets/images/feeback-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Privacy Policy"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">At cardic.com.pk, one of our main priorities is the privacy of our
                        visitors.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- end section -->
    <section class="position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 last-paragraph-no-margin mb-30px sm-mb-15px">
                    <h4 class="alt-font fw-500 text-dark-gray mb-25px">Give Us Your Feedback</h4>
                    <p class="mb-15px" style="text-align: justify;">How do we rate with you? Cardic would like to know!
                        Please take a moment to give us your feedback.
                    </p>
                    <form action="{{ route('SendFeedbackMail') }}" method="POST">
                        {{ csrf_field() }}

                        <!-- RATING BLOCK -->
                        @php
                            $ratings = [
                                'cst_service' => 'Customer Service',
                                'sal_rep' => 'Sales Representative',
                                'pro_sect' => 'Product Selection',
                                'pricing' => 'Pricing',
                                'pro_performance' => 'Product Performance',
                                'compared' => 'Compared to Competition',
                            ];
                            $options = ['Excellent', 'Great', 'Good', 'Fair', 'Poor'];
                        @endphp

                        @foreach ($ratings as $name => $label)
                            <div class="mb-4">
                                <span
                                    class="d-block fs-20 fw-500 alt-font text-dark-gray mb-15px">{{ $label }}</span>
                                <div class="d-flex flex-wrap gap-3">
                                    @foreach ($options as $option)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="{{ $name }}"
                                                id="{{ $name }}_{{ $option }}" value="{{ $option }}">
                                            <label class="form-check-label" for="{{ $name }}_{{ $option }}">
                                                {{ $option }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                        @endforeach

                        <!-- PERSONAL INFO -->
                        <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">Personal Information</span>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email Address"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" placeholder="Title" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="company" placeholder="Company" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fax" placeholder="Fax">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Address" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="city" placeholder="City" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="state" placeholder="State" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="zip" placeholder="Zip Code" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="country" placeholder="Country" required>
                            </div>
                        </div>

                        <!-- MESSAGE -->
                        <div class="mt-4">
                            <textarea class="form-control" name="message" rows="4" placeholder="How can we improve to serve you better?"
                                required></textarea>
                        </div>

                        <!-- CAPTCHA -->
                        <div class="mt-4 text-center">
                            <div class="g-recaptcha" data-sitekey="6Lclt5oUAAAAAEe18M4a-eoQmK46wXYfiz3_Ylyz"></div>
                        </div>

                        <!-- SUBMIT -->
                        <button class="btn btn-large fw-600 btn-org btn-round-edge btn-box-shadow mb-25px mt-30px  w-100"
                            type="submit">
                            Send message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
