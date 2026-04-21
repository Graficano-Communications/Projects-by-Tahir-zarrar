@extends('admin.layout.master')
@section('title', 'Add Product')
@section('main-container-admin')

    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Add Product</h2>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                                    <strong>{{ session('status') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                        <form action="{{ route('add-product-data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Select Category</h5>
                                        </div>
                                        <div class="card-body">
                                            <select id="categorySelect" class="form-control mb-3 shadow-none"
                                                name="category_id" required>
                                                <option value="">Select a Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card ">
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
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="product_name"
                                        placeholder="Product Name" required>
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
                                    <h5 class="card-title mb-0">Featured</h5>
                                </div>
                                <div class="card-body">
                                    <select name="is_featured" required>
                                        <option value="yes" {{ old('is_featured') == 'yes' ? 'selected' : '' }}>Yes
                                        </option>
                                        <option value="no" {{ old('is_featured') == 'no' ? 'selected' : '' }}>No
                                        </option>
                                    </select>

                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Tittle</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="meta_title"
                                        placeholder="Meta Tittle">
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Description</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="meta_description"
                                        placeholder="Meta Description">
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Description</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="product_description"
                                        placeholder="Product Description" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Product Images (Recommended Size 700 x 700)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="product_images[]" multiple
                                        required>
                                    <small class="text-muted">You can upload multiple images by selecting them all at
                                        once.</small>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title mb-0">Product Variations</h5>
                                    <button type="button" class="btn btn-primary" id="addVariationRow">Add More</button>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name/Code</th>
                                                <th>Size</th>
                                                <th>Finish</th>
                                                <th>Detail</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="variationTableBody">
                                            <tr>
                                                <td><input type="text" name="variation_name[]"
                                                        class="form-control shadow-none" placeholder="Name/Code" required>
                                                </td>
                                                <td><input type="text" name="variation_size[]"
                                                        class="form-control shadow-none" placeholder="Size" required></td>
                                                <td><input type="text" name="variation_finish[]"
                                                        class="form-control shadow-none" placeholder="Finish" required>
                                                </td>
                                                <td><input type="text" name="variation_code[]"
                                                        class="form-control shadow-none" placeholder="Detail" required>
                                                </td>
                                                <td><button type="button"
                                                        class="btn btn-danger remove-row">Remove</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="px-3 my-3">
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

            // Add new variation row
            document.getElementById('addVariationRow').addEventListener('click', function() {
                var newRow = `
            <tr>
                <td><input type="text" name="variation_name[]" class="form-control shadow-none" placeholder="Name" required></td>
                <td><input type="text" name="variation_size[]" class="form-control shadow-none" placeholder="Size" required></td>
                <td><input type="text" name="variation_finish[]" class="form-control shadow-none" placeholder="Finish" required></td>
                <td><input type="text" name="variation_code[]" class="form-control shadow-none" placeholder="Detail" required></td>
                <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
            </tr>`;
                document.getElementById('variationTableBody').insertAdjacentHTML('beforeend', newRow);
            });

            // Remove variation row
            document.addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('remove-row')) {
                    e.target.closest('tr').remove();
                }
            });
        });
    </script>
@endsection
