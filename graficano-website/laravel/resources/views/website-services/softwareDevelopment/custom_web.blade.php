
@extends('layouts.master')

@section('meta_title', 'Custom Web Design')
@section('meta_description',
    'Custom Web Design')
@section('meta_tags', '')
<meta name="robots" content="noindex, nofollow" />
@section('content')

@include('website-services.banner', 
['name' => "Custom Web Design", 
'img' => "assets/images/banners/banner-services.webp"])
<!-- start section -->
<section id="down-section" class="pt-0">
    <div class="container">

        <div class="row align-items-center justify-content-center">
    
            <div class="col-lg-5 col-md-6 position-relative ">
                           <img class="border-radius-5px" src="{{asset('assets/images/sub-services/web/Software-Development.webp')}}"
                    alt="" />
            </div>
            <div class="col-lg-6 col-md-6  sm-margin-30px-bottom offset-lg-1">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray w-90" style="font-size:26px;">   Custom Web Design   
                </h1>
                <p style="text-align: justify;"> You are welcome to the online world of your identity. We are WordPress website designers
                     and front-end developers ready to assist you in realizing your digital vision. We adapt 
                     our project management services to fit your needs, keeping you in mind. You'll receive 
                     detailed campaign reports throughout the entire process so you can see our progress. </p>

                 <p style="text-align: justify;"> Our services go beyond design. They include content writing and logo design. Also, video production,
                     analysis of websites, hosting, Shopify integration, API integration and website maintenance. We can
                      improve your web presence and drive results with a website. </p>

            </div>

      
            <div class="col-12 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
            
                <div
                    class="bg-light-gray  h-100 feature-box-left-icon feature-box-dark-hover padding-3-half-rem-tb padding-4-rem-lr sm-no-padding-lr wow animate__flipInX ">
              
                    <div class="feature-box-content last-paragraph-no-margin">

                        <div class="row">
                            <div class="col-6">
                                <ul class="list-style-02 ">
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                      <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                               Custom Website Design
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       Responsive Website Development
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                         <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                         E-commerce Website Development
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Mobile App Design and Development
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       User Experience (UX) Design
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       User Interface (UI) Design
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Website Redesign and Optimization
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Content Management System (CMS) Integration
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-style-02">
                             
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                         <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                         Search Engine Optimization (SEO) Services 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       Website Analytics and Reporting
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Website Security and Maintenance
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Website Hosting and Domain Management
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        API Integration and Customization
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Online Store Setup and Management
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Social Media Integration and Marketing
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="overflow-visible  big-section " style="padding:55px 2px !important; ">
    <div class="container">
        <div class="overlap-sections">
            <div class="bg-neon-orange border-radius-6px padding-4-half-rem-tb padding-4-rem-lr sm-no-padding-lr wow animate__pulse"
                style="background-image: url(https://lithohtml.themezaa.com/images/home-elerning-bg-03.png);">
                <div class="row align-items-center justify-content-between">

                    <div class="col-xl-4 text-center text-xl-start lg-margin-40px-bottom">
                        <span class="text-extra-medium alt-font text-white">Get in touch !!</span>
                        <h6 class="alt-font font-weight-600 text-white letter-spacing-minus-1-half m-0">
                            Want to get this service ?</h6>
                    </div>
          
                    <div class="col-lg-3 text-center">
                        <a href="/contact-us"
                            class="btn btn-medium btn-dark-gray btn-fancy btn-round-edge section-link">contact us </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end section -->
@endsection

