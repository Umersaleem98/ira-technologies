<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

public function index()
{
    $categories = Category::all();
        return view('pages.admin.category.index', compact('categories'));
}
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.category.create', compact('categories'));
    }

 public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'is_active' => 'nullable|boolean',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Save file directly to public/templates/category
        $image->move(public_path('templates/category'), $imageName);

        // Store only filename in DB
        $validated['image'] = $imageName;
    }

    $validated['is_active'] = $request->has('is_active') ? true : false;

    Category::create($validated);

    return redirect()->route('categories.index')->with('success', 'Category created successfully!');
}

public function edit($id)
{
    $category= Category::find($id);

    return view('pages.admin.category.edit', compact('category'));

}
public function update(Request $request, $id)
{
    // Fetch the category by ID
    $category = Category::findOrFail($id);

    // Validate input
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'is_active' => 'nullable|boolean',
    ]);

    // Update name
    $category->name = $request->name;

    // Update status
    $category->is_active = $request->has('is_active') ? true : false;

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($category->image && file_exists(public_path('templates/category/' . $category->image))) {
            unlink(public_path('templates/category/' . $category->image));
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('templates/category'), $imageName);

        // Save new image filename
        $category->image = $imageName;
    }

    // Save all changes
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
}

public function destroy($id)
{
    // Fetch the category
    $category = Category::findOrFail($id);

    // Delete image file if it exists
    if ($category->image && file_exists(public_path('templates/category/' . $category->image))) {
        unlink(public_path('templates/category/' . $category->image));
    }

    // Delete the category record from database
    $category->delete();

    return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
}
}
