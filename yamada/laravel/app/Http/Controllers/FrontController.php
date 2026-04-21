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
    $blogs = Blog::orderBy('sequence', 'desc')->take(3)->get();
    $processSteps = ProcessStep::orderBy('sequence', 'asc')->get();
    $catalogues = Catalogue::orderBy('sequence')->get();


   

    return view('frontend.index', compact('banners', 'blog', 'amenities', 'categories', 'blogs','processSteps','catalogues' ));
}

    
    

    public function about(){

        return view('frontend.about');
    }
    public function newsevent()
    {
        $today = now()->toDateString();
    
        $allEvents = Amenity::orderBy('sequence')->get();
        $upcomingEvents = Amenity::where('date', '>', $today)->orderBy('date', 'asc')->get();
        $recentEvents = Amenity::where('date', '<=', $today)->orderBy('date', 'desc')->get();
    
        return view('frontend.news-events', compact('allEvents', 'upcomingEvents', 'recentEvents'));
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
        return view('frontend.product', compact('category'));
    }
    


    public function blog() {
        $blogs = Blog::orderBy('sequence')->get();
        return view('frontend.blog', compact('blogs'));
    }
    
    public function blog_detail($id) {
        $blog = Blog::findOrFail($id); // Fetch the current blog
    
        // Get the previous blog (older post)
        $previousBlog = Blog::where('id', '<', $id)->orderBy('id', 'desc')->first();
    
        // Get the next blog (newer post)
        $nextBlog = Blog::where('id', '>', $id)->orderBy('id', 'asc')->first();
    
        return view('frontend.blog-detail', compact('blog', 'previousBlog', 'nextBlog'));
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
    
        // Fetch remaining products except the current one
        $products = Product::where('id', '!=', $product->id)->inRandomOrder()->take(4)->get();
    
        // Return the product details to the view
        return view('frontend.product-detail', compact('product', 'products'));
    }
    
    
    

    




    
    
    



    
}
