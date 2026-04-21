@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('new_arrival.store') }}" enctype="multipart/form-data" method="post">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" required="" id="name" name="name" placeholder="Enter Product Name">
        </div>

        

        <div class="form-group">
            <label for="qty">Product Image</label>
            <input type="file" class="form-control" id="image" required="" name="image">
        </div>

       <div class="form-group">
    <label for="pdf">Upload PDF</label>
    <input type="file" class="form-control" id="pdf" name="pdf" accept="application/pdf">
</div>

<div class="form-group">
    <label for="pdf_password">Set Password for PDF</label>
    <input type="password" class="form-control" id="pdf_password" name="pdf_password" placeholder="Enter password for the PDF">
</div>

        
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    

    
@endsection
