<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SizeChart;
use App\Models\sizechart_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class SizechartTableController extends Controller
{
    public function index()
    {
        $sizeCharts = SizeChart::with('fields')->get();
        return view('size_charts.index', compact('sizeCharts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('size_charts.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        try {

            $data = $request->all();
            if ($request->hasFile('icon')) {
                $data['icon'] = $request->file('icon')->store('icons', 'public');
            }

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('size-chart-img', 'public');
            }
            if ($request->field_value) {
                $data['field_value'] = json_encode($request->field_value);
            }



            sizechart_table::create($data);
            return redirect()->back()->with('status', 'Size chart created successfully');
        } catch (\Exception $e) {
            Log::error('Error creating size chart: ' . $e->getMessage());
            return back()->withErrors('Error creating size chart. Please try again.');
        }
    }


    public function update(Request $request, sizechart_table $size_chart)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        try {
            $data = $request->all();

            if ($request->hasFile('icon')) {
                if ($size_chart->icon) {
                    Storage::disk('public')->delete($size_chart->icon);
                }
                $data['icon'] = $request->file('icon')->store('icons', 'public');
            }

            if ($request->hasFile('image')) {
                if ($size_chart->image) {
                    Storage::disk('public')->delete($size_chart->image);
                }
                $data['image'] = $request->file('image')->store('size-chart-img', 'public');
            }

            if ($request->field_value) {
                $data['field_value'] = json_encode($request->field_value);
            }

            $size_chart->update($data);

            return redirect()->back()->with('status', 'Size chart updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating size chart: ' . $e->getMessage());
            return back()->withErrors('Error updating size chart. Please try again.');
        }
    }


    public function show(string $id)
    {
        //
    }

    public function edit(sizechart_table $size_chart)
    {

        $categories = Category::all();
        return view('size_charts.create', compact(['size_chart', 'categories']));
    }

    public function destroy($id)
    {
        $template = sizechart_table::findOrFail($id);
        $category_id =  $template->category_id;
        $template->delete();
        $data = sizechart_table::where('category_id', $category_id)->get();
        return response()->json($data);
    }

    public function FetchTemplates($id)
    {
        $data = sizechart_table::with('category')->find($id);

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json(['message' => 'Data not found'], 404);
        }
    }
}
