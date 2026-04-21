@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
<style>
   .yellow_color {
    color: #A8CF45 !important;
}
</style>
   <div class="container-fluid">
      <div class="row column_title">
         <div class="col-md-12">
            <div class="page_title">
               <h2>Dashboard</h2>
            </div>
         </div>
      </div>
      <div class="row column1">
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
               <div class="couter_icon">
                  <div> 
                     <i class="fa fa-user yellow_color"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">Emerald Inst</p>
                     <p class="head_couter">Welcome</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
               <div class="couter_icon">
                  <div> 
                     <i class="fa fa-clock-o blue1_color"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no" id="liveClock"></p>
                     <p class="head_couter"> Time</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
               <div class="couter_icon">
                  <div> 
                     <i class="fa fa-cloud-download blue1_color"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{ $totalBanners }}</p>
                     <p class="head_couter">Total Banners</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full counter_section margin_bottom_30">
               <div class="couter_icon">
                  <div> 
                     <i class="fa fa-comments-o blue1_color"></i>
                  </div>
               </div>
               <div class="counter_no">
                  <div>
                     <p class="total_no">{{ $totalBlogs }}</p>
                     <p class="head_couter">Blogs</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- <div class="row column1 social_media_section">
         <div class="col-md-6 col-lg-3">
            <div class="full socile_icons fb margin_bottom_30">
               <div class="social_icon">
                  <i class="fa fa-facebook"></i>
               </div>
               <div class="social_cont">
                  <ul>
                     <li>
                        <span><strong>35k</strong></span>
                        <span>Friends</span>
                     </li>
                     <li>
                        <span><strong>128</strong></span>
                        <span>Feeds</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full socile_icons tw margin_bottom_30">
               <div class="social_icon">
                  <i class="fa fa-twitter"></i>
               </div>
               <div class="social_cont">
                  <ul>
                     <li>
                        <span><strong>584k</strong></span>
                        <span>Followers</span>
                     </li>
                     <li>
                        <span><strong>978</strong></span>
                        <span>Tweets</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full socile_icons linked margin_bottom_30">
               <div class="social_icon">
                  <i class="fa fa-linkedin"></i>
               </div>
               <div class="social_cont">
                  <ul>
                     <li>
                        <span><strong>758+</strong></span>
                        <span>Contacts</span>
                     </li>
                     <li>
                        <span><strong>365</strong></span>
                        <span>Feeds</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3">
            <div class="full socile_icons google_p margin_bottom_30">
               <div class="social_icon">
                  <i class="fa fa-google-plus"></i>
               </div>
               <div class="social_cont">
                  <ul>
                     <li>
                        <span><strong>450</strong></span>
                        <span>Followers</span>
                     </li>
                     <li>
                        <span><strong>57</strong></span>
                        <span>Circles</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div> --}}
      <div class="row column3">
         <!-- testimonial -->
         <div class="col-md-6">
            <div class="dark_bg full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Blogs</h2>
                  </div>
               </div>
               <div class="full graph_revenue">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="content testimonial">
                           <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                               <!-- Wrapper for carousel items -->
                               <div class="carousel-inner">
                                   @foreach ($blogs as $key => $blog)
                                   <div class="item carousel-item {{ $key === 0 ? 'active' : '' }}"> <!-- Add 'active' class to the first item -->
                                       <div >
                                           <img width="200px" src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="">
                                       </div>
                                       <p class="testimonial">{{ $blog->name }}</p>
                                       <p class="overview">
                                           <b>{{ \Illuminate\Support\Str::words($blog->quote, 5) }}</b> 
                                           {{ $blog->created_at->format('d F Y') }}
                                       </p>
                                   </div>
                                   @endforeach
                               </div>
                               <!-- Carousel controls -->
                               <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                   <i class="fa fa-angle-left"></i>
                               </a>
                               <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                   <i class="fa fa-angle-right"></i>
                               </a>
                           </div>
                       </div>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end testimonial -->
         <!-- progress bar -->
         {{-- <div class="col-md-6">
            <div class="white_shd full margin_bottom_30">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Progress Bar</h2>
                  </div>
               </div>
               <div class="full progress_bar_inner">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="progress_bar">
                           <!-- Skill Bars -->
                           <span class="skill" style="width:73%;">Facebook <span class="info_valume">73%</span></span>                  
                           <div class="progress skill-bar ">
                              <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                              </div>
                           </div>
                           <span class="skill" style="width:62%;">Twitter <span class="info_valume">62%</span></span>   
                           <div class="progress skill-bar">
                              <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                              </div>
                           </div>
                           <span class="skill" style="width:54%;">Instagram <span class="info_valume">54%</span></span>
                           <div class="progress skill-bar">
                              <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                              </div>
                           </div>
                           <span class="skill" style="width:82%;">Google plus <span class="info_valume">82%</span></span>
                           <div class="progress skill-bar">
                              <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                              </div>
                           </div>
                           <span class="skill" style="width:48%;">Other <span class="info_valume">48%</span></span>
                           <div class="progress skill-bar">
                              <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <!-- end progress bar -->
      </div>
      <!-- graph -->
      {{-- <div class="row column2 graph margin_bottom_30">
         <div class="col-md-l2 col-lg-12">
            <div class="white_shd full">
               <div class="full graph_head">
                  <div class="heading1 margin_0">
                     <h2>Extra Area Chart</h2>
                  </div>
               </div>
               <div class="full graph_revenue">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="content">
                           <div class="area_chart">
                              <canvas height="120" id="canvas"></canvas>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- end graph -->
      
   </div>
   <script>
      function updateClock() {
          var now = new Date();
          var hours = now.getHours();
          var minutes = now.getMinutes();
          var seconds = now.getSeconds();
  
          hours = hours < 10 ? '0' + hours : hours;
          minutes = minutes < 10 ? '0' + minutes : minutes;
          seconds = seconds < 10 ? '0' + seconds : seconds;
  
          var timeString = hours + ':' + minutes + ':' + seconds;
          document.getElementById('liveClock').textContent = timeString;
      }
  
      setInterval(updateClock, 1000);
      updateClock();
  </script>
@endsection