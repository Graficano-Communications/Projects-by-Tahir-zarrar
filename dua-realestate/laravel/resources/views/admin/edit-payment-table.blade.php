@extends('admin.layout.master')
@section('title', 'Edit Payment Plan')
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
                            <h2>Edit Plan Price</h2>
                        </div>

                        <div class="container mt-5">
                            <form action="{{ route('update-payment-table', $paymentPlan->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('POST') <!-- Use PUT method for updating -->
                                <div class="container">
                                     <!-- Name of Plan -->
                                     <div class="form-group">
                                        <label for="plan_name" class="control-label">Raqba(5 Marla, 10 Marla)</label>
                                        <input class="form-control" name="plan_name" type="text" value="{{ old('plan_name', $paymentPlan->plan_name) }}" required placeholder="Enter Name of Plan...">
                                    </div>
                                    <!-- Image Upload -->
                                    <div class="form-group">
                                        <label for="plan_image" class="control-label">Logo</label>
                                        <input class="form-control" name="plan_image" type="file">
                                        <small>Current Image: <img src="{{ asset('uploads/payment_tables/'.$paymentPlan->plan_image) }}" alt="Current Logo" width="100"></small>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class=" col-12">
                                                <label for="project_name" class="control-label">Name of Plan</label>
                                                <select class="form-control shadow-none" id="project" name="paymentplan_id" required>
                                                    <option value="">Select a Plan</option>
                                                    @foreach($payment_plan as $project)
                                                        <option value="{{ $project->id }}" {{ $project->id == $paymentPlan->paymentplan_id ? 'selected' : '' }}>
                                                            {{ $project->plan_name }}
                                                        </option>
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
                                                <!-- Existing Specifications Entries -->
                                                @foreach($specifications as $specification)
                                                <div class="specification-entry">
                                                    <div class="form-group">
                                                        <label for="specification_heading[]" class="control-label">Heading</label>
                                                        <select class="form-control" name="specification_heading[]" required>
                                                            <option value="" disabled>Select payment Plan</option>
                                                            <option value="Down Payment" {{ $specification['heading'] == 'Down Payment' ? 'selected' : '' }}>Down Payment</option>
                                                            <option value="Balloon Payment" {{ $specification['heading'] == 'Balloon Payment' ? 'selected' : '' }}>Balloon Payment</option>
                                                            <option value="Balloting" {{ $specification['heading'] == 'Balloting' ? 'selected' : '' }}>Balloting</option>
                                                            <option value="Possession" {{ $specification['heading'] == 'Possession' ? 'selected' : '' }}>Possession</option>
                                                            <option value="Monthly Installment" {{ $specification['heading'] == 'Monthly Installment' ? 'selected' : '' }}>Monthly Installment</option>
                                                            <option value="60 Monthly Installment" {{ $specification['heading'] == '60 Monthly Installment' ? 'selected' : '' }}>60 Monthly Installment</option>
                                                            <option value="Four Quarterly Installment" {{ $specification['heading'] == 'Four Quarterly Installment' ? 'selected' : '' }}>Four Quarterly Installment</option>
                                                            <option value="20 Quarterly Installment" {{ $specification['heading'] == '20 Quarterly Installment' ? 'selected' : '' }}>20 Quarterly Installment</option>
                                                            <option value="Per Marla Value" {{ $specification['heading'] == 'Per Marla Value' ? 'selected' : '' }}>Per Marla Value</option>
                                                            <option value="Total Amount" {{ $specification['heading'] == 'Total Amount' ? 'selected' : '' }}>Total Amount</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="specification_details[]" class="control-label">Amount</label>
                                                        <input class="form-control" name="specification_details[]" type="text" value="{{ $specification['details'] }}" required placeholder="Enter Amount...">
                                                    </div>
                                                    <button type="button" class="btn btn-danger remove-specification my-2">Remove</button>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Update</button>
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
                                        <select class="form-control" name="specification_heading[]" required>
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
                                        <input class="form-control" name="specification_details[]" type="text" required placeholder="Enter Amount...">
                                    </div>
                                    <button type="button" class="btn btn-danger remove-specification my-2">Remove</button>
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
