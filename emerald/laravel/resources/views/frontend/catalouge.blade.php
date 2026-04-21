@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')



 <!-- Page Header Start -->
    <div class="page-header parallaxie"style="background: url('{{ asset('assets/frontend/images/emd-banner-catalogue.jpg') }}') no-repeat center center !important;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <!-- Page Header Box Start -->
            <div class="page-header-box">
              <h1 class="text-anime-style-2" data-cursor="-opaque">
                Our <span>Catalogues</span>
              </h1>
              <nav class="wow fadeInUp">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a {{ route('home') }}>home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Catalogues
                  </li>
                </ol>
              </nav>
            </div>
            <!-- Page Header Box End -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
      <div class="container">
        <div class="row section-row align-items-center">
          <div class="col-lg-6">
            <!-- Section Title Start -->
            <div class="section-title">
              <h3 class="wow fadeInUp">our team</h3>
              <h2 class="text-anime-style-2" data-cursor="-opaque">
                Core strengths in <span>industrial innovation</span>
              </h2>
            </div>
            <!-- Section Title End -->
          </div>
        </div>

        <div class="row">
            @foreach ( $catalouges as $cat )
          <div class="col-lg-3 col-md-6">
            <!-- Team Member Item Start -->
            <div class="team-member-item wow fadeInUp">
              <!-- Team Image Start -->
              <div class="team-image">
                  <figure class="image-anime">
                    <img src="{{ asset('uploads/catalogues/' . $cat->image ) }}" alt="{{$cat->name}}" />
                  </figure>

                <!-- Team Social Icon Start -->
                <div class="team-social-icon">
                  <ul>
                    <li>{{$cat->name}}</li>
                    <li>
                      <a href="{{ route('catalog.download', $cat->id) }}"><i class="fa fa-download"></i></a>
                    </li>
                  </ul>
                </div>
                <!-- Team Social Icon End -->
              </div>
              <!-- Team Image End -->
            </div>
            <!-- Team Member Item End -->
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Our Team Section End -->

@endsection






















