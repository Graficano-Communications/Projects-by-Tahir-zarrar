@extends('frontend.layouts.master')
@section('title' ,'Products')
@section('main-container')
<style>
    .mtb{
        margin-top: 50px;
    }
    section.half-section{
        padding: 20px 0 !important;
    }
    /* Style for the category title links */
/* Base styling for better font and consistency */
body {
    font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Clean and modern font */
    font-size: 16px;
    line-height: 1.6;
}

.shop {
    padding: 1.5rem; /* Padding around the sidebar */
    border: 1px solid #e0e0e0; /* Border around the sidebar */
    border-radius: 8px; /* Rounded corners for the sidebar */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); /* Subtle shadow for depth */
    background: linear-gradient(135deg, #f8f9fa, #e9ecef); /* Light gradient background */
}

/* Shop title styling */
.shop-title {
    font-size: 24px; /* Larger font for titles */
    font-weight: 700; /* Bold titles */
    margin-bottom: 1rem; /* Space below title */
    color: #333; /* Darker title color */
    text-transform: uppercase; /* Uppercase for emphasis */
}

.category-title {
    cursor: pointer;
    text-decoration: none;
    font-size: 20px; /* Adjusted for better hierarchy */
    color: #333; /* Darker color for better contrast */
    padding: 0.75rem 1rem; /* Added padding for better spacing */
    background-color: transparent; /* Transparent background */
    border: none; /* Remove border */
    transition: color 0.3s, transform 0.3s; /* Smooth transition for hover effects */
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.category-title:hover {
    text-decoration: none;
    color: #007bff; /* Bootstrap primary color or any color you prefer */
    transform: translateX(5px); /* Slight shift to the right */
}

/* Style for the subcategory list */
.subcategory-list {
    list-style: none;
    font-size: 16px; /* Slightly smaller font for better hierarchy */
    padding-left: 1rem; /* Indentation for subcategories */
    margin-top: 0.5rem;
}

/* Style for category items */
.category-item {
    margin-bottom: 1rem;
    border-bottom: 1px solid #e0e0e0; /* Subtle bottom border for separation */
    padding-bottom: 0.5rem; /* Space below each category */
}

/* Remove default accordion border */
.accordion-item {
    border: none;
    box-shadow: none; /* Remove box shadow */
}

/* Style for accordion headers */
.accordion-header {
    background-color: transparent;
    border: none;
    transition: none; /* Remove transition */
    padding: 0; /* Remove default padding */
}

.accordion-body {
    padding: 0.75rem 1.5rem; /* Added padding for better spacing */
}

/* Active (open) accordion header */
.accordion-header:not(.collapsed) .category-title {
    color: #fb8500; /* Text color for active state */
    font-weight: 600; /* Make active category title bold */
}

/* Style for subcategory links */
.subcategory-link {
    color: #555; /* Slightly darker color for better readability */
    text-decoration: none;
    transition: color 0.3s;
}

.subcategory-link:hover {
    color: #fb8500; /* Bootstrap primary color or any color you prefer */
    text-decoration: underline; /* Underline on hover */
}

/* Additional spacing and styling for subcategories */
.subcategory-list li {
    margin-bottom: 0.75rem; /* Space between subcategories */
}

/* Add a subtle shadow to the accordion items */
.accordion-item {
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); /* Subtle shadow */
    border-radius: 4px; /* Rounded corners */
    background-color: #fff; /* White background for accordion items */
}

/* Improve spacing around the entire sidebar */
.shop {
    padding: 1.5rem; /* Padding around the sidebar */
    border: 1px solid #e0e0e0; /* Border around the sidebar */
    border-radius: 8px; /* Rounded corners for the sidebar */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); /* Slight shadow for depth */
    background-color: #f9f9f9; /* Light background for contrast */
}


</style>


   <!-- Start page title -->

<section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('frontend/images/half-banner.jpg') }}');">
    <div class="container">
        <div class="row align-items-stretch justify-content-center extra-small-screen">
            <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Products</h1>
                <h2 class="text-white alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Every new print and color of the season</h2>
            </div>
        </div>
    </div>
</section>
<!-- End page title -->
<!-- Start section -->
<section class="shopping-left-side-bar pt-0">
    <div class="container mtb">
       
        <div class="row">
            <div class="col-12 col-lg-3 col-md-4 shopping-sidebar">
                <div class="padding-3-rem-bottom margin-3-rem-bottom wow animate__fadeIn">
                    <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by category </span>
                    <div class="accordion shop " id="categoryAccordion">
                        @foreach ($categories as $category)
                                <div class="category-item accordion-item  active" data-category-id="{{ $category->id }}">
                                <h2 class="accordion-header" id="heading{{ $category->id }}">
                                    <button class="accordion-button collapsed category-title d-flex justify-content-between align-items-center bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $category->id }}" aria-expanded="false" aria-controls="collapse{{ $category->id }}">
                                        {{ $category->name }}
                                        <i class="bi bi-chevron-down"></i>
                                    </button>
                                </h2>
                                    <div id="collapse{{ $category->id }}" class="accordion-collapse collapse show " aria-labelledby="heading{{ $category->id }}" data-bs-parent="#categoryAccordion">
                                    <div class="accordion-body">
                                        <ul class="subcategory-list">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li data-subcategory-id="{{ $subcategory->id }}">
                                                    <a href="{{ route('products.subcategory', $subcategory->id) }}" class="subcategory-link">{{ $subcategory->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-9 col-md-8 shopping-content padding-55px-left md-padding-15px-left sm-margin-30px-bottom">
                <div class="row align-items-center justify-content-center mb-3">
                    <div class="col-2"></div> <!-- Empty column for spacing -->
                
                    <div class="col-4 text-end"> <!-- Column for "Search:" label -->
                        <label for="search" class="form-label">Search:</label>
                    </div>
                
                    <div class="col-6"> <!-- Column for search input and button -->
                        <form action="{{ route('products') }}" method="GET" class="d-flex">
                            <div class="input-group ">
                                <input type="text" class="form-control shadow-none mb-0" name="search" placeholder="Search by product name" aria-label="Search by product name" aria-describedby="button-addon2" value="{{ request()->input('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary border-1 " type="submit" id="button-addon2">Search</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                
                @if($products->isEmpty())
                    <p>No products available in this subcategory.</p>
                @else
                    <ul class="product-listing shop-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start shop item -->
                        @foreach ($products as $product)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="product-box margin-25px-bottom xs-margin-15px-bottom">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="{{ route('product-detail', $product->id) }}">
                                            <img class="default-image" src="{{ asset('uploads/products/' . $product->f_image) }}" alt="{{ $product->name }}" />
                                            <img class="hover-image" src="{{ asset('uploads/products/' . $product->b_image) }}" alt="{{ $product->name }}" />
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-30px-tb">
                                            {{-- <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-bs-placement="top" title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="feather icon-feather-heart"></i></a> --}}
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="{{ route('product-detail', $product->id) }}" class="text-extra-dark-gray font-weight-500 d-inline-block">{{ $product->name }}</a>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                        @endforeach
                        <!-- end shop item -->
                    </ul>
                @endif
                <div class="col-12 d-flex justify-content-center margin-7-half-rem-top md-margin-5-rem-top wow animate__fadeIn">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>
</section>

<!-- End section -->
@endsection

