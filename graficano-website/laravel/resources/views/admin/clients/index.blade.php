@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Clients</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('clients.client.create') }}" class="btn btn-success" title="Create New Client">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($clients) == 0)
            <div class="panel-body text-center">
                <h4>No Clients Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped" >
                    <thead> 
                        <tr>
                            <th>Sort</th>
                            <th>Name</th>
                            <th>Ratings</th> 
                            <th>Review</th>
                            <th>Image</th>
                            <th>Color Image</th>
                            <th>Testimonial Image</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="ClientSortable" >
                    @foreach($clients as $client)
                        <tr id="{{$client->id}}">
                            <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->rating }}</td>
                            <td>{{ $client->review }}</td>
                            <td><img src="{{ asset('images/clients/' . $client->image)}}"  class="img-resposive" height="50px" ></td>
                            <td><img src="{{ asset('images/clients/' . $client->back_image)}}"  class="img-resposive" height="50px" ></td>
                            <td><img src="{{ asset('images/clients/' . $client->testimonial_image)}}"  class="img-resposive" height="50px" ></td>
                            <td>

                                <form method="POST" action="{!! route('clients.client.destroy', $client->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        
                                        <a href="{{ route('clients.client.edit', $client->id ) }}" class="btn btn-primary" title="Edit Client">
                                            <span class="fa fa-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Client" onclick="return confirm(&quot;Click Ok to delete Client.&quot;)">
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

       
        
        @endif
    
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
@endsection

@section('specificscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#ClientSortable").sortable({

            delay: 150,
            stop: function() {
                var selectedData = new Array();
                $('#ClientSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                
                $.ajax({
                url: '{{ route("sort_client") }}',
                method: 'POST',
                data: {
                    ids: selectedData,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if(response.status == 'success') {
                        console.log('Order updated successfully');
                    } else {
                        console.log('Order update failed');
                    }
                }
            });
            }
        });
    });

</script>

@stop
