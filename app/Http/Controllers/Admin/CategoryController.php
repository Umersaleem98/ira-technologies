<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Brand::all();
        return view('pages.admin.category.index', compact('categories'));
    }
    public function create()
    {
        $categories = Brand::all();
        return view('pages.admin.category.create', compact('categories'));
    }

  public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'url' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'tag' => 'nullable|string',
    ]);

    // Handle Logo Upload
    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->getClientOriginalExtension();

        // Save file to public/templates/category
        $logo->move(public_path('templates/category'), $logoName);

        // Store filename in DB
        $validated['logo'] = $logoName;
    }

    // Create Category (IMPORTANT: use correct model)
    Brand::create($validated);

    return redirect()->route('categories.index')
        ->with('success', 'Category created successfully!');
}

    public function edit($id)
    {
        $category = Brand::find($id);

        return view('pages.admin.category.edit', compact('category'));
    }
  public function update(Request $request, $id)
{
    // Fetch category (FIX: use correct model)
    $category = Brand::findOrFail($id);

    // Validation
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        'url' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'tag' => 'nullable|string',
    ]);

    // Handle logo upload
    if ($request->hasFile('logo')) {

        // Delete old logo
        if ($category->logo && file_exists(public_path('templates/category/' . $category->logo))) {
            unlink(public_path('templates/category/' . $category->logo));
        }

        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('templates/category'), $logoName);

        $validated['logo'] = $logoName;
    }

    // Update data
    $category->update($validated);

    return redirect()->route('categories.index')
        ->with('success', 'Category updated successfully!');
}

    public function destroy($id)
    {
        // Fetch the category
        $category = Brand::findOrFail($id);

        // Delete image file if it exists
        if ($category->image && file_exists(public_path('templates/category/' . $category->image))) {
            unlink(public_path('templates/category/' . $category->image));
        }

        // Delete the category record from database
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
