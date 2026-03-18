<?php

use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Products\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/our-products', [ProductsController::class, 'index'])->name('our.products');

// Add this for search
Route::get('/products/search', [ProductsController::class, 'search'])->name('products.search');

// Optional: show products by category
Route::get('/products/category/{id}', [ProductsController::class, 'category'])->name('products.category');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('login', [AuthController::class, 'index'])->name('auth.login');
