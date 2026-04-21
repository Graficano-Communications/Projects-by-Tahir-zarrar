<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\banner;
use App\category;
use App\history;
use App\product;
use App\image;
use App\subcategory;
use App\sub_subcategory;
use App\event;
use App\compliance;
use App\catlog;
use App\page;
use App\brand;
use App\blog;
use App\Team;
use App\Department;
use App\brand_img;
use App\vimeovid;
use App\media;
use App\review;
use PDF;
use Mail;
use Cart;
use App\coupon;
use Carbon;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

  /** 
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */

  public function pass($pas)
  {
    return Hash::make($pas);
  }

  public function local(Request $request)
  {
    return view('local.index');
  }
  public function imgs()
  {
    $images = image::all();
    foreach ($images as $image) {
      $imagenames = array();
      $imgs = json_decode($image->images);
      dd($imgs);
      die;
      foreach ($imgs as $key => $img) {
        if (preg_match('/\..*\./', $img)) {
          $imag = preg_replace('/\\.[^.\\s]{3,4}$/', '', $img);
          $imagenames[] = $imag;
        }
        // rename('images/products/'.$img, 'images/products/'.$img.'.jpg');
        // $imagenames[] = $img.'.jpg';

      }

      $image->images = json_encode($imagenames);
      unset($imagenames);
      $image->update();
    }
  }
  public function index()
  {
    $banners = Banner::all()->sortBy('sequence');
    $blogs = Blog::orderBy('sequence', 'desc')->take(3)->get();
    $categories = Category::all()->sortBy('sequence');
    $departments = Department::orderBy('sequence', 'asc')->take(6)->get();

    return view('index', compact('banners', 'categories', 'blogs', 'departments'));
  }


public function about()
{
    $teams = Team::orderBy('id','asc')->get(); // ya sequence/order_by column ho to us se
    return view('aboutus', compact('teams'));
}

  public function contact()
  {
    return view('contactus');
  }
  public function hs_bat_care()
  {
    return view('hs-bat-care');
  }
  public function reseller()
  {
    return view('reseller');
  }
  public function legal_notice()
  {
    return view('legal-notice');
  }
  public function hs_bat_warranty()
  {
    return view('hs_bat_warranty');
  }

  public function events()
  {
    // return date("Y-m-d H:i:s" , strtotime("-5 days"));
    // $events = event::where('end_date',">",date("Y-m-d H:i:s" , strtotime("-5 days")))->get()->sortBy('sequence');
    $events = event::all();
    // return $events;
    return view('events', compact('events'));
  }
  public function media()
  {
    $vimeos = vimeovid::all()->sortBy('sequence');
    $medias = media::all()->sortBy('sequence');
    return view('media', compact('medias', 'vimeos'));
  }
 public function department()
{
    $departments = Department::orderBy('sequence', 'asc')->get();
    return view('department', compact('departments'));
}
  public function brand_ambassadors()
  {
    $brands = brand::all()->sortBy('sequence');
    return view('brands', compact('brands'));
  }

  public function brand_ambassador($slug)
  {
    $brand = brand::where('slug', $slug)->first();
    $images = brand_img::where('brand_id', $brand->id)->get();
    return view('brand-details', compact('brand', 'images'));
  }

  public function blog_posts()
  {
    $blogs = blog::all();
    return view('blogs', compact('blogs'));
  }

  public function blog_post($slug)
  {
    $blog = blog::where('slug', $slug)->first();
    return view('blog-details', compact('blog'));
  }

  public function page($slug)
  {
    $page = page::where('slug', $slug)->first();
    return view('page', compact('page'));
  }

  public function compliances()
  {
    $compliances = compliance::all()->sortBy('sequence');
    return view('compliances', compact('compliances'));
  }
  public function resources()
  {
    $resources = catlog::all()->sortBy('sequence');
    return view('resources', compact('resources'));
  }
  public function products($slug)
  {
    $category = category::where('slug', $slug)->first();
    $products = product::where('category_id', $category->id)->where('status', 1)->orderBy('price', 'DESC')->paginate(50);
    $subcatgory_name = "";
    return view('products', compact('products', 'category', 'subcatgory_name'));
  }
  public function subcategory()
  {
    return view('subcategory');
  }
  public function admin_login()
  {
    return view('admin.adminlogin');
  }

  //start of prducts logic

  public function get_by_category($cat, $subcat)
  {
    $subcat = subcategory::where('slug', $subcat)->first();
    $data = sub_subcategory::where('sub_category_id', $subcat->id)->get()->sortBy('sequence');
    return view('category', compact('subcat', 'data'));
  }

  public function product_by_category($cat, $subcat)
  {
    $id = subcategory::select('id')->where('slug', $subcat)->first();
    $category = Category::where('slug', $cat)->first();
    $product_id = product::select('id')->where('sub_category_id', $id->id)->first();
    if (!empty($product_id)) {
      // $products = product::where('category_id',$category->id)->orderBy('code','asc')->paginate(12);
      $products = product::where('sub_category_id', $id->id)->where('status', 1)->orderBy('sequence')->paginate(50);
    } else {
      $products = null;
    }
    $subcategory = subcategory::where('slug', $subcat)->first();
    $subcatgory_name = $subcategory->name;

    return view('products', compact('products', 'category', 'subcatgory_name'));
  }

  public function product_by_subcategory($cat, $subsubcat)
  {
    $subsubcat = sub_subcategory::where('slug', $subsubcat)->first();
    $category = Category::where('slug', $cat)->first();
    $product_id = product::select('id')->where('sub_subcategory_id', $subsubcat->id)->first();
    if (!empty($product_id)) {
      $products = product::where('sub_subcategory_id', $subsubcat->id)->where('status', 1)->orderBy('sequence')->paginate(50);
    } else {
      $products = null;
    }
    $subcategory = subcategory::find($subsubcat->sub_category_id);


    $subcatgory_name = $subcategory->name;
    $subsubname =  $subsubcat->name;
    return view('products', compact('products', 'category', 'subcatgory_name', 'subsubname'));
  }


  //end of products logic

  public function new_arrivals()
  {
    $products = product::where('new_arrival', 1)->where('status', 1)->paginate(12);
    $category = "";
    $subcatgory_name = "";
    return view('products', compact('products', 'category', 'subcatgory_name'));
  }

  public function on_sale()
  {
    $products = product::where('sale_price', '>', 0)->paginate(12);
    $category = "";
    $subcatgory_name = "";
    return view('products', compact('products', 'category', 'subcatgory_name'));
  }


  public function get_product($slug, $color)
  {
    $product = product::where('slug', $slug)->where('status', 1)->first();
    $image  = image::where('product_id', $product->id)->where('color', $color)->first();
    return view('single', compact('product', 'image'));
  }
  public function product_by_id($id)
  {
    $data = product::where('id', $id)->first();
    return $data;
  }

  public function downloadcatlog(Request $request)
  {
    $catlog = catlog::select('file', 'password')->where('id', $request->id)->first();
    if (Hash::check($request->password, $catlog->password)) {
      $pdfready = 'images/pdf/' . $catlog->file;
      return response()->download($pdfready);
    } else {
      return redirect()->back()->with('message', 'wrong password .. plz try again');
    }
  }

  public function download()
  {
    $catlog = catlougue::select('file')->where('id', 3)->where('password', 'cardic1234')->first();
    $pdfready = 'images/pdf/' . $catlog->file;
    return response()->download($pdfready);
  }

  public function search(Request $request)
  {
    $input = $request->search_value;

    $product = product::where('name', 'LIKE', '%' . $input . '%')->where('status', 1)->get();

    $category = category::where('name', 'LIKE', '%' . $input . '%')->first();
    $subcategory = subcategory::where('name', 'LIKE', '%' . $input . '%')->first();
    $subsubcategory = sub_subcategory::where('name', 'LIKE', '%' . $input . '%')->first();
    if ($category) {
      $product = product::where('category_id', $category->id)->where('status', 1)->get();
    } elseif ($subcategory) {
      $product = product::where('sub_category_id', $subcategory->id)->where('status', 1)->get();
    } elseif ($subsubcategory) {
      $product = product::where('sub_subcategory_id', $subsubcategory->id)->where('status', 1)->get();
    }


    if (count($product)) {
      return view('search', compact("input", "product"));
    } else {
      return view('search');
    }
  }

  public function SendMail(Request $request)
  {

    $Name = $request->name;
    $Email = $request->email;
    $company_name = $request->company_name;
    $phone = $request->phone;
    $msg = $request->msg;
    $message = 'Email :' . $Email . ' 
        Company Name : ' . $company_name . '
        Phone :' . $phone . ' 
        Message:' . $msg . '';

    Mail::raw($message, function ($message) use ($request) {
      $message->from($request->email, $request->name);
      $message->to('info@bagsbycredo.com', 'Bags By Credo')->subject($request->name);
    });
    return redirect()->route('contact')->with('success', 'Email Sent Successfully');
  }
  public function add_review(Request $request)
  {
    $review = new review;
    $review->name = $request->name;
    $review->email = $request->email;
    $review->title = $request->title;
    $review->description = $request->description;
    $review->product_id = $request->product_id;

    $review->save();
    return redirect()->back();
  }
  public function get_coupon(Request $request, $code)
  {
    $date = Carbon\Carbon::now()->toDateString('Y-m-d');
    // return $date;
    $coupon = coupon::where('code', $code)->where('start_date', '<=', $date)->where('end_date', '>=', $date)->first();



    foreach (Cart::content() as $prod) {

      $product = \App\product::where('id', $prod->id)->first();

      $search =  json_decode($coupon->collections);

      if (in_array($product->sub_category_id, $search)) {

        if ($prod->options->discount) {
          break;
        } else {
          $discount = $coupon->discount;

          if ($prod->options->other_options) {
            Cart::update($prod->rowId, ['options' => ['color' => $prod->options->color, 'image' => $prod->options->image, 'other_options' => $prod->options->other_options, 'discount' => $discount, 'orginal_price' => (int)$prod->price]]);
          } else {
            Cart::update($prod->rowId, ['options' => ['color' => $prod->options->color, 'image' => $prod->options->image, 'discount' => $discount, 'orginal_price' => (int)$prod->price]]);
          }


          if ($coupon->discount_type ==  'Percent' && $coupon->status == 1) {

            $cal_discount = ($prod->price) * ($coupon->discount / 100);
            $price = $prod->price - $cal_discount;
          } else {
            $price = $prod->price - $coupon->discount;
          }
          Cart::update($prod->rowId, ['price' => (int)$price]);
        }
      }
    }

    $data = Cart::content();
    return $data;
  }
}
