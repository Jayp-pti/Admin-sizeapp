<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function FetchAllCategories(Request $request)
    {
        $categories = Category::with('sizeCharts')->get();
        return response()->json($categories);
    }

    public function index(Request $request)
    {
        $categories = Category::with('sizeCharts')->get();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Category::create($request->all());
        return redirect()->route('categories.create')->with('status', 'Category created successFully');
    }

    public function edit(Category $category)
    {
        // dd($category->name);
        return view('categories.create', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $request->validate(['name' => 'required']);
        $category->update($request->all());
        return redirect()->back()->with('status', 'Category has been updated SuccessFully');
    }
    public function destroy($id)
    {
        $user = Category::findOrFail($id);
        $user->delete();
        $categories = Category::with('sizeCharts')->get();
        return response()->json($categories);
    }


    // custom functions for fetch data 
    public function templates(Request $request)
    {
        $categories = Category::with('sizeCharts')->get();
        // dd($categories);
        return view('categories.templates', compact('categories'));
    }
}
