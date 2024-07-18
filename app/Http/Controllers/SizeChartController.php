<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Log;
use App\Models\SizeChart;
use App\Models\SizeChartField;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class SizeChartController extends Controller
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

    public function  store(Request $request)
    {
        try {
            $sizeChart = SizeChart::create([
                'name' => $request->name,
                'field_value' => json_encode($request->field_value),
            ]);

            $sizeChart->fields()->create([
                'field_value' => json_encode($request->field_value),
            ]);
            Log::info('Size chart created successfully with ID: ' . $sizeChart);
        } catch (\Exception $e) {
            Log::error('Error creating size chart: ' . $e->getMessage());
            return back()->withErrors('Error creating size chart. Please try again.');
        }

        return redirect()->route('size_charts.index');
    }
    public function edit(SizeChart $sizeChart)
    {
        return view('size_charts.edit', compact('sizeChart'));
    }

    public function update(Request $request, SizeChart $sizeChart)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fields' => 'required|array',
            'fields.*.field_name' => 'required|string|max:255',
            'fields.*.field_value' => 'required|string|max:255',
        ]);

        $sizeChart->update($request->only('name'));
        $sizeChart->fields()->delete();

        foreach ($request->fields as $field) {
            $sizeChart->fields()->create($field);
        }

        return redirect()->route('size_charts.index');
    }

    public function destroy(SizeChart $sizeChart)
    {
        $sizeChart->delete();
        return redirect()->route('size_charts.index');
    }
}
