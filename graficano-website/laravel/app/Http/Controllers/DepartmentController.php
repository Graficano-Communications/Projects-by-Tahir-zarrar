<?php

namespace App\Http\Controllers;

use App\Department;
use App\Faq;
use App\Project;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Service as AppService;
use App\SubService;
use Exception;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the de$department.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $services = AppService::all();
        $departments = Department::all()->sortBy('sequence');
        $projects = Project::all()->sortBy('sequence');

        return view('admin.department.index', ['departments' => $departments, 'projects' => $projects, 'services' => $services]);
    }


    public function create()
    {
        //$clients = Client::pluck('name','id')->all();
        $services = AppService::all();

        return view('admin.department.create', ['services' => $services]);
    }


    public function store(Request $request)
    {
        try {
            $data = $request->all();

            if (!isset($data['name'])) {
                throw new Exception("Required data not provided.");
            }

            $department = new Department();
            $department->name = $data['name'];
            $department->service_id = $request->service_id;


            if (isset($data['slug'])) {
                $department->slug = $data['slug'];
            }

            if ($request->hasFile('image')) {
                $destinationPath = 'images/departments/';
                $file = $request->file('image');
                $name = date('YmdHis', time()) . mt_rand() . '.webp';
                $file->move($destinationPath, $name);
                $department->image = $name;
            }
            if (isset($data['description'])) {
                $department->description = $data['description'];
            }

            $department->save();

            return redirect()->route('department.department.index')
                ->with('success_message', 'Department was successfully added.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            $department = Department::findOrFail($id);
            // Delete the department
            $department->delete();

            return redirect()->route('department.department.index')
                ->with('success_message', 'Service was successfully deleted.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }



    public function edit($id)
    {
        $department = Department::find($id);
        $services = AppService::all();
        if (is_null($department)) {
            return redirect()->route('department.department.index')
                ->with('error_message', 'Department not found');
        }

        return view('admin.department.edit', compact('department', 'services')); // Assuming you have an 'edit' view inside a 'department' directory.
    }

    public function update(Request $request, $id)
    {
        try {
            $department = Department::findOrFail($id);

            $data = $request->all();

            if (!isset($data['name'])) {
                throw new Exception("Required data not provided.");
            }

            $department->name = $data['name'];
            $department->service_id = $request->service_id;


            if (isset($data['slug'])) {
                $department->slug = $data['slug'];
            }

            if ($request->hasFile('image')) {
                $destinationPath = 'images/departments/';
                $file = $request->file('image');
                $name = date('YmdHis', time()) . mt_rand() . '.webp';
                $file->move($destinationPath, $name);

                // If you want, you can delete the previous image here to free up space

                $department->image = $name;
            }

            if (isset($data['description'])) {
                $department->description = $data['description'];
            }

            $department->save();

            return redirect()->route('department.department.index')
                ->with('success_message', 'Department was successfully updated.');
        } catch (Exception $exception) {
            return back()->withInput()
                ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }

    // Here we are start Adding Services Dynamically 
    public function Create_service()
    {

        return view('admin.service.create');
    }
    public function addservice(Request $request)
    {
        //dd($request->all());
        {


            $file = $request->file('image');
            $destinationPath = 'images/service';  // Specify your desired directory here
            $filename = $file->getClientOriginalName(); // Get the original filename
            $file->move($destinationPath, $filename);
            $serFile = $request->file('ser_image');
            $destinationPath = 'images/service';
            $serFilename = $serFile->getClientOriginalName();
            $serFile->move($destinationPath, $serFilename);




            $service = new AppService();
            $service->name = $request->name;
            $service->image = $filename;
            $service->ser_image = $serFile;
            $service->heading_1 = $request->heading_1;
            $service->headings = json_encode($request->headings);
            $service->description = $request->description;
            $service->c_name = json_encode($request->c_name);
            $service->review = json_encode($request->review);
            $service->choose_title = json_encode($request->choose_title);
            $service->choose_description = json_encode($request->choose_description);
            $service->m_head = $request->m_head;
            $service->call = $request->call;
            $service->slug = $request->slug;
            $service->meta_title = $request->meta_title;
            $service->meta_description = $request->meta_description;
            $service->about_service = $request->about_service;
            $service->about_desc = $request->about_desc;
            $service->p2_title = $request->p2_title;
            $service->p2_desc = $request->p2_desc;
            $service->p3_title = $request->p3_title;
            $service->p3_desc = $request->p3_desc;

            $maxOrder = AppService::max('sequence');
            $service->sequence = $maxOrder ? ++$maxOrder : 1;
            $service->save();

            return redirect()->route('all-services')->with('success', 'Service added successfully!');
        }
    }
    public function Allservices()
    {
        $services = AppService::orderBy('sequence')->get();


        return view('admin.service.all-service', ['services' => $services]);
    }
    public function Edit_service($id)
    {
        $service = AppService::findOrFail($id);

        // Decode JSON fields for testimonials
        $service->c_name = json_decode($service->c_name, true) ?? [];
        $service->review = json_decode($service->review, true) ?? [];

        // Decode JSON fields for Why Choose Us
        $service->choose_title = json_decode($service->choose_title, true) ?? [];
        $service->choose_description = json_decode($service->choose_description, true) ?? [];

        return view('admin.service.edit', compact('service'));
    }


    public function updateService(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:191',
        //     'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        //     'heading_1' => 'required|string|max:255',
        //     'headings' => 'required|array',
        //     'description' => 'nullable|string',
        //     'slug' => 'nullable|string|max:191',
        //     'meta_title' => 'required|string|max:191',
        //     'meta_description' => 'required|string|max:2147483647',
        // ]);

        $service = AppService::findOrFail($id);
        $service->name = $request->name;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'images/service';  // Specify your desired directory here
            $filename = $file->getClientOriginalName(); // Get the original filename
            $file->move($destinationPath, $filename);
            $service->image = $filename;
        }
        if ($request->hasFile('ser_image')) {
            $file = $request->file('ser_image');
            $destinationPath = 'images/service';  // Specify your desired directory here
            $filename = $file->getClientOriginalName(); // Get the original filename
            $file->move($destinationPath, $filename);
            $service->ser_image = $filename;
        }


        $service->heading_1 = $request->heading_1;
        $service->headings = json_encode($request->headings);
        $service->description = $request->description;
        $service->c_name = json_encode($request->c_name);
        $service->review = json_encode($request->review);
        $service->choose_title = json_encode($request->choose_title);
        $service->choose_description = json_encode($request->choose_description);
        $service->m_head = $request->m_head;
        $service->call = $request->call;
        $service->slug = $request->slug;
        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->sequence = $service->sequence;
        $service->about_service = $request->about_service;
        $service->about_desc = $request->about_desc;
        $service->p2_title = $request->p2_title;
        $service->p2_desc = $request->p2_desc;
        $service->p3_title = $request->p3_title;
        $service->p3_desc = $request->p3_desc;
        $service->save();

        return redirect()->route('all-services')->with('success', 'Service updated successfully!');
    }
    public function destroyservice($id)
    {
        $service = AppService::findOrFail($id);

        // Delete the associated image(s)
        if ($service->image) {
            $imagePath = public_path('images/service/' . $service->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the service record
        $service->delete();

        return redirect()->route('all-services')->with('success', 'Service deleted successfully!');
    }

    public function updateOrder(Request $request)
    {
        $ids = $request->input('service');

        foreach ($ids as $index => $id) {
            $service = AppService::find($id);
            $service->sequence = $index + 1;
            $service->save();
        }

        return response()->json(['message' => 'Order updated successfully!']);
    }

    // Sub Services
    public function Create_subservice()
    {
        $services = AppService::all();
        return view('admin.sub-service.create', ['services' => $services]);
    }

    public function store_subservice(Request $request)
    {
        // Handle the main image upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'images/sub-services';
            $imageName = time() . '-' . $file->getClientOriginalName(); // Ensure unique filename
            $file->move($destinationPath, $imageName);
        }

        // Handle the banner image upload
        $bannerImageName = null;
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $destinationPath = 'images/sub-services/banner';
            $bannerImageName = time() . '-' . $file->getClientOriginalName(); // Ensure unique filename
            $file->move($destinationPath, $bannerImageName);
        }

        // Create the sub-service and assign it to the $subService variable
        $subService = SubService::create([
            'service_id' => $request->service_id,
            'name' => $request->name,
            'p_heading' => $request->p_heading,
            'image' => $imageName,
            'img_alt' => $request->img_alt,
            'banner_image' => $bannerImageName,
            'description' => $request->description,
            's_head' => $request->s_head,
            'headings' => json_encode($request->headings),
            'm_head' => $request->m_head,
            'choose_title' => json_encode($request->choose_title),
            'choose_description' => json_encode($request->choose_description),
            'p_head' => json_encode($request->p_head),
            'p_text' => json_encode($request->p_text),
            'call' => $request->call,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'abt_subservice' => $request->abt_subservice,
            'abt_subdesc' => $request->abt_subdesc,
        ]);

        // Store the FAQs and Answers
        if ($request->has('faq') && $request->has('answer')) {
            foreach ($request->faq as $index => $faq) {
                // Check if answer exists for this faq index
                if (isset($request->answer[$index])) {
                    Faq::create([
                        'sub_service_id' => $subService->id, // Use the created sub-service ID
                        'faq' => $faq,
                        'answer' => $request->answer[$index],
                    ]);
                }
            }
        }

        return redirect()->route('all-sub-services')->with('success', 'Sub-service created successfully!');
    }

    public function All_subservices()
    {
        $services = AppService::with('subservices')->get();

        return view('admin.sub-service.all-sub-service', compact('services'));
    }


    public function edit_subservice($id)
    {
        $subservice = SubService::with('faqs')->findOrFail($id);
        $services = AppService::all();
        $subservice->choose_title = json_decode($subservice->choose_title, true) ?? [];
        $subservice->choose_description = json_decode($subservice->choose_description, true) ?? [];
        $subservice->p_head = json_decode($subservice->p_head, true) ?? [];
        $subservice->p_text = json_decode($subservice->p_text, true) ?? [];
        return view('admin.sub-service.edit', compact('subservice', 'services'));
    }

    public function update_subservice(Request $request, $id)
    {
        // Debug the incoming request data
        //dd($request->all());

        $subservice = SubService::findOrFail($id);

        // Handle the main image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'images/sub-services';
            $imageName = time() . '-' . $file->getClientOriginalName(); // Ensure unique filename
            $file->move($destinationPath, $imageName);
            $subservice->image = $imageName;
        }

        // Handle the banner image
        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $destinationPath = 'images/sub-services/banner';
            $bannerImageName = time() . '-' . $file->getClientOriginalName(); // Ensure unique filename
            $file->move($destinationPath, $bannerImageName);
            $subservice->banner_image = $bannerImageName;
        }

        // Update the subservice fields
        $subservice->update([
            'service_id' => $request->service_id,
            'name' => $request->name,
            'p_heading' => $request->p_heading,
            'img_alt' => $request->img_alt,
            'description' => $request->description,
            's_head' => $request->s_head,
            'headings' => json_encode($request->headings),
            'm_head' => $request->m_head,
            'choose_title' => json_encode($request->choose_title),
            'choose_description' => json_encode($request->choose_description),
            'p_head' => json_encode($request->p_head),
            'p_text' => json_encode($request->p_text),
            'call' => $request->call,
            'slug' => $request->slug,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'abt_subservice' => $request->abt_subservice,
            'abt_subdesc' => $request->abt_subdesc,
        ]);

        // Update FAQs
        // Get current FAQs for comparison
        $existingFaqs = $subservice->faqs;

        // Clear existing FAQs if they need to be removed
        $faqIdsToRemove = [];
        foreach ($existingFaqs as $existingFaq) {
            if (!in_array($existingFaq->faq, $request->faq)) {
                // If the existing FAQ is not in the new request, mark it for deletion
                $faqIdsToRemove[] = $existingFaq->id;
            }
        }

        // Delete old FAQs
        if (!empty($faqIdsToRemove)) {
            Faq::destroy($faqIdsToRemove);
        }

        // Update or create new FAQs
        foreach ($request->faq as $index => $faqText) {
            // Check if the FAQ already exists
            $faq = $existingFaqs->where('faq', $faqText)->first();

            if ($faq) {
                // Update the existing FAQ
                $faq->update([
                    'answer' => $request->answer[$index], // Assuming the answers correspond to the FAQs by index
                ]);
            } else {
                // Create a new FAQ
                Faq::create([
                    'sub_service_id' => $subservice->id, // Assuming this relationship
                    'faq' => $faqText,
                    'answer' => $request->answer[$index],
                ]);
            }
        }

        return redirect()->route('all-sub-services', $subservice->id)->with('success', 'Sub-service updated successfully!');
    }

    public function destroysubservice($id)
    {
        $subservice = SubService::findOrFail($id);

        // Delete associated images if they exist
        if ($subservice->image) {
            $imagePath = public_path('images/sub-services/' . $subservice->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        if ($subservice->banner_image) {
            $bannerImagePath = public_path('images/sub-services/banner/' . $subservice->banner_image);
            if (file_exists($bannerImagePath)) {
                unlink($bannerImagePath);
            }
        }

        $subservice->delete();

        return redirect()->route('all-sub-services')->with('success', 'Sub-service deleted successfully!');
    }
}
