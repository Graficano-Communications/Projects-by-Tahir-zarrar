@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
                <ol class="breadcrumb">
					<li><a href="{{route('pdfs')}}">Catlogs</a></li>
					<li class="active"><a href="{{route('new_pdf')}}">Add New </a></li>
				</ol>
 <form enctype="multipart/form-data" action="{{ route('pdf_update' ,$catlog->id) }}"  method="post">
   @method('PUT')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" required="" id="name" value="{{$catlog->name}}" name="name" placeholder="Enter Product Name">  
  </div>
  
  
    <div class="form-group">
    <label for="pdf">Pdf {{$catlog->file}}</label>
    <input type="hidden" name="old_pdf"  value="{{$catlog->file}}">
    <input type="file" class="form-control"  id="pdf" value="{{$catlog->file}}" name="pdf" accept="application/pdf">  
  </div>

    <div class="form-group">

    <label for="image">Image</label>
    <img src="{{ asset('images/pdf/' . $catlog->image)}}"  class="img-resposive"  width="50px" height="80px" >
    <input type="hidden" name="old_img" value="{{$catlog->image}}">
    <input type="file" class="form-control"  id="image" name="image">  
  </div>

  
    {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    var password = document.getElementById("password");
    var confirmpassowrd = document.getElementById("confirm_password");
    function validatePassword(){
        if(password.value != confirmpassowrd.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;



</script>

	
@endsection