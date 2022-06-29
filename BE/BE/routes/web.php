<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;


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
        CategoryController::class, 'index'
    ])->name('category.index');
    // rou về trang danh mục
    Route::get('/create', [
        CategoryController::class, 'create'
    ])->name('create');
    // rou submit form thêm danh mục
    Route::post('/store', [
        CategoryController::class, 'store'
    ])->name('store');
    // rou submit sửa danh mục
    Route::get('/edit/{id}', [
        CategoryController::class, 'edit'
    ])->name('edit');
    // rou update danh mục
    Route::post('/update/{id}', [
        CategoryController::class, 'update'
    ])->name('update');
    // rou submit delete
    Route::get('/delete/{id}', [
        CategoryController::class, 'delete'
    ])->name('delete');
});


// đi trang menus
Route::prefix('menus')->group(function () {
    Route::get('/', [
        MenuController::class, 'index'
    ])->name('menus');
    // rou về trang menus
    Route::get('/create', [
        MenuController::class, 'create'
    ])->name('menus.create');
    // rou submit form thêm menus
    Route::post('/store', [
        MenuController::class, 'store'
    ])->name('menus.store');
    // rou submit sửa danh mục
    Route::get('/edit/{id}', [
        MenuController::class, 'edit'
    ])->name('menus.edit');
    // rou update danh mục
    Route::post('/update/{id}', [
        MenuController::class, 'update'
    ])->name('menus.update');
});
