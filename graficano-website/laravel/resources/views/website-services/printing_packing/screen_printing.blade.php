@extends('layouts.master')
@section('meta_title', 'Screen Printing')
@section('meta_description',
'Screen Printing')
@section('meta_tags', '')
@section('SpecificStyles')
@stop
@section('content')
@include('website-services.banner',
['name' => "Screen Printing  
",
'img' => "assets/images/banners/banner-services.webp"])


<!-- start section -->
<section id="down-section" class="pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 position-relative ">
                <img class="border-radius-5px" src="{{asset('assets/images/sub-services/printing&packing/screen-pinting.webp')}}"
                    alt="" />
            </div>
            <div class="col-lg-6 col-md-6  sm-margin-30px-bottom offset-lg-1">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray w-90" style="font-size:26px;">Screen Printing  
                </h1>
                <p style="text-align: justify;">Screen printing is a flexible technique that helps designs to be printed on many surfaces, including fabrics, plastics and other substrates. Our screen-printing services provide an affordable solution to bring your creative ideas to life with clarity and bright colors. 
                <p style="text-align: justify;"> With a constant commitment to accuracy and quality, we take great honor in delivering screen printing results that not only promote your brand but also leave a lasting impression on your target audience. Allow us to transform your designs into attractive pictures that set you apart in the market. 
                </p>
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
                                        Custom Apparel Printing 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Promotional Item Printing 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Signage and Banner Printing 

                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Event Merchandise Printing 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Team Uniform Printing 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Retail Product Printing 


                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Corporate Gift Printing 


                                    </li>
                          
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-style-02">
                                <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Artwork Reproduction Printing 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Packaging Printing 


                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Industrial Application Printing 


                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Specialty Material Printing 

                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Large Format Printing 


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
        <div class="overlap-section">
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