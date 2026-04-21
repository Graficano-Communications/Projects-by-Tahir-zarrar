@extends('admin.layouts.master')
@section('main-content')
<style>
    .btn-delete {
        display: flex;
        align-items: center;
    }
    .btn-delete i {
        margin-right: 5px;
        display: flex;
    }
    
</style>

<div class="container-fluid p-0">
    @if (session('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="h3 mb-3"><strong>Events</strong></h1>
    <div class="row text-end mb-3">
        <div>
            <a href="{{ url('add-event') }}" type="button" class="btn btn-info">
                <i data-feather="plus-circle"></i> Add New
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-hover my-0">
            <thead>
                <tr class="py-3">
                    <th class="d-none d-xl-table-cell text-uppercase py-3">SR#</th>
                    <th class="d-none d-xl-table-cell text-uppercase py-3">Caption</th>
                    <th class="d-none d-md-table-cell text-uppercase py-3">Description</th>
                    <th class="d-none d-md-table-cell text-uppercase py-3">Date</th>
                    <th class="d-none d-md-table-cell text-uppercase py-3">Location</th>
                    <th class="d-none d-md-table-cell text-uppercase text-center py-3" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                        <td class="d-none d-xl-table-cell">{{ $event->name }}</td>
                        <td class="d-none d-md-table-cell">{{ $event->description }}</td>
                        <td class="d-none d-md-table-cell">{{ $event->date }}</td>
                        <td class="d-none d-md-table-cell">{{ $event->location }}</td>
                        <td class="d-none d-md-table-cell text-end">
                            <a href="{{ route('edit-event', $event->id) }}" class="btn btn-success">
                                <i class="mb-1" data-feather="edit"></i> Edit
                            </a>
                        </td>
                        <td class="d-none d-md-table-cell text-start">
                            <form action="{{ route('delete-event', $event->id) }}" method="POST" onsubmit="return confirmDelete();">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger ">
                                    <i class="mb-1" data-feather="trash-2"></i>  Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this event?');
    }

    document.addEventListener('DOMContentLoaded', function () {
        feather.replace();
    });
</script>
@endsection
