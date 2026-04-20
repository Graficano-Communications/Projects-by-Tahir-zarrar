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
                            <h6 class="sub-title">Our Product</h6>
                            <h1 class="fz-80">Product</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start About ==================== -->

        <section class="about section-padding">
            <div class="container">
                @forelse($services as $key => $service)
                    <div class="row md-marg mb-5 align-items-center">
                        @if ($loop->index % 2 == 0)
                            {{-- Text Left - Image Right --}}
                            <div class="col-lg-6 valign">
                                <div class="cont md-mb50">
                                    <h3 class="wow fadeInUp">{{ $service->name }}</h3>
                                    <div class="text mt-20 wow fadeIn" data-wow-delay=".3s">
                                        <p>{!! $service->description !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="img mb-4">
                                    <img src="{{ asset('uploads/services/' . $service->service_image) }}"
                                        alt="{{ $service->name }}">
                                </div>
                            </div>
                        @else
                            {{-- Image Left - Text Right --}}
                            <div class="col-lg-6 order-lg-2 valign">
                                <div class="cont md-mb50">
                                    <h3 class="wow fadeInUp">{{ $service->name }}</h3>
                                    <div class="text mt-20 wow fadeIn" data-wow-delay=".3s">
                                        <p>{!! $service->description !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <div class="img mb-4">
                                    <img src="{{ asset('uploads/services/' . $service->service_image) }}"
                                        alt="{{ $service->name }}">
                                </div>
                            </div>
                        @endif
                    </div>
                @empty
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-muted">No products against this category.</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </section>


        <!-- ==================== End About ==================== -->
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

