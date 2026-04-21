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
            <h4 class="mt-5 mb-5">Instagram</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('instagram.instagram.create') }}" class="btn btn-success" title="Create New Insta Post">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>
    </div>

    <div class="panel-body text-center">
        <h4>Insta Posts</h4>
    </div>

    <div class="panel-body panel-body-with-table">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sort</th>
                        <th>Alt text</th>
                        <th>Post Url</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="InstagramSortable">
                    @foreach($instagrams as $instagram)
                    <tr id="{{ $instagram->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
                        <td>{{ $instagram->name }}</td>
                        <td>{{ $instagram->instagram_url }}</td>
                        <td>
                            <img src="{{ asset('images/instagrams/' . $instagram->image) }}" class="img-responsive" height="50px">
                        </td>
                        <td>
                            <div class="btn-group btn-group-xs pull-right" role="group">
                                <a href="{{ route('instagram.instagram.edit', $instagram->id) }}" class="btn btn-primary" title="Edit Post">
                                    <span class="fa fa-pencil" aria-hidden="true"></span>
                                </a>
                                <form method="POST" action="{{ route('instagram.instagram.destroy', $instagram->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ csrf_field() }}
                                    <input name="_method" value="DELETE" type="hidden">
                                    <button type="submit" class="btn btn-danger" title="Delete Post" onclick="return confirm(&quot;Click Ok to delete Post.&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
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

        $("#InstagramSortable").sortable({

            delay: 150,
            stop: function() {
                var selectedData = new Array();
                $('#InstagramSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                
                $.ajax({
                url: '{{ route("instagram.instagram.sort") }}',
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