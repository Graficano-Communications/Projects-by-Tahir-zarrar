<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($instagram)->name) }}" minlength="1" maxlength="191" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('instagram_url') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Post Url</label>
    <div class="col-md-10">
        <input class="form-control" name="instagram_url" type="text" id="name" value="{{ old('instagram_url', optional($instagram)->instagram_url) }}" minlength="1"  required="true" placeholder="Enter Url here...">
        {!! $errors->first('instagram_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image</label>
    @if(!empty($instagram))
    <br>
    <img src="{{ asset('images/instagrams/' . $instagram->image)}}"  class="img-resposive" height="50px" >
    <input type="text" hidden="" name="old_image" value="{{$instagram->image}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', optional($instagram)->image) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
