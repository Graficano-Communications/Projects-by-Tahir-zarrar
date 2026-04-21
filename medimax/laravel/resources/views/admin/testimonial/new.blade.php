<!-- resources/views/admin/banners/new.blade.php -->

@extends('layouts.app')

@section('content')
<div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Add Catalogues</h2>
</div>

<form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter name">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label text-dark">Password</label>
        <input type="text" class="form-control text-dark" id="password" name="password" required placeholder="Enter password">
    </div>


    <div class="mb-3">
        <label for="rating" class="form-label text-dark">featured</label>
        <select class="form-select" id="feature" name="feature" required>
            <option selected disabled>Select </option>
            <option value="1">yes</option>
            <option value="0">no</option>

        </select>
    </div>
   
    <div class="mb-3">
        <label for="pdf" class="form-label text-dark">Pdf file</label>
        <input type="file" class="form-control border border-black w-full" id="pdf" name="pdf" accept="pdf/*">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label text-dark"> Image (580 × 500 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*">
    </div>
    <!-- Add other form fields as needed -->
    <button type="submit" class="btn btn-primary text-white-600  bg-success">Submit</button>
</form>


@endsection

@section('scripts')

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
            filebrowserUploadUrl: "{{route('testimonials.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
        });
    });
</script>

@stop