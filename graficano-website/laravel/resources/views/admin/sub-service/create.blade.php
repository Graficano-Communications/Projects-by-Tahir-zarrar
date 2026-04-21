@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <span class="pull-left">
            <h4 class="mt-5 mb-5">Create New Sub-Service</h4>
        </span>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('all-sub-services') }}" class="btn btn-primary" title="Show All Services">
                <span class="fa fa-list" aria-hidden="true"></span>
            </a>
        </div>
    </div>

    <div class="panel-body">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('sub-service.store') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-body">
                    <!-- Service Selection -->
                    <div class="form-group">
                        <label for="service_id" class="col-md-2 control-label">Select Service</label>
                        <div class="col-md-12">
                            <select class="form-control" name="service_id" id="service_id" required>
                                <option value="">Select a Service</option>
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Sub-Service Name -->
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Sub-Service Name</label>
                        <div class="col-md-12">
                            <input class="form-control" name="name" type="text" id="name" minlength="1" maxlength="255" required placeholder="Enter sub-service name here...">
                        </div>
                    </div>
                    <!-- Banner Image -->
                    <div class="form-group">
                        <label for="banner_image" class="col-md-2 control-label">Banner Image</label>
                        <div class="col-md-12">
                            <input class="form-control" name="banner_image" type="file" id="banner_image" placeholder="Upload banner image...">
                        </div>
                    </div>

                    <!--  Image -->
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image</h5>
                            </div>
                            <div class="card-body ">
                                <div class="form-group">
                                    <label class="control-label"> Upload Image</label>
                                    <input class="form-control" name="image" type="file" placeholder="Upload  Image...">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image Alt</label>
                                    <input class="form-control" name="img_alt" type="text" minlength="1" maxlength="191" required placeholder="Enter Alt for  Image ..">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="form-group mt-2">
                        <label for="description" class="col-md-2 control-label">Description</label>
                        <div class="col-md-12">
                            <textarea id="editor1" class="form-control" name="description" cols="10" rows="4"></textarea>
                        </div>
                    </div>

                    <!-- Multiple Headings -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="card-title mb-0">Multiple Headings</h5>
                                <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="s_head" class="control-label">Heading</label>
                                    <input class="form-control" name="s_head" type="text" minlength="1" maxlength="191" required placeholder="Enter Main Heading of Multiple heading Section...">
                                </div>
                                <input type="text" class="form-control shadow-none" name="headings[]" placeholder="Heading" required>
                                <div id="inputContainer" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Process Step -->
                    <div class="col-md-12 mt-3">
                        <div id="reviews-container">
                            <div class="card  review-card">
                                <div class="card-header">
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <h3 class="mb-0">Process Step</h3>
                                         <div class="col-md-8">
                                            <input class="form-control" name="p_heading" type="text" id="p_heading" minlength="1" maxlength="191" required placeholder="Enter heading here...">
                                          </div>
                                        <button type="button" class="btn btn-primary " id="add-review">Add More</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="control-label">Heading</label>
                                        <input class="form-control" name="p_head[]" type="text" minlength="1" maxlength="191" required placeholder="Enter name here...">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Text</label>
                                        <textarea class="form-control" name="p_text[]" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Why Choose Us -->
                    <div class="col-md-12 mt-3">
                        <div id="why-choose-us-container">
                            <div class="card why-choose-us-card">
                                <div class="card-header">
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <h3 class="mb-0">Why Choose Us</h3>
                                        <button type="button" class="btn btn-primary " id="add-why-choose-us">Add More</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="m_head" class="control-label">Main Heading</label>
                                        <input class="form-control" name="m_head" type="text" minlength="1" maxlength="191" required placeholder="Enter Why Choose Us Heading...">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input class="form-control" name="choose_title[]" type="text" minlength="1" maxlength="191" required placeholder="Enter title here...">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="choose_description[]" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                                    </div>
                                </div>
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
                                            <input class="form-control" name="abt_subservice" type="text" required placeholder="Enter about heading here...">
                                        </div>
                                        <div class="form-group {{ $errors->has('about_desc') ? 'has-error' : '' }}">
                                            <label for="about_desc" class="control-label">About description</label>
                                            <textarea id="editor2" name="abt_subdesc" cols="6" rows="4"></textarea>
                                            {!! $errors->first('about_desc', '<p class="help-block">:message</p>') !!}
                                        </div>
                                    </div>

                                    <!-- Right column (col-6) -->
                                    <div class="col-6">
                                        <div id="faq-container">
                                            <div class="card faq-card">
                                                <div class="card-header">
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <h3 class="mb-0">Faqs</h3>
                                                        <button type="button" class="btn btn-primary" id="add-faq">Add More</button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label class="control-label">faqs</label>
                                                        <input class="form-control" name="faq[]" type="text" minlength="1" maxlength="191" required placeholder="Enter name here...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">answer</label>
                                                        <textarea class="form-control" name="answer[]" rows="2" minlength="1" maxlength="2147483647" required></textarea>
                                                    </div>
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
                            <input class="form-control" name="call" type="text" minlength="1" maxlength="191" required placeholder="Enter Call to Action here...">
                        </div>
                    </div>
                    <!-- Slug -->
                    <div class="form-group">
                        <label for="slug" class="col-md-2 control-label">Slug (Optional)</label>
                        <div class="col-md-12">
                            <input class="form-control" name="slug" type="text" id="slug" placeholder="Enter URL slug here...">
                        </div>
                    </div>
                    <!-- Meta Title -->
                    <div class="form-group">
                        <label for="meta_title" class="col-md-2 control-label">Meta Title</label>
                        <div class="col-md-12">
                            <input class="form-control" name="meta_title" type="text" id="meta_title" minlength="1" maxlength="255" required placeholder="Enter meta title here...">
                        </div>
                    </div>
                    <!-- Meta Description -->
                    <div class="form-group">
                        <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="meta_description" id="meta_description" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-12">
                            <input class="btn btn-primary" type="submit" value="Save Sub-Service">
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
            var newInputDiv = $('<div>', {
                class: 'input-group mt-2'
            });

            var newInput = $('<input>', {
                type: 'text',
                class: 'form-control shadow-none',
                name: 'headings[]',
                placeholder: 'Heading',
                required: true
            });

            var removeBtn = $('<button>', {
                type: 'button',
                class: 'btn btn-danger',
                text: 'Remove'
            });

            newInputDiv.append(newInput).append(removeBtn);
            $('#inputContainer').append(newInputDiv);

            removeBtn.click(function() {
                newInputDiv.remove();
            });
        });
        $('#add-why-choose-us').click(function() {
            let whyChooseUsCard = `
            <div class="card mb-3 why-choose-us-card mt-3">
                <div class="card-body">
                    <div class="form-group d-flex justify-content-between align-items-center">
                        <h3>Why Choose Us</h3>
                        <button type="button" class="btn btn-danger remove-why-choose-us">Remove</button>
                    </div>
                    <div class="form-group">
                        <label  class="control-label">Title</label>
                        <input class="form-control" name="choose_title[]" type="text" minlength="1" maxlength="191" required placeholder="Enter title here...">
                    </div>
                    <div class="form-group">
                        <label  class="control-label">Description</label>
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
            <div class="card mb-3 review-card mt-3">
                <div class="card-body">
                    <div class="form-group d-flex justify-content-between align-items-center">
                            <h3>Process Step</h3>
                            <button type="button" class="btn btn-danger remove-review">Remove</button>
                        </div>
                    <div class="form-group">
                        <label  class="control-label">Heading</label>
                        <input class="form-control" name="p_head[]" type="text" minlength="1" maxlength="191" required placeholder="Enter name here...">
                    </div>
                    <div class="form-group">
                        <label  class="control-label">Text</label>
                        <textarea class="form-control" name="p_text[]" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                    </div>
                </div>
            </div>`;
            $('#reviews-container').append(reviewCard);
        });

        $(document).on('click', '.remove-review', function() {
            $(this).closest('.review-card').remove();
        });

        $('#add-faq').click(function() {
            let faqCard = `
            <div class="card mb-3 faq-card mt-3">
                <div class="card-body">
                    <div class="form-group d-flex justify-content-between align-items-center">
                            <h3>faqs</h3>
                            <button type="button" class="btn btn-danger remove-faq">Remove</button>
                        </div>
                    <div class="form-group">
                        <label  class="control-label">Faq</label>
                        <input class="form-control" name="faq[]" type="text" minlength="1" maxlength="191" required placeholder="Enter name here...">
                    </div>
                    <div class="form-group">
                        <label  class="control-label">answer</label>
                        <textarea class="form-control" name="answer[]" rows="2" minlength="1" maxlength="2147483647" required></textarea>
                    </div>
                </div>
            </div>`;
            $('#faq-container').append(faqCard);
        });

        $(document).on('click', '.remove-faq', function() {
            $(this).closest('.faq-card').remove();
        });
    });
</script>
@endsection