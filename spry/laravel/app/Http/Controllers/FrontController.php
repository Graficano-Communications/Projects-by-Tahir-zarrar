<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Catalogue;
use App\Models\Category;
use App\Models\Department;
use App\Models\NewsEvent;
use App\Models\Service;
use App\Models\Subcategory;
use App\Models\Team;

class FrontController extends Controller
{
   public function index()
{
    $banners = Banner::orderBy('sequence')->get();
    $blog = Blog::latest()->limit(3)->get();
    $departments = Department::orderBy('sequence')->get();
    $category = Category::orderBy('sequence')->get();
    $catalouges = Catalogue::latest()->limit(3)->get();

    // ✅ Featured Products
    $featured_products = Service::where('is_featured', 1)
                                ->latest()
                                ->get();

    return view('frontend.index', compact(
        'banners',
        'blog',
        'category',
        'catalouges',
        'departments',
        'featured_products'
    ));
}

    public function about()
    {
        $team = Team::all();

        return view('frontend.about', compact('team'));
    }
    public function compliance()
    {
        return view('frontend.compliance');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function catalouges()
    {
        $catalouges = Catalogue::orderBy('sequence')->get();

        return view('frontend.catalouge', compact('catalouges'));
    }

    public function departments()
    {
        $departments = Department::orderBy('sequence')->get();

        return view('frontend.department', compact('departments'));
    }

    public function news()
    {
        $news = NewsEvent::orderBy('sequence')->get();

        return view('frontend.news', compact('news'));
    }

    public function blog()
    {
        $blogs = Blog::orderBy('sequence')->get();

        return view('frontend.blog', compact('blogs'));
    }

    public function blog_detail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Get previous and next posts by ID
        $prev = Blog::where('id', '<', $blog->id)->orderBy('id', 'desc')->first();
        $next = Blog::where('id', '>', $blog->id)->orderBy('id', 'asc')->first();

        return view('frontend.blog-detail', compact('blog', 'prev', 'next'));
    }

    public function products($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $categories = Category::all();
        $services = $category->services; // This only fetches relevant services

        return view('frontend.product', compact('services', 'category', 'categories'));
    }

    public function productsBySubCategory($categorySlug, $subCategorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        $subCategory = Subcategory::where('slug', $subCategorySlug)
                    ->where('categories_id', $category->id)
                    ->firstOrFail();

        $services = Service::where('category_id', $category->id)
                    ->where('subcategory_id', $subCategory->id)
                    ->get();

        $categories = Category::all();

        return view('frontend.productss', compact('services', 'category', 'subCategory', 'categories'));
    }

    public function productDetail($serviceSlug)
{
    $service = Service::where('slug', $serviceSlug)->firstOrFail();

    $category = $service->category;
    $subCategory = $service->subcategory;

    // ✅ Related Products
    $relatedProducts = Service::where('category_id', $service->category_id)
                                ->where('id', '!=', $service->id)
                                ->latest()
                                ->limit(4)
                                ->get();

    return view('frontend.product-detail', compact(
        'service',
        'category',
        'subCategory',
        'relatedProducts'
    ));
}

    public function download($id)
    {
        $catalogue = Catalogue::findOrFail($id);

        $filePath = ('uploads/catalogues/'.$catalogue->pdf);

        if (file_exists($filePath)) {
            return response()->download($filePath, $catalogue->name.'.pdf');
        } else {
            return redirect()->back()->with('error', 'File not found!');
        }
    }
    
}
