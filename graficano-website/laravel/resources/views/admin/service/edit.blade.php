@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <span class="pull-left">
            <h4 class="mt-5 mb-5">Edit Service</h4>
        </span>
        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('all-services') }}" class="btn btn-primary" title="Show All Services">
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

        <form method="POST" action="{{ route('update_service', $service->id) }}" accept-charset="UTF-8" id="edit_service_form" name="edit_service_form" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Title -->
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Service Name</label>
                        <div class="col-md-12">
                            <input class="form-control" name="name" type="text" id="name" minlength="1" maxlength="191" required placeholder="Enter title here..." value="{{ old('name', $service->name) }}">
                        </div>
                    </div>

                    <!-- Banner Image -->
                    <div class="form-group">
                        <label for="image" class="col-md-2 control-label">Banner Image</label>
                        <div class="col-md-12">
                            <input class="form-control" name="image" type="file" placeholder="Enter icon image here...">
                            @if ($service->image)
                                <img src="{{ asset('images/service/' . $service->image) }}" alt="Current Image" style="width: 150px; margin-top: 10px;">
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ser_image" class="col-md-2 control-label">Service Image</label>
                        <div class="col-md-12">
                            <input class="form-control" name="ser_image" type="file" placeholder="Enter icon image here...">
                            @if ($service->ser_image)
                                <img src="{{ asset('images/service/' . $service->ser_image) }}" alt="Current Image" style="width: 150px; margin-top: 10px;">
                            @endif
                        </div>
                    </div>

                    <!-- Main Heading -->
                    <div class="form-group">
                        <label for="heading_1" class="col-md-2 control-label">Main Heading</label>
                        <div class="col-md-12">
                            <input class="form-control" name="heading_1" type="text" id="heading_1" required placeholder="Enter Heading Here...." value="{{ old('heading_1', $service->heading_1) }}">
                        </div>
                    </div>

                    <!-- Multiple Headings -->
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Multiple Headings</h5>
                            <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button>
                        </div>
                        <div class="card-body" id="inputContainer">
                            @foreach(json_decode($service->headings, true) as $index => $heading)
                            <div class="input-group mt-2" data-index="{{ $index }}">
                                <input type="text" class="form-control shadow-none" name="headings[]" placeholder="Heading" value="{{ $heading }}" required>
                                <button type="button" class="remove-image-btn btn btn-danger">Remove</button>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label for="description" class="col-md-2 control-label">Content</label>
                        <div class="col-md-12">
                            <textarea id="editor1" name="description" cols="10" rows="4">{{ old('description', $service->description) }}</textarea>
                            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-body" style="background-color: azure;">
                            <div class="row"> <!-- Add this row container -->
                                <!-- Left column (col-6) -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="about_service" class="control-label">About service heading</label>
                                        <input class="form-control" name="about_service" type="text" required placeholder="Enter about heading here..." value="{{ old('about_service', $service->about_service) }}">
                                    </div>
                                    <div class="form-group {{ $errors->has('about_desc') ? 'has-error' : '' }}">
                                        <label for="about_desc" class="control-label">About description</label>
                                        <textarea id="editor2" name="about_desc" cols="6" rows="4">{{ old('about_desc', $service->about_desc) }}</textarea>
                                        {!! $errors->first('about_desc', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>

                                <!-- Right column (col-6) -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="p2_title" class="control-label">p2 title</label>
                                        <input class="form-control" name="p2_title" type="text" required placeholder="Enter p2 title here..." value="{{ old('p2_title', $service->p2_title) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="p2_desc" class="control-label">p2 Description</label>
                                        <textarea class="form-control" name="p2_desc" id="description" rows="6" minlength="1" maxlength="2147483647" required>{{ old('p2_desc', $service->p2_desc) }}</textarea>
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label for="p3_title" class="control-label">p3 title</label>
                                        <input class="form-control" name="p3_title" type="text" placeholder="Enter p3 title here..." value="{{ old('p3_title', $service->p3_title) }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="p3_desc" class="control-label">p3 Description</label>
                                        <textarea class="form-control" name="p3_desc" id="description" rows="6" minlength="1" maxlength="2147483647">{{ old('p3_desc', $service->p3_desc) }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="reviews-container">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Testimonial</h3>
                            <button type="button" class="btn btn-primary mt-3" id="add-review">Add More</button>
                        </div>
                        @forelse ($service->c_name as $index => $clientName)
                            <div class="card mb-3 review-card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="c_name[]" class="control-label">Client Name</label>
                                        <input class="form-control" name="c_name[]" type="text" minlength="1" maxlength="191" value="{{ $clientName }}" required placeholder="Enter name here...">
                                    </div>
                                    <div class="form-group">
                                        <label for="review[]" class="control-label">Review</label>
                                        <textarea class="form-control" name="review[]" rows="4" minlength="1" maxlength="2147483647" required>{{ $service->review[$index] ?? '' }}</textarea>
                                    </div>
                                    <button type="button" class="btn btn-danger remove-review">Remove</button>
                                </div>
                            </div>
                        @empty
                            <p>No reviews found.</p>
                        @endforelse
                    </div>
                     <!-- Why Choose Us Section -->
                    <div id="why-choose-us-container">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3>Why Choose Us</h3>
                            <button type="button" class="btn btn-primary mt-3" id="add-why-choose-us">Add More</button>
                        </div>
                        <div class="form-group">
                            <label for="m_head" class="control-label">Main Heading</label>
                            <input class="form-control" name="m_head" type="text" minlength="1" maxlength="191" required placeholder="Enter Why Choose Us Heading..." value="{{ old('m_head', $service->m_head) }}">
                        </div>
                        @forelse($service->choose_title as $index => $chooseTitle)
                        <div class="card mb-3 why-choose-us-card">
                            <div class="card-body">
                                <div class="form-group d-flex justify-content-between align-items-center">
                                    <h3>Why Choose Us</h3>
                                    <button type="button" class="btn btn-danger remove-why-choose-us">Remove</button>
                                </div>
                                <div class="form-group">
                                    <label for="choose_title[]" class="control-label">Title</label>
                                    <input class="form-control" name="choose_title[]" type="text" value="{{ $chooseTitle }}" minlength="1" maxlength="191" required placeholder="Enter title here...">
                                </div>
                                <div class="form-group">
                                    <label for="choose_description[]" class="control-label">Description</label>
                                    <textarea class="form-control" name="choose_description[]" rows="4" minlength="1" maxlength="2147483647" required>{{ $service->choose_description[$index] }}</textarea>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>No Why Choose Us found.</p>
                        @endforelse
                    
                    </div>
                    <div class="form-group">
                        <label for="call" class="control-label">Call To Action</label>
                        <input class="form-control" name="call" type="text" minlength="1" maxlength="191" required placeholder="Enter Call to Action here..." value="{{ old('call', $service->call) }}">
                    </div>
                    <!-- Slug -->
                    <div class="form-group">
                        <label for="slug" class="col-md-2 control-label">Slug (Optional)</label>
                        <div class="col-md-12">
                            <input class="form-control" name="slug" type="text" id="slug" placeholder="url that redirect to the service page..." value="{{ old('slug', $service->slug) }}" required>
                            <span style="color:gray">url is that is the page of the services so check from website first then add it here e.g https://graficano.com/digital-marketing-service/search-engine-optimization-seo</span>
                        </div>
                    </div>

                    <!-- Meta Title -->
                    <div class="form-group">
                        <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
                        <div class="col-md-12">
                            <input class="form-control" name="meta_title" type="text" id="meta_title" minlength="1" maxlength="191" required placeholder="Enter title here..." value="{{ old('meta_title', $service->meta_title) }}">
                        </div>
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group">
                        <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="meta_description" id="meta_description" rows="4" minlength="1" maxlength="2147483647" required>{{ old('meta_description', $service->meta_description) }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-12">
                            <input class="btn btn-primary" type="submit" value="Update Service">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function() {
    
    $('#addInputBtn').click(function() {
        console.log('Add More button clicked');
        var newInputDiv = $('<div>', { class: 'input-group mt-2' });
        var newInput = $('<input>', {
            type: 'text',
            class: 'form-control shadow-none',
            name: 'headings[]', 
            placeholder: 'Heading'
        });
        var removeBtn = $('<button>', {
            type: 'button',
            class: 'btn btn-danger',
            text: 'Remove'
        });

        newInputDiv.append(newInput).append(removeBtn);
        $('#inputContainer').append(newInputDiv);
    });

    
    $('#inputContainer').on('click', '.btn-danger', function() {
        console.log('Remove button clicked');
        $(this).parent().remove();
    });
});
$(document).ready(function() {
        $('#add-review').click(function() {
            let reviewCard = `
            <div class="card mb-3 review-card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="c_name[]" class="control-label">Client Name</label>
                        <input class="form-control" name="c_name[]" type="text" minlength="1" maxlength="191" required placeholder="Enter name here...">
                    </div>
                    <div class="form-group">
                        <label for="review[]" class="control-label">Review</label>
                        <textarea class="form-control" name="review[]" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                    </div>
                    <button type="button" class="btn btn-danger remove-review">Remove</button>
                </div>
            </div>`;
            $('#reviews-container').append(reviewCard);
        });

        $(document).on('click', '.remove-review', function() {
            $(this).closest('.review-card').remove();
        });
        $('#add-why-choose-us').click(function() {
            let whyChooseUsCard = `
            <div class="card mb-3 why-choose-us-card">
                <div class="card-body">
                    <div class="form-group d-flex justify-content-between align-items-center">
                            <h3>Why Choose Us</h3>
                            <button type="button" class="btn btn-danger remove-why-choose-us">Remove</button>
                        </div>
                    <div class="form-group">
                        <label for="choose_title[]" class="control-label">Title</label>
                        <input class="form-control" name="choose_title[]" type="text" minlength="1" maxlength="191" required placeholder="Enter title here...">
                    </div>
                    <div class="form-group">
                        <label for="choose_description[]" class="control-label">Description</label>
                        <textarea class="form-control" name="choose_description[]" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                    </div>
                </div>
            </div>`;
            $('#why-choose-us-container').append(whyChooseUsCard);
        });

        $(document).on('click', '.remove-why-choose-us', function() {
            $(this).closest('.why-choose-us-card').remove();
        });
    });
</script>

@endsection
