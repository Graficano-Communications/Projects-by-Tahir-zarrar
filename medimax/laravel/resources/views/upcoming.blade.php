@extends('front-layouts.master')

@section('title', 'Upcoming')

@section('content')

<!-- Page Banner Area -->
<div class="page-banner-area bg-7">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Upcoming Events</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Frequently Area -->
<div class="frequently-area ptb-100">
    <div class="container">
        @forelse ($upcomingNews as $newsItem)
        <div class="row align-items-center ptb-100">
            <div class="col-lg-6">
                <div class="frequently-text">
                    <div class="section-title-two">
                        <h2>{{ $newsItem->title }}</h2>
                        <p> <i class='bx bx-calendar'></i> {{ $newsItem->date }}</p>
                        {!!$newsItem->description!!}
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="frequently-img">
                    @if ($newsItem->images->isNotEmpty())
                    @php
                    $firstImage = $newsItem->images->first();
                    @endphp
                    <div class="main-img">
                        <img src="{{ asset($firstImage->path) }}" alt="image">
                    </div>
                    @endif



                    <div class="shape-1">
                        <img src="{{ asset('medimax_assets/img/shapes/shape-14.png') }}" alt="Shape">
                    </div>
                    <div class="shape-2">
                        <img src="{{ asset('medimax_assets/img/shapes/shape-15.png') }}" alt="Shape">
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-sm-12 col-lg-12 text-center">
            Coming soon ....
        </div>

        @endforelse
    </div>
</div>
<!-- End Frequently Area -->



@endsection