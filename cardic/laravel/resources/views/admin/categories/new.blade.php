@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
                <ol class="breadcrumb">
					<li><a href="{{ route('categories') }}">Categories</a></li>
					<li class="active"><a href="{{ route('new_categories') }}">Add New </a></li>
				</ol>
 <form enctype="multipart/form-data" action="category/store"  method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" required="" id="name" name="name" placeholder="Enter Product Name">  
  </div>

  <div class="form-group">
    <label for="discription">Description</label>
    <textarea type="text" class="form-control" required="" id="description" name="description" placeholder="Enter Product Discription">
    </textarea>  
  </div> 

 <div class="form-group">
    <label for="image">Back Image</label>
    <input type="file" class="form-control" required="" id="image" name="image">  
  </div>
  
  <div class="form-group">
    <label for="image">Instrument Image</label>
    <input type="file" class="form-control" required="" id="inst_img" name="inst_img">  
  </div>

  <div class="form-group field_wrapper">
    <div class="row">
       <div class="col-md-6">
          <label for="size">Sub Categories <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-square"></i></a></label>
          <div> <input type="text" class="form-control" required="" id="subcat" name="names[]" placeholder="Sub Category"> 
       </div>
      </div>

      <div class="col-md-6">
          <label for="size">Image</label>
          <div> <input class="form-control" type="file" name="images[]"> 
       </div>
      </div>
    </div>
  </div>
   
    {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; 
    var addButton = $('.add_button'); 
    var wrapper = $('.field_wrapper');
    var fieldHTML = '<div class="row"><div class="col-md-6"><label for="size">Sub Categories</label> <div> <input type="text" class="form-control" required="" id="subcat" name="names[]" placeholder="Sub Category"> </div></div><div class="col-md-6"><label for="size">Image</label><div> <input class="form-control" type="file" name="images[]"> </div> </div><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a></div>'; //New input field html 
    var x = 1; 
    
    
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
});
    </script>
	
@endsection