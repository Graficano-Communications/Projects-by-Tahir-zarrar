@extends('layouts.master')

@section('meta_title', 'Design and Illustration | Digital agency')
@section('meta_description',
    'Here are the clients we worked with serving the quality solutions functioning in a
    collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/latest/design-and-illustration.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 position-relative page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-20px-bottom"></h1>
                    <h2
                        class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
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
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">Design and Illustration
                    </h5>
                    <h5
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">Great design is a force for good, a tool for progress, and a catalyst
                            for change.</span>
                        <span class="cd-words-wrapper d-initial p-0">
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Logo development</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Branding</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Icons and illustrations</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Branded pitch decks</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Label and package design</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Layout design</b>
                        </span>
                    </h5>
                    <p>
                        The design and illustration department of our agency is staffed by a team of experienced designers
                        and illustrators who have the skills to translate your ideas into designs that suit your audience,
                        business, or cause; translate them into powerful illustrations that will grab attention, arouse
                        emotions and drive people toward your message. Our extensive experience designing for print, web,
                        apps, and digital media means we can support your corporate branding or campaign with complementary
                        online resources such as microsites, apps, or social accounts.<br><br>
                        We use Illustrator, InDesign, Photoshop, and other software to craft colorful logos and
                        illustrations for your business. We can help you develop a logo that exemplifies the look and feel
                        of your company. So you gain exposure to potential customers.

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
                            <img src="{{ asset('assets/images/icons/design/Logo-development.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Logo development</span>
                            <p>We help businesses create a visual identity that conveys the essence of their brand. They
                                become symbolic of who you are.</p>
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
                            <img src="{{ asset('assets/images/icons/design/Branding.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Branding</span>
                            <p>We design and implement a branding package including logos/elements, graphics, color
                                palettes, typography, and a style guide.</p>
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
                            <img src="{{ asset('assets/images/icons/design/icons-and-illustrations.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Icons and illustrations</span>
                            <p>Our icons and illustrations pack meaning in a small space and Help convey messages on social
                                media, websites, and printed material.</p>
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
                            <img src="{{ asset('assets/images/icons/design/branded-pitch-decks.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                Branded pitch decks</span>
                            <p>We apply your brand to your Keynote, PPT, or Google docs and create a fresh new email
                                signature for you.</p>
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
                            <img src="{{ asset('assets/images/icons/design/label-and-package-design.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Label
                                and package design</span>
                            <p>From the initial concept to the finished product, we create print-ready designs that allow
                                your products to stand out.</p>
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
                            <img src="{{ asset('assets/images/icons/design/Layout-design.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                Layout design</span>
                            <p>We specialize in Layout Design that is professional and stylish. We help you design the
                                visual assets to fit your brand.</p>
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
