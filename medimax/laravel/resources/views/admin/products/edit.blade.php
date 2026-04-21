<!-- resources/views/admin/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl">Edit Products</h2>
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

<form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data">

    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="category_id" class="form-label text-dark">Select Category</label>
        <select class="form-select" id="category_id" name="category_id" required>
            <option selected disabled>Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category->id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="sub_category_id" class="form-label text-dark">Select Sub Category</label>
        <select class="form-select" id="sub_category_id" name="sub_category_id" aria-label="Default select example">
            <option selected disabled>Select Sub Category</option>
            @foreach($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}"
                {{ $product->subcategory->id == $subcategory->id ? 'selected' : '' }}>
                {{ $subcategory->name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Product Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter Name"
            value="{{ $product->name }}">
    </div>
    
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Code</label>
        <input type="text" class="form-control text-dark" id="pcode" name="pcode" required placeholder="#****"
            value="{{ $product->pcode }}">
    </div>


    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-title text-black">Product Variations</h5>
            <div id="variations-container">
                @foreach ($product->variations as $variation)
                <div class="variation-item border p-3 mb-3">
                    <h6>Variation {{ $loop->iteration }}</h6>
                    <!-- <div class="mb-3">
                        <label for="variation_image_{{ $variation->id }}" class="form-label text-dark">Image</label>
                        <div class="input-group">
                            <img src="{{ asset('images/products/' . $variation->image) }}" alt="Variation Image" class="img-thumbnail" style="max-width: 100px; max-height: 100px;">
                            <input type="file" class="form-control" id="variation_image_{{ $variation->id }}" name="variations[{{ $variation->id }}][image]">
                        </div>
                    </div> -->
                    <div class="mb-3">
                        <label for="variation_size_{{ $variation->id }}" class="form-label text-dark">Size</label>
                        <input type="text" class="form-control" id="variation_size_{{ $variation->id }}" name="variations[{{ $variation->id }}][size]" value="{{ $variation->size }}">
                    </div>
                    <div class="mb-3">
                        <label for="variation_finish_{{ $variation->id }}" class="form-label text-dark">desciption</label>
                        <input type="text" class="form-control" id="variation_finish_{{ $variation->id }}" name="variations[{{ $variation->id }}][finish]" value="{{ $variation->finish }}">
                    </div>
                    <div class="mb-3">
                        <label for="variation_code_{{ $variation->id }}" class="form-label text-dark">Code</label>
                        <input type="text" class="form-control" id="variation_code_{{ $variation->id }}" name="variations[{{ $variation->id }}][code]" value="{{ $variation->code }}">
                    </div>
                    <button type="button" class="btn btn-danger" onclick="removeVariationField(this)">Remove Variation</button>
                </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-success mb-3" onclick="addVariationField()">Add New Variation</button>
        </div>
    </div>

   
    


    <br>
    <!-- //end color  -->
    <div class="mb-3">
        <label for="feature" class="form-label">Feature</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="featured" id="feature_yes" value="1" {{ $product->feature == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="feature_yes">
                Yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="featured" id="feature_no" value="0" {{ $product->feature == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="feature_no">
                No
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select {{ $product->status === 'private' ? 'bg-secondary text-white' : '' }}" id="status"
            name="status" required>
            <option selected disabled>Select status</option>
            <option value="private" {{ $product->status == "private" ? 'selected' : '' }}>private</option>
            <option value="public" {{ $product->status == "public" ? 'selected' : '' }}>public</option>
        </select>
    </div>

    
    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="description" name="description" rows="5" placeholder="Enter description">{{ $product->description }}</textarea>
    </div>

    <div class="mb-3" id="images-container">
        <label for="images" class="form-label">Product Images (800 × 800 px)</label>
        @foreach ($product->images as $image)
        <div class="input-group mb-3">
            <img src="{{ asset('images/products/' . $image->image_path) }}" alt="Product Image" class="img-thumbnail"
                style="max-width: 100px; max-height: 100px;">
            <input type="file" class="form-control border border-black w-full" name="images[]" style="display: none;">
            <button type="button" class="btn btn-danger mb-0 bg-danger" data-image-id="{{ $image->id }}"
                onclick="removeImageField(this)"><i class="fas fa-trash-alt"></i></button>

        </div>
        @endforeach
        <div class="input-group mb-3">
            <input type="file" class="form-control border border-black w-full" name="new_images[]" multiple>
            <button type="button" class="btn btn-success mb-0 bg-success" onclick="addImageField()">+</button>
        </div>
        <input type="hidden" name="deleted_images" id="deleted-images-input" value="">
    </div>


    


    <br>

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title text-black">(SEO)</h5>
            <div class="mb-3">
                <label for="meta-title" class="form-label text-dark">Meta title</label>
                <input type="text" class="form-control text-dark" id="meta_title" name="meta_title" 
                    placeholder="Enter Meta title" value="{{ $product->meta_title }}">
            </div>
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text">Meta-description</span>
                    <textarea class="form-control" aria-label="With textarea" id="meta_description"
                        name="meta_description">{{ $product->meta_description }}</textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="meta-tags" class="form-label text-dark">Canonical Tags</label>
                <input type="text" class="form-control text-dark" id="meta_tags" name="meta_tags" 
                    placeholder="Comma separated tags" value="{{ $product->meta_tags }}">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success mb-0 text-white-600  bg-success">Submit</button>
</form>


<script>
function addVariationField() {
    let variationIndex = document.querySelectorAll('.variation-item').length + 1;
    let container = document.getElementById('variations-container');
    let newVariation = `
    <div class="variation-item border p-3 mb-3">
        <h6>Variation ${variationIndex}</h6>
        
        <div class="mb-3">
            <label class="form-label text-dark">Size</label>
            <input type="text" class="form-control" name="new_variations[${variationIndex}][size]" placeholder="Enter Size">
        </div>
        <div class="mb-3">
            <label class="form-label text-dark">description</label>
            <input type="text" class="form-control" name="new_variations[${variationIndex}][finish]" placeholder="Enter description">
        </div>
        <div class="mb-3">
            <label class="form-label text-dark">Code</label>
            <input type="text" class="form-control" name="new_variations[${variationIndex}][code]" placeholder="Enter Code">
        </div>
        <button type="button" class="btn btn-danger" onclick="removeVariationField(this)">Remove Variation</button>
    </div>`;
    container.insertAdjacentHTML('beforeend', newVariation);
}

function removeVariationField(button) {
    button.closest('.variation-item').remove();
}
</script>
<script>
    document.getElementById('category_id').addEventListener('change', function() {
        var categoryId = this.value;


        fetch(`/getSubcategories/${categoryId}`)
            .then(response => response.json())
            .then(data => {
                var subCategorySelect = document.getElementById('sub_category_id');
                subCategorySelect.innerHTML = '';

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
    function addProductionImage() {
        var prodImagesContainer = document.querySelector('#prod-images-container');
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-3';

        var input = document.createElement('input');
        input.type = 'file';
        input.className = 'form-control border border-black w-full';
        input.name = 'prod_img[]';

        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'btn btn-danger mb-0 bg-danger';
        button.textContent = '-';
        button.onclick = function() {
            prodImagesContainer.removeChild(inputGroup);
        };

        inputGroup.appendChild(input);
        inputGroup.appendChild(button);
        prodImagesContainer.appendChild(inputGroup);
    }

    function removeProductionImageField(button) {
        var prodImagesContainer = document.querySelector('#prod-images-container');
        var inputGroup = button.parentNode;

        var imagePath = button.getAttribute('data-image-path');
        console.log('Image Path:', imagePath);

        if (imagePath) {
            console.log('Removing image with path:', imagePath);

            // Add the image path to the deleted_prod_images input value
            var deletedProdImagesInput = document.querySelector('#deleted-prod-images-input');
            deletedProdImagesInput.value += (deletedProdImagesInput.value ? ',' : '') + imagePath;

            setTimeout(function() {
                prodImagesContainer.removeChild(inputGroup);
            }, 100);
        }
    }
</script>


<script>
    // size 
    function removeSizeField(button, index) {
        var sizesContainer = document.querySelector('#sizes-container');
        var inputGroup = button.parentNode;


        if (index !== undefined) {
            var deletedSizesInput = document.querySelector('#deleted-sizes-input');
            deletedSizesInput.value += (deletedSizesInput.value ? ',' : '') + index;
        }


        setTimeout(function() {

            sizesContainer.removeChild(inputGroup);
        }, 100);
    }

    function addSizeField() {
        var sizesContainer = document.querySelector('#sizes-container');
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-3';

        var input = document.createElement('input');
        input.type = 'text';
        input.className = 'form-control text-dark';
        input.name = 'sizes[]';
        input.placeholder = 'Enter product size';

        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'btn btn-danger mb-0 bg-danger';
        button.textContent = '-';
        button.onclick = function() {
            removeSizeField(button);
        };

        inputGroup.appendChild(input);
        inputGroup.appendChild(button);
        sizesContainer.appendChild(inputGroup);
    }
    // color 
    function removeColorField(button, index) {
        var sizesContainer = document.querySelector('#color-container');
        var inputGroup = button.parentNode;


        if (index !== undefined) {
            var deletedSizesInput = document.querySelector('#deleted-color-input');
            deletedSizesInput.value += (deletedSizesInput.value ? ',' : '') + index;
        }


        setTimeout(function() {

            sizesContainer.removeChild(inputGroup);
        }, 100);
    }

    function addColorField() {
        var sizesContainer = document.querySelector('#color-container');
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-3';

        var input = document.createElement('input');
        input.type = 'text';
        input.className = 'form-control text-dark';
        input.name = 'color[]';
        input.placeholder = 'Enter product size';

        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'btn btn-danger mb-0 bg-danger';
        button.textContent = '-';
        button.onclick = function() {
            removeColorField(button);
        };

        inputGroup.appendChild(input);
        inputGroup.appendChild(button);
        sizesContainer.appendChild(inputGroup);
    }
</script>
<script>
    function addImageField() {
        var imagesContainer = document.querySelector('#images-container');
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-3';

        var input = document.createElement('input');
        input.type = 'file';
        input.className = 'form-control border border-black w-full';
        input.name = 'new_images[]';
        input.multiple = true;

        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'btn btn-danger mb-0 bg-danger';
        button.textContent = '-';
        button.onclick = function() {
            imagesContainer.removeChild(inputGroup);
        };

        inputGroup.appendChild(input);
        inputGroup.appendChild(button);
        imagesContainer.appendChild(inputGroup);
    }





    function removeImageField(button, imageId) {
        var imagesContainer = document.querySelector('#images-container');
        var inputGroup = button.parentNode;
        var imageId = button.getAttribute('data-image-id');
        console.log('Image ID:', imageId);
        if (imageId) {
            console.log('Removing image with ID:', imageId);
            var deletedImagesInput = document.querySelector('#deleted-images-input');
            deletedImagesInput.value += (deletedImagesInput.value ? ',' : '') + imageId;
            setTimeout(function() {
                imagesContainer.removeChild(inputGroup);
            }, 100);
        }

        console.log('Deleted Images:', document.querySelector('input[name="deleted_images"]').value);
    }
</script>

<!-- //Description Box -->

<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        CKEDITOR.replace('editor1', {
            on: {
                contentDom: function(evt) {
                    // Allow custom context menu only with table elements.
                    evt.editor.editable().on('contextmenu', function(contextEvent) {
                        var path = evt.editor.elementPath();

                        if (!path.contains('table')) {
                            contextEvent.cancel();
                        }
                    }, null, null, 5);
                }
            },
            filebrowserUploadUrl: "{{route('productss.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
        });
    });
</script>

@endsection