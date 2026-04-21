@extends('layouts.master')

@section('title', 'Warranty & Policy | Cardic Instruments')

@section('content')

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs  ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('assets/frontend/images/front-images/card-warenty-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["Warranty & Policy"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">Great legal help starts with having the best attorneys. Offering legal
                        solutions.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- end section -->
    <section class="position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 pe-70px lg-pe-30px md-pe-15px md-mb-50px">
                    <div class="row">
                        <div class="col-12 last-paragraph-no-margin mb-45px sm-mb-30px">
                            <h4 class="alt-font fw-500 text-dark-gray mb-25px">WARRANTY </h4>
                            <p class="mb-15px">All Instrumentation by Cardic is guaranteed to be free from defects in
                                materials and workmanship for five full years. Any instrument which proves defective when
                                used for its intended purpose will be repaired or replaced at no charge, at the sole
                                discretion of Cardic Instruments. This warranty is in lieu of all other warranties, either
                                expressed or implied.</p>
                            <p>In no event shall seller be liable to buyer, or any successors of buyer, for any claim for
                                lost opportunity, loss of goodwill, or consequential or incidental damages of any kind for
                                any amount in excess of the price of the product. Seller agrees to replace or to issue
                                credit at seller’s sole option any product determined to be defective in materials or
                                workmanship. Seller shall not be responsible for the cost of labor or charges of any kind
                                incurred due to product defect. Your rights under this warranty may vary country to country.
                            </p>
                        </div>
                        <div class="col-12 last-paragraph-no-margin mb-45px sm-mb-30px">
                            <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">IMPORTANT:</span>
                            <p class="mb-15px">All instrumentation by Cardic must be returned to our facility for
                                refurbishment, repair or sharpening.  Refurbishment of our instrumentation by any other
                                resource will void the warranty.</p>
                        </div>
                        <div class="col-12 last-paragraph-no-margin mb-45px sm-mb-30px">
                            <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">PLEASE NOTE:</span>
                            <p class="mb-15px">All instrumentation by Cardic must be returned to our facility for
                                refurbishment, repair or sharpening.  Refurbishment of our instrumentation by any other
                                resource will void the warranty.</p>
                        </div>
                        <div class="col-12">
                            <h4 class="alt-font fw-500 text-dark-gray mb-25px">POLICIES </h4>
                            <p class="mb-35px">The specifications & designs may change without prior notice. We are proud of
                                the handcrafted quality of our instruments, which can cause slight variations & upgrades in
                                instrument patterns.</p>
                            <div
                                class="row row-cols-1 row-cols-lg-2 row-cols-sm-2 justify-content-center text-center icon-with-style-2 g-0 border-top border-start border-color-transparent-dark-very-light">
                                <!-- start features box item -->
                                <div class="col icon-with-text-style-04 transition-inner-all">
                                    <div
                                        class="feature-box box-shadow-triple-large-hover h-100 border-bottom border-end border-color-transparent-dark-very-light sm-border-bottom p-15 xl-p-12 lg-p-7">
                                        <a href="{{ asset('assets/pdf/QUALITY_POLICY.pdf') }}" download
                                            style="color: black;">
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray lh-26 mx-auto"><span
                                                        class="fw-600 d-block lh-20">QUALITY POLICY</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end features box item -->
                                <!-- start features box item -->
                                <div class="col icon-with-text-style-04 transition-inner-all">
                                    <div
                                        class="feature-box box-shadow-triple-large-hover h-100 border-bottom border-end border-color-transparent-dark-very-light sm-border-bottom p-15 xl-p-12 lg-p-7">
                                        <a href="{{ asset('assets/pdf/ENVIRONMENT_POLICY.pdf') }}" download
                                            style="color: black;">
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray lh-26 mx-auto"><span
                                                        class="fw-600 d-block lh-20">ENVIRONMENT POLICY</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end features box item -->
                                <!-- start features box item -->
                                <div class="col icon-with-text-style-04 transition-inner-all">
                                    <div
                                        class="feature-box box-shadow-triple-large-hover h-100 border-bottom border-end border-color-transparent-dark-very-light sm-border-bottom p-15 xl-p-12 lg-p-7">
                                        <a href="{{ asset('assets/pdf/HUMAN_RIGHTS&LABOR_PRACTICES_POLICY.pdf') }}" download
                                            style="color: black;">
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray lh-26 mx-auto"><span
                                                        class="fw-600 d-block lh-20">HUMAN RIGHTS AND LABOR PRACTICES
                                                        POLICY</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end features box item -->
                                <!-- start features box item -->
                                <div class="col icon-with-text-style-04 transition-inner-all">
                                    <div
                                        class="feature-box box-shadow-triple-large-hover h-100 border-bottom border-end border-color-transparent-dark-very-light sm-border-bottom p-15 xl-p-12 lg-p-7">
                                        <a href="{{ asset('assets/pdf/WHISTLE_BLOWING_POLICY_AND_PROCEDURE.pdf') }}"
                                            download style="color: black;">
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray lh-26 mx-auto"><span
                                                        class="fw-600 d-block lh-20">WHISTLE BLOWING POLICY AND
                                                        PROCEDURE</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end features box item -->
                                <!-- start features box item -->
                                <div class="col icon-with-text-style-04 transition-inner-all">
                                    <div
                                        class="feature-box box-shadow-triple-large-hover h-100 border-bottom border-end border-color-transparent-dark-very-light sm-border-bottom p-15 xl-p-12 lg-p-7">
                                        <a href="{{ asset('assets/pdf/WORK_HEALTH_AND_SAFETY_POLICY.pdf') }}" download
                                            style="color: black;">
                                            <div class="feature-box-content">
                                                <span class="text-dark-gray lh-26 mx-auto"><span
                                                        class="fw-600 d-block lh-20">WORK HEALTH AND SAFETY
                                                        POLICY</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- end features box item -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- start sidebar -->
                <aside class="col-lg-5 text-center last-paragraph-no-margin">
                    <div class="bg-very-light-gray position-sticky top-60px border-radius-6px overflow-hidden">

                        <img style="border-radius: 20px;" src="{{ asset('assets/images/WARRANTIES-AND-POLICIES.jpg') }}"
                            class="w-100  d-block" alt="">

                    </div>
            </div>
            </aside>
            <!-- end sidebar -->
        </div>
        </div>
    </section>
    <!-- end section -->

@endsection
