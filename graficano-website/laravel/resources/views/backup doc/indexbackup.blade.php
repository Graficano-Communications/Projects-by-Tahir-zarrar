@extends('layouts.master')

@section('title', 'home')
@section('SpecificStyles')

@stop

@section('content')
<!--Carousel Wrapper-->
<div id="carousel-example-2" data-interval="false" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view slide-1">
        <!-- <img class="d-block w-100" src="assets/images/wALLPAPER.png" alt="First slide"> -->
      </div>
      <div class="carousel-caption">
        <div class="container-fluid text-right">
          <div class="row">
            <div class="col-md-4 offset-md-2  col-6">
              <img src="{{asset('assets/images/Offset_Printing.png')}}" alt="offset printing" class="img-fluid img-1">
            </div>
            <div class="col-md-4 col-6">
              <img src="{{asset('assets/images/Digital_Printing.png')}}" alt="digital printing" class="img-fluid img-2">
            </div>
            <div class="col-md-4 offset-md-2 col-6">
              <img src="{{asset('assets/images/fancy_Printing.png')}}" alt="fancy printing" class="img-fluid img-3">
            </div>
            <div class="col-md-4 col-6">
              <img src="{{asset('assets/images/Foil_Printing.png')}}" alt="foil printing" class="img-fluid img-4">
            </div>
          </div>
        </div>
        
        
        
        
      </div>
    </div>
    <div class="carousel-item">
      
      <div class="view slide-2">
        <!-- <img class="d-block w-100" src="assets/images/Wallpaper2.png" -->
          <!-- alt="Second slide"> -->
      </div>
      
      <div class="carousel-caption caption2">
        <div class="container-fluid">
          <div class="row">
        <div class="col-md-12 col-12 text-left">
          <img src="{{asset('assets/images/video_Documentry.png')}}" alt="Video documentry" class="img-fluid">
        </div>
        <div class="col-md-12 col-12 text-right">
          <img src="{{asset('assets/images/Animation_and_3d.png')}}" alt="animation and 3d" class="img-fluid">
        </div>
        </div>
        </div>
      </div>
    </div>

  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
  
<!-- Branding section -->
<section class="brandig-section">
<div class="container">
  <div class="row">
    <div class="col-md-2  img-main-box">
      <img src="{{asset('assets/images/branding/main-2.gif')}}" alt="branding" class="img-fluid">
    </div>
    <div class="col-md-4">
      <h1 class="main-heading">
        <img src="{{asset('assets/images/branding/Branding Icon.png')}}" alt="branding icon">
        Branding
      </h1>
      <p class="txt-center-mb">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
      It is a long established fact that a reader will be distracted use Lorem Ipsum as their default model text, and a search sometimes by accident, sometimes on purpose (injected d  </p>
      <p class="tags txt-center-mb">
        Logo Design |Stationery Design | Merchandising | Digital Spout|Expo Designs | Product Design | Brand Manual 
      </p>
    </div>
    
    <div class="col-md-6 img-grid">
      <div class="row">
        <div class="col-md-6 gif-box">
          <img src="{{asset('assets/images/branding/vital.gif')}}" alt="vital" class="img-fluid">
        </div>
        <div class="col-md-6 ">
         
          <div class="row">
            <div class="col-md-6 col-6 img-box-1">
              <img src="{{asset('assets/images/branding/branding-2.png')}}" alt="branding" class="img-fluid">
            </div>
            <div class="col-md-6 col-6 img-box-1">
              <img src="{{asset('assets/images/branding/branding-3.png')}}" alt="branding" class="img-fluid">
            </div>
            <div class="col-md-6 col-6 img-box-1">
              <img src="{{asset('assets/images/branding/branding-4.png')}}" alt="branding" class="img-fluid">
            </div>
            <div class="col-md-6 col-6 img-box-1">
              <img src="{{asset('assets/images/branding/branding-5.png')}}" alt="branding" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3 col-6 img-box-2">
              <img src="{{asset('assets/images/branding/branding-6.png')}}" alt="branding" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 img-box-2">
              <img src="{{asset('assets/images/branding/branding-7.png')}}" alt="branding" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 img-box-2">
              <img src="{{asset('assets/images/branding/barnding-8.png')}}" alt="branding" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 img-box-2">
              <img src="{{asset('assets/images/branding/barnding-9.png')}}" alt="branding" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>
</section>
<!-- /.branding section -->

<!-- Printing Section  -->
<section class="printing-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2 img-main-box">
        <img src="{{asset('assets/images/printing/Printing-Main-Image.png')}}" alt="Printing image" class="img-fluid">
      </div>
      <div class="col-md-4">
        <h1 class="main-heading">
          <img src="{{asset('assets/images/printing/Printing-icon.png')}}" alt="printing icon" class="img-fluid">
          Printing
        </h1>
        <p class="txt-center-mb">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          It is a long established fact that a reader will be distracted use Lorem Ipsum as their default model text, and a search sometimes by accident, sometimes on purpose (injected d  </p>   
        <p class="tags txt-center-mb">
          Catalog |Posters | Brocheurs | Visiting Cards| Stationery |Stickers | Penaflex |Calenders | Buntings |Flyers 
        </p>
        </div>
      <div class="col-md-6 img-grid">
        <div class="row">
          <div class="col-md-6 gif-box">
            <img src="{{asset('assets/images/printing/printing.gif')}}" alt="printing gif" class="img-fluid">
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6 col-6 img-box-1">
                <img src="{{asset('assets/images/printing/Printing-image-2.png')}}" alt="printing" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-1">
                <img src="{{asset('assets/images/printing/printing-image-3.png')}}" alt="printing" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-1">
                <img src="{{asset('assets/images/printing/Printing-image-4.png')}}" alt="printing" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-1">
                <img src="{{asset('assets/images/printing/Printing-image-5.png')}}" alt="printing" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sd-box">
            <div class="row">
              <div class="col-md-3 col-6 img-box-2">
                <img src="{{asset('assets/images/printing/Printing-image-6.png')}}" alt="printing" class="img-fluid">
              </div>
              <div class="col-md-3 col-6 img-box-2">
                <img src="{{asset('assets/images/printing/Printing-image-7.png')}}" alt="printing" class="img-fluid">
              </div>
              <div class="col-md-3 col-6 img-box-2">
                <img src="{{asset('assets/images/printing/Printing-image-8.png')}}" alt="printing" class="img-fluid">
              </div>
              <div class="col-md-3 col-6 img-box-2">
                <img src="{{asset('assets/images/printing/Printing-image-9.png')}}" alt="printing" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- /.Printing section -->

<!-- Video Documentries & 3D section  -->
<section class="video-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2 img-main-box">
        <img src="{{asset('assets/images/video/VIdeo-main-image.png')}}" alt="video image" class="img-fluid">
      </div>
      <div class="col-md-4">
        <h1 class="main-heading">
          <img src="{{asset('assets/images/video/video-icon.png')}}" alt="video icon" class="img-fluid">
          Video Documentries & 3D
        </h1>
        <p class="txt-center-mb">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          It is a long established fact that a reader will be distracted use Lorem Ipsum as their default model text, and a search sometimes by accident, sometimes on purpose (injected d  </p>   
        <p class="tags txt-center-mb">
          Documentries|DVCs | Telops | Animation| Vlogs | 3D Rendering | Product Blas Animation
        </p>
        </div>
      <div class="col-md-6 img-grid">
        <div class="row">
          <div class="col-md-9 gif-box">
            <img src="{{asset('assets/images/video/video.gif')}}" alt="video" class="img-fluid">
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="col-md-12 col-6 img-box-3">
                <img src="{{asset('assets/images/video/video-Image-2.png')}}" alt="video" class="img-fluid">
              </div>
              <div class="col-md-12 col-6 img-box-3">
                <img src="{{asset('assets/images/video/video-Image-3.png')}}" alt="video" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6 col-12 img-box-4">
                <img src="{{asset('assets/images/video/video-Image-4.gif')}}" alt="video" class="img-fluid">
              </div>
              <div class="col-md-3 col-6 img-box-3">
                <img src="{{asset('assets/images/video/video-Image-5.png')}}" alt="video" class="img-fluid">
              </div>
              <div class="col-md-3 col-6 img-box-3">
                <img src="{{asset('assets/images/video/video-image-6.gif')}}" alt="video" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- /.Video Documentries & 3D -->

<!-- WEB & DIGITAL  -->
<section class="web-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2 img-main-box">
        <img src="{{asset('assets/images/web/Web-main-image.gif')}}" alt="web image" class="img-fluid">
      </div>
      <div class="col-md-4">
        <h1 class="main-heading">
          <img src="{{asset('assets/images/web/Icon-web.png')}}" alt="web icon" class="img-fluid">
          WEB & DIGITAL
        </h1>
        <p class="txt-center-mb">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          It is a long established fact that a reader will be distracted use Lorem Ipsum as their default model text, and a search sometimes by accident, sometimes on purpose (injected d  </p>   
        <p class="tags txt-center-mb">
          Websites |E-commerce | Shopify |UI UIX| Mobile Apps | Social Media | Campaigns |Reviews | Likes |Digital Marketing
        </p>
        </div>
      <div class="col-md-6 img-grid">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12 img-box-5">
                <img src="{{asset('assets/images/web/Web-image-1.gif')}}" alt="web" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-5">
                <img src="{{asset('assets/images/web/web-image-3.gif')}}" alt="web" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-5">
                <img src="{{asset('assets/images/web/web-image-4.png')}}" alt="web" class="img-fluid">
              </div>
            </div>
            
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12 img-box-6">
                <img src="{{asset('assets/images/web/web-image-2-new.gif')}}" alt="web" class="img-fluid">
              </div>
              <div class="col-md-12 img-box-6">
                <img src="{{asset('assets/images/web/image-5.gif')}}" alt="web" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- /.WEB & DIGITAL -->

<!-- PACKAGING  -->
<section class="packging-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2 img-main-box">
        <img src="{{asset('assets/images/packging/Packaging.gif')}}" alt="Packging" class="img-fluid">
      </div>
      <div class="col-md-4">
        <h1 class="main-heading">
          <img src="{{asset('assets/images/packging/packge-icon.png')}}" alt="Packging" class="img-fluid">
          PACKAGING
        </h1>
        <p class="txt-center-mb">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          It is a long established fact that a reader will be distracted use Lorem Ipsum as their default model text, and a search sometimes by accident, sometimes on purpose (injected d  </p>   
        <p class="tags txt-center-mb">
          Websites |E-commerce | Shopify |UI UIX| Mobile Apps | Social Media | Campaigns |Reviews | Likes |Digital Marketing
        </p>
        </div>
      <div class="col-md-6 img-grid">
        <div class="row">
          <div class="col-md-6 img-box-7">
            <img src="{{asset('assets/images/packging/packge-Image-1.gif')}}" alt="Packging" class="img-fluid">
          </div>
          <div class="col-md-6 img-box-7">
            <img src="{{asset('assets/images/packging/packge-Image-2.gif')}}" alt="Packging" class="img-fluid">
          </div>
          <div class="col-md-6 img-box-7">
            <img src="{{asset('assets/images/packging/packge-image-3.png')}}" alt="Packging" class="img-fluid">
          </div>
          <div class="col-md-3 col-6 img-box-7">
            <img src="{{asset('assets/images/packging/packge-image-4.png')}}" alt="Packging" class="img-fluid">
          </div>
          <div class="col-md-3 col-6 img-box-7">
            <img src="{{asset('assets/images/packging/packge-image-5.gif')}}" alt="Packging" class="img-fluid">
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- /.PACKAGING -->

<!-- Photography  -->
<section class="Photography-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2 img-main-box">
        <img src="{{asset('assets/images/photography/Photography-main-image.png')}}" alt="Photography" class="img-fluid">
      </div>
      <div class="col-md-4">
        <h1 class="main-heading">
          <img src="{{asset('assets/images/photography/photography-icon.png')}}" alt="Photography" class="img-fluid">
          Photography
        </h1>
        <p class="txt-center-mb">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
          It is a long established fact that a reader will be distracted use Lorem Ipsum as their default model text, and a search sometimes by accident, sometimes on purpose (injected d  </p>   
        <p class="tags txt-center-mb">
          Product Photography |Field Photography| Fashion Shoot | Photo manipulations | Post Editing| Ready for Print and Digital 
        </p>
        </div>
      <div class="col-md-6 img-grid">
        <div class="row">
          <div class="col-md-6 img-box-8">
            <img src="{{asset('assets/images/photography/Photography-image-1.png')}}" alt="Photography" class="img-fluid">
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6 col-6 img-box-8">
                <img src="{{asset('')}}/assets/images/photography/Photography-image-2.png" alt="Photography" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-8">
                <img src="{{asset('assets/images/photography/Photography-image-3.png')}}" alt="Photography" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-8">
                <img src="{{asset('assets/images/photography/Photography-image-4.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-6 img-box-8">
                <img src="{{asset('assets/images/photography/Photography-image-5.png')}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-12 col-12 img-box-8">
                <img src="{{asset('assets/images/photography/Photography-image-6.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- /.Photography -->


<!-- Clients -->
<section class="clients-section">
  <div class="container text-center">
    <h1>PEOPLE WHO TRUST US</h1>
    <div class="row">
      @foreach($clients as $client)
      <div class="col-md-2 col-3 mb-3">
        <img src="{{ asset('images/clients/' . $client->image)}}" onmouseover="hover(this,'{{$client->back_image}}');" onmouseout="unhover(this,'{{$client->image}}');"  class="img-fluid">
      </div>
      @endforeach
 
    </div>
  </div>
</section>

<!-- /.Clients -->


@endsection

@section('SpecificScripts')
<script type="text/javascript">
 
function hover(element , src) {
  element.style.cursor = 'pointer';
  element.setAttribute('src', 'images/clients/'+src);
}

function unhover(element ,src) {
  element.setAttribute('src', 'images/clients/'+src);
}




</script>

<script>
    $( document ).ready(function() {

$(window).on("scroll", function() {
    if($(window).scrollTop() > 600) {
        $(".navbar").addClass("active-navbar");
        $(".logo").css("height", "36px");
    } else {
       $(".navbar").removeClass("active-navbar");
       $(".logo").css("height", "auto");
    }
}); 
});
</script>
@stop