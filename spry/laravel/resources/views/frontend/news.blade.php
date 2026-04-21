@extends('frontend.layout.master')
@section('title', 'Events – Exhibitions & Global Participation')
@section('main-container')
    <main>

       <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding pb-0">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="caption">
                            <h6 class="sub-title">Our Events</h6>
                            <h1 class="fz-80">Latest News.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->
        


        <!-- ==================== Start Blog ==================== -->

        <section class="blog-modern section-padding sub-bg">
            <div class="container">
                <div class="row">
                    @foreach ( $news as $news )
                        <div class="col-lg-6 col-md-6">
                        <div class="item mb-50">
                            <div class="img">
                                <img src="{{ asset('uploads/news/' . $news->image) }}" alt="">
                                <div class="date">
                                    <a href="">{{$news->date}}</a>
                                </div>
                            </div>
                            <div class="cont mt-30">
                                <h6>
                                    <a href="javascript:void(0);">{{$news->caption}}</a>
                                </h6>
                                <p>{{$news->description}}</p>
                                <a href="javascript:void(0);" class="mt-20 ls1 sub-title">{{$news->location}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->


    </main>







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














