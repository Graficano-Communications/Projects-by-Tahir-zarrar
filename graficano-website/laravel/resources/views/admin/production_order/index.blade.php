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
            <h4 class="mt-5 mb-5">Production _order</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('production_order.create') }}" class="btn btn-success" title="Create New Event">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    @if(count($banners) == 0)
    <div class="panel-body text-center">
        <h4>No Production Order Available.</h4>
    </div>
    @else
    <div class="panel-body panel-body-with-table">
        <div class="table-responsive">

            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>order_name</th>
                        <th>Company</th>
                        <th>phone</th>
                    </tr>
                </thead>
                <tbody id="PortfolioSortable">
                    @foreach($banners as $banner)
                    <tr id="{{ $banner->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a> {{ $banner->sequence }}</td>
                        <td>{{ $banner->order_name}}</td>
                        <td>{{$banner->company_name}}</td>
                        <td>{{$banner->phone}}<td>
                    
                            <form method="POST" action="{!! route('production_order.destroy', $banner->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">

                                    <a href="{{ route('production_order.edit', $banner->id ) }}" class="btn btn-primary" title="Edit Event">
                                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Event" onclick="return confirm(&quot;Click Ok to delete Event.&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>

                            </form>

                    
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="panel-footer">
        {!! $banners->render() !!}
    </div>

    @endif

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#PortfolioSortable").sortable({

            delay: 150,
            stop: function() {
                var selectedData = new Array();
                $('#PortfolioSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                updateOrder(selectedData);
            }
        });
    });

    function updateOrder(data) {
        var token = document.getElementById('csrf-token').value;
        var ajaxurl = '{{ route('sort_banners') }}';
        var data = {
            'data': data,
            '_token': token
        };
        // console.log(data);
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: data,
            success: function(data) {
                // console.log(data);
                // alert('your change successfully saved');
            }
        })
    }
</script>
@endsection