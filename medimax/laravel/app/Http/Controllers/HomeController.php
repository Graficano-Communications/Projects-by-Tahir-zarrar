<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use App\Models\Banner;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\News;
use App\Models\Product;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\product_reviews;
use App\Models\ProductExtra;
use App\Models\Subcategory;
use App\Mail\ContactFormMail;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {}



  public function index()
  {
    $banners = Banner::where('status', 'public')->orderBy('sequence')->get();
    $team = Team::where('status', 'public')->orderBy('sequence')->get();

    $recentBlogs = Blogs::where('status', 'public')->orderBy('sequence')->get()->map(function ($blog) {
      $blog->formatted_date = Carbon::parse($blog->created_at)->format('d M');
      return $blog;
    });

    $catalogues = Testimonial::where('feature', '1')->orderBy('sequence')->get();

    $categories = Category::where('status', 'public')->orderBy('sequence')->get();
    $instagramPosts = Team::orderBy('sequence')->get();


    return view('index', compact('team', 'banners', 'recentBlogs', 'catalogues', 'categories', 'instagramPosts'));
  }

  public function show($slug)
  {
    // Fetch the subcategory by its slug
    $subcategory = Subcategory::where('slug', $slug)->firstOrFail();

    $products = $subcategory->products()->where('status', 'public')->paginate(20);
    $categories = Category::where('status', 'public')
      ->withCount(['products' => function ($query) {
        $query->where('status', 'public'); // Count only public products
      }])
      ->orderBy('sequence')
      ->get();



    return view('product-list', compact('subcategory', 'products', 'categories'));
  }

  public function sub($id)
  {

    $category = Category::where('id', $id)->firstOrFail();
    $products = $category->products()->where('status', 'public')->paginate(20);
    $categories = Category::where('status', 'public')
      ->withCount(['products' => function ($query) {
        $query->where('status', 'public'); // Count only public products
      }])
      ->orderBy('sequence')
      ->get();

    //dd($products);

    //dd($subcategories);

    // $category = Category::where('id', $id)->firstOrFail();

    return view('list', compact('category','products', 'categories'));
  }

  public function productsingle($id)
  {

    $products = Product::with('images')->where('id', $id)->firstOrFail();
    $relatedProducts = Product::where('sub_category_id', $products->subCategory->id)
    ->where('id', '!=', $products->id)
    ->where('status', 'public')
    ->take(4)
    ->get();

    //dd($relatedProducts);

    // Pass the product to the view
    return view('product-details', compact('products', 'relatedProducts'));
  }

  public function catalogues()
  {
    $catalogues = Testimonial::orderBy('sequence')->paginate(20);
    return view('catalogues', compact('catalogues'));
  }

  public function checkPassword(Request $request)
  {

    //dd($request->all());
    $request->validate([
      'id' => 'required|integer',
      'password' => 'required|string',
    ]);


    $catalogue = Testimonial::find($request->id);
    //dd($catalogue);

    if ($catalogue && $catalogue->password === $request->password) {

      $pdfPath = public_path($catalogue->pdf);
      if (File::exists($pdfPath)) {
        // Serve the PDF file for download
        return response()->download($pdfPath);
      } else {
        // PDF file does not exist, return an error message
        return back()->withErrors(['pdf' => 'The requested PDF file does not exist.']);
      }
    } else {
      // Password does not match, redirect back with an error message
      return back()->withErrors(['password' => 'Incorrect password. Please try again.']);
    }
  }



  public function header()
  {
    $categories = Category::with(['subcategories' => function ($query) {
      $query->where('status', 'public');
    }])
      ->where('status', 'public')
      ->get();

    return view('includes.header', compact('categories'));
  }



  public function about()
  {
    $portfolio = Portfolio::orderBy('sequence')->get();
    return view('about', compact('portfolio'));
  }
  public function services()
  {
    $service = Team::where('status', 'public')->orderBy('sequence')->get();
    return view('services', compact('service'));
  }

  public function services_detail($slug)
  {
    $service = Team::where('slug', $slug)->firstOrFail();
    return view('service_detail', compact('service'));
  }

  public function portfolio_detail($slug)
  {
    $portfolio = Portfolio::where('slug', $slug)->firstOrFail();
    return view('portfolio_detail', compact('portfolio'));
  }
  public function portfolios()
  {

    $portfolios = Portfolio::where('status', 'public')->with('images')->orderBy('sequence')->get();

    return view('portfolio', compact('portfolios'));
  }




  public function timeline()
  {
    return view('timeline');
  }
  public function  feedback()
  {
    return view('search');
  }
  public function add_product_review(Request $request)
  {

    $request->validate([
      'name' => 'required|string',
      'email' => 'required|email',
      'product_id' => 'required|string',
      'rating' => 'required|string',
      'description' => 'required|string',
      'cf-turnstile-response' => 'required',
    ], [
      'cf-turnstile-response.required' => 'The captcha field is required to send the review of the product.',
    ]);

    $latestSequence = product_reviews::max('sequence') ?? 0;

    $reviewData = [
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'rating' => $request->input('rating'),
      'status' => "private",
      'description' => $request->input('description'),
      'product_id' => $request->input('product_id'),
      'sequence' => $latestSequence + 1,
    ];



    $review = new product_reviews($reviewData);
    $review->save();
    return redirect()->back()->with('success', 'Product Reviews added successfully. Soon the admin wil publish it ASAP.');
  }
  public function feedback_save(Request $request)
  {
    dd($request->all());
    $request->validate([
      'id' => 'required|integer',
      'password' => 'required|string',
    ]);


    $catalogue = Testimonial::find($request->id);


    if ($catalogue && $catalogue->password === $request->password) {
      //dd('here');
      return response()->file($catalogue->pdf);
    } else {
      // If the password is incorrect, redirect back with an error message
      return back()->withErrors(['password' => 'Incorrect password. Please try again.']);
    }
  }


  public function products()
  {
    return view('products');
  }

  public function productdetails($id)
  {

  
    $products = Product::with('images')->where('id', $id)->firstOrFail();
    $relatedProducts = Product::where('sub_category_id', $products->subCategory->id)
    ->where('id', '!=', $products->id)
    ->where('status', 'public')
    ->take(4)
    ->get();

    return view('product-details', compact('products', 'relatedProducts'));
  }
  public function categoryshow($slug)
  {

    $category = Category::where('slug', $slug)->with('subcategories')->firstOrFail();

    return view('Subcat', compact('category'));
  }

  public function showSubcategory($idd, $id)
  {
    $subcategory = Subcategory::where('status', 'public')->orderBy('sequence')->findOrFail($id);
    $products = $subcategory->products()->where('status', 'public')->orderBy('sequence')->paginate(15);

    return view('Subcat', compact('products', 'subcategory'));
  }
  public function blog()
  {
    $blogs = Blogs::where('status', 'public')->orderBy('sequence')->get()->map(function ($blog) {
      $blog->formatted_date = Carbon::parse($blog->created_at)->format('d M');
      return $blog;
    });
    return view('blog', ['blogs' => $blogs]);
  }
  public function blogdetails($id)
  {
    $blog = Blogs::where('status', 'public')->findOrFail($id);
    $recentPosts = Blogs::where('id', '!=', $id)->where('status', 'public')->orderBy('created_at', 'desc')->take(4)->get();
    return view('blog-details', compact('blog', 'recentPosts'));
  }


  public function upcoming()
  {
    $currentDate = Carbon::now();
    $upcomingNews = News::where('date', '>', $currentDate)->where('status', 'public')->orderBy('sequence')->paginate(5);
    return view('upcoming', ['upcomingNews' => $upcomingNews]);
  }

  public function recent()
  {
    $currentDate = Carbon::now();
    $recentNews = News::where('date', '<=', $currentDate)->where('status', 'public')->orderBy('sequence')->paginate(5);
    return view('Recent', ['recentNews' => $recentNews]);
  }

  public function privacypolicy()
  {
    return view('privacy-policy');
  }
  public function terms_condition()
  {
    return view('terms_condition');
  }
  public function termsandconditions()
  {
    return view('privacy-policy');
  }
  public function contact()
  {
    return view('contact');
  }
  public function search(Request $request)
  {
    $query = $request->input('name'); // Using 'name' as the input field in your form
    $products = Product::where(function ($q) use ($query) {
      $q->where('name', 'like', "%$query%")
        ->orWhere('pcode', 'like', "%$query%");
    })
      ->where('status', 'public')
      ->paginate(15);

    return view('search-result', compact('products', 'query'));
  }


  public function submitForm(Request $request)
  {
    // Validate the form data
    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'company' => 'required',
      'phone' => 'required',
      'message' => 'required',
      'cf-turnstile-response' => 'required',
    ], [
      'cf-turnstile-response.required' => 'The captcha field is required.',
    ]);
    //  Cloudflare API endpoint
    $url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    //  Cloudflare secret key
    $secret = '0x4AAAAAAAXsZag5IDHfoYPqy9WbeNcwC_k';

    //  Make a POST request to the Cloudflare API
    $client = new Client();
    $response = $client->request('POST', $url, [
      'form_params' => [
        'secret' => $secret,
        'response' => $request->input('cf-turnstile-response'),
      ],
    ]);
    $body = $response->getBody();
    $data = json_decode($body, true);

    if ($data['success']) {
      try {
        Mail::to('testing_purpose@graficano.com')->send(new ContactFormMail($validatedData));
        return redirect()->route('contact')->with('success', 'Thank you for contacting us. We will get back to you soon.');
      } catch (\Exception $e) {
        return redirect()->route('contact')->with('error', 'Sorry ! Something went wrong.');
      }
    } else {
      return redirect()->route('contact')->with('error', 'Captcha is not validate ! ');
    }
    Mail::to('testing_purpose@graficano.com')->send(new ContactFormMail($validatedData));
    return redirect()->route('contact')->with('success', 'Thank you for contacting us. We will get back to you soon.');
  }
}
