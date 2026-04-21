<!-- resources/views/admin/testimonials/form.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">{{ isset($testimonials) ? 'Edit catalogue' : 'Add catalogue' }}</h2>
</div>

<form method="POST" action="{{  route('testimonials.update', $testimonials->id)  }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" value="{{ $testimonials->name }}"
            required placeholder="Enter name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label text-dark">password</label>
        <input type="text" class="form-control text-dark" id="password" name="password" value="{{ $testimonials->password }}"
            required placeholder="Enter email">
    </div>
    

    <div class="mb-3">
        <label for="rating" class="form-label text-dark">Featured</label>
        <select class="form-select" id="feature" name="feature" required>
            <option selected disabled>Select </option>
            <option value="0" {{ $testimonials->feature == "0" ? 'selected' : '' }}>no</option>
            <option value="1" {{ $testimonials->feature == "1" ? 'selected' : '' }}>yes</option>
           

        </select>
    </div>
    

    @if ($testimonials->pdf)
    <div class="mb-3">
        <label class="form-label">old pdf</label>
        <br />
        <a href="{{ asset($testimonials->pdf) }}">{{ asset($testimonials->pdf) }}</a>
    </div>
    @endif
    <div class="mb-3">
        <label for="pdf" class="form-label text-dark"> New pdf</label>
        <input type="file" class="form-control border border-black w-full" id="pdf" name="pdf" accept="pdf/*">
    </div>

    

    @if ($testimonials->image_path)
    <div class="mb-3">
        <label class="form-label">old image</label>
        <br />
        <img src="{{ asset($testimonials->image_path) }}" alt="pic"
            style="max-width: 100px; max-height: 100px;">
    </div>
    @endif
    <div class="mb-3">
        <label for="image" class="form-label text-dark"> New Image (580 × 500 px)</label>
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