@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')

    <!-- Page Header Start -->
	<div class="page-header parallaxie"style="background: url('{{ asset('assets/frontend/images/emd-banner-blogs.jpg') }}') no-repeat center center !important;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Blogs</span></h1>
						<nav class="wow fadeInUp">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a {{ route('home') }}>home</a></li>
								<li class="breadcrumb-item active" aria-current="page">blog</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                 @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="{{ route('blog.detail', $blog->slug) }}" class="image-anime" data-cursor-text="View">
                                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->name }}</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Readmore Button Start -->
                            <div class="post-readmore-btn">
                                <a href="{{ route('blog.detail', $blog->slug) }}">Read more</a>
                            </div>
                            <!-- Post Readmore Button End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page Blog End -->






@endsection


























