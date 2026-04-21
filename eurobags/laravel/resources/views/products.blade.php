<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/eurocon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/eurocon.png') }}" type="image/x-icon">
    <title>{{ config('app.name') }} - {{ $category->meta_title }}</title>
    <meta name="description" content="{{ $category->meta_description }}">
    <meta name="keywords" content="{{ $category->meta_description }}">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color1.css') }}" media="screen" id="color">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/eurocon.png') }}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700&display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/all.min.css') }}" />






    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <style>
        .main-menu {
            height: 80px;
        }

        .main-menu .menu-right {
            color: white;
        }

        .breadcrumb-section .breadcrumb {
            justify-content: left;
        }

        .product-right {
            border: 1px solid #d3d3d3;
            padding: 50px;
            background: #f7f5f5;
        }

        .collection-brand-filter a {
            color: black
        }

        .collection-collapse-block-content {
            margin-top: 30px;
        }

        .product-right .size-box ul li {
            width: auto;
            border: 1px solid black;
            padding: 10px;
            border-radius: 0px;
        }

        .product-right .size-box ul li:hover {
            background-color: #ff4c3b;
            border: 1px solid #ff4c3b;
        }

        .product-right .size-box ul li:hover a {
            color: white;
        }

        .product-right .size-box input[type="radio"] {
            opacity: 0.01;
            z-index: 100;
        }

        .product-right .size-box input[type="radio"]:checked+label,
        .Checked+label {
            background-color: #ff4c3b;
            border: 1px solid #ff4c3b;
            color: white;
        }

        .product-des li {
            display: list-item;
        }

        .tab-product li {
            display: list-item;
        }

        .opt-active {
            background-color: #ff4c3b;
            border: 1px solid #ff4c3b;
            color: white;
        }

        .main-menu .menu-right .icon-nav .mobile-search i,
        .main-menu .menu-right .icon-nav .mobile-cart i,
        .main-menu .menu-right .icon-nav .mobile-setting i {
            display: block !important;
            font-size: 23px !important;
        }

        .whatspp-plugin {
            position: fixed;
            width: 25px;
            height: 25px;
            bottom: 80px;
            right: 22px;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            z-index: 100000;
        }

        .footer-social i,
        .social-white i {
            font-size: 36px;
            color: #fdfdfd;
        }

        .footer-social i:hover,
        .social-white i:hover {
            color: #BE2025 !important;
        }

        .footer-theme2 .contact-details li {
            padding: 0px !important;
        }

        .theme-modal .modal-dialog .modal-content .modal-body {
            background-image: none;
            border: 4px solid #BE2025;
        }
    </style>
</head>

<body style="overflow: auto;">

    <!--=================================
header -->
    <header class="header default">
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-block d-md-flex align-items-center text-center">
                            <div class="mr-4 d-inline-block py-1">
                                <a href="mailto:info@euro-bag.com">
                                    <i class="far fa-envelope mr-2 fa-flip-horizontal text-primary"></i>
                                    info@euro-bag.com
                                </a>
                            </div>
                            <div class="mr-auto d-inline-block py-1"></div>
                            <div class="d-inline-block py-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="">
                                            <i class="fas fa-map-marker-alt text-primary mr-2"></i>
                                            NOUL MORE RORAS ROOADNEAR HARRAR SIALKOT
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar bg-white navbar-static-top navbar-expand-lg align-items-center justify-content-center">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fas fa-align-left"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img class="img-fluid" src="{{ asset('assets/images/Euro-Bags-logo.png') }}" alt="logo">
                </a>

                <div class="navbar-collapse collapse justify-content-lg-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>

                        @php
                            $categories = \App\category::all()->sortBy('sequence');
                        @endphp

                        <li class="dropdown nav-item mega-menu ">
                            <a href="#" class="nav-link active" data-toggle="dropdown">Products</a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        @foreach ($categories as $cat)
                                            <div class="col-sm-6 col-lg-3">
                                                <h6 class="mb-3 nav-title">
                                                    <a href="{{ route('products.catgeory', $cat->slug) }}">
                                                        {{ $cat->name }}
                                                    </a>
                                                </h6>

                                                @php
                                                    $subcategory = \App\subcategory::where('category_id', $cat->id)
                                                        ->orderBy('sequence')
                                                        ->get();
                                                @endphp

                                                @if ($subcategory->count())
                                                    <ul class="list-unstyled mt-lg-3">
                                                        @foreach ($subcategory as $subcat)
                                                            <li>
                                                                <a
                                                                    href="{{ route('product_by_category', [$cat->slug, $subcat->slug]) }}">
                                                                    {{ $subcat->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('media') }}">Media</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('blog_posts') }}">Blogs</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('events') }}">Events</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-sm-flex ml-auto mr-5 mr-lg-0 pr-4 pr-lg-0">
                    <ul class="nav ml-1 ml-lg-2 align-self-center">
                        <li class="contact-number nav-item pr-4">
                            <a class="font-weight-bold" href="https://wa.me/923461157705">
                                <i class="fab fa-whatsapp pr-2"></i> + (92) 3461157705
                            </a>
                        </li>
                        <li class="header-search nav-item">
                            <div class="search">
                                <a class="search-btn not_click" href="javascript:void(0);"></a>
                                <div class="search-box not-click">
                                    <form action="{{ route('search') }}" method="post">
                                        @csrf
                                        <input type="text" class="not-click form-control" name="search"
                                            placeholder="Search..">
                                        <button class="search-button" type="submit">
                                            <i class="fa fa-search not-click"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--=================================
header -->



    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb text-center">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            @if ($category)
                                <li class="breadcrumb-item active">
                                    <a href="#">{{ $category->name }}</a>
                                </li>
                                @if ($subcatgory_name)
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $subcatgory_name }}
                                    </li>
                                @endif
                                @if (isset($subsubname))
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{ $subsubname }}
                                    </li>
                                @endif
                            @else
                                <li class="breadcrumb-item active" aria-current="page">
                                    On Sale Products
                                </li>
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <!-- Sidebar start -->
                                <div class="col-sm-3 collection-filter">
                                    <!-- side-bar collapse block start -->
                                    <div class="collection-filter-block">
                                        <!-- brand filter start -->
                                        <div class="collection-mobile-back">
                                            <span class="filter-back">
                                                <i class="fa fa-angle-left" aria-hidden="true"></i> back
                                            </span>
                                        </div>

                                        @php
                                            $category = \App\category::all()->sortBy('sequence');
                                        @endphp
                                        @foreach ($category as $key => $cat)
                                            <div
                                                class="collection-collapse-block @if ($key == 0) open @endif">
                                                <h3 class="collapse-block-title">{{ $cat->name }}</h3>
                                                <div class="collection-collapse-block-content">
                                                    <div class="collection-brand-filter">
                                                        @php
                                                            $subcategory = \App\subcategory::where(
                                                                'category_id',
                                                                $cat->id,
                                                            )
                                                                ->get()
                                                                ->sortBy('sequence');
                                                        @endphp
                                                        @foreach ($subcategory as $subcat)
                                                            <p>
                                                                <a
                                                                    href="{{ route('product_by_category', [$cat->slug, $subcat->slug]) }}">
                                                                    {{ $subcat->name }}
                                                                </a>
                                                            </p>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- side-bar collapse block end -->

                                    <!-- side-bar single product slider start -->
                                    <div class="theme-card card-border">
                                        <h5 class="title-border">new product</h5>
                                        @php
                                            $new_products = \App\product::where('new_arrival', 1)->take(8)->get();
                                        @endphp
                                        @foreach ($new_products as $key => $new)
                                            <div class="offer-slider slide-1">
                                                @if ($new->images()->count())
                                                    @php
                                                        $image = \App\image::where('product_id', $new->id)
                                                            ->where('sequence', 01)
                                                            ->first();
                                                        $imags = json_decode($image->images);
                                                    @endphp

                                                    @if ($key % 2 == 0)
                                                        <div>
                                                            <div class="media">
                                                                @foreach ($imags as $key => $img)
                                                                    @if ($loop->first)
                                                                        <a
                                                                            href="{{ route('product', ['slug' => $new->slug, 'color' => $image->color]) }}">
                                                                            <img alt="" class="img-fluid"
                                                                                src="{{ asset('images/products/' . $img) }}">
                                                                        </a>
                                                                    @endif
                                                                @endforeach
                                                                <div class="media-body align-self-center">
                                                                    <a
                                                                        href="{{ route('product', ['slug' => $new->slug, 'color' => $image->color]) }}">
                                                                        <h6>{{ $new->name }}</h6>
                                                                    </a>
                                                                    {{-- <h4>Rs. {{ $new->price }}</h4> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div>
                                                        <div class="media">
                                                            @foreach ($imags as $key => $img)
                                                                @if ($loop->first)
                                                                    <a
                                                                        href="{{ route('product', ['slug' => $new->slug, 'color' => $image->color]) }}">
                                                                        <img alt="" class="img-fluid"
                                                                            src="{{ asset('images/products/' . $img) }}">
                                                                    </a>
                                                                @endif
                                                            @endforeach
                                                            <div class="media-body align-self-center">
                                                                <a
                                                                    href="{{ route('product', ['slug' => $new->slug, 'color' => $image->color]) }}">
                                                                    <h6>{{ $new->name }}</h6>
                                                                </a>
                                                                {{-- <h4>Rs. {{ $new->price }}</h4> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- side-bar single product slider end -->
                                </div>
                                <!-- Sidebar end -->

                                <!-- Product grid start -->
                                <div class="col-sm-9">
                                    <div class="collection-product-wrapper">
                                        @if ($products)
                                            <div class="product-wrapper-grid">
                                                <div class="row margin-res">
                                                    @foreach ($products as $product)
                                                        <div class="col-xl-3 col-6 col-grid-box">
                                                            <div class="product-box">
                                                                <div class="img-wrapper">
                                                                    {{-- @if ($product->new_arrival == '1')
                                                                    <div class="lable-block">
                                                                        <span class="lable3">New</span>
                                                                    </div>
                                                                @endif --}}
                                                                    {{-- @if ($product->sale_price < $product->price)
                                                                    <div class="lable-block">
                                                                        <span class="lable3">ON SALE</span>
                                                                    </div>
                                                                @endif --}}

                                                                    @if ($product->images()->count())
                                                                        @php
                                                                            $image = \App\image::where(
                                                                                'product_id',
                                                                                $product->id,
                                                                            )
                                                                                ->where('sequence', 01)
                                                                                ->first();
                                                                            $imags = json_decode($image->images);
                                                                        @endphp
                                                                        @foreach ($imags as $key => $img)
                                                                            @if ($loop->first)
                                                                                <div class="front">
                                                                                    <a
                                                                                        href="{{ route('product', [$product->slug, $image->color]) }}">
                                                                                        <img src="{{ asset('images/products/' . $img) }}"
                                                                                            class="img-fluid bg-img"
                                                                                            alt="">
                                                                                    </a>
                                                                                </div>
                                                                            @endif
                                                                            @if ($key == 1)
                                                                                <div class="back">
                                                                                    <a
                                                                                        href="{{ route('product', [$product->slug, $image->color]) }}">
                                                                                        <img src="{{ asset('images/products/' . $img) }}"
                                                                                            class="img-fluid bg-img"
                                                                                            alt="">
                                                                                    </a>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    @else
                                                                        <p>No Image Found</p>
                                                                    @endif

                                                                    <div class="cart-info cart-wrap">
                                                                        <a href="{{ route('product', [$product->slug, $image->color]) }}"
                                                                            title="Quick View">
                                                                            <i class="ti-search"
                                                                                aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="product-detail">
                                                                    <div>
                                                                        <a
                                                                            href="{{ route('product', [$product->slug, $image->color]) }}">
                                                                            <h6>{{ $product->name }}</h6>
                                                                        </a>
                                                                        <p>{{ $product->name }}</p>
                                                                        {{-- 
                                                                    @if ($product->sale_price < $product->price)
                                                                        <h4>Rs. {{ $product->sale_price }} <del>Rs. {{ $product->price }}</del></h4>
                                                                    @else 
                                                                        <h4>Rs. {{ $product->price }}</h4>
                                                                    @endif 
                                                                    --}}

                                                                        <ul class="color-variant">
                                                                            @php
                                                                                $variations = \App\product_variation::where(
                                                                                    'product_id',
                                                                                    $product->id,
                                                                                )->get();
                                                                            @endphp

                                                                            <ul class="image-swatch"
                                                                                style="display:flex">
                                                                                @foreach ($variations->unique('color_id') as $var)
                                                                                    @php
                                                                                        $color_count = \App\product_variation::where(
                                                                                            'product_id',
                                                                                            $var->product_id,
                                                                                        )
                                                                                            ->where(
                                                                                                'color_id',
                                                                                                $var->color_id,
                                                                                            )
                                                                                            ->get()
                                                                                            ->count();
                                                                                        $status_count = \App\product_variation::where(
                                                                                            'product_id',
                                                                                            $var->product_id,
                                                                                        )
                                                                                            ->where(
                                                                                                'color_id',
                                                                                                $var->color_id,
                                                                                            )
                                                                                            ->where('status', 0)
                                                                                            ->get()
                                                                                            ->count();
                                                                                        $status =
                                                                                            $color_count ==
                                                                                            $status_count
                                                                                                ? 0
                                                                                                : 1;
                                                                                        $imags = json_decode(
                                                                                            $var->color->images,
                                                                                        );
                                                                                    @endphp

                                                                                    @foreach ($imags as $key => $img)
                                                                                        @if ($loop->first)
                                                                                            <li
                                                                                                style="width:50px; height:50px">
                                                                                                <a @if ($status == 0) style="pointer-events: none; text-align:center;" @endif
                                                                                                    href="{{ route('product', ['slug' => $product->slug, 'color' => $var->color->color]) }}">
                                                                                                    @if ($status == 0)
                                                                                                        <p
                                                                                                            style="position: absolute; top: 22%;">
                                                                                                            Out of stock
                                                                                                        </p>
                                                                                                    @endif
                                                                                                    <img style="width:100px; height:auto; @if ($status == 0) opacity:0.2 @endif"
                                                                                                        src="{{ asset('images/products/' . $img) }}"
                                                                                                        alt="{{ $var->color->color }}"
                                                                                                        class="img-fluid"
                                                                                                        title="{{ $var->color->color }}">
                                                                                                </a>
                                                                                            </li>
                                                                                        @endif
                                                                                    @endforeach
                                                                                @endforeach
                                                                            </ul>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- Pagination -->
                                            <div class="product-pagination">
                                                <div class="theme-paggination-block">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            {{ $products->render('pagination') }}
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                                <h5>Showing Products {{ $products->count() }} Result
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <!-- Product grid end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!--=================================
footer -->
    <footer class="footer bg-light">
        <div class="container-fluid p-0">
            <div class="row no-gutters">

                <!-- Left Side -->
                <div class="col-lg-6">
                    <div class="p-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="/">
                                    <img class="img-fluid" src="{{ asset('assets/images/Euro-Bags-logo.png') }}"
                                        alt="logo">
                                </a>
                                <p class="mt-3 text-dark">
                                    Euro-Bags is an innate brand that produces premium export quality bags of all types.
                                    From Backpacks to gym bags, travel bags to sports bags, or any lifestyle bag, we
                                    provide
                                    our customers best quality material and craftsmanship at their doorsteps. We have a
                                    history of creating custom bags for international brands and now you can get all
                                    those
                                    prestigious innovated bags in Pakistan at a very low price.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="text-primary">Head office</h5>
                                <p class="text-dark">NOUL MORE RORAS ROOADNEAR HARRAR SIALKOT</p>
                                <p class="text-dark">
                                    <a class="font-weight-bold" href="https://wa.me/923461157705">
                                        <i class="fab fa-whatsapp mr-2 text-primary"></i> + (92) 3461157705
                                    </a>
                                </p>
                                <p class="text-dark">
                                    <i class="far fa-envelope mr-2 text-primary"></i>
                                    <a href="mailto:info@euro-bag.com" class="text-dark">info@euro-bag.com</a>
                                </p>
                                <h4 class="text-dark mb-0 font-weight-bold">
                                    <a class="text-dark" href="tel:+923461157705"> + (92) 3461157705</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-lg-6 bg-dark">
                    <div class="p-6">
                        <div class="row">
                            <div class="col-sm-6 col-lg-5 mb-4 mb-lg-0">
                                <h5 class="text-primary mb-2 mb-sm-4">About Euro-Bags</h5>
                                <div class="footer-link">
                                    <ul class="list-unstyled mb-0 d-flex" style="flex-direction: column;">
                                        <li><a class="text-white" href="{{ route('blog_posts') }}">Blogs</a></li>
                                        <li><a class="text-white" href="{{ route('contact') }}">Contact</a></li>
                                        <li><a class="text-white"
                                                href="{{ route('page', 'privacy-policy') }}">Privacy Policy</a></li>
                                        <li><a class="text-white" href="{{ route('page', 'about-us') }}">About</a>
                                        </li>
                                        <li><a class="text-white" href="{{ route('media') }}">Media</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-5">
                                <h5 class="text-primary mb-2 mb-sm-4">Social Links</h5>
                                <div class="footer-link">
                                    <ul class="list-unstyled mb-0 d-flex" style="flex-direction: column;">
                                        <li><a class="text-white"
                                                href="https://www.facebook.com/share/16wWezv1nL/?mibextid=wwXIfr">Facebook</a>
                                        </li>
                                        <li><a class="text-white"
                                                href="https://www.instagram.com/eurobagsinternational?igsh=eGloMzgxdGlhdW5s&utm_source=qr">Instagram</a>
                                        </li>
                                        <li><a class="text-white"
                                                href="https://www.linkedin.com/in/haseeb-akram-a88171284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">Linkedin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <p class="mb-0 text-white mt-5">
                            © Copyright 2025
                            <a href="/" class="text-primary">Euro Bags</a>
                            All Rights Reserved
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!--=================================
footer -->



    <!-- end footer -->
    <a class="whatspp-plugin" href="https://wa.me/923461157705" target="_blank">
        <img src="{{ asset('images/whts.png') }}" class="img-responsive float-right" style="height:70px">
    </a>

    <!-- cart start -->
    <!-- <div class="addcart_btm_popup" id="fixed_cart_icon">
    <a href="{{ route('cart') }}" class="fixed_cart">
        <i class="ti-shopping-cart"></i>
    </a>
</div> -->
    <!-- cart end -->






    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- exitintent jquery-->
    <script src="{{ asset('assets/js/jquery.exitintent.js') }}"></script>
    <script src="{{ asset('assets/js/exit.js') }}"></script>

    <!-- popper js-->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <!-- slick js-->
    <script src="{{ asset('assets/js/slick.js') }}"></script>

    <!-- menu js-->
    <script src="{{ asset('assets/js/menu.js') }}"></script>

    <!-- lazyload js-->
    <!-- <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script> -->

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{ asset('assets/js/bootstrap-notify.min.js') }}"></script>

    <!-- Fly cart js-->
    <script src="{{ asset('assets/js/fly-cart.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.elevatezoom.js') }}"></script>
    <!-- Theme js-->
    <script src="{{ asset('assets/js/script-v1.js') }}"></script>


    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

    @yield('scripts')

</body>

</html>
