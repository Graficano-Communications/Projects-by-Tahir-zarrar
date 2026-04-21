@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        @if (session('error'))
                         <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                             <strong>{{ session('error') }}</strong>
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-h5="Close"></button>
                         </div>
                         @endif
                        <div class="heading1 margin_0">
                            <h2>Update Your Payment Plan</h2>
                         </div>
                         <form action="{{ route('update-payment-plan', $paymentPlan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="card">
                                <div class="card-header">
                                <h5 class="card-title mb-0" for="plan_name">Plan Name:</h5>
                                </div>
                                <div class="card-body">
                                <input type="text" name="plan_name" class="form-control" value="{{ $paymentPlan->plan_name }}" required>
                                </div>
                            </div>
                        
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Plan Image</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="plan_image" class="form-control" id="plan_image">
                                    @if($paymentPlan->plan_image)
                                        <img src="{{ asset('uploads/payment_plans/' . $paymentPlan->plan_image) }}" alt="Current Image" style="width: 100px; margin-top: 10px;">
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <!-- Project Selection -->
                                <div class="col-6">
                                    <div class="card mt-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Select Project</h5>
                                        </div>
                                        <div class="card-body">
                                            <select name="project_id" class="form-control">
                                                @foreach($projects as $project)
                                                    <option value="{{ $project->id }}" {{ $project->id == $paymentPlan->project_id ? 'selected' : '' }}>
                                                        {{ $project->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Type Selection -->
                                <div class="col-6">
                                    <div class="card mt-3">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Select Type</h5>
                                        </div>
                                        <div class="card-body">
                                            <select class="form-control shadow-none" id="type" name="type_id" required>
                                                <option value="">Select a type</option>
                                                @foreach($projectTypes as $type)
                                                    <option value="{{ $type->id }}" {{ $type->id == $paymentPlan->protype_id ? 'selected' : '' }}>{{ 
                                                        $type->type === '1' ? 'Commercial' : 
                                                        ($type->type === '2' ? 'Residential' : 
                                                        ($type->type === '3' ? 'Down Town' : 'Unknown'))
                                                    }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0" for="short_description">Short Description:</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="short_description" class="form-control" value="{{ $paymentPlan->short_description }}" required>
                                </div>
                            </div>
                        
                            <div class="card mt-3">
                                <div class="card-header">
                                <h5 class="card-title mb-0" for="large_description">Large Description:</h5>
                                </div>
                                <div class="card-body">
                                    <label for="editor1" class="control-label">Large Description</label>
                                <textarea name="editor1" class="form-control" required>{!! $paymentPlan->large_description !!}</textarea>
                                </div>
                            </div>
                        
                            <div class="card mt-3" id="specifications-container">
                                <div class="card-header">
                                    <h5 class="px-3 mt-2"  >Specifications:</h5>
                                </div>
                                <div class="card-body">
                                    @if(isset($specifications))
                                        @foreach($specifications as $specification)
                                        <div class="card-body">
                                            <div class="specification-input">
                                                <label for="type">Heading</label>
                                                <input type="text" name="specification_heading[]" class="form-control mb-2 mt-1" value="{{ $specification['heading'] }}"  placeholder="Heading">
                                                <label for="">Details</label>
                                                <input type="text" name="specification_details[]" class="form-control mb-2 mt-1" value="{{ $specification['details'] }}"  placeholder="Details">
                                                <button type="button" class="btn btn-danger remove-specification mb-2">Remove</button>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="text-right mt-3">
                            <button type="button" id="add-specification" class="btn btn-primary">Add Specification</button>
                             </div>
                        
                        
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update Payment Plan</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
          document.addEventListener('DOMContentLoaded', function() {
                                const projectSelect = document.getElementById('project');
                                const typeSelect = document.getElementById('type');

                                projectSelect.addEventListener('change', function() {
                                    const projectId = projectSelect.value;
                                    typeSelect.innerHTML = '<option value="">Select a type</option>';
                                    typeSelect.disabled = true;

                                    if (projectId) {
                                        fetch(`/get-project-types/${projectId}`)
                                            .then(response => {
                                                if (!response.ok) {
                                                    throw new Error('Network response was not ok');
                                                }
                                                return response.json();
                                            })
                                            .then(data => {
                                                if (data.length > 0) {
                                                    typeSelect.disabled = false;
                                                    data.forEach(type => {
                                                        const option = document.createElement('option');
                                                        option.value = type.id;
                                                        option.textContent = 
                                                        type.type === '1' ? 'Commercial' : 
                                                        type.type === '2' ? 'Residential' : 
                                                        type.type === '3' ? 'Down Town' : 
                                                        'Unknown'; // or any default text if type doesn't match any known value
                                                        typeSelect.appendChild(option);
                                                    });
                                                } else {
                                                    const noTypeOption = document.createElement('option');
                                                    noTypeOption.value = "";
                                                    noTypeOption.textContent = "No types available";
                                                    typeSelect.appendChild(noTypeOption);
                                                }
                                            })
                                            .catch(error => console.error('Fetch Error:', error));
                                    }
                                });
                            });


        document.addEventListener('DOMContentLoaded', function() {
    const addSpecificationButton = document.getElementById('add-specification');
    const specificationsContainer = document.getElementById('specifications-container');

    addSpecificationButton.addEventListener('click', function() {
        const specificationDiv = document.createElement('div');
        specificationDiv.className = 'specification-input';

        specificationDiv.innerHTML = `
        <div class="card-body">
            <input type="text" name="specification_heading[]" class="form-control mb-2" required placeholder="Heading">
            <input type="text" name="specification_details[]" class="form-control mb-2" required placeholder="Details">
            <button type="button " class="btn btn-danger remove-specification">Remove</button>    
        </div> 
        `;

        specificationsContainer.appendChild(specificationDiv);
    });

    specificationsContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-specification')) {
            const specificationInput = event.target.closest('.specification-input');
            specificationsContainer.removeChild(specificationInput);
        }
    });
});
    </script>
@endsection


