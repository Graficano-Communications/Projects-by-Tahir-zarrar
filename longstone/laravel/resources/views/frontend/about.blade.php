@extends('frontend.layout.master')
@section('title', 'Long Stone Int')
@section('main-container')
</style>
    <!-- start page title -->
    <section class="cover-background background-position-top wow animate__fadeIn"
        style="background-image: url('{{ asset('assets/frontend/images/Front-images/about-us-banner.jpg') }}');">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="overflow-visible">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-12 col-md-5">
                    <div class="w-100 border-radius-6px overflow-hidden">
                        <img src="{{ url('assets/frontend/images/Front-images/about-1.jpg') }}" alt="Image"
                            class="img-fluid" />
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-12 col-lg-6 offset-xl-1 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="alt-font text-extra-medium font-weight-500 margin-30px-bottom d-flex"><span
                            class="flex-shrink-0 w-50px h-1px bg-fast-blue opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-gradient-sky-blue-pink">About Us</span></div>
                    </div>
                    <h5 class="alt-font text-medium-gray font-weight-500 margin-30px-bottom">A Commitment to Quality and
                        Excellence</h5>
                    <p class="w-95 just">Welcome to Long Stone International! We are proud to offer high-quality health,
                        beauty, dental, and surgical instruments to professionals worldwide. Our commitment to excellence
                        ensures that we continue to meet and exceed the expectations of our valued customers.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0 overflow-visible">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-12 col-md-6">
                    <div class="alt-font text-extra-medium font-weight-500 margin-30px-bottom d-flex"><span
                            class="flex-shrink-0 w-50px h-1px bg-fast-blue opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-gradient-sky-blue-pink">Who Are We?</span></div>
                    </div>
                    <h5 class="alt-font text-medium-gray font-weight-500 margin-30px-bottom">Our Story</h5>
                    <p class="w-95 just">Founded in 1999, Long Stone International has become a trusted name in the
                        manufacturing and supply of premium instruments. From our early beginnings in the beauty care
                        sector, we’ve expanded to offer a wide range of instruments used in health care, beauty, dental, and
                        surgical fields. Our mission is simple: to provide reliable, durable, and precise instruments that
                        support professionals in delivering exceptional care to their clients and patients.</p>

                </div>
                <!-- Content Column -->
                <div class="col-12 col-lg-5 offset-xl-1 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="w-100 border-radius-6px overflow-hidden">
                        <img src="{{ url('assets/frontend/images/Front-images/about-2.jpg') }}" alt="Image"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start  section -->
    <section class="wow py-0">
        <div class="container">
            <div class="row align-items-center ">
                <div class="text-extra-medium margin-20px-bottom alt-font text-center">Why Choose Us?</div>
                <h5 class="alt-font text-medium-gray font-weight-500 margin-5-half-rem-bottom text-center">Our Commitment to
                    Excellence</h5>
            </div>
            <div class="row align-items-center  padding-3-rem-bottom lg-padding-7-rem-bottom sm-padding-50px-bottom">
                <div class="col-12  col-lg-6">
                    <div class="row">
                        <!-- start feature box item -->
                        <div class="col-12">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="solid-icon-Global-Position icon-large text-fast-blue"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="text-medium-gray d-block margin-10px-bottom alt-font font-weight-500">High-Quality
                                        Standards</span>
                                    <p class="w-95 just">All our instruments are crafted with precision and go through
                                        strict quality checks to ensure durability and reliability.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <div class="col-12">
                            <div class="h-1px bg-medium-light-gray margin-40px-tb w-100 xs-margin-30px-tb"></div>
                        </div>
                        <!-- start feature box item -->
                        <div class="col-12">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="icon-genius icon-large text-fast-blue"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="text-medium-gray d-block margin-10px-bottom alt-font font-weight-500">Modern
                                        Manufacturing</span>
                                    <p class="w-95 just">We use advanced machinery and innovative techniques to create tools
                                        that meet global standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->

                    </div>
                </div>
                <div class="col-12 col-lg-6 ">
                    <div class="row">
                        <!-- start feature box item -->
                        <div class="col-12">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Increase-Inedit icon-large text-fast-blue"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-medium-gray d-block margin-10px-bottom alt-font font-weight-500">Wide
                                        Product Range</span>
                                    <p class="w-95 just">From beauty care to surgical instruments, we offer a diverse range
                                        of tools to suit various professional needs.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <div class="col-12">
                            <div class="h-1px bg-medium-light-gray margin-40px-tb w-100 xs-margin-30px-tb"></div>
                        </div>
                        <!-- start feature box item -->
                        <div class="col-12">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Business-Mens icon-large text-fast-blue"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="text-medium-gray d-block margin-10px-bottom alt-font font-weight-500">Customer-Centered
                                        Approach</span>
                                    <p class="w-95 just">Our team is dedicated to ensuring customer satisfaction with quick
                                        responses, timely delivery, and excellent service.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="padding-160px-tb  wow animate__fadeIn padding-10px-tb">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 margin-8-half-rem-top">
                <!-- start counter item -->
                <div class="col text-center sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                    <h2 class="counter counter-number alt-font font-weight-600 text-extra-white mb-0 appear" data-to="25"
                        data-speed="100">25</h2>
                    <span
                        class="alt-font text-light-greenish-gray text-uppercase d-block letter-spacing-1px">Countries</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center sm-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <h2 class="counter counter-number alt-font font-weight-600 text-extra-white mb-0 appear" data-to="100"
                        data-speed="100">100</h2>
                    <span
                        class="alt-font text-light-greenish-gray text-uppercase d-block letter-spacing-1px">employees</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center xs-margin-30px-bottom wow animate__fadeIn " data-wow-delay="0.3s">
                    <div class="d-flex justify-content-center">
                        <h2 class="counter counter-number alt-font font-weight-600 text-extra-white mb-0 appear"
                            data-to="100" data-speed="100">100</h2>
                        <h2 class=" alt-font font-weight-600 text-extra-white mb-0 ">K</h2>
                    </div>
                    <span
                        class="alt-font text-light-greenish-gray text-uppercase d-block letter-spacing-1px">Instruments</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center wow animate__fadeIn" data-wow-delay="0.4s">
                    <h2 class="counter counter-number alt-font font-weight-600 text-extra-white mb-0 appear"
                        data-to="120" data-speed="100">120</h2>
                    <span class="alt-font text-light-greenish-gray text-uppercase d-block letter-spacing-1px">Oem</span>
                </div>
                <!-- end counter item -->
            </div>
        </div>
    </section>


    <section class=" wow animate__fadeIn" id="csr">
        <div class="container">
            <div class="row justify-content-center wow animate__fadeIn">
                <div
                    class="col-12 col-xl-3 col-lg-4 col-sm-7 d-flex flex-column text-center text-lg-start md-margin-6-rem-bottom">
                    <div class="margin-20px-bottom sm-margin-10px-bottom">
                        <h5 class=" text-center alt-font font-weight-600  margin-35px-bottom md-margin-30px-bottom"
                            style="   display: inline-block; margin: 0px 0px 16px 0px; padding: 0px 0px 4px 0px; border-style: solid; border-width: 0px 0px 5px 0px; border-color:#ff7300  ">
                            CSR </h5>
                    </div>
                    <p
                        class="alt-font  font-weight-400 margin-20px-bottom md-margin-30px-bottom xs-w-90 mx-auto mx-sm-0">
                        Our dedication to creating a safe and stable workplace extends beyond sterilization, lighting,
                        heating, ventilation, and fire safety at Longstone Surgical. We emphasize our employees' well-being by
                        implementing comprehensive processes to reduce accidents, injuries, and exposure to hazardous
                        chemicals in the workplace. Our continuous commitment to a safe workplace is a pillar of our CSR
                        campaigns.
                    </p>

                </div>
                <div class="col-12 col-xl-7 offset-xl-1 col-lg-8 last-paragraph-no-margin wow animate__fadeIn"
                    data-wow-duration="0.3">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2">
                        <!-- start feature box item -->
                        <div
                            class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/Front-images/csr-1.png') }}"
                                            alt="" height= "60px" width= "90px"
                                            style="width:70px; height:70px"></a>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font font-weight-500 margin-10px-bottom d-block text-medium-gray">Healthcare</span>
                                    <p>Our healthcare solutions positively impact patient outcomes, contributing to global
                                        advancements in the specialized field. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn"
                            data-wow-delay="0.2s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/Front-images/csr-2.png') }}"
                                            alt="" height= "60px" width= "90px"
                                            style="width:70px; height:70px"></a>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-medium-gray">Product
                                        Safety</span>
                                    <p>We ensure product safety and quality, working closely with regulators, retailers, and
                                        consumers to maintain the highest safety standards. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/Front-images/csr-3.png') }}"
                                            alt="" height= "60px" width= "90px"
                                            style="width:70px; height:70px"></a>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-medium-gray">Employee
                                        Well-Being</span>
                                    <p>Longstone Surgical promotes employee well-being through wellness programs, encouraging
                                        healthy habits to enhance productivity.
                                    <p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/Front-images/csr-4.png') }}"
                                            alt="" height= "60px" width= "90px"
                                            style="width:70px; height:70px"></a>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font font-weight-500 margin-10px-bottom d-block text-medium-gray">Enviromental
                                        Responsibility</span>
                                    <p>Longstone Surgical is reducing its carbon footprint by utilizing renewable energy and
                                        advocating for sustainable practices across all industries.
                                    <p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/Front-images/csr-5.png') }}"
                                            alt="" height= "60px" width= "90px"
                                            style="width:70px; height:70px"></a>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-medium-gray">Teamwork
                                    </span>
                                    <p>We advocate for policies addressing climate issues through teamwork and
                                        collaboration, enhancing our global impact in the fight against climate change. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/Front-images/csr-6.png') }}"
                                            alt="" height= "60px" width= "90px"
                                            style="width:70px; height:70px"></a>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-medium-gray">Child
                                        Labour</span>
                                    <p>Our organization strictly prohibits hiring individuals under 18, adhering to
                                        international labor standards and upholding ethical practices. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- start section -->
    <section class="big-section bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class=" col-12 ">
                    <div class="col-12 p-0 margin-3-rem-bottom wow animate__fadeIn">
                        <h5 class=" text-center alt-font font-weight-600  margin-35px-bottom md-margin-30px-bottom"
                            style="   display: inline-block; margin: 0px 0px 16px 0px; padding: 0px 0px 4px 0px; border-style: solid; border-width: 0px 0px 5px 0px;border-color:#ff7300  ">
                            Our Milestones: A Legacy of Excellence</h5>
                    </div>

                </div>

                <div class="row align-items-center justify-content-center">
                    <div class=" col-12 col-md-6 col-xl-6 col-lg-6 md-margin-5-rem-bottom wow animate__fadeIn">
                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        1980</div>
                                    <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">Humble
                                        Beginnings </span>
                                    <p class="w-80 xs-w-100 just">Two brothers, Mr. Mohammad Ishaq and Mr. Mohammad Safdar
                                        started a small manufacturing unit for manicures, pedicures, surgical, and dental
                                        instruments for the local market.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->
                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        1999 </div>
                                    <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">Expanding
                                        Horizons</span>
                                    <p class="w-80 xs-w-100 just">After local success, we launched Long Stone International
                                        to serve global markets with high-quality beauty and healthcare instruments.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->
                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        2007</div>
                                    <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">Achieving
                                        Excellence</span>
                                    <p class="w-80 xs-w-100 just">We earned ISO 9001:2008 and CE certifications, reflecting
                                        our commitment to strict quality control and global standards.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->
                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        2009</div>

                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">Global
                                        Presence</span>
                                    <p class="w-80 xs-w-100 just">We began showcasing our products at international
                                        exhibitions, starting with Beauty International Düsseldorf in Germany.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->
                    </div>

                    <div class=" col-12 col-md-6 col-xl-6 col-lg-6 md-margin-5-rem-bottom wow animate__fadeIn">

                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        2014</div>
                                    <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">Digital
                                        Growth</span>
                                    <p class="w-80 xs-w-100 just">We launched our official website to better connect with
                                        customers and share information about our products and services.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->
                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        2016</div>
                                    <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">Modern
                                        Innovations</span>
                                    <p class="w-80 xs-w-100 just">Our manufacturing facility was upgraded with
                                        state-of-the-art machinery to meet the growing demands of our global customers.</p>

                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->

                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        2020</div>
                                    <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">

                                    <span
                                        class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">Expanding
                                        Reach</span>
                                    <p class="w-80 xs-w-100 just">Despite global challenges, we strengthened our
                                        international presence and continued delivering quality products to clients
                                        worldwide.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->
                        <!-- start progress item -->
                        <div class="col-12 p-0 process-step-style-02 wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="process-step-item">
                                <div class="process-step-icon-wrap">
                                    <div
                                        class="process-step-icon text-center border-all border-color-green border-width-2px bg-green alt-font font-weight-500">
                                        2025</div>

                                </div>
                                <div class="process-content last-paragraph-no-margin">

                                    <span class="alt-font d-block font-weight-500 text-medium-gray margin-5px-bottom ">A
                                        Trusted Partner</span>
                                    <p class="w-80 xs-w-100 just">Long Stone International is now a second-generation
                                        family business, trusted by professionals for precision and reliability in over 50
                                        countries.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end progress item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="big-section">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-5 row-cols-sm-2 client-logo-style-05">
                <!-- start client logo item -->
                <div class="col text-center md-margin-30px-bottom sm-margin-20px-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <a><img src="{{ url('assets/frontend/images/Front-images/longstone-ce.png') }}" alt=""></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center md-margin-30px-bottom sm-margin-20px-bottom wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <a><img src="{{ url('assets/frontend/images/Front-images/longstone-chamber.png') }}"
                            alt=""></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center sm-margin-20px-bottom wow animate__fadeIn" data-wow-delay="0.6s">
                    <a><img src="{{ url('assets/frontend/images/Front-images/longstone-fda.png') }}" alt=""></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center wow animate__fadeIn" data-wow-delay="0.8s">
                    <a><img src="{{ url('assets/frontend/images/Front-images/longstone-iso1.png') }}" alt=""></a>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center wow animate__fadeIn" data-wow-delay="0.8s">
                    <a><img src="{{ url('assets/frontend/images/Front-images/longstone-iso2.png') }}" alt=""></a>
                </div>
                <!-- end client logo item -->
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
