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
                <h4 class="mt-5 mb-5">Blogs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('blogs.blog.create') }}" class="btn btn-success" title="Create New Blog">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($blogs) == 0)
            <div class="panel-body text-center">
                <h4>No Blogs Available.</h4>
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
                    <tbody id="BlogSortable">
                    @foreach($blogs as $blog)
                        <tr id="{{$blog->id}}">
                            <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->slug }}</td>
                            <td><img src="{{ asset('images/blogs/'.$blog->image) }}"  style="height: 100px"></td>
                            <td><img src="{{ asset('images/blogs/'.$blog->banner) }}"  style="height: 100px"></td>
                            

                            <td>

                                <form method="POST" action="{!! route('blogs.blog.destroy', $blog->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        
                                        <a href="{{ route('blogs.blog.edit', $blog->id ) }}" class="btn btn-primary" title="Edit Blog">
                                            <span class="fa fa-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Blog" onclick="return confirm(&quot;Click Ok to delete Blog.&quot;)">
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

        
        <input type="hidden" name="csrf-token" id="csrf-token" value="{{ Session::token() }}" />
        
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

        $("#BlogSortable").sortable({

            delay: 150,
            stop: function() {
                var selectedData = new Array();
                $('#BlogSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                
                $.ajax({
                url: '{{ route("sort_blog") }}',
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
