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
                                    <select id="categorySelect" class="form-control shadow-none" name="category_id" required>
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
                                        <select id="subcategorySelect" class="form-control mb-3 shadow-none" name="subcategory_id" required>
                                            <option value="">Select a Subcategory</option>
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $service->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                {{ $subcategory->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Image (Size Recomended 538 x 535)</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/services/' . $service->service_image) }}" width="400px"
                                        height="200px" alt="Image">
                                    <input type="file" class="form-control  mt-2 shadow-none" name="service_image"
                                        value="{{ old('service_image', $service->service_image) }}">
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
                fetch('/get-subcategories', {
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
    </script>

@endsection

