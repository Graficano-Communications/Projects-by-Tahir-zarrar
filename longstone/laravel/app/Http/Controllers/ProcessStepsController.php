<?php

namespace App\Http\Controllers;

use App\Models\ProcessStep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProcessStepsController extends Controller
{
    public function view_process_steps()
    {
        $processSteps = ProcessStep::orderBy('sequence')->get();
        return view('admin.process', compact('processSteps'));
    }

    public function add_process_step()
    {
        return view('admin.add-process');
    }

    public function add_process_step_data(Request $request)
    {
        $processStep = new ProcessStep;
        $processStep->caption = $request->input('caption');
        $processStep->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/process-steps/', $filename);
            $processStep->image = $filename;
        }
        $maxSequence = ProcessStep::max('sequence');
        $processStep->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;
        $processStep->save();

        return redirect()->route('all-process-steps')->with('status', 'Process Step Added Successfully');
    }

    public function edit_process_step($id)
    {
        $processStep = ProcessStep::find($id);
        return view('admin.edit-process', compact('processStep'));
    }

    public function edit_process_step_data(Request $request, $id)
    {
        $processStep = ProcessStep::find($id);
        $processStep->caption = $request->input('caption');
        $processStep->description = $request->input('description');
        if ($request->hasFile('image')) {
            $destination = 'uploads/process-steps/' . $processStep->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/process-steps/', $filename);
            $processStep->image = $filename;
        }
        $processStep->update();

        return redirect()->route('all-process-steps')->with('status', 'Process Step Updated Successfully');
    }

    public function delete_process_step($id)
    {
        $processStep = ProcessStep::find($id);
        $destination = 'uploads/process-steps/' . $processStep->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $processStep->delete();

        return redirect()->back()->with('status', 'Process Step Deleted Successfully');
    }

    public function sort_process_step(Request $request)
    {
        $processSteps = array_filter($request->input('data'), function ($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($processSteps as $id) {
            $processStep = ProcessStep::find($id);
            if ($processStep) {
                $processStep->sequence = $i;
                $processStep->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $processSteps]);
    }
}
