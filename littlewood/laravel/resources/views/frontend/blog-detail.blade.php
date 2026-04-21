@extends('frontend.layouts.master')
@section('title' ,'Littlewood')
@section('main-container')
<style>
    section {
    padding: 80px 0 !important;
    }
</style>
       
        <!-- start blog content section --> 
        <section class="blog-right-side-bar">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                        <div class="row">
                            <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                                <ul class="list-unstyled margin-2-rem-bottom">
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="feather icon-feather-calendar text-fast-blue margin-10px-right"></i><a >{{ $blog->created_at->format('d F Y') }}
                                    </a></li>
                                    <li class="d-inline-block align-middle"><i class="feather icon-feather-user text-fast-blue margin-10px-right"></i>By <a >Little Wood</a></li>
                                </ul>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">{{$blog->name}}</h5>
                                <img src="{{ asset('uploads/blogs/' . $blog->banner_image) }}" alt="{{ $blog->name }}" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">
                                <p>{!! $blog->description !!}</p>
                            </div>                      
                        </div>
                    </div>
                    <!-- start sidebar -->
                    <aside class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-md-7 blog-sidebar lg-padding-4-rem-left md-padding-15px-left">
                        <div class="margin-5-rem-bottom xs-margin-35px-bottom wow animate__fadeIn">
                            <span class="alt-font font-weight-500 text-large text-extra-dark-gray d-block margin-35px-bottom">Recent posts</span>
                            <ul class="latest-post-sidebar position-relative">
                                @foreach ($all_blog as $blog )
                                <li class="d-flex wow animate__fadeIn" data-wow-delay="0.2s">
                                    <figure class="flex-shrink-0">
                                        <a ><img class="border-radius-3px" src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}" alt=""></a>
                                    </figure>
                                    <div class="media-body flex-grow-1">
                                        <a  class="font-weight-500 text-extra-dark-gray d-inline-block margin-five-bottom md-margin-two-bottom">{{$blog->name}}</a>
                                        <span class="text-medium d-block line-height-22px">{!! $blog->description !!}
                                        </span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
        <!-- end blog content section -->
        
        
        
@endsection
      