@extends('front-layouts.master')

@section('title', 'blog Detail')

@section('content')



<div class="services-dateils-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services-details">
                    <div class="header-img">
                        <img src="{{ asset($blog->detail_image) }}" alt="Image">
                    </div>

                    <ul>
                        <li>
                            <i class='bx bx-calendar'></i>
                            {{ $blog->created_at->format('d M Y') }}
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-user'></i>
                                Medimax Admin
                            </a>
                        </li>
                        <li>
                            <i class='bx bx-show-alt'></i>
                            45 views
                        </li>
                    </ul>

                    <div class="details-text">
                        <h2>{{$blog->blog_name}}</h2>

                        {!!$blog->description!!}

                    </div>





                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="widget-area">
                    <div class="widget widget_search">
                        <h3 class="widget-title">Search</h3>

                        <form class="search-form">
                            <input type="search" class="search-field" placeholder="Search...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>

                    <div class="widget widget_posts_thumb">
                        <h3 class="widget-title">Latest news</h3>
                        @foreach($recentPosts as $recentPost)

                        <div class="item">
                            <a href="{{ route('blog-details', $recentPost->id) }}" class="thumb">
                                <span class="fullimage cover bg1" role="img">
                                    <img src="{{ asset($recentPost->front_image) }}" alt="image" >
                                </span>
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="{{ route('blog-details', $recentPost->id) }}">{{ Str::limit($recentPost->blog_name , $limit = 40, $end = '...') }}</a></h4>
                                <span>{{ $recentPost->created_at->format('d M Y') }}</span>
                            </div>

                            <div class="clear"></div>
                        </div>

                        @endforeach
                    </div>

                    <!-- <div class="widget widget_categories">
                        <h3 class="widget-title">Doctors categories</h3>

                        <ul class="bg-f6f4ff">
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href="blog-details.html">Rabbit specilist</a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href="blog-details.html">Cat specilist</a>
                            </li>

                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href="blog-details.html">Dog specilist</a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href="blog-details.html">Pediatritian</a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href="blog-details.html">Orthopedics surgeon</a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href="blog-details.html">Surgeon, cardiologist</a>
                            </li>
                        </ul>
                    </div>

                    <div class="side-bar-box tags-box">
                        <h3 class="title">Tags</h3>
                        <ul>
                            <li><a href="blog-details.html">Medical</a></li>
                            <li><a href="blog-details.html">Hospital</a></li>
                            <li><a href="blog-details.html">Corona</a></li>
                            <li><a href="blog-details.html">Surgery</a></li>
                            <li><a href="blog-details.html">Transplant</a></li>
                            <li><a href="blog-details.html">Gloves</a></li>
                            <li><a href="blog-details.html">Health</a></li>
                            <li><a href="blog-details.html">Mask</a></li>
                            <li><a href="blog-details.html">Cancer</a></li>
                            <li><a href="blog-details.html">Virus</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>





@endsection