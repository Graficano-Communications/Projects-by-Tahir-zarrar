@extends('frontend.layout.master')
@section('title', 'Black Bear')
@section('main-container')




    <!-- ==================== Start Navbar ==================== -->

    @include('frontend.layout.header')

    <!-- ==================== End Navbar ==================== -->

    <main>

         <!-- ==================== Start Slider ==================== -->

    <header class="page-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-8">
                    <div class="caption">
                        <h6 class="sub-title">Our Blog</h6>
                        <h1 class="fz-80">Blogs.</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <section class="blog-list-half crev section-padding sub-bg">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-6">
                        <div class="item mb-80">
                            <div class="row rest">
                                <div class="col-md-6">
                                    <div class="img">
                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}">
                                    </div>
                                </div>
                                <div class="col-md-6 valign">
                                    <div class="cont">
                                        <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
                                        <h5>
                                            <a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->name }}</a>
                                        </h5>
                                        <div class="tags colorbg mt-15">
                                            <a href="{{ route('blog.detail', $blog->slug) }}">Blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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


























