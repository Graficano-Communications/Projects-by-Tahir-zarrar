<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    <label for="portfolio_id" class="col-md-2 control-label">Type  & Image<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus"></i></a></label>
    
    <div class="field_wrapper">
    <div>
    <div class="row">
    <div class="col-md-5">
        <select class="form-control findtype" id="0" name="type[]" required="true" onchange="findfield(0)">
                <option value="" style="display: none;" {{ old('type', optional($media)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Select Type</option>
                <option {{ old('type', optional($media)->type) == 'landscape' ? 'selected' : '' }} value="landscape">landscape (1660px into 930px)</option>
                <option {{ old('type', optional($media)->type) == 'portrait' ? 'selected' : '' }} value="Portrait">portrait (830px into 1040px)</option>
                <option {{ old('type', optional($media)->type) == 'vimeo' ? 'selected' : '' }} value="vimeo">Vimeo Video</option>
            
        </select>
        
        {!! $errors->first('portfolio_id', '<p class="help-block">:message</p>') !!}
    </div>
    <div class="col-md-5">
        <input class="form-control" name="value[]" type="file" id="findvalue0" value="{{ old('value', optional($media)->value) }}" required="true" >
        {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
    </div>
    </div>
    </div>
    </div>
</div>  



    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 20; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    

    
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            var fieldHTML = '<div class="row"><div class="col-md-5"><select class="form-control findtype" onchange="findfield('+x+')"  id="'+x+'"name="type[]" required="true"><option value="" style="display: none;" {{ old('type', optional($media)->type ?: '') == '' ? 'selected' : '' }} disabled selected>Select Type</option><option {{ old('type', optional($media)->type) == 'landscape' ? 'selected' : '' }} value="landscape">landscape</option><option {{ old('type', optional($media)->type) == 'portrait' ? 'selected' : '' }} value="Portrait">portrait</option><option {{ old('type', optional($media)->type) == 'vimeo' ? 'selected' : '' }} value="vimeo">Vimeo Video</option></select></div><div class="col-md-5"><input class="form-control" name="value[]" type="file" id="findvalue'+x+'" value="{{ old('value', optional($media)->value) }}" required="true" ></div><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus"></i></a> </div>'; 
            x++; //Increment field counter

            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });

   
});

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
           $("#findvalue"+id).prop('name', 'links[]'); 
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





