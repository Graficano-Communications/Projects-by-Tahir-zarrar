<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>@yield('title', 'Cardic Instruments | Precision Surgical Instruments & Healthcare Solutions')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary SEO -->
    <meta name="author" content="Cardic Instruments">
    <meta name="description" content="Cardic Instruments is a trusted leader in surgical and medical instruments with over 40 years of experience. We deliver precision-crafted, innovative healthcare solutions that enhance patient care and support medical professionals worldwide.">
    <meta name="keywords" content="Cardic Instruments, surgical instruments manufacturer, medical instruments, healthcare instruments, precision surgical tools, hospital instruments, medical equipment supplier, surgical solutions, healthcare innovation">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph (Facebook, LinkedIn) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cardic Instruments | Precision Surgical Instruments & Healthcare Solutions">
    <meta property="og:description" content="With over four decades of expertise, Cardic Instruments delivers high-quality surgical instruments through innovation, precision, and uncompromising quality standards.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Cardic Instruments">
    <meta property="og:image" content="{{ asset('assets/frontend/images/front-images/cardic-og.jpg') }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cardic Instruments | Precision Surgical Instruments">
    <meta name="twitter:description" content="Innovative, precision-engineered surgical instruments designed to support healthcare professionals and elevate patient care.">
    <meta name="twitter:image" content="{{ asset('assets/frontend/images/front-images/cardic-og.jpg') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/front-images/cardic-favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/front-images/cardic-favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/frontend/images/front-images/cardic-favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/frontend/images/front-images/cardic-favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/demos/lawyer/lawyer.css') }}" />

    <!-- Structured Data (Organization Schema) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalOrganization",
        "name": "Cardic Instruments",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/frontend/images/front-images/cardic-logo.png') }}",
        "description": "Cardic Instruments is a leading manufacturer of precision surgical instruments with over four decades of experience in healthcare innovation and quality.",
        "sameAs": [],
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "PK"
        }
    }
    </script>
</head>


<body data-mobile-nav-style="classic" class="custom-cursor">

     @include('includes.header')
 @yield('content')

     @include('includes.footer')
   
    

    
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->


    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/js/main.js') }}"></script>
     {{-- <div class="modal fade" id="cartdata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <h4>Your Cart !</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="bs-docs-example">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Size</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody id="showcart"></tbody>
                        </table>
                        <a class="btn btn-primary" href="{{ route('cart') }}"
                            style="padding:10px 10px;color:white">Check Out</a>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</body>

</html>







