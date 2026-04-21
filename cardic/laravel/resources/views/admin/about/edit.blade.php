@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('aboutus') }}">About Us</a></li>
        <li class="active">Edit </li>
    </ol>
    <form enctype="multipart/form-data" action="{{ route('about_update', $about->id) }}" method="post">
        @method('PUT')
        <div class="form-group">
            <label for="name">Page Name</label>
            <input type="text" class="form-control" required="" id="name" name="name" value="{{ $about->page_name }}"
                placeholder="Enter Page Name">
        </div>

        <div class="form-group">
            <label for="discription">Description</label>
			<textarea  class="tinymce"  id="texteditor" name="description"
					placeholder="Description">{{  $about->description  }}
			</textarea>
        </div>
        <div class="form-group">
            <label for="discription">Points</label>
			<textarea  class="tinymce"  id="texteditor" name="points"
					placeholder="Description">{{  $about->points  }}
			</textarea>
        </div>
        <div class="form-group">

            <label for="image">Select to change Image (1000 into 800)</label><br>
            <img src="{{ asset('images/about/' . $about->image) }}" class="img-resposive" height="200px"><br>
            <input type="hidden" name="old_img" value="{{ $about->image }}">
            <input type="file" class="form-control" id="image" name="image">
        </div>
		<div class="form-group">

            <label for="banner">Select to change Banner (1920 into 350)</label><br>
            <img src="{{ asset('images/about/' . $about->banner) }}" class="img-resposive" height="200px"><br>
            <input type="hidden" name="old_banner" value="{{ $about->banner }}">
            <input type="file" class="form-control" id="banner" name="banner">
        </div>
        <div class="form-group images_wrapper">
            <label for="size">Slider Images <a href="javascript:void(0);" class="add_image" title="Add field"><i
                        class="fa fa-plus-square"></i></a></label>
                        @php $imags = json_decode( $about->slider); @endphp
                        @if($imags)
          <div class="row"> 
            @foreach($imags as $imag) 
              <div class="col-md-2">
               <a href="{{route('deleteaboutimg', [$imag, $about->id])}}" >Delete</a>
                <img src="{{ asset('images/about/slider/' . $imag)}}"  class="img-responsive">
              </div>
            @endforeach
         </div>
         @endif
         <hr>

            <div> <input type="file" class="form-control" id="other_images" name="other_images[]">
            </div>
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var maxField = 50; //Input fields increment limitation
            var addButton2 = $('.add_image'); //Add button selector
            var wrapper2 = $('.images_wrapper'); //Input field wrapper
            var fieldHTML2 =
                '<div> <input type="file" class="form-control" id="other_images"  required="" name="other_images[]"><a href="javascript:void(0);" class="remove_image"><i class="fa fa-minus-square"></i></a></div>';
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
