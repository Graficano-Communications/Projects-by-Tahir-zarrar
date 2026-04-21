<!DOCTYPE html>
<html>

<head>
  <title>Medimax-instrument - @yield('title')</title>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Bisen">
  @yield('seo')
  <!-- Favicon -->
  <!-- site Favicon -->
  <link rel="icon" href="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" sizes="32x32" />
  <link rel="apple-touch-icon" href="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" />
  <meta name="msapplication-TileImage" content="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" />
  <meta property="og:image" content="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}">
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">

  <style>
    .logo-light,
    .logo-dark {
      display: none;
    }

    /* Show the light mode logo when the theme is light */
    html:not(.theme-dark) .logo-light,
    html:not(.theme-dark) .navbar-brand.logo-light {
      display: contents;
    }

    /* Show the dark mode logo when the theme is dark */
    html.theme-dark .logo-dark,
    html.theme-dark .navbar-brand.logo-dark {
      display: contents;
    }
  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/bootstrap.min.css')}}">
  <!-- BoxIcon Css -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/boxicons.min.css')}}">
  <!-- MeanMenu CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/meanmenu.min.css')}}">
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/nice-select.css')}}">
  <!-- Animate CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/animate.min.css')}}">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/owl.carousel.min.css')}}">
  <!-- Owl Theme CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/owl.theme.default.min.css')}}">
  <!-- Magnific CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/magnific-popup.min.css')}}">
  <!-- Jquery DateTimePicker CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/jquery.datetimepicker.min.css')}}" />
  <!-- StyleSheet CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/style.css')}}">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/responsive.css')}}">
  <!-- Theme Dark CSS -->
  <link rel="stylesheet" href="{{asset('medimax_assets/css/theme-dark.css')}}">


  <style>
    #google_translate_element {
      text-align: right;  /* Align it to the right */
      background-color: #f0f0f0;
      padding: 10px;
      border-radius: 5px;
    }
    .goog-te-combo {
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      color: #333;
      font-size: 16px;
      padding: 5px 10px;
      border-radius: 5px;
    }

    /* Style for the Google Translate dropdown */
    .goog-te-menu-frame {
      border-radius: 5px;
    }

    .goog-te-gadget-simple {
      background-color: #007bff;
      color: white;
      padding: 10px;
      border-radius: 5px;
    }
    /* Modified for the given colors */
    .loader {
      --size: 250px;
      --duration: 2s;
      --logo-color: #0F326A;
      /* Primary dark blue */
      --background: linear-gradient(0deg,
          rgba(83, 112, 157, 0.2) 0%,
          /* Light blue tone */
          rgba(231, 236, 239, 0.2) 100%);
      /* Lightest color */
      height: var(--size);
      aspect-ratio: 1;
      position: relative;
    }

    .loader .box {
      position: absolute;
      background: rgba(231, 236, 239, 0.15);
      /* Very light background for subtlety */
      background: var(--background);
      border-radius: 50%;
      border-top: 1px solid rgba(83, 112, 157, 1);
      /* Border color using light blue */
      box-shadow: rgba(0, 0, 0, 0.3) 0px 10px 10px -0px;
      backdrop-filter: blur(5px);
      animation: ripple var(--duration) infinite ease-in-out;
    }

    .loader .box:nth-child(1) {
      inset: 37%;
      z-index: 99;
    }

    .loader .box:nth-child(2) {
      inset: 30%;
      z-index: 98;
      border-color: rgba(83, 112, 157, 0.8);
      /* Lighter border */
      animation-delay: 0.2s;
    }

    .loader .box:nth-child(3) {
      inset: 20%;
      z-index: 97;
      border-color: rgba(83, 112, 157, 0.6);
      /* Slightly lighter */
      animation-delay: 0.4s;
    }

    .loader .box:nth-child(4) {
      inset: 10%;
      z-index: 96;
      border-color: rgba(83, 112, 157, 0.4);
      /* Even lighter */
      animation-delay: 0.6s;
    }

    .loader .box:nth-child(5) {
      inset: 0%;
      z-index: 95;
      border-color: rgba(83, 112, 157, 0.2);
      /* Lightest border */
      animation-delay: 0.8s;
    }

    .loader .logo {
      position: absolute;
      inset: 0;
      display: grid;
      place-content: center;
      padding: 10%;
    }

    .loader .logo svg {
      fill: var(--logo-color);
      width: 100%;
      animation: color-change var(--duration) infinite ease-in-out;
    }

    @keyframes ripple {
      0% {
        transform: scale(1);
        box-shadow: rgba(0, 0, 0, 0.3) 0px 10px 10px -0px;
      }

      50% {
        transform: scale(1.3);
        box-shadow: rgba(0, 0, 0, 0.3) 0px 30px 20px -0px;
      }

      100% {
        transform: scale(1);
        box-shadow: rgba(0, 0, 0, 0.3) 0px 10px 10px -0px;
      }
    }

    @keyframes color-change {
      0% {
        fill: var(--logo-color);
        /* Initial dark blue */
      }

      50% {
        fill: #E7ECEF;
        /* Transition to light grey/white */
      }

      100% {
        fill: var(--logo-color);
        /* Back to dark blue */
      }
    }
  </style>



  @yield('SpecificStyles')
</head>

<body>
 <!-- Google Translate Element -->
 <div id="google_translate_element"></div>


  @yield('loader')

  


  @include('includes.header')





  @yield('content')






  @include('includes.footer')



  <!-- WHATSAPP API START -->
  <div style="position: fixed; bottom: 10px; left: 15px;z-index: 1; height: 70px; width: 70px;">
    <a aria-label="Chat on WhatsApp" href="https://wa.me/+923217479494" target="_blank">
      <i class="bx bxl-whatsapp" style="color: #25D366; font-size: 70px;"></i>
    </a>
  </div>
  
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',  // Default language is English
        includedLanguages: 'en,es',  // Only English and Spanish will be available
        layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
      }, 'google_translate_element');
    }
  </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>




  <!-- jQuery first, then Bootstrap JS -->
  <script src="{{asset('medimax_assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('medimax_assets/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Magnific -->
  <script src="{{asset('medimax_assets/js/jquery.magnific-popup.min.js')}}"></script>
  <!-- MeanMenu JS -->
  <script src="{{asset('medimax_assets/js/meanmenu.min.js')}}"></script>
  <!-- Nice Select JS -->
  <script src="{{asset('medimax_assets/js/jquery.nice-select.min.js')}}"></script>
  <!-- Owl Carousel JS -->
  <script src="{{asset('medimax_assets/js/owl.carousel.min.js')}}"></script>
  <!-- Jquery Mixitup JS -->
  <script src="{{asset('medimax_assets/js/jquery.mixitup.min.js')}}"></script>
  <!-- Jquery DateTimePicker JS -->
  <script src="{{asset('medimax_assets/js/jquery.datetimepicker.full.min.js')}}"></script>
  <!-- Form Validator JS -->
  <script src="{{asset('medimax_assets/js/form-validator.min.js')}}"></script>
  <!-- Contact JS -->
  <script src="{{asset('medimax_assets/js/contact-form-script.js')}}"></script>
  <!-- AjaxChimp JS -->
  <script src="{{asset('medimax_assets/js/jquery.ajaxchimp.min.js')}}"></script>
  <!-- Custom JS -->
  <script src="{{asset('medimax_assets/js/custom.js')}}"></script>



  @yield('scripts')


</body>

</html>