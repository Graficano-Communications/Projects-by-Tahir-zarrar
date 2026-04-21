<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords"
        content="medical instruments, surgical tools, healthcare equipment, hospital supplies, medical devices">
    <meta name="description"
        content="Leading provider of high-quality medical instruments and healthcare equipment. Explore our range of surgical tools, hospital supplies, and medical devices.">
    <meta name="author" content="Yamada Instruments">


    <!-- Icons -->

    <link rel="stylesheet" href="css/drift-basic.min.css">
    <link rel="stylesheet" href="css/photoswipe.css">

    <link rel="stylesheet "type="text/css" href="css/styles.css" />
    <link rel="stylesheet" href="{{ url('assets/frontend/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/fonts/font-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet"type="text/css" href="{{ url('assets/frontend/css/styles.css') }}" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/front-images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/frontend/images/front-images/favicon.png') }}">


</head>

<body class="preload-wrapper color-primary-2">


    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <div id="wrapper">

        @include('frontend.layout.header')
        @yield('main-container')
        @include('frontend.layout.footer')
    </div>




    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a class=" mb-menu-link current" href="{{ route('home') }}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a class=" mb-menu-link current" href="{{ route('about') }}">
                            <span>About</span>
                        </a>
                    </li>
                    @php
                        $categories = DB::table('categories')
                            ->select('id', 'slug', 'name')
                            ->get()
                            ->map(function ($category) {
                                $category->subcategories = DB::table('subcategories')
                                    ->where('categories_id', $category->id)
                                    ->select('id', 'slug', 'name')
                                    ->get();
                                return $category;
                            });
                    @endphp

                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-products" class="collapsed mb-menu-link current"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="dropdown-menu-products">
                            <span>Products</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-products" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="#sub-category-{{ $category->id }}" class="sub-nav-link collapsed"
                                            data-bs-toggle="collapse" aria-expanded="false"
                                            aria-controls="sub-category-{{ $category->id }}">
                                            <span>{{ $category->name }}</span>
                                            <span class="btn-open-sub"></span>
                                        </a>
                                        <div id="sub-category-{{ $category->id }}" class="collapse">
                                            <ul class="sub-nav-menu sub-menu-level-2">
                                                @foreach ($category->subcategories as $subcategory)
                                                    <li>
                                                        <a href="{{ url('products/' . $category->slug . '/' . $subcategory->slug) }}"
                                                            class="sub-nav-link">{{ $subcategory->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a class=" mb-menu-link current" href="{{ route('news-event') }}">
                            <span>News & Events</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a class=" mb-menu-link current" href="{{ route('catalouges') }}">
                            <span>Catalouges</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a class=" mb-menu-link current" href="{{ route('blog') }}">
                            <span>Blog</span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a class=" mb-menu-link current" href="{{ route('contact') }}">
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ul>
                <div class="mb-other-content">
                    <div class="mb-notice">
                        <a href="contact-1.html" class="text-need">Need help ?</a>
                    </div>
                    <ul class="mb-info">
                        <li>Address: 01/563, Abbot Road Sialkot-51310, Pakistan</li>
                        <li>Email: <b>info@Yamadainst.com</b></li>
                        <li>Phone: <b>(+92) 3328635787</b></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /mobile menu -->



    <!-- canvasSearch -->
    <div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
        <div class="canvas-wrapper">
            <header class="tf-search-head">
                <div class="title fw-5">
                    Search our site
                    <div class="close">
                        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"
                            aria-label="Close"></span>
                    </div>
                </div>
                <div class="tf-search-sticky">
                    <form class="tf-mini-search-frm">
                        <fieldset class="text">
                            <input type="text" placeholder="Search" class="" name="text" tabindex="0"
                                value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </header>
            <div class="canvas-body p-0">
                <div class="tf-search-content">
                    <div class="tf-cart-hide-has-results">
                        <div class="tf-col-quicklink">
                            <div class="tf-search-content-title fw-5">Quick link</div>
                            <ul class="tf-quicklink-list">
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Fashion</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Men</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Women</a>
                                </li>
                                <li class="tf-quicklink-item">
                                    <a href="shop-default.html" class="">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tf-col-content">
                            <div class="tf-search-content-title fw-5">Need some inspiration?</div>
                            <div class="tf-search-hidden-inner">
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Cotton jersey top</a>
                                        <div class="tf-product-info-price">
                                            <div class="compare-at-price">$10.00</div>
                                            <div class="price-on-sale fw-6">$8.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Mini crossbody bag</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-loop-item">
                                    <div class="image">
                                        <a href="product-detail.html">
                                            <img src="images/products/white-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="product-detail.html">Oversized Printed T-shirt</a>
                                        <div class="tf-product-info-price">
                                            <div class="price fw-6">$18.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /canvasSearch -->




    <script type="text/javascript" src="{{ url('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/swiper-bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/bootstrap-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/lazysize.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/count-down.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/multiple-modal.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/frontend/js/main.js') }}"></script>
    <script defer type="text/javascript" src="{{ url('assets/frontend/js/drift.min.js') }}"></script>
    <script defer type="module" src="{{ url('assets/frontend/js/model-viewer.min.js') }}"></script>
    <script defer type="module" src="{{ url('assets/frontend/js/zoom.js') }}"></script>

</body>

</html>
