<?php

use App\Models\Category;
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
    $categories = Category::with('products')->get();

    return view('site.index',compact('categories'));
});

Auth::routes();
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::group(['middleware' => ['authadmin']], function () {

        Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('category', \App\Http\Controllers\CategoryController::class)->except(['show', 'edit']);
        Route::resource('slider', \App\Http\Controllers\SliderController::class)->except(['show', 'edit']);
        Route::post('category/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('edit.category');
        Route::post('category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('create.category');
        Route::get('categoryorder', [\App\Http\Controllers\CategoryController::class, 'getcategoryorder'])->name('category.order');
        Route::post('categoryajax', [\App\Http\Controllers\CategoryController::class, 'ajaxstore'])->name('category.createcat');
        Route::post('view-render', [\App\Http\Controllers\CategoryController::class, 'viewRender'])->name('view.render');
        Route::get('category/datatable', [\App\Http\Controllers\CategoryController::class, 'getCategory'])->name('category.getcategory');


        Route::resource('product', \App\Http\Controllers\ProductController::class)->except(['show']);
        Route::get('product/datatable', [\App\Http\Controllers\ProductController::class, 'getProducts'])->name('product.getProducts');
        Route::get('admin/datatable', [\App\Http\Controllers\AdminController::class, 'getAdmins'])->name('admin.getAdmins');
        Route::get('slider/datatable', [\App\Http\Controllers\SliderController::class, 'getSliders'])->name('slider.getSliders');
        Route::get('changeStatus', [\App\Http\Controllers\SliderController::class, 'changeStatus'])->name('changeStatus');


    });

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::resource('admin', \App\Http\Controllers\AdminController::class)->except(['show']);
    });

    Route::resource('site',\App\Http\Controllers\SiteController::class)->except('show');

    Route::get('shop',[\App\Http\Controllers\SiteController::class,'shop'])->name('shop');
    Route::get('filter',[\App\Http\Controllers\SiteController::class,'filter'])->name('filter');
    Route::get('search',[\App\Http\Controllers\SiteController::class,'search'])->name('search');

    Route::get('cart',[\App\Http\Controllers\SiteController::class,'cart'])->name('cart');
    Route::get('add_to_cart',[\App\Http\Controllers\SiteController::class,'add_to_cart'])->name('add-to-cart');
    Route::get('deleteCart/{id}',[\App\Http\Controllers\SiteController::class,'deleteCart'])->name('deletecart');
    Route::patch('update_cart', [\App\Http\Controllers\SiteController::class, 'update_cart'])->name('update_cart');

    Route::get('wishlist',[\App\Http\Controllers\SiteController::class,'wishlist'])->name('wishlist');
    Route::get('deleteWishlist/{id}',[\App\Http\Controllers\SiteController::class,'deleteWishlist'])->name('deleteWishlist');
    Route::get('add_to_wishlist',[\App\Http\Controllers\SiteController::class,'add_to_wishlist'])->name('add_to_wishlist');

    Route::get('quickview', [\App\Http\Controllers\SiteController::class, 'quickview'])->name('quickview');
    Route::get('quick_view', [\App\Http\Controllers\SiteController::class, 'quick_view'])->name('quick_view');

    Route::get('add_rate', [\App\Http\Controllers\RatingController::class, 'create'])->name('add_rate');

    Route::get('adminlogin',[\App\Http\Controllers\Auth\AdminAuthController::class,'LoginForm'])->name('adminlogin');
    Route::get('adminregister',[\App\Http\Controllers\Auth\AdminAuthController::class,'RegisterForm'])->name('adminregister');
    Route::post('adminlogin',[\App\Http\Controllers\Auth\AdminAuthController::class,'adminlogin'])->name('adminlogin');
    Route::post('adminstore',[\App\Http\Controllers\Auth\AdminAuthController::class,'adminstore'])->name('adminstore');
    Route::post('adminLogout',[\App\Http\Controllers\Auth\AdminAuthController::class,'adminLogout'])->name('admin_logout');
});
