@extends('layouts.master')

@section('meta_title', $subService->meta_title)
@section('meta_description', $subService->meta_description)
@section('meta_tags', '')

@section('SpecificStyles')


@stop

@section('content')
    <style>
        .clt {
            padding: 40px 0;
        }

        .scroll-arrow,
        .scroll-arrow:focus {
            background: #fff;
            font-size: 17px;
            box-shadow: 0 0 25px rgb(23 23 23 / .25);
            height: 42px;
            /* Set height */
            width: 42px;
            /* Set width equal to height */
            padding: 0;
            /* Remove padding */
            text-align: center;
            text-decoration: none;
            z-index: 1029;
            border-radius: 50%;
            /* Make it fully rounded */
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            /* Optional: remove any default border */
        }
    </style>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "{{ $subService->name }}",
  "name": "{{ $subService->name }}",
  "description": "{{ $subService->meta_description }}",
  "provider": {
    "@type": "Organization",
    "name": "Graficano",
    "url": "https://www.graficano.com"
  },
  "areaServed": {
    "@type": "Place",
    "name": "US"

  }
}
</script>

    <!-- banner area start -->
    @if ($subService && isset($subService->image))
        <div class="tp-service-4-banner-area p-relative">
            <div class=" ar-about-us-4">
                <img class="w-100" src="{{ asset('images/sub-services/banner/' . $subService->banner_image) }}"
                    alt="{{ $subService->name }}">
            </div>
        </div>
    @endif
    <!-- banner area end -->

    <!-- start section -->
    <section class="clt">
        <div class="container">
            <div class="row justify-content-between  align-items-center">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    @if ($previousSubService)
                        <a href="{{ route('sub-service.show', ['serviceSlug' => $previousSubService->service->slug, 'subServiceSlug' => $previousSubService->slug]) }}"
                            class="scroll-arrow">
                            <i class="fa-solid fa-arrow-left"></i></a>
                    @endif
                    @if ($nextSubService)
                        <a href="{{ route('sub-service.show', ['serviceSlug' => $subService->service->slug, 'subServiceSlug' => $nextSubService->slug]) }}"
                            class="scroll-arrow">
                            <i class="fa-solid fa-arrow-right"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </section>


    <!-- ovareview area start -->
    <div class="pp-service-details-overview-ptb pt-40 pb-110">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pp-service-details-overview-heading">
                        <h4 class="pp-service-details-overview-title tp_fade_anim" data-delay=".3">{{ $subService->name }}
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pp-service-details-overview-wrapper">
                        <p>{!! $subService->description !!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="pp-service-details-overview-thumb text-lg-end">
                        <div class="tp_img_reveal">
                            <img src="{{ asset('images/sub-services/' . $subService->image) }}"
                                alt="{{ $subService->img_alt }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ovareview area end -->


    <!-- hero area start -->
    @php
        // Decode JSON headings and split into two arrays
        $headings = json_decode($subService->headings, true);
        $half = ceil(count($headings) / 2);
        $firstHalf = array_slice($headings, 0, $half);
        $secondHalf = array_slice($headings, $half);
    @endphp
    <div class="ar-hero-area p-relative pt-80 pb-100 include-bg"
        data-background="{{ asset('assets/img/blog/blog-masonry/blog-bradcum-bg.png') }}">
        <div class="tp-career-shape-1">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
                    <path
                        d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344"
                        stroke="#ffff" stroke-width="1.5" />
                </svg></span>
        </div>
        <div class="container container-1230">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="ar-hero-title-box service-5-heading tp_fade_anim mb-80" data-delay=".3">
                        <h3 class="tp-career-title">{{ $subService->s_head }}
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="tp-service-5-list tp_fade_anim " data-delay=".7">
                        <ul>
                            @foreach ($headings as $heading)
                                <li>+ {{ $heading }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->




    <!-- service details process area start -->
    @if (isset($pHead) && !empty($pHead) && isset($pText) && !empty($pText))
        <div class="pp-service-details-process-ptb pt-130 pb-90" data-bg-color="#1B1B1D">
            <div class="container container-1350">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pp-service-details-process-heading text-center pb-100 tp_fade_anim" data-delay=".3">
                            <span class="pp-service-details-process-subtitle"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <circle cx="5" cy="5" r="5" fill="currentColor" />
                                </svg> Working Process</span>
                            @if (!empty($subService->p_heading))
                                <h3 class="pp-service-details-process-title">{{ $subService->p_heading }}</h3>
                            @else
                                Process steps
                            @endif
                        </div>
                    </div>
                </div>
                <div class="pp-service-details-process-box z-index-1 pb-40 tp_fade_anim" data-delay=".5">
                    <div class="row">
                        @foreach ($pHead as $index => $head)
                            @php
                                $text = isset($pText[$index]) ? $pText[$index] : 'No description provided.';
                            @endphp
                            <div class="col-lg-3 col-sm-6">
                                <div class="pp-service-details-process-item text-center mb-30">
                                    <span>{{ $index + 1 }}</span>
                                    <h4>{{ $head }}</h4>
                                    <p>{{ $text }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pp-service-details-process-bottom text-center">
                            <span>Don’t hesitate collaborate with expertise- <a href="{{ route('getqoute') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="25" height="11" viewBox="0 0 25 11"
                                        fill="none">
                                        <path
                                            d="M18.675 10.0096L24.72 5.70942C24.806 5.64025 24.8766 5.54578 24.9255 5.43455C24.9744 5.32331 25 5.19883 25 5.07235C25 4.94587 24.9744 4.82138 24.9255 4.71015C24.8766 4.59892 24.806 4.50445 24.72 4.43528L18.675 0.135054C18.5572 0.0563568 18.4215 0.0281769 18.2892 0.0549569C18.157 0.0817369 18.0358 0.161954 17.9446 0.282961C17.8535 0.403968 17.7977 0.558882 17.7859 0.723281C17.7742 0.88768 17.8072 1.05221 17.8798 1.19094L19.633 4.335L0.598757 4.335C0.439957 4.335 0.287661 4.41268 0.175371 4.55096C0.0630817 4.68924 0 4.87679 0 5.07235C0 5.26791 0.0630817 5.45545 0.175371 5.59373C0.287661 5.73201 0.439957 5.8097 0.598757 5.8097L19.633 5.8097L17.8798 8.95376C17.8072 9.09249 17.7742 9.25702 17.7859 9.42142C17.7977 9.58582 17.8535 9.74073 17.9446 9.86174C18.0358 9.98274 18.157 10.063 18.2892 10.0897C18.4215 10.1165 18.5572 10.0883 18.675 10.0096Z"
                                            fill="currentColor" />
                                    </svg> Let’s Talk</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- service details process area end -->


    <!-- faq area start -->
    @if (!empty($subService->abt_subservice) || !empty($subService->abt_subdesc))
        <div class="ar-hero-area p-relative include-bg" data-background="{{ asset('assets/img/blog/blog-masonry/blog-bradcum-bg.png') }}">
            <div class="tp-career-shape-1">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84"
                        fill="none">
                        <path
                            d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344"
                            stroke="#fff" stroke-width="1.5" />
                    </svg></span>
            </div>
            <div class="container container-1230">
                <div class="ar-about-us-4-hero-ptb">
                    <div class="row justify-content-center">
                        @if (!empty($subService->abt_subservice))
                            <div class="col-xl-12">
                                <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                                    <h3 class="tp-career-title pb-30">{{ $subService->abt_subservice }}
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <div class="tp-faq-text  tp_fade_anim">
                                @if (!empty($subService->abt_subdesc))
                                    <p>{!! $subService->abt_subdesc !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endif



    <div class="app-faq-area p-relative pb-120">
        <div class="container container-1230">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="ai-faq-accordion-dark-wrap app-faq-wrap faq-inner-style">
                        <div class="ai-faq-accordion-wrap">
                            <div class="accordion" id="accordionExample1">

                                @foreach ($faqs as $key => $faq)
                                    <div class="accordion-items">
                                        <h2 class="accordion-header">
                                            <button class="accordion-buttons {{ $key === 0 ? '' : 'collapsed' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $key }}"
                                                aria-expanded="{{ $key === 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $key }}">
                                                {{ $faq->faq }}
                                                <span class="accordion-icon"></span>
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $key }}"
                                            class="accordion-collapse collapse {{ $key === 0 ? 'show' : '' }}"
                                            data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <p>{{ $faq->answer }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- faq area end -->

    <!-- service area end -->
    @if (isset($chooseTitles) && !empty($chooseTitles) && isset($chooseDescriptions) && !empty($chooseDescriptions))

    <div class="dgm-service-area dgm-service-radius pt-40 pb-120 z-index-1">
        <div class="container container-1230">
            <div class="row">
                <div class="col-xl-7">
                    <div class="dgm-service-title-box z-index-1 mb-60">
                        <span class="tp-section-subtitle subtitle-grey mb-15 text-white tp_fade_anim" data-delay=".3">Why
                            Choose Us</span>
                        <h4 class="tp-section-title-grotesk text-white tp_fade_anim" data-delay=".5">
                            <span class="p-relative">
                              {{ $subService->m_head }}
                                <span class="tp-section-title-shape">
                                    <svg width="231" height="15" viewBox="0 0 231 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M130.373 0.9726C126.192 1.17422 109.977 1.57746 94.4246 1.87989C53.7849 2.63597 36.6519 3.29123 22.7824 4.45055C11.9723 5.35784 1.72317 6.66837 1.16227 7.22282C1.06029 7.32363 0.958306 8.58376 0.907315 9.9951C0.805333 12.2633 0.958306 12.6666 2.08011 13.473C2.79398 13.9771 3.76281 14.4811 4.17073 14.6324C4.88461 14.8844 32.5217 13.3722 39.0995 12.717C42.006 12.4649 131.495 11.356 153.319 11.3056C161.172 11.3056 179.426 11.6081 193.857 12.0113C208.287 12.4145 221.341 12.6666 222.82 12.6162C226.491 12.5153 229.755 10.7512 229.907 8.83578C229.958 7.67647 229.805 7.47485 228.633 7.42444C227.358 7.37404 227.358 7.32363 228.939 6.9708C231.131 6.46675 231.386 6.16432 230.111 5.45865C228.888 4.80338 228.684 3.9465 229.805 3.9465C230.213 3.9465 230.57 3.69447 230.57 3.44245C230.57 3.14002 230.315 2.9384 229.958 2.9384C229.653 2.9384 228.327 2.43435 227.052 1.82949L224.706 0.720575L181.364 0.670169C157.551 0.619765 134.605 0.77098 130.373 0.9726ZM165.557 2.9888C165.863 3.19042 168.922 3.39204 172.441 3.39204C175.959 3.44245 182.588 3.64407 187.228 3.89609C194.622 4.29933 193.806 4.34974 180.599 4.14812C172.339 4.04731 158.826 3.9465 150.566 3.9465C142.305 3.9465 135.676 3.84569 135.778 3.74488C135.931 3.59366 141.591 3.44245 148.373 3.39204C155.155 3.29123 160.968 3.08961 161.325 2.83759C162.09 2.38394 164.792 2.43435 165.557 2.9888ZM218.18 3.79528C217.16 3.89609 215.528 3.89609 214.61 3.79528C213.743 3.69447 214.61 3.59366 216.548 3.59366C218.537 3.59366 219.25 3.69447 218.18 3.79528ZM106.102 4.14812C106 4.24893 94.2207 4.40014 79.8922 4.50095C65.6148 4.65217 57.4562 4.60176 61.7905 4.45055C70.9178 4.09771 106.407 3.84569 106.102 4.14812ZM131.495 4.24893C131.342 4.40014 130.883 4.45055 130.526 4.29933C130.118 4.14812 130.271 3.9969 130.832 3.9969C131.393 3.9465 131.699 4.09771 131.495 4.24893ZM221.647 7.52525C222.004 7.87809 220.525 7.9789 217.058 7.92849C214.253 7.82768 204.259 7.82768 194.877 7.87809C185.494 7.92849 176.52 7.87809 174.99 7.77728C170.452 7.42444 145.925 7.37404 127.569 7.62606C108.702 7.92849 107.529 7.67647 124.764 7.0212C140.214 6.41634 220.984 6.86999 221.647 7.52525ZM98.5039 8.0293C83.1047 8.43254 67.2465 8.43254 70.9688 7.9789C72.4985 7.77728 82.0338 7.62606 92.13 7.62606C110.13 7.67647 110.283 7.67647 98.5039 8.0293ZM165.812 8.48295C165.812 8.73497 165.455 8.83578 165.047 8.68457C164.639 8.48295 164.282 8.28133 164.282 8.18052C164.282 8.07971 164.639 7.9789 165.047 7.9789C165.455 7.9789 165.812 8.18052 165.812 8.48295ZM167.342 8.48295C167.342 8.73497 167.087 8.987 166.781 8.987C166.526 8.987 166.424 8.73497 166.577 8.48295C166.73 8.18052 166.985 7.9789 167.138 7.9789C167.24 7.9789 167.342 8.18052 167.342 8.48295ZM171.166 8.48295C171.319 8.73497 171.115 8.987 170.707 8.987C170.248 8.987 169.891 8.73497 169.891 8.48295C169.891 8.18052 170.095 7.9789 170.35 7.9789C170.656 7.9789 171.013 8.18052 171.166 8.48295ZM219.607 8.987C220.525 9.39024 220.525 9.44064 219.352 9.39024C218.638 9.39024 217.415 9.18862 216.548 8.987L215.018 8.58376H216.803C217.772 8.58376 219.046 8.73497 219.607 8.987ZM101.665 9.33983C94.0167 9.44064 81.6259 9.44064 74.1303 9.33983C66.6346 9.28943 72.9065 9.23902 88.0508 9.23902C103.195 9.23902 109.314 9.28943 101.665 9.33983ZM5.70046 11.0032C5.70046 11.2552 4.9356 11.5072 4.06875 11.4568C2.64101 11.4568 2.53902 11.356 3.40587 11.0032C4.83361 10.3983 5.70046 10.3983 5.70046 11.0032ZM13.808 10.7008C13.706 10.8016 11.8704 11.0032 9.77973 11.1544C7.28118 11.356 6.21037 11.3056 6.72028 11.0032C7.43415 10.5496 14.3179 10.2471 13.808 10.7008ZM213.131 11.8601C212.367 11.9609 210.99 11.9609 210.072 11.8601C209.154 11.7593 209.766 11.6585 211.449 11.6585C213.131 11.6585 213.896 11.7593 213.131 11.8601Z"
                                            fill="url(#paint0_linear_5012_165)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_5012_165" x1="44.8273" y1="18.6184"
                                                x2="48.3226" y2="31.8404" gradientUnits="userSpaceOnUse">
                                                <stop offset="1" stop-color="#ff4289" />
                                                <stop offset="1" stop-color="#17B6A6" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="dgm-service-wrap">
                <div class="row">
                    <div class="col-xl-12">
                         @foreach ($chooseTitles as $index => $chooseTitle)
                        @php
                            $chooseDescription = isset($chooseDescriptions[$index])
                                ? $chooseDescriptions[$index]
                                : 'No description provided.';
                        @endphp
                        <div class="dgm-service-item p-relative tp_fade_anim">
                            <div class="dgm-service-bg">
                               <img src="{{ asset('assets/img/front-images/service-choose-us.jpg') }}" alt="Service choose us">

                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="dgm-service-content-left d-inline-flex align-items-center">
                                        <span>{{$index + 1}}</span>
                                        <h4 class="dgm-service-title-sm">{{ $chooseTitle }}
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div
                                        class="dgm-service-content-right d-flex align-items-center justify-content-between">
                                        <p>{{ $chooseDescription }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- service area end -->

    <!-- brand area end -->
    <div class="creative-work-area pb-60">
        <div class="container container-1580">
            <div class="creative-work-bg black-bg-8 p-relative">
                <span class="creative-work-square-box"></span>
                <div class="row">
                    <div class="offset-xxl-6 offset-xl-5 col-xxl-6 col-xl-7">
                        <div class="creative-work-title-wrap mb-65">
                            <div class="creative-work-title-box mb-30">
                                <span class="tp-section-subtitle mb-20 fs-17 pre-circle tp_fade_anim"
                                    data-delay=".3">Sharing the love</span>
                                <h4 class="tp-section-title fs-44 tp_fade_anim" data-delay=".5">{{ $subService->call }}</h4>
                            </div>
                            <div class="creative-work-btn tp_fade_anim" data-delay=".5" data-fade-from="top"
                                data-ease="bounce">
                                <a href="{{ route('getqoute') }}" class="tp-btn-black btn-green-light-bg pr-15">
                                    <span class="tp-btn-black-filter-blur">
                                        <svg width="0" height="0">
                                            <defs>
                                                <filter id="buttonFilter7">
                                                    <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur">
                                                    </feGaussianBlur>
                                                    <feColorMatrix in="blur"
                                                        values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9">
                                                    </feColorMatrix>
                                                    <feComposite in="SourceGraphic" in2="buttonFilter7" operator="atop">
                                                    </feComposite>
                                                    <feBlend in="SourceGraphic" in2="buttonFilter7"></feBlend>
                                                </filter>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="tp-btn-black-filter d-inline-flex align-items-center"
                                        style="filter: url(#buttonFilter7)">
                                        <span class="tp-btn-black-text">Let’s chat</span>
                                        <span class="tp-btn-black-circle">
                                            <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentcolor" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- brand area end -->
@endsection
