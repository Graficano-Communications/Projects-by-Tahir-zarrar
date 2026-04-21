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
                                    <h1>Cart.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- ==================== End Slider ==================== -->



                <!-- ==================== Start cart ==================== -->

                <section class="shop-cart section-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Detail</th>
                                                <th>Price</th>
                                                <th>Size</th>
                                                <th>Quantity</th>
                                                <th>Subtotal</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $totalSubtotal = 0;
                                            @endphp
                                            @foreach ($cartDetails as $item)
                                                @php
                                                $itemSubtotal = (float) $item['variation']->code * (int) $item['quantity'];
                                                $totalSubtotal += $itemSubtotal;
                                            @endphp
                                                <tr>
                                                    <td> <div class="img icon-img-80">
                                                        <!-- Assuming you have an image field in your Product model -->
                                                        <img src="{{ $item['image'] }}" alt="{{ $item['product']->name }}">
                                                    </div></td>
                                                    <td>  <h6>{{ $item['variation']->name }}</h6></td>
                                                    <!-- Variation Code (or SKU) -->
                                                    <td >
                                                        <h5 class="main-color4 fz-18">{{ $item['variation']->finish }}</h5>
                                                    </td>
                                                    <td >
                                                        <h5 class="main-color4 fz-18">{{ $item['variation']->size }}</h5>
                                                    </td>
                                                    <!-- Using as Price --->
                                                    <td >
                                                        <h5 class="main-color4 fz-18">{{ $item['variation']->code }}</h5>
                                                    </td>
                                                    <td >
                                                        <h5 class="main-color4 fz-18">{{ $item['quantity'] }}</h5>
                                                    </td>                                                        
                                                    <td data-column="Subtotal">
                                                        <h5 class="main-color4 fz-18">
                                                            ${{ number_format($itemSubtotal, 2) }}
                                                        </h5>
                                                    </td>                                                                                                        

                                                    <!-- Remove Item Button -->
                                                    <td class="remove">
                                                        <a href="javascript:void(0)" class="remove-item" data-product-id="{{ $item['product']->id }}" data-variation-id="{{ $item['variation']->id }}">
                                                            <span class="pe-7s-close"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mt-80">
                                    <div class="col-lg-6">
                                        <div class="coupon mt-40">
                                            <h4>Discount</h4>
                                            <p class="fz-13">Enter your coupon code if you have one.</p>
                                            <form action="contact.php">
                                                <div class="form-group d-flex mt-30">
                                                    <input type="text" name="coupon_code">
                                                    <button type="submit" class="butn butn-md butn-bord">
                                                        <span>Apply</span>
                                                    </button>
                                                </div>
                                                <span class="fz-13 opacity-7 mt-10">Coupon code</span>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 offset-lg-2">
                                        <div class="total mt-40">
                                            <h4>Cart totals</h4>
                                            <ul class="rest mt-30">
                                                <li class="mb-5">
                                                    <h6>Subtotal : <span class="fz-16 main-color4 ml-10">${{ number_format($totalSubtotal, 2) }}</span></h6>
                                                </li>
                                                <li>
                                                    <h6>Total : <span class="fz-16 main-color4 ml-10">${{ number_format($totalSubtotal, 2) }}</span></h6>
                                                </li>
                                            </ul>
                                            <a href="{{ route('checkout.index') }}" class="butn butn-md butn-bg main-colorbg4 mt-30">
                                                <span class="text-u fz-13 fw-600">Proceed to checkout</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ==================== End cart ==================== -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Handle the remove button click event
        $('.remove-item').on('click', function() {
            var productId = $(this).data('product-id');
            var variationId = $(this).data('variation-id');

            // Send an AJAX request to the remove item route
            $.ajax({
                url: '{{ route('cart.remove') }}', // Make sure the route matches
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // CSRF token for security
                    product_id: productId,
                    variation_id: variationId
                },
                success: function(response) {
                    // If the item is removed successfully, remove it from the cart table
                    if (response.success) {
                        // Optionally, remove the item row from the table
                        $('tr').filter(function() {
                            return $(this).find('a[data-product-id="' + productId + '"][data-variation-id="' + variationId + '"]').length > 0;
                        }).remove();

                        // Optionally, update the cart totals
                        $('.cart-totals').html(response.cartTotalsHtml);
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error removing item:', error);
                }
            });
        });
    });
</script>
@push('scripts')
<script src="{{url('assets/frontend/js/gsap.min.js')}}"></script>
<script src="{{url('assets/frontend/js/ScrollSmoother.min.js')}}"></script>
<script src="{{url('assets/frontend/js/smoother-script.js')}}"></script>
<script src="{{url('assets/frontend/js/price-range.js')}}"></script>
@endpush
           
@endsection