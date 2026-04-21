@extends('frontend.layouts.master')
@section('title', 'History timeline')
@section('main-container')
    <style>
        .color-1 {
            color: #011647 !important;
        }

        .mtb {
            margin-top: 50px;
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

        /* section {
                    padding: 60px 0 !important;
                } */

        .timeline {
            position: relative;
            padding: 10px;
            margin: 0 auto;
            overflow: hidden;
            color: #ffffff;
        }

        .timeline:after {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -1px;
            border-right: 2px dashed #c4d2e2;
            height: 100%;
            display: block;
        }

        .timeline-row {
            padding-left: 50%;
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-row .timeline-time {
            position: absolute;
            right: 50%;
            top: 31px;
            text-align: right;
            margin-right: 20px;
            color: #011647;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .timeline-row .timeline-time small {
            display: block;
            font-size: .8rem;
            color: #8796af;
        }

        .timeline-row .timeline-content {
            position: relative;
            padding: 20px 30px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }

        .timeline-row .timeline-content:after {
            content: "";
            position: absolute;
            top: 20px;
            height: 3px;
            width: 40px;
        }

        .timeline-row .timeline-content:before {
            content: "";
            position: absolute;
            top: 20px;
            right: -50px;
            width: 20px;
            height: 20px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            z-index: 100;
            background: #011647;
            border: 2px dashed #c4d2e2;
        }

        .timeline-row .timeline-content h4 {
            margin: 0 0 20px 0;
            /* overflow: hidden; */
            white-space: nowrap;
            white-space: normal;
            overflow: visible;
            text-overflow: unset;
            /* or just remove it */
            line-height: 150%;
            font-size: 25px;
            font-weight: 700;
        }

        .timeline-row .timeline-content p {
            margin-bottom: 30px;
            line-height: 150%;
        }

        .timeline-row .timeline-content i {
            font-size: 2rem;
            color: #011647;
            line-height: 100%;
            padding: 10px;
            border: 2px solid #4a4c59 !important;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .timeline-row .timeline-content .thumbs {
            margin-bottom: 20px;
        }

        .timeline-row .timeline-content .thumbs img {
            margin-bottom: 10px;
        }

        .timeline-row:nth-child(even) .timeline-content {
            background-color: #011647;
            margin-left: 40px;
            text-align: left;
        }

        .timeline-row:nth-child(even) .timeline-content:after {
            left: -39px;
            border-right: 18px solid #011647;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        .timeline-row:nth-child(even) .timeline-content:before {
            left: -50px;
            right: initial;
        }

        .timeline-row:nth-child(odd) {
            padding-left: 0;
            padding-right: 50%;
        }

        .timeline-row:nth-child(odd) .timeline-time {
            right: auto;
            left: 50%;
            text-align: left;
            margin-right: 0;
            margin-left: 20px;
        }

        .timeline-row:nth-child(odd) .timeline-content {
            background-color: #011647;
            margin-right: 40px;
            margin-left: 0;
            text-align: right;
        }

        .timeline-row:nth-child(odd) .timeline-content:after {
            right: -39px;
            border-left: 18px solid #011647;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        @media (max-width: 767px) {
            .timeline {
                padding: 15px 10px;
            }

            .timeline:after {
                left: 28px;
            }

            .timeline .timeline-row {
                padding-left: 0;
                margin-bottom: 16px;
            }

            .timeline .timeline-row .timeline-time {
                position: relative;
                right: auto;
                top: 0;
                text-align: left;
                margin: 0 0 6px 56px;
            }

            .timeline .timeline-row .timeline-time strong {
                display: inline-block;
                margin-right: 10px;
            }

            .timeline .timeline-row .timeline-icon {
                top: 52px;
                left: -2px;
                margin-left: 0;
            }

            .timeline .timeline-row .timeline-content {
                padding: 15px;
                margin-left: 56px;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
                position: relative;
            }

            .timeline .timeline-row .timeline-content:after {
                right: auto;
                left: -39px;
                top: 32px;
            }

            .timeline .timeline-row:nth-child(odd) {
                padding-right: 0;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-time {
                position: relative;
                right: auto;
                left: auto;
                top: 0;
                text-align: left;
                margin: 0 0 6px 56px;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content {
                margin-right: 0;
                margin-left: 55px;
            }

            .timeline .timeline-row:nth-child(odd) .timeline-content:after {
                right: auto;
                left: -39px;
                top: 32px;
                border-right: 18px solid #5a99ee;
                border-left: inherit;
            }

            .timeline.animated .timeline-row:nth-child(odd) .timeline-content {
                left: 20px;
            }

            .timeline.animated .timeline-row.active:nth-child(odd) .timeline-content {
                left: 0;
            }
        }
    </style>
    <!-- start page title -->
    <section class="half-section parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('frontend/images/history-banner.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Our History Timeline --}}
                    </h1>
                    <h2
                        class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Our History</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    <section class="overflow-visible wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-sm-8 text-center ">
                    <span
                        class="d-inline-block alt-font text-large text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Browse
                        amazing history timeline</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500  sm-w-100">Our History Timeline</h5>
                </div>
            </div>
        </div>
        <div class="container bootdey">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Timeline start -->
                            <div class="timeline">
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        1985
                                    </div>
                                    <div class="timeline-dot fb-bg"></div>
                                    <div class="timeline-content">
                                        <img src="{{ asset('frontend/images/1985.png') }}" width="50px" alt="">
                                        <h4>Humble Beginnings</h4>
                                        <p>Littlewood Corp was founded as a small manufacturing unit, supplying high-quality
                                            weightlifting and motorbike gloves to a single international client in the USA.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        1990
                                    </div>
                                    <div class="timeline-dot green-one-bg"></div>
                                    <div class="timeline-content green-one">
                                        <img src="{{ asset('frontend/images/1990.png') }}" width="50px" alt="">
                                        <h4>Vertical Integration: Leather Tannery
                                            Established
                                        </h4>
                                        <p>
                                            To ensure full control over material quality and production standards,
                                            Littlewood set up its own leather tannery. This milestone allowed us to produce
                                            even higher quality leather gloves and scale production more efficiently.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        1993
                                    </div>
                                    <div class="timeline-dot green-two-bg"></div>
                                    <div class="timeline-content green-two">
                                        <img src="{{ asset('frontend/images/1993.png') }}" width="50px" alt="">
                                        <h4>Expansion into Leather Apparel & New Markets</h4>
                                        <p>We expanded our product line to include leather jackets and began exporting to
                                            the USA and UK. With a growing number of international clients, Littlewood
                                            solidified its position as a trusted exporter of premium leather goods.
                                        </p>

                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        1996
                                    </div>
                                    <div class="timeline-dot green-three-bg"></div>
                                    <div class="timeline-content green-three">
                                        <img src="{{ asset('frontend/images/1996.png') }}" width="50px" alt="">
                                        <h4>Breakthrough in Technical Apparel</h4>
                                        <p>Littlewood ventured into the production of leather racing suits and jackets. This
                                            move into complex and technical products established us as a leader in
                                            high-performance leatherwear, meeting rigorous global safety and protection
                                            standards.
                                        </p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        Early 2000s
                                    </div>
                                    <div class="timeline-dot green-four-bg"></div>
                                    <div class="timeline-content green-four">
                                        <img src="{{ asset('frontend/images/2000-onward.png') }}" width="50px" alt="">
                                        <h4>Textile Revolution & Market Diversification
                                        </h4>
                                        <p class="no-margin">As global demand grew, Littlewood diversified into
                                            manufacturing textile motorcycle apparel. This broadened our reach and enabled
                                            us to serve a wider spectrum of riders.
                                            We also launched a new production facility focused on ultra-protective leather
                                            suits and gloves for race drivers.</p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        Mid 2000s Onward
                                    </div>
                                    <div class="timeline-dot green-four-bg"></div>
                                    <div class="timeline-content green-four">
                                        <img src="{{ asset('frontend/images/2000.png') }}" width="50px" alt="">
                                        <h4>Workwear & Safety Gloves Segment Launched
                                        </h4>
                                        <p class="no-margin">Backed by two decades of expertise in protective gear,
                                            Littlewood began manufacturing advanced workwear and safety gloves, catering to
                                            industries requiring high standards of protection and durability.</p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        2015
                                    </div>
                                    <div class="timeline-dot teal-bg"></div>
                                    <div class="timeline-content teal">
                                        <img src="{{ asset('frontend/images/2015.png') }}" width="50px" alt="">
                                        <h4>Digital Transformation & Capacity Expansion</h4>
                                        <p class="no-margin">We invested heavily in expanding our production facility,
                                            introducing advanced machinery and transitioning to digital systems. Upgrades
                                            included improvements in quality assurance, sorting, packing, and speed of
                                            production—enhancing both efficiency and output.</p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        2023
                                    </div>
                                    <div class="timeline-dot sea-green-bg"></div>
                                    <div class="timeline-content sea-green">
                                        <img src="{{ asset('frontend/images/2023.png') }}" width="50px" alt="">
                                        <h4>Global Standards & Compliance Achieved</h4>
                                        <p>Littlewood achieved SEDEX 2-Pillar and 4-Pillar certifications, further elevating
                                            our international compliance profile. These added to our portfolio of ISO and
                                            other global certifications, affirming our commitment to ethical, safe, and
                                            high-quality manufacturing.</p>
                                    </div>
                                </div>
                                <div class="timeline-row">
                                    <div class="timeline-time color-1">
                                        Today
                                    </div>
                                    <div class="timeline-dot sea-green-bg"></div>
                                    <div class="timeline-content sea-green">
                                        <img src="{{ asset('frontend/images/2025.png') }}" width="50px" alt="">
                                        <h4>Trusted Worldwide</h4>
                                        <p>With decades of experience and innovation, Littlewood Corp is now a global leader
                                            in specialty gloves and protective wear. We proudly export to the USA, UK,
                                            Germany, Italy, Canada, Australia, South Africa, and other markets worldwide.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Timeline end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->







@endsection
