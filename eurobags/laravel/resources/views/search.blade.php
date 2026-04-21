@extends('layouts.master')

@section('title', 'search')

@section('content')
<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>search</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">search</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="authentication-page">
        <div class="container">
            <section class="search-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <form class="form-header" action="{{route('search')}}" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" 
                                        placeholder="Search Products......" name="search_value" >
                                        @csrf
                                    <div class="input-group-append">
                                        <button  type="submit" class="btn btn-solid"><i class="fa fa-search"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- section end -->


    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row search-product">

             @if(isset($product))
             @foreach($product as $prod)
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                        @if($prod->images()->count())
                                @php $image = \App\image::where('product_id',$prod->id)->first(); 
                                    $imags = json_decode( $image->images); @endphp
                            @foreach($imags as $key =>  $img)
                                    @if ($loop->first)
                                <div class="front">
                                    <a href="{{route('product',[$prod->slug, $image->color])}}"><img
                                            src="{{ asset('images/products/' . $img)}}"
                                            class="img-fluid  bg-img" alt=""></a>
                                </div>
                                @endif
                                    @if ($key == 1)
                                <div class="back">
                                    <a href="{{route('product',[$prod->slug, $image->color])}}"><img
                                            src="{{ asset('images/products/' . $img)}}"
                                            class="img-fluid  bg-img" alt=""></a>
                                </div>
                                @endif
                            @endforeach
                            @endif
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                    data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="{{route('product',[$prod->slug, $image->color])}}">
                                <h6>{{$prod->name}}</h6>
                            </a>
                            <h4>{{$prod->price}}</h4>
                            @php $colors = \App\image::where('product_id',$prod->id)->get(); @endphp
                                @foreach($colors as $color)
                                <li style="background-color:{{$color->code}}"></li>
                                @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
             @else
             <h2>No Product found. Try to search again !</h2>
             @endif  
            </div>
        </div>
    </section>
    <!-- product section end -->
    
       
@endsection