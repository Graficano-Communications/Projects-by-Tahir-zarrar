@extends('layouts.master')
@section('title',  $subcat->meta_title )
@section('description', $subcat->meta_description )
@section('keywords',  $subcat->meta_description )
@section('content')
 <!-- breadcrumb start-->
 <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>{{$subcat->name}}</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$subcat->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb 
    <!--section start-->
    <section class="collection section-b-space ratio_square ">
        <div class="container">
            <div class="row partition-collection ">
                @foreach($data as $cat) 
                <div class="col-lg-3 col-md-6 section-t-space">
                    <div class="collection-block">
                        <div><img src="{{ asset('images/category/banner_image/' . $cat->banner_image)}}" class="img-fluid bg-img"
                                alt=""></div>
                        <div class="collection-content">
                            <h3>{{$cat->name}}</h3> 
                            @php $category = \App\category::where('id' ,$subcat->category_id )->first() @endphp
                          <a href="{{ route('products_by_subcategory',[$category->slug , $cat->slug  ])}}" class="btn btn-outline">shop now !</a>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
           
        </div>
    </section>
    <!--Section ends-->



@endsection