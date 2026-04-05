<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    // Brands (Top Category section)
     $brands = Brand::withCount('products')->take(4)->get();

    // Products (for other section)
    $products = Product::with('brand')
        ->latest()
        ->take(8)
        ->get();

    return view("index", compact('brands', 'products'));
}

    
}
