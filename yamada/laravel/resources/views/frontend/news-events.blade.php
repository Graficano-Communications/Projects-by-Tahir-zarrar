@extends('frontend.layout.master')
@section('title', 'Yamada')
@section('main-container')
    <style>
        .btn-fill {
            background: linear-gradient(135deg, #B80000, #660000);
            border: 1px solid #B80000;
            color: var(--white);
        }

        .blog-article-item .article-label a {
            background: linear-gradient(135deg, #B80000, #660000);
            color: #ffffff;
            font-size: 10px;
            font-weight: 700;
            line-height: 12px;
            padding: 0 16px;
            height: 31px;
            border-color: #B80000;
        }

        .custom-tabs {
            margin-top: 20px;
            border: none;
            display: flex;
            justify-content: center;
            gap: 10px;
            /* margin-bottom: 20px; */
        }

        .custom-tabs .nav-item {
            margin: 0;
        }

        .custom-tabs .nav-link {
            background: linear-gradient(135deg, #B80000, #660000);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .custom-tabs .nav-link:hover {
            background: linear-gradient(135deg, #B80000, #660000);
            color: #333333;
        }

        .custom-tabs .nav-link.active {
            background-color: #333333;
            color: white;
            font-weight: 900;
        }
    </style>
    <!-- page-title -->
    <div class="tf-page-title" style="background-image: url('{{ asset('assets/frontend/images/front-images/news-banner.jpg') }}');">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <div class="heading text-center text-white">Events</div>
                    <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                        <li>
                            <a class="text-white" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>
                            <i class="icon-arrow-right text-white"></i>
                        </li>
                        <li class="text-white">
                            Events
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- Event List with Tabs -->
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Bootstrap Nav Tabs -->
                <ul class="nav nav-tabs custom-tabs" id="eventTabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#upcoming">Upcoming</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#recent">Recent</a>
                    </li>
                </ul>
                <!-- Tabs Content -->
                <div class="tab-content">
                    <!-- All Events -->
                    <div class="tab-pane fade show active" id="all">
                        @foreach ($upcomingEvents->merge($recentEvents) as $event)
                            <div class="list-blog pt-5 pb-3">
                                <div class="blog-article-item style-row">
                                    <div class="article-thumb">
                                        <img class="lazyload" data-src="{{ asset('uploads/amenities/' . $event->image) }}" 
                                             src="{{ asset('uploads/amenities/' . $event->image) }}" alt="img-blog">
                                    </div>
                                    <div class="article-content">
                                        <div class="article-label">
                                            <a class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">
                                                EVENT ( {{ $event->date }} )
                                            </a>
                                        </div>
                                        <div class="article-title">
                                            <a>{{ $event->caption }}</a>
                                        </div>
                                        <div class="desc" style="text-align: justify;">
                                            {{ $event->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                
                    <!-- Upcoming Events -->
                    <div class="tab-pane fade" id="upcoming">
                        @foreach ($upcomingEvents as $event)
                            <div class="list-blog pt-5 pb-3">
                                <div class="blog-article-item style-row">
                                    <div class="article-thumb">
                                        <img class="lazyload" data-src="{{ asset('uploads/amenities/' . $event->image) }}" 
                                             src="{{ asset('uploads/amenities/' . $event->image) }}" alt="img-blog">
                                    </div>
                                    <div class="article-content">
                                        <div class="article-label">
                                            <a class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">
                                                EVENT ( {{ $event->date }} )
                                            </a>
                                        </div>
                                        <div class="article-title">
                                            <a>{{ $event->caption }}</a>
                                        </div>
                                        <div class="desc" style="text-align: justify;">
                                            {{ $event->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                
                    <!-- Recent Events -->
                    <div class="tab-pane fade" id="recent">
                        @foreach ($recentEvents as $event)
                            <div class="list-blog pt-5 pb-3">
                                <div class="blog-article-item style-row">
                                    <div class="article-thumb">
                                        <img class="lazyload" data-src="{{ asset('uploads/amenities/' . $event->image) }}" 
                                             src="{{ asset('uploads/amenities/' . $event->image) }}" alt="img-blog">
                                    </div>
                                    <div class="article-content">
                                        <div class="article-label">
                                            <a class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">
                                                EVENT ( {{ $event->date }} )
                                            </a>
                                        </div>
                                        <div class="article-title">
                                            <a>{{ $event->caption }}</a>
                                        </div>
                                        <div class="desc" style="text-align: justify;">
                                            {{ $event->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
