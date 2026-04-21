@extends('layouts.master')

@section('meta_title', 'Web & Digital | Digital agency')
@section('meta_description',
    'Here are the clients we worked with serving the quality solutions functioning in a
    collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/latest/web-and-digital.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-20px-bottom"></h1>
                    <h2
                        class="text-uppercase text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                       </h2>
                </div>
                <div class="down-section text-center"><a href="#down-section" class="section-link"><i
                            class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="wow animate__fadeIn" id="down-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-10 col-lg-10 offset-lg-1 order-lg-1 padding-five-right sm-padding-15px-right wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <h5
                        class="text-center text-uppercase alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">Web & Digital
                    </h5>
                    <h5
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">Visually appealing websites, easy to navigate and use, and effective in
                            driving business growth. </span>
                        <span class="cd-words-wrapper d-initial p-0">
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Website Design</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Web Development</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                UI/UX design</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                E-Commerce</b>
                        </span>
                    </h5>
                    <p>
                        Your website does not exist in a vacuum. A living, breathing extension of your business needs to
                        construct with care and consideration that’s what we do at GRAFICANO. We design, build and market
                        websites that work for our clients.<br><br>
                        We deliver websites that are intuitive, and user-friendly. Our projects provide seamless brand
                        experiences across multiple platforms. We call it: One Brand. One Story. Many Platforms.<br><br>
                        Our team of professionals includes web designers, web developers, SEO specialists, and marketing
                        experts, working together as one well-coordinated team to help you reflect your brand values and
                        increase sales opportunities online with our SEO, PPC, SMO, and Reputation management services.

                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="bg-turqious wow animate__fadeIn">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                    <div
                        class="feature-box mb-4 feature-box-shadow bg-white padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">

                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/images/icons/web/web-design.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Website
                                Design</span>
                            <p>We design websites that reflect your company's image. We pay careful attention to each detail
                                throughout the process – from initial design to completion.</p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                    <div
                        class="feature-box mb-4  bg-white feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/images/icons/web/web-development.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Web Development</span>
                            <p>Developed from scratch and ready for you to add content. Represent your brand professionally, With our web development services.</p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                    <div
                        class="feature-box mb-4  bg-white feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/images/icons/web/UX-UI.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                UI/UX design</span>
                            <p>Excellent UI/UX designs to increase conversion rates, ensuring that your customers are
                                interacting with your business the way you intend.</p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                    <div
                        class="feature-box mb-4  bg-white feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/images/icons/web/E-commerce.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                E-Commerce</span>
                            <p>We build beautiful and functional e-commerce stores on Shopify, WordPress, and WooCommerce to
                                improve your brand’s online presence.</p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                <!-- end feature box item -->
				 <!-- start feature box item -->
				 <div class="col wow animate__fadeIn" data-wow-delay="0.4s">
                    <div
                        class="feature-box mb-4  bg-white feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/images/icons/web/Digital-Marketing.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                Digital Marketing</span>
                            <p>We get you and your business noticed with a complete range of SEO services, including keyword research and analysis, web copywriting, and social media management.</p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                <!-- end feature box item -->

            </div>
        </div>
    </section>
    <!-- end section -->







@endsection
@section('SpecificScripts')

@stop
