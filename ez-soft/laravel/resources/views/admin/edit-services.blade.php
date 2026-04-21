@extends('admin.layout.master')
@section('title', 'Edit Service')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Edit Service</h2>
                        </div>
                        <form id="editForm" class="w-100" action="{{ route('edit-service-data', $service->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Service Name -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name"
                                        value="{{ $service->name }}" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Slug</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="slug"
                                        value="{{ old('slug', $service->slug) }}" placeholder="Slug" required>
                                </div>
                            </div>

                            <!-- First Heading -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service 1st Heading</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="first_heading"
                                        value="{{ $service->first_heading }}" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service Detail</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" name="detailing" rows="8" required>{{ $service->detailing }}</textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Service Image (Size Recomended 538 x 535)</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/services/' . $service->service_image) }}" width="400px"
                                        height="200px" alt="Image">
                                    <input type="file" class="form-control  mt-2 shadow-none" name="service_image"
                                        value="{{ old('service_image', $service->service_image) }}">
                                </div>
                            </div>

                            <!-- Characteristics -->
                            <div id="characteristicsContainer">
                                @foreach ($service->characteristics as $key => $characteristic)
                                    <div class="card mt-3 characteristic-card" data-id="{{ $characteristic->id }}">
                                        <div class="card-body">
                                            <input type="hidden" name="characteristic_id[]"
                                                value="{{ $characteristic->id }}">
                                            <label class="px-1 mt-2 mb-0">Heading</label>
                                            <input type="text" class="form-control shadow-none" name="second_heading[]"
                                                value="{{ $characteristic->heading }}" required>
                                            <label class="px-1 mt-2 mb-0">Write Detail Here</label>
                                            <textarea class="form-control shadow-none" name="detail[]" required>{{ $characteristic->detail }}</textarea>
                                            <label class="px-1 mt-2 mb-0">Upload Image</label>
                                            <input type="file" class="form-control shadow-none" name="image[]">
                                            @if ($characteristic->image)
                                                <img src="{{ asset('uploads/services/' . $characteristic->image) }}"
                                                    width="100">
                                            @endif
                                            <button type="button" class="btn btn-danger mt-2 remove-card">Remove</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary add-more mt-3">Add More</button>

                            <!-- Description -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" name="editor1" rows="8" required>{{ $service->description }}</textarea>
                                </div>
                            </div>

                            <!-- FAQs -->
                            <div id="faqContainer">
                                @foreach ($service->faqs as $faq)
                                    <div class="card mt-3 faq-card" data-id="{{ $faq->id }}">
                                        <div class="card-body">
                                            <input type="hidden" name="faq_id[]" value="{{ $faq->id }}">
                                            <input type="text" class="form-control shadow-none" name="question[]"
                                                value="{{ $faq->question }}" required>
                                            <label class="px-1 mt-1">Write Answer Here</label>
                                            <textarea class="form-control shadow-none" name="answer[]" required>{{ $faq->answer }}</textarea>
                                            <button type="button" class="btn btn-danger mt-2 remove-faq">Remove</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-primary add-faq mt-3">Add More FAQ</button>

                            <!-- Submit Button -->
                            <div class="px-3 mt-3">
                                <button type="submit" class="btn btn-success px-3">Update</button>
                            </div>

                            <!-- Hidden Inputs to Track Deletions -->
                            <input type="hidden" name="deleted_characteristics" id="deleted_characteristics">
                            <input type="hidden" name="deleted_faqs" id="deleted_faqs">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let deletedCharacteristics = [];
            let deletedFaqs = [];

            document.addEventListener("click", function(e) {
                // Add New Characteristic
                if (e.target.classList.contains("add-more")) {
                    const newCard = `
                        <div class="card mt-3">
                            <div class="card-body characteristic-card">
                                <label class="px-1 mt-2 mb-0">Heading</label>
                                <input type="text" class="form-control shadow-none" name="second_heading[]" required>
                                <label class="px-1 mt-2 mb-0">Write Detail Here</label>
                                <textarea class="form-control shadow-none" name="detail[]" required></textarea>
                                <label class="px-1 mt-2 mb-0">Upload Image</label>
                                <input type="file" class="form-control shadow-none" name="image[]">
                                <button type="button" class="btn btn-danger mt-2 remove-card">Remove</button>
                            </div>
                        </div>`;
                    document.getElementById("characteristicsContainer").insertAdjacentHTML("beforeend",
                        newCard);
                }

                // Remove Characteristic
                if (e.target.classList.contains("remove-card")) {
                    let card = e.target.closest(".characteristic-card");
                    let charId = card.getAttribute("data-id");

                    if (charId) {
                        deletedCharacteristics.push(charId);
                    }

                    card.remove();
                }

                // Add New FAQ
                if (e.target.classList.contains("add-faq")) {
                    const newFaqCard = `
                        <div class="card mt-3 faq-card">
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="question[]" placeholder="Write Question" required>
                                <label class="px-1 mt-1">Write Answer Here</label>
                                <textarea class="form-control shadow-none" name="answer[]" required></textarea>
                                <button type="button" class="btn btn-danger mt-2 remove-faq">Remove</button>
                            </div>
                        </div>`;
                    document.getElementById("faqContainer").insertAdjacentHTML("beforeend", newFaqCard);
                }

                // Remove FAQ
                if (e.target.classList.contains("remove-faq")) {
                    let faqCard = e.target.closest(".faq-card");
                    let faqId = faqCard.getAttribute("data-id");

                    if (faqId) {
                        deletedFaqs.push(faqId);
                    }

                    faqCard.remove();
                }
            });

            // Pass deleted IDs to hidden inputs before submitting
            document.getElementById("editForm").addEventListener("submit", function() {
                document.getElementById("deleted_characteristics").value = JSON.stringify(
                    deletedCharacteristics);
                document.getElementById("deleted_faqs").value = JSON.stringify(deletedFaqs);
            });
        });
    </script>
@endsection
