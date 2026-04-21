<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Catalogue;
use App\Models\Category;
use App\Models\ProcessStep;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //


    public function index()
    {
        $banners = Banner::orderBy('sequence')->get();
        $blog = Blog::orderBy('sequence')->get();
        $amenities = Amenity::orderBy('sequence')->get();
        $categories = Category::with('subcategories')->orderBy('sequence')->get();
        $blogs = Blog::orderBy('sequence')->get();
        $processSteps = ProcessStep::orderBy('sequence')->get();
    
        return view('frontend.index', compact('banners', 'blog', 'amenities', 'categories', 'blogs', 'processSteps'));
    }
    

    
    

    public function about(){

        return view('frontend.about');
    }
    public function mdr(){

        return view('frontend.mdr');
    }
    public function newsevent()
    {
        $amenities = Amenity::orderBy('sequence')->get(); // Fetch all amenities ordered by sequence
        return view('frontend.news-events', compact('amenities')); // Pass them to the view
    }
    public function catalouge()
    {
        $catalogues = Catalogue::orderBy('sequence')->get();
        return view('frontend.catalouge', compact('catalogues')); // Pass them to the view
    }
    

    public function contact(){

        return view('frontend.contact');
    }

    public function Subcategories($categoryName)
    {
        // Ensure the category name in the database is properly slugged
        $categoryName = str_replace('-', ' ', $categoryName); // Convert hyphens back to spaces if the URL contains slugs

        // Find the category by name (non-slug version)
        $category = Category::where('name', $categoryName)->with('subcategories.products')->firstOrFail();

        return view('frontend.subcategories', compact('category'));
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
    public function products($categoryName, $subcategoryName = null)
    {
       
        // Replace hyphens with spaces for database queries
        $categoryName = str_replace('-', ' ', $categoryName);
    
        // Fetch the category by name
        $category = Category::where('name', $categoryName)->firstOrFail();
    
        if ($subcategoryName) {
            // Replace hyphens with spaces for the subcategory
            $subcategoryName = str_replace('-', ' ', $subcategoryName);
    
            // Fetch the subcategory by name
            $subcategory = Subcategory::where('name', $subcategoryName)
                                       ->where('categories_id', $category->id)
                                       ->firstOrFail();
    
            // Fetch products for the given category and subcategory
            $products = Product::where('category_id', $category->id)
                               ->where('subcategory_id', $subcategory->id)
                               ->with('variations')
                               ->get();
        } else {
            // Fetch all products for the given category
            $products = Product::where('category_id', $category->id)
                               ->with('variations')
                               ->get();
        }
    
        // Fetch all categories to pass to the view
        $categories = Category::with('subcategories')->get();
    
        // Return the view with the category and products
        return view('frontend.product', compact('category', 'categories', 'products'));
    }
      




    
    
    



    
}
