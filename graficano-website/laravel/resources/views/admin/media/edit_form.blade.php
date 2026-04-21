<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    <label for="portfolio_id" class="col-md-2 control-label">Type  & Image</label>
    
    <div class="field_wrapper">
    <div>
    <div class="row">
    <div class="col-md-5">
        <select class="form-control findtype" id="" name="type" required="true" onchange="findfield(0)">
                <option value="" style="display: none;" {{ old('type', optional($media)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Select Type</option>
                <option {{ old('type', optional($media)->type) == 'landscape' ? 'selected' : '' }} value="landscape">landscape</option>
                <option {{ old('type', optional($media)->type) == 'portrait' ? 'selected' : '' }} value="Portrait">portrait</option>
                <option {{ old('type', optional($media)->type) == 'vimeo' ? 'selected' : '' }} value="vimeo">Vimeo Video</option>
            
        </select>
        
        {!! $errors->first('portfolio_id', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="col-md-5">
    @if($media->type == "vimeo")
    <input class="form-control" name="link" type="text" id="findvalue0" value="{{ old('value', optional($media)->value) }}" required="true" >
    @else
       <input type="hidden" name="old_img"  value="{{$media->value}}">
       <img src="{{ asset('images/portfolio/' . $media->value)}}"  class="img-resposive" height="50px" >
        <input class="form-control" name="value" type="file" id="findvalue0" value="{{ old('value', optional($media)->value) }}" required="true" >
        {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
    @endif


    </div>



    </div>
    </div>
    </div>
</div>  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">


       function findfield(id){
        console.log(id);
        var field = document.getElementById(id);
        console.log(field);
        var value =$('option:selected', field) .val();
        
        var field = document.getElementById(id);
        if(value == "vimeo")
        {
           console.log("vimeo clicked");
           
           $("#findvalue"+id).prop('type', 'text'); 
           $("#findvalue"+id).prop('name', 'link'); 
        }
        else if( value == "Portrait")
        {
           $("#findvalue"+id).prop('type', 'file');

        }
        else if( value == "landscape")
        {
            $("#findvalue"+id).prop('type', 'file');
        }
        }

</script>

    






