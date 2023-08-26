<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{
    public function loadCategories()
    {
        return Categories::all();
    }

    public function index()
    {
        $categories = $this->loadCategories();
        return view('categories.index', compact('categories'));
    }
    public function show($id)
    {
        $category = Categories::findOrFail($id);
        return view('categories.show', compact('category'));
    }
    

    public function create()
    {
        $categories = $this->loadCategories();
        
        return view('categories.create', ['categories' => $categories]);
    }
    

    public function store(Request $request)
    {
        Log::debug($request->all());
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'nullable|string',
            'category_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'parent_category_id' => 'nullable|integer',
            // Add any other validation rules for the category fields
        ]);
    
        $category = Categories::create([
            'category_name' => $validatedData['category_name'],
            'category_description' => $validatedData['category_description'],         
            'category_image' => '', 
            'parent_category_id' => $validatedData['parent_category_id'],         

        ]);

        try {
            if ($request->hasFile('category_image')) {
             
               
                $file = $request->file('category_image');
    
                // Generate the file name using the blog_id
                $fileName = $category->category_id . '.' . $file->getClientOriginalExtension();
    
                // Move the file to the desired location (e.g., public/uploads)
                $file->move('uploads/categories', $fileName);
                $category->update(['category_image' => $fileName]);
            }
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
        }
            
        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }

    public function edit($id)
{
    $category = Categories::findOrFail($id); // Load the existing category
    $categories = Categories::all(); // Fetch all categories

    return view('categories.edit', compact('category', 'categories'));
}


public function update(Request $request, $id)
{
    $category = Categories::findOrFail($id); // Load the existing category

    $validatedData = $request->validate([
        'category_name' => 'required|string|max:255',
        'category_description' => 'nullable|string',
        'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Make it nullable and optional
        'parent_category_id' => 'nullable|integer',
        // Add any other validation rules for the category fields
    ]);

    if ($request->hasFile('category_image')) {
        $file = $request->file('category_image');

        // Delete the old image file
        if ($category->category_image && file_exists(public_path('uploads/categories/' . $category->category_image))) {
            unlink(public_path('uploads/categories/' . $category->category_image));
        }

        $fileName = $category->category_id . '.' . $file->getClientOriginalExtension();

        $file->move('uploads/categories', $fileName);
        $validatedData['category_image'] = $fileName; // Update the image file name
    }

    $category->update($validatedData);
    return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
}

}