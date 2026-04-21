@extends('layouts.master')

@section('meta_title', 'Multimedia | Digital agency')
@section('meta_description',
    'Here are the clients we worked with serving the quality solutions functioning in a
    collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/video-top.jpg') }}');">
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
                        <span class="d-initial p-0">VIDEO & PHOTOGRAPHY
                    </h5>

                    <h5
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">Bring your story to life </span>
                        <span class="cd-words-wrapper d-initial p-0">
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Photography</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Product Commercial</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Event Coverage</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Documentaries</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Animation videos</b>
                        </span>
                    </h5>
                    <p>Our video and photography department works closely with our editorial and design teams to bring your brand's
                        story to life. We create compelling content for advertising, digital and print media, events, and
                        other marketing channels. We provide content for e-commerce websites, amazon, and eBay listings.
                        <br><br>
                    </p>
                    <p
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        Artists who love to see the world through an open lens.</p>
                    <p>

                        We offer professional photography, animations, videography, sound recording, and high-caliber
                        services for your music video, video production, live streaming, interviews, location shoot of your
                        office buildings, and all other media services you can imagine! Our focus is on establishing
                        innovative and creative approaches that capture your imagination.
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
                            <img src="{{ asset('assets/images/icons/Multimedia/photography.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Photography</span>
                            <p>With professional photographers, a skillful eye for lighting, and an experienced retouching
                                team, we create both beautiful and professional images.</p>
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
                            <img src="{{ asset('assets/images/icons/Multimedia/Product-Commercial.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Product
                                Commercial</span>
                            <p>Make your product stand out with a professional commercial or video. We are here to help you
                                tell your story and sell your brand. Contact us today!</p>
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
                            <img src="{{ asset('assets/images/icons/Multimedia/Event-Coverage.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Event
                                Coverage</span>
                            <p>Always ready to cover your next big event. Whether a wedding, party, or corporate gathering,
                                we capture your event for you.</p>
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
                            <img src="{{ asset('assets/images/icons/Multimedia/Animation-videos.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">Animation
                                Videos</span>
                            <p>Our expertise includes all types of animations, including logo videos, product videos,
                                explainer videos, and much more. We do it all!</p>
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
                            <img src="{{ asset('assets/images/icons/Multimedia/Documentaries.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Documentaries</span>
                            <p>Raising the bar on cinema-quality documentaries. Beyond the camera, we create cinematic experiences that tell compelling stories.</p>
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
                            <img src="{{ asset('assets/images/icons/Multimedia/studio-and-sound-services.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
								Studio & Sound Services</span>
                            <p>We offer sound services from recording studios to mastering and mixing. The right mix of creativity and technical know-how is what sets us apart.</p>
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
