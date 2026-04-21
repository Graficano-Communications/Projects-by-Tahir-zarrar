@extends('layouts.app')

@section('content')

<div class="panel panel-default">

    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">Create New Project</h4>
        </span>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('department.department.index') }}" class="btn btn-primary" title="Show All Portfolio">
                <span class="fa fa-list" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    <div class="panel-body">

        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf

            


            <div class="form-group">
                <label for="name">Project Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="service_id" class="col-md-2 control-label">Select Service</label>
                <div class="col-md-10">
                    <select class="form-control" name="service_id" id="service_id" required>
                        <option value="">Select a Service</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        
            <div class="form-group">
                <label for="name">Project Url</label>
                <input type="text" name="url" class="form-control" required>

            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>




    </div>
</div>

@endsection