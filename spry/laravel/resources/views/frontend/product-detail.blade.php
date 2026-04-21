@extends('frontend.layout.master')
@section('title', $service->name . ' – SPRY Sports Corp.')
@section('main-container')




    <!-- ==================== Start product ==================== -->
    <div class="pt-80">
        <section class="product-details section-padding ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="img-preview md-mb50">
                            <div class="gallery-top">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @php
                                            $images = json_decode($service->service_images, true);
                                        @endphp
                                        @foreach ($images as $image)
                                            <div class="swiper-slide">
                                                <div class="img">
                                                    <img src="{{ asset('images/services/' . $image) }}" alt="">
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="gallery-thumb mt-10">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">


                                        @foreach ($images as $image)
                                            <div class="swiper-slide">
                                                <div class="img">
                                                    <img src="{{ asset('images/services/' . $image) }}" alt="">
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="product-info">
                            <div class="top-info">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="line-height-1">{{ $service->name }}</h4>
                                    </div>
                                </div>
                                <div class="text mt-30">
                                    <p>{!! $service->description !!}</p>
                                </div>
                            </div>
                            <div class="prod-order pt-30 pb-30 mt-50 bord-thin-top bord-thin-bottom">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <button type="button" class="butn butn-md butn-bord" data-bs-toggle="modal"
                                            data-bs-target="#inquiryModal">
                                            <span class="text-u fz-13">Send Inquiry</span>
                                        </button>
                                    </div>
                                    <!-- Inquiry Modal -->
                                    <!-- Inquiry Modal -->
                                    <div class="modal fade" id="inquiryModal" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content" style="background:#111; color:#fff;">

                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">Send Inquiry</h5>
                                                    <button type="button" class="btn-close btn-close-white"
                                                        data-bs-dismiss="modal"></button>
                                                </div>

                                                <form action="{{ route('inquiry.send') }}" method="POST">
                                                    @csrf

                                                    <div class="modal-body">

                                                        <!-- Product Name Auto -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Product</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $service->name }}" readonly>

                                                            <input type="hidden" name="service_name"
                                                                value="{{ $service->name }}">
                                                        </div>

                                                        <div class="mb-3">
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="Your Name" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <input type="email" name="email" class="form-control"
                                                                placeholder="Your Email" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer border-0">
                                                        <button type="submit" class="btn btn-success w-100">
                                                            Send Message
                                                        </button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-40">
                                <ul class="rest">
                                    <li class="d-flex align-items-center mb-15">
                                        <strong>SKU :</strong>
                                        <span class="ml-10">{{ $service->sku }}</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-15">
                                        <strong>CATEGORY :</strong>
                                        <span class="ml-10"><a href="#0">{{ $category->name }}</a></span>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <strong>TAG :</strong>
                                        <span class="ml-10">{{ $service->tags }}</span>
                                    </li>
                                </ul>
                            </div>
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
                            </ul>
                            <div class="tab-cont">
                                <div class="tab-content current" id="tabs-1">
                                    <div class="item">
                                        <div class="text">
                                            <p class="mb-15">{!! $service->description2 !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="tabs-2">
                                    <div class="item info">
                                        <ul class="rest">
                                            <li class="d-flex align-items-center mb-15">
                                                <span class="text-u fw-500">Tags</span>
                                                <span class="line"></span>
                                                <span class="ml-auto">{{ $service->tags }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @isset($relatedProducts)
                    @if ($relatedProducts->count() > 0)
                        <div class="row justify-content-center mt-100">
                            <div class="col-lg-11">
                                <div class="main-shop">
                                    <div class="shop-products">

                                        <div>
                                            <h4>Related products</h4>
                                        </div>

                                        <div class="row">

                                            @foreach ($relatedProducts as $related)
                                                @php
                                                    $images = json_decode($related->service_images, true);
                                                @endphp

                                                <div class="col-md-6 col-lg-3">
                                                    <div class="item mb-50">

                                                        <div class="img">
                                                            <a href="{{ route('product.detail', $related->slug) }}">
                                                                @if (!empty($images) && isset($images[0]))
                                                                    <img src="{{ asset('images/services/' . $images[0]) }}"
                                                                        alt="{{ $related->image_alt ?? $related->name }}">
                                                                @endif
                                                            </a>
                                                        </div>

                                                        <div class="cont">
                                                            <a href="{{ route('product.detail', $related->slug) }}">
                                                                <h6>{{ $related->name }}</h6>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endisset
            </div>
        </section>
    </div>


    <!-- ==================== End product ==================== -->



    @push('scripts')
        <!-- jQuery -->
        <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>


        <!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
    @endpush



@endsection
