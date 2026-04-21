@extends('admin.layout.master')
@section('title', 'Edit News/Event')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Edit News/Event</h2>
                        </div>
                        <form class="w-100" action="{{ url('edit-news-event-data/' . $newsEvent->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Caption</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="caption"
                                        value="{{ $newsEvent->caption }}" placeholder="Caption" required>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Date</h5>
                                </div>
                                <div class="card-body">
                                    <input type="date" class="form-control shadow-none" name="date"
                                        value="{{ $newsEvent->date }}" placeholder="Date" required>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Location</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="location"
                                        value="{{ $newsEvent->location }}" placeholder="Location" required>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control shadow-none" rows="2" name="description"
                                        placeholder="Description">{{ $newsEvent->description }}</textarea>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Current Image</h5>
                                </div>
                                <div class="card-body">
                                    @if($newsEvent->image)
                                        <img src="{{ asset('uploads/news/' . $newsEvent->image) }}" alt="Current Image" class="img-fluid" width="200">
                                    @else
                                        <p>No image uploaded.</p>
                                    @endif
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Replace Image (1920×1080 Recommended)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="image">
                                </div>
                            </div>

                            <div class="px-1 mt-3">
                                <button type="submit" class="btn btn-primary px-3">Update</button>
                                <a href="{{ route('news-events') }}" class="btn btn-secondary px-3">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
