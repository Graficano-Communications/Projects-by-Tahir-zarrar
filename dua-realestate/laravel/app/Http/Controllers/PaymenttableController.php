<?php

namespace App\Http\Controllers;

use App\Models\Paymentplan;
use App\Models\Paymenttable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PaymenttableController extends Controller
{
    public function index(){
        $paymentPlans = Paymenttable::all();
        return view('admin.payment-table', compact('paymentPlans'));
    }
    public function add_payment_table()
    {
        $payment_plan = Paymentplan::all();
        return view('admin.add-payment-table',compact('payment_plan'));
    }
    public function store_payment_table(Request $request)
    {

        // Create a new payment plan
        $payment_table = new Paymenttable(); // Use the correct model here
    
        // Store the required fields
        $payment_table->plan_name = $request->input('plan_name');
        $payment_table->paymentplan_id = $request->input('paymentplan_id');
    
        // Handle image upload if present
        if ($request->hasFile('plan_image')) {
            $file = $request->file('plan_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/payment_tables/'), $filename);
            $payment_table->plan_image = $filename; // Save the path in the database
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
        $payment_table->specifications = json_encode($specifications);
    
        // Set sequence for the payment plan
        $maxSequence = Paymentplan::max('sequence');
        $payment_table->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
    
        // Save the payment plan to the database
        $payment_table->save();
    
        return redirect()->route('payment-tables')->with('status', 'Payment Plan Added Successfully');
    }
    public function edit_payment_table($id)
    {
        // Fetch the payment plan by ID
        $paymentPlan = Paymenttable::findOrFail($id);
        $payment_plan = Paymentplan::all();
        // Fetch specifications from the payment table
        $specifications = json_decode($paymentPlan->specifications, true);
    
        // Pass the payment plan and specifications to the view
        return view('admin.edit-payment-table', compact('paymentPlan','payment_plan' ,'specifications'));
    }
    
    
    public function update_payment_table(Request $request, $id)
    {
        $payment_table = Paymenttable::findOrFail($id);

        // Update the required fields
        $payment_table->plan_name = $request->input('plan_name');
        $payment_table->paymentplan_id = $request->input('paymentplan_id');
    
        // Handle image upload if present
        if ($request->hasFile('plan_image')) {
            // Delete the old image if it exists
            if ($payment_table->plan_image) {
                $oldImagePath = public_path('uploads/payment_tables/' . $payment_table->plan_image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Remove the old image
                }
            }
            // Upload new image
            $file = $request->file('plan_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/payment_tables/'), $filename);
            $payment_table->plan_image = $filename; // Save the new path in the database
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
        $payment_table->specifications = json_encode($specifications);
    
        // Save the updated payment plan to the database
        $payment_table->save();
        return redirect()->route('payment-tables')->with('status', 'Payment Plan Added Successfully');
    }
    public function delete_payment_table($id)
    {
        $payment_table = Paymenttable::find($id);
        $destination = 'uploads/payment_tables/'.$payment_table->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $payment_table->delete();
        return redirect()->back()->with('status','Payment Table  Deleted Successfully');
    }
    public function sortPaymenttable(Request $request)
    {
        $PaymenttableIds = $request->input('data');

        // Update sequence based on sorted data
        foreach ($PaymenttableIds as $index => $PaymenttableId) {
            $Paymenttable = Paymenttable::find($PaymenttableId);
            if ($Paymenttable) {
                $Paymenttable->sequence = $index;
                $Paymenttable->save();
            }
        }

        return response()->json(['success' => true]);
    }
}