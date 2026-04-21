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
            <h4 class="mt-5 mb-5">Banners</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('banner.banner.create') }}" class="btn btn-success" title="Create New Event">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    @if(count($banners) == 0)
    <div class="panel-body text-center">
        <h4>No Banners Available.</h4>
    </div>
    @else
    <div class="panel-body panel-body-with-table">
        <div class="table-responsive">

            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Thumbnail Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="PortfolioSortable">
                    @foreach($banners as $banner)
                    <tr id="{{ $banner->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a> {{ $banner->sequence }}</td>
                        <td>{{ $banner->title }}</td>
                        <td><img src="{{ asset('images/banners/'.$banner->image) }}" style="height: 100px"></td>
                        <td>

                            <form method="POST" action="{!! route('banner.banner.destroy', $banner->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">

                                    <a href="{{ route('banner.banner.edit', $banner->id ) }}" class="btn btn-primary" title="Edit Event">
                                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Event" onclick="return confirm(&quot;Click Ok to delete Event.&quot;)">
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
        {!! $banners->render() !!}
    </div>

    @endif

</div>
@endsection

@section('specificscripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
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
                
                $.ajax({
                url: '{{ route("sort_banners") }}',
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

@endsection