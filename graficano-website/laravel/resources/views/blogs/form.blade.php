
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($blog)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('slug') ? 'has-error' : '' }}">
    <label for="slug" class="col-md-2 control-label">Slug</label>
    <div class="col-md-10">
        <input class="form-control" name="slug" type="text" id="slug" value="{{ old('slug', optional($blog)->slug) }}" minlength="1" maxlength="191" required="true" placeholder="Enter slug here...">
        {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Thumbnail Image</label>
    @if(!empty($blog))
    <br>
    <img src="{{ asset('images/blogs/' . $blog->image)}}"  class="img-resposive" height="250px" style="padding:20px">
    <input type="text" hidden="" name="old_image" value="{{$blog->image}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image" type="file" id="image" value="{{ old('image', optional($blog)->image) }} ">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Banner</label>
    @if(!empty($blog))
    <br>
    <img src="{{ asset('images/blogs/' . $blog->banner)}}"  class="img-resposive" height="250px" style="padding:20px" >
    <input type="text" hidden="" name="old_banner" value="{{$blog->banner}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="banner" type="file" id="banner" value="{{ old('banner', optional($blog)->banner) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('image1') ? 'has-error' : '' }}">
    <label for="image" class="col-md-2 control-label">Image # 01</label>
    @if(!empty($blog))
    <br>
    <img src="{{ asset('images/blogs/' . $blog->image1)}}"  class="img-resposive" height="250px" style="padding:20px" >
    <input type="text" hidden="" name="old_image1" value="{{$blog->image1}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image1" type="file" id="image1" value="{{ old('image1', optional($blog)->image1) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Content</label>
    <div class="col-md-10">
        <textarea id="editor1" name="description" cols="10" rows="4">{{ old('description', optional($blog)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('quot') ? 'has-error' : '' }}">
    <label for="quot" class="col-md-2 control-label">Quotation</label>
    <div class="col-md-10">
        <input class="form-control" name="quot" type="text" id="quot" value="{{ old('quot', optional($blog)->quot) }}"  placeholder="Enter Quotation here...">
        {!! $errors->first('quot', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('image2') ? 'has-error' : '' }}">
    <label for="image2" class="col-md-2 control-label">Image # 02</label>
    @if(!empty($blog))
    <br>
    <img src="{{ asset('images/blogs/' . $blog->image2)}}"  class="img-resposive" height="250px" style="padding:20px" >
    <input type="text" hidden="" name="old_image2" value="{{$blog->image2}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="image2" type="file" id="image2" value="{{ old('image2', optional($blog)->image2) }}">
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description1') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Content</label>
    <div class="col-md-10">
        <textarea class="form-control"  name="description1" cols="50" rows="10">{{ old('description1', optional($blog)->description1) }}</textarea>
        {!! $errors->first('description1', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('avatar_photo') ? 'has-error' : '' }}">
    <label for="avatar_photo" class="col-md-2 control-label">Avatar Photo</label>
    @if(!empty($blog) && $blog->avatar_photo)
    <br>
    <img src="{{ asset('images/blogs/' . $blog->avatar_photo)}}" class="img-responsive" height="200px" style="padding:20px">
    <input type="text" hidden="" name="old_avatar_photo" value="{{$blog->avatar_photo}}">
    @endif
    <div class="col-md-10">
        <input class="form-control" name="avatar_photo" type="file" id="avatar_photo" value="{{ old('avatar_photo', optional($blog)->avatar_photo) }}">
        {!! $errors->first('avatar_photo', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group {{ $errors->has('writer_name') ? 'has-error' : '' }}">
    <label for="writer_name" class="col-md-2 control-label">Writen by:</label>
    <div class="col-md-10">
        <input class="form-control" name="writer_name" type="text" id="writer_name" value="{{ old('writer_name', optional($blog)->writer_name) }}" minlength="1" maxlength="191" required="true" placeholder="Enter writer name here...">
        {!! $errors->first('writer_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
    <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
    <div class="col-md-10">
        <input class="form-control" name="meta_title" type="text" id="meta_title" value="{{ old('meta_title', optional($blog)->meta_title) }}" maxlength="191" placeholder="Enter meta title here...">
        {!! $errors->first('meta_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
    <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="meta_description" cols="50" rows="10" id="meta_description" placeholder="Enter meta description here...">{{ old('meta_description', optional($blog)->meta_description) }}</textarea>
        {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_tags') ? 'has-error' : '' }}">
    <label for="meta_tags" class="col-md-2 control-label">Meta Tags</label>
    <div class="col-md-10">
        <textarea class="form-control" name="meta_tags" cols="50" rows="10" id="meta_tags" placeholder="Enter meta tags here...">{{ old('meta_tags', optional($blog)->meta_tags) }}</textarea>
        {!! $errors->first('meta_tags', '<p class="help-block">:message</p>') !!}
    </div>
</div>


