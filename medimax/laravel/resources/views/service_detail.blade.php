@extends('front-layouts.master')

@section('title', 'Home')

@section('content')

<section class="service-single-area pt-150 pb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-12 order-2 order-lg-1">
                <div class="service-single__left-item">
                    <div class="image mb-50">
                        <img src="{{ asset($service->detail_image_path) }}" alt="image" />

                    </div>
                    <h3 class="title mb-30">{{$service->name}}</h3>
                    <p class="mb-20">
                        {!!$service->detail_des!!}
                    </p>
                    
                    <div class="row g-5 mt-40 mb-40 align-items-center">
                        <div class="col-lg-5">
                            <h4 class="mb-20">Benefits With Our Service</h4>
                            <ul>
                                @php
                                $tags = json_decode($service->bnf_tags, true);
                                @endphp
                                @foreach($tags as $tag)
                                <li class="mb-15">
                                    <i class="fa-solid fa-check"></i>{{ $tag }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-7">
                            <div class="image">
                                <img src="{{ asset($service->bnf_image_path) }}" alt="image" />
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>

@endsection