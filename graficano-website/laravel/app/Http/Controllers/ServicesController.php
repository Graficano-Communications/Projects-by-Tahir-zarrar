<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Exception;

class ServicesController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the services.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $servicesObjects = Service::paginate(25);

        return view('services.index', compact('servicesObjects'));
    }

    /**
     * Show the form for creating a new services.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('services.create');
    }

    /**
     * Store a new services in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
                
            $service = new Service;
            $service->title = $data['title'];

            $name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $data['title']);

            if (strlen(trim($name)) > 0){
                $url = str_replace(' ','-',strtolower($name));
            }else{
                $url = strtolower($name);
            }

            $service->slug = $url;
            $service->description = $data['description'];
         

            $destinationPath = 'images/service/';

            $file = $request->file('image');
           
            $name = date('YmdHis',time()).mt_rand().'.webp';
            $service->image = $name;
            $file->move($destinationPath,$name);

            $file2 = $request->file('banner');
            $name2 = date('YmdHis',time()).mt_rand().'.webp';
            $service->banner = $name2;
            $file2->move($destinationPath,$name2);

            $max_order = service::max('sequence');
            if($max_order){$service->sequence = ++$max_order;}
            else{$service->sequence = 01;}

            $service->meta_title = $data['meta_title'];
            $service->meta_tags = $data['meta_tags'];
            $service->meta_description = $data['meta_description'];
            $service->save(); 

            return redirect()->route('services.services.index')
                ->with('success_message', 'Services was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified services.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $services = Service::findOrFail($id);

        return view('services.show', compact('services'));
    }

    /**
     * Show the form for editing the specified services.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $services = Service::findOrFail($id);
        

        return view('services.edit', compact('services'));
    }

    /**
     * Update the specified services in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        // dd($request->all());
        try {
            
            $data = $this->getData($request);
            
            
            $data = $this->getUpdateData($request);
            
            $service = Service::findOrFail($id);
        
            $service->title = $data['title'];
            $service->slug = $data['slug'];

            $service->description = $data['description'];

            $destinationPath = 'images/service/';

            $file = $request->file('image');
            
            if(empty($file)){
                $service->image = $request->old_image; 
            }else{
                $name = date('YmdHis',time()).mt_rand().'.webp';
                $service->image = $name;
                $file->move($destinationPath,$name);
            }

            $banner = $request->file('banner');
        
            if(empty($banner)){
                $service->banner = $request->old_banner; 
            }else{
                $name2 = date('YmdHis',time()).mt_rand().'.webp';
                $service->banner = $name2;
                $banner->move($destinationPath,$name2);
            }


            $max_order = service::max('sequence');
            if($max_order){$service->sequence = ++$max_order;}
            else{$service->sequence = 01;}

            $service->meta_title = $data['meta_title'];
            $service->meta_tags = $data['meta_tags'];
            $service->meta_description = $data['meta_description'];
          
            $service->update();


            return redirect()->route('services.services.index')
                ->with('success_message', 'Services was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified services from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $service = Services::findOrFail($id);
            $service->delete();

            return redirect()->route('services.services.index')
                ->with('success_message', 'Services was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'title' => 'required|string|min:1|max:191',
                'description' => 'required|string|min:1|max:4294967295',
                'meta_title' => 'nullable|string|min:0|max:191',
                'meta_description' => 'nullable',
                'meta_tags' => 'nullable',
        ];

        
        $data = $request->validate($rules);

        return $data;
    }
    protected function getUpdateData(Request $request)
    {
        $rules = [
                'title' => 'required|string|min:1|max:191',
                'slug' => 'required|string|min:1|max:191',
                'description' => 'required|string|min:1|max:4294967295',
                'meta_title' => 'nullable|string|min:0|max:191',
                'meta_description' => 'nullable',
                'meta_tags' => 'nullable',
        ];

        
        $data = $request->validate($rules);




        return $data;
    }
    public function sort_blog(Request $request){
        $services = $request->data;
        $i = 0;
        foreach ($services as  $id) {
            $service = Services::find($id);
            $service->sequence  = $i;
            $service->update();
            $i++;
        }
    }

}
