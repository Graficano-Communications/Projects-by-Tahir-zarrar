@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <span class="pull-left">
            <h4 class="mt-5 mb-5">Edit Sub-Service</h4>
        </span>
        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('all-sub-services') }}" class="btn btn-primary" title="Show All Sub-Services">
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

        <form method="POST" action="{{ route('sub-service.update', $subservice->id) }}" accept-charset="UTF-8" id="edit_sub_service_form" name="edit_sub_service_form" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Service -->
            <!-- Title -->
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="service_id" class="col-md-2 control-label">Select Service</label>
                        <div class="col-md-12">
                            <select class="form-control" name="service_id" id="service_id" required>
                                <option value="">Select a Service</option>
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}" {{ $subservice->service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Sub-Service Name</label>
                        <div class="col-md-12">
                            <input class="form-control" name="name" type="text" id="name" minlength="1" maxlength="191" required placeholder="Enter title here..." value="{{ old('name', $subservice->name) }}">
                        </div>
                    </div>
                    <!-- Banner Image -->
                    <div class="form-group">
                        <label for="banner_image" class="col-md-2 control-label">Banner Image</label>
                        <div class="col-md-12">
                            <input class="form-control" name="banner_image" type="file" id="banner_image" placeholder="Upload banner image...">
                            @if ($subservice->banner_image)
                            <img src="{{ asset('images/sub-services/banner/' . $subservice->banner_image) }}" alt="Current Image" style="width: 150px; margin-top: 10px;">
                            @endif
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image</h5>
                            </div>
                            <div class="card-body ">
                                <input class="form-control" name="image" type="file" placeholder="Enter banner image here...">
                                @if ($subservice->image)
                                <img src="{{ asset('images/sub-services/' . $subservice->image) }}" alt="Current Image" style="width: 150px; margin-top: 10px;">
                                @endif
                                <div class="form-group mt-2">
                                    <label class="control-label">Image Alt</label>
                                    <input class="form-control" name="img_alt" type="text" minlength="1" maxlength="191" required placeholder="Enter Alt for  Image .." value="{{ old('img_alt', $subservice->img_alt) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        <label for="description" class="col-md-2 control-label">Content</label>
                        <div class="col-md-12">
                            <textarea id="editor1" name="description" cols="10" rows="4">{{ old('description', $subservice->description) }}</textarea>
                            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <!-- Multiple Headings -->
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0">Multiple Headings</h5>
                                <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button>
                            </div>
                            <div class="card-body" id="inputContainer">
                                <div class="form-group">
                                    <label for="s_head" class="control-label">Heading</label>
                                    <input class="form-control" name="s_head" type="text" minlength="1" maxlength="191" required placeholder="Enter Main Heading of Multiple heading Section..." value="{{ old('s_head', $subservice->s_head) }}">
                                </div>
                                @foreach(json_decode($subservice->headings, true) as $index => $heading)
                                <div class="input-group mt-2" data-index="{{ $index }}">
                                    <input type="text" class="form-control shadow-none" name="headings[]" placeholder="Heading" value="{{ $heading }}" required>
                                    <button type="button" class="remove-image-btn btn btn-danger">Remove</button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Process Step -->
                    <div class="col-md-12 mt-3">
                        <div id="reviews-container">
                            <div class="card mb-3 review-card">
                                <div class="card-header">
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                         
                                        <h3 class="mb-0">Process Step</h3>
                                          <div class="col-md-8">
                                            <input class="form-control" name="p_heading" type="text" id="p_heading" minlength="1" maxlength="191" required placeholder="Enter heading here..." value="{{ old('p_heading', $subservice->p_heading) }}">
                                          </div>
                    
                                        
                                        <button type="button" class="btn btn-primary " id="add-review">Add More</button>
                                    </div>
                                </div>
                                @forelse ($subservice->p_head as $index => $clientName)
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="control-label">Heading</label>
                                        <input class="form-control" name="p_head[]" type="text" minlength="1" maxlength="191" value="{{ $clientName }}" required placeholder="Enter name here...">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Text</label>
                                        <textarea class="form-control" name="p_text[]" rows="4" minlength="1" maxlength="2147483647" required>{{ $subservice->p_text[$index] ?? '' }}</textarea>
                                    </div>
                                    <button type="button" class="btn btn-danger remove-review">Remove</button>
                                </div>
                                @empty
                                <p>No Process Step found.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- Why Choose Us Section -->
                    <div class="col-md-12 mt-3">
                        <div id="why-choose-us-container">
                            <div class="card mb-3 why-choose-us-card">
                                <div class="card-header">
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <h3 class="mb-0">Why Choose Us</h3>
                                        <button type="button" class="btn btn-primary " id="add-why-choose-us">Add More</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="m_head" class="control-label">Main Heading</label>
                                        <input class="form-control" name="m_head" type="text" minlength="1" maxlength="191" required placeholder="Enter Why Choose Us Heading..." value="{{ old('m_head', $subservice->m_head) }}">
                                    </div>
                                    @forelse($subservice->choose_title as $index => $chooseTitle)
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
                                        <textarea class="form-control" name="choose_description[]" rows="4" minlength="1" maxlength="2147483647" required>{{ $subservice->choose_description[$index] }}</textarea>
                                    </div>
                                </div>
                                @empty
                                <p class="px-1">No Why Choose Us found.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="card">
                            <div class="card-body" style="background-color: azure;">
                                <div class="row">
                                    <!-- Left column (col-6) -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="text" class="control-label">About Sub-service heading</label>
                                            <input class="form-control" name="abt_subservice" type="text" required value="{{ old('abt_subservice', $subservice->abt_subservice) }}">
                                        </div>
                                        <div class="form-group {{ $errors->has('abt_subdesc') ? 'has-error' : '' }}">
                                            <label for="abt_subdesc" class="control-label">About description</label>
                                            <textarea id="editor2" name="abt_subdesc" cols="6" rows="4">{{ old('abt_subdesc', $subservice->abt_subdesc) }}</textarea>
                                            {!! $errors->first('abt_subdesc', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>

                                    <!-- Faqs Section -->
                                    <div class="col-md-6">
                                        <div id="faq-container">
                                            <div class="card faq-card">
                                                <div class="card-header">
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <h3 class="mb-0">FAQs</h3>
                                                        <button type="button" class="btn btn-primary" id="add-faq">Add More</button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    @forelse($subservice->faqs as $index => $faq)
                                                    <div class="faq-item">
                                                        <div class="form-group">
                                                            <label class="control-label">FAQ</label>
                                                            <input class="form-control" name="faq[]" type="text" minlength="1" maxlength="191" required value="{{ old('faq', $faq->faq) }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Answer</label>
                                                            <textarea class="form-control" name="answer[]" rows="2" minlength="1" maxlength="2147483647" required>{{ old('answer', $faq->answer) }}</textarea>
                                                        </div>
                                                        <button type="button" class="btn btn-danger btn-sm delete-faq">Delete</button>
                                                        <hr>
                                                    </div>
                                                    @empty
                                                    <p>No FAQs found.</p>
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Call to Action -->
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="call" class="control-label">Call To Action</label>
                            <input class="form-control" name="call" type="text" minlength="1" maxlength="191" required placeholder="Enter Call to Action here..." value="{{ old('call', $subservice->call) }}">
                        </div>
                    </div>
                    <!-- Slug -->
                    <div class="form-group">
                        <label for="slug" class="col-md-2 control-label">Slug (Optional)</label>
                        <div class="col-md-12">
                            <input class="form-control" name="slug" type="text" id="slug" placeholder="url that redirect to the sub-service page..." value="{{ old('slug', $subservice->slug) }}">
                            <span style="color:gray">URL is that is the page of the sub-services so check from website first then add it here e.g https://graficano.com/digital-marketing-service/search-engine-optimization-seo</span>
                        </div>
                    </div>

                    <!-- Meta Title -->
                    <div class="form-group">
                        <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
                        <div class="col-md-12">
                            <input class="form-control" name="meta_title" type="text" id="meta_title" minlength="1" maxlength="191" required placeholder="Enter title here..." value="{{ old('meta_title', $subservice->meta_title) }}">
                        </div>
                    </div>

                    <!-- Meta Description -->
                    <div class="form-group">
                        <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="meta_description" id="meta_description" rows="4" minlength="1" maxlength="2147483647" required>{{ old('meta_description', $subservice->meta_description) }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-12">
                            <input class="btn btn-primary" type="submit" value="Update Sub-Service">
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
            var newInputDiv = $('<div>', {
                class: 'input-group mt-2'
            });
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
        $('#add-review').click(function() {
            let reviewCard = `
            <div class="card mb-3 review-card">
                <div class="card-body">
                    <div class="form-group d-flex justify-content-between align-items-center">
                            <h3>Process Step</h3>
                            <button type="button" class="btn btn-danger remove-review">Remove</button>
                        </div>
                    <div class="form-group">
                        <label for="p_head[]" class="control-label">Heading</label>
                        <input class="form-control" name="p_head[]" type="text" minlength="1" maxlength="191" required placeholder="Enter name here...">
                    </div>
                    <div class="form-group">
                        <label for="p_text[]" class="control-label">Text</label>
                        <textarea class="form-control" name="p_text[]" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                    </div>
                </div>
            </div>`;
            $('#reviews-container').append(reviewCard);
        });

        $(document).on('click', '.remove-review', function() {
            $(this).closest('.review-card').remove();
        });

        
    });
</script>
<script>
    document.getElementById('add-faq').addEventListener('click', function() {
        const faqContainer = document.getElementById('faq-container').querySelector('.card-body');
        const newFaq = `
            <div class="faq-item">
                <div class="form-group">
                    <label class="control-label">FAQ</label>
                    <input class="form-control" name="faq[]" type="text" minlength="1" maxlength="191" required placeholder="Enter FAQ here...">
                </div>
                <div class="form-group">
                    <label class="control-label">Answer</label>
                    <textarea class="form-control" name="answer[]" rows="2" minlength="1" maxlength="2147483647" required placeholder="Enter answer here..."></textarea>
                </div>
                <button type="button" class="btn btn-danger btn-sm delete-faq">Delete</button>
                <hr>
            </div>
        `;
        faqContainer.insertAdjacentHTML('beforeend', newFaq);
    });

    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('delete-faq')) {
            const faqItem = e.target.closest('.faq-item');
            if (faqItem) {
                faqItem.remove();
            }
        }
    });
</script>

@endsection