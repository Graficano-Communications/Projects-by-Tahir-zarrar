@extends('admin.layout.master')
@section('title', 'Edit Product')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Edit Product</h2>
                        </div>
                        <form id="editForm" class="w-100" action="{{ route('edit-service-data', $service->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Service Name -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Name</h5>
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
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Category</h5>
                                </div>
                                <div class="card-body">
                                    <select id="categorySelect" class="form-control shadow-none" name="category_id"
                                        required>
                                        <option value="">-- Select Category --</option>
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ $service->category_id == $cat->id ? 'selected' : '' }}>
                                                {{ $cat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card mt-3 ">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Sub Category</h5>
                                </div>
                                <div class="card-body">
                                    <select id="subcategorySelect" class="form-control mb-3 shadow-none"
                                        name="subcategory_id" required>
                                        <option value="">Select a Subcategory</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}"
                                                {{ $service->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                {{ $subcategory->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Images</h5>
                                </div>
                                <div class="card-body">
                                    @if ($service->service_images)
                                        @foreach (json_decode($service->service_images) as $image)
                                            <div class="image-preview mt-2"
                                                style="display: inline-block; margin-right: 10px;">
                                                <img src="{{ asset('images/services/' . $image) }}" alt="product Image"
                                                    width="100">
                                                <button type="button" class="btn btn-danger btn-sm remove-image"
                                                    data-image="{{ $image }}">Remove</button>
                                            </div>
                                        @endforeach
                                    @endif

                                    <input type="hidden" name="removed_images" id="removed_images" value="[]">

                                    <div class="mt-3">
                                        <label for="new_images" class="form-label">Upload New Images</label>
                                        <input type="file" class="form-control" name="service_images[]" id="new_images"
                                            multiple>
                                    </div>
                                </div>
                            </div>



                            <!-- Description -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" name="editor1" rows="8" required>{{ $service->description }}</textarea>
                                </div>
                            </div>

                            <!-- Description 2-->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description Second</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" name="editor2" rows="8" required>{{ $service->description2 }}</textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">SKU</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="sku"
                                        value="{{ old('sku', $service->sku) }}" placeholder="SKU" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Tags</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="tags"
                                        value="{{ old('tags', $service->tags) }}" placeholder="Tags" required>
                                </div>
                            </div>
                            <!-- ✅ Image Alt Text -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image Alt Text</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="image_alt"
                                        value="{{ $service->image_alt }}" placeholder="Enter Alt Text for Image">
                                </div>
                            </div>

                            <!-- ✅ Meta Title -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="meta_title"
                                        value="{{ $service->meta_title }}" placeholder="Enter Meta Title">
                                </div>
                            </div>

                            <!-- ✅ Meta Description -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control shadow-none" rows="2" name="meta_description"
                                        placeholder="Enter Meta Description">{{ $service->meta_description }}</textarea>
                                </div>
                            </div>






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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Populate subcategories dynamically
            document.getElementById('categorySelect').addEventListener('change', function() {
                var categoryId = this.value;

                // Alert the categoryId to see if it's being captured correctly
                // alert(categoryId);

                // Create a POST request using the Fetch API
                fetch('{{ route('get-subcategories') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        },
                        body: JSON.stringify({
                            category_id: categoryId
                        })
                    })
                    .then(response => {
                        // Check if the response is valid JSON
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        var subcategorySelect = document.getElementById('subcategorySelect');
                        subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';
                        data.forEach(subcategory => {
                            var option = document.createElement('option');
                            option.value = subcategory.id;
                            option.textContent = subcategory.name;
                            subcategorySelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.remove-image').forEach(button => {
                button.addEventListener('click', function() {
                    const imageName = this.dataset.image;
                    const imagePreview = this.closest('.image-preview');

                    let removedImages = document.getElementById('removed_images').value;
                    removedImages = removedImages ? JSON.parse(removedImages) : [];

                    removedImages.push(imageName);

                    document.getElementById('removed_images').value = JSON.stringify(removedImages);
                    imagePreview.remove();
                });
            });
        });
    </script>

@endsection
