@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="fa fa-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Services</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('services.services.create') }}" class="btn btn-success" title="Create New Services">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
         
        @if(count($servicesObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Services Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Sort</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Image</th>
                            <th>Banner</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="ServiceSortable">
                    @foreach($servicesObjects as $services)
                        <tr id="{{$services->id}}">
                            <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
                            <td>{{ $services->title }}</td>
                            <td>{{ $services->slug }}</td>     
                            <td><img src="{{ asset('images/service/'.$services->image) }}"  style="height: 100px"></td>
                            <td><img src="{{ asset('images/service/'.$services->banner) }}"  style="height: 100px"></td>

                            <td>

                                <form method="POST" action="{!! route('services.services.destroy', $services->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('services.services.show', $services->id ) }}" class="btn btn-info" title="Show Services">
                                            <span class="fa fa-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('services.services.edit', $services->id ) }}" class="btn btn-primary" title="Edit Services">
                                            <span class="fa fa-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Services" onclick="return confirm(&quot;Click Ok to delete Services.&quot;)">
                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $servicesObjects->render() !!}
        </div>
        
        @endif
    
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

  $( "#ServiceSortable" ).sortable({
      
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#ServiceSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_service')}}';
      var data = {'data' : data , '_token' : token};
      console.log(data);
        $.ajax({
            url:ajaxurl,
            type:'post',
            data:data,
            success:function(data){
               // console.log(data);
                // alert('your change successfully saved');
            }
        })
    }
</script>
@stop
