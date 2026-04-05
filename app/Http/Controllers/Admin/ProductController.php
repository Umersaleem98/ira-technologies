<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('brand')->latest()->get();

        return view('pages.admin.products.index', compact('products'));
    }
    public function create()
    {
        $categories = Brand::all();

        //  dd($categories);

        return view('pages.admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'nullable|boolean',

        ]);

        $data = $request->only('name', 'description', 'category_id');
        $data['is_active'] = $request->has('is_active') ? true : false;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('templates/products'), $imageName); // store in public/templates/products
            $data['image'] = $imageName;
        }

        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function edit($id)
    {
        // Fetch product by ID
        $product = Product::find($id);

        // Fetch all categories for dropdown
        $categories = Brand::all();

        return view('pages.admin.products.edit', compact('product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        // Fetch product
        $product = Product::findOrFail($id);

        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'nullable|boolean',
        ]);

        // Update basic fields
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->is_active = $request->has('is_active') ? true : false;

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Delete old image if exists
            $oldImagePath = public_path('templates/products/' . $product->image);
            if ($product->image && file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Save new image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('templates/products'), $imageName);

            $product->image = $imageName;
        }

        // Save changes
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }


    public function destroy($id)
{
    // Fetch product
    $product = Product::findOrFail($id);

    // Delete image if it exists
    if ($product->image) {
        $imagePath = public_path('templates/products/' . $product->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Delete product from database
    $product->delete();

    return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
}
}
