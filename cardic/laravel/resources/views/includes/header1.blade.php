    <!-- header starts -->
	<header>
		<div class="container-fluid">
			<div class="header-top row" >
			<!--<div class="col-sm-6 col-md-7 offset-md-2 form-box">
        <form class="form-inline" action="{{route('search')}}" method="post">
          {{ csrf_field() }}
          <input style="border-radius: 0" type="text" class="form-control mb-2 mr-sm-2" id="search" name="search" placeholder="Product name..">
          <button style="border-radius: 0;padding: 5px;margin-left: -8px" type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
        </form>
      </div>-->
      <div class="col-sm-6 col-md-7 offset-md-2 form-box">

      </div>
			<div class="col-sm-6 col-md-2 ">
      <div class="top-social-icon">
			<a  href="https://www.facebook.com/pg/Cardic-Instruments-2048579925441999/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook-f fa-social fb"></i></a>
			<a  href="https://www.instagram.com/cardicinstruments/" target="_blank"><i class="fa fa-instagram fa-social insta"></i></a>
			<a  href="https://www.linkedin.com/company/cardic-instruments/about/" target="_blank"><i class="fa fa-linkedin fa-social linkedin"></i> </a>
      
        <a class="float-right" style="text-decoration: none;" href="{{route('cart')}}"><p><i class="fa fa-shopping-cart"></i> </p></a>
      
			</div>
      
    </div>
      </div>
       
			<div class="row">
				<div class="col-md-12 text-center" style="padding-top:20px; padding-bottom: 20px;">
					<a href="/"><img src="{{ asset('assets/images/logo.png')}}" class="img-fluid" width="180" height="100"></a>
				</div> 
			</div>
			  
		</div>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

             <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto" style="margin-left: 90px;">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>

  

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('contact') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        
       <div class="dropdown-menu dropdown-multicol4" aria-labelledby="dropdownMenuButton">
      <div class="wrap width">
        <ul>
          @php
       $about = \App\About::all()
       @endphp 
       @foreach($about as $abt)
     <li><a  href="{{ route('pages' ,$abt->id) }}">{{$abt->page_name}}</a></li>
      @endforeach
      </ul>
      </div>
      </div>
      </li> 
      
      <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ route('aboutusall') }}" id="navbarDropdown">
                                About Us
                            </a>

                            <div class="dropdown-menu dropdown-multicol4" aria-labelledby="dropdownMenuButton">
                                <div class="wrap width">
                                    <ul>
                                        @php
                                            $about = \App\About::all();
                                        @endphp
                                        @foreach ($about as $abt)
                                            <li><a href="{{ route('pages', $abt->id) }}">{{ $abt->page_name }}</a>
                                            </li>
                                        @endforeach
                                        <li><a href="{{ route('history') }}">Company History</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
      <div class="dropdown-menu dropdown-multicol2" aria-labelledby="dropdownMenuButton">
      <div class="wrap">
        <ul class="wrap-nav">
       @php
       $category = \App\Category::all()
       @endphp 
       @foreach($category as $cat)
      <li><a href="{{ route('category' ,$cat->id) }}" class="bold">{{$cat->name}}</a>
      <ul>
        @php
         $subcategory = \App\subcategory::where('category_id',$cat->id)->get()
                   @endphp
                   @foreach($subcategory as $subcat)
        <li><a href="{{ route('productsbycat' ,$subcat->id) }}"></i> {{$subcat->name}}</a></li>
         @endforeach
      </ul>
      </li>
        @endforeach
      </ul>
      </div>
      </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('catlogue') }}">Resources</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="{{ route('CardicMedia') }}">Media</a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('newsevents')}}">News & Events</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('contact') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact Us
        </a>
        
       <div class="dropdown-menu dropdown-multicol3" aria-labelledby="dropdownMenuButton">
      <div class="wrap width">
        <ul>
      <li><a  href="{{ route('contact') }}">Contact</a></li>
      <li><a  href="{{ route('feedback') }}">FeedBack</a></li>
      
      </ul>
      </div>
      </div>
      </li> 
 
     

      <li class="nav-item">
        
      <i class="fa fa-search" style="color:gray; margin-top: 12px; cursor: pointer;"></i> 
 
        <div class="togglesearch">
        <form class="form-inline" action="{{route('search')}}" method="post">
          {{ csrf_field() }}
          <input  type="text" class="form-control mb-2 mr-sm-2" id="search" name="search" placeholder="Product name..">
          <button  type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
        </form>
        </div>
 
    </li>

  

     </ul>
 </div>
        </nav> 
        </div>
	</header>   
    <!-- header ends -->
  