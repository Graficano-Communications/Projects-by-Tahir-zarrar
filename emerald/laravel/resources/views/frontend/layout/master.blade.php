<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ✅ Basic Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- ✅ Dynamic SEO Meta -->
    <title>@yield('title', 'EMERALD INSTRUMENTS')</title>
    <meta name="description" content="@yield('meta_description', 'A leading manufacturer of high-quality surgical &amp; dental instruments, including scissors, forceps, scalpels, elevators, and more. Precision-crafted with CNC technology.')">
    <meta name="keywords" content="@yield('meta_keywords', 'sports gear, sports accessories, CoreStar Sports, fitness equipment, sports apparel')">
    <meta name="author" content="EMERALD INSTRUMENTS">

    <!-- ✅ Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title"
        content="High-Quality Surgical &amp; Dental Instruments Manufacturer- Emerald Instruments" />
    <meta property="og:description"
        content="A leading manufacturer of high-quality surgical &amp; dental instruments, including scissors, forceps, scalpels, elevators, and more. Precision-crafted with CNC technology." />
    <meta property="og:url" content="http://emerald.pk/" />
    <meta property="og:site_name" content="Emerald Instruments" />
    <meta property="article:publisher" content="https://www.facebook.com/emeraldinstruments" />
    <meta property="article:modified_time" content="2025-03-13T13:58:14+00:00" />
    <meta property="og:image" content="http://emerald.pk/wp-content/uploads/2023/10/1.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"http://emerald.pk/","url":"http://emerald.pk/","name":"High-Quality Surgical & Dental Instruments Manufacturer- Emerald Instruments","isPartOf":{"@id":"http://emerald.pk/#website"},"about":{"@id":"http://emerald.pk/#organization"},"primaryImageOfPage":{"@id":"http://emerald.pk/#primaryimage"},"image":{"@id":"http://emerald.pk/#primaryimage"},"thumbnailUrl":"http://emerald.pk/wp-content/uploads/2023/10/1.png","datePublished":"2023-10-05T09:47:14+00:00","dateModified":"2025-03-13T13:58:14+00:00","description":"A leading manufacturer of high-quality surgical & dental instruments, including scissors, forceps, scalpels, elevators, and more. Precision-crafted with CNC technology.","breadcrumb":{"@id":"http://emerald.pk/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["http://emerald.pk/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"http://emerald.pk/#primaryimage","url":"https://emerald.pk/wp-content/uploads/2023/10/1.png","contentUrl":"https://emerald.pk/wp-content/uploads/2023/10/1.png","width":87,"height":87},{"@type":"BreadcrumbList","@id":"http://emerald.pk/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"http://emerald.pk/#website","url":"http://emerald.pk/","name":"www.emerald.pk","description":"Dental, Surgical and Beauty Instruments","publisher":{"@id":"http://emerald.pk/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"http://emerald.pk/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"},{"@type":"Organization","@id":"http://emerald.pk/#organization","name":"Emerald Instruments","url":"http://emerald.pk/","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"http://emerald.pk/#/schema/logo/image/","url":"https://emerald.pk/wp-content/uploads/2023/10/cropped-logo.png","contentUrl":"https://emerald.pk/wp-content/uploads/2023/10/cropped-logo.png","width":253,"height":63,"caption":"Emerald Instruments"},"image":{"@id":"http://emerald.pk/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/emeraldinstruments","https://www.instagram.com/emeraldinstruments","https://www.youtube.com/@emeraldinstruments"]}]}</script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//www.googletagmanager.com' />
    <link rel="alternate" type="application/rss+xml" title="Emerald Instruments &raquo; Feed"
        href="https://emerald.pk/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Emerald Instruments &raquo; Comments Feed"
        href="https://emerald.pk/comments/feed/" />

    <!-- ✅ Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/emd-favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/frontend/images/emd-favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/emd-favicon.png') }}" type="image/png">


    </script>

    <!-- ✅ Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

    <!-- ✅ CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slicknav.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.css') }}" media="screen" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/mousecursor.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" media="screen" />
</head>

<body>
    @include('frontend.layout.header')
    @yield('main-container')
    @include('frontend.layout.footer')

    <!-- ✅ JS Files -->
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/validator.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/parallaxie.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magiccursor.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/SplitText.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/function.js') }}"></script>
</body>

</html>
