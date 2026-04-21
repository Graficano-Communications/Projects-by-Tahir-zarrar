@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>All Reviews</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Portfolio</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reviews as $review)
                        <tr>
                            <td>{{ $review->id }}</td>
                            <td>{{ $review->name }}</td>
                            <td>{{ $review->email }}</td>
                            <td>{{ $review->portfolio }}</td>
                            <td>{{ $review->rating }}</td>
                            <td>{{ $review->comment }}</td>
                            <td>
                                <select class="form-select status-dropdown" data-id="{{ $review->id }}">
                                    <option value="draft" {{ $review->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ $review->status == 'published' ? 'selected' : '' }}>Published</option>
                                </select>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No reviews found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Include jQuery if not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('.status-dropdown').change(function() {
        var reviewId = $(this).data('id');
        var newStatus = $(this).val();

        $.ajax({
            url: "{{ route('review.updateStatus') }}",
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: reviewId,
                status: newStatus
            },
            success: function(response) {
                alert('Status updated successfully!');
            },
            error: function(response) {
                alert('Failed to update status.');
            }
        });
    });
});
</script>
@endsection
