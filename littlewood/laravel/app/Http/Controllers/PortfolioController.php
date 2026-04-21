<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function view_portfolio()
    {
        $portfolios = Portfolio::orderBy('sequence')->get();
        return view('admin.portfolios', compact('portfolios'));
    }

    public function add_portfolio()
    {
        return view('admin.add-portfolios');
    }

    public function add_portfolio_data(Request $request)
    {
        $validatedData = $request->validate([
            'caption' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $portfolio = new Portfolio;
        $portfolio->caption = $request->input('caption');
        $portfolio->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/portfolios/', $filename);
            $portfolio->image = $filename;
        }

        $maxSequence = Portfolio::max('sequence');
        $portfolio->sequence = $maxSequence !== null ? $maxSequence + 1 : 1;

        $portfolio->save();
        return redirect()->route('portfolios')->with('status', 'Portfolio Added Successfully');
    }

    public function edit_portfolio($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.edit-portfolios', compact('portfolio'));
    }

    public function edit_portfolio_data(Request $request, $id)
    {
        $validatedData = $request->validate([
            'caption' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $portfolio = Portfolio::find($id);
        $portfolio->caption = $request->input('caption');
        $portfolio->description = $request->input('description');

        if ($request->hasFile('image')) {
            $destination = 'uploads/portfolios/' . $portfolio->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/portfolios/', $filename);
            $portfolio->image = $filename;
        }

        $portfolio->update();
        return redirect()->route('portfolios')->with('status', 'Portfolio Updated Successfully');
    }

    public function delete_portfolio($id)
    {
        $portfolio = Portfolio::find($id);
        $destination = 'uploads/portfolios/' . $portfolio->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $portfolio->delete();
        return redirect()->back()->with('status', 'Portfolio Deleted Successfully');
    }

    public function sort_portfolio(Request $request)
    {
        $portfolios = array_filter($request->input('data'), function($value) {
            return !is_null($value) && $value !== '';
        });

        $i = 0;
        foreach ($portfolios as $id) {
            $portfolio = Portfolio::find($id);
            if ($portfolio) {
                $portfolio->sequence = $i;
                $portfolio->save();
                $i++;
            }
        }

        return response()->json(['success' => true, 'data' => $portfolios]);
    }
}
