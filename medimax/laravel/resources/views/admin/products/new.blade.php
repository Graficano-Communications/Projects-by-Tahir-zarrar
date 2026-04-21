<!-- resources/views/admin/products/new.blade.php -->

@extends('layouts.app')

@section('content')
<div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl">Add Products</h2>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">

    @csrf

    <div class="mb-3">
        <label for="category_id" class="form-label text-dark">Select Category</label>
        <select class="form-select" id="category_id" name="category_id" required>
            <option selected disabled>Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="sub_category_id" class="form-label text-dark">Select Sub Category</label>


        <select class="form-select" id="sub_category_id" name="sub_category_id" aria-label="Default select example">
            <option selected>Select Sub Category</option>

        </select>
    </div>




    <div class="mb-3">
        <label for="name" class="form-label text-dark">Product Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter Name">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Product SKU</label>
        <input type="text" class="form-control text-dark" id="pcode" name="pcode" required placeholder="#****">
    </div>

    <div class="mb-3" id="images-container">
        <label for="images" class="form-label">Product Images (800 × 800 px)</label>
        <div class="input-group mb-3">
            <input class="form-control border border-black w-full" name="images[]" type="file">
            <button type="button" class="btn btn-success mb-0 bg-success" onclick="addImageField()">+</button>
        </div>
    </div>


    <div class="card mb-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="text-dark mb-0">Product variations</h5>
            <div>

                <button type="button" class="btn btn-sm btn-primary" onclick="appendNewFields()">Add More</button>


            </div>
        </div>
        <div class="card-body" id="new-fields-container">
            <div class="p-3" style="border: 1px solid black; border-radius:5px;">
                <!-- <div class="mb-3">
                    <label for="additional_image" class="form-label text-dark">Image</label>
                    <input type="file" class="form-control" id="additional_image" name="additional_image[]" placeholder="Upload Image">
                </div> -->
                <div class="mb-3">
                    <label for="size" class="form-label text-dark">size</label>
                    <input type="text" class="form-control" id="size" name="size[]" placeholder="Enter Size">
                </div>
                <div class="mb-3">
                    <label for="finish" class="form-label text-dark">description</label>
                    <input type="text" class="form-control" id="finish" name="finish[]" placeholder="Enter description">
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label text-dark">Sku</label>
                    <input type="text" class="form-control" id="code" name="code[]" placeholder="Enter Sku">
                </div>
            </div>

        </div>

    </div>




    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select bg-secondary text-white" id="status" name="status" required onchange="updateStatusClass(this)">
            <option value="private" selected>private</option>
            <option value="public">public</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="editor1" rows="5" placeholder="Enter description"></textarea>
    </div>




    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title text-black">(SEO)</h5>
            <div class="mb-3">
                <label for="meta-title" class="form-label text-dark">Meta title</label>
                <input type="text" class="form-control text-dark" id="meta_title" name="meta_title" 
                    placeholder="Enter Meta title">
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text">Meta-description</span>
                    <textarea class="form-control" aria-label="With textarea" id="meta_description"
                        name="meta_description"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="meta-tags" class="form-label text-dark">Canonical Tags</label>
                <input type="text" class="form-control text-dark" id="meta_tags" name="meta_tags" 
                    placeholder="Comma separated tags">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success text-white-600  bg-success">Submit</button>
</form>


<script>
    function appendNewFields() {
        const container = document.getElementById('new-fields-container');
        const newFields = document.createElement('div');
        newFields.className = 'new-field-set';
        newFields.innerHTML = `
        <div class="p-3 my-3" style="border: 1px solid black; border-radius:5px;">
            
            <div class="mb-3">
                <label for="size" class="form-label text-dark">Size</label>
                <input type="text" class="form-control" id="size" name="size[]" placeholder="Enter Size">
            </div>
            <div class="mb-3">
                <label for="finish" class="form-label text-dark">Finish</label>
                <input type="text" class="form-control" id="finish" name="finish[]" placeholder="Enter Finish">
            </div>
            <div class="mb-3">
                <label for="code" class="form-label text-dark">Code</label>
                <input type="text" class="form-control" id="code" name="code[]" placeholder="Enter Code">
            </div>
            <button type="button" class="btn btn-sm btn-danger" onclick="removeLastFields()">Remove</button>
        </div>
        `;
        container.appendChild(newFields);
    }

    function removeLastFields() {
        const container = document.getElementById('new-fields-container');
        const fieldSets = container.getElementsByClassName('new-field-set');
        if (fieldSets.length > 0) {
            container.removeChild(fieldSets[fieldSets.length - 1]);
        }
    }
</script>


<script>
    //select item class
    function updateStatusClass(selectElement) {
        const selectedValue = selectElement.value;
        const statusElement = document.getElementById('status');

        if (selectedValue === 'private') {
            statusElement.classList.add('bg-secondary', 'text-white');
        } else {
            statusElement.classList.remove('bg-secondary', 'text-white');
        }
    }
    // Add an event listener for the change in the category select
    document.getElementById('category_id').addEventListener('change', function() {
        var categoryId = this.value;

        // Fetch sub-categories based on the selected category using AJAX
        fetch(`/getSubcategories/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                var subCategorySelect = document.getElementById('sub_category_id');
                subCategorySelect.innerHTML = ''; // Clear existing options

                data.forEach(subcategory => {
                    var option = document.createElement('option');
                    option.value = subcategory.id;
                    option.text = subcategory.name;
                    subCategorySelect.add(option);
                });
            });
    });
</script>
<script>
    function addImageField() {
        var imagesContainer = document.querySelector('#images-container');
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-3';

        var input = document.createElement('input');
        input.type = 'file';
        input.className = 'form-control border border-black w-full';
        input.name = 'images[]';

        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'btn btn-danger bg-danger mb-0';
        button.textContent = '-';
        button.onclick = function() {
            imagesContainer.removeChild(inputGroup);
        };

        inputGroup.appendChild(input);
        inputGroup.appendChild(button);
        imagesContainer.appendChild(inputGroup);
    }
</script>


@endsection