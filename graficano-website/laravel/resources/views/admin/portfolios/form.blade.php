
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($portfolio)->title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title_desc') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title-Description</label>
    <div class="col-md-10">
        <input class="form-control" name="title_desc" type="text" id="title_desc" value="{{ old('title_desc', optional($portfolio)->title_desc) }}" minlength="1" maxlength="191" required="true" placeholder="Enter title description...">
        {!! $errors->first('title_desc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group col-10">
    <label for="hover_icon" class="col-md-2 control-label">Hover Icon</label>
    <input type="file" class="form-control" name="hover_icon" id="hover_icon">
    @if(isset($portfolio->hover_icon))
    <label for="hover_icon" class="col-md-2 control-label">Previous Icon</label>
    <div class="text-center" style="background-color: white; height:60px; width: 100px; justify-content:center; border: 1px solid black;">
    <img class="pt-1" src="{{ asset('images/portfolio/' . $portfolio->hover_icon) }}" alt="Current Icon" width="50">
    </div>
        
    @endif
</div>

@if(!empty($portfolio))
<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    <label for="url" class="col-md-2 control-label">URL</label>
    <div class="col-md-10">
        <input class="form-control" name="url" type="text" id="url" value="{{ $portfolio->url }}" minlength="1" maxlength="191" required="true" placeholder="Enter URl here...">
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@endif

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" type="text" id="description" rows="4" minlength="1" maxlength="2147483647" required="true">{{ old('description', optional($portfolio)->description) }}</textarea>
        
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('featured') ? 'has-error' : '' }}">
    <label for="featured" class="col-md-2 control-label">Featured</label>
    <div class="col-md-10">
        <select class="form-control" name="featured" id="featured" required="true">
            <option value="1" {{ old('featured', optional($portfolio)->featured) == '1' ? 'selected' : '' }}>Featured</option>
            <option value="0" {{ old('featured', optional($portfolio)->featured) == '0' ? 'selected' : '' }}>Not Featured</option>
        </select>
        {!! $errors->first('featured', '<p class="help-block">:message</p>') !!}
    </div>
</div>



<div class="form-group {{ $errors->has('client') ? 'has-error' : '' }}">
    <label for="client" class="col-md-2 control-label">Client</label>
    <div class="col-md-10">
        <input class="form-control" name="client" type="text" id="client" value="{{ old('client', optional($portfolio)->client) }}" minlength="1" maxlength="191" required="true" placeholder="Enter client here...">
        {!! $errors->first('client', '<p class="help-block">:message</p>') !!}
    </div>
</div>
 
<div class="form-group {{ $errors->has('service') ? 'has-error' : '' }}">
    <label for="service" class="col-md-2 control-label">Service</label>
    <div class="col-md-10">
    <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" class="form-check-input" value="branding" @if(!empty($portfolio))@if(preg_match('/branding/', $portfolio->service)) checked="1" @endif @endif >
      <label class="form-check-label" for="customCheck1">Branding</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" class="form-check-input" value="printing" id="customCheck2" @if(!empty($portfolio))@if(preg_match('/printing/', $portfolio->service) ) checked="1" @endif @endif>
      <label class="form-check-label" for="customCheck2">Design & Print</label>
      </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" class="form-check-input" value="video_3d" id="customCheck3" @if(!empty($portfolio))@if(preg_match('/video_3d/', $portfolio->service) ) checked="1" @endif @endif >
      <label class="form-check-label" for="customCheck3">   Video & 3D</label>
      </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" value="web_and_digital" class="form-check-input" id="customCheck4" @if(!empty($portfolio))@if(preg_match('/web_and_digital/', $portfolio->service) ) checked="1" @endif @endif>
      <label class="form-check-label" for="customCheck14">Web & UI/UX</label>
    </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" class="form-check-input" value="packaging" id="customCheck5" @if(!empty($portfolio))@if(preg_match('/packaging/', $portfolio->service)) checked="1" @endif @endif>
      <label class="form-check-label" for="customCheck5">Product design & packaging</label>
      </div>
    <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" class="form-check-input" value="photography" id="customCheck6" @if(!empty($portfolio))@if(preg_match('/photography/', $portfolio->service) ) checked="1" @endif @endif>
      <label class="form-check-label" for="customCheck6">Photography</label>
    </div>
     <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" class="form-check-input" value="media" id="customCheck7" @if(!empty($portfolio))@if(preg_match('/media/', $portfolio->service) ) checked="1" @endif @endif>
      <label class="form-check-label" for="customCheck6">Social Media Marketing</label>
    </div>
     <div class="form-check form-check-inline">
      <input type="checkbox" name="service[]" class="form-check-input" value="Expos" id="customCheck7" @if(!empty($portfolio))@if(preg_match('/Expos/', $portfolio->service) ) checked="1" @endif @endif>
      <label class="form-check-label" for="customCheck6">PR events & Expos</label>
    </div>
    
        
        {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>




<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
    <label for="location" class="col-md-2 control-label">Location</label>
    <div class="col-md-10">
        <input class="form-control" name="location" type="text" id="location" value="{{ old('location', optional($portfolio)->location) }}" minlength="1" maxlength="191" required="true" placeholder="Enter location here...">
        {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">Date</label>
    <div class="col-md-10">
        <input class="form-control" name="date" type="date" id="date" value="{{ old('date', optional($portfolio)->date) }}" required="true" placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
    <label for="website" class="col-md-2 control-label">Website</label>
    <div class="col-md-10">
        <input class="form-control" name="website" type="text" id="website" value="{{ old('website', optional($portfolio)->website) }}" minlength="1" maxlength="191" required="true" placeholder="Enter website link here...">
        {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<hr>
<h3>SEO Meta Tags & description</h3>
<div class="form-group {{ $errors->has('meta_title') ? 'has-error' : '' }}">
    <label for="client" class="col-md-2 control-label">Meta Title</label>
    <div class="col-md-10">
        <input class="form-control" name="meta_title" type="text" id="meta_title" value="{{ old('meta_title', optional($portfolio)->meta_title) }}" minlength="1" maxlength="191" required="true" placeholder="Enter client here...">
        {!! $errors->first('meta_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_tags') ? 'has-error' : '' }}">
    <label for="meta_tags" class="col-md-2 control-label">Meta Tags (comma seprated)</label>
    <div class="col-md-10">
        <input class="form-control" name="meta_tags" type="text" id="meta_tags" value="{{ old('meta_tags', optional($portfolio)->meta_tags) }}" minlength="1" maxlength="191" required="true" placeholder="graphic designing , logo designing etc">
        {!! $errors->first('meta_tags', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Meta Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="meta_description" type="text" id="meta_description" rows="4" minlength="1" maxlength="2147483647" required="true">{{ old('meta_description', optional($portfolio)->meta_description) }}</textarea>
        
        {!! $errors->first('meta_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>








