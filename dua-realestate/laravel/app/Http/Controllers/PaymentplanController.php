<?php

namespace App\Http\Controllers;

use App\Models\Paymentplan;
use App\Models\Project;
use App\Models\Protype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PaymentplanController extends Controller
{
    // Display all payment plans
    public function index()
    {
        // Fetch all payment plans
        $paymentPlans = Paymentplan::with('project', 'protype')->get();

        // Return the view with the payment plans data
        return view('admin.payment-plans', compact('paymentPlans'));
    }

public function add_payment_plan()
{
    // Retrieve all projects
    $projects = Project::all();

    // Pass data to the view
    return view('admin.add-payment-plan', compact('projects'));
}

public function getTypes($projectId)
{
    $types = Protype::where('project_id', $projectId)->get(['id', 'type']); 
    return response()->json($types);
}


    // Store a new payment plan
    public function store_payment_plan(Request $request)
{

    // Create a new payment plan
    $payment_plan = new Paymentplan(); // Use the correct model here

    // Store the required fields
    $payment_plan->plan_name = $request->input('plan_name');
    $payment_plan->project_id = $request->input('project_id');
    $payment_plan->protype_id = $request->input('type_id');
    $payment_plan->short_description = $request->input('short_description');
    $payment_plan->large_description = $request->input('editor1'); // Assuming editor1 is for large description

    // Handle image upload if present
    if ($request->hasFile('plan_image')) {
        $file = $request->file('plan_image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/payment_plans/'), $filename);
        $payment_plan->plan_image = $filename; // Save the path in the database
    }

    // Handle specifications
    $specifications = [];
    foreach ($request->input('specification_heading', []) as $key => $heading) {
        // Ensure matching details are present
        if (isset($request->input('specification_details')[$key])) {
            $specifications[] = [
                'heading' => $heading,
                'details' => $request->input('specification_details')[$key],
            ];
        }
    }
    
    // Store specifications as JSON
    $payment_plan->specifications = json_encode($specifications);

    // Set sequence for the payment plan
    $maxSequence = Paymentplan::max('sequence');
    $payment_plan->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;

    // Save the payment plan to the database
    $payment_plan->save();

    return redirect()->route('admin-payment-plans')->with('status', 'Payment Plan Added Successfully');
}


    // Show form for editing an existing payment plan
    public function edit_payment_plan($id)
    {
        $paymentPlan = Paymentplan::findOrFail($id); // Fetch the payment plan by ID
        $projects = Project::all(); // Fetch all projects
        $specifications = json_decode($paymentPlan->specifications, true);
        $projectTypes = Protype::where('project_id', $paymentPlan->project_id)->get();

    
        return view('admin.edit-payment-plan', compact('paymentPlan', 'projects', 'projectTypes','specifications'));
    }
    
    public function update_payment_plan(Request $request, $id)
{
    // Find the existing payment plan
    $payment_plan = Paymentplan::findOrFail($id);

    // Update the required fields
    $payment_plan->plan_name = $request->input('plan_name');
    $payment_plan->project_id = $request->input('project_id');
    $payment_plan->protype_id = $request->input('type_id'); // Ensure to get the correct input for type
    $payment_plan->short_description = $request->input('short_description');
    $payment_plan->large_description = $request->input('editor1'); // Assuming editor1 is for large description

    // Handle image upload if present
    if ($request->hasFile('plan_image')) {
        // Delete the old image if it exists
        if ($payment_plan->plan_image) {
            $oldImagePath = public_path('uploads/payment_plans/' . $payment_plan->plan_image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Remove the old image
            }
        }
        // Upload new image
        $file = $request->file('plan_image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/payment_plans/'), $filename);
        $payment_plan->plan_image = $filename; // Save the new path in the database
    }

    // Handle specifications
    $specifications = [];
    foreach ($request->input('specification_heading', []) as $key => $heading) {
        // Ensure matching details are present
        if (isset($request->input('specification_details')[$key])) {
            $specifications[] = [
                'heading' => $heading,
                'details' => $request->input('specification_details')[$key],
            ];
        }
    }
    
    // Store specifications as JSON
    $payment_plan->specifications = json_encode($specifications);

    // Save the updated payment plan to the database
    $payment_plan->save();

    return redirect()->route('admin-payment-plans')->with('status', 'Payment Plan Updated Successfully');
}


public function delete_payment_plan($id)
{
    // Find the payment plan by ID
    $paymentPlan = Paymentplan::find($id);

    // Check if the payment plan exists
    if (!$paymentPlan) {
        // Optionally, you can return an error response or redirect with a message
        return redirect()->route('admin-payment-plans')->with('status', 'Payment plan not found ');
    }

    // Delete the payment plan
    $paymentPlan->delete();

    // Optionally, you can return a success response or redirect back
    return redirect()->route('admin-payment-plans')->with('status', 'Payment plan deleted successfully');
}

    // Sort payment plans based on sequence
    public function sort_payment_plan(Request $request)
    {
        $payment_plans = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($payment_plans as $id) {
            $payment_plan = Project::find($id);
            if ($payment_plan) {
                $payment_plan->sequence = $i;
                $payment_plan->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $payment_plans]);
    }
}
