@extends('layouts.master')

@section('title', 'Home')

@section('content')


<div class="container-fluid">
    
    <div class="bg-grey text-center">
      <div class="container ">
        <div class="row ">
          <!-- <div class="col-md-4 space-up">
                  <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">{{$catname->name}}</li>
                   </ol>
                  </nav>
          </div> -->
          <div class="col-md-12 cat-info" style="padding-top: 1%">
            <h3 style="text-transform: uppercase;">{{$catname->name}} </h3>
      
      
    </div>
        </div>
      </div>
          
  </div>
  
 
<div class="container-fluid">
<div class="row">

  <div class="col-md-3 space-up">

    <!-- side menu -->
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
   @php
      $category = \App\Category::all()
       @endphp
       @foreach($category as $cat)
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
             <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$cat->id}}" aria-expanded="false" aria-controls="collapseTwo">
          {{$cat->name}}
        </a>
      </h4>

        </div>
        <div id="collapse{{$cat->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <ul>
                  @php
                   $subcategory = \App\subcategory::where('category_id',$cat->id)->get()
                   @endphp
                   @foreach($subcategory as $subcat)
                <li><a href="{{ route('productsbycat' ,$subcat->id) }}"><i class="fa fa-circle-o" aria-hidden="true"></i> {{$subcat->name}}</a></li>
                @endforeach
              </ul>
            </div>
        </div>
    </div>
      @endforeach
</div>

    <!-- side menu ends -->
  </div>
  <div class="col-md-9">
    <div class="row text-center space-up space-bottom">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="prod-container">
                <a href="{{route('productbyid',$product->id)}}">
                 <img src="{{ asset('images/products/' . $product->image) }}" class="img-fluid">
                <div class="middle">
                <div class="text"><img src="{{asset('assets/images/arrow-btn.png')}}" class="img-fluid"></div>
                </div>
                </a>
              </div>
                 <!-- <small>330-336</small> -->
                <p>{{$product->name}}</p>
            </div>
            @endforeach
             
         
  </div>
  <?php echo $products->render(); ?>
  </div>
  
</div> 
  
</div> 
    </div>   	
@endsection