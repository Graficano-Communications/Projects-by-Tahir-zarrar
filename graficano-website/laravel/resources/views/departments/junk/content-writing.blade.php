@extends('layouts.master')

@section('meta_title', 'Creative writing | Digital agency')
@section('meta_description',
    'Here are the clients we worked with serving the quality solutions functioning in a
    collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/icons/banners/latest/content-creation.jpg') }}');">
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







@endsection
@section('SpecificScripts')

@stop
