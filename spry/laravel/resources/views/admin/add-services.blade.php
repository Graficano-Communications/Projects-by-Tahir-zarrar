@extends('admin.layout.master')
@section('title', 'Product')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Add New Product</h2>
                        </div>
                        <form class="w-100" action="{{ route('add-service-data') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name" placeholder="Name"
                                        required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Slug</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="slug" placeholder="Slug"
                                        required>
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
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Sub Category</h5>
                                </div>
                                <div class="card-body">
                                    <select id="subcategorySelect" class="form-control mb-3 shadow-none"
                                        name="subcategory_id" required>
                                        <option value="">Select a Subcategory</option>
                                        <!-- Options will be populated dynamically -->
                                    </select>
                                </div>
                            </div>
                            <!-- ✅ Featured Product -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Featured Product</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Hidden default value -->
                                    <input type="hidden" name="is_featured" value="0">

                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="is_featured" value="1"
                                            id="isFeatured">
                                        <label class="form-check-label" for="isFeatured">
                                            Mark as Featured
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <label for="editor1" class="form-label">Add Product Description Here ...</label>
                                    <textarea class="form-control" name="editor1" rows="8" required placeholder="Enter description"></textarea>
                                </div>
                            </div>
                            {{-- Long Description --}}
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Long Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control shadow-none" name="editor2" placeholder="Enter long description" required></textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">SKU</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="sku" placeholder="SKU"
                                        required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Tags</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="tags" placeholder="Tags"
                                        required>
                                </div>
                            </div>

                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Images</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="service_images[]" multiple
                                        required>
                                    <small class="text-muted">You can upload multiple images by selecting them all at
                                        once.</small>
                                </div>
                            </div>
                            <!-- ✅ Image Alt Text -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image Alt Text</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="image_alt"
                                        placeholder="Enter Alt Text for Image">
                                </div>
                            </div>
                            <!-- ✅ Meta Title -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="meta_title"
                                        placeholder="Enter Meta Title">
                                </div>
                            </div>

                            <!-- ✅ Meta Description -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control shadow-none" rows="3" name="meta_description"
                                        placeholder="Enter Meta Description"></textarea>
                                </div>
                            </div>
                            <div class="px-3 mt-3">
                                <button type="submit" class="btn btn-success px-3">Submit</button>
                            </div>
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
                            'Accept': 'application/json',
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
