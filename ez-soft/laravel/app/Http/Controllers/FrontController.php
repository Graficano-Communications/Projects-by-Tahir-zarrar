<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //


    public function index()
    {
        $banners = Banner::orderBy('sequence')->get();
        $blog = Blog::orderBy('sequence')->get();

        return view('frontend.index', compact('banners', 'blog'));
    }
    public function about()
    {
        $team = Team::all();
        return view('frontend.about', compact('team'));
    }

    public function contact()
    {

        return view('frontend.contact');
    }
    public function demo()
    {

        return view('frontend.demo');
    }
    public function blog()
    {
        $blogs = Blog::orderBy('sequence')->get();
        return view('frontend.blog', compact('blogs'));
    }

    public function blog_detail($id)
    {
        $blog = Blog::findOrFail($id);
        $otherBlogs = Blog::where('id', '!=', $id)->latest()->get();

        return view('frontend.blog-detail', compact('blog', 'otherBlogs'));
    }
    public function service()
    {
        $services = Service::all(); // Fetch all services
        return view('frontend.service', compact('services'));
    }
    public function service_detail($slug)
    {
        $service = Service::with('characteristics', 'faqs')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('frontend.service-detail', compact('service'));
    }
}
