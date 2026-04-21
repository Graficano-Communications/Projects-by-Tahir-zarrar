@extends('layouts.master')

@section('title', 'Home')

@section('content')
   @if(session()->has('message'))
	<div class="alert alert-success">
		{{ session()->get('message') }}
	</div>
    @endif
    
    @if(session()->has('error'))
	<div class="alert alert-danger">
		{{ session()->get('error') }}
	</div>
	@endif
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>cart</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

	 
    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
				@if(Cart::count() > 0  )
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">action</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>

						@foreach(Cart::content() as $prod)
                        <tbody>
                            <tr>
                                <td>
                                @php   $slug = \App\product::select('slug')->where('id',$prod->id)->first(); @endphp                          
                                    <a href="{{route('product',['slug' => $slug->slug  , 'color' => $prod->options->color])}}">
                                      <img src="{{$prod->options->image}}" alt="">
                                    </a>
                                </td>
                                <td><a href="#">{{$prod->name}} <br> Color : {{ $prod->options->color }}
                                    @if($prod->options->other_options )
                                    
                                    @foreach ($prod->options->other_options as $key => $node)
                                   <br> {{ $key }}: {{ $node }}
                                  @endforeach
                                  @endif
                                </a>
                                    <div class="mobile-cart-content row">
                                        <div class="col-xs-3">
                                            {{$prod->qty}}
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color">Rs. {{$prod->price}}</h2>
                                        </div>
                                        <div class="col-xs-3">
                                            <h2 class="td-color"><a href="" class="icon"><i class="ti-close"></i></a>
                                            </h2>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h2>RS. {{$prod->price}}</h2>
                                </td>
                                <td>
                                {{$prod->qty}}
                                </td>
                                <td><a href="{{route('removecart',$prod->rowId)}}" class="icon"><i class="ti-close"></i></a></td>
                                <td>
                                    <h2 class="td-color">RS. {{$prod->price}}</h2>
                                </td>
                            </tr>
                        </tbody> 
						@endforeach
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                            <tr>
                                <td>total price :</td>
                                <td>
                                    <h2>Rs: {{Cart::subtotal()}}</h2>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="/" class="btn btn-solid">continue shopping</a></div>
                <div class="col-6"><a href="{{route('order')}}" class="btn btn-solid">check out</a></div>
            </div>
			@else
		   <h3 class="space">You Cart is empty .. ! </h3>
		   @endif
        </div>
    </section>
    <!--section end-->


@endsection
