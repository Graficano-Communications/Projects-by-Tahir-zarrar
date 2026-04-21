@extends('admin.layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
    	 
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb"> 
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Products </a></li>
    <li class="breadcrumb-item active" aria-current="page"> {{ $name->name }} <small style="color: #eb252a;">count( {{$products->count()}} )</small></li>
  </ol>
</nav>

 <div class="container">
  <div class="row ">
    @foreach ($categories as $cat)
        <div class="col-md-3" style="padding: 1%">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    {{ $cat->name }}
                </a>
                @php $subcategory = \App\subcategory::with('subsubcategory')->where('category_id',$cat->id)->get()->sortBy('sequence') @endphp 
               
                @php $subsubcategory = \App\sub_subcategory::where('category_id',$cat->id)->get() @endphp
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @if (count($subsubcategory)) 
                  
                  @foreach ($subsubcategory as $subsubcat)
                      <a class="dropdown-item"
                          href="{{ route('product_by_sub_subcategory', $subsubcat->id) }}">{{ $subsubcat->name  }}</a>
                  @endforeach

                  @else  
                  @foreach ($subcategory as $subcat)
                    <a class="dropdown-item"
                        href="{{ route('product_by_subcategory', $subcat->id) }}">{{ $subcat->name }}</a>
                  @endforeach
                  @endif
               </div>
            
             
            </div>
        </div>
    @endforeach
</div>



  @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
  <table class="table table-striped bg-white">
  <thead>
    <tr>
      <th scope="col">Sort</th>
      <th scope="col">#</th>
      <th>Id</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th>URL</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="ProductSortable">
    @foreach($products as $key => $product)
    @php $var =\App\product_variation::where('product_id',$product->id)->first();
        $imgs =\App\image::where('product_id',$product->id)->first(); 
    @endphp
    
    @if(empty($imgs))
    <div class="alert alert-danger">
      <strong>ERROR!</strong> Please upload Images in product. {{ $product->name }}
    </div>
    @endif
    @if(empty($var))
    <div class="alert alert-danger">
      <strong>ERROR!</strong> Please create variations for product. {{ $product->name }}
    </div>
    @endif
      <tr  id="{{$product->id}}" @if(empty($imgs) || empty($var)) style="background-color: #ff5c5c" @endif>
      <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
      <td>{{$product->sequence}}</td>
      <td>{{$product->id}}</td>
      <td>{{$product->code}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->slug}}</td>
       <td style="display: flex;">
        <a href="{{route('generate_variation',$product->id)}}" ><button title="Generate Variations" class="btn btn-info" type="button" style="color: white"><i class="fa fa-plus"></i></button></a>
       <a href="{{route('products_options',$product->id)}}" ><button class="btn btn-info" type="button" style="color: white"><i class="fa fa-list"></i></button></a>
         <a href="{{route('products_images',$product->id)}}" ><button class="btn btn-info" type="button" style="color: white"><i class="fa fa-image"></i></button></a>
        <a href="{{route('products.edit',$product->id)}}"><button class="btn btn-success" type="button"><i class="fa fa-pencil" ></i></button></a>
                <form action="{{route('products.destroy',$product->id)}}" method="post">
                     {{ method_field('delete') }}
                     @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" ></i></button>
                </form>
            </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

       </div>
    </div>
</div>
@endsection
@section('specificscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  // Return a helper with preserved width of cells
var fixHelper = function(e, ui) {
  ui.children().each(function() {
    $(this).width($(this).width());
  });
  return ui;
};

  $( "#ProductSortable" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#ProductSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_products')}}';
      var data = {'data' : data , '_token' : token};
      // console.log(data);
        $.ajax({
            url:ajaxurl,
            type:'post',
            data:data,
            success:function(data){
               // console.log(data);
                // alert('your change successfully saved');
            }
        })
    }
</script>
@stop