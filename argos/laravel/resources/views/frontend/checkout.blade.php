@extends('frontend.layout.master')
@section('title' ,'Argos Dental')
@section('main-container')

                <!-- ==================== Start Slider ==================== -->
                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                    <strong>{{ session('status') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif  
                <header class="work-header section-padding pb-0">
                    <div class="container mt-80">
                        <div class="row">
                            <div class="col-12">
                                <div class="caption">
                                    <h6 class="sub-title">Shopping</h6>
                                    <h1>checkout.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Slider ==================== -->



                <!-- ==================== Start cart ==================== -->

                <section class="shop-checkout section-padding">
                    <div class="container">
                        <div class="row">
                            <!-- Billing Details Section -->
                            <div class="col-lg-6">
                                <div class="order-form">
                                    <h4 class="mb-40">Billing Details</h4>
                                    <form action="{{ route('checkout.process') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Name *</label>
                                                    <input type="text" name="name" id="name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email *</label>
                                                    <input type="email" name="email" id="email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address">Address *</label>
                                                    <input type="text" name="address" id="address" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone *</label>
                                                    <input type="text" name="phone" id="phone" required>
                                                </div>
                                            </div>
                                            <div class="mt-30">
                                                <button type="submit" class="butn butn-md butn-bg main-colorbg4 text-dark">
                                                    <span class="text-u fw-600">Place Order</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                            
                            <!-- Order Summary Section -->
                            <div class="col-lg-5 offset-lg-1">
                                <div class="checkout-order-info">
                                    <h4 class="mb-40">Your Order</h4>
                                    <div>
                                        <ul class="rest">
                                            <!-- Loop through cartDetails -->
                                            @foreach ($cartDetails as $item)
                                            <li class="mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <p>{{ $item['product']->name }} ({{ $item['variation']->name }})</p>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h5 class="fz-18">${{ number_format($item['subtotal'], 2) }}</h5>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            <li class="pt-10 bord-thin-top">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6>Subtotal</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h5 class="main-color4 fz-20">${{ number_format($totalSubtotal, 2) }}</h5>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-10 bord-thin-top bord-thin-bottom">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h6>Total</h6>
                                                    </div>
                                                    <div class="ml-auto">
                                                        <h5 class="main-color4 fz-20">${{ number_format($totalSubtotal, 2) }}</h5>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="text mt-40">
                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#0">privacy policy</a>.</p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                

                <!-- ==================== End cart ==================== -->

@push('scripts')
<script src="{{url('assets/frontend/js/gsap.min.js')}}"></script>
<script src="{{url('assets/frontend/js/ScrollSmoother.min.js')}}"></script>
<script src="{{url('assets/frontend/js/smoother-script.js')}}"></script>
<script src="{{url('assets/frontend/js/price-range.js')}}"></script>
@endpush
@endsection