@extends('frontend.layout.master')
@section('title', 'Argos Dental')
@section('main-container')


<section class="product-details section-padding">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif    
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="img-preview">
                    <div class="gallery-top">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @if ($product->product_images)
                                @foreach (json_decode($product->product_images) as $image)
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="{{ asset('images/products/' . $image) }}" alt="">
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="gallery-thumb mt-10">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @if ($product->product_images)
                                    @foreach (json_decode($product->product_images) as $image)
                                <div class="swiper-slide">
                                    <div class="img">
                                        <img src="{{ asset('images/products/' . $image) }}" alt="">
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="product-info">
                    <div class="top-info">
                        <h6 class="main-color4">$130.00</h6>
                        <div class="d-flex align-items-center">
                            <div>
                                <h4 class="line-height-1">{{$product->product_name}}</h4>
                            </div>
                        </div>
                        <div class="text mt-30">
                            <p>{{$product->product_description}}</p>
                        </div>
                    </div>
                    @foreach ($product->variations as $variation)
                    <div class="prod-order pt-30 pb-30   bord-thin-bottom">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div class="">
                                <ul class="rest">
                                    <li class="d-flex align-items-center mb-15">
                                        <strong>Name/SKU :</strong>
                                        <span class="ml-10">{{ $variation->name }}</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-15">
                                        <strong>Size :</strong>
                                        <span class="ml-10"><a href="#0">{{ $variation->size }}</a></span>
                                    </li>
                                    <li class="d-flex align-items-center  mb-15">
                                        {{-- Using finish as Detail of  Products --}}
                                        <strong>Detail :</strong>
                                        <span class="ml-10"><a href="#0">{{ $variation->finish }}</a></span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        {{-- Using code as Price of  Products --}}
                                        <strong>Price:</strong>
                                        <span class="ml-10"><a href="#0">{{ $variation->code }}</a></span>
                                    </li>
                                </ul>
                            </div>
                            <form action="{{ route('add-to-cart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="variation_id" value="{{ $variation->id }}">s
                                <input type="number"  name="quantity" value="1" min="1" max="50">
                                <button type="submit" class="butn butn-md butn-bord">
                                    <span class="text-u fz-13">Add To Cart</span>
                                </button>
                            </form>                       
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-100">
            <div class="col-lg-11">
                <div class="overview" id="tabs">
                    <ul class="rest tab-links mb-30">
                        <li class="item-link current" data-tab="tabs-1">
                            <h6>Description</h6>
                        </li>
                        <li class="item-link" data-tab="tabs-2">
                            <h6>Information</h6>
                        </li>
                        <li class="item-link" data-tab="tabs-3">
                            <h6>Reviews (1)</h6>
                        </li>
                    </ul>
                    <div class="tab-cont">
                        <div class="tab-content current" id="tabs-1">
                            <div class="item">
                                <div class="text">
                                    <p class="mb-15">Percentage off promotions, discounts, or sale
                                        markdowns are most customarily based on our own opinion of the
                                        value of this product, which is not intended to reflect a former
                                        price at which this product has sold in the recent past.</p>
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos himenaeos. Nam eget neque eu ipsum laoreet
                                        molestie nec vel nulla. Aenean iaculis, neque ultricies
                                        efficitur ultricies, risus sapien dapibus ante, ac venenatis
                                        nisi est nec sem. Vestibulum blandit tincidunt felis a cursus.
                                        Donec eu tortor vitae metus scelerisque sollicitudin ut congue
                                        est.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-2">
                            <div class="item info">
                                <ul class="rest">
                                    <li class="d-flex align-items-center mb-15">
                                        <span class="text-u fw-500">Color</span>
                                        <span class="line"></span>
                                        <span class="ml-auto">Blue, Gray, Green, Red</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-15">
                                        <span class="text-u fw-500">Size</span>
                                        <span class="line"></span>
                                        <span class="ml-auto">Large, Medium, Small</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-15">
                                        <span class="text-u fw-500">Material</span>
                                        <span class="line"></span>
                                        <span class="ml-auto">Cotton, Lather, Silk</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="tabs-3">
                            <div class="item reviews">
                                <div class="reviews-area">
                                    <div class="d-flex">
                                        <div>
                                            <div class="img circle-100">
                                                <img src="assets/imgs/testim/1.jpg" alt=""
                                                    class="circle-img">
                                            </div>
                                        </div>
                                        <div class="cont ml-30">
                                            <div class="rate fz-12 opacity-7 mb-10">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <h6 class="fz-17 fw-400">Evie Howarth – <span
                                                    class="fz-14 opacity-7">February 10, 2023</span>
                                            </h6>
                                            <p>Aenean iaculis, neque ultricies efficitur ultricies,
                                                risus sapien dapibus ante, ac venenatis nisi est nec
                                                sem. Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Vestibulum ut pellentesque ante.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-review mt-50">
                                    <div>
                                        <h6>Add a review</h6>
                                        <p class="fz-14">Your email address will not be published.
                                            Required fields are marked *</p>
                                    </div>
                                    <div class="d-flex align-items-center mt-30">
                                        <div>
                                            <p class="fz-13">Your Rating</p>
                                        </div>
                                        <div>
                                            <div class="star-rating ml-10">
                                                <input id="star-5" type="radio" name="rating"
                                                    value="star-5" />
                                                <label for="star-5" title="5 stars">
                                                    <i class="active fas fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-4" type="radio" name="rating"
                                                    value="star-4" />
                                                <label for="star-4" title="4 stars">
                                                    <i class="active fas fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-3" type="radio" name="rating"
                                                    value="star-3" />
                                                <label for="star-3" title="3 stars">
                                                    <i class="active fas fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-2" type="radio" name="rating"
                                                    value="star-2" />
                                                <label for="star-2" title="2 stars">
                                                    <i class="active fas fa-star" aria-hidden="true"></i>
                                                </label>
                                                <input id="star-1" type="radio" name="rating"
                                                    value="star-1" />
                                                <label for="star-1" title="1 star">
                                                    <i class="active fas fa-star" aria-hidden="true"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form mt-50">
                                        <form action="contact.php">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-30">
                                                        <input type="text" name="name" placeholder="Your Name*" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-30">
                                                        <input type="email" name="email" placeholder="Your Email*" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea name="comment" placeholder="Your Review*"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="checkbox mt-10">
                                                        <input type="checkbox" id="saveInfo" name="userinfo" value="userinfo" />
                                                        <label for="saveInfo">Save my name, email, and website in this browser for the next time I comment.</label>
                                                      </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-center mt-40">
                                                        <button type="submit" class="butn butn-md butn-bord">
                                                            <span>Submit</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-100">
            <div class="col-lg-11">
                <div class="main-shop">
                    <div class="shop-products">
                        <div>
                            <h4>Related products</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="item mt-50">
                                    <div class="img">
                                        <img src="assets/imgs/shop/5.jpg" alt="">
                                        <a href="#0" class="add-cart">Add to Cart</a>
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
                                        <h6>Men Hooded</h6>
                                        <h5>$130.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="item mt-50">
                                    <div class="img">
                                        <img src="assets/imgs/shop/4.jpg" alt="">
                                        <a href="#0" class="add-cart">Add to Cart</a>
                                        <span class="fav"><i class="far fa-heart"></i></span>
                                    </div>
                                    <div class="cont">
                                        <div class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h6>Men Hooded</h6>
                                        <h5>$130.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="item mt-50">
                                    <div class="img">
                                        <img src="assets/imgs/shop/8.jpg" alt="">
                                        <a href="#0" class="add-cart">Add to Cart</a>
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
                                        <h6>Men Hooded</h6>
                                        <h5>$130.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="item mt-50">
                                    <div class="img">
                                        <img src="assets/imgs/shop/2.jpg" alt="">
                                        <a href="#0" class="add-cart">Add to Cart</a>
                                        <span class="fav"><i class="far fa-heart"></i></span>
                                    </div>
                                    <div class="cont">
                                        <div class="rate">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <h6>Men Hooded</h6>
                                        <h5>$130.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection