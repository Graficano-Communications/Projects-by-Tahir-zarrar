<!-- resources/views/admin/inquires/form.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">{{ isset($inquires) ? 'Edit inquires' : 'Add inquires' }}</h2>
</div>

<form method="POST" action="{{  route('inquires.update', $inquires->id)  }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" value="{{ $inquires->name }}"
            required placeholder="Enter name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label text-dark">Email</label>
        <input type="text" class="form-control text-dark" id="email" name="email" value="{{ $inquires->email }}"
            required placeholder="Enter email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label text-dark">Phone</label>
        <input type="text" class="form-control text-dark" id="phone" name="phone" value="{{ $inquires->phone }}"
            required placeholder="Enter phone">
    </div>
    <div class="mb-3">
        <label for="product_name" class="form-label text-dark">Product Name</label>
        <input type="text" class="form-control text-dark" id="product_name" name="product_name" value="{{ $inquires->product_name }}"
            required placeholder="Enter product_name">
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label text-dark">Quantity</label>
        <input type="text" class="form-control text-dark" id="quantity" name="quantity" value="{{ $inquires->quantity }}"
            required placeholder="Enter quantity">
    </div>
   

    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option selected disabled>Select status</option>
            <option value="pending" {{ $inquires->status == "pending" ? 'selected' : '' }}>pending</option>
            <option value="dispatch" {{ $inquires->status == "dispatch" ? 'selected' : '' }}>dispatch</option>
            <option value="completed" {{ $inquires->status == "completed" ? 'selected' : '' }}>completed</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="editor1" class="form-label">Description</label>
        <textarea class="form-control" name="editor1" rows="8" required
            placeholder="Enter description"> {{ $inquires->message }}</textarea>
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
      
        filebrowserUploadMethod: 'form',
    });
});
</script>

@stop