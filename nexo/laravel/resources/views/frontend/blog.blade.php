@extends('frontend.layout.master')
@section('title', 'Core Star Sports')
@section('main-container')





 <!-- Start Breadcrumb 
        ============================================= -->
        <div class="breadcrumb-area text-center" style="background-image: url(assets/img/shape/10.jpg);">
            <div class="light-banner-active bg-gray bg-cover" style="background-image: url(assets/img/shape/6.jpg);"></div>
            <div class="container">
                <div class="breadcrumb-item">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1>Our Blogs</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                    <li class="active">Blog</li>
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
                    @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 mb-50">
                        <div class="blog-style-one">
                            <div class="thumb">
                                <a href="{{ route('blog.detail', $blog->slug) }}"><img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="Image Not Found"></a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li>
                                           {{ $blog->updated_at->format('d F, Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <h3 class="post-title">{{ $blog->name }}</h3>
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


























