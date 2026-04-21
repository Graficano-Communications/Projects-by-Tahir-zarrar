@extends('layouts.master')
@section('title',  $page->meta_title )
@section('description', $page->meta_description )
@section('keywords',  $page->meta_description )
@section('content')
 <!-- breadcrumb start-->
 <div class="breadcrumb-section pt-4">
        <div class="container">
            <div class="row justify-content-end">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
                        </ol>
                    </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end-->

<!--section start-->
<section class="blog-detail-page section-b-space ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blog-detail"><img src="{{ asset('images/blogs/' . $page->image)}}"
                        class="img-fluid blur-up lazyload" alt="">
                    <h3>{{$page->title}}</h3>
                    {!! $page->content !!}
                </div>
            </div>
           
        </div>
    </section>
    <!--Section ends-->
@endsection