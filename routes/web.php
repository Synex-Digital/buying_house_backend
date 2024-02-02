<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/register', [AdminController::class, 'admin_register'])->name('admin.register');
Route::post('/admin/store', [AdminController::class, 'admin_store'])->name('admin.store');
Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('admin.login');
Route::post('/login/admin', [AdminController::class, 'login_admin'])->name('login.admin');



Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // category route start
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category/store', [CategoryController::class, 'category_store'])->name('category.store');
    Route::get('/category/show/{id}', [CategoryController::class, 'category_show'])->name('category.show');
    Route::post('/category/update', [CategoryController::class, 'category_update'])->name('category.update');
    Route::get('/category.delete/{id}', [CategoryController::class, 'category_delete'])->name('category.delete');
    // category route end


    // produt route start
    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::get('/product/add', [ProductController::class, 'product_add'])->name('product.add');
    Route::post('/getcategory', [ProductController::class, 'getcategory'])->name('getcategory');
    Route::post('/product/store', [ProductController::class, 'product_store'])->name('product.store');
    Route::get('/product/show/{id}', [ProductController::class, 'product_show'])->name('product.show');
    Route::get('/product/delete/{id}', [ProductController::class, 'product_delete'])->name('product.delete');
    Route::post('/product/update', [ProductController::class, 'product_update'])->name('product.update');
    // produt route end

});



// frontend route start
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/mission/and/vission', [FrontendController::class, 'mission_and_vission'])->name('mission.and.vission');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/product/details/{id}', [FrontendController::class, 'product_details'])->name('product.details');
Route::get('/categories/product/{id}', [FrontendController::class, 'categories_product'])->name('categories.product');


// frontend contact message route start
Route::post('/contact/message/store' , [ContactController::class, 'contact_message_store'])->name('contact.message.store');

