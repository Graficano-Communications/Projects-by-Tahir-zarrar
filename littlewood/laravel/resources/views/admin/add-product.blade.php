@extends('admin.layouts.master')
@section('main-content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Add Product</h1>
        <form action="{{ route('add-product-data') }}" method="POST" enctype="multipart/form-data">
            @csrf    
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Url</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="url" placeholder="URL" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Featured</h5>
                    </div>
                    <div class="card-body">
                        <label class="switch">
                            <input type="checkbox" name="featured" value="1">
                            <span class="slider round">Do you want to make Featutred this item?</span>
                          </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Select Category</h5>
                        </div>
                        <div class="card-body">
                            <select id="categorySelect" class="form-select mb-3 shadow-none" name="category_id">
                               
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Select Sub Category</h5>
                        </div>
                        <div class="card-body">
                            <select id="subcategorySelect" class="form-select mb-3 shadow-none" name="subcategory_id">
                                <!-- Options will be populated dynamically -->
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description 1st</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="editor1"></textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Front Image</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="f_image" placeholder="Image" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Back Image</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="b_image" placeholder="Image" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">SKU</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="sku" placeholder="SKU" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Size Chart Image</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="s_image" placeholder="Image" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Color <span style="color: red; font-size: 13px;"> (Add Color code)</span></h5>
                        <button type="button" class="btn btn-primary" id="addFeatureInputBtn">Add More</button>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="color[]" placeholder="Color" required>
                        <div id="featureInputContainer" class="mt-3"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Size</h5>
                        <button type="button" class="btn btn-primary" id="addSpecificationInputBtn">Add More</button>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="size[]" placeholder="Size" required>
                        <div id="specificationInputContainer" class="mt-3"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Image</h5>
                            <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button> 
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="image_path[]" placeholder="Image" >
                        <div id="inputContainer" class="mt-3"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description 2nd</h5>
                    </div>
                    <div class="card-body">
                        <textarea name="editor2"></textarea>
                    </div>
                </div>
                <div class="px-3">
                    <button type="submit" class="btn btn-success px-3">Submit</button>
                </div>
            </div>     
        </form>
    </div>
    
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );

        $(document).ready(function() {
    $('#categorySelect').click(function() {
        var categoryId = $(this).val();

        // Send the selected category ID to the backend
        $.ajax({
            url: '/getSubcategories', // Replace with your backend route
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {category_id: categoryId},
            success: function(data) {
                $('#subcategorySelect').empty(); // Clear existing options
                if ($.isEmptyObject(data)) {
                    $('#subcategorySelect').append('<option value="">No Subcategory</option>');
                } else {
                    $.each(data, function(index, subcategory) {
                        $('#subcategorySelect').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                // Handle errors
            }
        });
    });
});



</script>
<script>
    $(document).ready(function() {
        $('#addInputBtn').click(function() {
            var newInputDiv = $('<div>', { class: 'input-group mt-2' });
            
            var newInput = $('<input>', {
                type: 'file',
                class: 'form-control shadow-none',
                name: 'image_path[]',
                placeholder: 'Image',
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
    });
    $(document).ready(function() {
        $('#addFeatureInputBtn').click(function() {
            var newInputDiv = $('<div>', { class: 'input-group mt-2' });
            
            var newInput = $('<input>', {
                type: 'text',
                class: 'form-control shadow-none',
                name: 'color[]',
                placeholder: 'Color',
                required: true
            });

            var removeBtn = $('<button>', {
                type: 'button',
                class: 'btn btn-danger',
                text: 'Remove'
            });

            newInputDiv.append(newInput).append(removeBtn);
            $('#featureInputContainer').append(newInputDiv);

            removeBtn.click(function() {
                newInputDiv.remove();
            });
        });
    });
    $(document).ready(function() {
        $('#addSpecificationInputBtn').click(function() {
            var newInputDiv = $('<div>', { class: 'input-group mt-2' });
            
            var newInput = $('<input>', {
                type: 'text',
                class: 'form-control shadow-none',
                name: 'size[]',
                placeholder: 'Size',
                required: true
            });

            var removeBtn = $('<button>', {
                type: 'button',
                class: 'btn btn-danger',
                text: 'Remove'
            });

            newInputDiv.append(newInput).append(removeBtn);
            $('#specificationInputContainer').append(newInputDiv);

            removeBtn.click(function() {
                newInputDiv.remove();
            });
        });
    });
</script>
@endsection


