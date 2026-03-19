<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class OurProductsController extends Controller
{
    public function index()
    {
        $products = Product::with(['category', 'brand'])
            ->where('is_active', 1)
            ->latest()
            ->get();

        return view('pages.templates.ourproducts.index', compact('products'));
    }

    // Search products by name and category
    public function search(Request $request)
    {
        $query = $request->input('query');
        $category_id = $request->input('category_id');

        $products = Product::with(['category', 'brand'])
            ->when($query, function($q) use ($query) {
                $q->where('name', 'like', "%{$query}%");
            })
            ->when($category_id, function($q) use ($category_id) {
                $q->where('category_id', $category_id);
            })
            ->where('is_active', 1)
            ->latest()
            ->get();

        // Pass categories for the search form again
        $categories = \App\Models\Category::where('is_active', 1)->get();

        return view('pages.templates.ourproducts.index', compact('products', 'categories'));
    }

    // Show products of a specific category
    public function category($id)
    {
        $products = Product::with(['category', 'brand'])
            ->where('category_id', $id)
            ->where('is_active', 1)
            ->latest()
            ->get();

        $categories = \App\Models\Category::where('is_active', 1)->get();

        return view('pages.templates.ourproducts.index', compact('products', 'categories'));
    }
}
