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
    $processSteps = ProcessStep::orderBy('sequence', 'asc')->get();

   

    return view('frontend.index', compact('banners', 'blog', 'amenities', 'categories', 'blogs','processSteps' ));
}

    
    

    public function about(){

        return view('frontend.about');
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

    public function Subcategories($id)
    {
        $category = Category::with('subcategories.products')->findOrFail($id);
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
    public function products($categorySlug, $subcategorySlug = null)
    {
        // Fetch the category by slug
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        
        // Fetch the subcategory by slug if it's provided
        if ($subcategorySlug) {
            $subcategory = Subcategory::where('slug', $subcategorySlug)
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
    
    public function productDetail($slug)
    {
        // Fetch the product by slug and include variations
        $product = Product::with('variations')->where('slug', $slug)->firstOrFail();
    
        // Return the product details to the view
        return view('frontend.product-detail', compact('product'));
    }
    
    

    




    
    
    



    
}
