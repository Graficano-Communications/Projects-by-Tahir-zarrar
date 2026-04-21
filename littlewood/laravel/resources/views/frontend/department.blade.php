@extends('frontend.layouts.master')
@section('title', 'Department')
@section('main-container')
    <style>
        .mtb {
            margin-top: 50px;
        }

        section.half-section {
            padding: 20px 0 !important;
        }

        .container-fluid {
            padding: 0;
        }

        .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .portfolio-row {
            display: flex;
            flex-wrap: wrap;
        }

        .portfolio-box {
            padding: 0;
            /* Remove padding if necessary */
        }

        .portfolio-image {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .portfolio-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }

        .no-gutters>.col,
        .no-gutters>[class*="col-"] {
            padding-right: 0;
            padding-left: 0;
        }

        .nav-tabs .nav-link {
            background-color: #ffffff !important;
            color: #011647 !important;
            border-color: #ffffff !important;
        }

        /* Hover state */
        .nav-tabs>li.nav-item>a.nav-link.active,
        .nav-tabs>li.nav-item>a.nav-link.active:hover,
        .nav-tabs>li.nav-item>a.nav-link:hover {
            background-color: #fb8500 !important;
            color: #011647 !important;
            border-color: #fb8500 !important;
        }

        /* Active state */
        .nav-tabs .nav-link.active {
            background-color: #fb8500 !important;
            color: #ffffff !important;
            border: 1px solid #fb8500 !important;
            margin: 0 5px;
            padding: 10px 20px !important;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
            text-transform: uppercase;
            /* font-weight: 500; */
            text-align: center;
        }
    </style>
    <!-- start page title -->
    <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('frontend/images/department-banner.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Department</h1> --}}
                    <h2
                        class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Our Departments</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start section -->
    <section class="bg-light-gray pt-0">
        <div class="container mtb">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- start filter navigation -->
                    <ul
                        class="portfolio-filter grid-filter nav nav-tabs justify-content-center border-0 text-uppercase font-weight-500 alt-font padding-6-rem-bottom md-padding-4-half-rem-bottom sm-padding-2-rem-bottom">
                        @foreach ($departments as $dep)
                            <li class="nav-item">
                                <a class="nav-link {{ $id == $dep->id ? 'active' : '' }}" id="tab-{{ $dep->id }}-tab"
                                    data-bs-toggle="tab" href="#tab-{{ $dep->id }}">
                                    {{ $dep->name }}
                                </a>

                            </li>
                        @endforeach
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 filter-content">
                    <!-- Start the portfolio container for all departments -->
                    <div class="tab-content" id="department-tabs">
                        @foreach ($departments as $dep)
                            <div class="tab-pane fade {{ $id == $dep->id ? 'show active' : '' }}"
                                id="tab-{{ $dep->id }}" role="tabpanel" aria-labelledby="tab-{{ $dep->id }}-tab">
                                <ul
                                    class="portfolio-bordered portfolio-wrapper grid grid-loading grid-2col xl-grid-2col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                                    <li class="grid-sizer"></li>

                                    <!-- Loop through images for the current department -->
                                    @foreach (explode(',', $dep->image) as $image)
                                        <li class="grid-item wow animate__fadeIn {{ strtolower($dep->name) }}">
                                            <div class="portfolio-box">
                                                <div class="portfolio-image">
                                                    <img src="{{ asset('uploads/departments/' . trim($image)) }}"
                                                        alt="" />
                                                    <div class="portfolio-hover justify-content-end d-flex flex-column">
                                                        <div
                                                            class="bg-white padding-30px-lr padding-15px-tb w-100 d-flex align-items-center align-self-end text-start border-radius-3px xl-padding-20px-lr">
                                                            <div class="me-auto">
                                                                <div
                                                                    class="text-medium-gray alt-font margin-5px-top text-small text-uppercase">
                                                                    {{ $dep->name }}
                                                                </div>
                                                                <div
                                                                    class="font-weight-500 alt-font text-extra-dark-gray text-uppercase">
                                                                    {!! $dep->description !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <!-- End the portfolio container for all departments -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let defaultTabId = '{{ $id ?? $departments->first()->id }}';

            // Highlight the tab
            let activeTabLink = document.querySelector(`#tab-${defaultTabId}-tab`);
            if (activeTabLink) {
                let tab = new bootstrap.Tab(activeTabLink);
                tab.show();
            }

            // Make sure correct content pane is shown manually too (for fallback)
            let contentPane = document.querySelector(`#tab-${defaultTabId}`);
            if (contentPane) {
                document.querySelectorAll('.tab-pane').forEach(pane => {
                    pane.classList.remove('show', 'active');
                });
                contentPane.classList.add('show', 'active');
            }
        });
    </script>



@endsection
