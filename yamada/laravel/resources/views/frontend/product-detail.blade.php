@extends('frontend.layout.master')
@section('title', 'Yamada')
@section('main-container')
    <style>
        .table-responsive-container {
            max-height: 500px;
            /* Adjust this height as needed */
            overflow-y: auto;
        }

        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px 8px;
            /* Adds space between columns and rows */
        }

        .custom-table thead th {
            background: linear-gradient(135deg, #B80000, #660000);
            /* Color from the image */
            color: white;
            border-radius: 5px;
            /* To make the header rounded */
            text-align: center;
            padding: 15px;
            min-width: 120px;
            /* Adjust the minimum width if needed */
            border: none;
            /* Ensures no border is applied */
        }

        .custom-table tbody td {
            text-align: center;
            padding: 15px;
            /* Adds padding between columns */
            background-color: #f8f9fa;
            /* Light background for separation */
            border-radius: 10px;
            /* To make the cell edges rounded */
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            /* Optional: Adds a light shadow for separation */
        }

        /* Optional: Make sure table cells wrap text properly */
        .custom-table tbody td,
        .custom-table thead th {
            white-space: nowrap;
            /* Prevents text wrapping */
        }
        .btn-fill {
            background: linear-gradient(135deg, #B80000, #660000);
            border: 1px solid #B80000;
            color: var(--white);
        }
    </style>

    <!-- breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
                <div class="tf-breadcrumb-list">
                    <a href="{{ route('home') }}" class="text">Home</a>
                    <i class="icon icon-arrow-right"></i>
                    <a  class="text">Product</a>
                    <i class="icon icon-arrow-right"></i>
                    <span class="text">{{ $product->product_name }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
    <!-- default -->
    <section class="flat-spacing-4 pt_0">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                    data-direction="vertical">
                                    <div class="swiper-wrapper stagger-wrap">
                                        <!-- beige -->
                                        @if ($product->product_images)
                                            @foreach (json_decode($product->product_images) as $image)
                                                <div class="swiper-slide stagger-item" data-color="beige">
                                                    <div class="item">
                                                        <img class="lazyload"
                                                            data-src="{{ asset('images/products/' . $image) }}"
                                                            src="{{ asset('images/products/' . $image) }}"
                                                            alt="img-product">
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                    <div class="swiper-wrapper">
                                        <!-- beige -->
                                        @if ($product->product_images)
                                            @foreach (json_decode($product->product_images) as $image)
                                                <div class="swiper-slide" data-color="beige">
                                                    <a target="_blank" class="item" data-pswp-width="770px"
                                                        data-pswp-height="1075px">
                                                        <img class="tf-image-zoom lazyload"
                                                            data-zoom="{{ asset('images/products/' . $image) }}"
                                                            data-src="{{ asset('images/products/' . $image) }}"
                                                            src="https://dummyimage.com/713x1070/ccc2cc/0011ff"
                                                            alt="">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="swiper-button-next button-style-arrow thumbs-next"></div>
                                    <div class="swiper-button-prev button-style-arrow thumbs-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-list other-image-zoom">
                                <div class="tf-product-info-title">
                                    <h5>{{ $product->product_name }}</h5>
                                </div>
                                <div class="rating">
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                    <i class="icon-star"></i>
                                </div>

                                <div class="table-responsive-container">
                                    <h6>Variations:</h6>
                                    <table class="table custom-table">
                                        <thead class="border-none">
                                            <tr>
                                                <th> Name/Sku</th>
                                                <th>Size</th>
                                                <th>Description</th>
                                                <th>Finish</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Example rows. You can add more rows to test the scrolling behavior. -->
                                            @foreach ($product->variations as $variation)
                                                <tr>
                                                    <td>{{ $variation->name }}</td>
                                                    <td>{{ $variation->size }}</td>
                                                    <td>{{ $variation->code }}</td>
                                                    <td>{{ $variation->finish }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex align-items-center gap-1">

                                    <a href="mailto:info@Yamadainst.com?subject=Inquiry about {{ urlencode($product->product_name) }}&body=Product Name: {{ urlencode($product->product_name) }}"
                                        class="tf-btn style-2 btn-fill btn-icon animate-hover-btn">
                                        <span>Inquire Now<i class="icon icon-arrow1-top-left"></i></span>
                                    </a>
                                                                         
                                    {{-- <a href="{{ route('catalouges') }}"
                                        class="tf-btn style-2 btn-fill btn-icon animate-hover-btn"><span>Contact Us</span>
                                    </a> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /default -->
    <!-- tabs -->
    {{-- <section class="flat-spacing-17 pt_0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-tabs style-has-border">
                        <ul class="widget-menu-tab">
                            <li class="item-title active">
                                <span class="inner">Description</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Shipping</span>
                            </li>
                            <li class="item-title">
                                <span class="inner">Return Policies</span>
                            </li>
                        </ul>
                        <div class="widget-content-tab">
                            <div class="widget-content-inner active">
                                <div class="">
                                    <p class="mb_30">
                                        {{ $product->product_description }}
                                    </p>
                                </div>
                            </div>
                            <div class="widget-content-inner">
                                <div class="tf-page-privacy-policy">
                                    <div class="title">The Company Private Limited Policy</div>
                                    <p>The Company Private Limited and each of their respective subsidiary, parent and
                                        affiliated companies is deemed to operate this Website (“we” or “us”) recognizes
                                        that you care how information about you is used and shared. We have created this
                                        Privacy Policy to inform you what information we collect on the Website, how we use
                                        your information and the choices you have about the way your information is
                                        collected and used. Please read this Privacy Policy carefully. Your use of the
                                        Website indicates that you have read and accepted our privacy practices, as outlined
                                        in this Privacy Policy.</p>
                                    <p>Please be advised that the practices described in this Privacy Policy apply to
                                        information gathered by us or our subsidiaries, affiliates or agents: (i) through
                                        this Website, (ii) where applicable, through our Customer Service Department in
                                        connection with this Website, (iii) through information provided to us in our free
                                        standing retail stores, and (iv) through information provided to us in conjunction
                                        with marketing promotions and sweepstakes.</p>
                                    <p>We are not responsible for the content or privacy practices on any websites.</p>
                                    <p>We reserve the right, in our sole discretion, to modify, update, add to, discontinue,
                                        remove or otherwise change any portion of this Privacy Policy, in whole or in part,
                                        at any time. When we amend this Privacy Policy, we will revise the “last updated”
                                        date located at the top of this Privacy Policy.</p>
                                    <p>If you provide information to us or access or use the Website in any way after this
                                        Privacy Policy has been changed, you will be deemed to have unconditionally
                                        consented and agreed to such changes. The most current version of this Privacy
                                        Policy will be available on the Website and will supersede all previous versions of
                                        this Privacy Policy.</p>
                                    <p>If you have any questions regarding this Privacy Policy, you should contact our
                                        Customer Service Department by email at marketing@company.com</p>
                                </div>
                            </div>
                            <div class="widget-content-inner">
                                <div class="title">The Company Private Limited Policy</div>
                                <p>The Company Private Limited and each of their respective subsidiary, parent and
                                    affiliated companies is deemed to operate this Website (“we” or “us”) recognizes that
                                    you care how information about you is used and shared. We have created this Privacy
                                    Policy to inform you what information we collect on the Website, how we use your
                                    information and the choices you have about the way your information is collected and
                                    used. Please read this Privacy Policy carefully. Your use of the Website indicates that
                                    you have read and accepted our privacy practices, as outlined in this Privacy Policy.
                                </p>
                                <p>Please be advised that the practices described in this Privacy Policy apply to
                                    information gathered by us or our subsidiaries, affiliates or agents: (i) through this
                                    Website, (ii) where applicable, through our Customer Service Department in connection
                                    with this Website, (iii) through information provided to us in our free standing retail
                                    stores, and (iv) through information provided to us in conjunction with marketing
                                    promotions and sweepstakes.</p>
                                <p>We are not responsible for the content or privacy practices on any websites.</p>
                                <p>We reserve the right, in our sole discretion, to modify, update, add to, discontinue,
                                    remove or otherwise change any portion of this Privacy Policy, in whole or in part, at
                                    any time. When we amend this Privacy Policy, we will revise the “last updated” date
                                    located at the top of this Privacy Policy.</p>
                                <p>If you provide information to us or access or use the Website in any way after this
                                    Privacy Policy has been changed, you will be deemed to have unconditionally consented
                                    and agreed to such changes. The most current version of this Privacy Policy will be
                                    available on the Website and will supersede all previous versions of this Privacy
                                    Policy.</p>
                                <p>If you have any questions regarding this Privacy Policy, you should contact our Customer
                                    Service Department by email at marketing@company.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- /tabs -->

    @if ($products->count() > 0)
        <section class="flat-spacing-1">
            <div class="container">
                <div class="flat-title">
                    <span class="title">People Also Bought</span>
                </div>
                <div class="wrapper-control-shop">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="card-product style-2 ">
                                <div class="card-product-wrapper">
                                    @if ($product->product_images)
                                        @php
                                            $images = json_decode($product->product_images, true) ?? [];
                                            $firstImage = !empty($images)
                                                ? asset('images/products/' . $images[0])
                                                : 'https://dummyimage.com/700x700/ccc2cc/0011ff';
                                            $hoverImage =
                                                count($images) > 1
                                                    ? asset('images/products/' . $images[1])
                                                    : asset('images/products/' . $images[0]);
                                        @endphp
            
                                        @if (!empty($images))
                                            <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                class="product-img">
                                                <img class="lazyload img-product" data-src="{{ $firstImage }}"
                                                    src="{{ $firstImage }}" alt="image-product">
            
                                                <img class="lazyload img-hover" data-src="{{ $hoverImage }}"
                                                    src="{{ $hoverImage }}" alt="image-product">
                                            </a>
                                        @endif
                                    @endif
            
                                    <div class="list-product-btn absolute-3">
                                        <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                            class="box-icon quickview style-2">
                                            <span class="icon icon-view"></span>
                                            <span class="text">QUICK VIEW</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product-info my-3">
                                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                        class="title link">{{ $product->product_name }}</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif



@endsection
