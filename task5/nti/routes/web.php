<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\category\CategoryController;
use App\Http\Controllers\product\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('dashboard')->name('dashboard')->group(function(){
    Route::get('/',[DashboardController::class , 'index']);
    Route::prefix('products')->controller(ProductController::class)->name('.product.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/all', 'all')->name('all');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::post('/store','store')->name('store');
        Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/{id}/destroy','destroy')->name('destroy');
    });
    
    
});

Route::get('/category/all/',[CategoryController::class,'allCategory'])->name('category.all');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
