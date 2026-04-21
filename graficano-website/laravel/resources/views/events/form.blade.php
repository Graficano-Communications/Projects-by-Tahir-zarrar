<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($event)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
 
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Thumbnail Image</label>
    @if(!empty($event))
    <br>
    <img src="{{ asset('images/events/' . $event->thumbnail_image)}}"  class="img-resposive" height="250px" style="padding:20px">
    <input type="text" hidden="" name="old_image" value="{{$event->thumbnail_image}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', optional($event)->thumbnail_image) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        {{-- <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($event)->description) }}" minlength="1" maxlength="4294967295" required="true"> --}}
        <textarea id="editor1" name="description" cols="10" rows="4">{{ old('description', optional($event)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('images') ? 'has-error' : '' }}">
    <label for="images" class="col-md-2 control-label">Images <a href="javascript:void(0);" class="add_button"
        style="background-color: black;color:white;padding:4px;" title="Add field">+</a></label>
    <div class="col-md-10">
        <div class="field_wrapper">
            <div>
                <input type="file" class="form-control" name="images[]" 
                @if(empty($event)) required="" @endif id="images">
            </div>
        </div>
        {!! $errors->first('images', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
    <label for="location" class="col-md-2 control-label">Location</label>
    <div class="col-md-10">
        <input class="form-control" name="location" type="text" id="location" value="{{ old('location', optional($event)->location) }}" minlength="1" maxlength="191" required="true" placeholder="Enter location here...">
        {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    <label for="type" class="col-md-2 control-label">Type</label>
    <div class="col-md-10">
        <select class="form-control" name="type" class="custom-select" required="true">
            <option selected value="current">Current</option>
            <option value="previous">Previous</option>
          </select>  
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
    <label for="start_date" class="col-md-2 control-label">Start Date</label>
    <div class="col-md-10">
        <input class="form-control" name="start_date" type="date" id="start_date" value="{{ old('start_date', optional($event)->start_date) }}" required="true" placeholder="Enter start date here...">
        {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
    <label for="end_date" class="col-md-2 control-label">End Date</label>
    <div class="col-md-10">
        <input class="form-control" name="end_date" type="date" id="end_date" value="{{ old('end_date', optional($event)->end_date) }}" required="true" placeholder="Enter end date here...">
        {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        console.log('clicked');
        var maxField = 20; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML =
            '<div><input type="file" class="form-control"  required="" name="images[]" id="images"><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a> </div>'; //New input field html 
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e) {
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
</script>


