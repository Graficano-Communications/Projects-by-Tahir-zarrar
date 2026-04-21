@extends('frontend.layout.master')
@section('title', 'Yamada')
@section('main-container')
    <style>
        .btn-success {
            background: linear-gradient(135deg, #B80000, #660000);
            color: #ffffff;
            border-color: #B80000;
        }
    </style>


    <div class="tf-page-title" style="background-image: url('{{ asset('assets/frontend/images/front-images/catalogue-banner.jpg') }}');">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center text-white">Catalouges</div>
                    <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                        <li>
                            <a class="text-white"  href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <i class="icon-arrow-right text-white"></i>
                        </li>
                        <li class="text-white">
                            Catalouges
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /page-title -->
    <div class="pt-3">
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show " role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="tf-grid-layout tf-col-2 md-col-3 gap-0 py-5">
        @foreach ($catalogues as $catalogue)
            <div class="card-product type-line-padding ">
                <div class="card-product-wrapper">
                    <a href="product-detail.html" class="product-img">
                        <img class="lazyload img-product" data-src="{{ asset('uploads/catalogues/' . $catalogue->image) }}"
                            src="{{ asset('uploads/catalogues/' . $catalogue->image) }}" alt="image-product">
                        <img class="lazyload img-hover" data-src="{{ asset('uploads/catalogues/' . $catalogue->image) }}"
                            src="{{ asset('uploads/catalogues/' . $catalogue->image) }}" alt="image-product">
                    </a>
                    <div class="list-product-btn absolute-2">
                        <form action="{{ route('catalogue.download') }}" method="post">
                            <div class="d-flex align-items-center gap-3">
                                @csrf
                                <input type="hidden" name="id" value="{{ $catalogue->id }}">
                                <!-- Hidden input for catalogue ID -->
                                <input name="password" type="password" class="form-control" placeholder="Enter Password"
                                    aria-label="Enter Password" aria-describedby="basic-addon2">
                                <button class="btn btn-success  mb-0" type="submit">View </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-product-info">
                    <h5 class="text ">
                        {{ $catalogue->name }}
                    </h5>
                </div>
            </div>
        @endforeach

    </div>

@endsection
