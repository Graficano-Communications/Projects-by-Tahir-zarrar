@extends('layouts.master')

@section('title', 'Media')

@section('content')

    <!--=================================
            inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('images/eurobag-dep.jpg');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Our Departments</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            inner banner -->


    <!--=================================
        About -->
        <!--=================================
        About -->
    <section class="space-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2>Our Departments</h2>
                        <p style="text-align: justify;">At Euro Bags International, we regularly participate in global exhibitions and trade fairs to explore the latest fabrics, machinery, and manufacturing techniques. Our goal is to bring fresh ideas and modern solutions to our customers, ensuring that every product we deliver stays ahead of industry trends.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        About -->
   <section class="space-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs nav-tabs-02 justify-content-center" id="nav-tab" role="tablist">
                        @foreach ($departments as $key => $department)
                            <a class="nav-item nav-link {{ $key == 0 ? 'active' : '' }}"
                               id="nav-{{ $department->id }}-tab"
                               data-toggle="tab"
                               href="#nav-{{ $department->id }}"
                               role="tab"
                               aria-controls="nav-{{ $department->id }}"
                               aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                {{ $department->name }}
                            </a>
                        @endforeach
                    </div>
                </nav>

                <div class="tab-content mt-5" id="nav-tabContent">
                    @foreach ($departments as $key => $department)
                        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                             id="nav-{{ $department->id }}"
                             role="tabpanel"
                             aria-labelledby="nav-{{ $department->id }}-tab">

                            <div class="row">
                                @php
                                    $images = json_decode($department->images, true);
                                @endphp
                                @if(!empty($images))
                                    @foreach ($images as $img)
                                        <div class="col-lg-6 col-md-5 mt-3">
                                            <img class="img-fluid"
                                                 src="{{ asset('images/departments/' . $img) }}"
                                                 alt="{{ $department->name }}">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-12 text-center">
                                        <p>No images available for {{ $department->name }}</p>
                                    </div>
                                @endif
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

    <!--=================================
        About -->



@endsection
