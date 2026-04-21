<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Carbon\Carbon;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Subcategory;
use App\Models\Department;
use App\Models\Blog;
use App\Models\Catalogue;
use App\Models\Portfolio;

class IndexController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('sequence')->get();
        $portfolios = Portfolio::orderBy('sequence')->get();
        $category = Category::orderBy('sequence')->get();
        $Department = Department::orderBy('sequence')->get();
        $featuredProducts = Product::where('featured', true)->orderBy('sequence')->get();
        $blog = Blog::orderBy('sequence')->take(3)->get();


        return view('frontend.index', compact('banners', 'category', 'Department', 'featuredProducts', 'blog', 'portfolios'));
    }
    public function about()
    {

        return view('frontend.about-us');
    }
    public function team()
    {

        return view('frontend.team');
    }
    public function blog()
    {
        $blog = Blog::orderBy('sequence')->get();
        return view('frontend.blog', compact('blog'));
    }
    public function blog_detail($id)
    {
        $blog = Blog::find($id);
        $all_blog = Blog::orderBy('sequence')->get();
        return view('frontend.blog-detail', compact('blog', 'all_blog'));
    }
    public function news()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $currentEvents = Event::where('date', '<=', $currentDate)->orderBy('date', 'desc')->get();
        $upcomingEvents = Event::where('date', '>', $currentDate)->orderBy('date', 'asc')->get();

        return view('frontend.news-events', compact('currentEvents', 'upcomingEvents'));
    }
    public function catalogue()
    {
        $catalogue = Catalogue::orderBy('sequence')->get();
        return view('frontend.catalogues', compact('catalogue'));
    }
    public function download(Request $request)
    {

        $id = $request->input('id');
        $password = $request->input('password');
        // Retrieve the catalogue based on ID
        $catalogue = Catalogue::select('pdf', 'password')->where('id', $id)->first();
        if (!$catalogue) {
            return redirect()->back()->with('message', 'Catalogue not found.');
        }
        // Compare the password
        if ($password === $catalogue->password) {

            $pdfPath = 'uploads/catalogues/' . $catalogue->pdf;

            return response()->download($pdfPath);
        } else {
            return redirect()->back()->with('message', 'Wrong password. Please try again.');
        }
    }
    public function department($id)
    {
        // Fetch the selected department by id (or fail with 404 if not found)
        $department = Department::findOrFail($id);

        // Fetch all departments for the tabs
        $departments = Department::orderBy('sequence')->get();

        return view('frontend.department', compact('department', 'departments', 'id'));
    }


    public function history()
    {

        return view('frontend.history');
    }

    public function product(Request $request)
    {
        // Fetch all categories with ordered subcategories
        $categories = Category::with(['subcategories' => function ($query) {
            $query->orderBy('sequence');
        }])->orderBy('sequence')->get();

        // Fetch products with pagination (12 per page)
        $productsQuery = Product::orderBy('sequence');

        // Check if there is a search query
        if ($request->has('search')) {
            $searchTerm = $request->query('search');
            $productsQuery->where('name', 'like', '%' . $searchTerm . '%');
        }

        // Get paginated products
        $products = $productsQuery->paginate(12);

        return view('frontend.products', compact('products', 'categories'));
    }

    public function category($id)
    {
        // Fetch the selected category and its subcategories in the correct order
        $selectedCategory = Category::with(['subcategories' => function ($query) {
            $query->orderBy('sequence');
        }])->find($id);

        // Fetch all categories with ordered subcategories
        $categories = Category::with(['subcategories' => function ($query) {
            $query->orderBy('sequence');
        }])->orderBy('sequence')->get();

        // Fetch products of the selected category with pagination (12 per page)
        $products = Product::whereHas('subcategory', function ($query) use ($id) {
            $query->where('categories_id', $id);
        })->orderBy('sequence')->paginate(12);

        return view('frontend.products', compact('products', 'categories', 'selectedCategory'));
    }

    public function subcategory($id)
    {
        // Fetch the selected subcategory
        $selectedSubcategory = Subcategory::find($id);

        // Fetch all categories with ordered subcategories
        $categories = Category::with(['subcategories' => function ($query) {
            $query->orderBy('sequence');
        }])->orderBy('sequence')->get();

        // Fetch products of the selected subcategory with pagination (12 per page)
        $products = Product::where('subcategory_id', $id)->orderBy('sequence')->paginate(12);

        return view('frontend.products', compact('products', 'categories', 'selectedSubcategory'));
    }

    public function detailindex($id)
    {
        $product = Product::find($id);
        $productImages = ProductImage::where('product_id', $id)->get();

        return view('frontend.product-detail', compact('product', 'productImages'));
    }

    public function dashboard()
    {

        return view('admin.index');
    }
}
