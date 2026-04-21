@extends('layouts.master')
@section('title', 'History | Cardic Instruments')
@section('content')

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('assets/frontend/images/front-images/card-catalogue-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["History"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        In keeping with our legacy of trust and quality, our catalogs and introductory booklets are securely
                        password protected.
                        Access is available upon request at info@cardic.com.pk.
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
                        <li>History</li>
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
                        History
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

    <!-- start section -->
    <section class="pb-0">
        <div class="container">
            <div class="row mb-6">
                <div class="col-lg-5 md-mb-50px">
                    <div class="position-sticky top-120px"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div
                            class="bg-light-medium-gray border-radius-100px fs-13 lh-34 text-dark-gray ps-25px pe-25px d-inline-block text-uppercase fw-600 mb-30px">
                            COMPANY HISTORY</div>
                        <h2 class="text-dark-gray fw-600 ls-minus-2px mb-45px">Four decades of innovation shaping precision
                            health care solutions.</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-7 offset-xl-1">
                    <div class="row row-cols-auto row-cols-sm-1"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">1823</span>
                            <p class="w-90">Our forefathers joined their hands & formed a new company “Ch. Fazal Din &
                                Sons” at Paris Road, Sialkot to manufacture small hand tools mostly for the carpenters of
                                that time.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">1947</span>
                            <p class="w-90">After partition, CFD & Sons started working with the Govt. of Pakistan to
                                produce numerous tools / products for the defense Industry.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">1981</span>
                            <p class="w-90">Mr. Chaudhry M. Ashraf, the production director of CFD parted ways with the
                                company & established his own firm with the name “Technical Tools”.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">1981</span>
                            <p class="w-90">Technical Tools started manufacturing Milling Cutting tools for the Surgical
                                Industry.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">1985</span>
                            <p class="w-90">Chief Executive’s son Mr. M. Afzal Choudhry joined the company.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2000</span>
                            <p class="w-90">Mr. M. Afzal Choudhry changed the name of the company to Cardic Instruments.
                            </p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2000</span>
                            <p class="w-90">Production of Surgical Instruments was started for International Clients.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2001</span>
                            <p class="w-90">Company stopped manufacturing tools for other companies. .</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2003</span>
                            <p class="w-90">Cardic accredited with ISO : 9001 and ISO : 13485.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2003</span>
                            <p class="w-90">Cardic accredited with ISO : 9001 and ISO : 13485.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2007</span>
                            <p class="w-90">Introduction of laser welding machine from Italy.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2007</span>
                            <p class="w-90">Introduction of CNC Wire Cut machines.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2011</span>
                            <p class="w-90">Installation of new milling machines from England.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2015</span>
                            <p class="w-90">Chief Executive’s son joined the company</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2017</span>
                            <p class="w-90">Installation of Powder Coating setup from Germany.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2019</span>
                            <p class="w-90">Introduction of CNC Machines incl. Swiss-lathe, CNC Engraving machine &
                                Machining Center.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2020</span>
                            <p class="w-90">Implementation of enhanced ERP system</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                        <div class="col last-paragraph-no-margin">
                            <span class="text-dark-gray fs-20 d-inline-block fw-600 mb-10px">2020</span>
                            <p class="w-90">Cardic accredited with CFDA.</p>
                        </div>
                        <div class="col-12 mb-8 mt-8">
                            <div class="separator-line-5px w-100 bg-medium-gray opacity-3 bg-sliding-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
