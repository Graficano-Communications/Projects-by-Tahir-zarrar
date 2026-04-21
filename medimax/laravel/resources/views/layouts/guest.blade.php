
<!DOCTYPE html>
<html>

<head>
    <title>medimax-login - @yield('title')</title>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="UNIK Technology">
    <meta name="description" content="Bisen-IT ">
    <!-- Favicon -->
    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" />
    <meta name="msapplication-TileImage" content="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" />
    <meta property="og:image" content="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_unik/vendor/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_unik/vendor/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_unik/vendor/swiper/swiper-bundle.min.css')}}">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_unik/css/style.css')}}">

</head>

<body>


    <!-- WHATSAPP API START -->
    <div style="position: fixed; bottom: 10px; left: 15px;z-index: 1; height: 70px; width: 70px;">
        <a aria-label="Chat on WhatsApp" href="https://wa.me/0008613682606442" target="_blank">
            <i class="fab fa-whatsapp fa-3x" style="color: #25D366;"></i>
    </div>

    <div class="back-top"></div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets_unik/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{ asset('assets_unik/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Theme Functions -->
    <script src="{{ asset('assets_unik/js/functions.js')}}"></script>



</body>

</html>