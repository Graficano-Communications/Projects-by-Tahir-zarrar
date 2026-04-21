@extends('frontend.layout.master')
@section('title', 'Departments – Our Specialized Divisions')
@section('main-container')


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

                    <div class="filter border-none">



                        <!-- ALL button separate line -->
                        <div class="mb-2">
                            <div class="text d-block mb-2">Filter By : <span data-filter='*'
                                    class='active d-inline-block px-3 py-1 mx-1 border rounded'>
                                    All
                                </span>
                            </div>

                        </div>

                        <!-- other buttons -->
                        <div>
                            @foreach ($departments as $department)
                                <span data-filter='.{{ Str::slug($department->name) }}'
                                    class="d-inline-block px-3 py-1 mx-1 border rounded">
                                    {{ $department->name }}
                                </span>
                            @endforeach
                        </div>

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
                                            <img src="{{ asset('uploads/departments/' . trim($image)) }}" alt="image">
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







    @push('scripts')
        <!-- jQuery -->
        <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>


        <!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
        <script>
            let filters = document.querySelectorAll('.portfolio .filtering span');

            filters.forEach(item => {
                item.addEventListener('click', function() {

                    // remove active from all
                    filters.forEach(el => el.classList.remove('active'));

                    // add active to clicked
                    this.classList.add('active');
                });
            });
        </script>
    @endpush


@endsection
