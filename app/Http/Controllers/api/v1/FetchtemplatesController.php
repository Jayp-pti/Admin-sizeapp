<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\sizechart_table;
use Illuminate\Http\Request;

class FetchtemplatesController extends Controller
{

    public function index()
    {
        $data =  Category::with('sizeCharts')->get();
        return response()->json(['data' => $data, 'status' => 200]);
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
