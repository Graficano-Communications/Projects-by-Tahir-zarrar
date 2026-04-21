<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{ asset('assets/images/eurocon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/eurocon.png') }}" type="image/x-icon">
    <title>{{ config('app.name') }} - {{ $product->meta_title }}</title>
    <meta name="description" content="{{ $product->meta_description }}">
    <meta name="keywords" content="{{ $product->meta_description }}">
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

                <div class="navbar-collapse collapse align-items-center justify-content-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>

                        @php
                            $category = \App\category::all()->sortBy('sequence');
                        @endphp

                        <li class="dropdown nav-item mega-menu ">
                            <a href="#" class="nav-link active" data-toggle="dropdown">Products</a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        @foreach ($category as $cat)
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
            <div class="row">
                <div class="col-sm-12">
                    @php
                        $category = \App\category::where('id', $product->category_id)->first();
                        $subcategory = \App\subcategory::where('id', $product->sub_category_id)->first();
                    @endphp
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('products.catgeory', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('product_by_category', [$category->slug, $subcategory->slug]) }}">
                                    {{ $subcategory->name }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">

                    <!-- Product Images -->
                    <div class="col-lg-5">
                        <div class="product-slick">
                            @php
                                if (empty($image)) {
                                    $image = \App\image::where('product_id', $product->id)->first();
                                }
                                $imags = json_decode($image->images);
                            @endphp
                            @foreach ($imags as $key => $img)
                                <div>
                                    <img src="{{ asset('images/products/' . $img) }}" alt=""
                                        class="img-fluid image_zoom_cls-{{ $key }}">
                                </div>
                            @endforeach
                        </div>

                        <div class="col order-up">
                            <div class="row imgae-outside-thumbnail">
                                <div class="col-12 p-0">
                                    <div class="slider-nav">
                                        @php
                                            $fimags = json_decode($image->images);
                                            $imags = json_decode($image->images);
                                        @endphp
                                        @foreach ($imags as $key => $img)
                                            <div>
                                                <img src="{{ asset('images/products/' . $img) }}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="col-lg-7 rtl-text">
                        <div class="product-right">
                            <h2>{{ $product->name }}</h2>

                            <h6 class="product-title size-text">Available Colors</h6>
                            @php
                                $variations = \App\product_variation::where('product_id', $product->id)->get();
                            @endphp
                            <ul class="image-swatch" style="display:flex">
                                @foreach ($variations->unique('color_id') as $var)
                                    @php
                                        $color_count = \App\product_variation::where('product_id', $var->product_id)
                                            ->where('color_id', $var->color_id)
                                            ->count();
                                        $status_count = \App\product_variation::where('product_id', $var->product_id)
                                            ->where('color_id', $var->color_id)
                                            ->where('status', 0)
                                            ->count();
                                        $status = $color_count == $status_count ? 0 : 1;
                                        $imags = json_decode($var->color->images);
                                    @endphp

                                    @foreach ($imags as $key => $img)
                                        @if ($loop->first)
                                            <li class="@if ($var->color_id == $image->id) active @endif">
                                                <a @if ($status == 0) style="pointer-events: none; text-align:center;" @endif
                                                    href="{{ route('product', ['slug' => $product->slug, 'color' => $var->color->color]) }}">
                                                    <img src="{{ asset('images/products/' . $img) }}"
                                                        style="width:50px;height:auto; @if ($status == 0) opacity:0.2 @endif"
                                                        alt="{{ $var->color->color }}" class="img-fluid"
                                                        title="{{ $var->color->color }}">
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>

                            <div class="product-description border-product">
                                @if ($product->size_chart)
                                    <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        {{ $product->name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset('images/products/size_charts/' . $product->size_chart) }}"
                                                        alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @php
                                    $options = \App\product_variation::where('color_id', $image->id)->get();
                                    $check = \App\option::where('product_id', $product->id)->first();
                                @endphp

                                @if ($check)
                                    @foreach ($options->unique('option_id') as $option)
                                        <h6 class="product-title size-text">{{ $option->option->name }}</h6>
                                    @endforeach

                                    <div class="size-box">
                                        <ul>
                                            @foreach ($options as $key => $opt)
                                                <li id="{{ $opt->option_value->id }}"
                                                    onclick="set_value('{{ $opt->option_value->id }}', '{{ $opt->option_value->name }}', '{{ $opt->qty }}');"
                                                    @if ($opt->status == 0) style="pointer-events: none; opacity:0.5;" title="Out of stock" @endif>
                                                    <span>{{ $opt->option_value->name }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @php
                                    $max = \App\product_variation::where('color_id', $image->id)->first();
                                @endphp

                                <form action="#" method="Post">
                                    <input type="hidden" name="id" id="id"
                                        value="{{ $product->id }}">
                                    <input type="hidden" name="name" id="name"
                                        value="{{ $product->name }}">
                                    <input type="hidden" name="price" id="price"
                                        value="@if ($product->sale_price < $product->price) {{ $product->sale_price }} @else {{ $product->price }} @endif">
                                    <input type="hidden" value="{{ $image->color }}" required name="color"
                                        id="clr">

                                    @if ($check)
                                        <input type="hidden" value="{{ $check->name }}" id="option_name">
                                        <input type="hidden" value="" id="option_value">
                                        <input type="hidden" value="true" id="check">
                                    @else
                                        <input type="hidden" value="false" id="check">
                                    @endif

                                    @php $imgs = json_decode($image->images); @endphp
                                    @foreach ($imgs as $key => $immg)
                                        @if ($loop->first)
                                            <input type="hidden" value="{{ asset('images/products/' . $immg) }}"
                                                required name="image" id="image">
                                        @endif
                                    @endforeach

                                    <input type="hidden" name="_token" id="token"
                                        value="{{ Session::token() }}">

                                    @if ($status == 1)
                                    <div class="d-sm-flex  justify-content-between">
                                        <!-- In Stock Buttons -->
                                        <div class="product-buttons mb-sm-0 mb-2 ">
                                            <a href="mailto:info@euro-bags.com" style="margin-left: 0px"
                                                class="btn btn-solid">
                                                <i class="fa fa-envelope"></i> Make Inquiry
                                            </a>
                                        </div>
                                        <div class="product-buttons mb-sm-0">
                                            <a href="https://wa.me/923461157705?text={{ rawurlencode('Hello, I am interested in ' . $product->name) }}" 
                                            class="btn btn-solid" style="margin-left:0;" target="_blank">
                                                <i class="fa fa-whatsapp"></i> Contact WhatsApp
                                            </a>
                                        </div>
                                    </div>
                                        
                                    @else
                                        <p>Sorry ! This product is out of stock</p>
                                    @endif
                                </form>
                            </div>

                            <!-- Product Description -->
                            <div class="border-product product-des">
                                <h6 class="product-title">Product Details</h6>
                                <p>{!! $product->description !!}</p>
                            </div>

                            <!-- Accordion Section -->
                            <div class="row product-accordion">
                                <div class="col-sm-12">
                                    <div class="accordion theme-accordion" id="accordionExample">

                                        <!-- Details -->
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne"
                                                        aria-expanded="false" aria-controls="collapseOne">
                                                        Details
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>{!! $product->features !!}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Terms & Conditions -->
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Terms and Conditions
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <div class="mt-2 text-center">
                                                        <p>{!! $product->terms_conditions !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Review -->
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        Review
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <!-- Reviews List -->
                                                    <ul class="comment-section">
                                                        @php
                                                            $reviews = \App\review::where(
                                                                'product_id',
                                                                $product->id,
                                                            )->get();
                                                        @endphp
                                                        @foreach ($reviews as $review)
                                                            @if ($review->status == 1)
                                                                <li
                                                                    style="border-bottom:1px solid #d3d3d3;padding-bottom:10px">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <h3>{{ $review->title }}</h3>
                                                                            <h6>
                                                                                {{ $review->name }}
                                                                                <span>
                                                                                    ({{ \Carbon\Carbon::parse($review->created_at)->format('d M Y ') }})
                                                                                </span>
                                                                            </h6>
                                                                            <p style="padding:0px">
                                                                                {{ $review->description }}</p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>

                                                    <!-- Review Form -->
                                                    <h4 style="padding-top:20px;color:#ff4c3b;">Write Review</h4>
                                                    <form class="theme-form" action="{{ route('add_review') }}"
                                                        method="post">
                                                        <div class="form-row">
                                                            <div class="col-md-6 mt-2">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="name" id="name"
                                                                    placeholder="Enter Your name" required>
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <label for="email">Email</label>
                                                                <input type="text" class="form-control"
                                                                    id="email" name="email" placeholder="Email"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-12 mt-2">
                                                                <label for="title">Review Title</label>
                                                                <input type="text" class="form-control"
                                                                    id="title" name="title"
                                                                    placeholder="Enter your Review Subject" required>
                                                            </div>
                                                            <div class="col-md-12 mt-2">
                                                                <label for="description">Review Description</label>
                                                                <textarea class="form-control" name="description" id="description" rows="6"
                                                                    placeholder="Write Your Testimonial Here" required></textarea>
                                                            </div>
                                                            <input type="hidden" value="{{ $product->id }}"
                                                                name="product_id">
                                                            @csrf
                                                            <div class="col-md-12 mt-4">
                                                                <button class="btn btn-solid" type="submit">Submit
                                                                    Your Review</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Review -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Details -->

                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->



    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">

                        @if ($product->video)
                            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab"
                                    href="#top-contact" role="tab" aria-selected="false">Video</a>
                                <div class="material-border"></div>
                            </li>
                        @endif

                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">

                        @if ($product->video)
                            <div class="tab-pane fade" id="top-contact" role="tabpanel"
                                aria-labelledby="contact-top-tab">
                                <div class="mt-4 text-center">
                                    <iframe width="100%" height="650px"
                                        src="https://www.youtube.com/embed/{{ substr($product->video, strpos($product->video, '=') + 1) }}"
                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

    <!-- Add to cart modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg addtocart">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">

                                        <a href="{{ route('product', [$product->slug, $image->Color]) }}">
                                            @php  $imags = json_decode($image->images); @endphp
                                            @foreach ($imags as $img)
                                                @if ($loop->first)
                                                    <img class="img-fluid pro-img"
                                                        src="{{ asset('images/products/' . $img) }}" alt="">
                                                @endif
                                            @endforeach
                                        </a>
                                        <div class="media-body align-self-center text-center">
                                            <a href="#">
                                                <h6>
                                                    <i class="fa fa-check"></i>Item
                                                    <span>{{ $product->name }}</span>
                                                    <span> successfully added to your Cart</span>
                                                </h6>
                                            </a>
                                            <div class="buttons">
                                                <a href="{{ route('cart') }}" class="view-cart btn btn-solid">Your
                                                    cart</a>
                                                <a href="{{ route('order') }}" class="checkout btn btn-solid">Check
                                                    out</a>
                                                <a href="/" class="continue btn btn-solid">Continue shopping</a>
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
    </div>
    <!-- Add to cart modal popup end-->
    <p style="display:none" id="cart_option"></p>


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


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


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
    <script>
        var arr = new Object();

        function addToCart() {
            var id = document.getElementById('id').value;
            var name = document.getElementById('name').value;
            var qty = document.getElementById('quantity').value;
            var price = document.getElementById('price').value;
            var color = document.getElementById('clr').value;
            var image = document.getElementById('image').value;
            var check = document.getElementById('check').value;
            var data;
            if (check == 'true') {
                var option_name = document.getElementById('option_name').value;
                var option_value = document.getElementById('option_value').value;
                if (option_value == "") {
                    alert("Please Select " + option_name);
                    data = "";
                } else {
                    arr[option_name] = option_value;
                    data = [id, name, qty, price, color, image, arr];
                }


            } else {
                data = [id, name, qty, price, color, image];
            }
            if (data !== "") {
                var token = document.getElementById('token').value;
                data = {
                    '_token': token,
                    'data': data
                };
                console.log(data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '/add_to_cart',
                    data: data,
                    success: function(data) {
                        $data = $(data);
                        console.log($data);
                        $('#showcart').empty();
                        var total = 0.0;
                        for (var key in data) {
                            if (data.hasOwnProperty(key)) {
                                $('<li><div class="media"><a href="#"><img class="mr-3" src="' + data[key][
                                            "options"
                                        ]["image"] + '" alt=""></a><div class="media-body"><a href="#"><h4>' +
                                        data[key]["name"] + '</h4></a><h4><span>' + data[key]["qty"] +
                                        ' x RS.' + data[key]["price"] +
                                        '</span></h4></div></div><div class="close-circle"><a href="http://removecart/' +
                                        data[key]["rowId"] +
                                        '"><i class="fa fa-times" aria-hidden="true"></i></a></div></li>')
                                    .appendTo('#showcart');
                            }
                            total = total + data[key]["subtotal"];
                        }

                        $(' <li><div class="total"><h5>subtotal : <span>RS. ' + total +
                            '</span></h5></div></li><li><div class="buttons"><a href="{{ route('cart') }}" class="view-cart">view cart</a><a href="{{ route('order') }}" class="checkout">checkout</a></div></li>'
                            ).appendTo('#showcart');
                        $("#addtocart").modal('show');
                    },
                    error: function(request, status, error) {
                        console.log(request.responseText);
                    }
                });

            }
        }



        function set_value($id, name, max) {
            var id = "#" + $id;
            $(id).addClass('opt-active').siblings().removeClass('opt-active');
            document.getElementById('quantity').max = max;
            document.getElementById('option_value').value = name;
        }

        function minmax() {
            var max = document.getElementById('quantity').max;
            var value = document.getElementById('quantity').value;
            if (parseInt(value) >= max) {
                alert("Maximum Quanity available in stock is : " + max);
                console.log(max.toString());
                document.getElementById('quantity').value = 0;
            }

        }
    </script>

    @yield('scripts')

</body>

</html>
