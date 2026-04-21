@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
                <ol class="breadcrumb">
					<li><a href="{{route('pdfs')}}">Catelogs</a></li>
					<li class="active"><a href="{{route('new_pdf')}}">Add New</a> </li>
				</ol>
 <form enctype="multipart/form-data" action="pdf/store"  method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" required="" id="name" name="name" placeholder="Enter Product Name">  
  </div>
  
  <div class="form-group">
    <label for="type">Type</label>
    <select class="form-control" id="type" name="type" required="">
        <option value="catalog">Catalog</option>
        <option value="brochure">Brochure</option>
    </select>
</div>

  
    <div class="form-group">
    <label for="pdf">Pdf</label>
    {{-- <input type="file" class="form-control" required="" id="pdf" name="pdf" accept="application/pdf"> --}}
    <input type="text" class="form-control" required="" id="pdf" name="pdf" placeholder="Enter pdf Name">  

  </div>
   <div class="form-group">
          <label for="size">Image</label>
          <div> <input class="form-control" type="file" name="image"> 
       </div>
      </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" required="" id="password" name="password" placeholder="Enter Product Name">  
  </div>
  {{-- <div class="form-group">
    <label for="password">Confirm Password</label>
    <input type="password" class="form-control" required="" id="confirm_password" name="confirm_password" placeholder="Enter Password Again">  
  </div> --}}
    {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    // var password = document.getElementById("password");
    // var confirmpassowrd = document.getElementById("confirm_password");
    // function validatePassword(){
    //     if(password.value != confirmpassowrd.value) {
    //         confirm_password.setCustomValidity("Passwords Don't Match");
    //     } else {
    //         confirm_password.setCustomValidity('');
    //     }
    // }

    // password.onchange = validatePassword;
    // confirm_password.onkeyup = validatePassword;



</script>

	
@endsection