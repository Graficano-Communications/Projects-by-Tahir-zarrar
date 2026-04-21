
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($services)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div> 

@if(!empty($services))
<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    <label for="slug" class="col-md-2 control-label">Slug</label>
    <div class="col-md-10">
        <input class="form-control" name="slug" type="text" id="slug" value="{{ old('slug', optional($services)->slug) }}" minlength="1" maxlength="191" required="true" placeholder="Enter slug here...">
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@endif

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Thumbnail Image</label>
    @if(!empty($services))
    <br>
    <img src="{{ asset('images/service/' . $services->image)}}"  class="img-resposive" height="250px" style="padding:20px">
    <input type="text" hidden="" name="old_image" value="{{$services->image}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', optional($services)->image) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Banner</label>
    @if(!empty($services))
    <br>
    <img src="{{ asset('images/service/' . $services->banner)}}"  class="img-resposive" height="250px" style="padding:20px" >
    <input type="text" hidden="" name="old_banner" value="{{$services->banner}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="banner" type="file" id="banner" value="{{ old('banner', optional($services)->banner) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea id="editor1" name="description" cols="10" rows="4">{{ old('description', optional($services)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
    <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
    <div class="col-md-10">
        <input class="form-control" name="meta_title" type="text" id="meta_title" value="{{ old('meta_title', optional($services)->meta_title) }}" maxlength="191" placeholder="Enter meta title here...">
        {!! $errors->first('meta_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
    <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="meta_description" cols="50" rows="10" id="meta_description" placeholder="Enter meta description here...">{{ old('meta_description', optional($services)->meta_description) }}</textarea>
        {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_tags') ? 'has-error' : '' }}">
    <label for="meta_tags" class="col-md-2 control-label">Meta Tags</label>
    <div class="col-md-10">
        <textarea class="form-control" name="meta_tags" cols="50" rows="10" id="meta_tags" placeholder="Enter meta tags here...">{{ old('meta_tags', optional($services)->meta_tags) }}</textarea>
        {!! $errors->first('meta_tags', '<p class="help-block">:message</p>') !!}
    </div>
</div>


