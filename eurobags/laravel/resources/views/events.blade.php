@extends('layouts.master')

@section('title', 'Events')


@section('content')



   <!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{ asset('images/events-banner.jpg') }}');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Events</h1>
              <p class="text-white mb-0">Introspection is the trick. Understand what you want, why you want it and what it will do for you. This is a critical factor.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    inner banner -->

    <!--=================================
    Blog -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            @if(count($events))
              @foreach($events as $event)
            <div class="blog-post mb-4 mb-lg-5">
              <div class="blog-post-image">
                <img class="img-fluid" src="{{ asset('images/events/'.$event->image) }}" alt="">
              </div>
              <div class="blog-post-content">
                <div class="blog-post-info">
                  <div class="blog-post-author">
                    <a href="#" class="btn btn-light-round btn-round text-primary">{{$event->location}}</a>
                  </div>
                  <div class="blog-post-date">
                    <a href="#"> {{\Carbon\Carbon::parse($event->start_date)->format('d M Y ')}} </a>
                  </div>
                </div>
                <div class="blog-post-details">
                  <h5 class="blog-post-title">
                    <a href="blog-detail.html">{{$event->title}}</a>
                  </h5>
                  <p>{!! $event->description   !!}</p>
                </div>
              </div>
            </div>
             @endforeach
            @else
             <h1>Coming Soon ... !</h1>
            @endif
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Blog -->

@endsection