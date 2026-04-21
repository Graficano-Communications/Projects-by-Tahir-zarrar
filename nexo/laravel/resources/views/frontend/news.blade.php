@extends('frontend.layout.master')
@section('title', 'Core Star Sports')
@section('main-container')




<!-- Start Breadcrumb 
        ============================================= -->
        <div class="breadcrumb-area text-center" style="background-image: url({{ asset('assets/frontend/img/shape/10.jpg') }});">
            <div class="light-banner-active bg-gray " ></div>
            <div class="container">
                <div class="breadcrumb-item">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1>Events</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                    <li class="active">Events</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Blog 
        ============================================= -->
        <div class="blog-area full-blog blog-standard default-padding-bottom">
            <div class="container">
                <div class="row">
                    <!-- Single Item -->
                     @foreach ( $news as $allnews )
                     <div class="blog-content col-xl-10 offset-xl-1 col-md-12">
                        <div class="blog-item-box">
                            <!-- Single Item -->
                            <div class="blog-style-one item">
                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('uploads/news/' . $allnews->image) }}" alt="Image Not Found"></a>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">{{$allnews->location}}</a>
                                            </li>
                                            <li>
                                                {{$allnews->date}}
                                            </li>
                                        </ul>
                                    </div>
                                    <h2>
                                        <a href="#">{{$allnews->caption}}</a>
                                    </h2>
                                    <p>
                                        {{$allnews->description}}
                                    </p>
                                    <a href="#" class="button-regular">
                                       {{$allnews->description}}
                                    </a>
                                </div>
                            </div>
                            <!-- Single Item -->
                            
                        </div>
                        
                        
                    </div>
                   
                    @endforeach
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- End Blog -->













    



@endsection














