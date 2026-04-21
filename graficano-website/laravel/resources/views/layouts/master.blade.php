<!doctype html>
<html class="no-js agntix-dark" lang="zxx">

<head>
    <title>@yield('meta_title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_tags')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Graficano">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/front-images/favicon.png') }}" />



    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" defer />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" defer />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}" defer />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" defer />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}" defer />
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}" defer />
    <link rel="stylesheet" href="{{ asset('assets/css/atropos.min.css') }}" defer />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" defer />

    <meta name="google-site-verification" content="G5Ktm-tsF-blm35BWpkIaeEUdWBNB_TC9C4PiTODbj4" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="canonical" href="{{ url()->current() }}">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Graficano Communications",
  "alternateName": "Graficano",
  "url": "https://www.graficano.com/",
  "logo": "https://www.graficano.com/assets/images/footer-Logo.webp",
  "sameAs": [
    "https://www.facebook.com/graficanodotcom/",
    "https://www.instagram.com/graficano_/",
    "https://www.youtube.com/channel/UCnv5OpxDaEy10URFunt2pJA",
    "https://www.linkedin.com/company/graficano",
    "https://www.pinterest.com.au/graficanocommunication/boards/"
  ]
}
</script>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Graficano",
  "image": "https://www.graficano.com/assets/images/footer-Logo.webp",
  "@id": "",
  "url": "https://www.graficano.com",
  "telephone": "+92 312 9320163",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "27 Durham drive Dix Hills",
    "addressLocality": "Durham",
    "addressRegion": "NY",
    "postalCode": "11746",
    "addressCountry": "US"
  } ,
  "sameAs": [
    "https://www.facebook.com/graficanodotcom/",
    "https://www.instagram.com/graficano_/",
    "https://www.youtube.com/channel/UCnv5OpxDaEy10URFunt2pJA",
    "https://www.linkedin.com/company/graficano",
    "https://www.pinterest.com.au/graficanocommunication/boards/"
  ] 
}
</script>


    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "1. What services do you offer?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We offer digital marketing, social media marketing (SMM), design & illustration, software development, video & photography, and printing & packaging services."
    }
  },{
    "@type": "Question",
    "name": "How long until I see results from your services?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "SEO may take a few months, while PPC ads and social media campaigns can show faster results."
    }
  },{
    "@type": "Question",
    "name": "How much do your services cost?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Pricing depends on the services and scope. After understanding your needs, we’ll provide a customized quote."
    }
  },{
    "@type": "Question",
    "name": "What industries do you serve?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We work across various industries, including retail, healthcare, real estate, technology, and more."
    }
  },{
    "@type": "Question",
    "name": "Do you offer ongoing support after completing a project?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes, we offer ongoing support and maintenance services."
    }
  }]
}
</script>





    <style>
        .tp-megamenu-wrapper {
            max-height: 400px;
            /* jitni height chahiye set kar lo */
            overflow-y: auto;
            /* vertical scroll enable */
            overflow-x: hidden;
            /* horizontal scroll disable */
            scrollbar-width: thin;
            /* firefox ke liye slim scrollbar */
        }

        /* Chrome & Edge ke liye custom scrollbar */
        .tp-megamenu-wrapper::-webkit-scrollbar {
            width: 6px;
        }

        .tp-megamenu-wrapper::-webkit-scrollbar-thumb {
            background: #999;
            border-radius: 10px;
        }

        .tp-megamenu-wrapper::-webkit-scrollbar-track {
            background: transparent;
        }

        /* Custom styles for the translate dropdown */
        #google_translate_element select {
            background: #fdce07;
            /* Dropdown background */
            color: #333;
            /* Dropdown text color */
            border: 1px solid #ccc;
            /* Border color */
            padding: 5px;
            /* Padding inside the dropdown */
            border-radius: 5px;
            /* Rounded corners */
            font-size: 14px;
            /* Font size */
            font-family: Arial, sans-serif;
            /* Font family */
            margin-left: 10px;
            /* Space from other elements */
        }

        /* Dropdown hover effect */
        #google_translate_element select:hover {
            background: #e1e1e1;
            /* Background color on hover */
        }

        /* Dropdown focus effect */
        #google_translate_element select:focus {
            outline: none;
            /* Remove default focus outline */
            box-shadow: 0 0 5px rgba(81, 203, 238, 1);
            /* Custom focus shadow */
        }

        /* Hide the google logo */
        .goog-logo-link {
            display: none !important;
        }

        /* Hide the google translate badge */
        .goog-te-gadget {
            color: transparent !important;
        }

        /* Hide original text */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            /* Reverse the order of the stars */
            font-size: 0;
            /* Remove the space between the elements */
        }

        .rating input[type="radio"] {
            display: none;
            /* Hide the radio buttons */
        }

        .rating label {
            font-size: 30px;
            color: rgba(187, 183, 183, 0.726);
            /* Empty star color */
            margin: 0 2px;
            cursor: pointer;
        }

        .rating label:before {
            content: "\2605";
            /* Unicode character for filled star */
        }

        .rating input[type="radio"]:checked~label:before {
            content: "\2606";
            /* Unicode character for empty star */
            color: #FDCE07;
            /* Filled star color */
        }
    </style>

</head>


<body class="tp-magic-cursor black-bg-4">
    <!-- Begin magic cursor -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- End magic cursor -->

    <!-- preloader -->

    <!-- preloader -->
    <!-- <div id="preloader">
      <div class="preloader">
        <span></span>
        <span></span>
      </div>
    </div> -->
    <!-- preloader end  -->
    <!-- preloader end  -->

    <!-- back to top start -->
    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->
    <!-- back to top end -->

    <!-- header area start -->

    <!-- header area start -->
    <div id="header-sticky"
        class="tp-header-area tp-header-inner-style header-inner-white tp-header-ptb tp-header-blur sticky-black-bg header-transparent mt-30">
        <div class="container container-1750">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-6 col-6">
                    <div class="tp-header-logo">
                        <a href="{{ route('index') }}">
                            <img data-width="200" class="logo-white"
                                src="{{ asset('assets/img/front-images/graficano.png') }}" alt="" />
                            <img data-width="200" class="logo-black d-none"
                                src="{{ asset('assets/img/front-images/graficano-black.png') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 d-none d-xl-block">
                    <div class="tp-header-box text-center">
                        <div class="tp-header-menu tp-header-dropdown dropdown-black-bg">
                            <nav class="tp-mobile-menu-active">
                                <ul>
                                    <li>
                                        <a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('team') }}">Our Team</a>
                                    </li>
                                    @php
                                        use App\Service as AppService;
                                        use App\SubService;

                                        // Fetch all services with their associated sub-services

                                        $services = AppService::with('subServices')->orderBy('sequence')->get();
                                    @endphp
                                    <li class="has-dropdown">
                                        <a href="#">Services</a>
                                        <div class="tp-megamenu-wrapper mega-menu megamenu-black-bg">
                                            <div class="row gx-0">
                                                @foreach ($services as $index => $service)
                                                    <div class="col-xl-2">
                                                        <div class="tp-megamenu-list">
                                                            <h4 class="tp-megamenu-title">
                                                                <a
                                                                    href="{{ route('service.show', $service->slug) }}">{{ $service->name }}</a>
                                                            </h4>
                                                            <ul>
                                                                @foreach ($service->subServices as $subService)
                                                                    <li>
                                                                        <a
                                                                            href="{{ route('sub-service.show', [$service->slug, $subService->slug]) }}">{{ $subService->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="{{ route('all_portfolios') }}">Portfolio</a>
                                        <ul class="tp-submenu submenu">
                                            <li><a href="{{ route('frontportfolios', 'branding') }}">Branding</a></li>
                                            <li><a href="{{ route('frontportfolios', 'printing') }}">Design & Print</a>
                                            </li>
                                            <li><a href="{{ route('frontportfolios', 'photography') }}">Photography
                                                </a></li>
                                            <li><a href="{{ route('frontportfolios', 'video-3d') }}">Video & 3d </a>
                                            </li>
                                            <li><a href="{{ route('frontportfolios', 'web-and-digital') }}">Web &
                                                    UI/UX</a></li>
                                            <li><a href="{{ route('frontportfolios', 'packaging') }}">Product design &
                                                    packaging </a></li>
                                            <li><a href="{{ route('frontportfolios', 'media') }}">Social Media
                                                    Marketing </a></li>
                                            <li><a href="{{ route('frontportfolios', 'Expos') }}">PR events & Expos
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('hiring_jobs') }}">Jobs</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="javascript:void(0)">Resource</a>
                                        <ul class="tp-submenu submenu">
                                            <li>
                                                <a href="{{ route('blogs.home') }}">Blog</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('events') }}">Event</a>
                                            </li>

                                        </ul>

                                    <li>
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-6">
                    <div class="tp-header-right text-end">
                        <div class="tp-header-14-bar-wrap ml-20">
                            <button class="tp-header-8-bar tp-offcanvas-open-btn">
                                <span>Menu</span>
                                <img style="margin-left: 7px" width="24"
                                    src="{{ asset('assets/img/front-images/menulines.svg') }}" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->

    <!-- header area end -->

    <!-- offcanvas start here -->
    <!-- tp-offcanvus-area-start -->
    <div class="tp-offcanvas-area">
        <div class="tp-offcanvas-wrapper offcanvas-black-bg">
            <div class="tp-offcanvas-top d-flex align-items-center justify-content-between">
                <div class="tp-offcanvas-logo">
                    <a href="{{ route('index') }}">
                        <img class="logo-1" data-width="200"
                            src="{{ asset('assets/img/front-images/graficano.png') }}" alt="" />
                        <img class="logo-2" data-width="200"
                            src="{{ asset('assets/img/front-images/graficano.png') }}" alt="" />
                    </a>
                </div>
                <div class="tp-offcanvas-close">
                    <button class="tp-offcanvas-close-btn">
                        <img width="37" height="38" src="{{ asset('assets/img/front-images/cross.png') }}"
                            alt="">
                    </button>
                </div>
            </div>
            <div class="tp-offcanvas-main">
                <div class="tp-offcanvas-content d-none d-xl-block">
                    <h3 class="tp-offcanvas-title">Hello There!</h3>
                    <p>Graficano Is Here to serve your Digital Needs. Contact Us for our Outstanding Services</p>
                </div>
                <div class="tp-offcanvas-menu d-xl-none">
                    <nav></nav>
                </div>
                <div class="tp-offcanvas-gallery d-none d-xl-block">
                    <div class="row gx-2">
                        <div class="col-md-4 col-4">
                            <div class="tp-offcanvas-gallery-img fix">
                                <a class="popup-image"
                                    href="{{ asset('assets/img/front-images/graficanosidelogos1.png') }}"><img
                                        src="{{ asset('assets/img/front-images/graficanosidelogos1.png') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="tp-offcanvas-gallery-img fix">
                                <a class="popup-image"
                                    href="{{ asset('assets/img/front-images/graficanosidelogos2.png') }}"><img
                                        src="{{ asset('assets/img/front-images/graficanosidelogos2.png') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-4">
                            <div class="tp-offcanvas-gallery-img fix">
                                <a class="popup-image"
                                    href="{{ asset('assets/img/front-images/graficanosidelogos3.png') }}"><img
                                        src="{{ asset('assets/img/front-images/graficanosidelogos3.png') }}"
                                        alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-offcanvas-contact">
                    <h3 class="tp-offcanvas-title sm">Information</h3>
                    <ul>
                        <li><a href="tel:+92 312 9320163">+92 312 9320163</a></li>
                        <li>
                            <a href="mailto:zaka@graficano.com">zaka@graficano.com</a>
                        </li>
                        <li>
                            <a href="#">Kashmir Mall, Near Passport Office Kashmir Road, Sialkot</a>
                        </li>
                    </ul>
                </div>
                <div class="tp-offcanvas-social">
                    <h3 class="tp-offcanvas-title sm">Follow Us</h3>
                    <ul>
                        <li>
                            <a href="https://vimeo.com/graficanodotcom" target="_blank">
                                <span>
                                    <img width="20px" src="{{ asset('assets/img/front-images/vimeo.png') }}"
                                        alt="">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com.au/graficanocommunication/boards/" target="_blank">
                                <span>
                                    <img width="20px" src="{{ asset('assets/img/front-images/pinterest.png') }}"
                                        alt="">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCnv5OpxDaEy10URFunt2pJA" target="_blank">
                                <span>
                                    <img width="20px" src="{{ asset('assets/img/front-images/utube.png') }}"
                                        alt="">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/graficano_/">
                                <span>
                                    <img width="20px" src="{{ asset('assets/img/front-images/insta.png') }}"
                                        alt="">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/graficanodotcom/">
                                <span>
                                    <img width="20px" src="{{ asset('assets/img/front-images/facebook.png') }}"
                                        alt="">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/graficano">
                                <span>
                                    <img width="20px" src="{{ asset('assets/img/front-images/linkedin.png') }}"
                                        alt="">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->
    <!-- offcanvas end here -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                @yield('content')
            </main>

            <footer class="tp-service-4-padding-area pb-20">
                <div class="dgm-footer-bg p-relative">
                    <!-- footer area start -->
                    <div class="dgm-footer-area black-bg-5 pt-100 pb-60">
                        <div class="container container-1430">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-40">
                                    <div class="dgm-footer-widget dgm-footer-col-1 z-index-1 tp_fade_anim"
                                        data-delay=".3">
                                        <div class="dgm-footer-logo mb-30">
                                            <a href="/"><img data-width="220px"
                                                    src="{{ asset('assets/img/front-images/footer-logo.png') }}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="dgm-footer-widget-paragraph mb-35">
                                            <p>
                                                Graficano is a full service advertising agency in NYC,
                                                offering advertising, digital marketing, design, and
                                                software development since 2010. We help businesses
                                                grow with simple, effective solutions that bring
                                                results
                                            </p>
                                        </div>
                                        <div class="dgm-footer-widget-social">
                                            <a href="https://vimeo.com/graficanodotcom" target="_blank">
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/vimeo.png') }}"
                                                        alt="">
                                                </span>
                                            </a>
                                            <a href="https://www.pinterest.com.au/graficanocommunication/boards/"
                                                target="_blank">
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/pinterest.png') }}"
                                                        alt="">
                                                </span>
                                            </a>
                                            <a href="https://www.youtube.com/channel/UCnv5OpxDaEy10URFunt2pJA"
                                                target="_blank">
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/utube.png') }}"
                                                        alt="">
                                                </span>
                                            </a>
                                            <a href="https://www.instagram.com/graficano_/">
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/insta.png') }}"
                                                        alt="">
                                                </span>
                                            </a>
                                            <a href="https://www.facebook.com/graficanodotcom/">
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/facebook.png') }}"
                                                        alt="">
                                                </span>
                                            </a>
                                            <a href="https://www.linkedin.com/company/graficano">
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/linkedin.png') }}"
                                                        alt="">
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-3 mb-40">
                                    <div class="dgm-footer-widget dgm-footer-col-2 tp_fade_anim" data-delay=".4">
                                        <h4 class="dgm-footer-widget-title">Portfolios</h4>
                                        <div class="dgm-footer-widget-menu">
                                            <ul>
                                                <li><a href="{{ route('frontportfolios', 'branding') }}">Branding</a>
                                                </li>
                                                <li><a href="{{ route('frontportfolios', 'printing') }}">Design &
                                                        Illustration</a></li>
                                                <li><a href="{{ route('frontportfolios', 'video-3d') }}">Video & 3d
                                                    </a></li>
                                                <li><a href="{{ route('frontportfolios', 'web-and-digital') }}">Web
                                                        and digital</a></li>
                                                <li><a
                                                        href="{{ route('frontportfolios', 'packaging') }}">Packaging</a>
                                                </li>
                                                <li><a
                                                        href="{{ route('frontportfolios', 'photography') }}">Photography</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-3 mb-40">
                                    <div class="dgm-footer-widget dgm-footer-col-3 tp_fade_anim" data-delay=".5">
                                        <h4 class="dgm-footer-widget-title">Company</h4>
                                        <div class="dgm-footer-widget-menu">
                                            <ul>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('clients') }}">Clients</a></li>
                                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                <li><a href="{{ route('blogs.home') }}">Blogs</a></li>
                                                <li><a href="{{ route('change-management') }}">Change Mangement</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 mb-40">
                                    <div class="dgm-footer-widget dgm-footer-col-4 z-index-1 tp_fade_anim"
                                        data-delay=".6">
                                        <h4 class="dgm-footer-widget-title">Let's Meet</h4>
                                        <div class="dgm-footer-widget-paragraph color-style mb-35">
                                            <p>
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/headphone.png') }}"
                                                        alt="">
                                                </span>
                                                +92 312 9320163
                                            </p>
                                            <p>
                                                <span>
                                                    <img width="25px"
                                                        src="{{ asset('assets/img/front-images/pak.png') }}"
                                                        alt="">
                                                </span>
                                                Kashmir Mall, Near Passport Office Kashmir Road, Sialkot
                                            </p>
                                            <p>
                                                <span>
                                                    <img width="25px"
                                                        src="{{ asset('assets/img/front-images/usa.png') }}"
                                                        alt="">
                                                </span>
                                                27 Durham drive Dix Hills NY 11746
                                            </p>
                                            <p>
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/mail.png') }}"
                                                        alt="">
                                                </span>
                                                zaka@graficano.com(Director)
                                            </p>
                                            <p>
                                                <span>
                                                    <img width="20px"
                                                        src="{{ asset('assets/img/front-images/mail.png') }}"
                                                        alt="">
                                                </span>
                                                info@graficano.com(Sales-inquiry)
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer area end -->

                    <!-- copyright area start -->
                    <div class="tp-copyright-2-area tp-copyright-2-border black-bg-5">
                        <div class="container container-1430">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5 col-md-6">
                                    <div class="tp-copyright-2-left text-center text-md-start z-index-1">
                                        <p>
                                            © 2026 <a href="#">Graficano</a>. All Rights Reserved.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="tp-copyright-2-middle">
                                        <a href="mailto:graficano@gmail.com">
                                            <span>
                                                <img width="20px"
                                                    src="{{ asset('assets/img/front-images/mail.png') }}"
                                                    alt="">
                                            </span>
                                            graficano@gmail.com
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-6">
                                    <div class="tp-copyright-2-right">
                                        <div class="tp-copyright-2-menu text-md-end text-center">
                                            <ul>
                                                <li><a href="{{ route('work-policy') }}">Work policy </a></li>
                                                <li><a href="{{ route('customer-policy') }}">Terms and conditions</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- copyright area end -->
                </div>
            </footer>
        </div>
    </div>
    <!-- javascript -->
    <a href="https://wa.me/+923129320163" target="_blank"
        style="position: fixed; bottom: 10px; left: 15px; z-index: 9999;">
        <i class="fab fa-whatsapp fa-3x" style="color: #25D366;"></i>
    </a>

    <!-- JS here -->

    <!-- JS here -->


    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/three.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/scroll-magic.js') }}"></script>
    <script src="{{ asset('assets/js/hover-effect.umd.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-slider.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/Observer.min.js') }}"></script>
    <script src="{{ asset('assets/js/splitting.min.js') }}"></script>
    <script src="{{ asset('assets/js/webgl.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/atropos.js') }}"></script>
    <script src="{{ asset('assets/js/slider-active.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/tp-cursor.js') }}"></script>
    <script src="{{ asset('assets/js/portfolio-slider-1.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/distortion-img.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/skew-slider/index.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/img-revel/index.js') }}"></script>


    <!-- JS here -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener("scroll", function() {
                console.log("Scroll position:", window.scrollY);

                if (window.scrollY > 50) {
                    document.querySelector(".logo-white").classList.add("d-none");
                    document.querySelector(".logo-black").classList.remove("d-none");
                } else {
                    document.querySelector(".logo-white").classList.remove("d-none");
                    document.querySelector(".logo-black").classList.add("d-none");
                }
            });
        });
    </script>

    <script>
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 50) {
                // Hide white logo and show black logo
                $(".logo-white").addClass("d-none");
                $(".logo-black").removeClass("d-none");
            } else {
                // Show white logo and hide black logo
                $(".logo-white").removeClass("d-none");
                $(".logo-black").addClass("d-none");
            }
        });
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'de,no,es,fr,sv,en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    @yield('SpecificScripts')

    <!-- JS here -->
</body>



</html>
