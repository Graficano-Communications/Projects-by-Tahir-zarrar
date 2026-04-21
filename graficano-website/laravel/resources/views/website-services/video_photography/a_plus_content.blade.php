
@extends('layouts.master')

@section('meta_title', 'A Plus Content')
@section('meta_description',
    'A Plus Content')
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')

@include('website-services.banner', 
['name' => " A Plus Content ", 
'img' => "assets/images/banners/banner-services.webp"])

<!-- start section -->
<section id="down-section" class="pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
    
            <div class="col-lg-5 col-md-6 position-relative ">
                <img class="border-radius-5px" src="{{asset('assets/images/sub-services/video-photography/a-plus-content.webp')}}"
                    alt="" />
            </div>
            <div class="col-lg-6 col-md-6  sm-margin-30px-bottom offset-lg-1">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray w-90" style="font-size:26px;">A Plus Content   
                </h1>
                <p style="text-align: justify;">
                Boost your brand to new heights by unlocking the power of A-plus content. Our expert team of writers is well known for fulfilling all your requirements with easy, clear and knowledgeable content that connects with your audience. From catchy slogans, taglines, product descriptions and blogs to website content our team of professionals is here to help you. 
                </p>  
                <p style="text-align: justify;">
                 Our user-friendly and attractive content confirms that your message is conveyed properly to the target audience. Allow us to be your a-plus content representative that leaves a lasting impact on your audience.   
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
                                      SEO-Optimized Website Content
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       Engaging Blog Posts
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                         <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                         Engaging Social Media Content
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Persuasive Email Marketing Campaigns
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       Captivating Product Descriptions
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       Informative Whitepapers and eBooks
                                    </li>
                                
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="list-style-02">
                                <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Attention-Grabbing Ad Copy
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Creative Infographics
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                         <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                         Enticing Landing Page Copy
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                       <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                       Entertaining Video Scripts 
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Location Sound Recording
                                    </li>
                                    <li
                                        class=" border-radius-6px margin-20px-bottom last-paragraph-no-margin wow animate__fadeIn">
                                        <i class="fa fa-solid fa-check text-green margin-10px-right"></i>
                                        Interactive Quizzes and Polls 
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

