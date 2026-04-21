<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\compliance;

class CompliancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
         $compliance = compliance::all()->sortBy('sequence');
        return view('admin.compliance.compliances',compact("compliance"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.compliance.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compliance = new compliance;

        $compliance->title = $request->title;
        $compliance->description = $request->description;
        // Get feature image
        $max_order = compliance::max('sequence');
            if($max_order){$compliance->sequence = ++$max_order;}
            else{$compliance->sequence = 01;}
            
        $file = $request->file('image');
        $destinationPath = 'images/compliance';
        $compliance->image = $file->getClientOriginalName();
        $file->move($destinationPath,$file->getClientOriginalName());
        $compliance->save();
          
        return redirect()->route('compliances.index')->with('success','Compliance created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compliance = compliance::where('id', $id)->first();
        return view('admin.compliance.edit',compact("compliance"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $compliance = compliance::find($id);

        $compliance->title = $request->title;
        $compliance->description = $request->description;
        
        $file = $request->file('image');
        if(empty($file)){
           $compliance->image = $request->old_img; 
        }else{
            $destinationPath = 'images/compliance';
            $compliance->image = $file->getClientOriginalName();
            $file->move($destinationPath,$file->getClientOriginalName());
        }

        $compliance->update();
        return redirect()->route('compliances.index')->with('success','Compliance updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compliance = compliance::find($id);
        $compliance->delete();
        return back()->with('success','Compliance deleted successfully!');
    }
    public function sort_compliance(Request $request){
        $compliances = $request->data;
        $i = 0;
        foreach ($compliances as  $id) {
            $compliance = compliance::find($id);
            $compliance->sequence  = $i;
            $compliance->update();
            $i++;
        }
    }
}
