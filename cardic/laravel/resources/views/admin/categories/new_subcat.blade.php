@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('categories') }}">Categories</a></li>
    <li class="active"> New Sub Category</li>
</ol>
<form enctype="multipart/form-data" action="{{route('store_subcat')}}" method="post">
    <div class="form-group field_wrapper">
        <div class="row">
            <div class="col-md-6">
                <label for="size">Sub Categories <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-square"></i></a></label>
                <input type="text" class="form-control" required="" id="subcat" name="names[]" placeholder="Sub Category"> 
            </div>
            <div class="col-md-6">
                <label for="size">Image</label>
                <input class="form-control" type="file" name="images[]"> 
            </div>
            <div class="col-md-6">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" placeholder="Enter description..."></textarea>

            </div>
            <div class="col-md-6">
                <label for="icon">Icon Image</label>
                <input class="form-control" type="file" name="icons[]"> 
            </div>
        </div>
        <hr>
    </div>
    <input type="hidden" value="{{$id}}" name="catid">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; 
    var addButton = $('.add_button');
    var wrapper = $('.field_wrapper');
    var fieldHTML = '<div class="row"><div class="col-md-6"><label for="size">Sub Categories</label> <input type="text" class="form-control" required="" id="subcat" name="names[]" placeholder="Sub Category"> </div><div class="col-md-6"><label for="size">Image</label><input class="form-control" type="file" name="images[]"></div><div class="col-md-6"><label for="description">Description</label><textarea class="form-control" id="description" name="descriptions[]" placeholder="Description"></textarea></div><div class="col-md-6"><label for="icon">Icon Image</label><input class="form-control" type="file" name="icons[]"></div><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a></div><hr>'; //New input field html 
    var x = 1; 
    
    
    $(addButton).click(function(){
        
        if(x < maxField){ 
            x++; 
            $(wrapper).append(fieldHTML); 
        }
    });
    
    
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); 
        x--; 
    });
});
</script>

@endsection
