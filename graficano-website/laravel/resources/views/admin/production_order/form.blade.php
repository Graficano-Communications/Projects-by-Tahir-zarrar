<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Order Name </label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($banners)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter order here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Company Name </label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($banners)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter company name here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Email </label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($banners)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter email here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Phone </label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" 
        value="{{ old('title', optional($banners)->title) }}" minlength="1"
         maxlength="191" required="true" placeholder="Enter phone number here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Url</label>
    <div class="col-md-10">
        <input class="form-control" name="url" type="text" id="title" value="{{ old('url', optional($banners)->url) }}" minlength="1" maxlength="191"  placeholder="Enter url here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
 
<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">banner Image</label>
    @if(!empty($banners))
    <br>
    <img src="{{ asset('images/banners/' . $banners->image)}}"  class="img-resposive" height="250px" style="padding:20px">
    <input type="text" hidden="" name="old_image" value="{{$banners->thumbnail_image}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', optional($banners)->thumbnail_image) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>












