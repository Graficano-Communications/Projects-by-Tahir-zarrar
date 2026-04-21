<?php

namespace App\Http\Controllers;

use App\Production_order;
use App\product_order_product;
use Illuminate\Http\Request;
use Exception;

class Production_orderController extends Controller
{
    public function index()
    {
        $banners = Production_order::paginate(25);

        return view('admin.production_order.index', compact('banners'));
    }

    public function create()
    {
        // Create a new instance of the Banner model
        $banners = new Production_order();

        // Pass the $banners variable to the view
        return view('admin.production_order.create', compact('banners'));
    }

    public function store(Request $request)
    {

        // Validate the request data
        $validatedData = $request->validate([
            'order_name' => 'required|string',
            'company_name' => 'required|string',
            'representative_name' => 'required|string',
            'designation' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);

        $maxOrder = Production_order::max('sequence');
        $productionOrder = new Production_order;
        $productionOrder->fill($validatedData);
        $productionOrder->sequence = $maxOrder ? $maxOrder + 1 : 1;
        $productionOrder->save();

        $formData = $request->all();
        $products = [];
        foreach ($formData as $key => $value) {
            if (strpos($key, 'product-name-') === 0) {
                $productIndex = substr($key, strrpos($key, '-') + 1);
                $product = [
                    'product-name' => $formData["background-$productIndex"] ?? null,
                    'product-emergency' => $formData["product-emergency-$productIndex"] ?? false,
                    'photography-type' => $formData["photography-type-$productIndex"] ?? [],
                    'background' => $formData["background-$productIndex"] ?? null,
                    'canvas_size' => $formData["canvas-size-$productIndex"] ?? null,
                    'sample_picking' => $formData["sample-picking-$productIndex"] ?? false,
                    'angle_image_count' => $formData["angle-image-count-$productIndex"] ?? 0,
                ];

                if ($request->hasFile("product-image-$productIndex")) {
                    $product['product-image'] = $request->file("product-image-$productIndex")->store('product-images');
                }
                $angleImages = [];



                $fileCount = count($request->file('product-angle-image-' . $productIndex));
                for ($i = 0; $i < $fileCount; $i++) {
                    $angleImagefile = $request->file('product-angle-image-' . $productIndex)[$i];
                    $angleImages[] = $angleImagefile->getClientOriginalName();
                }

                $product['product-angle-images'] = $angleImages;

                $products[] = $product;
            }
        }
        // dd($products);
        // Store the products in the database
        foreach ($products as $productData) {
            $productData['production_order_id'] = $productionOrder->id;
            // dd($productData);
            product_order_product::create($productData);
        }


//  dd($productData);
        return redirect()->route('production_order.index')
            ->with('success_message', 'Production order was successfully added.');
    }


    public function destroy($id)
    {
        try {
            $banner = Production_order::findOrFail($id);
            $banner->delete();

            return redirect()->route('production_order.index')
                ->with('success_message', 'Event was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    public function edit($id)
    {
        $production_order = Production_order::findOrFail($id);



        return view('admin.production_order.edit', compact('production_order'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string',
            'url' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        // Find the banner by its ID
        $banner = Production_order::findOrFail($id);

        // Update the banner attributes with the request data
        $banner->title = $request->title;
        $banner->url = $request->url;

        // If an image is uploaded, update the image attribute
        if ($request->hasFile('image')) {


            // Store the new image
            $imageName = date('YmdHis', time()) . mt_rand() . '.png';
            $request->file('image')->move(public_path('images/banners'), $imageName);
            $banner->image = $imageName;
        }

        // Save the updated banner
        $banner->save();

        // Redirect back to the index page with a success message
        return redirect()->route('banner.banner.index')
            ->with('success_message', 'Banner was successfully updated.');
    }

    public function sort_banners(Request $request)
    {
        $banner = $request->data;
        $i = 0;
        foreach ($banner as  $id) {
            $banner = Production_order::find($id);
            $banner->sequence  = $i;
            $banner->update();
            $i++;
        }
    }
}
