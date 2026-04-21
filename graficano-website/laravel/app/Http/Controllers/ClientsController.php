<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;

class ClientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the clients.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $clients = Client::all()->sortBy('sequence');

        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new client.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.clients.create');
    }

    /**
     * Store a new client in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    { 
        try {
            
            $data = $this->getData($request);
            
            $client = new Client;
            $client->name = $data['name'];
            $client->url = $data['url'];
            $client->rating = $request->input('rating');
            $client->review = $request->input('review');

            $destinationPath = 'images/clients/';

            $file = $request->file('image');
            $name = date('YmdHis',time()).mt_rand().'.png';
            $client->image = $name;
            $file->move($destinationPath,$name);

            $file2 = $request->file('back_image');
            $name2 = date('YmdHis',time()).mt_rand().'.png';
            $client->back_image = $name2;
            $file2->move($destinationPath,$name2);
            
            $file3 = $request->file('testimonial_image');
if ($file3) {
    $name3 = date('YmdHis', time()) . mt_rand() . '.png';
    $client->testimonial_image = $name3;
    $file3->move($destinationPath, $name3);
}

            

            $max_order = Client::max('sequence');
            if($max_order){$client->sequence = ++$max_order;}
            else{$client->sequence = 01;}


            $client->save();

            return redirect()->route('clients.client.index')
                ->with('success_message', 'Client was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified client.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);

        return view('admin.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified client.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        

        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified client in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
//     public function update($id, Request $request)
//     {
//         //dd($request->all());

//         try {
        
//             $data = $this->geteditData($request);
            
//             $client = Client::findOrFail($id);
            
//             $client->name = $data['name'];
//             $client->rating = $request->input('rating');
//             $client->review = $request->input('review');

//             $file = $request->file('image');

//             $destinationPath = 'images/clients/';
        
//             if(empty($file)){
//                 $client->image = $request->old_image; 
//             }else{
            
//                 $name = date('YmdHis',time()).mt_rand().'.png';
//                 $client->image = $name;
//                 $file->move($destinationPath,$name);
//             }

//             $back_image = $request->file('back_image');
        
//             if(empty($back_image)){
//                 $client->back_image = $request->old_back_image; 
//             }else{
//                 $name2 = date('YmdHis',time()).mt_rand().'.png';
//                 $client->back_image = $name2;
//                 $back_image->move($destinationPath,$name2);
//             }
//             $testimonial_image = $request->file('testimonial_image');

// if(empty($testimonial_image)){
//     $client->testimonial_image = $request->old_testimonial_image ?? 'default_image.png'; 


// }else{
//     $name3 = date('YmdHis', time()).mt_rand().'.png';
//     $client->testimonial_image = $name3;
//     $testimonial_image->move($destinationPath, $name3);
// }


//             $client->update();

//             return redirect()->route('clients.client.index')
//                 ->with('success_message', 'Client was successfully updated.');
//         } catch (\Exception $exception) {
//         return back()->withInput()
//             ->withErrors(['unexpected_error' => $exception->getMessage()]);
//     }
// }


public function update($id, Request $request)
{
    //dd($request->all());
    try {
        $client = Client::findOrFail($id);

        $client->name = $request->input('name');
        $client->url = $request->input('url');
        $client->rating = $request->input('rating');
        $client->review = $request->input('review');

        $destinationPath = 'images/clients/';

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = date('YmdHis', time()) . mt_rand() . '.webp';
            $client->image = $name;
            $file->move($destinationPath, $name);
        } else {
            $client->image = $request->old_image;
        }

        // Handle back image upload
        if ($request->hasFile('back_image')) {
            $back_image = $request->file('back_image');
            $name2 = date('YmdHis', time()) . mt_rand() . '.webp';
            $client->back_image = $name2;
            $back_image->move($destinationPath, $name2);
        } else {
            $client->back_image = $request->old_back_image;
        }

        // Handle testimonial image upload
        if ($request->hasFile('testimonial_image')) {
            $testimonial_image = $request->file('testimonial_image');
            $name3 = date('YmdHis', time()) . mt_rand() . '.webp';
            $client->testimonial_image = $name3;
            $testimonial_image->move($destinationPath, $name3);
        } else {
            $client->testimonial_image = $request->old_testimonial_image ?? 'default_image.webp';
        }

        $client->update();

        return redirect()->route('clients.client.index')
            ->with('success_message', 'Client was successfully updated.');
    } catch (\Exception $exception) {
        // Log the error
        Log::error('Client update failed', ['exception' => $exception]);

        return back()->withInput()
            ->withErrors(['unexpected_error' => $exception->getMessage()]);
    }
}

    /**
     * Remove the specified client from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->delete();

            return redirect()->route('clients.client.index')
                ->with('success_message', 'Client was successfully deleted.');
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
                'name' => 'required|string|min:1|max:191',
                'image' => 'required', 
                'rating' => 'required|integer|min:1|max:5',
                'review' => 'nullable|string|max:1000',
                'testimonial_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ];

        $data = $request->validate($rules);
        return $data;
    }
    protected function geteditData(Request $request)
    {
        $rules = [
                'name' => 'required|string|min:1|max:191',
                'rating' => 'required|integer|min:1|max:5',
                'review' => 'nullable|string|max:1000',
                'testimonial_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ];

        $data = $request->validate($rules);
        return $data;
    }

    
    public function sort_client(Request $request)
    {
        //dd($request->all());
        $clients = $request->ids; // Get the ids from the request
        $i = 0;

        foreach ($clients as $id) {
            $client = Client::find($id); 
            // dd($instagramPost);

            // Check if the post exists to avoid potential errors
            if ($client) {
                $client->sequence = $i;
                $client->save();
            }

            $i++;
        }

        return response()->json(['status' => 'success']);
    }

}
