@extends('admin.layout.master')
@section('title', 'Add New Payment Plan')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        @if (session('error'))
                            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                                <strong>{{ session('error') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="heading1 margin_0">
                            <h2>Add New Payment Plan</h2>
                        </div>

                        <div class="container mt-5">
                            <form action="{{ route('add-payment-plan-data') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container">
                                     <!-- Name of Plan -->
                                     <div class="form-group">
                                        <label for="plan_name" class="control-label">Name of Plan</label>
                                        <input class="form-control" name="plan_name" type="text" required placeholder="Enter Name of Plan...">
                                    </div>
                                    <!-- Image Upload -->
                                    <div class="form-group">
                                        <label for="plan_image" class="control-label">Image</label>
                                        <input class="form-control" name="plan_image" type="file" required>
                                    </div>

                                   

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="project_name" class="control-label">Name of Project</label>
                                                <select class="form-control shadow-none" id="project" name="project_id" required>
                                                    <option value="">Select a project</option>
                                                    @foreach($projects as $project)
                                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="type">Select Type:</label>
                                                <select class="form-control shadow-none" id="type" name="type_id" disabled>
                                                    <option value="">Select a type</option>
                                                </select>
                                            </div>
                                        </div>              
                                    </div>
                                    
                                    <!-- Short Description -->
                                    <div class="form-group">
                                        <label for="short_description" class="control-label">10 Words Small Description</label>
                                        <textarea class="form-control" name="short_description" rows="2" required placeholder="Enter Short Description..."></textarea>
                                    </div>

                                    <!-- Large Description -->
                                    <div class="form-group">
                                        <label for="editor1" class="control-label">Large Description</label>
                                        <textarea class="form-control" name="editor1" rows="4" required placeholder="Enter Large Description..."></textarea>
                                    </div>
                                    <!-- Specifications Section -->
                                    <div id="specifications-container">
                                        <div class="card mb-3 specifications-card">
                                            <div class="card-body">
                                                <div class="form-group d-flex justify-content-between align-items-center">
                                                    <h3>Specifications</h3>
                                                    <button type="button" class="btn btn-primary mt-3" id="add-specification">Add More</button>
                                                </div>
                                                <!-- Initial Specification Entry -->
                                                <div class="specification-entry">
                                                    <div class="form-group">
                                                        <label for="specification_heading[]" class="control-label">Specification Heading</label>
                                                        <input class="form-control" name="specification_heading[]" type="text"  placeholder="Enter Specification Heading...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="specification_details[]" class="control-label">Specification Details</label>
                                                        <input class="form-control" name="specification_details[]" type="text"  placeholder="Enter Specification Heading...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
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
                                        const baseUrl = window.location.origin; // Automatically gets the base URL
                                        const fetchUrl = `${baseUrl}/get-project-types/${projectId}`;
                                        console.log('Fetching from URL:', fetchUrl); // Log the URL for debugging

                                        fetch(fetchUrl)
                                            .then(response => {
                                                if (!response.ok) {
                                                    console.error('HTTP error:', response.statusText); // Log HTTP error status
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
                                            .catch(error => console.error('Fetch Error:', error)); // Log fetch errors
                                    }
                                });



                                // Adding specification entries
                                document.getElementById('add-specification').addEventListener('click', function() {
                                    const newSpecification = document.createElement('div');
                                    newSpecification.classList.add('specification-entry');
                                    newSpecification.innerHTML = `
                                        <div class="form-group">
                                            <label for="specification_heading[]" class="control-label">Specification Heading</label>
                                            <input class="form-control" name="specification_heading[]" type="text" required placeholder="Enter Specification Heading...">
                                        </div>
                                        <div class="form-group">
                                            <label for="specification_details[]" class="control-label">Specification Details</label>
                                            <input class="form-control" name="specification_details[]" type="text" required placeholder="Enter Specification Heading...">
                                        </div>
                                        <button  type="button" class="btn btn-danger remove-specification my-2">Remove</button>
                                    `;
                                    document.getElementById('specifications-container').appendChild(newSpecification);
                                });

                                // Event delegation for remove buttons
                                document.getElementById('specifications-container').addEventListener('click', function(e) {
                                    if (e.target.classList.contains('remove-specification')) {
                                        e.target.parentElement.remove();
                                    }
                                });

                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
