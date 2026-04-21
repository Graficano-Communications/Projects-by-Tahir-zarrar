
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($client)->name) }}" minlength="1" maxlength="191" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('testimonial_image') ? 'has-error' : '' }}">
            <label for="testimonial_image" class="col-md-2 control-label">Testimonial Image</label>
            @if(!empty($client) && $client->testimonial_image)
            <br>
            <img src="{{ asset('images/clients/' . $client->testimonial_image)}}" class="img-responsive" height="50px">
            <input type="text" hidden name="old_testimonial_image" value="{{$client->testimonial_image}}">
            @endif
            <div class="col-md-10">
                <input class="form-control" name="testimonial_image" type="file" id="testimonial_image" value="{{ old('testimonial_image', optional($client)->testimonial_image) }}">
                {!! $errors->first('testimonial_image', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        
        <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">URL</label>
    <div class="col-md-10">
        <input class="form-control" name="url" type="text" id="url" value="{{ old('url', optional($client)->url) }}" minlength="1" maxlength="191" required="true" placeholder="Enter url of portfolio here...">
        {!! $errors->first('Url', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="card container col-10 m-0 p-0">
<div class="card-body">
    <h3 class="text-center">(Only icons images)</h3>
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    @if(!empty($client))
    <br>
    <img src="{{ asset('images/clients/' . $client->image)}}"  class="img-resposive" height="50px" >
    <input type="text" hidden="" name="old_image" value="{{$client->image}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', optional($client)->image) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('back_image') ? 'has-error' : '' }}">
    <label for="back_image" class="col-md-2 control-label">Color Image</label>
    @if(!empty($client))
    <br>
    <img src="{{ asset('images/clients/' . $client->back_image)}}"  class="img-resposive" height="50px" >
    <input type="text" hidden="" name="old_back_image" value="{{$client->back_image}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="back_image" type="file" id="back_image" value="{{ old('back_image', optional($client)->back_image) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
</div>
</div>
<!-- Star Rating System -->
<div class="form-group {{ $errors->has('rating') ? 'has-error' : '' }}">
    <label for="rating" class="col-md-2 control-label">Star Rating</label>
    <div class="col-md-10">
        <select class="form-control" name="rating" id="rating" required="true">
            <option value="1" {{ old('rating', optional($client)->rating) == 1 ? 'selected' : '' }}>1 Star</option>
            <option value="2" {{ old('rating', optional($client)->rating) == 2 ? 'selected' : '' }}>2 Stars</option>
            <option value="3" {{ old('rating', optional($client)->rating) == 3 ? 'selected' : '' }}>3 Stars</option>
            <option value="4" {{ old('rating', optional($client)->rating) == 4 ? 'selected' : '' }}>4 Stars</option>
            <option value="5" {{ old('rating', optional($client)->rating) == 5 ? 'selected' : '' }}>5 Stars</option>
        </select>
        {!! $errors->first('rating', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Review Input -->
<div class="form-group {{ $errors->has('review') ? 'has-error' : '' }}">
    <label for="review" class="col-md-2 control-label">Review</label>
    <div class="col-md-10">
        <textarea class="form-control" name="review" id="review" rows="5" placeholder="Enter client review here...">{{ old('review', optional($client)->review) }}</textarea>
        {!! $errors->first('review', '<p class="help-block">:message</p>') !!}
    </div>
</div>

