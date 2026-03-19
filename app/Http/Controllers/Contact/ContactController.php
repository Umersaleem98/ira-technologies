<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function index()
    {
         $products = Product::with(['category', 'brand'])
            ->where('is_active', 1)
            ->latest()
            ->get();

        $categories = Category::where('is_active', 1)->get();
        $brands = Brand::where('is_active', 1)->get();
        return view('pages.templates.contact.index', compact('products', 'categories', 'brands'));
    }
}
