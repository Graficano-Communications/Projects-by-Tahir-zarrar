@extends('layouts.master')

@section('title', 'Home')

@section('content')

<!-- breadcrumb start -->
  <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Check-out</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="checkout-page">
                <div class="checkout-form">
                    <form  action="{{route('checkout')}}" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-title">
                                    <h3>Postal & Billing Details</h3>
                                </div>
                                <div class="row check-out">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Full Name*</div>
                                        <input type="text" value="" required name="name" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Phone*</div>
                                        <input type="text" pattern="^923[0-4]{1}\d{1}-{0,1}\d{7}$"  value="" required  name="phone" placeholder="">
                                        <small id="emailHelp" class="form-text text-muted">example: 923446388482 </small>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="field-label">Email Address*</div>
                                        <input type="text" value="" required name="email" placeholder="">
                                    </div>
                                   
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address*</div>
                                        <input type="text"  value="" required name="address" placeholder="Street address">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Town/City*</div>
                                        <input type="text" required value="" name="city" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">State /Province*</div>
                                        <input type="text" value="" required name="province" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                        <div class="field-label">Postal Code*</div>
                                        <input type="text" value="" name="postal_code"  placeholder="">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Other Instructions</div>
                                        <textarea type="text"  value=""  name="message" placeholder="message" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="checkout-details" style="border:2px solid #be2025">
                                    <div class="order-box">
                                        <div class="title-box">
                                            <div>Product <span>Total</span></div>
                                        </div>
                                        <ul class="qty" id="list">
                                           @foreach(Cart::content() as $prod)
                                            <li>{{$prod->name}} × {{$prod->qty}} <span> @if($prod->options->discount) Rs. {{$prod->price}} <del>RS. {{ $prod->options->orginal_price }}</del>   @else Rs. {{$prod->price}} @endif</span></li>
                                            @endforeach
                                        </ul>
                                        
                                        <ul class="total">
                                            <li>Total <span class="count" id="amount_box">Rs. {{Cart::subtotal()}} </span></li>
                                            <li>Shipping Charges <span class="count" >Rs. {{ $shipping_charges }}
                                                @if($shipping_charges == 0) 
                                                <strong style="color:green">(Free Shipping)</strong>
                                                @endif
                                            </span></li>
                                            <hr>
                                            @php $subtotal = (int) str_replace(',', '',Cart::subtotal()) + $shipping_charges @endphp
                                            <li>Sub Total <span class="count">Rs. {{ $subtotal }}</span></li>
                                            @php $discount  = 0;
                                                 $total = 0;
                                                 $discount_amount =0;
                                             @endphp
                                            @foreach(Cart::content() as $prod)
                                             @if($prod->options->discount)
                                             @php $discount = $discount + ($prod->options->orginal_price - $prod->price); @endphp
                                             @endif
                                            @endforeach 
                                            @php $total =(int) str_replace(',', '',Cart::subtotal()) + (int)$discount;  
                                            $discount_amount =(int) str_replace(',', '',Cart::subtotal()) - (int)$discount;
                                            @endphp 
                                            <input type="hidden" name="shipping_charges" value="{{ $shipping_charges }}">
                                            
                                            <input type="hidden" @if(isset($discount)) value="{{ $total }}" @else value="{{Cart::subtotal()}}" @endif  name="total_amount" id="total_amount">
                                            <input type="hidden" name="discount_amount" id="discount_amount" @if(isset($discount)) value="{{ Cart::subtotal() }}" @else  value="" @endif >
                                            <input type="hidden" name="res_amount" value="{{ $subtotal }}" id="res_amount">
                                            
                                            <input type="hidden" name="discount"  @if(isset($discount)) value="{{ $discount }}" @else value="0" @endif  id="discount">
                                            <input type="hidden" name="cart_content" value="{{ Cart::content() }}"  id="cart_content">
                                        </ul>
                                    </div>
                                    <div class="payment-box">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="upper-box">
                                                    <div class="payment-options">
                                                        <ul>
                                                            <li>
                                                                <div class="radio-option">
                                                                    <input type="radio" name="payment_method" id="payment-1"
                                                                        checked="checked" value="Cash On Delivery">
                                                                    <label for="payment-1">Cash On Delivery <small></small> <span
                                                                            class="small-text">Please send a check to Store
                                                                            Name, Store Street, Store Town, Store State /
                                                                            County, Store Postcode.</span></label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="radio-option">
                                                                    <input type="radio" name="payment_method" id="payment-2" disabled>
                                                                    <label for="payment-2">Jazz Cash<span
                                                                            class="small-text">Please send a check to Store
                                                                            Name, Store Street, Store Town, Store State /
                                                                            County, Store Postcode.</span><small> (Coming soon..)</small></label>
                                                                </div>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
 
                                            </div>
                                            <div class="col-8">
                                                <div class="container-fluid" style="padding-bottom:20px;margin-top:20px" >
                                                    <div id ="success-msg" class="alert alert-success alert-dismissible" style="display:none;">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Successfully !</strong> applied your coupon.
                                                      </div>
                                                      <div id ="error-msg" class="alert alert-danger alert-dismissible" style="display:none;">
                                                        
                                                      </div>
                                                    <div class="row">
                                                        <div class="col-8"><input type="text" value=""  name="code" id="code" placeholder="Coupon Code"></div>
                                                        <div clas="col-4"><button type="button" id="apply_coupon" style="padding:8px 20px " class="btn-solid btn" @if(Session::has('coupon')) disabled @endif>Apply</button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="text-left"><button type="submit" class="btn-solid btn">Place Order</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>


                </div>
            </div>
        </div>
        <input type="hidden" name="_token" id="token" value="{{ Session::token() }}">
    </section>
    <!-- section end -->

@endsection
@section('scripts')
<script>
    $( document ).ready(function() {
        $( "#apply_coupon" ).click(function() {
            var discount , res, cal_discount ;

            var error_check = document.getElementById('discount').value;
            if(parseFloat(error_check) !== 0.0){
                $('#error-msg').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Sorry !</strong> You can apply coupon only once').fadeIn('slow');
                $('#error-msg').delay(5000).fadeOut('slow');
            }else{

            var total = 0.0;
            var code = document.getElementById('code').value;
            var total_amount = document.getElementById('total_amount').value;
            var cart_content = document.getElementById('cart_content').value;
            cart_content = JSON.parse(cart_content); 
            
            var token = document.getElementById('token').value;
            data = { '_token' : token, 'data' : cart_content};


            console.log(cart_content);
           
           var ajaxurl = '{{route('get_coupon', ':code')}}'; 
           ajaxurl = ajaxurl.replace(':code', code);
           $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });
           $.ajax({
            type: "POST",
            url: ajaxurl,
            data:data,
           
           success: function(data){
               $data = $(data);
               console.log(data); 
 
           
                $('#showcart').empty();
                $('#list').empty();
                
                // For loop start
                for (var key in data) {
               if (data.hasOwnProperty(key)) {
                   console.log("ayayayayayay");
                 $('<li><div class="media"><a href="#"><img class="mr-3" src="'+data[key]["options"]["image"]+'" alt=""></a><div class="media-body"><a href="#"><h4>'+data[key]["name"]+'</h4></a><h4><span>'+data[key]["qty"]+' x RS.'+parseInt(data[key]["price"])+'</span></h4></div></div><div class="close-circle"><a href="http://beta.cashoponline.com/removecart/'+data[key]["rowId"]+'"><i class="fa fa-times" aria-hidden="true"></i></a></div></li>').appendTo('#showcart');
                 console.log(data[key]["options"]["orginal_price"]);
                 if(data[key]["options"].hasOwnProperty("discount")){
                    $('<li>'+data[key]["name"]+' x '+data[key]["qty"]+'<span>Rs. '+parseInt(data[key]["price"])+'<del> Rs. '+parseInt(data[key]["options"]["orginal_price"])+'</del></span>').appendTo('#list');
                    
                 }else{
                    $('<li>'+data[key]["name"]+' x '+data[key]["qty"]+'<span>Rs. '+parseInt(data[key]["price"])+'</span>').appendTo('#list');
              
                 }
                
                }
                total = parseInt(total) + parseInt(data[key]["subtotal"]);
               }
              //   for loop end 

               $(' <li><div class="total"><h5>subtotal : <span>RS. '+total+'</span></h5></div></li><li><div class="buttons"><a href="{{route('cart')}}" class="view-cart">view cart</a><a href="{{route('order')}}" class="checkout">checkout</a></div></li>').appendTo('#showcart');
               $('#amount_box').empty();
               $('<span>RS. '+parseInt(total)+'</span>').appendTo('#amount_box');
               
                // document.getElementById('amount_box').innerHTML = total;
                total_amount = parseFloat( total_amount.replace(',','') );
                document.getElementById('discount_amount').value = total;
                document.getElementById('discount').value = total_amount - total; 

            
       
               $("#apply_coupon").attr("disabled", true);
               $("#apply_coupon").attr("style", "background-color:#d3d3d3;cursor:none");
               $('#success-msg').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Successfully !</strong> applied your coupon.').fadeIn('slow');
                $('#success-msg').delay(5000).fadeOut('slow');
           }  ,
           error: function (jqXHR, exception) {
            console.log(jqXHR);
            alert("Coupon Voucher is not valid.");
           }, 
          });
        }
        });


   
   });
</script>

@stop