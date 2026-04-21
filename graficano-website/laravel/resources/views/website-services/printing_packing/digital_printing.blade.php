@extends('layouts.master')
@section('meta_title', ' Digital Printing')
@section('meta_description',
' Digital Printing')
@section('meta_tags', '')
@section('SpecificStyles')
@stop
@section('content')
@include('website-services.banner',
['name' => " Digital Printing  ",
'img' => "assets/images/banners/banner-services.webp"])

<!-- start section -->
<section id="down-section" class="pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 position-relative ">
                <img class="border-radius-5px" src="{{asset('assets/images/sub-services/printing&packing/digital-printing.webp')}}"
                    alt="" />
            </div>
            <div class="col-lg-6 col-md-6  sm-margin-30px-bottom offset-lg-1">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray w-90" style="font-size:26px;">Digital
                    Printing    
                </h1>
                <p style="text-align: justify;">Digital printing allows you to create attractive prints from your designs. We use the latest digital
                    offset printers to ensure that your prints are perfect. We can quickly and accurately print business
                    cards, banners, posters and catalogs. We offer rapid responses and a variety of options that meet
                    your needs.  </p>
                <p style="text-align: justify;">Printing with us is simple and easy, where creativity meets quality. We'll bring your ideas to life
                    with vibrant colors, sharp details, and professional finishes that leave a lasting impression. Allow
                    us to transform your ideas into colorful designs with fresh details. We provide high-quality digital
                    prints that will set your brand apart.  </p>
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
                                        High-Quality Prints 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Fast Turnaround 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Custom Solutions 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Precision Printing 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Time saving practices 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Professional Finishes 
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-style-02">
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Dedicated Support 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Competitive Pricing 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Wide Range of Materials 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Bulk Printing  
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Customization Options 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Consistent Results  
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