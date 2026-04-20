@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')

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
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row mt-4">
        <!-- table section -->
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head d-flex justify-content-between">
                <div class="heading1 margin_0">
                    <h2>News & Events</h2>
                </div>
                <div>
                    <a href="{{ url('add-news-event') }}" type="button" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-striped" id="EventSortable">
                        <thead>
                            <tr>
                                <th>SR#</th>
                                <th>Caption</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newsEvents as $event)
                            <tr id="{{ $event->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->caption }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->location }}</td>
                                <td>{{ Str::limit($event->description, 50) }}</td>
                                <td>
                                    <img width="80px" height="40px" src="{{ asset('uploads/news/' . $event->image) }}" alt="{{ $event->caption }}">
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('edit-news-event', $event->id) }}" class="btn btn-success">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="text-start">
                                    <form action="{{ route('delete-news-event', $event->id) }}" method="POST" onsubmit="return confirmDelete();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- jQuery UI for drag-and-drop -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this event?');
    }

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('#csrf-token').val()
            }
        });

        $("#EventSortable").sortable({
            delay: 150,
            stop: function () {
                var selectedData = [];
                $('#EventSortable>tr').each(function () {
                    var id = $(this).attr("id");
                    if (id) {
                        selectedData.push(id);
                    }
                });
                updateOrder(selectedData);
            }
        });

        function updateOrder(data) {
            $.ajax({
                url: '{{ route('sort_news_event') }}',
                type: 'POST',
                data: {
                    data: data,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if (response.success) {
                        alert('Order successfully updated');
                    } else {
                        alert('Failed to update order');
                    }
                }
            });
        }
    });
</script>
@endsection
