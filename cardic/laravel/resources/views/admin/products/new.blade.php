@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
       <ol class="breadcrumb">
					<li><a href="{{ route('productss') }}">Products</a></li>
					<li class="active"><a href="{{ route('new_products') }}" >Add New</a> </li>
				</ol>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
 <form  action="products/store" enctype="multipart/form-data" method="post">

  <div class="form-group">
    <label for="name">Name</label>
    <input  type="text" class="form-control" required="" id="name" name="name" placeholder="Enter Product Name">  
  <div class="checkbox">
  <label><input type="checkbox" name="feature" value="feature">Feature Product</label>
 </div> 
 <div class="checkbox ">
  <label><input type="checkbox" name="new_product" value="new_product">New Product</label>
 </div>
  </div>

  <div class="form-group">
    <label for="discription">Description</label>
    <textarea type="text" class="form-control" required="" id="discription" name="discription" placeholder="Enter Product Discription">
    </textarea>  
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" required="" name="category">
      <option>Select</option>
      @foreach($category as $cat)
      <option value="{{$cat->id}}">{{$cat->name}}</option>
      @endforeach
    </select>
  </div> 

    <div class="form-group">
    <label for="sub_category">Sub Category</label>
    <select class="form-control" id="sub_category" required="" name="sub_category">
      
    </select>
     </div>
  <div class="form-group field_wrapper">
      <div>
     <div class="row">
         <div class="col-md-6">
         <label for="size">Product Code <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-square"></i></a></label>
           <input type="text" class="form-control " id="code" name="code[]" required="" placeholder="p01 etc .."> 
         </div>
          <div class="col-md-6">
             <label for="size">Size</label>
           <input type="text" class="form-control " id="size" name="size[]" required="" placeholder="0.1 .."> 
         </div>
     </div> 
     </div>
    
  </div>
  <div class="form-group">
    <label for="qty">Product Image</label>
    <input type="file" class="form-control" id="image"  required="" name="image">  
  </div>
   <div class="form-group images_wrapper">

    <label for="size">Other Images <a href="javascript:void(0);" class="add_image" title="Add field"><i class="fa fa-plus-square"></i></a></label>
   <div> <input type="file" class="form-control" id="other_images"  name="other_images[]">  
       </div>
  </div>
  {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
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

});
</script>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    // var fieldHTML = '<div><input type="text" class="form-control" name="size[]" /><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a></div>'; //New input field html
    var fieldHTML = ' <div> <div class="row"><div class="col-md-6"><label for="size">Product Code</label> <input type="text" class="form-control " id="code" name="code[]" required="" placeholder="p01 etc ..">  </div><div class="col-md-6"> <label for="size">Size</label><input type="text" class="form-control " id="size" name="size[]" required="" placeholder="0.1 ..">  </div> <a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a></div></div>';

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