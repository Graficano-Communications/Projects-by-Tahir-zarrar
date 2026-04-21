<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Exception;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the media.
     *
     * @return Illuminate\View\View
     */
    public function index($portfolio_id)
    {
        $mediaObjects = media::where('portfolio_id',$portfolio_id)->get()->sortBy('sequence');
    
        return view('admin.media.index', compact('mediaObjects','portfolio_id'));
    }

    /**
     * Show the form for creating a new media.
     *
     * @return Illuminate\View\View
     */
    public function create($id)
    {
        $portfolio = Portfolio::where('id',$id)->first();

        return view('admin.media.create', compact('portfolio'));
    }

    /**
     * Store a new media in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     
    public function store(Request $request)
    {

        
        try {

        $id = $request->portfolio_id;
         
        $types = $request->type;
        foreach (array_keys($types, 'vimeo') as $key) {
            unset($types[$key]);
        }

        
    
        $viemo_links = $request->links;
       if($viemo_links){
       
       foreach ($viemo_links as $key => $value) {
                 $media = new Media;
                 $media->type = 'vimeo';
                 $media->value = $value;
                 $media->portfolio_id = $id;
                 $media->thumbnail = false;
                 $max_order = Media::where('portfolio_id',$id)->max('sequence');
                 if($max_order){$media->sequence = ++$max_order;}
                 else{$media->sequence = 01;}
                 $media->save();
        }}

       
        $images = $request->file('value');
        if($images){
        $values = array_combine($types, $images);
       
        $result = array();

        foreach ($types as $i => $key) {
         $result[] = array($key => $images[$i]);}

        // dd($result);die;
        
       
         foreach ($result as $key => $mediaArray) {
             
         
         foreach($mediaArray as $key => $image)
            {
                
                $media = new Media;
                $media->type = $key;

                $ext = pathinfo($image->getClientOriginalName(), PATHINFO_EXTENSION);
                $name = date('YmdHis',time()).mt_rand().$ext;
                $destinationPath = 'images/portfolio/';
                $media->value =$name;
                $image->move($destinationPath,$name);

                $media->portfolio_id = $id;
                $media->thumbnail = false;

                $max_order = Media::where('portfolio_id',$id)->max('sequence');
                 if($max_order){$media->sequence = ++$max_order;}
                 else{$media->sequence = 01;}

                $media->save();
                 
            }
        }
            } 
  
            return redirect()->route('portfolios.portfolio.show',$id)
                ->with('success_message', 'Media was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }*/
    
    
   
    public function store(Request $request)
{
    //dd($request->all());
    try {
        $portfolioId = $request->portfolio_id;
        $destinationPath = 'images/portfolio/';
        
         // Validation
//       $request->validate([
//     'thumbnail_image' => 'mimes:jpeg,png,jpg,gif,svg,jfif,webp|max:5120',
//   'vimeo_link' => 'nullable|url|regex:/vimeo\.com/',
//     'portrait_images.*' => 'nullable|mimes:jpeg,png,jpg,gif,svg,jfif,webp|max:3072',
//     'landscape_images.*' => 'nullable|mimes:jpeg,png,jpg,gif,svg,jfif,webp|max:3072'
// ]);

        //dd('hi');

        // Handle the thumbnail image.
        if ($request->hasFile('thumbnail_image')) {
            //dd('hi');
            $thumbnailImage = $request->file('thumbnail_image');
            $thumbnailFilename = date('YmdHis') . mt_rand() . '.' . $thumbnailImage->getClientOriginalExtension();
            $thumbnailImage->move($destinationPath, $thumbnailFilename);

            Media::create([
                'type' => 'thumbnail',
                'value' => $thumbnailFilename,
                'thumbnail' => 1,  
                'portfolio_id' => $portfolioId,
                'sequence' => Media::where('portfolio_id', $portfolioId)->max('sequence') + 1
            ]);
        }

        // Handle Vimeo link
        if ($request->has('vimeo_link') && !empty($request->vimeo_link)) {
            Media::create([
                'type' => 'vimeo',
                'value' => $request->vimeo_link, // store the vimeo link
                'thumbnail' => 0, 
                'portfolio_id' => $portfolioId,
                'sequence' => Media::where('portfolio_id', $portfolioId)->max('sequence') + 1
            ]);
        }

        // Handle other images 
        $imageTypes = [ 'Portrait', 'landscape'];
        foreach ($imageTypes as $imageType) {
            if ($request->hasFile($imageType)) {
                foreach ($request->file($imageType) as $image) {
                    $filename = date('YmdHis') . mt_rand() . '.' . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $filename);

                    Media::create([
                        'type' => $imageType,
                        'value' => $filename,
                        'thumbnail' => 0, 
                        'portfolio_id' => $portfolioId,
                        'sequence' => Media::where('portfolio_id', $portfolioId)->max('sequence') + 1,
                    ]);
                }
            }
        }

        return redirect()->route('portfolios.portfolio.show', $portfolioId)
            ->with('success_message', 'Media was successfully added.');

    } catch (\Exception $exception) {
        return back()->withInput()
            ->withErrors(['unexpected_error' => $exception->getMessage()]);
    }
}



    /**
     * Display the specified media.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $media = Media::with('portfolio')->findOrFail($id);

        return view('admin.media.show', compact('media'));
    }

    /**
     * Show the form for editing the specified media.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id,$portfolio_id)
    {
        $media = Media::findOrFail($id);
        $portfolios = Portfolio::pluck('title','id')->all();
        return view('admin.media.edit', compact('media','portfolios','portfolio_id'));
    }

    /**
     * Update the specified media in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {

           
            
            $media = Media::findOrFail($id);

            $type = $request->type;

            $media->type = $type;

            if($type == "vimeo"){

                $media->value = $request->link;
            }else{
                 $file = $request->file('value');
                 if(empty($file)){
                    $media->value = $request->old_img; 
                }else{
                    

                    $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
                    $name = date('YmdHis',time()).mt_rand().$ext;
                    $destinationPath = 'images/portfolio/';
                    $media->value =$name;
                    $file->move($destinationPath,$name);
                }
            }

           
            
            $media->update();
 
            return redirect()->route('portfolios.portfolio.show',$media->portfolio_id)
                ->with('success_message', 'Media was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified media from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $media = Media::findOrFail($id);
            $media->delete();

            return redirect()->route('media.media.index')
                ->with('success_message', 'Media was successfully deleted.');
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
            'type' => 'required|string|min:1|max:191',
            'value' => 'required',
            'portfolio_id' => 'required', 
        ];

        
        $data = $request->validate($rules);

        return $data;
    }

     public function sort_media(Request $request)
    {
        //dd($request->all());
        $medias = $request->ids; // Get the ids from the request
        $i = 0;

        foreach ($medias as $id) {
            $media = Media::find($id); 
            // dd($media);

            // Check if the post exists to avoid potential errors
            if ($media) {
                $media->sequence = $i;
                $media->save();
            }

            $i++;
        }

        return response()->json(['status' => 'success']);
    }

    public function set_thumbnail($id){
        $media = Media::findOrFail($id);
        $all = Media::where('portfolio_id',$media->portfolio_id)->get();
        foreach ($all as  $med) {
            $med->thumbnail  = 0;
            $med->update();
        }
        $media->thumbnail  =  1;
        $media->update();

        return redirect()->back();
    }

}
