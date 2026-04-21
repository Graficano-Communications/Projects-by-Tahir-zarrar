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
                            <h1>Catalogue</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                    <li class="active">Catalogue</li>
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
        <div class="blog-area blog-grid-colum default-padding-bottom">
            <div class="container">
                <div class="row">
                    <!-- Single Item -->
                     @foreach ( $catalouges as $cat )
                    <div class="col-lg-6 mb-50">
                        <div class="blog-style-one">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('uploads/catalogues/' . $cat->image ) }}" alt="Image Not Found"></a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>

                                        <li>
                                            Catalogue
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="post-title"><a href="#">{{$cat->name}}</a></h2>
                                <a href="{{ route('catalog.download', $cat->id) }}" class="button-regular">
                                   Download<i class="fas fa-arrow-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- End Blog -->


@endsection






















