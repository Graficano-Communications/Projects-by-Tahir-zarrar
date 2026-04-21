@extends('frontend.layout.master')
@section('title', 'Catalogues – Explore Our Product Range')
@section('main-container')



    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding pb-0">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="caption">
                            <h6 class="sub-title">Our Catalogue</h6>
                            <h1 class="fz-80">Catalogue.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Portfolio ==================== -->

        <section class="blog-list-half section-padding sub-bg">
            <div class="container">
                <div class="row">
                    @foreach ( $catalouges as $cat )
                        <div class="col-lg-6">
                        <div class="item mb-50">
                            <div class="row">
                                <div class="col-md-6 img">
                                    <img src="{{ asset('uploads/catalogues/' . $cat->image ) }}" alt="">
                                </div>
                                <div class="col-md-6 main-bg cont valign">
                                    <div class="full-width">
                                        <span class="date fz-12 ls1 text-u opacity-7 mb-15">Catalogue</span>
                                        <h5>
                                            <a href="javascript:void(0);">{{$cat->name}}</a>
                                        </h5>
                                        <div class="tags colorbg mt-15">
                                            <a href="{{ route('catalog.download', $cat->id) }}">Download</a>
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

        <!-- ==================== End Portfolio ==================== -->


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






















