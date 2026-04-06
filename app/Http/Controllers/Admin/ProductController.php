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
    $products = Product::with('brand')->paginate(10);

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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'description' => 'nullable|string',
            'tag' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);

        $data = [
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'description' => $request->description,
            'tag' => $request->tag,
            'rating' => $request->rating,
        ];

        // Handle Multiple Images Upload
        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                // Save to public/templates/products
                $image->move(public_path('templates/products'), $imageName);

                $images[] = $imageName;
            }
        }

        // Store images as JSON
        $data['images'] = !empty($images) ? json_encode($images) : null;

        Product::create($data);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully!');
    }
   public function edit($id)
{
    $product = Product::findOrFail($id);

    // Decode images JSON to array for Blade
    $product->images = $product->images ? json_decode($product->images, true) : [];

    $brands = Brand::all(); // or categories if still used

    return view('pages.admin.products.edit', compact('product', 'brands'));
}
    public function update(Request $request, $id)
    {
        // Fetch product
        $product = Product::findOrFail($id);

        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'brand_id' => 'required|exists:brands,id',
            'description' => 'nullable|string',
            'tag' => 'nullable|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'rating' => 'nullable|numeric|min:0|max:5',
        ]);

        // Update basic fields
        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->description = $request->description;
        $product->tag = $request->tag;
        $product->rating = $request->rating;

        // Existing images (decode JSON)
        $existingImages = $product->images ? json_decode($product->images, true) : [];

        // Handle new uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('templates/products'), $imageName);

                $existingImages[] = $imageName;
            }
        }

        // Save updated images back to JSON
        $product->images = !empty($existingImages) ? json_encode($existingImages) : null;

        // Save all changes
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully!');
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
