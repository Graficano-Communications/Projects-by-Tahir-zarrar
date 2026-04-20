@extends('frontend.layout.master')
@section('title', 'Black Bear')
@section('main-container')




    <!-- ==================== Start Navbar ==================== -->

    @include('frontend.layout.header')

    <!-- ==================== End Navbar ==================== -->

    <main>
    <!-- ==================== Start Slider ==================== -->

    <header class="page-header blog-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="caption">
                        <div class="sub-title fz-12">
                            <a href="#0"><span>Marketing</span></a>
                            <span>,</span>
                            <a href="#0"><span>Design</span></a>
                        </div>
                        <h1 class="fz-55 mt-30">{{ $blog->name }}</h1>
                    </div>
                    <div class="info d-flex mt-40 align-items-center">
                        <div class="left-info">
                            <div class="d-flex">
                                <div class="author-info">
                                    <div class="d-flex align-items-center">
                                        <a href="#0" class="circle-60">
                                            <img src="{{ asset('assets/frontend/imgs/blog/author1.jpg') }}" alt=""
                                                class="circle-img">
                                        </a>
                                        <a href="#0" class="ml-20">
                                            <span class="opacity-7">Author</span>
                                            <h6 class="fz-16">Admin</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="date ml-50">
                                    <a href="#0">
                                        <span class="opacity-7">Published</span>
                                        <h6 class="fz-16">{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</h6>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background bg-img parallaxie mt-80"
            data-background="{{ asset('uploads/blogs/' . $blog->banner_image) }}"></div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog section-padding pb-0">
        <div class="container">
            <div class="main-post">
                <div class="item pb-60">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="text">
                                   <span>{!! $blog->description !!}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="post-qoute mt-50">
                                <h6 class="fz-20">
                                    <span class="l-block">{{ $blog->qoute }}</span>
                                    <span class="sub-title main-color mt-20 mb-0"> - {{ $blog->qoute_writer }}</span>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="mb-50 mt-50">
                        <div class="row justify-content-center">
                            <div class="col-md-8 ">
                                <div class="iner-img sm-mb30">
                                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <p>{!! $blog->description1 !!}</p>

                        </div>
                    </div>
                </div>
                <div class="info-area flex mt-20 pb-20">
                    <div class="ml-auto">
                        <div class="share-icon flex">
                            <div class="valign">
                                <span>Share :</span>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="next-prv-post flex mt-50">
                    @if ($prev)
                        <div class="thumb-post bg-img"
                            style="background-image: url('{{ asset('uploads/blogs/' . $prev->image) }}');">
                            <a href="{{ route('blog.detail', $prev->slug) }}">
                                <span class="fz-12 text-u ls1 main-color mb-15">
                                    <i class="pe-7s-angle-left"></i> Prev Post
                                </span>
                                <h6 class="fw-600 fz-16">{{ \Illuminate\Support\Str::limit($prev->title, 40) }}</h6>
                            </a>
                        </div>
                    @endif

                    @if ($next)
                        <div class="thumb-post ml-auto text-right bg-img"
                            style="background-image: url('{{ asset('uploads/blogs/' . $next->image) }}');">
                            <a href="{{ route('blog.detail', $next->slug) }}">
                                <span class="fz-12 text-u ls1 main-color mb-15">
                                    Next Post <i class="pe-7s-angle-right"></i>
                                </span>
                                <h6 class="fw-600 fz-16">{{ \Illuminate\Support\Str::limit($next->title, 40) }}</h6>
                            </a>
                        </div>
                    @endif
                </div>


            </div>
        </div>

    </section>

    <!-- ==================== End Blog ==================== -->

    </main>


    <!-- ==================== Start Footer ==================== -->

    @include('frontend.layout.footer')

    <!-- ==================== End Footer ==================== -->






    @push('scripts')
        <!-- jQuery -->
        <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>


        <!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
    @endpush















@endsection








