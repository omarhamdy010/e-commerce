<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::resource('category', \App\Http\Controllers\CategoryController::class)->except(['show','edit']);
    Route::post('edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('edit');
    Route::get('categoryorder', [\App\Http\Controllers\CategoryController::class, 'getcategoryorder'])->name('category.order');
    Route::post('categoryajax', [\App\Http\Controllers\CategoryController::class, 'ajaxstore'])->name('category.createcat');
    Route::PUT('updateAJAX/{id}', [\App\Http\Controllers\CategoryController::class, 'updateAJAX'])->name('category.updateAJAX');
    Route::post('view-render', [\App\Http\Controllers\CategoryController::class, 'viewRender'])->name('view.render');
    Route::get('category/datatable', [\App\Http\Controllers\CategoryController::class, 'getCategory'])->name('category.getcategory');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
