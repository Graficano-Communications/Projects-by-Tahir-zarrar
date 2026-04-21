@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
       <ol class="breadcrumb">
          <li><a href="{{ route('productss') }}">Products</a></li>
          <li class="active"><a href="{{ route('new_products') }}"> Edit</a></li>
        </ol>
        @if(isset($product))
 <form  action="{{ route('product_update' ,$product->id) }}" enctype="multipart/form-data" method="post" id="Form1">
    @method('PUT')
  <div class="form-group"> 
    <label for="name">Name</label>

    <input  type="text" class="form-control" value="{{$product->name}}" required="" id="name" name="name" form="Form1" placeholder="Enter Product Name"> 
    <div class="checkbox">
    <label><input type="checkbox" name="feature"  value="feature" @if($product->feature == 1) checked @endif>Feature Product</label>
    </div> 
    <div class="checkbox">
    <label><input type="checkbox" name="new_product"  value="new_product" @if($product->new_product == 1) checked @endif>New Product</label>
    </div> 
  </div>

  <div class="form-group">
    <label for="discription">Description</label>
    <textarea type="text" class="form-control" required="" id="discription" name="discription" form="Form1" placeholder="Enter Product Discription">{{$product->description}}
    </textarea>  
  </div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" required="" name="category">
      <option selected="" value="{{$product->category}}" >{{\App\Category::findOrFail($product->category)->name}}</option>
      <option  disabled="">Select</option>
      @foreach($category as $cat)
      <option form="Form1" value="{{$cat->id}}">{{$cat->name}}</option>
      @endforeach
    </select>
  </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
    <label for="sub_category">Sub Category</label>
    <select class="form-control"form="Form1" id="sub_category" required="" name="sub_category">
      <option selected="" value="{{$product->sub_category}}" >{{\App\subcategory::findOrFail($product->sub_category )->name }}</option>
    </select>
     </div>
    </div>
</div>
 

    
  <div class="form-group">
     <img src="{{ asset('images/products/thumbnails/' . $product->image) }}" class="img-resposive"  width="100px" height="100px" />
     <br>
    <label for="qty">Choose new Feature Image</label>
    <input type="hidden" name="old_img" value="{{$product->image}}">
    <input type="file" class="form-control" id="image" value="{{ asset('products/' . $product->image) }}"  name="image">  
  </div>
   <div class="form-group images_wrapper">
    <input type="hidden" name="old_imgs" value="{{$images}}}" >
     @foreach($images as $img)
     <div id="{{$img->id}}"> 
     <img src="{{ asset('images/products/thumbnails/'. $img->name) }}"  class="img-resposive"  width="100px" height="100px" />
     <button type="button" onclick="delete_img({{$img->id}});"><i class="fa fa-trash-o"></i></button>
    </div>
     @endforeach
     <br>
    <label for="size">Add more Images <a href="javascript:void(0);" class="add_image" title="Add field"><i class="fa fa-plus-square"></i></a></label>
   <div> <input type="file" class="form-control" id="other_images"   name="other_images[]">  
       </div>
  </div>
  <div class="form-group field_wrapper">

    <label for="size">Add new Product Code & Size <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-square"></i></a></label>
    <div> 
      <div class="row">
        @foreach($prod_sizes as $sizs)
        <div class="col-md-6"> 
          <input form="Form1" type="text" class="form-control " value="{{$sizs->code}}" id="code" name="code[]" required="" placeholder="p01 etc ..">
        </div>
        <div class="col-md-6"> 
          <input type="text" form="Form1" class="form-control " value="{{$sizs->size_value}}" id="size" name="size[]" required="" placeholder="0.1 ..">  
        </div>
        @endforeach 
       </div>
       </div>
  
  </div>
  {{ csrf_field() }}
  <button type="submit" class="btn btn-primary" form="Form1">Submit</button>
</form>
  
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {

    $("#category").change(function () {
        var id = $(this).val();
        var ajaxurl = '{{route('sub_category', ':id')}}';
        $('#sub_category').empty(); 
        ajaxurl = ajaxurl.replace(':id', id);
        
        $.ajax({
        url: ajaxurl,
        type: "GET",
        success: function(data){
            $data = $(data); 
            console.log($data);
            for(var i=0 ; i< data.length ; i++) {
              $('<option value="'+data[i]['id'] +'">'+ data[i]['name'] +'</option>').appendTo('#sub_category');
            }
            
        }   
    });
 });


   $("#del_img").click(function () {
    console.log("clicked");
        var id = $(this).val();
        // var ajaxurl = '{{route('del_img', ':id')}}';
       
        ajaxurl = ajaxurl.replace(':id', id);
        
        $.ajax({
        url: ajaxurl,
        type: "GET",
        success: function(data){
            $('#sub_category').empty(); 
        }   
    });
 });

});
</script>
<script type="text/javascript">
  function delete_img(id){
    if (confirm('Are you sure you want to delete?')) {
    var imgid = '#'+id;

    var ajaxurl = "/del_img/"+id;
     $.ajax({
        url: ajaxurl,
        type: "GET",
        success: function(data){
            console.log("success");
            $(imgid).remove(); 
        }   
    });
     
     }
   } 
</script>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    // var fieldHTML = '<div><input type="text" class="form-control" name="size[]" /><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a></div>'; //New input field html 
       var fieldHTML = ' <div> <div class="row"><div class="col-md-6"> <input form="Form1" type="text" class="form-control " id="code" name="code[]" required="" placeholder="p01 etc ..">  </div><div class="col-md-6"> <input type="text" form="Form1" class="form-control " id="size" name="size[]" required="" placeholder="0.1 ..">  </div> <a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a></div></div>';

    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
//=======================================================================
      var addButton2 = $('.add_image'); //Add button selector
    var wrapper2 = $('.images_wrapper'); //Input field wrapper
    var fieldHTML2 = '<div> <input type="file" class="form-control" id="other_images"  required="" name="other_images[]"><a href="javascript:void(0);" class="remove_image"><i class="fa fa-minus-square"></i></a></div>'; 
    //New input field html 
    var y = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton2).click(function(){
      console.log("clicked");
        //Check maximum number of input fields
        if(y < maxField){ 
            y++; //Increment field counter
            $(wrapper2).append(fieldHTML2); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper2).on('click', '.remove_image', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        y--; //Decrement field counter
    });
});
</script>
  
  
@endsection