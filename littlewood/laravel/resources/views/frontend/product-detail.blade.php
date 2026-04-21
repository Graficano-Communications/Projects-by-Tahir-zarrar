@extends('frontend.layouts.master')
@section('title' ,'News & Events')
@section('main-container')
<style>
     .big-section {
    padding: 60px 0 !important;
    }
</style>
        <!-- start section -->
        <section class="big-section wow animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 shopping-content d-flex flex-column flex-lg-row align-items-md-center">
                        <div class="w-60 md-w-100">
                            <div class="product-images-box lightbox-portfolio row">
                                <div class="col-12 col-lg-9 position-relative px-lg-0 order-lg-2 product-image md-margin-10px-bottom">
                                    <div class="swiper-container product-image-slider" data-slider-options='{ "spaceBetween": 10, "watchOverflow": true, "navigation": { "nextEl": ".slider-product-next", "prevEl": ".slider-product-prev" }, "thumbs": { "swiper": { "el": ".product-image-thumb", "slidesPerView": "auto", "spaceBetween": 15, "direction": "vertical", "navigation": { "nextEl": ".swiper-thumb-next", "prevEl": ".swiper-thumb-prev" } } } }' data-thumb-slider-md-direction="horizontal">
                                        <div class="swiper-wrapper">
                                            <!-- start slider item -->
                                            @foreach ($productImages  as $pro)
                                            <div class="swiper-slide">
                                                <a class="gallery-link" href="{{ asset('uploads/products/' . $pro->image_path) }}"><img class="w-100" src="{{ asset('uploads/products/' . $pro->image_path) }}" alt="{{ $pro->name }}" alt=""></a>
                                            </div>
                                            @endforeach
                                            
                                            <!-- end slider item -->
                                        </div>
                                    </div>
                                    <div class="slider-product-next swiper-button-next text-extra-dark-gray"><i class="fa fa-chevron-right"></i></div>
                                    <div class="slider-product-prev swiper-button-prev text-extra-dark-gray"><i class="fa fa-chevron-left"></i></div>
                                </div>
                                <div class="col-12 col-lg-3 order-lg-1 position-relative single-product-thumb md-margin-50px-bottom sm-margin-40px-bottom">
                                    <div class="swiper-container product-image-thumb slider-vertical padding-15px-lr padding-45px-bottom md-no-padding left-0px">
                                        <div class="swiper-wrapper">
                                            @foreach ($productImages  as $pro )
                                            <div class="swiper-slide"><img class="w-100" src="{{ asset('uploads/products/' . $pro->image_path) }}" alt=""></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="swiper-thumb-next-prev text-center">
                                        <div class="swiper-button-prev swiper-thumb-prev"><i class="fa fa-chevron-up"></i></div>
                                        <div class="swiper-button-next swiper-thumb-next"><i class="fa fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-40 md-w-100 product-summary padding-7-rem-left lg-padding-5-rem-left md-no-padding-left">
                            <div class="d-flex align-items-center margin-3-half-rem-tb md-margin-1-half-rem-tb">
                                <div class="flex-grow-1">
                                    <div class="text-extra-dark-gray font-weight-500 text-extra-large alt-font margin-5px-bottom">{{$product->name}}</div>
                                </div>
                                <div class="text-end line-height-30px">
                                    <div><a href="#" class="letter-spacing-3px"><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i><i class="fas fa-star text-very-small text-golden-yellow"></i></a></div>
                                    <span class="text-small"><span class="text-extra-dark-gray">SKU: </span>{{$product->sku}}</span>
                                </div>
                            </div>
                            <div class="last-paragraph-no-margin">
                                <p>{!!$product->description1!!}</p>
                            </div>
                            <div class="margin-4-rem-top">
                                
                                <div class="margin-4-rem-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">Size</label>
                                    <p class="mb-0">Details of sizes avaliable </p>
                                    <label class="size-chart text-uppercase w-60px margin-10px-left">
                                        <a class="modal-popup alt-font text-extra-small text-decoration-line-bottom" href="#modal-popup">Open Size Chart</a>
                                    </label>
                                    <div id="modal-popup" class="white-popup-block mfp-hide w-55 mx-auto position-relative bg-white modal-popup-main padding-5-rem-all xl-w-70 md-w-80 md-padding-4-rem-all xs-w-95 xs-padding-3-rem-all">
                                        <div class="table-style-01">
                                            <img class="w-100" src="{{ asset('uploads/products/' . $product->s_image) }}" alt="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="border-top border-width-1px border-color-medium-gray pt-0 wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0 tab-style-07">
                        <ul class="nav nav-tabs justify-content-center text-center alt-font font-weight-500 text-uppercase margin-9-rem-bottom border-bottom border-color-medium-gray md-margin-50px-bottom sm-margin-35px-bottom">
                            <li class="nav-item"><a data-bs-toggle="tab" href="#description" class="nav-link active">Description</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#additionalinformation">Additional information</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content">
                    <!-- start tab item -->
                    <div id="description" class="tab-pane fade in active show">
                        <div class="row align-items-center">
                            <div class="col-12  md-margin-50px-bottom">
                                {!!$product->description2!!}
                            </div>
                            {{-- <div class="col-12 col-lg-6 offset-xl-1">
                                <img src="images/products-details-tab-01.jpg" alt="">
                            </div> --}}
                        </div>
                    </div>
                    <!-- end tab item -->
                    <!-- start tab item -->
                    <div id="additionalinformation" class="tab-pane fade">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <table class="table-style-02">
                                    <tbody>
                                        <tr>
                                            <th class="text-extra-dark-gray font-weight-500">Color</th>
                                            <td>{{$product->colors}}</td>
                                        </tr>
                                        <tr class="bg-light-gray">
                                            <th class="text-extra-dark-gray font-weight-500">Size</th>
                                            <td>{{$product->sizes}}</td>
                                        </tr>
                                        <tr>
                                            <th class="text-extra-dark-gray font-weight-500">Style/Type</th>
                                            <td>Sports, Formal</td>
                                        </tr>
                                        {{-- <tr class="bg-light-gray">
                                            <th class="text-extra-dark-gray font-weight-500">Lining</th>
                                            <td>100% polyester taffeta with a DWR finish</td>
                                        </tr> --}}
                                        <tr>
                                            <th class="text-extra-dark-gray font-weight-500">Material</th>
                                            <td>Leather, Cotton, Silk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                                
                        </div>
                    </div>
                    <!-- end tab item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        

@endsection 