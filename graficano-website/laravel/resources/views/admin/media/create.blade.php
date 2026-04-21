@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">

                    <div class="panel-heading clearfix">

                        <span class="pull-left">
                            <h4 class="mt-5 mb-5">Create New Media in <strong>{{ $portfolio['title'] }}</strong></h4>
                        </span>

                        <div class="btn-group btn-group-sm pull-right" role="group">
                            <a href="{{ route('portfolios.portfolio.show', $portfolio['id']) }}" class="btn btn-primary"
                                title="Show All Media">
                                <span class="fa fa-list" aria-hidden="true"></span>
                            </a>
                        </div>

                    </div>

                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        {{-- 
                        <form method="POST" action="{{ route('media.media.store') }}" accept-charset="UTF-8"
                            id="create_media_form" name="create_media_form" class="form-horizontal"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @include ('admin.media.form', [
                                'media' => null,
                            ])

                            <input type="hidden" name="portfolio_id" value="{{ $portfolio->id }}">

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <input class="btn btn-primary" type="submit" value="Add">
                                </div>
                            </div>

                        </form> --}}

    <form method="POST" action="{{ route('media.media.store') }}" accept-charset="UTF-8" id="create_media_form" name="create_media_form" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="form-group col-12">
            <label class="form-label" for="thumbnail_image">Thumbnail Image 1660 x 930</label>
            <input type="file" name="thumbnail_image" class="form-control" id="thumbnail_image" />
        </div>
    </div>
    
    <div class="row mt-4">
    <div class="form-group col-12">
        <label class="form-label" for="vimeo_link"><h4>Vimeo Video Link</h4></label>
        <input type="text" name="vimeo_link" class="form-control" id="vimeo_link" placeholder="Enter Vimeo video URL" />
    </div>
</div>


    <div class="row">
        <div class="field_wrapper">
            <div>
                <div class="form-group col-12 my-3">
                    <div class="alert alert-danger" role="alert">Add 3 or 2 pictures at a time for better layout on front-end</div>
                    <label class="form-label" for="portrait_images"><h3>Portrait Images 1154 x 1200px</h3></label>
                    <input type="file" name="Portrait[]" multiple class="form-control" id="portrait_images" />

                </div>
            </div>
        </div>
    </div>

    <!-- ... -->

    <div class="row">
        <div class="field_wrapper">
            <div>
                <div class="form-group col-12">
                    <label class="form-label" for="landscape_images"><h4>Landscape Images 3744 x 5616px</h4></label>
                    <input type="file" name="landscape[]" class="form-control" id="landscape_images" />
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="portfolio_id" value="{{ $portfolio->id }}">
    
    <div class="row mt-4">
    <div class="form-group col-12">
        <div class="col-md-offset-2 col-md-10">
            <input class="btn btn-primary" type="submit" value="Save Media">
        </div>
    </div>
</div>


</form>



                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <iframe src="{{ route('details_portfolios', $portfolio->url) }}" width="100%" height="1000"></iframe>
            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var maxField = 20; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML =
                '<div class="field_wrapper"> <div> <div class="form-group col-12"><input type="file" class="form-control" id="customFile" /> </div><a href="javascript:void(0);" class="remove_button2"><i class="fa fa-minus-square"></i></a></div></div>';
    
            var x = 1; //Initial field counter is 1
    
            //Once add button is clicked
            $(addButton).click(function () {
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
    
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button2', function (e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
    
    </script>



@endsection
