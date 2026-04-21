@extends('layouts.app')

@section('content')

@if (Session::has('success_message'))
<div class="alert alert-success">
    <span class="fa fa-ok"></span>
    {!! session('success_message') !!}

    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-left">
            <h4 class="mt-5 mb-5">Services</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('create-service') }}" class="btn btn-success" title="Create New Service">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>
    </div>

    @if ($services->isEmpty())
    <!-- This section displays when there are no services -->
    <div class="panel-body text-center">
        <h4>No Services Available.</h4>
    </div>
    @else
    <!-- This section displays when there are services -->
    <div class="panel-body panel-body-with-table">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sort</th>
                        <th>Title</th>
                        <th>Main Heading</th>
                        <th>Multiple Heading</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="PortfolioSortable">
                    @foreach ($services as $ser)
                    <tr id="service-{{ $ser->id }}">
                        <td class="handle">
                            <a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                        </td>
                        <td>{{ $ser->name }}</td>
                        <td>{{ $ser->heading_1 }}</td>
                        <td>
                            @php
                            $headingsArray = json_decode($ser->headings, true);
                            @endphp
                            @if(is_array($headingsArray) && !empty($headingsArray))
                            {{ implode(', ', array_map('trim', $headingsArray)) }}
                            @else
                            No Headings
                            @endif
                        </td>
                        <td>{{ $ser->slug }}</td>
                        <td>
                            @if($ser->image)
                            <img src="{{ url('images/service/' . $ser->image) }}" alt="{{ $ser->name }}" width="200px" height="70px">
                            @else
                            No Image
                            @endif
                        </td>
                        <td>
                            <div class="btn-group btn-group-xs pull-right" role="group">
                                <a href="{{ route('edit-service', $ser->id) }}" class="btn btn-primary" title="Edit Service">
                                    <span class="fa fa-pencil" aria-hidden="true"></span>
                                </a>
                                <form action="{{ route('service.destroy', $ser->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">
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
    @endif

    <!-- Example hidden input -->
    <input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}" />
</div>

@endsection

@section('specificscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#PortfolioSortable").sortable({
            items: "tr",
            cursor: 'move',
            opacity: 0.6,
            handle: '.handle',
            update: function(event, ui) {
                var order = $(this).sortable("serialize");
                $.ajax({
                    type: 'POST',
                    url: '{{ route("services.updateOrder") }}',
                    data: order,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr) {
                        alert('Error updating order');
                    }
                });
            }
        });
    });
</script>
@endsection
