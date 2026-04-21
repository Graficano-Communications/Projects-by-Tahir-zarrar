@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
    
    @if (isset($product))
        <form action="{{ route('new_arrival.product_update', $product->id) }}" enctype="multipart/form-data" method="post"
            id="Form1">
            @method('PUT')
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" value="{{ $product->name }}" required="" id="name" name="name" placeholder="Enter Product Name">
          </div>
  
          
  
          <div class="form-group">
            <img  src="{{ asset('images/products/new_arrivals/'.$product->image) }}"  class="img-fluid">
            <br>
              <label for="qty">Select to Change Product Image</label>
              <input type="hidden" name="old_img" value="{{ $product->image }}">
              <input type="file" class="form-control" id="image"  name="image">
          </div>
  
          <div class="form-group">
    <label for="pdf">Current PDF</label>
    <p>{{ $product->pdf }}</p> <!-- Display the current PDF filename -->
    <label for="pdf">Upload New PDF</label>
    <input type="file" class="form-control" id="pdf" name="pdf" accept="application/pdf">
</div>

<div class="form-group">
    <label for="pdf_password">Update Password for PDF</label>
    <input type="password" class="form-control" id="pdf_password" name="pdf_password" placeholder="Enter new password for the PDF (leave empty if no change)">
</div>
  
          
          
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary" form="Form1">Submit</button>
        </form>

    @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    

    <script type="text/javascript">
           $(document).ready(function() {
            var maxField = 50; //Input fields increment limitation
            var addButton2 = $('.add_image'); //Add button selector
            var wrapper2 = $('.images_wrapper'); //Input field wrapper
            var fieldHTML2 =
                '<div> <input type="text" class="form-control" name="titles[]"> <input type="file" class="form-control" id="other_images"  required="" name="other_images[]"><a href="javascript:void(0);" class="remove_image"><i class="fa fa-minus-square"></i></a></div>';
            //New input field html 
            var y = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton2).click(function() {
                console.log("clicked");
                //Check maximum number of input fields
                if (y < maxField) {
                    y++; //Increment field counter
                    $(wrapper2).append(fieldHTML2); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper2).on('click', '.remove_image', function(e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                y--; //Decrement field counter
            });
        });
    </script>


@endsection
