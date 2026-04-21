@extends('layouts.app')
<link rel="stylesheet" href="/choices.min.css" />

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <span class="pull-left">
            <h4 class="mt-5 mb-5">Create New Production Order</h4>
        </span>
        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('production_order.index') }}" class="btn btn-primary" title="Show All Production Order">
                <span class="fa fa-th-list" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="panel-body">

        <form method="POST" action="{{ route('production_order.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="order_name" class="col-md-2 control-label">Production Order Name</label>
                <div class="col-md-10">
                    <input class="form-control" name="order_name" type="text" id="order_name" minlength="1"
                        maxlength="191" required="true" placeholder="Enter order here..." />
                </div>
            </div>
            <div class="form-group">
                <label for="company_name" class="col-md-2 control-label">Company Name</label>
                <div class="col-md-10">
                    <input class="form-control" name="company_name" type="text" id="company_name" minlength="1"
                        maxlength="191" required="true" placeholder="Enter company name here..." />

                </div>
            </div>
            <div class="form-group">
                <label for="representative_name" class="col-md-2 control-label">Company Representative </label>
                <div class="col-md-10">
                    <input class="form-control" name="representative_name" type="text" id="representative_name"
                        minlength="1" maxlength="191" required="true" placeholder="Enter order here..." />
                </div>
            </div>
            <div class="form-group">
                <label for="designation" class="col-md-2 control-label">Designation </label>
                <div class="col-md-10">
                    <input class="form-control" name="designation" type="text" id="designation" minlength="1"
                        maxlength="191" required="true" placeholder="Enter order here..." />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                    <input class="form-control" name="email" type="text" id="email" minlength="1" maxlength="191"
                        required="true" placeholder="Enter email here..." />

                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-md-2 control-label">Phone</label>
                <div class="col-md-10">
                    <input class="form-control" name="phone" type="text" id="phone" minlength="1" maxlength="191"
                        required="true" placeholder="Enter phone number here..." />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <div id="product-form"></div>
                    <br />
                    <button class="btn btn-primary add-product-btn" type="button">Add Product +</button>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button class="btn btn-primary float-right" type="submit"> Add </button>
                </div>
            </div>
        </form>
    </div>
</div>


<style>
#imageForm {
    display: flex;
    flex-wrap: wrap;
}

input[type="radio"] {
    display: none;
}

/* Style for the image container */
label {
    position: relative;
    display: inline-block;
}

/* Style for the image */
img {
    width: 200px;
    /* Adjust the size of the image */
    height: 200px;
    border: 2px solid transparent;
    transition: border-color 0.3s ease;
    /* Smooth transition for border color */
}

/* Style for the cross icon */
.cross-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: green;
    /* Color of the cross icon */
    font-size: 28px;
    /* Size of the cross icon */
    display: none;
    /* Hide the cross icon by default */
}

/* Show the cross icon when the radio button is checked */
input[type="radio"]:checked+img {
    border-color: green;
    /* Border color of the image when checked */
}

input[type="radio"]:checked+img+.cross-icon {
    display: block;
    /* Show the cross icon when the radio button is checked */
}
</style>
@endsection
@section('specificscripts')
<!-- <script>
$(document).ready(function() {
    let productCount = 0;

    $('.add-product-btn').on('click', function() {
        productCount++;
        let productForm = `
            <div class="card mt-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Product ${productCount}</h5>
                        <button class="btn btn-danger remove-product" type="button">X</button>
                    </div>
                    <div class="form-group">
                        <label for="product-name-${productCount}">Product Name:</label>
                        <input type="text" class="form-control" id="product-name-${productCount}" name="product-name-${productCount}"  required="true">
                    </div>
                    <div class="form-group">
                        <label for="product-image-${productCount}">Product Image:</label>
                        <input type="file" class="form-control-file" id="product-image-${productCount}" name="product-image-${productCount}"  required="true">
                    </div>
                    <div class="form-group angle-images-${productCount}">
                        <label for="product-angle-images-${productCount}">Product Angle Images:</label>
                        <div class="angle-images-container-${productCount}"></div>
                        <button class="btn btn-success add-angle-image" type="button" data-count="${productCount}">Add Angle Image +</button>
                    </div>
                  
                </div>
            </div>
        `;
        $('#product-form').append(productForm);
    });

    $('#product-form').on('click', '.add-angle-image', function() {
        let productCount = $(this).data('count');
        let angleImageInput = `
            <div class="form-group mt-2 d-flex">
                <input type="file" class="form-control-file angle-image-input" name="product-angle-image-${productCount}[]"  required="true">
                <button type="button" class="btn btn-danger remove-angle-image" data-count="${productCount}">X</button>
        
            </div>
        `;
        $(`.angle-images-container-${productCount}`).append(angleImageInput);
    });

    $('#product-form').on('click', '.remove-angle-image', function() {
        $(this).parent().remove();
    });

    $('#product-form').on('click', '.remove-product', function() {
        $(this).closest('.card').remove();
    });

    $('#product-form').on('change', '.angle-image-input', function() {
        let file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                let angleImageBox = `<div class="m-2"><img src="${e.target.result}" class="img-fluid" style="width:80px;height:80px"></div>`;
                $(this).parent().before(angleImageBox);
            }.bind(this);
            reader.readAsDataURL(file);
        }
    });
});
</script> -->

<!-- add to delete the angle images  -->
<!-- <button class="btn btn-danger remove-angle-image" data-count="${productCount}">X</button>  -->


<script src="/choices.min.js"></script>

<script>
$(document).ready(function() {
    let productCount = 0;

    $('.add-product-btn').on('click', function() {
        productCount++;
        let productForm = `
            <div class="card mt-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Product ${productCount}</h5>
                        <button class="btn btn-danger remove-product" type="button">X</button>
                    </div>
                    <div class="form-group">
                        <label for="product-name-${productCount}">Product Name:</label>
                        <input type="text" class="form-control" id="product-name-${productCount}" name="product-name-${productCount}"  required="true">
                    </div>
                    <div class="form-group">
                        <label for="product-image-${productCount}">Product Name:</label>
                        <input type="file" class="form-control-file" id="product-image-${productCount}" name="product-image-${productCount}"  required="true">
                       </div>
                    <div class="form-group">
                    <div>
                        <label for="product-emergency-${productCount}">Emergency Status:&nbsp;&nbsp;  </label>
                        &nbsp;&nbsp;   YES <input type="checkbox" class="" id="product-emergency-${productCount}" name="product-emergency-${productCount}"  >
                      </div>
                        <span style="font-size:12px; color:red !important;">For Emergency the price rate is double</span>
                    
                        </div>
                        <div class="form-group">
                         <label for="photography-type-${productCount}">Choose a Photography type:</label>
                       <select name="photography-type-${productCount}[]" id="photography-type-${productCount}" class="form-control" name="demo-2"  placeholder="This is a placeholder" multiple>
                        <option value="Listing">Listing</option>
                         <option value="Creative">Creative</option>
                         <option value="Outdoor">Outdoor</option>
                         <option value="Coorporate Shoot">Coorporate Shoot</option>
                         <option value="A+ Content">A+ Content</option>
                        <option value="Printing">Printing</option>
                    </select>
                       
                        </div>
                        <div class="form-group">
                        <label> Select Background of the product</label>
                        <div class="form-group" id="imageForm">
                         <label>
         <input type="radio" name="background-${productCount}" value="image1.jpg">
         <img src="https://graficano.com/images/portfolio/202404020642031380180848.jpg" alt="Image 1" >
         <div class="cross-icon"><i class="fa fa-solid fa-check"></i></div>
     </label>
     <label>
         <input type="radio" name="background-${productCount}" value="image2.jpg">
         <img src="https://graficano.com/images/portfolio/202404020642031380180848.jpg" alt="Image 2" >
         <div class="cross-icon"><i class="fa fa-solid fa-check"></i></div>
     </label>
     <label>
         <input type="radio" name="background-${productCount}" value="image3.jpg">
         <img src="https://graficano.com/images/portfolio/202404020642031380180848.jpg" alt="Image 3" >
         <div class="cross-icon"><i class="fa fa-solid fa-check"></i></div>
     </label>
     <label>
         <input type="radio" name="background-${productCount}" value="image4.jpg">
         <img src="https://graficano.com/images/portfolio/202404020642031380180848.jpg" alt="Image 4" >
         <div class="cross-icon"><i class="fa fa-solid fa-check"></i></div>
     </label>
     <label>
         <input type="radio" name="background-${productCount}" value="image5.jpg">
         <img src="https://graficano.com/images/portfolio/202404020642031380180848.jpg" alt="Image 5" >
         <div class="cross-icon"><i class="fa fa-solid fa-check"></i></div>
     </label>
     <label>
         <input type="radio" name="background-${productCount}" value="image5.jpg">
       
         <div class="cross-icon"><i class="fa fa-solid fa-check"></i></div>
     </label>
                    </div>

                    <label class="d-flex">
                    if Other
            <input type="radio" name="background-${productCount}" style="display:block !important" id="customImage-${productCount}" value="custom_image">
        </label>
        <div id="fileInputContainer-${productCount}" style="display:none;">
            <input type="file" name="background-${productCount}">
        </div>

                    </div>
                    <div class="form-group">
                        <label for="canvas-size-${productCount}">Canvas Size:</label>
                        <input type="text" class="form-control" id="canvas-size-${productCount}" name="canvas-size-${productCount}"  required="true">
                    </div>
                    <div class="form-group ">
                        <label for="sample-picking-${productCount}">Sample Picking:</label>
                       
                     &nbsp;&nbsp;
                       <div class="d-flex"> YOU deliever at office    &nbsp;  <input type="radio" value="client office deliver" style="display:block !important"  name="sample-picking-${productCount}"  required="true">
                       </div>
                     &nbsp;&nbsp; <div class="d-flex">  We picked from your company  &nbsp;  <input type="radio" value="we picked" style="display:block !important"  name="sample-picking-${productCount}"  required="true">
                      </div>
                    </div>
  


                    <div class="form-group angle-images-${productCount}">
                    <label for="product-angle-images-${productCount}">How many Product Angles:</label>
                    <div class=" d-flex">
                        <input type="number" class="form-control angle-image-count" id="angle-image-count-${productCount}" name="angle-image-count-${productCount}" placeholder="Enter number"  required="true">
                        <button class="btn  btn-success add-angle-image" type="button" data-count="${productCount}">Add Angle Images</button>
                        </div>
                        <div class="angle-images-container-${productCount}"></div>
                    </div>
                   
                </div>
            </div>
        `;

        $('#product-form').append(productForm);
        new Choices(`#photography-type-${productCount}`, {
            allowSearch: false,
            addItems: true,
            removeItemButton: true,
        });

    });
    $('#product-form').on('change', `input[name^="background-"]`, function() {
        let productCount = $(this).attr('name').split('-').pop();
        if ($(this).val() === 'custom_image') {
            $(`#fileInputContainer-${productCount}`).show();
        } else {
            $(`#fileInputContainer-${productCount}`).hide();
        }
    });

    $('#product-form').on('click', '.remove-product', function() {
        $(this).closest('.card').remove();
    });
    $('#product-form').on('click', '.add-angle-image', function() {
        let productCount = $(this).data('count');
        let angleImageCount = $(`#angle-image-count-${productCount}`).val();
        let angleImageInputs = '';
        for (let i = 0; i < angleImageCount; i++) {
            angleImageInputs += `
                <div class="form-group mt-2 d-flex">
                    <input type="file" class="form-control-file angle-image-input" name="product-angle-image-${productCount}[]"  required="true">
                    </div>
                    `;
        }

        $(`.angle-images-container-${productCount}`).html(angleImageInputs);
    });

    $('#product-form').on('click', '.remove-angle-image', function() {
        $(this).parent().remove();
    });

    $('#product-form').on('click', '.remove-product', function() {
        $(this).closest('.card').remove();
    });

    $('#product-form').on('change', '.angle-image-input', function() {
        let file = this.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                let angleImageBox =
                    `<div class="mt-2"><img src="${e.target.result}" class="img-fluid" style="max-width:20%"></div><hr />`;
                $(this).parent().after(angleImageBox);
            }.bind(this);
            reader.readAsDataURL(file);
        }
    });





});
</script>





<!-- <script>
CKEDITOR.replace('editor1', {
    on: {
        contentDom: function(evt) {
            // Allow custom context menu only with table elemnts.
            evt.editor.editable().on('contextmenu', function(contextEvent) {
                var path = evt.editor.elementPath();

                if (!path.contains('table')) {
                    contextEvent.cancel();
                }
            }, null, null, 5);
        }
    },
    filebrowserUploadUrl: "{{route('pages.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form',
});
</script> -->
@stop