@extends('admin.layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
               <li class="breadcrumb-item"><a href="{{route('products.index')}}">Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
         </nav>
         <div class="panel panel-default">
            <div class="panel-body">
               @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               <form action="{{route('products.store')}}" method="post"  enctype="multipart/form-data">
                <div class="row bg-info">
                  <div class="col-4">
                  <div class="form-group">
                     <label for="code">Product code</label>
                     <input type="text" class="form-control" id="code" name="code" required="" value="{{ old('code') }}" placeholder="PS01.. etc">
                  </div>
                  </div>
                  <div class="col-4">
                  <div class="form-group">
                     <label for="name">Name </label>
                     <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" required=""placeholder="Product Name.."> 
                  </div>
                  </div>
                  <div class="col-4">
                  <div class="form-group">
                     <label for="slug">URL</label>
                     <input type="text" class="form-control" value="{{ old('slug') }}" id="slug" name="slug" required="" placeholder="">
                     <small id="slug-help" class="form-text text-muted">It must be unique.</small>
                  </div>
                  </div>
                </div>
                <div class="row bg-info">
                  <div class="col-12">
                  <div class="form-group">
                     <label for="name">Video Link </label>
                     <input type="text" class="form-control" value="{{ old('video') }}" id="name" name="video" placeholder="Video link."> 
                  </div>
                  </div>
                </div>
               
                  @php  $category = \App\category::all() @endphp
                  <div class="row bg-info">
                     <div class="col-6">
                        <div class="form-group">
                           <label for="category">Category</label>
                           <select id="category" class="form-control"  required="" name="category_id">
                              <option >Select</option>
                              @foreach($category as $cat)
                              <option value="{{$cat->id}}">{{$cat->name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label for="sub_category">Sub Category</label>
                           <select class="form-control" id="sub_category" required="" name="sub_category_id">
                         
                           </select>
                        </div>
                     </div>
                 
                  </div>
                  <div class="form-group">
                     <label for="sizes">Size Chart</label>
                     <div><input type="file" class="form-control" name="size_chart" id="size_chart">
                     </div>
                  </div>
                  <hr>
                  <div class="row bg-info">
                     <div class="col-6">
                        <div class="form-group">
                           <label for="price">Price</label>
                           <input type="number" class="form-control" id="price" name="price"  value="{{ old('price') }}" placeholder="10.0.. etc">
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label for="sale_price">Sale price</label>
                           <input type="number" class="form-control" id="sale_price" name="sale_price"  value="{{ old('sale_price') }}" placeholder="9.0.. etc">
                        </div>
                     </div>
                     
                  </div>
                  <div class="row bg-info">
                     <div class="col-6">
                        <div class="form-group">
                           <label for="qty">Quantity</label>
                           <input type="number" class="form-control" id="qty" name="qty"  value="{{ old('qty') }}" placeholder="100.. etc">
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label for="mqo">MQO - Minimum Quantity Order</label>
                           <input type="number" class="form-control" id="mqo" name="mqo"  value="{{ old('mqo') }}" placeholder="10.. etc">
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="form-group">
                           <label for="shipping_charges">Shipping Charges</label>
                           <input type="number" class="form-control" id="shipping_charges" name="shipping_charges"  value="{{ old('shipping_charges') }}" placeholder="150">
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="row bg-success">
                     <div class="col-2">
                       <div class="checkbox"><label><input type="checkbox" name="feature">Best Seller</label> </div>
                    </div>
                     <div class="col-2">
                        <div class="checkbox"> <label><input type="checkbox" name="track_stock">  Track Stock</label>   </div>
                     </div>
                     <div class="col-2">
                        <div class="checkbox"> <label><input type="checkbox" name="taxable">  Taxable</label>   </div>
                     </div>
                     <div class="col-2">
                        <div class="checkbox"> <label><input type="checkbox" name="favourite">  Favourite</label>   </div>
                     </div>
                     <div class="col-2">
                        <div class="checkbox"> <label><input type="checkbox" name="new_arrival"> New Arrival</label>   </div>
                     </div>
                     <div class="col-2">
                        <div class="checkbox"> <label><input type="checkbox" name="status"> Enable</label>   </div>
                     </div>
                    
                  </div>
                  <hr>
                  <div class="form-group">
                     <label for="description">Description</label>
                     <textarea type="text"  class="editor1"  id="editor1"  name="description"  rows="5"  placeholder="">{{ old('description') }}</textarea>
                  </div>
                  <div class="form-group">
                     <label for="details">Details</label>
                     <textarea type="text" class="editor2"  id="editor2"  name="features" rows="8"  placeholder="">{{ old('details') }}</textarea>
                  </div>
                  <div class="form-group">
                     <label for="terms_conditions">Terms & Condition</label>
                     <textarea type="text" class="editor3"  id="editor3"  name="terms_conditions" rows="8"  placeholder="">{{ old('details') }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="image" style="color: black">Option</label>
                       <input type="text" class="form-control" name="optionname" placeholder="Option Name">
                       <input type="text" class="form-control"  name="options" id="options" placeholder="comma seprated options such as Large , Med .. etc">
                  </div>
                  <hr>
             <h3 class="bg-dark">SEO Title and Description </h3>
             <hr>
             <div class="bg-info">
             <div class="form-group ">
              <label for="title">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" name="meta_title" required=""placeholder="Enter Meta Title">
             </div>
             <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <textarea type="text" class="form-control" id="meta_description" name="meta_description" required="" placeholder="Meta Description.."></textarea>
             </div>
             </div>
                  @csrf
                  <button type="submit" class="btn btn-success btn-block">Save</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
   
     $("#slug").focusout(function(){
        console.log('focusout');
        var slug = $(this).val();
        var ajaxurl1 = '{{route('check_product_url', ':slug')}}';
        ajaxurl1 = ajaxurl1.replace(':slug', slug);
           $.ajax({
           url: ajaxurl1,
           type: "GET",
           success: function(data){
               $data = $(data);
               console.log(data); 
               if (data == "true" ) {
                 console.log('Condition true');
                 document.getElementById("slug").style.borderColor = "red";
                 document.getElementById("slug").setCustomValidity('URL must be unique.. try another..');
                 alert("URL must be unique.. try another..");
               }else{
                 console.log('Condition false');
                 document.getElementById("slug").style.borderColor = "grey";
                 document.getElementById("slug").setCustomValidity('');
               }
               
           }   
       });
      });
    
     
      $("#code").focusout(function(){
        console.log('focusout');
        var code = $(this).val();
        var ajaxurl1 = '{{route('check_product_code', ':code')}}';
        ajaxurl1 = ajaxurl1.replace(':code', code);
           $.ajax({
           url: ajaxurl1,
           type: "GET",
           success: function(data){
               $data = $(data);
               console.log(data); 
               if (data == "true" ) {
                 console.log('Condition true');
                 document.getElementById("code").style.borderColor = "red";
                 document.getElementById("code").setCustomValidity('Product code must be unique.. try another..');
                 alert("Product code must be unique.. try another..");
               }else{
                 console.log('Condition false');
                 document.getElementById("code").style.borderColor = "grey";
                 document.getElementById("code").setCustomValidity('');
               }
               
           }   
       });
      });

         
       $("#category").change(function () {
           var id = $(this).val();
           var ajaxurl = '{{route('sub_category', ':id')}}';
           $('#sub_category').empty(); 
           ajaxurl = ajaxurl.replace(':id', id);
           
           $.ajax({
           url: ajaxurl,
           type: "GET",
           success: function(data){
               $data = $(data); 
               $('<option >Select</option>').appendTo('#sub_category');
               for(var i=0 ; i< data.length ; i++) {
                 $('<option value="'+data[i]['id'] +'">'+ data[i]['name'] +'</option>').appendTo('#sub_category');
               }
               
           }   
       });
    });
 
   
   });
</script>
@endsection
@section('specificscripts')
<script>
   CKEDITOR.replace( 'editor1', {
     on: {
         contentDom: function( evt ) {
             // Allow custom context menu only with table elemnts.
             evt.editor.editable().on( 'contextmenu', function( contextEvent ) {
                 var path = evt.editor.elementPath();
   
                 if ( !path.contains( 'table' ) ) {
                     contextEvent.cancel();
                 }
             }, null, null, 5 );
         }
     },
     filebrowserUploadUrl: "{{route('pages.upload', ['_token' => csrf_token() ])}}",
   
     filebrowserUploadMethod: 'form',
   } );
   CKEDITOR.replace( 'editor2', {
     on: {
         contentDom: function( evt ) {
             // Allow custom context menu only with table elemnts.
             evt.editor.editable().on( 'contextmenu', function( contextEvent ) {
                 var path = evt.editor.elementPath();
   
                 if ( !path.contains( 'table' ) ) {
                     contextEvent.cancel();
                 }
             }, null, null, 5 );
         }
     },
     filebrowserUploadUrl: "{{route('pages.upload', ['_token' => csrf_token() ])}}",
   
     filebrowserUploadMethod: 'form',
   } );
   CKEDITOR.replace( 'editor3', {
     on: {
         contentDom: function( evt ) {
             // Allow custom context menu only with table elemnts.
             evt.editor.editable().on( 'contextmenu', function( contextEvent ) {
                 var path = evt.editor.elementPath();
   
                 if ( !path.contains( 'table' ) ) {
                     contextEvent.cancel();
                 }
             }, null, null, 5 );
         }
     },
     filebrowserUploadUrl: "{{route('pages.upload', ['_token' => csrf_token() ])}}",
   
     filebrowserUploadMethod: 'form',
   } );
   
</script>

@stop


