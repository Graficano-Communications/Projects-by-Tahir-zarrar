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

    <h1 class="h3 mb-3"><strong>Portfolios</strong></h1>
    <div class="row text-end mb-3">
        <div>
            <a href="{{ url('add-portfolio') }}" type="button" class="btn btn-info">
                <i data-feather="plus-circle"></i> Add New
            </a>
        </div>
    </div>

    <div class="row">
        <table class="table table-striped table-hover my-0">
            <thead>
                <tr class="py-3">
                    <th class="text-uppercase py-3">SR#</th>
                    <th class="text-uppercase py-3">Title</th>
                    <th class="text-uppercase py-3">Description</th>
                    <th class="text-uppercase py-3">Image</th>
                    <th class="text-uppercase text-center py-3" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody id="PortfolioSortable">
                @foreach($portfolios as $portfolio)
                <tr id="{{ $portfolio->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $portfolio->caption }}</td>
                    <td>{!! $portfolio->description !!}</td>
                    <td>
                        @if($portfolio->image)
                            <img width="80px" height="40px" src="{{ asset('uploads/portfolios/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('edit-portfolio', $portfolio->id) }}" class="btn btn-success">
                            <i data-feather="edit"></i> Edit
                        </a>
                    </td>
                    <td class="text-start">
                        <form action="{{ route('delete-portfolio', $portfolio->id) }}" method="POST" onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i data-feather="trash-2"></i> Delete
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

<!-- Include jQuery and jQuery UI -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this portfolio?');
    }

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#PortfolioSortable").sortable({
            delay: 150,
            stop: function() {
                var selectedData = [];
                $('#PortfolioSortable>tr').each(function() {
                    var id = $(this).attr("id");
                    if (id) {
                        selectedData.push(id);
                    }
                });
                updateOrder(selectedData);
            }
        });

        function updateOrder(data) {
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var ajaxurl = '{{ route('sort-portfolio') }}';
            var postData = {
                'data': data,
                '_token': token
            };

            $.ajax({
                url: ajaxurl,
                type: 'post',
                data: postData,
                success: function(response) {
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
