@extends('layouts.master')
@section('meta_title', 'Portfolio')
@section('meta_description', '')
@section('meta_tags', '')


@section('SpecificStyles')

@stop
@section('content')


    <!-- breadcurmb area start -->
    <div class="tp-breadcrumb-area tp-breadcrumb-ptb"
        data-background="{{ asset('assets/img/blog/blog-masonry/blog-bradcum-bg.png') }}">
        <div class="container container-1430">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="tp-portfolio-inner-box pb-100">
                        <div class="tp-portfolio-heading pb-30 d-flex p-relative tp_fade_anim">
                            <span class="tp-section-subtitle pre orange-color tp_fade_anim mr-95">
                                Portfolio
                                <svg xmlns="http://www.w3.org/2000/svg" width="82" height="9" viewBox="0 0 82 9"
                                    fill="none">
                                    <path d="M78 7.95425L81.5 4.47169L78 0.989136M1 3.98977H81V4.98977H1V3.98977Z"
                                        stroke="#FDCE07" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>

                            <h3 class="tp-blog-title fs-100 tp_fade_anim">
                                We Make <img height="100px" width="100px" src="{{ asset('assets/img/front-images/graficano-globe.png') }}" alt="">
                                <br> Digital Beautiful
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcurmb area end -->


    <!-- portfolio area start -->
    <div class="tp-portfolio-inner-ptb pb-120">
        <div class="container container-1430">
            <div class="tp-portfolio-tab-content-wrap">
                <div class="row">
                    @if (count($portfolios) == 0)
                        <h4 class="text-center">No Portfolios Available.</h4>
                    @else
                        @foreach ($portfolios as $key => $portfolio)
                            @php
                                $image = \App\Media::where('portfolio_id', $portfolio->id)
                                    ->where('thumbnail', 1)
                                    ->first();
                            @endphp

                            <div class="col-md-6">
                                <div class="tp-portfolio-inner-item mb-65">
                                    <div class="tp-portfolio-inner-thumb tp--hover-item">
                                        <a href="{{ route('details_portfolios', $portfolio->url) }}">
                                            <div class="tp--hover-img" data-intensity="0.6" data-speedin="1"
                                                data-speedout="1">


                                                @if ($image)
                                                    @if ($image->type == 'vimeo')
                                                        <iframe width="100%" height="305px"
                                                            src="https://player.vimeo.com/video/{{ substr($image->value, 18) }}?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=false&amp;muted=1&amp;controls=0"
                                                            allow="autoplay; fullscreen; picture-in-picture">
                                                        </iframe>
                                                    @else
                                                        <img  src="{{ asset('images/portfolio/' . $image->value) }}"
                                                            class="img-fluid" alt="{{ $portfolio->title }}">
                                                    @endif
                                                @else
                                                    @php
                                                        $video = \App\Media::where(
                                                            'portfolio_id',
                                                            $portfolio->id,
                                                        )->first();
                                                    @endphp

                                                    @if ($video)
                                                        @if ($video->type == 'vimeo')
                                                            <iframe width="100%" height="305px"
                                                                src="https://player.vimeo.com/video/{{ substr($video->value, 18) }}?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=false&amp;muted=1&amp;controls=0"
                                                                allow="autoplay; fullscreen; picture-in-picture">
                                                            </iframe>
                                                        @else
                                                            <img src="{{ asset('images/portfolio/' . $video->value) }}"
                                                                class="img-fluid" alt="{{ $portfolio->title }}">
                                                        @endif
                                                    @else
                                                        <img src="{{ asset('images/portfolio/no_image.jpg') }}"
                                                            class="img-fluid" alt="{{ $portfolio->title }}">
                                                    @endif
                                                @endif

                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-portfolio-inner-content">
                                        <h4 class="tp-portfolio-inner-title">
                                            <a class="tp-line-white"
                                                href="{{ route('details_portfolios', $portfolio->url) }}">
                                                {{ $portfolio->title }}
                                            </a>
                                        </h4>
                                        <span>{{ $portfolio->title_desc }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>


            </div>
        </div>
    </div>
    <!-- portfolio area end -->




@endsection

@section('SpecificScripts')

@stop
