<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($Careers)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter job title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('post_date') ? 'has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">Job post Date</label>
    <div class="col-md-10">
        <input class="form-control" name="post_date" type="date" id="post_date" value="{{ old('post_date', optional($Careers)->post_date) }}" required="true" placeholder="Select a post date...">
        {!! $errors->first('post_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Url of job form</label>
    <div class="col-md-10">
        <input class="form-control" name="url" type="text" id="title" value="{{ old('url', optional($Careers)->url) }}" minlength="1" maxlength="191" required="true"  placeholder="Enter-url-here">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Content</label>
    <div class="col-md-10">
        <textarea id="editor1" name="description" cols="10" rows="4">{{ old('description', optional($Careers)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : '' }}">
    <label class="col-md-2 control-label">Gender</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="gender[]" value="Male" 
                {{ is_array(old('gender', json_decode(optional($Careers)->gender, true))) && in_array('Male', old('gender', json_decode(optional($Careers)->gender, true))) ? 'checked' : '' }}>
                Male
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="gender[]" value="Female" 
                {{ is_array(old('gender', json_decode(optional($Careers)->gender, true))) && in_array('Female', old('gender', json_decode(optional($Careers)->gender, true))) ? 'checked' : '' }}>
                Female
            </label>
        </div>
        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div>

 













