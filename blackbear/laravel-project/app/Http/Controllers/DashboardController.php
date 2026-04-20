<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $banners = Banner::orderBy('sequence')->get();
        $totalBanners = $banners->count(); // Count the banners
        $blogs = Blog::orderBy('sequence')->get();
        $totalBlogs = $blogs->count(); // Count the total number of blogs
        return view('admin.index', compact('banners', 'totalBanners','blogs', 'totalBlogs'));
    }
    
}
