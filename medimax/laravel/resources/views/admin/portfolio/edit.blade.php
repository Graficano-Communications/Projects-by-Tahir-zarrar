@extends('layouts.app')

@section('content')
<div>
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a>
</div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl">{{ isset($portfolio) ? 'Edit Services' : 'Add Services' }}</h2>
</div>

<form method="POST" action="{{ route('portfolio.update', $portfolio->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" value="{{ old('name', $portfolio->name) }}" required placeholder="Enter name">
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label text-dark">Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" value="{{ old('slug', $portfolio->slug) }}" required placeholder="Enter slug">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label text-dark">Description</label>
        <textarea class="form-control text-dark" id="description" name="description" required placeholder="Enter description">{{ old('description', $portfolio->description) }}</textarea>
    </div>



    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option disabled>Select status</option>
            <option value="private" {{ old('status', $portfolio->status) == 'private' ? 'selected' : '' }}>private</option>
            <option value="public" {{ old('status', $portfolio->status) == 'public' ? 'selected' : '' }}>public</option>
        </select>
    </div>

    @if ($portfolio->front_image)
    <div class="mb-3">
        <label class="form-label">Current Front Image</label>
        <br />
        <img src="{{ asset($portfolio->front_image) }}" alt="Current Front Image" style="max-width: 100px; max-height: 100px;">
    </div>
    @endif
    <div class="mb-3">
        <label for="image" class="form-label text-dark">New Front Image (370 × 250 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*">
    </div>



    @if ($portfolio->detail_image)
    <div class="mb-3">
        <label class="form-label">Current Detail Image</label>
        <br />
        <img src="{{ asset($portfolio->detail_image) }}" alt="Current Detail Image" style="max-width: 100px; max-height: 100px;">
    </div>
    @endif
    <div class="mb-3">
        <label for="detail_image" class="form-label text-dark">New Detail Image (760 × 470 px)</label>
        <input type="file" class="form-control border border-black w-full" id="detail_image" name="detail_image" accept="image/*">
    </div>


    <div class="mb-3" id="images-container">
        <label for="images" class="form-label">Images (580 × 580 px)</label>
        @foreach($portfolio->images as $image)
        <div class="input-group mb-3">
            <img src="{{ asset('images/portfolio/' . $image->images) }}" alt="Product Image" class="img-thumbnail"
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

    

    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">SEO Attributes</h5>
                <div class="row">
                    <!-- Benefits of Our Service -->
                    <div class="col-md-12">

                        <div class="mb-3">
                            <label for="meta_title" class="form-label text-dark">meta_title</label>
                            <input type="text" class="form-control text-dark" id="meta_title" name="meta_title" value="{{ old('meta_title', $portfolio->meta_title) }}" placeholder="Enter title">
                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="mb-3">
                            <label for="meta_description" class="form-label text-dark">Meta Description</label>
                            <textarea class="form-control text-dark" id="meta_description" name="meta_description" value="{{ old('meta_description', $portfolio->meta_description) }}" placeholder="Enter meta description" rows="4"></textarea>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary text-white-600 bg-success">Submit</button>
</form>

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
@endsection