@extends('layouts.master')

@section('meta_title', $service->meta_title)
@section('meta_description', $service->meta_description)
@section('meta_tags', '')

@section('SpecificStyles')

@stop

@section('content')
    <style>
        .tp-service-4-solution-item-icon {
            padding-bottom: 25px;
        }
          p {
            font-weight: 400;
            font-size: 18px;
            line-height: 1.56;
            margin-bottom: 15px;
            letter-spacing: -0.02em;
            font-family: var(--tp-ff-p);
            color: white;
        }
    </style>



    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "{{ $service->heading_1 }}",
  "name": "{{ $service->heading_1 }}",
  "description": "{{ $service->meta_description }}",
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
    <div class="tp-service-4-banner-area ">
        <div class=" ar-about-us-4">
            <img class="w-100" src="{{ asset('images/service/' . $service->image) }}" alt="{{ $service->name }}" >
        </div>
    </div>
    <!-- banner area end -->

    <!-- barnd area start -->
    <div class="tp-brand-area  pb-140">
        @if ($service->headings)
            @php
                $headings = json_decode($service->headings);
            @endphp
            <div class="tp-brand-wrapper green-regular-bg z-index-1">
                <div class="swiper-container tp-brand-active fix">
                    <div class="swiper-wrapper slide-transtion">
                        @foreach ($headings as $index => $heading)
                            <div class="swiper-slide">
                                <div class="tp-brand-item">
                                    <span class="tp-brand-title">{{ $heading }}</span>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        @endif
        <div class="tp-brand-wrapper tp-brand-style-2 black-bg-9">
            <div class="swiper-container tp-brand-active fix" dir="rtl">
                <div class="swiper-wrapper slide-transtion">
                    <div class="swiper-slide">
                        <div class="tp-brand-item">
                            <span class="tp-brand-title">{{ $service->name }}</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-brand-item">
                            <span class="tp-brand-title">{{ $service->name }}</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-brand-item">
                            <span class="tp-brand-title">{{ $service->name }}</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-brand-item">
                            <span class="tp-brand-title">{{ $service->name }}</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-brand-item">
                            <span class="tp-brand-title">{{ $service->name }}</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-brand-item">
                            <span class="tp-brand-title">{{ $service->name }}</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="tp-brand-item">
                            <span class="tp-brand-title">{{ $service->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- barnd area end -->


    <!-- service solution area start -->
    @if (isset($departments) && $departments->isNotEmpty())
        <section class="tp-service-4-solution-area pb-140">
            <div class="container container-1320">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="tp-service-4-solution-subtitle pb-50 tp_fade_anim">
                            <p>{{ $service->heading_1 }}</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="tp-service-4-solution-heading pb-100 tp_fade_anim">
                            <p class="text-white">{!! $service->description !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tp-service-4-solution-slider">
                        <div class="tp-service-4-solution-active swiper">
                            <div class="swiper-wrapper">
                                @foreach ($departments as $department)
                                    <div class="swiper-slide">
                                        <div class="tp-service-4-solution-item mb-30">
                                            <div class="tp-service-4-solution-item-icon">
                                                <span><img src="{{ asset('images/departments/' . $department->image) }}"
                                                        alt=""></span>
                                            </div>
                                            <div class="tp-service-4-solution-item-content">
                                                <h4 class="tp-service-4-solution-item-title"><a class="tp-line-black"
                                                        href="{{ url($department->slug) }}">{{ $department->name }}</a>
                                                </h4>
                                            </div>
                                            <div class="tp-service-4-solution-item-btn">
                                                <a class="tp-line-black" href="{{ url($department->slug) }}">View Details
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                            height="14" viewBox="0 0 14 14" fill="none">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M2.41379 3.30208C5.97452 3.05821 10.6092 1.55558 14 0C12.4438 3.39014 10.9406 8.02425 10.6973 11.585L8.35796 6.59396L1.14867 13.8038C1.02249 13.9296 0.851498 14.0003 0.673273 14.0001C0.540303 14.0001 0.410328 13.9606 0.299776 13.8867C0.189224 13.8129 0.103059 13.7079 0.0521774 13.585C0.00129604 13.4622 -0.0120192 13.327 0.0139141 13.1966C0.0398474 13.0661 0.103867 12.9463 0.197876 12.8523L7.40747 5.64271L2.41379 3.30208Z"
                                                                fill="currentColor" />
                                                        </svg></span></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="tp-service-4-dot text-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="tp-service-4-solution-area pb-140">
        <div class="container container-1320 ">
            <div class="row align-items-center ">
                <div class="col-lg-6 " data-wow-delay="0.2s">
                    @if (!empty($service->about_service))
                        <h3 class="tp-section-title-grotesk text-white tp_fade_anim" data-delay=".5">
                            <span class="p-relative">
                                {{ $service->about_service }}
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
                        </h3>
                        <p class="text-white">{!! $service->about_desc !!}</p>
                    @endif
                </div>
                @if (!empty($service->p2_title) || !empty($service->p2_desc) || !empty($service->p3_title) || !empty($service->p3_desc))
                    <div class="col-lg-6 " data-wow-delay="0.2s">
                        @if (!empty($service->p2_title))
                            <h4 class="dgm-service-title-sm" style="color: #17B6A6;">{{ $service->p2_title }}</h4>
                        @endif
                        @if (!empty($service->p2_desc))
                            <p class="mt-0 pt-0 text-white"> {{ $service->p2_desc }}</p>
                        @endif

                        @if (!empty($service->p3_title))
                            <h4 class="dgm-service-title-sm" style="color: #ff4289;">{{ $service->p3_title }}</h4>
                        @endif

                        @if (!empty($service->p3_desc))
                            <p class="text-white">
                                {{ $service->p3_desc }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>




    <!-- padding area start -->
    <div class="tp-service-4-padding-area pb-1" data-bg-color="#1A1B1E">
        <!-- service area end -->
        @if (isset($chooseTitles) && !empty($chooseTitles) && isset($chooseDescriptions) && !empty($chooseDescriptions))
            <div class="dgm-service-area dgm-service-radius pt-120 z-index-1">
                <div class="container container-1230">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="dgm-service-title-box z-index-1 mb-60">
                                <span class="tp-section-subtitle subtitle-grey mb-15 text-white tp_fade_anim"
                                    data-delay=".3">Why Choose Us</span>
                                <h4 class="tp-section-title-grotesk text-white tp_fade_anim" data-delay=".5">
                                    <span class="p-relative">
                                        {{ $service->m_head }}
                                        <span class="tp-section-title-shape">
                                            <svg width="231" height="15" viewBox="0 0 231 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M130.373 0.9726C126.192 1.17422 109.977 1.57746 94.4246 1.87989C53.7849 2.63597 36.6519 3.29123 22.7824 4.45055C11.9723 5.35784 1.72317 6.66837 1.16227 7.22282C1.06029 7.32363 0.958306 8.58376 0.907315 9.9951C0.805333 12.2633 0.958306 12.6666 2.08011 13.473C2.79398 13.9771 3.76281 14.4811 4.17073 14.6324C4.88461 14.8844 32.5217 13.3722 39.0995 12.717C42.006 12.4649 131.495 11.356 153.319 11.3056C161.172 11.3056 179.426 11.6081 193.857 12.0113C208.287 12.4145 221.341 12.6666 222.82 12.6162C226.491 12.5153 229.755 10.7512 229.907 8.83578C229.958 7.67647 229.805 7.47485 228.633 7.42444C227.358 7.37404 227.358 7.32363 228.939 6.9708C231.131 6.46675 231.386 6.16432 230.111 5.45865C228.888 4.80338 228.684 3.9465 229.805 3.9465C230.213 3.9465 230.57 3.69447 230.57 3.44245C230.57 3.14002 230.315 2.9384 229.958 2.9384C229.653 2.9384 228.327 2.43435 227.052 1.82949L224.706 0.720575L181.364 0.670169C157.551 0.619765 134.605 0.77098 130.373 0.9726ZM165.557 2.9888C165.863 3.19042 168.922 3.39204 172.441 3.39204C175.959 3.44245 182.588 3.64407 187.228 3.89609C194.622 4.29933 193.806 4.34974 180.599 4.14812C172.339 4.04731 158.826 3.9465 150.566 3.9465C142.305 3.9465 135.676 3.84569 135.778 3.74488C135.931 3.59366 141.591 3.44245 148.373 3.39204C155.155 3.29123 160.968 3.08961 161.325 2.83759C162.09 2.38394 164.792 2.43435 165.557 2.9888ZM218.18 3.79528C217.16 3.89609 215.528 3.89609 214.61 3.79528C213.743 3.69447 214.61 3.59366 216.548 3.59366C218.537 3.59366 219.25 3.69447 218.18 3.79528ZM106.102 4.14812C106 4.24893 94.2207 4.40014 79.8922 4.50095C65.6148 4.65217 57.4562 4.60176 61.7905 4.45055C70.9178 4.09771 106.407 3.84569 106.102 4.14812ZM131.495 4.24893C131.342 4.40014 130.883 4.45055 130.526 4.29933C130.118 4.14812 130.271 3.9969 130.832 3.9969C131.393 3.9465 131.699 4.09771 131.495 4.24893ZM221.647 7.52525C222.004 7.87809 220.525 7.9789 217.058 7.92849C214.253 7.82768 204.259 7.82768 194.877 7.87809C185.494 7.92849 176.52 7.87809 174.99 7.77728C170.452 7.42444 145.925 7.37404 127.569 7.62606C108.702 7.92849 107.529 7.67647 124.764 7.0212C140.214 6.41634 220.984 6.86999 221.647 7.52525ZM98.5039 8.0293C83.1047 8.43254 67.2465 8.43254 70.9688 7.9789C72.4985 7.77728 82.0338 7.62606 92.13 7.62606C110.13 7.67647 110.283 7.67647 98.5039 8.0293ZM165.812 8.48295C165.812 8.73497 165.455 8.83578 165.047 8.68457C164.639 8.48295 164.282 8.28133 164.282 8.18052C164.282 8.07971 164.639 7.9789 165.047 7.9789C165.455 7.9789 165.812 8.18052 165.812 8.48295ZM167.342 8.48295C167.342 8.73497 167.087 8.987 166.781 8.987C166.526 8.987 166.424 8.73497 166.577 8.48295C166.73 8.18052 166.985 7.9789 167.138 7.9789C167.24 7.9789 167.342 8.18052 167.342 8.48295ZM171.166 8.48295C171.319 8.73497 171.115 8.987 170.707 8.987C170.248 8.987 169.891 8.73497 169.891 8.48295C169.891 8.18052 170.095 7.9789 170.35 7.9789C170.656 7.9789 171.013 8.18052 171.166 8.48295ZM219.607 8.987C220.525 9.39024 220.525 9.44064 219.352 9.39024C218.638 9.39024 217.415 9.18862 216.548 8.987L215.018 8.58376H216.803C217.772 8.58376 219.046 8.73497 219.607 8.987ZM101.665 9.33983C94.0167 9.44064 81.6259 9.44064 74.1303 9.33983C66.6346 9.28943 72.9065 9.23902 88.0508 9.23902C103.195 9.23902 109.314 9.28943 101.665 9.33983ZM5.70046 11.0032C5.70046 11.2552 4.9356 11.5072 4.06875 11.4568C2.64101 11.4568 2.53902 11.356 3.40587 11.0032C4.83361 10.3983 5.70046 10.3983 5.70046 11.0032ZM13.808 10.7008C13.706 10.8016 11.8704 11.0032 9.77973 11.1544C7.28118 11.356 6.21037 11.3056 6.72028 11.0032C7.43415 10.5496 14.3179 10.2471 13.808 10.7008ZM213.131 11.8601C212.367 11.9609 210.99 11.9609 210.072 11.8601C209.154 11.7593 209.766 11.6585 211.449 11.6585C213.131 11.6585 213.896 11.7593 213.131 11.8601Z"
                                                    fill="url(#paint0_linear_5012_165)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_5012_165" x1="44.8273"
                                                        y1="18.6184" x2="48.3226" y2="31.8404"
                                                        gradientUnits="userSpaceOnUse">
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
                                            <img src="{{ asset('assets/img/front-images/service-choose-us.jpg') }}"
                                                alt="Service choose us">
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="dgm-service-content-left d-inline-flex align-items-center">
                                                    <span>{{ $index + 1 }}</span>
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





        <!-- service pricing area start -->
        {{-- <section class="tp-service-4-price-ptb z-index-1 pb-140 pt-140">
            <div class="tp-service-4-price-shape">
                <img src="assets/img/service/service-4-price-shape.png" alt="">
            </div>
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dgm-service-title-box text-center z-index-1 mb-60">
                            <span class="tp-section-subtitle mb-15 tp_fade_anim" data-delay=".3">Affordable pricing</span>
                            <h4 class="tp-section-title-grotesk tp_fade_anim" data-delay=".5">
                                Special offer! choose <br>
                                your pack today
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="app-price-box app-price-service service-4-price">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="crp-price-item">
                                    <div class="crp-price-head">
                                        <span>Free</span>
                                        <h4>$0 <i>/ month</i></h4>
                                        <p>Organize your daily task for free</p>
                                    </div>
                                    <div class="crp-price-list">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Unlimited cards</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Automated management</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>SOX compliance</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Local video issuance</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Limited tools</li>
                                        </ul>
                                    </div>
                                    <div class="app-price-btn-box">
                                        <div class="animated-border-box w-100">
                                            <a class="tp-btn-black-border w-100 text-center" href="contact-dark.html">
                                                Join this plan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="crp-price-item active">
                                    <div class="crp-price-head">
                                        <span>Pro</span>
                                        <h4>$48 <i>/ month</i></h4>
                                        <p>Organize your daily task for free</p>
                                    </div>
                                    <div class="crp-price-list">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Unlimited cards</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Automated management</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>SOX compliance</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Local video issuance</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Limited tools</li>
                                        </ul>
                                    </div>
                                    <div class="app-price-btn-box">
                                        <div class="animated-border-box radius-style-2 w-100">
                                            <a class="tp-btn-gradient sm w-100 text-center" href="contact-dark.html">
                                                Join this plan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="crp-price-item">
                                    <div class="crp-price-head">
                                        <span>Business</span>
                                        <h4>$140 <i>/ month</i></h4>
                                        <p>Organize your daily task for free</p>
                                    </div>
                                    <div class="crp-price-list">
                                        <ul>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Unlimited cards</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Automated management</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>SOX compliance</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Local video issuance</li>
                                            <li><span><svg xmlns="http://www.w3.org/2000/svg" width="10"
                                                        height="9" viewBox="0 0 10 9" fill="none">
                                                        <path
                                                            d="M1 5.6941C1 5.6941 2.6 6.60188 3.4 7.93242C3.4 7.93242 5.8 2.70967 9 0.96875"
                                                            stroke="#21212D" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg></span>Limited tools</li>
                                        </ul>
                                    </div>
                                    <div class="app-price-btn-box">
                                        <div class="animated-border-box w-100">
                                            <a class="tp-btn-black-border w-100 text-center" href="contact-dark.html">
                                                Join this plan
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- service pricing area end -->

    </div>
    <!-- padding area end -->




    <!-- testimonial area start -->
    @if (isset($clientNames) && !empty($clientNames) && isset($reviews) && !empty($reviews))
        <div class="creative-testimonial-area pt-120 pb-120 fix">
            <div class="container container-1580">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="creative-testimonial-title-box mb-25">
                            <span class="tp-section-subtitle mb-20 fs-17 pre-circle tp_fade_anim"
                                data-delay=".3">Testimonials</span>
                            <h4 class="tp-section-title fs-44 tp_fade_anim" data-delay=".5">What our happy clients <br>
                                say
                                about us.</h4>
                        </div>
                        <div class="creative-testimonial-btn mb-55 tp_fade_anim" data-delay=".7" data-fade-from="top"
                            data-ease="bounce">
                            <a href="{{ route('getqoute') }}" class="tp-btn-black btn-green-light-bg pr-15">
                                <span class="tp-btn-black-filter-blur">
                                    <svg width="0" height="0">
                                        <defs>
                                            <filter id="buttonFilter6">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur">
                                                </feGaussianBlur>
                                                <feColorMatrix in="blur"
                                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"></feColorMatrix>
                                                <feComposite in="SourceGraphic" in2="buttonFilter6" operator="atop">
                                                </feComposite>
                                                <feBlend in="SourceGraphic" in2="buttonFilter6"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                </span>
                                <span class="tp-btn-black-filter d-inline-flex align-items-center"
                                    style="filter: url(#buttonFilter6)">
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
                        <div class="creative-testimonial-arrow">
                            <button class="creative-testimonial-prev mr-5">
                                <span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.8907 6H0.895874M0.895874 6L5.89327 1M0.895874 6L5.89327 11"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <button class="creative-testimonial-next">
                                <span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.87085 6H10.8656M10.8656 6L5.86825 1M10.8656 6L5.86825 11"
                                            stroke="currentcolor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="creative-testimonial-slider-wrap">
                            <div class="swiper-container creative-testimonial-active fix">
                                <div class="swiper-wrapper">
                                    @foreach ($clientNames as $index => $clientName)
                                        @php
                                            $review = isset($reviews[$index])
                                                ? $reviews[$index]
                                                : 'No review provided.';
                                        @endphp
                                        <div class="swiper-slide">
                                            <div class="creative-testimonial-item">
                                                <div
                                                    class="creative-testimonial-avater-wrap d-flex align-items-center justify-content-between">
                                                    <div
                                                        class="creative-testimonial-avater-box d-inline-flex align-items-center">
                                                        <div class="creative-testimonial-avater-info">
                                                            <h4>{{ $clientName }}</h4>
                                                        </div>
                                                    </div>
                                                    <div class="creative-testimonial-star">
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z"
                                                                    fill="#FDCE07" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z"
                                                                    fill="#FDCE07" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z"
                                                                    fill="#FDCE07" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z"
                                                                    fill="#FDCE07" />
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg width="16" height="15" viewBox="0 0 16 15"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.99999 0L9.7961 5.52786H15.6084L10.9062 8.94427L12.7023 14.4721L7.99999 11.0557L3.29771 14.4721L5.09382 8.94427L0.391541 5.52786H6.20388L7.99999 0Z"
                                                                    fill="#FDCE07" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="creative-testimonial-text">
                                                    <p>
                                                        <span>
                                                            <svg width="16" height="11" viewBox="0 0 16 11"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.5928 0L14.8534 0.573292C14.4017 0.747015 13.9501 0.972856 13.4984 1.25081C13.0467 1.52877 12.6298 1.8241 12.2476 2.13681C11.8654 2.44951 11.57 2.77959 11.3616 3.12703L11.9349 3.59609H12.4039C13.1336 3.59609 13.759 3.75244 14.2801 4.06514C14.836 4.3431 15.253 4.7253 15.5309 5.21172C15.8436 5.69815 16 6.25407 16 6.87948C16 7.50488 15.8263 8.0608 15.4788 8.54723C15.1661 8.99891 14.7318 9.36373 14.1759 9.64169C13.6547 9.91965 13.0293 10.0586 12.2997 10.0586C11.6048 10.0586 10.9794 9.91965 10.4235 9.64169C9.86754 9.32898 9.43322 8.92942 9.12052 8.44299C8.80782 7.95656 8.65147 7.38327 8.65147 6.72312C8.65147 5.99348 8.79045 5.29859 9.0684 4.63844C9.38111 3.94354 9.79805 3.31813 10.3192 2.76222C10.8404 2.17155 11.4658 1.65038 12.1954 1.1987C12.9251 0.712269 13.7242 0.312704 14.5928 0ZM5.94137 0L6.20195 0.573292C5.75027 0.747015 5.29859 0.972856 4.84691 1.25081C4.39522 1.52877 3.97828 1.8241 3.59609 2.13681C3.2139 2.44951 2.91857 2.77959 2.7101 3.12703L3.28339 3.59609H3.75244C4.48208 3.59609 5.10749 3.75244 5.62866 4.06514C6.18458 4.3431 6.60152 4.7253 6.87948 5.21172C7.19218 5.69815 7.34853 6.25407 7.34853 6.87948C7.34853 7.50488 7.17481 8.0608 6.82736 8.54723C6.51466 8.99891 6.08035 9.36373 5.52443 9.64169C5.00326 9.91965 4.37785 10.0586 3.64821 10.0586C2.95331 10.0586 2.3279 9.91965 1.77199 9.64169C1.21607 9.32898 0.781759 8.92942 0.469055 8.44299C0.156352 7.95656 0 7.38327 0 6.72312C0 5.99348 0.138979 5.29859 0.416938 4.63844C0.729642 3.94354 1.14658 3.31813 1.66775 2.76222C2.18893 2.17155 2.81433 1.65038 3.54397 1.1987C4.27362 0.712269 5.07275 0.312704 5.94137 0Z"
                                                                    fill="white" />
                                                            </svg>
                                                        </span>
                                                        {{ $review }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tp-scrollbar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- testimonial area end -->

    <!-- portfolio area start -->
    @if ($multimediaProjects->isNotEmpty())
        <div class="tp-portfolio-inner-ptb ">
            <div class="container container-1430">
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="dgm-service-title-box text-center z-index-1 mb-60">
                            <h4 class="tp-section-title-grotesk tp_fade_anim" data-delay=".5">
                               Executions
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="tp-portfolio-tab-content-wrap">
                    <div class="row">
                        @foreach ($multimediaProjects as $project)
                            <div class="col-md-6">
                                <div class="tp-portfolio-inner-item mb-65">
                                    <div class="tp-portfolio-inner-thumb tp--hover-item">
                                        <a href="{{ $project->url }}">
                                            <div class="tp--hover-img" data-intensity="0.6" data-speedin="1"
                                                data-speedout="1">
                                                <img src="{{ asset('images/projects/' . $project->image) }}"
                                                    class="img-fluid" alt="{{ $project->name }}">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-portfolio-inner-content">
                                        <h4 class="tp-portfolio-inner-title">
                                            <a class="tp-line-white" href="{{ $project->url }}">
                                                {{ $project->name }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    @endif
    <!-- portfolio area end -->


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
                                <h4 class="tp-section-title fs-44 tp_fade_anim" data-delay=".5">{{ $service->call }}</h4>
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

















    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const headings = document.querySelectorAll('.cd-words-wrapper b');
            let currentHeading = 0;

            function showNextHeading() {
                // Remove 'is-visible' class from all headings
                headings.forEach(heading => heading.classList.remove('is-visible'));

                // Add 'is-visible' class to the current heading
                headings[currentHeading].classList.add('is-visible');

                // Move to the next heading
                currentHeading = (currentHeading + 1) % headings.length;
            }

            // Show the first heading initially
            showNextHeading();

            // Cycle through the headings every 3 seconds (3000 milliseconds)
            setInterval(showNextHeading, 3000);
        });
    </script>

@endsection

@section('SpecificScripts')
@stop
