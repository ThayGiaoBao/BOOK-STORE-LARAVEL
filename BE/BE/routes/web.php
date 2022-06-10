<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// rou trở về trang dashboard
Route::get('/', function () {
    return view('welcome');
});

// đi trang admin
Route::get('/home', function () {
    return view('home');
})->name('Dashboard');


// đi trang categories
Route::prefix('categories')->group(function () {
    Route::get('/', [
        CategoryController::class,'index'
    ])->name('category.index');
    // rou về trang danh mục
    Route::get('/create', [
        CategoryController::class,'create'
    ])->name('create');
    // rou submit form thêm danh mục
    Route::post('/store', [
        CategoryController::class,'store'
    ])->name('store');
}); 