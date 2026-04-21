@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('eventss') }}">Events</a></li>
        <li class="active"><a href="{{ route('new_events') }}">Add New </a></li>
    </ol>
    <form action="events/store" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required="" placeholder="Enter Event title">
        </div>

        <div class="form-group">
            <label for="discription">Description</label>
            <textarea type="text" class="form-control" id="description" required="" name="description"
                placeholder="Enter Product Discription">
        </textarea>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" required="" name="location" placeholder="Enter Location">
        </div>

        <div class="form-group">
            <label for="datetime">Date Time</label>
            <input type="date" class="form-control" id="datetime" required="" name="datetime" placeholder="Enter datetime">
        </div>
        <div class="form-group">
            <label for="qty">Image</label>
            <input type="file" class="form-control" required="" id="image" name="image">
        </div>
		<div class="form-group images_wrapper">
            <label for="size">Slider Images <a href="javascript:void(0);" class="add_image" title="Add field"><i
                        class="fa fa-plus-square"></i></a></label>
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
