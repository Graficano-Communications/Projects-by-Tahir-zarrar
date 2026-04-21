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
                     <form action="{{ route('update-product', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Select Category</h5>
                                    </div>
                                    <div class="card-body">
                                        <select id="categorySelect" class="form-control mb-3 shadow-none" name="category_id" required>
                                            <option value="">Select a Category</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
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
                                        <select id="subcategorySelect" class="form-control mb-3 shadow-none" name="subcategory_id" required>
                                            <option value="">Select a Subcategory</option>
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                {{ $subcategory->name }}
                                            </option>
                                            @endforeach
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
                                <input type="text" class="form-control shadow-none" name="product_name" value="{{ $product->product_name }}" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Image</h5>
                            </div>
                            <div class="card-body">
                                <input type="file" class="form-control shadow-none" name="product_image">
                                @if ($product->product_image)
                                <img src="{{ asset('uploads/products/' . $product->product_image) }}" alt="Product Image" width="100" class="mt-2">
                                @endif
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
                                            <th>Name</th>
                                            <th>Size</th>
                                            <th>Finish</th>
                                            <th>Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="variationTableBody">
                                        @foreach ($product->variations as $variation)
                                        <tr>
                                            <td><input type="text" name="variation_name[]" class="form-control shadow-none" value="{{ $variation->name }}" required></td>
                                            <td><input type="text" name="variation_size[]" class="form-control shadow-none" value="{{ $variation->size }}" required></td>
                                            <td><input type="text" name="variation_finish[]" class="form-control shadow-none" value="{{ $variation->finish }}" required></td>
                                            <td><input type="text" name="variation_code[]" class="form-control shadow-none" value="{{ $variation->code }}" required></td>
                                            <td><button type="button" class="btn btn-danger remove-row">Remove</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="px-3 mt-3">
                            <button type="submit" class="btn btn-success px-3">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Populate subcategories dynamically
    document.getElementById('categorySelect').addEventListener('change', function() {
        var categoryId = this.value;

        fetch('/get-subcategories', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ category_id: categoryId })
        })
        .then(response => response.json())
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
        .catch(error => console.error('Error:', error));
    });

    // Add new variation row
    document.getElementById('addVariationRow').addEventListener('click', function() {
        var newRow = `
            <tr>
                <td><input type="text" name="variation_name[]" class="form-control shadow-none" placeholder="Name" required></td>
                <td><input type="text" name="variation_size[]" class="form-control shadow-none" placeholder="Size" required></td>
                <td><input type="text" name="variation_finish[]" class="form-control shadow-none" placeholder="Finish" required></td>
                <td><input type="text" name="variation_code[]" class="form-control shadow-none" placeholder="Code" required></td>
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
