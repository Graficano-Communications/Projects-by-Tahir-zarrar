<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Image;
use App\Models\Paymentplan;
use App\Models\Project;
use App\Models\Protype;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index(){
        $banners = Banner::orderBy('sequence')->get();
        $blog = Blog::orderBy('sequence')->get();
        $projects = Project::with('types')->first();
        $amenities = Amenity::orderBy('sequence')->get();
        $images = Image::orderBy('sequence')->get();
        return view('frontend.index', compact('banners','blog','projects','amenities','images'));
    }

    public function about(){

        return view('frontend.about');
    }
    public function amenities()
    {
        $amenities = Amenity::orderBy('sequence')->get(); // Fetch all amenities ordered by sequence
        return view('frontend.amenities', compact('amenities')); // Pass them to the view
    }
    public function media()
    {
        $images = Image::orderBy('sequence')->get();
        $videos = Video::orderBy('sequence')->get(); 
        return view('frontend.media', compact('images','videos')); // Pass them to the view
    }
    
    
    public function contact(){

        return view('frontend.contact');
    }
    public function blog() {
        $blogs = Blog::orderBy('sequence')->get();
        return view('frontend.blog', compact('blogs'));
    }
    
    public function blog_detail($id) {
        $blog = Blog::findOrFail($id); // Fetch blog by ID or show 404 if not found
        $otherBlogs = Blog::where('id', '!=', $id)->latest()->get();

        return view('frontend.blog-detail', compact('blog', 'otherBlogs'));
    }
    
    public function project($id) {
        // Fetch the project by its ID
        $projects = Project::with('types')->findOrFail($id);
        $additionalImages = json_decode($projects->additional_images) ?? [];
        return view('frontend.project', compact('projects', 'additionalImages'));
    }
    // public function project_detail($id) {
    //     $project_type = Protype::findOrFail($id); 
        
       
    //     $plans = $project_type->paymentplans()->with('paymentTables')->orderBy('sequence')->get();
    //     foreach ($plans as $plan) {
    //         $plan->specifications = json_decode($plan->specifications, true);
    //     }
    //     $paymentTables = $project_type->paymenttables()->orderBy('sequence')->get();
    
    //     foreach ($paymentTables as $table) {
    //         $table->specifications = json_decode($table->specifications, true);
    //         $table->source = 'paymenttables'; 
    //     }
    //     return view('frontend.project-details', compact('project_type', 'plans','paymentTables'));
    // }
    public function project_detail($id)
    {
        $project_type = Protype::findOrFail($id);

        // Fetch plans with associated payment tables
        $plans = $project_type->paymentplans()->with(['paymentTables' => function ($query) {
            $query->orderBy('sequence');
        }])->orderBy('sequence')->get();

        // Decode specifications for each plan and its associated payment tables
        foreach ($plans as $plan) {
            $plan->specifications = json_decode($plan->specifications, true);
            foreach ($plan->paymentTables as $table) {
                $table->specifications = json_decode($table->specifications, true);
            }
        }

        return view('frontend.project-details', compact('project_type', 'plans'));
}

    
    
}
