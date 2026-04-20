@extends('frontend.layout.master')

@section('title', 'Argos Dental')
@section('main-container')
<style>
    /* General Styling */
.dot-list {
    font-family: 'Arial', sans-serif;
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Category Styles */
.category-list {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.category-item {
    margin-bottom: 15px;
    padding: 10px;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.category-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.category-link {
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #333;
    display: block;
}

.category-link:hover {
    color: #007bff;
}

/* Subcategory Styles */
.subcategory-list {
    list-style-type: none;
    margin: 10px 0 0 20px;
    padding: 0;
}

.subcategory-item {
    margin-bottom: 5px;
}

.subcategory-link {
    text-decoration: none;
    font-size: 14px;
    color: #555;
    display: inline-block;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.subcategory-link:hover {
    background-color: #007bff;
    color: #fff;
}

</style>
 <!-- ==================== Start Slider ==================== -->

 <header class="work-header section-padding pb-0">
    <div class="container mt-80">
        <div class="row">
            <div class="col-12">
                <div class="caption">
                    <h6 class="sub-title">Shopping</h6>
                    <h1>Shop.</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Slider ==================== -->



<!-- ==================== Start shop ==================== -->

<section class="main-shop section-padding">
    <div class="container">
        <div class="row md-marg">
            <div class="col-lg-3">
                <div class="sidebar">

                    <div class="item search mb-40">
                        <form action="contact.php">
                            <div class="form-group">
                                <input type="text" name="shop_search" placeholder="Search">
                                <button type="submit">
                                    <span class="pe-7s-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="item categories mb-40">
                        <div class="title">
                            <h6>Categories</h6>
                        </div>
                        <div class="">
                            <ul class="category-list">
                                @foreach($categories as $category)
                                    <li class="category-item">
                                        <a href="#" class="category-link">{{ $category->name }}</a>
                                        @if($category->subcategories->isNotEmpty())
                                            <ul class="subcategory-list">
                                                @foreach($category->subcategories as $subcategory)
                                                    <li class="subcategory-item">
                                                        <a href="{{ route('product.show', ['categorySlug' => $category->slug, 'subcategorySlug' => $subcategory->slug]) }}" 
                                                           class="subcategory-link">
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
                    

                    {{-- <div class="item price-range mb-40">
                        <div class="title">
                            <h6>Filter by Price</h6>
                        </div>
                        <div class="wrapper">
                            <div class="slider-range">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="10" max="10000" value="10"
                                    step="100">
                                <input type="range" class="range-max" min="0" max="10000" value="7500"
                                    step="100">
                            </div>
                            <div class="price-input d-flex align-items-center mt-15">
                                <div>
                                    <div class="field">
                                        <span>$</span>
                                        <input type="number" class="input-min" value="10">
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="field">
                                        <span>$</span>
                                        <input type="number" class="input-max" value="7500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="item best-sale mb-40">
                        <div class="title">
                            <h6>Best Sellers</h6>
                        </div>

                        <div class="line-list d-flex align-items-center">
                            <div>
                                <div class="img">
                                    <img src="assets/imgs/shop/1.jpg" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="cont">
                                    <div class="rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h6>Men Hooded</h6>
                                    <h5>$130.00</h5>
                                </div>
                            </div>
                            <a href="#0" class="over-link"></a>
                        </div>
                        <div class="line-list d-flex align-items-center">
                            <div>
                                <div class="img">
                                    <img src="assets/imgs/shop/3.jpg" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="cont">
                                    <div class="rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h6>Men Hooded</h6>
                                    <h5>$130.00</h5>
                                </div>
                            </div>
                            <a href="#0" class="over-link"></a>
                        </div>
                        <div class="line-list d-flex align-items-center">
                            <div>
                                <div class="img">
                                    <img src="assets/imgs/shop/5.jpg" alt="">
                                </div>
                            </div>
                            <div>
                                <div class="cont">
                                    <div class="rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h6>Men Hooded</h6>
                                    <h5>$130.00</h5>
                                </div>
                            </div>
                            <a href="#0" class="over-link"></a>
                        </div>
                    </div> --}}

                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-products">
                    <div class="top-side d-flex align-items-end mb-40">
                        <div>
                            <h6 class="fz-16 line-height-1">Showing 1–9 of 12 results</h6>
                        </div>
                        <div class="ml-auto">
                            <div>
                                <select class="form-control">
                                    <option value="Most Popular">Most Popular</option>
                                    <option value="Sort by average rating">Sort by average rating</option>
                                    <option value="Price [Lowest to Highest]">Price [Lowest to Highest]</option>
                                    <option value="Price [Highest to Lowest]">Price [Highest to Lowest]</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="item mb-50">
                                <div class="img">
                                    @if ($product->product_images)
                                    @php
                                        $images = json_decode($product->product_images);
                                    @endphp
                                    @if (count($images) > 0)
                                        <div class="image-preview mt-2" style="display: inline-block; margin-right: 10px;">
                                            <img src="{{ asset('images/products/' . $images[0]) }}" alt="Product Image" width="100">
                                        </div>
                                    @endif
                                @endif
                                
                                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="add-cart">Add to Cart</a>
                                    <span class="fav"><i class="far fa-heart"></i></span>
                                </div>
                                <div class="cont">
                                    <div class="rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h6>{{$product->product_name}}</h6>
                                    <h5>$130.00</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination d-flex justify-content-center mt-30">
                        <ul class="rest">
                            <li class="active"><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End shop ==================== -->
@push('scripts')

    <script src="{{url('assets/frontend/js/gsap.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/ScrollTrigger.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/ScrollSmoother.min.js')}}"></script>
    <script src="{{url('assets/frontend/js//price-range.js')}}"></script>
    <script src="{{url('assets/frontend/js/smoother-script.js')}}"></script>
@endpush

@endsection
