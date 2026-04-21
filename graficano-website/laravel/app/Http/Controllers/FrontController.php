<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Media;
use App\Models\Blog;
use App\Models\event;
use App\Models\TeamMember;
use App\Models\Client;
use App\Models\Instagram;
use App\Career;
use App\Department;
use App\Service as AppService;
use App\SubService;
use App\Review;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\WelcomeEmail;
use App\Project;
use Carbon\Carbon;
use DB;

class FrontController extends Controller
{
    
      public function review(Request $request)
    {
        //dd($request->all());
        $captcha = $request->input('g-recaptcha-response');
        if (!$captcha) {
            return redirect()->back()->with('error', 'Please complete the reCAPTCHA verification.');
        }

        $secretKey = "6LenC3EpAAAAAGB_a8PLBDD8WZsV-16CVYOjLPAh";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha);
        $responseKeys = json_decode($response, true);

        if (!$responseKeys["success"]) {
            return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
        }

        // Create a new review entry in the database
        Review::create([
            'name' => $request->input('name'),
            'status' => 'draft',
            'email' => $request->input('email'),
            'portfolio' => $request->input('portfolio'),
            'portfolio_id' => $request->input('portfolio_id'),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Review submitted successfully!');
    }

    public function portfolio_reviews()
    {
        $reviews = Review::all();

        return view('admin.reviews', compact('reviews'));
    }

    public function updateStatus(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'id' => 'required|integer|exists:reviews,id',
        //     'status' => 'required|string|in:draft,published',
        // ]);

        // Find the review by ID and update the status
        $review = Review::findOrFail($request->id);
        $review->status = $request->status;
        $review->save();

        // Return a success response
        return response()->json(['message' => 'Status updated successfully!']);
    }
    
    
    public function index()
    {
        $clients = Client::all()->sortBy('sequence');
        $banners = Banner::all()->sortBy('sequence');
        $portfolios = Portfolio::where('featured', 1)->get();
        $instagramPosts = Instagram::all()->sortBy('sequence'); 
        return view('index', compact('clients', 'portfolios', 'instagramPosts', 'banners'));
    }

    public function events()
    {
        $events = event::orderBy('created_at', 'desc')->get();
        return view('events', compact('events'));
    }

    public function about()
    {

        return view('about');
    }
   
    public function all_portfolios()
    {
        $portfolios = Portfolio::all();

        return view('portfolio', compact('portfolios'));
    }
    public function hiring()
    {
        $Careers = Career::paginate(25);
        return view('jobs', compact('Careers'));
    }
    public function hiring_form($job_url)
    {
       
        $Career = Career::where('url', $job_url)->first();
        
        //dd($Career);
        
        if (!$Career) {
            abort(404);
        }

        return view('job_form', compact('Career'));
    }
    public function hiring_form_submit(Request $request)
    {
     
        $validated = Validator::make($request->all(), [
        'job_name' => 'required',
        'candidate_name' => 'required',
        'candidate_email' => 'required|email',
        'candidate_mobile' => 'required',
        'candidate_dob' => 'required',
        'candidate_gender' => 'required',
        'candidate_address' => 'required',
        'candidate_cv' => 'required|mimes:doc,docx,pdf,jpg,jpeg|max:5120',
        'candidate_portfolio' => 'required',
        'candidate_cover_letter' => 'required',
        'candidate_experience' => 'required',
        // 'candidate_last_company' => 'required',
        // 'candidate_last_company_number' => 'required',
        'how_he_hear' => 'required',
        'terms_condition' => 'required',
        'general_policies' => 'required',
    ],[
        'candidate_cv.mimes' => 'The CV must be a file of type: doc, docx, pdf, jpg, jpeg.',
        'candidate_cv.max' => 'The CV must be a file less than 5 MB.',
    ]);

    $dynamicFields = $request->except(['candidate_last_company', 'candidate_last_company_start_date', 'candidate_last_company_end_date', 'candidate_linkedin']);
  
    $validatedData = $validated->getData();
    $emailData = ['data' => array_merge($validatedData, $dynamicFields)];

    if ($validated ->fails()) {
        return redirect()->back()->withErrors($validated)->withInput();
    }
    $captcha = $request->input('g-recaptcha-response');
    if (!$captcha) {
        return redirect()->back()->with('error', 'Please complete the reCAPTCHA verification.');
    }

    $secretKey = "6LdUKSgqAAAAAPzV_ISeCLCWCMKbkGR1hzkRN79B";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha);
    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
    }

     Mail::send('mailtoApplicant', ['candidate_name' => $request->input('candidate_name'),'position'=>$request->input('job_name')], function($message)
      use ($request) {
        $message->from('info@graficano.com', 'Graficano Communications');
        $message->to($request->input('candidate_email'))->subject('Application Submitted at Graficano');
    });

    $adminMessage = '<table border="1">';
    foreach ($emailData['data'] as $key => $value) {
        if ($key === 'g-recaptcha-response' || $key === 'redirect'|| $key === '_token' ) {
            continue;
        }
        $valueAsString = is_array($value) ? implode(', ', $value) : $value;
        $adminMessage .= '<tr><td><b>' . ucfirst(str_replace('_', ' ', $key)) . ':</b></td><td>' . $valueAsString . '</td></tr>';
    }
    $adminMessage .= '</table>';


$candidate_cv = $request->file('candidate_cv');

Mail::html($adminMessage, function($message) use ($request, $candidate_cv) {
    $message->from($request->input('candidate_email'), $request->input('candidate_name'));
    $message->to('info@graficano.com')->subject('New Job Application');
    $message->attach($candidate_cv->getRealPath(), [
        'as' => $candidate_cv->getClientOriginalName(),
        'mime' => $candidate_cv->getClientMimeType()
    ]);
});

return redirect()->route('index');
    }
   public function team()
{
    $teamMembers = TeamMember::where('featured', 1)->get()->sortBy('sequence');
    $teamMembersWithTestimonials = TeamMember::where('featured', 1)
        ->whereNotNull('testimonial')
        ->get()
        ->sortBy('sequence');
        
    return view('team', compact('teamMembers', 'teamMembersWithTestimonials'));
}
public function show1($slug)
{
    $service = AppService::where('slug', $slug)->firstOrFail();

    // Decode JSON fields, handle potential null values
    $clientNames = json_decode($service->c_name, true) ?? [];
    $reviews = json_decode($service->review, true) ?? [];
    $chooseTitles = json_decode($service->choose_title, true) ?? [];
    $chooseDescriptions = json_decode($service->choose_description, true) ?? [];

    // Check if both arrays have the same count
    if (count($clientNames) !== count($reviews)) {
        abort(500, 'Mismatch between client names and reviews count.');
    }

    if (count($chooseTitles) !== count($chooseDescriptions)) {
        abort(500, 'Mismatch between "Why Choose Us" titles and descriptions count.');
    }

    // Fetch additional data as needed
    $departments = Department::where('service_id', $service->id)->get();
    $multimediaProjects = Project::where('service_id', $service->id)->get();

    return view('departments.index', [
        'service' => $service,
        'clientNames' => $clientNames,
        'reviews' => $reviews,
        'chooseTitles' => $chooseTitles,
        'chooseDescriptions' => $chooseDescriptions,
        'departments' => $departments,
        'multimediaProjects' => $multimediaProjects
    ]);
}

// public function show2($slug)
// {
//     $subService = SubService::where('slug', $slug)->firstOrFail();
//     return view('departments.sub-dep', ['subService' => $subService]);
// }

public function show2($serviceSlug, $subServiceSlug)
{
    // Fetch the service based on the serviceSlug
    $service = AppService::where('slug', $serviceSlug)->firstOrFail();

    // Fetch the current sub-service based on the subServiceSlug
    $subService = $service->subServices()->with('faqs')->where('slug', $subServiceSlug)->firstOrFail();

    // Fetch the previous sub-service
    $previousSubService = $service->subServices()
        ->where('id', '<', $subService->id)
        ->orderBy('id', 'desc')
        ->first();

    // Fetch the next sub-service
    $nextSubService = $service->subServices()
        ->where('id', '>', $subService->id)
        ->orderBy('id', 'asc')
        ->first();

    $chooseTitles = json_decode($subService->choose_title, true) ?? [];
    $chooseDescriptions = json_decode($subService->choose_description, true) ?? [];
    $pHead = json_decode($subService->p_head, true) ?? [];
    $pText = json_decode($subService->p_text, true) ?? [];
    $faqs = $subService->faqs; 

    // Return the view with the service and subService data
    return view('departments.sub-dep', compact('service', 'subService', 'chooseTitles', 'chooseDescriptions', 'pHead', 'pText', 'previousSubService', 'nextSubService', 'faqs'));
}




public function customer_policy()
{
    
    return view('customer-policy');
}
public function work_policy()
{
    
    return view('work-policy');
}
public function change_management()
{
    
    return view('change-management');
}


//     public function services()
//     {

//         // Departments
//         $multimediaDepartment = \DB::table('departments')->where('service', 'multimedia')->get();
//         $designDepartment = \DB::table('departments')->where('service', 'design')->get();
//         $webDepartment = \DB::table('departments')->where('service', 'web')->get();
//         $contentDepartment = \DB::table('departments')->where('service', 'content_writing')->get();
//         $printingDepartment = \DB::table('departments')->where('service', 'printing')->get();

//         // Projects
//         $multimediaProjects = \DB::table('projects')->where('service', 'multimedia')->get();
//         $designProjects = \DB::table('projects')->where('service', 'design')->get();
//         $webProjects = \DB::table('projects')->where('service', 'web')->get();
//         $contentProjects = \DB::table('projects')->where('service', 'content_writing')->get();
//         $printingProjects = \DB::table('projects')->where('service', 'printing')->get();

//         return view('departments.index', [
//             // Departments
//             'multimediaDepartment' => $multimediaDepartment,
//             'designDepartment' => $designDepartment,
//             'webDepartment' => $webDepartment,
//             'contentDepartment' => $contentDepartment,
//             'printingDepartment' => $printingDepartment,

//             // Projects
//             'multimediaProjects' => $multimediaProjects,
//             'designProjects' => $designProjects,
//             'webProjects' => $webProjects,
//             'contentProjects' => $contentProjects,
//             'printingProjects' => $printingProjects
//         ]);
//     }

//     public function multimedia()
//     {

//         $multimediaDepartment = \DB::table('departments')->where('service', 'multimedia')->get();

//         $multimediaProjects = \DB::table('projects')->where('service', 'multimedia')->get();

//         return view('departments.multimedia', ['multimediaDepartment' => $multimediaDepartment, 'multimediaProjects' => $multimediaProjects]);
//     }
//     public function content()
//     {
//         $contentDepartment = \DB::table('departments')->where('service', 'content_writing')->get();
//         $contentProjects = \DB::table('projects')->where('service', 'content_writing')->get();
//         return view('departments.content-writing', ['contentDepartment' => $contentDepartment, 'contentProjects' => $contentProjects]);
//     }
//     public function design()
//     {

//         $designDepartment = \DB::table('departments')->where('service', 'design')->get();
//         $designProjects = \DB::table('projects')->where('service', 'design')->get();

//         return view('departments.design', ['designDepartment' => $designDepartment, 'designProjects' => $designProjects]);
//     }
//     public function printing()
//     {

//         $printingDepartment = \DB::table('departments')->where('service', 'printing')->get();
//         $printingProjects = \DB::table('projects')->where('service', 'printing')->get();

//         return view('departments.printing', ['printingDepartment' => $printingDepartment, 'printingProjects' => $printingProjects]);
//     }
//     public function web()
//     {
//         $webDepartment = \DB::table('departments')->where('service', 'web')->get();
//         $webProjects = \DB::table('projects')->where('service', 'web')->get();

//         return view('departments.web', ['webDepartment' => $webDepartment, 'webProjects' => $webProjects]);
//     }

//     public function digitalMarketing()
//     {
//         $webDepartment = \DB::table('departments')->where('service', 'digitalMarketing')->get();
//         $webProjects = \DB::table('projects')->where('service', 'digitalMarketing')->get();

//         return view('departments.digitalMarketing', ['digitalDepartment' => $webDepartment, 'digitalProject' => $webProjects]);
//     }
//     public function smm()
//     {
//         $webDepartment = \DB::table('departments')->where('service', 'smm')->get();
//         $webProjects = \DB::table('projects')->where('service', 'smm')->get();

//         return view('departments.social-media-marketing', ['smmDepartment' => $webDepartment, 'smmProjects' => $webProjects]);
//     }


   
//     public function design_publication()
//     {
//         return view('website-services.design&illustration.design&publication');
//     }
//     public function  icon_illustrations()
//     {
//         return view('website-services.design&illustration.icon&illustrations');
//     }
    
//     public function label_packing()
//     {
//         return view('website-services.design&illustration.label&packing');
//     }
    
//     public function layout_design()
//     {
//         return view('website-services.design&illustration.layout&design');
//     }
   
//     public function logo_design()
//     {
//         return view('website-services.design&illustration.logo&design');
//     }

 
//     public function amazone_seo()
//     {
//         return view('website-services.digitalMarketing.amazone_seo');
//     }
//     public function international_seo()
//     {
//         return view('website-services.digitalMarketing.international_seo');
//     }
//     public function local_seo()
//     {
//         return view('website-services.digitalMarketing.local_seo');
//     }
//     public function offpage_seo()
//     {
//         return view('website-services.digitalMarketing.offpage_seo');
//     }
//     public function onpage_seo()
//     {
//         return view('website-services.digitalMarketing.onpage_seo');
//     }
//     public function ppc_adds()
//     {
//         return view('website-services.digitalMarketing.ppc_adds');
//     }
//     public function technical_seo()
//     {
//         return view('website-services.digitalMarketing.technical_seo');
//     }    public function seo()
//     {
//         return view('website-services.digitalMarketing.seo');
//     }
    

// public function brand_mgt()
// {
//     return view('website-services.smm.brand_mgt');
// }
// public function email_markting()
// {
//     return view('website-services.smm.email_markting');
// }
// public function social_advertisement()
// {
//     return view('website-services.smm.social_advertisement');
// }
  

// public function digital_printing()
// {
//     return view('website-services.printing_packing.digital_printing');
// }
// public function flexography()
// {
//     return view('website-services.printing_packing.flexography');
// }

// public function large_farmat()
// {
//     return view('website-services.printing_packing.large_farmat');
// }

// public function led_uv()
// {
//     return view('website-services.printing_packing.led_uv');
// }

// public function offset_printing()
// {
//     return view('website-services.printing_packing.offset_printing');
// }

// public function documentries()
// {
//     return view('website-services.video_photography.documentries');
// }
// public function screen_printing()
// {
//     return view('website-services.printing_packing.screen_printing');
// }
 

// public function custom_web()
// {
//     return view('website-services.softwareDevelopment.custom_web');
// }
// public function ecommerace()
// {
//     return view('website-services.softwareDevelopment.ecommerace');
// }
// public function mobile_app()
// {
//     return view('website-services.softwareDevelopment.mobile_app');
// }
// public function shopify()
// {
//     return view('website-services.softwareDevelopment.shopify');
// }
// public function web_hoisting()
// {
//     return view('website-services.softwareDevelopment.web_hoisting');
// }
// public function wordpress()
// {
//     return view('website-services.softwareDevelopment.wordpress');
// }

// public function a_plus_content()
// {
//     return view('website-services.video_photography.a_plus_content');
// }
// public function animation_video()
// {
//     return view('website-services.video_photography.animation_video');
// }
// public function drone()
// {
//     return view('website-services.video_photography.drone');
// }
// public function event_mgt()
// {
//     return view('website-services.video_photography.event_mgt');
// }
// public function product_commercial()
// {
//     return view('website-services.video_photography.product_commercial');
// }
// public function product_shoot()
// {
//     return view('website-services.video_photography.product_shoot');
// }public function studio_sound()
// {
//     return view('website-services.video_photography.studio_sound');
// }

    
    public function getqoute()
    {

        return view('quote');
    }
    
    

public function send_quiry(Request $request){
    
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'company' => 'required',
        'country_origin' => 'required',
        'service' => 'required',
        'comment' => 'required',
        'terms_condition' => 'required',
    ]);

 
    $captcha = $request->input('g-recaptcha-response');
    if (!$captcha) {
        return redirect()->back()->with('error', 'Please complete the reCAPTCHA verification.');
    }

    $secretKey = "6LenC3EpAAAAAGB_a8PLBDD8WZsV-16CVYOjLPAh";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $captcha);
    $responseKeys = json_decode($response, true);

    if (!$responseKeys["success"]) {
        return redirect()->back()->with('error', 'reCAPTCHA verification failed. Please try again.');
    }

     Mail::send('mailtoinfo', ['name' => $request->input('name')], function($message) use ($request) {
        $message->from('info@graficano.com', 'Graficano Communications');
        $message->to($request->input('email'))->subject('Welcome! We will contact you shortly');
    });

$adminMessage = '<table border="1">';
$adminMessage .= '<tr><td><b>Email:</b></td><td>' . $request->input('email') . '</td></tr>';
$adminMessage .= '<tr><td><b>Full Name:</b></td><td>' . $request->input('name') . '</td></tr>';
$adminMessage .= '<tr><td><b>Phone:</b></td><td>' . $request->input('phone') . '</td></tr>';
$adminMessage .= '<tr><td><b>Company:</b></td><td>' . $request->input('company') . '</td></tr>';
$adminMessage .= '<tr><td><b>Country Origin:</b></td><td>' . $request->input('country_origin') . '</td></tr>';
$adminMessage .= '<tr><td><b>Service:</b></td><td>' . $request->input('service') . '</td></tr>';
// $adminMessage .= '<tr><td><b>Address:</b></td><td>' . $request->input('address') . '</td></tr>';
$adminMessage .= '<tr><td><b>Message:</b></td><td>' . $request->input('comment') . '</td></tr>';
$adminMessage .= '</table>';

Mail::html($adminMessage, function($message) {
    $message->from(request()->input('email'), request()->input('name'));
    $message->to('info@graficano.com')->subject('New Inquiry');
});

    return redirect()->route('getqoute')->with('success', 'Inquiry Sent Successfully. Our customer representative will contact you soon!');
}




    public function contact()
    {

        return view('contact');
    }
    public function blogs()
    {

        $blogs = Blog::all()->sortBy('sequence');
        // Map over blogs and format date
    $blogs = $blogs->map(function ($blog) {
        // Assuming created_at is in 'd/m/Y g:i A' format
        $blog->formatted_date = Carbon::createFromFormat('d/m/Y g:i A', $blog->created_at)->format('d M Y');
        return $blog;
    });
        return view('blogs', compact('blogs'));
        
    }
  

public function blog_details($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail(); // Fetch the current blog
    $blogs = Blog::where('id', '!=', $blog->id)
    ->orderBy('created_at', 'desc') // recent first
    ->take(3) // fetch only 3
    ->get();

    // Map over blogs and format date
    $blogs = $blogs->map(function ($blog) {
        // Assuming created_at is in 'd/m/Y g:i A' format
        $blog->formatted_date = Carbon::createFromFormat('d/m/Y g:i A', $blog->created_at)->format('d M Y');
        return $blog;
    });

    return view('blog_details', compact('blog', 'blogs'));
}



    public function clients()
    {
        $clients = Client::all()->sortBy('sequence');
        return view('clients', compact('clients'));
    }
    public function pricing($type)
    {
        return view('pricing', compact("type"));
    }
    public function unlock_pricing(Request $request)
    {
        $password = $request->password;
        if ($password = 'June2022') {
            return redirect()->back()->with('gatepass', 'unlockit');
        } else {
            return redirect()->back()->with('error', 'Please Try Again..!');
        }
    }

    public function frontportfolios($service)
    {

        // $portfolios = Portfolio::where('service',$service)->sortBy('sequence');
        $service = str_replace('-', '_', $service);

        $portfolios = DB::table('portfolios')->select("portfolios.*")
            ->whereRaw("find_in_set('" . $service . "',portfolios.service)")->get()->sortBy('sequence');
          

        if ($service == "branding") {
            $service = "Branding";
            $text = "Branding your trade, your idea, your services, or your company we aim to turn your plans into
            realism to accomplish your aspiration.";
            $seo_data = array(
                "title" => "Branding Catalog Designs | logo design ",
                "description" => "We put 100% of our efforts to take your brand in limelight with innovatively designed branding services including catalog designs, brochure, and company profile.",
                "tags" => "branding, packaging, catalog design, logo design"
            );
        } elseif ($service == "printing") {
            $service = "Printing";
            $text = "Offset Printing with the latest techniques like letterpress, Foil, Spot UV with
            enormous innovative styles. Digital printing for catalogs is also available which is quite handy for
            small quantity printings.";
            $seo_data = array(
                "title" => "Printing |Offset & Digital Printing",
                "description" => "Looking for fit-to-need printing services? Graficano incorporates offset and digital printing services. The stationery products and catalog printing align with your requirements at hand.",
                "tags" => "digital printing, printing services near me, printing"
            );
        } elseif ($service == "video_3d") {
            $service = "Video and 3d";
            $text = " Graficano is offering documentaries and manufacturing process videos for improving your corporate
            face. Our team gives importance to flourishing quality documentary culture.";
            $seo_data = array(
                "title" => "Video Editing Services | Video animation | video editing",
                "description" => "Get the amazing experience working with our professional videographers providing out-of-the-box video editing and video animation services. Outsource your videography projects to meet your needs with us.",
                "tags" => "video editing, videography, video editing services, video animation services"
            );
        } elseif ($service == "web_and_digital") {
            $service = "Web and digital";
            $text = " Creating locked-in connections with a target audience may be well-founded
            brand methodologies.Primary services in this department are Shopify, E-commerce, web development, and social media
            management, SEO, PPC, Facebook Pixel, Youtube Ads, and much more.";
            $seo_data = array(
                "title" => "Web development services||Website Design",
                "description" => "Searching for a great hub for web development services? Set your business online and get the lead generation with a fast-speed customized website with SEO services.",
                "tags" => "web development services, website design, SEO services, digital agency"
            );
        } elseif ($service == "packaging") {
            $service = "Packaging";
            $text = "Modern-day packaging is what a product needs to be sold and kept safe.Engineering new packaging
            for various products is what our team is doing. Motivate with modern thoughts of the design and work
            on innovating trendy flairs that meet your desires.";
            $seo_data = array(
                "title" => "packaging |packaging design| logo design",
                "description" => "We understand your brands' demand for packaging & labeling better working on custom designs, unlocking the new ideas and creativity to give your products a unique identification.",
                "tags" => "packaging, logo design, branding, box design"
            );
        } elseif ($service == "photography") {
            $service = "Photography";
            $text = "Experienced photography along with the latest technology
            encompasses professional cameras and lens kits. We provide all kinds of photography services and
            you never have to rely on stock or borrowed imagery.";
            $seo_data = array(
                "title" => "Photography | outdoor photography | photo editing | digital agency",
                "description" => "Graficano is an advertising agency that deals with in-house professional photographers having a deep knowledge of outdoor photography and indoor photography editing.",
                "tags" => "photography outdoor, photography, indoor photography editing, digital marketing services "
            );
        } else {
            $service = "";
            $text = "";
            $seo_data = "";
        }


        return view('portfolio', compact('portfolios', 'service', 'text', 'seo_data'));
    }


      public function details_portfolios($url)
    {

        $portfolio = Portfolio::where('url', $url)->with('client')->first();

        $mediaObjects = media::where('portfolio_id', $portfolio->id)->get()->sortBy('sequence');

        $reviews = Review::where('portfolio_id', $portfolio->id)
        ->where('status', 'published')
        ->get();

        return view('large', compact('portfolio', 'mediaObjects', 'reviews'));
    }
}