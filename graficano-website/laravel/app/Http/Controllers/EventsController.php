<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\event;
use Illuminate\Http\Request;
use Exception;

class EventsController extends Controller
{

    /**
     * Display a listing of the events.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $events = event::paginate(25);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new event.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('events.create');
    }

    /**
     * Store a new event in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // try {
            
            $data = $this->getData($request);

            $event = new event;
            $event->title = $data['title'];
            $event->description = $data['description'];
            $event->location = $data['location'];
            $event->type = $data['type'];
            $event->start_date = $data['start_date'];
            $event->end_date = $data['end_date']; 

            $max_order = event::max('sequence');
            if($max_order){$event->sequence = ++$max_order;}
            else{$event->sequence = 01;}
            
            $images = $request->images;
            if($images){ 
                foreach($images as $key => $img)
                { 
                    $ext = $img->getClientOriginalExtension();                
                    $name = date('YmdHis',time()).mt_rand().".".$ext;        
                    $destinationPathorgin = 'images/events/';
                    $img->move($destinationPathorgin,$name);  
                    $names[] = $name;
                } 
            } 
            $event->images =json_encode($names);
            
            $destinationPath = 'images/events/';

            $file = $request->file('image');
           
            $name = date('YmdHis',time()).mt_rand().'.png';
            $event->thumbnail_image = $name;
            $file->move($destinationPath,$name);

            $event->save(); 

            return redirect()->route('events.event.index')
                ->with('success_message', 'Event was successfully added.');
        // } catch (Exception $exception) {

        //     return back()->withInput()
        //         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        // }
    }

    /**
     * Display the specified event.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $event = event::findOrFail($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified event.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $event = event::findOrFail($id);
        
        

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified event in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        // try {
            
            $data = $this->getupdateData($request);
            $event = event::findOrFail($id);

            $event->title = $data['title'];
            $event->description = $data['description'];
            $event->location = $data['location'];
            $event->type = $data['type'];
            $event->start_date = $data['start_date'];
            $event->end_date = $data['end_date']; 

            $max_order = event::max('sequence');
            if($max_order){$event->sequence = ++$max_order;}
            else{$event->sequence = 01;}
            
            $images = $request->images;
            if($images){ 
                foreach($images as $key => $img)
                { 
                    $ext = $img->getClientOriginalExtension();                
                    $name = date('YmdHis',time()).mt_rand().".".$ext;        
                    $destinationPathorgin = 'images/events/';
                    $img->move($destinationPathorgin,$name);  
                    $names[] = $name;
                } 
                $event->images = json_encode(array_merge(json_decode($event->images),$names)); 
            } 
            
             
            $destinationPath = 'images/events/';
            $file = $request->file('image');
            
            if(empty($file)){
                $event->thumbnail_image = $request->old_image; 
            }else{
                $ext = $file->getClientOriginalExtension(); 
                $name = date('YmdHis',time()).mt_rand().".".$ext; 
                $event->thumbnail_image = $name;
                $file->move($destinationPath,$name);
            }

            $event->update();

            return redirect()->route('events.event.index')
                ->with('success_message', 'Event was successfully updated.');
        // } catch (Exception $exception) {

        //     return back()->withInput()
        //         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        // }        
    }

    /**
     * Remove the specified event from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $event = event::findOrFail($id);
            $event->delete();

            return redirect()->route('events.event.index')
                ->with('success_message', 'Event was successfully deleted.');
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
            'images' => 'required',
            'location' => 'required|string|min:1|max:191',
            'type' => 'required|string|min:1|max:191',
            'start_date' => 'required',
            'end_date' => 'required',
        ];

        
        $data = $request->validate($rules);
        return $data;
    }
    protected function getupdateData(Request $request)
    {
        $rules = [
                'title' => 'required|string|min:1|max:191',
            'description' => 'required|string|min:1|max:4294967295',
            'location' => 'required|string|min:1|max:191',
            'type' => 'required|string|min:1|max:191',
            'start_date' => 'required',
            'end_date' => 'required',
        ];

        
        $data = $request->validate($rules);
        return $data;
    }
    public function del_event_img($image, $id){
        
        $event = event::find($id);
        $imgs = json_decode($event->images); 
       
        if (($key = array_search($image,$imgs)) !== false) {
           unset($imgs[$key]);
         }
       
        $event->images=json_encode(array_values($imgs));
        $event->update();
  
        return redirect()->back();
    }

}
