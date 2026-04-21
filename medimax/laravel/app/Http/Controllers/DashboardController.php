<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $banners = Banner::count();
        $blogs = Blogs::count();
        $Product = Product::count();
        $news = News::count();
        return view('dashboard', compact(  'banners', 'blogs', 'Product' , 'news'));
    }
}