<?php

namespace App\Http\Controllers;

use App\Models\ChartIcons;
use Illuminate\Http\Request;

class ChartIconsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Charticons.index');
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
        //
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
