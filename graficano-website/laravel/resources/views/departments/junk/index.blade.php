@extends('layouts.master')

@section('meta_title', 'Digital Marketing services| web development | SEO')
@section('meta_description',
'Here are the clients we worked with serving the quality solutions functioning in a
collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')

@section('SpecificStyles')
<style>
    .grid-item {
        margin: 10px;
        /* Adjust the value as per your preference */
    }
</style>

@stop

@section('content')
<section class="py-0 parallax overlap-height" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('assets/images/banners/Service-Banner (1).jpg') }}');">


    <div class="row justify-content-center">
        <div class="col-12 col-md-6 position-relative text-center one-fourth-screen d-flex flex-column justify-content-center sm-h-350px">
            <span class="text-uppercase text-small alt-font letter-spacing-5px text-white
             d-inline-block margin-20px-bottom font-weight-500 sm-margin-10px-bottom">
            </span>
            <h2 class="alt-font text-white font-weight-600 text-uppercase d-block mb-0">
            </h2>
            <div class="down-section text-center"><a href="#down-section" class="section-link"><i class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<div id="multimedia">
    <div class="wow animate__fadeIn mt-5" id="down-section multimedia">
    <div class="container">
        <div class="row ">
            
            <!-- Left Column for Headings -->
            <div class="col-lg-6 wow animate__fadeIn" data-wow-delay="0.2s">
    <h4 class="alt-font cd-headline slide font-weight-800 text-extra-dark-gray line-height-40px margin-40px-bottom" style="margin-bottom: -30px; letter-spacing: 2px;">
    <span class="d-initial pt-2 mt-2">VIDEO &<br> PHOTOGRAPHY</span>
</h4>

    <hr class="pb-3" style="background-color: red; height: 20px; border: none; width: 80%; ">


                <h5 class=" alt-font cd-headline slide font-weight-400 text-extra-dark-gray line-height-40px margin-40px-bottom">
                    
                    <span class="cd-words-wrapper d-initial p-0 font-weight-400">
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                            Photography</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                            Product Commercial</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                            Event Coverage</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                            Documentaries</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                            Animation videos</b>
                    </span>
                </h5>
            </div>
            
            <!-- Right Column for Paragraphs -->
            <div class="col-lg-6 text-dark">
                <p>Capturing moments that narrate your brand's story is our expertise. Our video and photography team collaborates closely with design and editorial experts to breathe life into your brand. From creating engaging content for advertising, digital media, and events to providing visuals for e-commerce platforms like Amazon and eBay, we are your window to the world.</p>

                <p>Explore professional photography, animations, videography, and sound recording with us. Whether it's a music video, live streaming, interviews, or showcasing your office space, our team focuses on innovative and creative approaches to spark your imagination.</p>
            </div>

        </div>
    </div>
    
    <div class="container">
    <div class="row mt-5">
        @foreach($multimediaDepartment as $department)
        <div class="col-12 col-md-6 col-xl-4 wow animate__fadeIn" data-wow-delay="0.2s"> 
            <!-- Adjust the max height for smaller screens -->
            <div class="feature-box mb-4 feature-box-shadow bg-white padding-five-tb padding-six-lr xs-padding-five-tb xs-padding-four-lr" style="max-height: calc(120px + 1em);">
                <div class="feature-box-icon">
                    <img src="{{ asset('images/departments/' . $department->image) }}" style="width: 70px; height: 70px; object-fit: cover;">
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                    <!-- Add Bootstrap class for responsive font size -->
                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-3px-bottom font-weight-500 fs-md-0.9rem">{{ $department->name }}</span>
                </div>
                <div class="feature-box-overlay bg-white border-radius-5px"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>






</div>

    <!-- end section -->

    <!-- start section -->
    <div class="bg-turqiouses wow animate__fadeIn">

        
        <section class="py-0">
            <div class="container-fluid">
                <h3 class="text-dark text-center pt-3"><strong>Executions</strong></h3>
                <div class="row">
                    <div class="col-12 filter-content px-5 pb-2">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                            <li class="grid-sizer"></li>
                            @foreach($multimediaProjects as $project)
                            <!-- start portfolio item -->
                            <li class="grid-item wow animate__fadeIn px-1" data-wow-delay="0.2s">
                                <a href="{{ $project->url }}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-black">


                                            <img src="{{ asset('images/projects/' . $project->image) }}" "
                                                        class=" img-fluid" alt="{{ $project->name }}">

                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-yellow absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <h6 class="alt-font text-white font-weight-500 d-block text-uppercase mb-0">
                                                    {{ $project->name }}
                                                </h6>
                                                <div class="text-medium d-block text-white opacity-5 text-uppercase">
                                                    {{ $project->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>
<hr>
<!--web section-->

<!-- start section -->
<div id="web">
    <div class="wow animate__fadeIn mt-5" id="down-section">
    <div class="container">
        <div class="row ">

            <!-- Left Column for Headings -->
            <div class="col-lg-6 wow animate__fadeIn" data-wow-delay="0.2s">
                <h4 class="alt-font cd-headline slide font-weight-800 text-extra-dark-gray line-height-40px margin-40px-bottom" style="margin-bottom: -25px;letter-spacing: 2px; ">
                    <span class="d-initial pt-2 mt-2">Web & Digital</span>
                </h4>
                <hr class="pb-2" style="background-color: red; height: 20px; border: none; width: 80%;">

                <h5 class="alt-font cd-headline slide font-weight-400 text-extra-dark-gray line-height-40px margin-40px-bottom">
                   
                    <span class="cd-words-wrapper d-initial p-0 font-weight-400">
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                            Website Design</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                            Web Development</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                            UI/UX design</b>
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                            E-Commerce</b>
                    </span>
                </h5>
            </div>

            <!-- Right Column for Paragraphs -->
            <div class="col-lg-6 text-dark">
                <p>Your online presence should reflect your business, with the website playing a central role. At Graficano, we craft visually stunning websites that are easy to navigate and effective in driving business growth. Our services encompass Website Design, Web Development, UI/UX design, and E-Commerce solutions.</p>

                <p>We're not just building websites; we're constructing a seamless brand experience across various platforms. Our professional team, including web designers, developers, SEO specialists, and marketing experts, collaborates seamlessly to reflect your brand values. We help you create a positive online presence with our SEO, PPC, SMO, and Reputation Management services.</p>
            </div>

        </div>
    </div>
    <div class="container">
    <div class="row mt-5 ">
        @foreach($webDepartment as $department)
        <div class="col-12 col-md-6 col-xl-4 wow animate__fadeIn" data-wow-delay="0.2s">
            <!-- Adjust the max height for smaller screens -->
            <div class="feature-box mb-4 feature-box-shadow bg-white padding-five-tb padding-six-lr xs-padding-five-tb xs-padding-four-lr" style="max-height: calc(120px + 1em);">
                <div class="feature-box-icon">
                    <img src="{{ asset('images/departments/' . $department->image) }}" style="width: 70px; height: 70px; object-fit: cover;">
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                    <!-- Add Bootstrap class for responsive font size -->
                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-3px-bottom font-weight-500 fs-md-0.9rem">{{ $department->name }}</span>
                </div>
                <div class="feature-box-overlay bg-white border-radius-5px"></div>
            </div>
        </div>
        @endforeach
    </div>




</div>


    <!-- start section -->
    <div class="bg-turqiouses wow animate__fadeIn">
        
        <div>
            <div class="container-fluid">
            <h3 class="text-dark text-center pt-3"><strong>Executions</strong></h3>
                <div class="row">
                    <div class="col-12 filter-content px-5 pb-2">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                            <li class="grid-sizer"></li>
                            @foreach($webProjects as $project)
                            <!-- start portfolio item -->
                            <li class="grid-item wow animate__fadeIn px-1" data-wow-delay="0.2s">
                                <a href="{{ $project->url }}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-black">


                                            <img src="{{ asset('images/projects/' . $project->image) }}" "
                                                        class=" img-fluid" alt="{{ $project->name }}">

                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-yellow absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <h6 class="alt-font text-white font-weight-500 d-block text-uppercase mb-0">
                                                    {{ $project->name }}
                                                </h6>
                                                <div class="text-medium d-block text-white opacity-5 text-uppercase">
                                                    {{ $project->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<hr>
<!--design section-->
<!-- start page title -->
<div id="design">

    <!-- start section -->
    <div class="wow animate__fadeIn mt-5" id="down-section">
    <div class="container">
        <div class="row ">

            <!-- Left Column for Headings -->
            <div class="col-lg-6 wow animate__fadeIn" data-wow-delay="0.2s">
                <h4 class="alt-font cd-headline slide font-weight-800 text-extra-dark-gray line-height-40px margin-40px-bottom" style="margin-bottom: -25px;letter-spacing: 2px;">
                    <span class="d-initial pt-2 mt-2">Design &<br> Illustration</span>
                </h4>
                <hr class="pb-3" style="background-color: red; height: 20px; border: none; width: 80%; ">

                <h5 class="alt-font cd-headline slide font-weight-400 text-extra-dark-gray line-height-40px margin-40px-bottom">
                    
                    <span class="cd-words-wrapper d-initial p-0 font-weight-400">
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Logo development</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Branding</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Icons and illustrations</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Branded pitch decks</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Label and package design</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Layout design</b>
                        
                    </span>
                </h5>
            </div>

            <!-- Right Column for Paragraphs -->
            <div class="col-lg-6 text-dark">
                <p>Design is a catalyst for good, progress, and change. In our design and illustration department, experienced professionals translate your ideas into realistic designs that resonate with your audience. From logos, branding, and icons to pitch decks and package design, we create visuals that capture your attention and convey your message.</p>

                <p>We create vibrant logos and illustrations using Illustrator, InDesign, Photoshop, and other tools. Our extensive experience in print, web, apps, and digital media ensures we can support your corporate branding or campaign with complimentary online resources.</p>
            </div>

        </div>
    </div>
   <div class="container">
    <div class="row mt-5">
        @foreach($designDepartment as $department)
        <div class="col-12 col-md-6 col-xl-4 wow animate__fadeIn" data-wow-delay="0.2s">
            <!-- Adjust the max height for smaller screens -->
            <div class="feature-box mb-4 feature-box-shadow bg-white padding-five-tb padding-six-lr xs-padding-five-tb xs-padding-four-lr" style="max-height: calc(120px + 1em);">
                <div class="feature-box-icon">
                    <img src="{{ asset('images/departments/' . $department->image) }}" style="width: 70px; height: 70px; object-fit: cover;">
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                    <!-- Add Bootstrap class for responsive font size -->
                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-3px-bottom font-weight-500 fs-md-0.9rem">{{ $department->name }}</span>
                </div>
                <div class="feature-box-overlay bg-white border-radius-5px"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>


</div>

    <!-- end section -->

    <!-- start section -->
    <div class="bg-turqiouses wow animate__fadeIn">
        
        <div>
            <div class="container-fluid ">
            <h3 class="text-dark text-center pt-3"><strong>Executions</strong></h3>
                <div class="row">
                    <div class="col-12 filter-content px-5 pb-2">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                            <li class="grid-sizer"></li>
                            @foreach($designProjects as $project)
                            <!-- start portfolio item -->
                            <li class="grid-item wow animate__fadeIn px-1 py-1" data-wow-delay="0.2s">
                                <a href="{{ $project->url }}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-black">


                                            <img src="{{ asset('images/projects/' . $project->image) }}" "
                                                        class=" img-fluid" alt="{{ $project->name }}">

                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-yellow absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <h6 class="alt-font text-white font-weight-500 d-block text-uppercase mb-0">
                                                    {{ $project->name }}
                                                </h6>
                                                <div class="text-medium d-block text-white opacity-5 text-uppercase">
                                                    {{ $project->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<hr>
<!--content creation-->

<!-- start section -->
<div id="content">
    <div class="wow animate__fadeIn mt-5" id="down-section">
    <div class="container">
        <div class="row ">

            <!-- Left Column for Headings -->
            <div class="col-lg-6 wow animate__fadeIn" data-wow-delay="0.2s">
                <h4 class="alt-font cd-headline slide font-weight-800 text-extra-dark-gray line-height-40px margin-40px-bottom" style="margin-bottom: -25px;letter-spacing: 2px;">
                    <span class="d-initial pt-2 mt-2">Content Creation</span>
                </h4>
                <hr class="pb-3" style="background-color: red; height: 20px; border: none; width: 80%;">

                <h5 class="alt-font cd-headline slide font-weight-400 text-extra-dark-gray line-height-40px margin-40px-bottom">
                    
                    <span class="cd-words-wrapper d-initial p-0 font-weight-400">
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Creative Writing</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Blog Writing</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Web Content</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Product Description</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Social Media Content</b>
                    </span>
                </h5>
            </div>

            <!-- Right Column for Paragraphs -->
            <div class="col-lg-6 text-dark">
                <p>Our team of writers excels in crafting compelling content. From Creative Writing and Blog Writing to Web Content, Product Descriptions, and Social Media Content, we tell stories that matter.</p>

                <p>We write in a way that resonates with you, matching your brand's tone. Our content writers understand the intricacies of writing and employ the best approaches. With inbound marketing experts on board, we emphasize the value of good source content to make your brand shine on the web.</p>
            </div>

        </div>
    </div>
    <div class="container">
    <div class="row mt-5">
        @foreach($contentDepartment as $department)
        <div class="col-12 col-md-6 col-xl-4 wow animate__fadeIn" data-wow-delay="0.2s">
            <!-- Adjust the max height for smaller screens -->
            <div class="feature-box mb-4 feature-box-shadow bg-white padding-five-tb padding-six-lr xs-padding-five-tb xs-padding-four-lr" style="max-height: calc(120px + 1em);">
                <div class="feature-box-icon">
                    <img src="{{ asset('images/departments/' . $department->image) }}" style="width: 70px; height: 70px; object-fit: cover;">
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                    <!-- Add Bootstrap class for responsive font size -->
                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-3px-bottom font-weight-500 fs-md-0.9rem">{{ $department->name }}</span>
                </div>
                <div class="feature-box-overlay bg-white border-radius-5px"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>


</div>

    <!-- end section -->

    <!-- start section -->
    <div class="bg-turqiouses wow animate__fadeIn">
    
        
        <div>
            <div class="container-fluid">
            <h3 class="text-dark text-center pt-3"><strong>Executions</strong></h3>
                <div class="row">
                    <div class="col-12 filter-content px-5 pb-2 ">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                            <li class="grid-sizer"></li>
                            @foreach($contentProjects as $project)
                            <!-- start portfolio item -->
                            <li class="grid-item wow animate__fadeIn px-1" data-wow-delay="0.2s">
                                <a href="{{ $project->url }}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-black">


                                            <img src="{{ asset('images/projects/' . $project->image) }}" "
                                                        class=" img-fluid" alt="{{ $project->name }}">

                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-yellow absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <h6 class="alt-font text-white font-weight-500 d-block text-uppercase mb-0">
                                                    {{ $project->name }}
                                                </h6>
                                                <div class="text-medium d-block text-white opacity-5 text-uppercase">
                                                    {{ $project->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<hr>
<!-- start page title -->

<!-- end page title -->
<!-- start section -->
<div id="printing">
    <div class="wow animate__fadeIn mt-5" id="down-section">
    <div class="container">
        <div class="row ">

            <!-- Left Column for Headings -->
            <div class="col-lg-6 wow animate__fadeIn" data-wow-delay="0.2s">
                <h4 class="alt-font cd-headline slide font-weight-800 text-extra-dark-gray line-height-40px margin-40px-bottom" style="margin-bottom: -25px;letter-spacing: 2px;">
                    <span class="d-initial pt-2 mt-2">Printing <br>& Packaging</span>
                </h4>
                <hr class="pb-3" style="background-color: red; height: 20px; border: none; width: 80%; ">

                <h5 class="alt-font cd-headline slide font-weight-400 text-extra-dark-gray line-height-40px margin-40px-bottom">
                    
                    <span class="cd-words-wrapper d-initial p-0 font-weight-400">
                        <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px is-visible">
                                Digital Printing</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Flexography</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Offset Printing</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                LED UV</b>
                            <b class="text-gradient-light-purple-light-orange border-width-2px border-bottom border-gradient-light-purple-light-orange letter-spacing-minus-1px">
                                Large Format</b>
                    </span>
                </h5>
            </div>

            <!-- Right Column for Paragraphs -->
            <div class="col-lg-6 text-dark">
                <p>Print anything, anywhere—that's our printing department's promise. From Digital Printing and Flexography to Offset Printing, LED UV, and Large Format, we handle all the details for your printing projects.</p>

                <p>We offer a full range of signage services, including banners, signs, and flyers. Our state-of-the-art printing capabilities are ready to hit the streets with you. Choose from various paper options and finishing styles, including saddle stitching, Perfect Binding, and Spiral Binding, to make your printed materials stand out.</p>
            </div>

        </div>
    </div>
    <div class="container">
    <div class="row mt-5">
        @foreach($printingDepartment as $department)
        <div class="col-12 col-md-6 col-xl-4 wow animate__fadeIn" data-wow-delay="0.2s">
            <!-- Adjust the max height for smaller screens -->
            <div class="feature-box mb-4 feature-box-shadow bg-white padding-five-tb padding-six-lr xs-padding-five-tb xs-padding-four-lr" style="max-height: calc(120px + 1em);">
                <div class="feature-box-icon">
                    <img src="{{ asset('images/departments/' . $department->image) }}" style="width: 70px; height: 70px; object-fit: cover;">
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                    <!-- Add Bootstrap class for responsive font size -->
                    <span class="text-extra-medium alt-font text-extra-dark-gray d-block margin-3px-bottom font-weight-500 fs-md-0.9rem">{{ $department->name }}</span>
                </div>
                <div class="feature-box-overlay bg-white border-radius-5px"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>


</div>


    <!-- start section -->
    <div class="bg-turqiouses wow animate__fadeIn">
       
        <div>
            <div class="container-fluid">
            <h3 class="text-dark text-center pt-3"><strong>Execution</strong></h3>
                <div class="row">
                    <div class="col-12 filter-content px-5 pb-2">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col text-center">
                            <li class="grid-sizer"></li>
                            @foreach($printingProjects as $project)
                            <!-- start portfolio item -->
                            <li class="grid-item wow animate__fadeIn px-1" data-wow-delay="0.2s">
                                <a href="{{ $project->url }}">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-black">


                                            <img src="{{ asset('images/projects/' . $project->image) }}" "
                                                        class=" img-fluid" alt="{{ $project->name }}">

                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-yellow absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <h6 class="alt-font text-white font-weight-500 d-block text-uppercase mb-0">
                                                    {{ $project->name }}
                                                </h6>
                                                <div class="text-medium d-block text-white opacity-5 text-uppercase">
                                                    {{ $project->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->


@endsection
@section('SpecificScripts')

@stop