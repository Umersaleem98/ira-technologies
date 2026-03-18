<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $products = Product::with(['category', 'brand'])
            ->where('is_active', 1)
            ->latest()
            ->get();

        $categories = Category::where('is_active', 1)->get();
        $brands = Brand::where('is_active', 1)->get();

        return view('index', compact('products', 'categories', 'brands'));
    }
}
