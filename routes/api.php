<?php

use App\Http\Controllers\api\v1\FetchtemplatesController;
use App\Http\Controllers\api\v1\IconsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => '/v1'], function () {
    Route::resource('categories', FetchtemplatesController::class);
    Route::resource('icons', IconsController::class);
    Route::get('template/{id}', [FetchtemplatesController::class, 'FetchTemplates']);
});
