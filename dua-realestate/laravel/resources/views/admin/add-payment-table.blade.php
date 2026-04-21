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
                            <h2>Add New Plan Price</h2>
                        </div>

                        <div class="container mt-5">
                            <form action="{{ route('add-payment-table-data') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container">
                                     <!-- Name of Plan -->
                                     <div class="form-group">
                                        <label for="plan_name" class="control-label">Raqba(5 Marla, 10 Marla)</label>
                                        <input class="form-control" name="plan_name" type="text" required placeholder="Enter Name of Plan...">
                                    </div>
                                    <!-- Image Upload -->
                                    <div class="form-group">
                                        <label for="plan_image" class="control-label">Logo</label>
                                        <input class="form-control" name="plan_image" type="file" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class=" col-12">
                                                <label for="project_name" class="control-label">Name of Plan</label>
                                                <select class="form-control shadow-none" id="project" name="paymentplan_id" required>
                                                    <option value="">Select a Plan</option>
                                                    @foreach($payment_plan as $project)
                                                        <option value="{{ $project->id }}">{{ $project->plan_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>              
                                    </div>
                                    <!-- Specifications Section -->
                                    <div id="specifications-container">
                                        <div class="card mb-3 specifications-card">
                                            <div class="card-body">
                                                <div class="form-group d-flex justify-content-between align-items-center">
                                                    <h3>Price</h3>
                                                    <button type="button" class="btn btn-primary mt-3" id="add-specification">Add More</button>
                                                </div>
                                                <!-- Initial Specification Entry -->
                                                <div class="specification-entry">
                                                    <div class="form-group">
                                                        <label for="specification_heading[]" class="control-label">Heading</label>
                                                        <select class="form-control"
                                                            name="specification_heading[]" required>
                                                            <option value="" disabled selected>Select payment Plan
                                                            </option>
                                                            <option value="Down Payment">Down Payment </option>
                                                            <option value="Balloon Payment">Balloon Payment </option>
                                                            <option value="Balloting">Balloting </option>
                                                            <option value="Possession">Possession </option>
                                                            <option value="Monthly Installment">Monthly Installment </option>
                                                            <option value="60 Monthly Installment">60 Monthly Installment </option>
                                                            <option value="Four Quarterly Installment">Four Quarterly Installment </option>
                                                            <option value="20 Quarterly Installment">20 Quarterly Installment </option>
                                                            <option value="Per Marla Value">Per Marla Value </option>
                                                            <option value="Total Amount">Total Amount </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="specification_details[]" class="control-label">Amount</label>
                                                        <input class="form-control" name="specification_details[]" type="text" required placeholder="Enter Specification Heading...">
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
                                // Adding specification entries
                                document.getElementById('add-specification').addEventListener('click', function() {
                                    const newSpecification = document.createElement('div');
                                    newSpecification.classList.add('specification-entry');
                                    newSpecification.innerHTML = `
                                        <div class="form-group">
                                            <label for="specification_heading[]" class="control-label">Select Heading</label>
                                           <select class="form-control"
                                                name="specification_heading[]" required>
                                                <option value="" disabled selected>Select payment Plan
                                                </option>
                                                <option value="Down Payment">Down Payment </option>
                                                <option value="Balloon Payment">Balloon Payment </option>
                                                <option value="Balloting">Balloting </option>
                                                <option value="Possession">Possession </option>
                                                <option value="Monthly Installment">Monthly Installment </option>
                                                <option value="Total Amount">Total Amount </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="specification_details[]" class="control-label">Amount</label>
                                            <input class="form-control" name="specification_details[]" type="text" required placeholder="Enter Amount...">
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

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
