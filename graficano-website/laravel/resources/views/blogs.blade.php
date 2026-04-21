@extends('layouts.master')
@section('meta_title', 'Blogs|Digital Marketing|SEO Services')
@section('meta_description',
    'Our blogs section is where you will find the digital marketing aspects among the SEO
    service and graphic designing linked content. Stay tuned for the techniques & strategies for digital marketing & web
    development.')
@section('meta_tags', 'digital marketing, web development, SEO services, graphic designing')
@section('SpecificStyles')

@stop

@section('content')



    <!-- breadcurmb area start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-ptb" data-background="">
        <div class="container container-1230">
            <div class="row justify-content-center">
                <div class="col-xxl-12">
                    <div class="tp-blog-heading-wrap p-relative pb-130">
                        <span class="tp-section-subtitle pre tp_fade_anim">Blog Post <svg xmlns="http://www.w3.org/2000/svg"
                                width="81" height="9" viewBox="0 0 81 9" fill="none">
                                <rect y="4.04333" width="80" height="1" fill="white" />
                                <path d="M77 8.00783L80.5 4.52527L77 1.04271" stroke="white" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>

                        <h3 class="tp-blog-title tp_fade_anim smooth">Best blog <img
                                src="{{ asset('assets/img/blog/blog-masonry/blog-bradcum-shape.png') }}" alt=""> <br> <a
                                href="#down"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none">
                                    <path d="M9.99999 1V19M9.99999 19L1 10M9.99999 19L19 10" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a> of the week...</h3>

                        <div class="tp-blog-shape">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="109" height="109"
                                    viewBox="0 0 109 109" fill="none">
                                    <path
                                        d="M46.8918 0.652597C52.0111 11.5756 61.1509 45.3262 42.3414 57.6622C32.5453 63.8237 11.8693 68.6772 1.79348 40.7372C-2.00745 30.1973 6.53261 20.5828 26.243 25.965C37.6149 29.0703 65.0949 36.1781 78.8339 57.5398C86.0851 68.8141 93.074 92.3859 89.9278 107.942M89.9278 107.942C90.8943 100.431 95.9994 85.8585 108.687 87.6568M89.9278 107.942C90.4304 103.013 86.878 91.2724 68.6481 83.7468M63.5129 27.0092C68.0375 28.7613 82.5356 36.982 88.0712 51.886"
                                        stroke="white" stroke-width="1.5" />
                                </svg></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcurmb area end -->


    <!-- blog list area start -->
    <div id="down" class="tp-blog-list-ptb pb-80">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-blog-list-item-wrap pb-10">
                        @php
                            // Define the background colors
                            $colors = ['#FCCE0D', '#67BBB0'];
                        @endphp
                        @foreach ($blogs as $key => $blog)
                            <div class="tp-blog-list-item mb-40">
                                <div class="row align-items-center">
                                    <div class="col-lg-4">
                                        <div class="tp-blog-list-item-thumb text-lg-end">
                                            <a href="{{ route('blog.details', $blog->slug) }}"><img
                                                    src="{{ asset('images/blogs/' . $blog->image) }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-blog-list-item-title-box">
                                            <h4 class="tp-blog-list-item-title">
                                                <a class="tp-line-white"
                                                    href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <div class="tp-blog-list-item-content">
                                            <div class="tp-blog-list-item-tags">
                                                <p>{{ $blog->formatted_date }} </p>
                                                <span class="tp-blog-list-item-tags-name"><a class="text-white"
                                                        target="_blank"
                                                        href="https://www.linkedin.com/in/noman-ahmed-zaka/">{{ $blog->writer_name }}</a></span>
                                                <span class="tp-blog-list-item-meta"
                                                    style="color: {{ $colors[$key % count($colors)] }};">Blog</span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-lg-4">
                                                <div class="tp-blog-list-item-thumb text-lg-end">
                                                    <a href="{{ route('blog.details', $blog->slug) }}"><img src="{{ asset('images/blogs/' . $blog->image) }}" alt=""></a>
                                                </div>
                                            </div> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog list area end -->


@endsection
