@extends('frontend.layout.master')

@section('title', 'Yamada')
@section('main-container')



    <!-- page-title -->
    <div class="tf-page-title">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center">New Arrival</div>
                    <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /page-title -->

    <section class="flat-spacing-1">
        <div class="container">
            <div class="tf-shop-control grid-3 align-items-center">
                <div class="tf-control-filter">
                    <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft"
                        class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a>
                </div>
            </div>
            <div class="wrapper-control-shop">
                @if ($products->isEmpty())
                    <div class="alert alert-warning text-center">
                        No Product available against this Category.
                    </div>
                @else
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
                @endif
            </div>
            
        </div>
    </section>

    <!-- Filter -->
    <div class="offcanvas offcanvas-start canvas-filter" id="filterShop">
        <div class="canvas-wrapper">
            <header class="canvas-header">
                <div class="filter-icon">
                    <span class="icon icon-filter"></span>
                    <span>Filter</span>
                </div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </header>
            <div class="canvas-body">
                <div class="widget-facet wd-categories">
                    <div class="facet-title d-flex justify-content-between align-items-center">
                        <span class="fw-bold">Product Categories</span>
                    </div>
                    <div id="categories" class="collapse show">
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $category)
                                <!-- Main Category -->
                                <li class="list-group-item cate-item fw-bold">
                                    <div class="facet-title d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse" data-bs-target="#subcategories{{ $category->id }}"
                                        aria-expanded="true">
                                        <span>{{ $category->name }}</span>
                                        <span class="icon icon-arrow-up"></span>
                                    </div>
                                    <!-- Subcategories -->
                                    @if ($category->subcategories->isNotEmpty())
                                        <ul class="list-group collapse mt-2 ps-3" id="subcategories{{ $category->id }}">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li class="list-group-item border-0">
                                                    <a href="{{ route('product.show', ['categorySlug' => $category->slug, 'subcategorySlug' => $subcategory->slug]) }}"
                                                        class="text-muted text-decoration-none">
                                                        {{ $subcategory->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Filter -->

@endsection
