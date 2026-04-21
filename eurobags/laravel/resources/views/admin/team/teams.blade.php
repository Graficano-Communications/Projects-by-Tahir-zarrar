@extends('admin.layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
    	
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">
                        <a href="{{ route('our-team.index') }}">Our Team 
                            - <small style="color: #eb252a;">count( {{ $teams->count() }} )</small>
                        </a>
                    </li>
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
                            <th scope="col">Sort</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead> 
                    <tbody id="TeamSortable">
                        @foreach($teams as $key => $team)
                        <tr id="{{ $team->id }}">
                            <td class="handle">
                                <a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                            </td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->designation }}</td>
                            <td>
                                <img src="{{ asset('images/' . $team->image) }}" class="img-resposive" width="100px" height="50px"><br>
                                {{ $team->image }}
                            </td>
                            <td style="display: flex;">
                                <a href="{{ route('our-team.edit',$team->id) }}">
                                    <button class="btn btn-success" type="button"><i class="fa fa-pencil"></i></button>
                                </a>
                                <form action="{{ route('our-team.destroy',$team->id) }}" method="post">
                                    {{ method_field('delete') }}
                                    @csrf
                                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this member?');">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
       </div>
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
</div>
@endsection

@section('specificscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  }); 

  $("#TeamSortable").sortable({
        delay: 150,
        stop: function() {
            var selectedData = [];
            $('#TeamSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
    var token = document.getElementById('csrf-token').value;
    var ajaxurl = '{{ route("sort_team") }}'; // <-- create this route in web.php
    var data = {'data' : data , '_token' : token};
    $.ajax({
        url:ajaxurl,
        type:'post',
        data:data,
        success:function(data){
            // console.log(data);
            // alert('Your change successfully saved');
        }
    })
}
</script>
@stop
