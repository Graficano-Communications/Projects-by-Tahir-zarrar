<?php

namespace App\Http\Controllers;

use App\Project;
use App\Models\Service;
use App\Service as AppService;
use Illuminate\Http\Request;
use Exception;


class ProjectController extends Controller
{
    public function create()
    {
        //$clients = Client::pluck('name','id')->all();
        $services = AppService::all();
        return view('admin.department.project', compact('services'));
    }

public function store(Request $request)
{
    //dd($request->all());
    try {
        $data = $request->all();

        if (!isset($data['name']) || !isset($data['url'])) {
            throw new Exception("Required data not provided.");
        }

        $project = new Project();
        $project->name = $data['name'];
        $project->url = $data['url'];
        $project->service_id = $request->service_id;

        if (isset($data['service'])) {
            $project->service = $data['service'];
        }

        if ($request->hasFile('image')) {
            $destinationPath = 'images/projects/';
            $file = $request->file('image');
            $name = date('YmdHis', time()) . mt_rand() . '.webp';
            $file->move($destinationPath, $name);
            $project->image = $name;
        }

        $project->save();

        return redirect()->route('department.department.index') 
            ->with('success_message', 'Project was successfully added.');
    } catch (Exception $exception) {
        return back()->withInput()
            ->withErrors(['unexpected_error' => $exception->getMessage()]);
    }
}
public function edit($id)
{
    $project = Project::find($id);
    $services = AppService::all();
    if (!$project) {
        return redirect()->route('department.department.index')->with('error_message', 'Project not found.');
    }
    return view('admin.department.edit_project', compact('project','services'));
}

public function destroy($id)
{
    $project = Project::find($id);
    if (!$project) {
        return redirect()->route('department.department.index')->with('error_message', 'Project not found.');
    }
    $project->delete();
    return redirect()->route('department.department.index')->with('success_message', 'Project successfully deleted.');
}

public function update(Request $request, $id)
{
    try {
        $project = Project::find($id);
        
        if (!$project) {
            throw new Exception("Project not found.");
        }

        $data = $request->all();

        if (!isset($data['name']) || !isset($data['url'])) {
            throw new Exception("Required data not provided.");
        }

        $project->name = $data['name'];
        $project->url = $data['url'];
        $project->service_id = $request->service_id;

        // if (isset($data['service'])) {
        //     $project->service = $data['service'];
        // }

        if ($request->hasFile('image')) {
            $destinationPath = 'images/projects/';
            $file = $request->file('image');
            $name = date('YmdHis', time()) . mt_rand() . '.webp';
            $file->move($destinationPath, $name);
            $project->image = $name;
        }

        $project->save();

        return redirect()->route('department.department.index') 
            ->with('success_message', 'Project was successfully updated.');
    } catch (Exception $exception) {
        return back()->withInput()
            ->withErrors(['unexpected_error' => $exception->getMessage()]);
    }
}


}
