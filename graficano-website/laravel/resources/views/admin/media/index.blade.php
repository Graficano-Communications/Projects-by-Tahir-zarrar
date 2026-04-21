    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Media</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('media.media.create',$portfolio_id) }}" class="btn btn-success" title="Create New Media">
                    <span class="fa fa-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($mediaObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Media Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Sort</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Portfolio</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="mediaSortable" >
                    @foreach($mediaObjects as $media)
                        <tr id="{{$media->id}}">
                            <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
                            <td>{{ $media->type }}</td>
                            @if($media->type == "vimeo")
                            <td>{{ $media->value }}</td> 
                            @else
                            <td><img src="{{ asset('images/portfolio/' . $media->value)}}"  class="img-resposive" height="50px" ></td>
                            @endif
                            <td> @if($media->thumbnail == 1)
                            <i class="fa fa-star"></i>
                            @endif
                            {{ optional($media->portfolio)->title }}</td>

                            <td>

                                <form method="POST" action="{!! route('media.media.destroy', $media->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}
 
                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                       <a href="{{ route('set_thumbnail',$media->id ) }}" class="btn btn-success" title="Set As Thumbail">
                                            <span class="fa fa-image" aria-hidden="true"></span>
                                        </a>

                                        <a href="{{ route('media.media.edit', [$media->id ,$portfolio_id] ) }}" class="btn btn-primary" title="Edit Media">
                                            <span class="fa fa-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Media" onclick="return confirm(&quot;Click Ok to delete Media.&quot;)">
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

      <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        
        @endif
    
    </div>

    @section('specificscripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#mediaSortable").sortable({

            delay: 150,
            stop: function() {
                var selectedData = new Array();
                $('#mediaSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                
                $.ajax({
                url: '{{ route("sort_media") }}',
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

