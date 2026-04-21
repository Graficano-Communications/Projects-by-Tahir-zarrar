<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Media;
use App\Models\Blog;
use App\Models\Client;
use DB;

class FrontController extends Controller
{
    public function index(){
       
       $clients = Client::all()->sortBy('sequence');
       return view('index',compact('clients'));

    }

    public function team(){

    	return view('team');
    }
    public function multimedia(){

    	return view('departments.multimedia');
    }
    public function content(){
    	return view('departments.content-writing');
    }
    public function design(){

    	return view('departments.design');
    }
    public function printing(){

    	return view('departments.printing');
    }
    public function web(){

    	return view('departments.web');
    }
    

    public function contact(){

        return view('contact');
    }
    public function blogs(){

        $blogs = Blog::all()->sortBy('sequence');
        return view('blogs',compact('blogs'));
    }
    public function blog_details($slug){
        $blogs = Blog::all()->sortBy('sequence');
        $blog = Blog::where('slug',$slug)->first();
        return view('blog_details',compact('blog','blogs'));
    }
    
    public function clients(){
        $clients = Client::all()->sortBy('sequence');
        return view('clients',compact('clients'));
    }
    public function pricing($type){
        return view('pricing',compact("type"));
    }
    public function unlock_pricing(Request $request){
		$password = $request->password;
		if($password = 'June2022'){
			return redirect()->back()->with('gatepass','unlockit');
		}else{
			return redirect()->back()->with('error','Please Try Again..!');
		}
	}
 
    public function frontportfolios($service){

    	// $portfolios = Portfolio::where('service',$service)->sortBy('sequence');
        $service = str_replace('-', '_', $service);

        $portfolios = DB::table('portfolios')->select("portfolios.*")
        ->whereRaw("find_in_set('".$service."',portfolios.service)")->get()->sortBy('sequence');
    
        if($service == "branding"){
            $service ="Branding";
            $text="Branding your trade, your idea, your services, or your company we aim to turn your plans into
            realism to accomplish your aspiration. Providing structure for your visualized thoughts to come up
            with quality and stability. At Graficano you will feel further evolution of your existing thoughts
            and ideas and see them converting into reality. We believe a brand is a philosophy and requires
            perfect execution. We are passionate to assist you in accomplishing features almost about what
            you're making effort. If you are eager enough to make your name on the top list brand then associate
            with us for a cooperative full-service exposure.";
            $seo_data = array(
                "title" => "Branding Catalog Designs | logo design ",
                "description" => "We put 100% of our efforts to take your brand in limelight with innovatively designed branding services including catalog designs, brochure, and company profile.",
                "tags" => "branding, packaging, catalog design, logo design"
              );

        }elseif($service == "printing"){
            $service ="Printing";
            $text="Printing is also one of our core services. We impart printing with high-quality material usage at
            reasonable prices. . Printing categories incorporate innovative catalogs in line with posters,
            Broachers, attractive visiting cards, stationery, stickers, penaflex, calendars, Buntings, and flyer
            printing service. Offset Printing with the latest techniques like letterpress, Foil, Spot UV with
            enormous innovative styles. Digital printing for catalogs is also available which is quite handy for
            small quantity printings.";
            $seo_data = array(
                "title" => "Printing |Offset & Digital Printing",
                "description" => "Looking for fit-to-need printing services? Graficano incorporates offset and digital printing services. The stationery products and catalog printing align with your requirements at hand.",
                "tags" => "digital printing, printing services near me, printing"
              );

        }elseif($service == "video_3d"){
            $service ="Video and 3d";
            $text=" Graficano is offering documentaries and manufacturing process videos for improving your corporate
            face. Our team gives importance to flourishing quality documentary culture. All related media
            and effects like 3D-Rendering, After effects, Kinetic Typography along with post-production facilities
            will your product service exactly the way you want it.";
            $seo_data = array(
                "title" => "Video Editing Services | Video animation | video editing",
                "description" => "Get the amazing experience working with our professional videographers providing out-of-the-box video editing and video animation services. Outsource your videography projects to meet your needs with us.",
                "tags" => "video editing, videography, video editing services, video animation services"
              );

        }elseif($service == "web_and_digital"){
            $service ="Web and digital";
            $text=" Careful digital marketing turns your trade rank to another level. Giving this benefit extends your
            return to your ventures. Creating locked-in connections with a target audience may be well-founded
            brand methodologies. We are enthusiastic enough to put hard work to supply our valuable customer's
            services through a marketing campaign which offer the assistance they compete and generate revenue.
            Primary services in this department are Shopify, E-commerce, web development, and social media
            management, SEO, PPC, Facebook Pixel, Youtube Ads, and much more.";
            $seo_data = array(
                "title" => "Web development services||Website Design",
                "description" => "Searching for a great hub for web development services? Set your business online and get the lead generation with a fast-speed customized website with SEO services.",
                "tags" => "web development services, website design, SEO services, digital agency"
              );

        }elseif($service == "packaging"){
            $service ="Packaging";
            $text="Modern-day packaging is what a product needs to be sold and kept safe.Engineering new packaging
            for various products is what our team is doing. Motivate with modern thoughts of the design and work
            on innovating trendy flairs that meet your desires. We are masters to absorb our client's
            imaginations. If you want top-notch quality printing and paper engineering then Graficano is the
            best people to bug at. Utilizing trendy techno to give aestheticism to your products.";
            $seo_data = array(
                "title" => "packaging |packaging design| logo design",
                "description" => "We understand your brands' demand for packaging & labeling better working on custom designs, unlocking the new ideas and creativity to give your products a unique identification.",
                "tags" => "packaging, logo design, branding, box design"
              );

        }elseif($service == "photography"){
            $service ="Photography";
            $text="Render the benefit of photography with a bunch of proficient professional photographers who
            attempt to include worth in your work reliably. Experienced photography along with the latest technology
            encompasses professional cameras and lens kits. We provide all kinds of photography services and
            you never have to rely on stock or borrowed imagery. Our proficient team can alter clients'
            dissatisfaction by including a captivating point in a photo that can turn it into something that
            stands out and that shows up your brand's devotion to quality. Serving you in taking vibrant
            photos to look back on and retain fresh moments in your life.";
            $seo_data = array(
                "title" => "Photography | outdoor photography | photo editing | digital agency",
                "description" => "Graficano is an advertising agency that deals with in-house professional photographers having a deep knowledge of outdoor photography and indoor photography editing.",
                "tags" => "photography outdoor, photography, indoor photography editing, digital marketing services "
              );

        }else{
            $service ="";
            $text="";
            $seo_data ="";
        }


    	return view('portfolio', compact('portfolios','service','text','seo_data'));
    }


    public function details_portfolios($url){

    	$portfolio = Portfolio::where('url',$url)->with('client')->first();

    	$mediaObjects = media::where('portfolio_id',$portfolio->id)->get()->sortBy('sequence');

    	return view('large',compact('portfolio','mediaObjects'));
    }
}
