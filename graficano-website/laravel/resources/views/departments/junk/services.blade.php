@extends('layouts.master')

@section('meta_title', 'Services')
@section('meta_description',
    'Here are the clients we worked with serving the quality solutions functioning in a
    collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')
    <!-- start page title -->
    <section id="multimedia" class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/video-top.jpg') }}');" >
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

<!--Website service-->
<section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/latest/web-and-digital.jpg') }}');" id="web">
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
    <section class="wow animate__fadeIn" id="down-section" id="web">
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


<!--design-->
<!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/latest/design-and-illustration.jpg') }}');" id="design">
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
    <section class="bg-turqious wow animate__fadeIn" >
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


<!--content writing-->
<!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/latest/content-creation.jpg') }}');" id="content">
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
    <section class="wow animate__fadeIn" id="down-section" id="down-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-10 col-lg-10 offset-lg-1 order-lg-1 padding-five-right sm-padding-15px-right wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <h5
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">Content Creation
                    </h5>
                    <h5
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">The well-versed team of writers crafts compelling content with the art
                            of writing </span>
                        <span class="cd-words-wrapper d-initial p-0">
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Creative Writing</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Blog Writing</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Web Content</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Product Description</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Social Media Content</b>
                        </span>
                    </h5>
                    <p>
                        We write stories that matter. Stories to connect you with your customers and partners. Stories that
                        inspire your brand to be better than it was yesterday. Stories that make you see what is possible,
                        what has never been done before, and what can be accomplished!<br><br>
                        To match your brand's tone, we write in a way that feels like you. Our team of content writers knows
                        the ins and outs of writing and has the best possible approach to deliver them.<br><br>
                        Our inbound marketing experts know the value of good source content and its significance in building
                        a solid brand. From creating high-quality content to gaining more traffic through business blogs,
                        our team will make your brand shine bright on the web.
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
                            <img src="{{ asset('assets/images/icons/Content/creative-writing.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Creative Writing</span>
                            <p>Our passion for creative writing sets us apart from other agencies. We create clear and
                                compelling content to “wow” your audience.</p>
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
                            <img src="{{ asset('assets/images/icons/Content/blogs.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Blog Writing
                            </span>
                            <p>We create content for your blog that is engaging, informative, and SEO optimized. We get your
                                blog post done to promote your brand and grow your business.</p>
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
                            <img src="{{ asset('assets/images/icons/Content/web-content.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Web Content</span>
                            <p>Web content that attracts and retains your audience. Create an engaging experience for people
                                while promoting your business, brand, or product.</p>
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
                            <img src="{{ asset('assets/images/icons/Content/product-discription.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                Product Description</span>
                            <p>Get product descriptions that are clear and concise. We provide you with a unique,
                                high-quality description that reflects your product.</p>
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
                            <img src="{{ asset('assets/images/icons/Content/Social-media-content.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Social Media Content</span>
                            <p>
                                Discover the power of content marketing to amplify your social media presence. Let's work
                                together and make it happen!
                            </p>
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
                            <img src="{{ asset('assets/images/icons/Content/Story-building.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                Story Building</span>
                            <p>We write company bios and profiles in a powerful way that gets to the heart of who you are
                                and what your brand stands for.</p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                <!-- end feature box item -->

            </div>
        </div>
    </section>
    <!-- end section -->
<!--printing-->
 <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/latest/printing.jpg') }}');">
        <div class="container" id="printing">
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
                        <span class="d-initial p-0">Printing
                    </h5>
                    <h5
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        <span class="d-initial p-0">We can print anything, anywhere</span>
                        <span class="cd-words-wrapper d-initial p-0">
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Digital Printing</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Flexography</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Offset Printing</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                LED UV</b>
                            <b
                                class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Large Format</b>
                        </span>
                    </h5>
                    <p>
                        Depending on your project, our printing department will take care of all the details. We can handle
                        printing projects from large-scale banners and signs to flyers and business cards. Whether you need
                        something printed on vinyl, paper, or fabric, we'll get it done right!
                    </p>
                    <p
                        class="text-center alt-font cd-headline slide font-weight-500 text-extra-dark-gray line-height-40px margin-40px-bottom">
                        State-of-the-art printing capabilities, ready to hit the streets with you! </p>
                    <p> 
                        We have a wide range of printing capabilities and can print in full color or black and white. We
                        offer different paper options, including Matte Paper, Glossy Paper, and Plastified Paper. We also
                        offer a wide variety of finishing options for your piece: Saddle-stitching (stapling), Perfect
                        Binding (stapling), Saddle-stitching & Perfect Binding Combination (staple & staple), and Spiral
                        Binding (staple).
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

                <!-- start feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                    <div
                        class="feature-box mb-4  bg-white feature-box-shadow padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">
                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/images/icons/Printing/Digital-printing.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Digital Printing</span>
                            <p>
                                Posters and signage ,Labels, newsletters, menus, and letters
                            </p>
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
                            <img src="{{ asset('assets/images/icons/Printing/Flexography.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                Flexography
                            </span>
                            <p>
                                Packaging and labels, Anything with continuous patterns e.g. wallpaper and gift wrap
                            </p>
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
                            <img src="{{ asset('assets/images/icons/Printing/offset-printing.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Offset Printing
                            </span>
                            <p>
                                Books, stationery: business cards, letterheads, envelopes, notepads, and more
                            </p>
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
                            <img src="{{ asset('assets/images/icons/Printing/LED-UV.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray text-gradient-orange-pink-hover d-block margin-5px-bottom font-weight-500">
                                LED UV</span>
                                <p>
                                    Newsletters, posters, and leaflets, Magazines, catalogs, brochures, and prospectuses, Stationery
                                </p>
                        </div>
                        <div class="feature-box-overlay bg-white border-radius-5px"></div>
                    </div>
                </div>
                <!-- end feature box item -->
                <div class="col wow animate__fadeIn" data-wow-delay="0.2s">
                    <div
                        class="feature-box mb-4 feature-box-shadow bg-white padding-twenty-tb padding-twelve-lr xs-padding-fifteen-tb xs-padding-eight-lr">

                        <div class="feature-box-icon">
                            <img src="{{ asset('assets/images/icons/Printing/Large-Format.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">Large
                                Format</span>
                            <p>
                                Large signage e.g. billboards, posters, vinyl banners,  Wallpaper and murals, Floor graphics,Laminating
                            </p>
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
                            <img src="{{ asset('assets/images/icons/Printing/Screen-Printing.png') }}">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span
                                class="text-extra-medium alt-font text-extra-dark-gray d-block margin-5px-bottom font-weight-500">
                                Screen Printing
                            </span>
                            <p>
                                Printing logos and graphics onto clothes, Fabric banners, Posters     
                            </p>
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

<script>
    $(document).ready(function() {
        $('.dropdown-toggle').dropdown();
    });
</script>



@stop
