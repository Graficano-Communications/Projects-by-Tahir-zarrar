@extends('layouts.master')

@section('title', 'Media')

@section('content')

    <!--=================================
            inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('images/industry-banner.jpg');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Inovation & Industry Insights</h1>
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
                        <h2>Inovation & Industry Insights</h2>
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
                            <a class="nav-item nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one"
                                role="tab" aria-controls="nav-one" aria-selected="true">Images</a>
                            <a class="nav-item nav-link" id="nav-tow-tab" data-toggle="tab" href="#nav-tow" role="tab"
                                aria-controls="nav-tow" aria-selected="false">Videos</a>
                        </div>
                    </nav>

                    <div class="tab-content mt-5" id="nav-tabContent">
                        
                        <!-- E-commerce Solution (images from $medias) -->
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row align-items-center">
                                @foreach ($medias as $media)
                                    <div class="col-md-4 col-6 mt-4  d-flex  align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('images/media/' . $media->image) }}"
                                            alt="media">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Digital Strategy (videos from $vimeos) -->
                        <div class="tab-pane fade" id="nav-tow" role="tabpanel" aria-labelledby="nav-tow-tab">
                            <div class="row align-items-center">
                                @foreach ($vimeos as $vimeo)
                                    <div class="col-md-6 mt-4 mt-md-0">
                                        <iframe height="305" width="100%"
                                            src="https://www.youtube.com/embed/{{ substr($vimeo->link, strpos($vimeo->link, '=') + 1) }}"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--=================================
        About -->



@endsection
