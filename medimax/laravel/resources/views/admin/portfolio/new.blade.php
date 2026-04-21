<!-- resources/views/admin/banners/new.blade.php -->

@extends('layouts.app')

@section('content')
<div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Add Portfolio</h2>
</div>

<form method="POST" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter name">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label text-dark">Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" required placeholder="Enter slug">
        <span id="slug-error" class="text-danger"></span>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option selected disabled>Select</option>
            <option value="private" selected>private</option>
            <option value="public">public</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="description" rows="5" placeholder="Enter description"></textarea>
    </div>

   
    <div class="mb-3">
        <label for="image" class="form-label text-dark"> Front-Image (370 × 250 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" required accept="image/*">
    </div>

    <div class="mb-3">
        <label for="detail_image" class="form-label text-dark"> Detail-Image (760 × 470 px)</label>
        <input type="file" class="form-control border border-black w-full" id="detail_image" name="detail_image" required accept="image/*">
    </div>

    



    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Portfolio Details</h5>
                <div class="row">
                   

                    <!-- Benefits Image -->
                    <div class="col-md-12">
                        <label for="images" class="form-label text-dark"> multiple Image (660 × 420 px)</label>
                        <div id="images-container">
                            <div class="input-group mb-3">

                                <input type="file" class="form-control border border-black w-full" id="images[]" name="images[]" accept="image/*">
                                <button type="button" class="btn btn-danger" onclick="removeimages(this)">Remove</button>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="addimages()">Add images</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <input type="text" class="form-control text-dark" id="meta_title" name="meta_title" placeholder="Enter slug">
                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="mb-3">
                            <label for="meta_description" class="form-label text-dark">Meta Description</label>
                            <textarea class="form-control text-dark" class="tinymce" id="texteditor" name="meta_description" placeholder="Enter meta description" rows="4"></textarea>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Add other form fields as needed -->
    <button type="submit" class="btn btn-primary text-white-600  bg-success">Submit</button>
</form>



<script>
   

    function addimages() {
        var container = document.getElementById('images-container');
        var inputGroup = document.createElement('div');
        inputGroup.className = 'input-group mb-2';
        inputGroup.innerHTML = `
            <input type="file" class="form-control" name="images[]" placeholder="Enter image">
            <button type="button" class="btn btn-danger" onclick="removeimages(this)">Remove</button>
        `;
        container.appendChild(inputGroup);
    }

    function removeimages(button) {
        var inputGroup = button.parentNode;
        inputGroup.parentNode.removeChild(inputGroup);
    }


    document.addEventListener('DOMContentLoaded', function () {
        const slugInput = document.getElementById('slug');
        const slugError = document.getElementById('slug-error');

        slugInput.addEventListener('input', function () {
            const slug = slugInput.value;

            if (slug) {
                fetch('{{ route("check.slug") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({ slug: slug }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.exists) {
                        slugError.textContent = 'This slug is already taken.';
                        slugInput.classList.add('is-invalid');
                    } else {
                        slugError.textContent = '';
                        slugInput.classList.remove('is-invalid');
                    }
                });
            } else {
                slugError.textContent = '';
                slugInput.classList.remove('is-invalid');
            }
        });
    });
</script>

@endsection