@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('vimeos.index')}}">Reveiws
    -  <small style="color: #eb252a;">count( {{$reviews->count()}} )</small></a></li>
  </ol>
</nav>

 <div class="container">

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
  <table class="table table-striped bg-white">
  <thead>
    <tr> 
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th>Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="MediaSortable">
    @foreach($reviews as $key => $review)
    <tr >
      <td> {{ $review->name }}</td>
      <td>{{  $review->email  }}</td> 
      <td>{{  $review->title  }}</td> 
      <td>{{  $review->description  }}</td> 
      <td>@if($review->status == 0) Deactivate @else Active @endif <a href="{{ route('change_status',$review->id) }}">Change</a></td>

      <td style="display:flex">
                <form action="{{route('review.destroy',$review->id)}}" method="post">
                     {{ method_field('delete') }}
                     @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" ></i></button>
                </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
       </div>
    </div>
</div>

@endsection

