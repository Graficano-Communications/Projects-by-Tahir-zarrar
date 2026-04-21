@extends('layouts.master')

@section('title', 'Verfiy Your order')

@section('content')
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Verfiy Your order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
        <div class="row">
                      
            <div class="col-lg-12">
                <div class="col-lg-6 offset-md-3" style="border:4px solid #be2025;padding:30px">
                    <h3 class="text-center">Enter 5 digit sms code here.</h3>
                    <div class="col-lg-12 text-center" style="padding:10px">
                        {{$phone}} <a  href="{{route('sendotp',['phone' => $phone , 'id' => $id ])}}">Send Again</a>
                        </div> 
                    <div class="theme-card">
                        <form action="{{route('verifyotp')}}" class="theme-form" method="post">
                            <div class="form-row">
                                <div class="col-md-10 col-8">
                                   <input type="hidden" value="{{$id}}" name="id">
                                    <input type="text" class="form-control" id="mouse-only-number-input" name="first" pattern="\d*" title="Please enter 5 digits"  placeholder="You can only enter 5 digits.. ex 12345" maxlength="5"
                                        required="" >
                                </div>
                                <div class="col-md-2 col-4">
                                    @csrf
                                    <input class="btn btn-solid" type="submit" value="submit"/>
                                </div>
                                        
                            </div>
                        </form>
                        <div class="col-md-12 col-12">
                            <p>If youn have not recieved your sms code yet you can still place your order by clicking on this button <a href="{{ route('order_place',$id) }}">Place Your Order</a></p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--Section ends-->
   
<script>
 
</script>
@endsection