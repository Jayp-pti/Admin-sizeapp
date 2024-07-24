<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\ChartIcons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class IconsController extends Controller
{
    public function index()
    {

        try {
            $chartIcons = ChartIcons::get();
            return response()->json(['data' => $chartIcons, 'status' => 200]);
        } catch (\Throwable $th) {
            Log::error('Error Code: ' . $th->getCode() . ' - ' . $th->getMessage());
            return response()->json([
                'error' => $th->getMessage(),
                'code' => $th->getCode(),
                'status' => 500
            ], 500);
        }
    }
}
