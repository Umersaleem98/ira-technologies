<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Products\OurProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/our-products', [OurProductsController::class, 'index'])->name('our.products');

// Add this for search
Route::get('/products/search', [OurProductsController::class, 'search'])->name('products.search');

// Optional: show products by category
Route::get('/products/category/{id}', [ProductsController::class, 'category'])->name('products.category');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');



// Dashboard routes
// Show login form
Route::get('login', [AuthController::class, 'index'])->name('login');
// Handle login (IMPORTANT)
Route::post('login', [AuthController::class, 'login'])->name('login.post');
// Admin Protected Routes
Route::get('dashboard', [AdminController::class, 'index'])->middleware(['auth', 'role:admin'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Products

Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Categories
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
