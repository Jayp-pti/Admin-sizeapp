<?php

namespace App\Http\Controllers;

use App\Models\ChartIcons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChartIconsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Charticons = ChartIcons::all();
        return view('Charticons.index', compact('Charticons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Charticons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            $data = $request->all();
            $data['status'] = isset($data['status']) ? (int)$data['status'] : 0;
            if ($request->hasFile('icon')) {
                $data['icon'] = $request->file('icon')->store('icons', 'public');
            }
            ChartIcons::create($data);
            return redirect()->back()->with('status', 'Size chart icon uploaded successfully');
        } catch (\Exception $e) {
            Log::error('Error uploading size chart icon: ' . $e->getMessage());
            return back()->withErrors('Error uploading size chart icon. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ChartIcons $chartIcons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChartIcons $chartIcons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChartIcons $chartIcons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChartIcons $chartIcons)
    {
        //
    }
}
