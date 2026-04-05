<?php

namespace App\Http\Controllers\Home\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class Home_ProductController extends Controller
{
    public function index(Request $request)
    {
       $query = Product::with('brand'); // Eager load brand
        $brands = Brand::withCount('products')->get();

        // Filter by brand
        if ($request->brand) {
            $query->where('brand_id', $request->brand);
        }

        // Search
        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Paginate products
        $products = $query->inRandomOrder()->paginate(9)->withQueryString();

        return view("pages.templates.products.index", compact('products', 'brands'));
    }
public function details($id)
{
    // Fetch the product by ID with brand relation
    $product = \App\Models\Product::with('brand')->findOrFail($id);

    // Fetch related products (same brand)
    $relatedProducts = \App\Models\Product::where('brand_id', $product->brand_id)
                        ->where('id', '!=', $id)
                        ->take(4)
                        ->get();

    return view('pages.templates.products.products_details', compact('product', 'relatedProducts'));
}

}
