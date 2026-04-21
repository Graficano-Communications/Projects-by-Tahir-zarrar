@extends('layouts.master')

@section('meta_title', 'Digital Marketing services| web development | SEO')
@section('meta_description', 'Graficano is a Sialkot-based digital marketing agency serving to fit your imagined concept into reality. We are functioning in web development, digital marketing services, video editing and SEO, etc.')
@section('meta_tags', 'web development, digital marketing services, video editing, SEO services, seo') 

@section('SpecificStyles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}">

@stop

@section('content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade d-none d-md-block d-lg-block" data-ride="carousel" data-interval="5000">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('assets/images/banner.jpg') }}" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('assets/images/for-web-II.jpg') }}" alt="First slide">
                </div>
            </div>

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
   {{-- Mobile version --}}
    <div style="margin-bottom:200px" id="carousel-slider" class="carousel slide carousel-fade d-block d-md-none d-lg-none d-sm-block" data-ride="carousel" data-interval="5000" >
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('assets/images/banners/brand-it-mobile-version.jpg') }}" alt="First slide">
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100" src="{{ asset('assets/images/banners/mobile-version.jpg') }}" alt="First slide">
                </div>
            </div>
            
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

    <!-- Branding section -->
    <section class="brandig-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2  img-main-box">
                    <a href="{{ route('frontportfolios', 'branding') }}">
                        <img src="{{ asset('assets/images/branding/main-2.gif') }}" alt="branding" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('frontportfolios', 'branding') }}">
                        <h1 class="main-heading">
                            Branding
                        </h1>
                    </a>
                    <p class="txt-center-mb">
                        Branding your trade, your idea, your services, or your company we aim to turn your plans into
                        realism to accomplish your aspiration. Providing structure for your visualized thoughts to come up
                        with quality and stability. At Graficano you will feel further evolution of your existing thoughts
                        and ideas and see them converting into reality. We believe a brand is a philosophy and requires
                        perfect execution. We are passionate to assist you in accomplishing features almost about what
                        you're making effort. If you are eager enough to make your name on the top list brand then associate
                        with us for a cooperative full-service exposure.
                    </p>
                    <ul class="tags">
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Logo Design</a>
                            </a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Stationery
                                Design</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Merchandising</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Digital Spout</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Expo Designs</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Product
                                Design</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Brand Manual</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Branding
                                Ideas</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Brand Design</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Branding
                                Strategies</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Brand
                                Development</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Branding
                                Agency</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Branding
                                Expert</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Branding
                                Project</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Brand
                                Identity</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'branding') }}">Branding</a></li>
                    </ul>
                </div>

                <div class="col-md-6 img-grid">
                    <div class="row">
                        <div class="col-md-6 gif-box">
                            <a href="{{ route('frontportfolios', 'branding') }}">
                                <img src="{{ asset('assets/images/branding/vital.gif') }}" alt="branding" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row">
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/branding-2.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/branding-3.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/branding-4.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/branding-5.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/branding-6.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/branding-7.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/barnding-8.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'branding') }}">
                                        <img src="{{ asset('assets/images/branding/barnding-9.png') }}" alt="branding"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- /.branding section -->

    <!-- Printing Section  -->
    <section class="printing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 img-main-box">
                    <a href="{{ route('frontportfolios', 'printing') }}">
                        <img src="{{ asset('assets/images/printing/Printing-Main-Image.png') }}" alt="printing"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('frontportfolios', 'printing') }}">
                        <h1 class="main-heading">
                            Printing
                        </h1>
                    </a>
                    <p class="txt-center-mb">
                        Printing is also one of our core services. We impart printing with high-quality material usage at
                        reasonable prices. . Printing categories incorporate innovative catalogs in line with posters,
                        Broachers, attractive visiting cards, stationery, stickers, penaflex, calendars, Buntings, and flyer
                        printing service. Offset Printing with the latest techniques like letterpress, Foil,  Spot UV with
                        enormous innovative styles. Digital printing for catalogs is also available which is quite handy for
                        small quantity printings.
                    </p>
                    <ul class="tags-pr">
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Catalog</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Posters</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Brochures</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Visiting
                                Cards</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Stationery</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Stickers</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Panaflex</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Calendar</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Buntings</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Flyers</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Prints</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Prints for Sale
                            </a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Print Maker</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Print</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Prints</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Print Making</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Print Studio</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Print Shop</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Print On
                                Prints</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Print
                                Services</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Prints And
                                Patterns</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'printing') }}">Digital
                                Printing</a></li>
                    </ul>
                </div>
                <div class="col-md-6 img-grid">
                    <div class="row">
                        <div class="col-md-6 gif-box">
                            <a href="{{ route('frontportfolios', 'printing') }}">
                                <img src="{{ asset('assets/images/printing/printing.gif') }}" alt="printing"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/Printing-image-2.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/printing-image-3.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/Printing-image-4.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-1">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/Printing-image-5.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sd-box">
                            <div class="row">
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/Printing-image-6.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/Printing-image-7.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/Printing-image-8.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-2">
                                    <a href="{{ route('frontportfolios', 'printing') }}">
                                        <img src="{{ asset('assets/images/printing/Printing-image-9.png') }}" alt="printing"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /.Printing section -->

    <!-- Video Documentries & 3D section  -->
    <section class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 img-main-box">
                    <a href="{{ route('frontportfolios', 'video-3d') }}">
                        <img src="{{ asset('assets/images/video/VIdeo-main-image.png') }}" alt="video_and_3d"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('frontportfolios', 'video-3d') }}">
                        <h1 class="main-heading">
                            Video Documentries & 3D
                        </h1>
                    </a>
                    <p class="txt-center-mb">
                        Graficano is offering documentaries and manufacturing process videos for improving your corporate
                        face. Our team gives importance to flourishing quality <br>documentary culture. All related media
                        and
                        effects like 3D-Rendering, After effects, Kinetic Typography along with post-production facilities
                        will your product service exactly the way you want it.
                    </p>
                    <ul class="tags">
                        <li class="tag"><a
                                href="{{ route('frontportfolios', 'video-3d') }}">Documentaries</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">DVCs</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Animation</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Vlogs</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">3D Rendering
                            </a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Product Blas</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Animation</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Travel</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">filmmaker</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Storytelling</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Nature</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">video</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Photography</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary
                                Film</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary Now
                            </a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary
                                Project</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary
                                Series</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary
                                Style</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary
                                Film
                                Making </a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Reportage</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Black and White
                            </a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Documentary
                                Family</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'video-3d') }}">Short
                                Film</a></a></li>
                    </ul>
                </div>
                <div class="col-md-6 img-grid">
                    <div class="row">
                        <div class="col-md-9 gif-box">
                            <a href="{{ route('frontportfolios', 'video-3d') }}">
                                <img src="{{ asset('assets/images/video/video.gif') }}" alt="video_and_3d" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-md-12 col-6 img-box-3">
                                    <a href="{{ route('frontportfolios', 'video-3d') }}">
                                        <img src="{{ asset('assets/images/video/video-Image-2.png') }}" alt="video_and_3d"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-12 col-6 img-box-3">
                                    <a href="{{ route('frontportfolios', 'video-3d') }}">
                                        <img src="{{ asset('assets/images/video/video-Image-3.png') }}" alt="video_and_3d"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 col-12 img-box-4">
                                    <a href="{{ route('frontportfolios', 'video-3d') }}">
                                        <img src="{{ asset('assets/images/video/video-Image-4.gif') }}" alt="video_and_3d"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-3">
                                    <a href="{{ route('frontportfolios', 'video-3d') }}">
                                        <img src="{{ asset('assets/images/video/video-Image-5.png') }}" alt="video_and_3d"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-3 col-6 img-box-3">
                                    <a href="{{ route('frontportfolios', 'video-3d') }}">
                                        <img src="{{ asset('assets/images/video/video-image-6.gif') }}" alt="video_and_3d"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /.Video Documentries & 3D -->

    <!-- WEB & DIGITAL  -->
    <section class="web-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 img-main-box">
                    <a href="{{ route('frontportfolios', 'web-and-digital') }}">
                        <img src="{{ asset('assets/images/web/Web_main_image.gif') }}" alt="web-and-digital" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('frontportfolios', 'web-and-digital') }}">
                        <h1 class="main-heading">
                            WEB & DIGITAL
                        </h1>
                    </a>
                    <p class="txt-center-mb">
                        Careful digital marketing turns your trade rank to another level. Giving this benefit extends your
                        return to your ventures. Creating locked-in connections with a target audience may be well-founded
                        brand methodologies. We are enthusiastic enough to put hard work to supply our valuable customer's
                        services through a marketing campaign which offer the assistance they compete and generate revenue.
                        Primary services in this department are Shopify, E-commerce, web development, and social media
                        management, SEO, PPC, Facebook Pixel, Youtube Ads, and much more.
                    </p>
                    <ul class="tags-web">
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Websites</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">E-commerce </a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Shopify</a></li>
                        <li class="tag-web"><a href="{{ route('frontportfolios', 'web-and-digital') }}">UI
                                UIX</a></li>
                        <li class="tag-web"><a href="{{ route('frontportfolios', 'web-and-digital') }}">Mobile
                                Apps</a></li>
                        <li class="tag-web"><a href="{{ route('frontportfolios', 'web-and-digital') }}">Social
                                Media</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Campaigns</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Reviews</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Likes</a>
                        </li>
                        <li class="tag-web"><a href="{{ route('frontportfolios', 'web-and-digital') }}">Digital
                                Marketing</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing
                                Strategy</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing
                                Agency</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing
                                Plan</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing
                                Ideas</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing
                                Social</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing
                                Online</a></li>
                        <li class="tag-web"><a href="{{ route('frontportfolios', 'web-and-digital') }}">Web
                                Marketing</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing
                                Digital</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Digital</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Marketing</a></li>
                        <li class="tag-web"><a
                                href="{{ route('frontportfolios', 'web-and-digital') }}">Business</a></li>
                        <li class="tag-web"><a href="{{ route('frontportfolios', 'web-and-digital') }}">Digital
                                Marketing Agency</a></li>
                    </ul>
                </div>
                <div class="col-md-6 img-grid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 img-box-5">
                                    <a href="{{ route('frontportfolios', 'web-and-digital') }}">
                                        <img src="{{ asset('assets/images/web/Web-image-1.gif') }}" alt="web-and-digital"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-5">
                                    <a href="{{ route('frontportfolios', 'web-and-digital') }}">
                                        <img src="{{ asset('assets/images/web/web-image-3.gif') }}" alt="web-and-digital"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-5">
                                    <a href="{{ route('frontportfolios', 'web-and-digital') }}">
                                        <img src="{{ asset('assets/images/web/web-image-4.png') }}" alt="web-and-digital"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 img-box-6">
                                    <a href="{{ route('frontportfolios', 'web-and-digital') }}">
                                        <img src="{{ asset('assets/images/web/web-image-2-new.gif') }}" alt="web-and-digital"
                                            class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-12 img-box-6">
                                    <a href="{{ route('frontportfolios', 'web-and-digital') }}">
                                        <img src="{{ asset('assets/images/web/image-5.gif') }}" alt="web-and-digital"
                                            class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /.WEB & DIGITAL -->

    <!-- PACKAGING  -->
    <section class="packging-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 img-main-box">
                    <a href="{{ route('frontportfolios', 'packaging') }}">
                        <img src="{{ asset('assets/images/packging/Packaging.gif') }}" alt="packaging" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('frontportfolios', 'packaging') }}">
                        <h1 class="main-heading">
                            PACKAGING
                        </h1>
                    </a>
                    <p class="txt-center-mb">
                        Modern-day packaging is what a product needs to be sold and kept safe. . Engineering new packaging
                        for various products is what our team is doing. Motivate with modern thoughts of the design and work
                        on innovating trendy flairs that meet your desires. We are masters to absorb our client's
                        imaginations. If you want top-notch quality printing and paper engineering then Graficano is the
                        best people to bug at. Utilizing trendy techno to give aestheticism to your products.
                    </p>
                    <ul class="tags">
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging
                                Design</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging
                                Products</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging
                                Ideas</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging
                                solutions</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Custom Box</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging</a>
                        </li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Box</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging
                                Unique</a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging On
                                Point </a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging
                                Label
                            </a></li>
                        <li class="tag"><a href="{{ route('frontportfolios', 'packaging') }}">Packaging
                                Illustration</a></li>
                    </ul>
                </div>
                <div class="col-md-6 img-grid">
                    <div class="row">
                        <div class="col-md-6 img-box-7">
                            <a href="{{ route('frontportfolios', 'packaging') }}">
                                <img src="{{ asset('assets/images/packging/packge-Image-1.gif') }}" alt="packaging"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6 img-box-7">
                            <a href="{{ route('frontportfolios', 'packaging') }}">
                                <img src="{{ asset('assets/images/packging/packge-Image-2.gif') }}" alt="packaging"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6 img-box-7">
                            <a href="{{ route('frontportfolios', 'packaging') }}">
                                <img src="{{ asset('assets/images/packging/packge-image-3.png') }}" alt="packaging"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3 col-6 img-box-7">
                            <a href="{{ route('frontportfolios', 'packaging') }}">
                                <img src="{{ asset('assets/images/packging/packge-image-4.png') }}" alt="packaging"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3 col-6 img-box-7">
                            <a href="{{ route('frontportfolios', 'packaging') }}">
                                <img src="{{ asset('assets/images/packging/packge-image-5.gif') }}" alt="packaging"
                                    class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /.PACKAGING -->

    <!-- Photography  -->
    <section class="Photography-section">
        <div class="container">
            <div class="row">
                <div class="col-md-2 img-main-box">
                    <a href="{{ route('frontportfolios', 'photography') }}">
                        <img src="{{ asset('assets/images/photography/Photography-main-image.png') }}" alt="photography"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('frontportfolios', 'photography') }}">
                        <h1 class="main-heading">
                            Photography
                        </h1>
                    </a><a href="{{ route('frontportfolios', 'photography') }}">
                        <p class="txt-center-mb">
                            Render the benefit of photography with a bunch of proficient professional photographers who
                            attempt
                            to include worth in your work reliably. Experienced photography along with the latest technology
                            encompasses professional cameras and lens kits. We provide all kinds of photography services and
                            you
                            never have to rely on stock or borrowed imagery. Our proficient team can alter clients'
                            dissatisfaction by including a captivating point in a photo that can turn it into something that
                            stands out and that shows up your brand’s devotion to quality. Serving you in taking vibrant
                            photos
                            to look back on and retain fresh moments in your life.
                        </p>
                        <ul class="tags-p">
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Product
                                    Photography</a></li>
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Field
                                    Photography</a></li>
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Fashion
                                    Shoot</a></li>
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Photo
                                    manipulations</a></li>
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Post
                                    Editing</a></li>
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Ready for
                                    Print and Digital</a></li>
                            <li class="tag-p"><a
                                    href="{{ route('frontportfolios', 'photography') }}">Photography</a></li>
                            <li class="tag-p"><a
                                    href="{{ route('frontportfolios', 'photography') }}">Photoshoot</a></li>
                            <li class="tag-p"><a
                                    href="{{ route('frontportfolios', 'photography') }}">Photography Everyday</a></li>
                            <li class="tag-p"><a
                                    href="{{ route('frontportfolios', 'photography') }}">Photography Props</a></li>
                            <li class="tag-p"><a
                                    href="{{ route('frontportfolios', 'photography') }}">Fashion</a></li>
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Nature
                                    Photography</a></li>
                            <li class="tag-p"><a href="{{ route('frontportfolios', 'photography') }}">Black and
                                    White Photography</a></li>
                        </ul>
                </div>
                <div class="col-md-6 img-grid">
                    <div class="row">
                        <div class="col-md-6 img-box-8">
                            <a href="{{ route('frontportfolios', 'photography') }}">
                                <img src="{{ asset('assets/images/photography/Photography-image-1.png') }}" alt="photography"
                                    class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 col-6 img-box-8">
                                    <a href="{{ route('frontportfolios', 'photography') }}">
                                        <img src="{{ asset('') }}/assets/images/photography/Photography-image-2.png"
                                            alt="photography" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-8">
                                    <a href="{{ route('frontportfolios', 'photography') }}">
                                        <img src="{{ asset('assets/images/photography/Photography-image-3.png') }}"
                                            alt="photography" class="img-fluid">i>
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-8">
                                    <a href="{{ route('frontportfolios', 'photography') }}">
                                        <img src="{{ asset('assets/images/photography/Photography-image-4.png') }}"
                                            alt="photography" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6 col-6 img-box-8">
                                    <a href="{{ route('frontportfolios', 'photography') }}">
                                        <img src="{{ asset('assets/images/photography/Photography-image-5.png') }}"
                                            alt="photography" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-12 col-12 img-box-8">
                                    <a href="{{ route('frontportfolios', 'photography') }}">
                                        <img src="{{ asset('assets/images/photography/Photography-image-6.png') }}"
                                            alt="photography" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /.Photography -->


    <!-- Clients -->
    <section class="clients-section">
        <div class="container text-center">
            <h1>PEOPLE WHO TRUST US</h1>
            <div class="center slider">
                @foreach ($clients as $client)
                    <div>
                        <img src="{{ asset('images/clients/' . $client->image) }}"
                            onmouseover="hover(this,'{{ $client->back_image }}');"
                            onmouseout="unhover(this,'{{ $client->image }}');" class="img-fluid">
                    </div>
                @endforeach

            </div>
            <a href="{{ route('clients') }}"><button class="btn btn-warning btn-rounded">View All Clients</button></a>
        </div>
    </section>

    <!-- /.Clients -->


@endsection

@section('SpecificScripts')
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".center").slick({
                autoplay: true,
                autoplaySpeed: 1000,
                dots: false,
                infinite: true,
                centerMode: true,
                slidesToShow: 5,
                slidesToScroll: 3
            });

        });
    </script>
    <script type="text/javascript">
        function hover(element, src) {
            element.style.cursor = 'pointer';
            element.setAttribute('src', 'images/clients/' + src);
        }

        function unhover(element, src) {
            element.setAttribute('src', 'images/clients/' + src);
        }
    </script>

    <script>
        $(document).ready(function() {

            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 600) {
                    $(".navbar").addClass("active-navbar");
                    $(".logo").css("height", "36px");
                } else {
                    $(".navbar").removeClass("active-navbar");
                    $(".logo").css("height", "auto");
                }
            });
        });
    </script>
@stop
