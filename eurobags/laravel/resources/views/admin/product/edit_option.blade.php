@extends('admin.layouts.app')

@section('content')
<div class="container">
 
  <div class="col-md-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Product</a></li>
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
        <form action="{{route('updateopt',$option->id)}}" method="post"  enctype="multipart/form-data">
         @method('PUT')
         <div class="form-group">
             <input type="text" class="form-control" name="optionnames" placeholder="Option Name" value="{{$option->name}}">
         </div>
         <div class="row">
          <div class="col-md-6"><label>Name</label></div>
         </div> 
         <div class="row">
          <div class="col-md-6">
          
            <div class="form-group">
            <input type="text" class="form-control"  name="options" id="options" value="{{$values}}" placeholder="comma seprated options such as Large , Med .. etc">
           </div>
          </div> 

         </div>
        
        
        </div>
       @csrf
       <button type="submit" class="btn btn-primary">Submit</button>
     </form>
    </div>
    </div>

</div>
</div>
</div>

@endsection