<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Media;
use Illuminate\Http\Request;
use Exception;
use DB;

class PortfoliosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the portfolios.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $service = "ALL";
        $portfolios = Portfolio::all()->sortBy('sequence');
        return view('admin.portfolios.index', compact('portfolios', 'service'));
    }
    public function portfolio_by_category($service)
    {
        $portfolios = DB::table('portfolios')->select("portfolios.*")
            ->whereRaw("find_in_set('" . $service . "',portfolios.service)")->get()->sortBy('sequence');
        return view('admin.portfolios.index', compact('portfolios', 'service'));
    }

    /**
     * Show the form for creating a new portfolio.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $clients = Client::pluck('name', 'id')->all();

        return view('admin.portfolios.create', compact('clients'));
    }

    /**
     * Store a new portfolio in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        //dd($request->all());
        try {

            $data = $this->getData($request);

            $Portfolio = new Portfolio;
            $name = preg_replace('/[^A-Za-z0-9\-]/', ' ', $data['title']);
            if (strlen(trim($name)) > 0) {
                $Portfolio->url = str_replace(' ', '-', strtolower($name));
                $url = str_replace(' ', '-', strtolower($name));
            } else {
                $Portfolio->url  = strtolower($name);
                $url = strtolower($name);
            }

            $findurl = Portfolio::where('url', $url)->first();
            if ($findurl) {
                return back()->withInput()->withErrors(['unexpected_error' => 'Title Must be unique for URL']);
            } else {

                $Portfolio->title = $data['title'];
                $Portfolio->title_desc = $data['title_desc'];
                $Portfolio->description = $data['description'];
                $serializedArr = implode(',', $data['service']);
                $Portfolio->service = $serializedArr;
                $Portfolio->location = $data['location'];
                $Portfolio->date = $data['date'];
                $Portfolio->website = $data['website'];
                $Portfolio->client = $data['client'];
                $Portfolio->meta_title = $data['meta_title'];
                $Portfolio->meta_tags = $data['meta_tags'];
                $Portfolio->meta_description = $data['meta_description'];
                $Portfolio->featured = $data['featured'];

                if ($request->hasFile('hover_icon')) {
                    $file = $request->file('hover_icon');
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move('images/portfolio', $fileName);
                    $Portfolio->hover_icon = $fileName;  
                }
            }
            $max_order = Portfolio::max('sequence');
            if ($max_order) {
                $Portfolio->sequence = ++$max_order;
            } else {
                $Portfolio->sequence = 01;
            }

            $Portfolio->save();

            $id = $Portfolio->id;


            return redirect()->route('media.media.create', $id)
                ->with('success_message', 'Portfolio was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified portfolio.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $portfolio = Portfolio::with('client')->findOrFail($id);

        $mediaObjects = Media::where('portfolio_id', $id)->get()->sortBy('sequence');

        return view('admin.portfolios.show', compact('portfolio', 'mediaObjects'));
    }

    /**
     * Show the form for editing the specified portfolio.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $clients = Client::pluck('name', 'id')->all();

        return view('admin.portfolios.edit', compact('portfolio', 'clients'));
    }

    /**
     * Update the specified portfolio in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        //dd($request->all());
        try {

            $data = $this->getUpdateData($request);

            $Portfolio = Portfolio::findOrFail($id);

            $Portfolio->title = $data['title'];
            $Portfolio->title_desc = $data['title_desc'];
            $Portfolio->url  = $data['url'];
            $Portfolio->description = $data['description'];
            $serializedArr = implode(',', $data['service']);
            $Portfolio->service = $serializedArr;
            $Portfolio->location = $data['location'];
            $Portfolio->date = $data['date'];
            $Portfolio->website = $data['website'];
            $Portfolio->client = $data['client'];
            $Portfolio->meta_title = $data['meta_title'];
            $Portfolio->meta_tags = $data['meta_tags'];
            $Portfolio->meta_description = $data['meta_description'];
            $Portfolio->featured = $data['featured'];

            if ($request->hasFile('hover_icon')) {
                if ($Portfolio->hover_icon && file_exists('images/portfolio/' . $Portfolio->hover_icon)) {
                    unlink('images/portfolio/' . $Portfolio->hover_icon); 
                }
                $file = $request->file('hover_icon');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move('images/portfolio', $fileName);
                $Portfolio->hover_icon = $fileName;  
            }
            $Portfolio->update($data);

            return redirect()->route('portfolios.portfolio.index')
                ->with('success_message', 'Portfolio was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Remove the specified portfolio from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $portfolio = Portfolio::findOrFail($id);
            $portfolio->delete();

            return redirect()->route('portfolios.portfolio.index')
                ->with('success_message', 'Portfolio was successfully deleted.');
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
            'description' => 'required|string|min:1|max:2147483647',
            'service' => 'required',
            'client' => 'required',
            'location' => 'required|string|min:1|max:191',
            'date' => 'required',
            'website' => 'required|string|min:1|max:191',
            'meta_title' => 'required',
            'meta_tags' => 'required',
            'meta_description' => 'required',
            'featured' => 'required|in:0,1',
            'title_desc' => 'nullable|string|max:191',  // New field validation
            'hover_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ];


        $data = $request->validate($rules);

        return $data;
    }
    protected function getUpdateData(Request $request)
    {
        $rules = [
            'title' => 'required|string|min:1|max:191',
            'description' => 'required|string|min:1|max:2147483647',
            'service' => 'required',
            'client' => 'required',
            'url' => 'required',
            'location' => 'required|string|min:1|max:191',
            'date' => 'required',
            'website' => 'required|string|min:1|max:191',
            'meta_title' => 'required',
            'meta_tags' => 'required',
            'meta_description' => 'required',
            'featured' => 'required|in:0,1',
            'title_desc' => 'nullable|string|max:191',  // New field validation
            'hover_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',  // Image validation

        ];


        $data = $request->validate($rules);

        return $data;
    }


    public function sort_portfolio(Request $request)
    {
        $ids = $request->ids;
        $i = 0;

        foreach ($ids as $id) {
            $portfolio = Portfolio::find($id);
            $portfolio->sequence = $i;
            $portfolio->update();
            $i++;
        }

        return response()->json(['status' => 'success']);
    }
}
