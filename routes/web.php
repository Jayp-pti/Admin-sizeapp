<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartIconsController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SizeChartController;
use App\Http\Controllers\SizechartTableController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('FetchAllCategories', [CategoryController::class, 'FetchAllCategories']);
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubCategoryController::class)->only([
        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
    ]);
    Route::get('templates', [CategoryController::class, 'templates']);
    Route::resource('size_charts', SizechartTableController::class);
    Route::get('fetch_templates/{id}', [SizechartTableController::class, 'FetchTemplates']);
    Route::resource('icons', ChartIconsController::class);
});
