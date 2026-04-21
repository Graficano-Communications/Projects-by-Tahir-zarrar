@extends('admin.adminmaster')

@section('title', 'Edit Event')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('eventss') }}">Events</a></li>
        <li class="active"><a href="{{ route('new_events') }}">Add New</a> </li>
    </ol>
    <form action="{{ route('update_event', $event->id) }}" enctype="multipart/form-data" method="post">
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required="" value="{{ $event->title }}"
                placeholder="Enter Event title">
        </div>

        <div class="form-group">
            <label for="discription">Description</label>
            <textarea type="text" class="form-control" id="description" required="" name="description"
                placeholder="Enter Product Discription">{{ $event->description }}
            </textarea>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" required="" value="{{ $event->location }}"
                name="location" placeholder="Enter Location">
        </div>

        <div class="form-group">
            <label for="datetime">Date Time</label>
            <input type="date" class="form-control" id="datetime" required="" value="{{ $event->date_time }}"
                name="datetime" placeholder="Enter datetime">
        </div>
        <div class="form-group">
            <label for="qty">Image</label>
            <input type="hidden" name="old_img" value="{{ $event->image }}">
            <img src="{{ asset('images/' . $event->image) }}" class="img-resposive" width="100px" height="100px">
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group images_wrapper">
            <label for="size">Slider Images <a href="javascript:void(0);" class="add_image" title="Add field"><i
                        class="fa fa-plus-square"></i></a></label>
                        @php $imags = json_decode( $event->slider); @endphp
                        @if($imags)
          <div class="row"> 
            @foreach($imags as $imag)
              <div class="col-md-2">
               <a href="{{route('deleteimg', [$imag, $event->id])}}" >Delete</a>
                <img src="{{ asset('images/events/slider/' . $imag)}}"  class="img-responsive">
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
