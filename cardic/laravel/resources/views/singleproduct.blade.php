@extends('layouts.master')

@section('title', 'Home')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
 

<div class="container-fluid">
  <div class="row space-up space-bottom">
    <div class="col-md-12">
      <nav aria-label="breadcrumb"> 
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
           @php
           $category = \App\Category::where('id',$product->category)->first();
          $subcategory = \App\subcategory::where('id',$product->sub_category)->first();
         @endphp
         <li class="breadcrumb-item">
          <a href="{{ route('category' ,$product->category) }}">{{$category->name}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$subcategory->name}}</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="container-fluid">
<div class="row">
  <div class="col-md-4 offset-md-1">

    <!-- default start -->
    <section id="default" >
      
      <div class="large-5 column">
        <div class="xzoom-container space-up">
          
          <img  class="xzoom img-fluid" id="xzoom-default" src="{{asset('images/products/thumbnails/'.$product->image)}}" xoriginal="{{asset('images/products/'.$product->image)}}" >
          <div class="xzoom-thumbs space-up">
            <a href="{{asset('images/products/'.$product->image)}}"><img class="xzoom-gallery" width="80" src="{{asset('images/products/'.$product->image)}}"  xpreview="{{asset('images/products/thumbnails/'.$product->image)}}"></a>
            @foreach($images as $img)
            <a href="{{asset('images/products/'.$img->name)}}"><img class="xzoom-gallery" width="80" src="{{asset('images/products/'.$img->name)}}"  xpreview="{{asset('images/products/thumbnails/'.$img->name)}}"></a>
             @endforeach 
          </div>
        </div>        
      </div> 
      <div class="large-7 column"></div>
     
    </section>
    <!-- default end -->  
      
  </div>
<div class="col-md-6 info-pro">
  <h3>{{$product->name}} </h3>
  <h4>Products Other Size</h4>

<table class="table table-fixed">
  <thead>
    <tr>
      <th scope="col">Art#</th>
      <th scope="col">Product Description & Length</th>
      <th scope="col">Tip Size</th>
      <th scope="col">Quantity</th>
      <th>Inquiry</th>
    </tr>
  </thead>
  <tbody >
  
  	@foreach($sizes as $size)
	    <tr>
      <td>{{$size->code}}</td>
      <td>{{$product->name}}</td>
      <td>{{$size->size_value}}</td>
      <form class="cart{{$size->id}}"  action="#">
      <td style="width:100px">
      <input type="text" class="form-control" id="qty{{$size->id}}"  name="qty" placeholder="1"  ></td>
      <input type="text" hidden name="id" id="id{{$size->id}}" value="{{$product->id}}" >   
      <input type="text" hidden name="name" id="name{{$size->id}}"  value="{{$product->name}}">
      <input type="text" hidden name="size" id="size{{$size->id}}"  value="{{$size->size_value}}">
      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
      <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
      <td><a onclick="addFunction({{$size->id}});" class="btn btn-success" id="check{{$size->id}}"><i class="fa fa-check" aria-hidden="true"></i></a>
        <a onclick="delFunction({{$size->id}});"  style="visibility:hidden" class="btn btn-success" id="uncheck{{$size->id}}"><i class="fa fa-close"></i></a>
      </td>
      <td>
      <!-- <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" name="check[]" id="{{$size->id}}">
       <label class="custom-control-label" for="{{$size->id}}"></label>
     </div> -->
     
      </td>
      </form>
     
      
    </tr>
    @endforeach
    
  </tbody>

</table>
<div class="row">
  <div class="col-md-12">
 <button type="button" onclick="addToCart();"  class="btn btn-primary mb-2 float-right"><i class="fa fa-shopping-cart"></i> Add To Cart</button> 
  
  </div>
</div>


<div class="container bg-grey space-bottom features">
  <h4>Features Included</h4>
  <p>{{$product->description}}</p>
  
</div>

    </div>
    
  </div>
</div>
  <p id="demo"></p>
</div>
   
 

 @endsection

 @section('SpecificScripts')
   <!-- <script src='https://code.jquery.com/jquery-2.1.1.js'></script> -->
    <script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
    <script src='https://hammerjs.github.io/dist/hammer.min.js'></script> 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>
    
    <script type="text/javascript" src="{{asset('assets/js/zoomminify.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    

 <script type="text/javascript"> 
function addFunction(id) {
var pid = 'cart'+id; 

var name = document.getElementById('name'+id).value;
var size = document.getElementById('size'+id).value;
var qty = document.getElementById('qty'+id).value;
document.getElementById('qty'+id).disabled = true;
document.getElementById('check'+id).style.visibility = 'hidden';
document.getElementById('uncheck'+id).style.visibility = 'visible';


var demodata = document.getElementById("demo").value; 
var demodata_array = [];
var data = [id,name,size,qty];
demodata_array.push(data);

if (demodata){
      demodata.push(data);
      document.getElementById("demo").value = demodata;
}else{
      document.getElementById("demo").value = demodata_array; 
}
var demo_data = document.getElementById("demo").value; 
console.log(demo_data);

}
// ------------------------------------------------------
 function delFunction(id){
  console.log(id)
  document.getElementById('qty'+id).disabled = false;
   var demo_data = document.getElementById("demo").value;
   document.getElementById('check'+id).style.visibility = 'visible';
   document.getElementById('uncheck'+id).style.visibility = 'hidden'; 
   // demo_data.filter(function(v,i) {  
   //  if ( v[i] == id) {
   //    v.splice(i,1);
   // }
   //  }); 
   for (var i = 0; i < demo_data.length; i++) {
  if (demo_data[i][0] == id) {
    demo_data.splice(i, 1);
  }
}

   document.getElementById("demo").value = demo_data; 
   console.log(demo_data);

 }
 function addToCart(){
  var data = document.getElementById("demo").value;
  var token = document.getElementById('token').value;
  
  var token_array = {"_token" : token};
  // data.push(token_array);
  data = {'data' : data , '_token' : token};
  console.log(data);
   $.ajax({
           type:'POST',
           url:'/add_to_cart',
           data:data,
           success:function(data){
            $data = $(data); 
            console.log($data);
             if(data){
              $('#showcart').empty();
        
             for (var key in data) {
             if (data.hasOwnProperty(key)) {
              // console.log(data[key]['options']['size']);
              // $('<tr style="color:black"><td>'+data[key]["name"]+'</td>'+'<td>'+data[key]["qty"]+'</td></tr>').appendTo('#showcart');
              $('<tr style="color:black"><td>'+data[key]["name"]+'</td><td>'+data[key]['options']['size']+'</td><td>'+data[key]["qty"]+'</td></tr>').appendTo('#showcart');
            }
          }
        }
         else{
                $('<h3>Your Cart is empty</h3>').appendTo('#showcart');;
             }
          $("#cartdata").modal('show');
          }
          ,error:function(){ 
        console.log(data);
        }
        });
  
 }
</script>

 @stop