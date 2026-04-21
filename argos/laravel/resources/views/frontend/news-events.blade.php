@extends('frontend.layout.master')
@section('title' ,'Argos Dental')
@section('main-container')
     <!-- ==================== Start Slider ==================== -->

     <header class="page-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-8">
                    <div class="caption">
                        <h6 class="sub-title">Our Blog</h6>
                        <h1 class="fz-80">Latest News.</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog-list-half section-padding sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="item mb-50">
                        <div class="row">
                            <div class="col-md-6 img">
                                <img src="assets/imgs/blog/h1.jpg" alt="">
                            </div>
                            <div class="col-md-6 main-bg cont valign">
                                <div class="full-width">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
                                    <h5>
                                        <a href="blog-details.html">Free advertising for your online business.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-list.html">Marketing</a>
                                        <a href="blog-list.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item mb-50">
                        <div class="row">
                            <div class="col-md-6 img">
                                <img src="assets/imgs/blog/h2.jpg" alt="">
                            </div>
                            <div class="col-md-6 main-bg cont valign">
                                <div class="full-width">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
                                    <h5>
                                        <a href="blog-details.html">Business meeting 2023 in San Francisco.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-list.html">Marketing</a>
                                        <a href="blog-list.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item mb-50">
                        <div class="row">
                            <div class="col-md-6 img">
                                <img src="assets/imgs/blog/h3.jpg" alt="">
                            </div>
                            <div class="col-md-6 main-bg cont valign">
                                <div class="full-width">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
                                    <h5>
                                        <a href="blog-details.html">Free advertising for your online business.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-list.html">Marketing</a>
                                        <a href="blog-list.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item mb-50">
                        <div class="row">
                            <div class="col-md-6 img">
                                <img src="assets/imgs/blog/h4.jpg" alt="">
                            </div>
                            <div class="col-md-6 main-bg cont valign">
                                <div class="full-width">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
                                    <h5>
                                        <a href="blog-details.html">Business meeting 2023 in San Francisco.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-list.html">Marketing</a>
                                        <a href="blog-list.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item md-mb50">
                        <div class="row">
                            <div class="col-md-6 img">
                                <img src="assets/imgs/blog/h5.jpg" alt="">
                            </div>
                            <div class="col-md-6 main-bg cont valign">
                                <div class="full-width">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
                                    <h5>
                                        <a href="blog-details.html">Free advertising for your online business.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-list.html">Marketing</a>
                                        <a href="blog-list.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 img">
                                <img src="assets/imgs/blog/h6.jpg" alt="">
                            </div>
                            <div class="col-md-6 main-bg cont valign">
                                <div class="full-width">
                                    <span class="date fz-12 ls1 text-u opacity-7 mb-15">August 6, 2022</span>
                                    <h5>
                                        <a href="blog-details.html">Business meeting 2023 in San Francisco.</a>
                                    </h5>
                                    <div class="tags colorbg mt-15">
                                        <a href="blog-list.html">Marketing</a>
                                        <a href="blog-list.html">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->
    @push('scripts')
    <script src="{{url('assets/frontend/js/ScrollTrigger.min.js')}}"></script>
    @endpush
    
@endsection