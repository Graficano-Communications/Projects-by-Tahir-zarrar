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

<div class="panel panel-default">

    <div class="panel-heading clearfix">

        <div class="pull-left">
            <h4 class="mt-5 mb-5"> Services Post</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('department.department.create') }}" class="btn btn-success" title="Create New Portfolio">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    <!-- This section displays when there are no portfolios -->
    <div class="panel-body text-center">
        <h4>All Services Post</h4>
    </div>

    <!-- This section displays when there are portfolios -->
    <div class="panel-body panel-body-with-table">

        <div class="table-responsive">

            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Sort</th>
                        <th>Title</th>
                        <th>Service</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>icon image</th>
                        <th>Actions</th>
                        
                        <!-- ... Other Columns ... -->
                    </tr>
                </thead>

                <tbody id="PortfolioSortable">
                    @foreach ($departments as $department)
                    <tr id="{{ $department->id }}">
                        <td class="handle">
                            <a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                        </td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->service ? $department->service->name : 'Service not found' }}
                        </td>
                        <td>{{ $department->slug }}</td>
                        <td>https/{{ $department->description }}</td>
                        <td>
                            @if($department->image)
                            <img src="{{ url('images/departments/' . $department->image) }}" alt="{{ $department->name }}" width="50">
                            @else
                            No Image
                            @endif
                        </td>

                        
                        <td>
                            <div class="btn-group btn-group-xs pull-right" role="group">

                                <a href="{{ route('department.department.edit', $department->id) }}" class="btn btn-primary" title="Edit Portfolio">
                                    <span class="fa fa-pencil" aria-hidden="true"></span>
                                </a>
                                <form method="POST" action="{{ route('department.department.destroy', $department->id) }}" accept-charset="UTF-8">
                                    {{ csrf_field() }}
                                    <input name="_method" value="DELETE" type="hidden">

                                    <button type="submit" class="btn btn-danger" title="Delete Portfolio" onclick="return confirm('Click Ok to delete Portfolio.')">
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

    <!-- Example hidden input -->
    <input type="hidden" name="_token" id="csrf-token" value="YourCSRFTokenHere" />

</div>

<div class="panel panel-default">

    <div class="panel-heading clearfix">

        <div class="pull-left">
            <h4 class="mt-5 mb-5"> Projects</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right mt-5" role="group">
            <a href="{{ route('projects.create') }}" class="btn btn-success" title="Create New Portfolio">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    <!-- This section displays when there are no portfolios -->
    <div class="panel-body text-center">
        <h4>Executions</h4>
    </div>

    <!-- This section displays when there are portfolios -->
    <div class="panel-body panel-body-with-table">
    <div class="table-responsive">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Sort</th>
                    <th>Project title</th>
                    <th>Url</th>
                    <th>Service</th>
                    <th>Project image</th>
                    <th>Actions</th>
                    <!-- ... Other Columns ... -->
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->url }}</td>
                        <td>
                            @php
                                $service = DB::table('services')->find($project->service_id);
                            @endphp
                            {{ $service ? $service->name : 'Service not found' }}
                        </td>
                        <td>
                            @if($project->image)
                                <img src="{{ url('images/projects/' . $project->image) }}" alt="{{ $project->name }}" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary btn-sm" title="Edit Project">
                                <span class="fa fa-pencil" aria-hidden="true"></span>
                            </a>
                            <form method="POST" action="{{ route('projects.destroy', $project->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ csrf_field() }}
                                <input name="_method" value="DELETE" type="hidden">
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Project" onclick="return confirm('Click Ok to delete Project.')">
                                    <span class="fa fa-trash" aria-hidden="true"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    <!-- Example hidden input -->
    <input type="hidden" name="_token" id="csrf-token" value="YourCSRFTokenHere" />

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
            update: function() {
                var order = $(this).sortable("serialize");
                // You can send the updated order to the server using an AJAX call here
                // For example:
                // $.post("/update-order-route", order);
            }
        });
    });
</script>

@stop