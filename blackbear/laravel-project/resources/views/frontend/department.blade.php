@extends('frontend.layout.master')
@section('title', 'Black Bear')
@section('main-container')




    <!-- ==================== Start Navbar ==================== -->

    @include('frontend.layout.header')

    <!-- ==================== End Navbar ==================== -->

    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="work-header section-padding pb-0">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-12">
                        <div class="caption">
                            <h6 class="sub-title">Our Departments</h6>
                            <h1>Factory Tour</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Portfolio ==================== -->

        <section class="portfolio section-padding pb-40">
            <div class="container-xxl">

                <div class="row">
                    <!-- filter links -->
                    <div class="filtering col-12 mb-80 text-center">
                        <div class="filter">
                            <span class="text">Filter By :</span>
                            <span data-filter='*' class='active'>All</span>

                            @foreach ($departments as $department)
                                <span data-filter='.{{ Str::slug($department->name) }}'>
                                    {{ $department->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                </div>

                <div class="gallery">

                    <div class="row grid max-margin">
                        @foreach ($departments as $department)
                            @php
                                $images = explode(',', $department->image); // Comma-separated string
                                $class = Str::slug($department->name); // Class for filtering
                            @endphp

                            @foreach ($images as $image)
                                <div class="col-md-6 items {{ $class }} info-overlay mb-80">
                                    <div class="item-img o-hidden">
                                        <a href="#" class="imago wow">
                                            <div class="inner wow">
                                                <img src="{{ asset('uploads/departments/' . trim($image)) }}"
                                                    alt="image">
                                            </div>
                                        </a>
                                        <div class="info">
                                            <span class="mb-15">
                                                <!-- Same SVG as your original code -->
                                            </span>
                                            <h6 class="sub-title tag">
                                                <a href="javascript:void(0);"> Department</a>
                                            </h6>
                                            <h5><a href="javascript:void(0);">{{ $department->name }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>



                </div>

            </div>
        </section>

        <!-- ==================== End Portfolio ==================== -->


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
