<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Log;
use App\Models\AmazonProduct;

class AmazonProductsController extends Controller
{
    public function loadCategories()
    {
        return Categories::all();
    }

    public function index()
    {
        $products = AmazonProduct::all();

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = AmazonProduct::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function create()
    {
        $categories = $this->loadCategories(); // Call the getAuthorNames function
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Log::debug($request->all());

        $validatedData = $request->validate([
            'product_id' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'nullable|numeric',
            'affiliate_link' => 'required|string|max:1000',
        ]);

        $product = AmazonProduct::create($validatedData);

      
        try {
            if ($request->hasFile('featured_image')) {
                $file = $request->file('featured_image');
                $fileName = $product->id . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/products/', $fileName);
                $product->update(['featured_image' => $fileName]);
            }
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
        }

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $categories = $this->loadCategories(); // Call the getAuthorNames function
        $product = AmazonProduct::findOrFail($id);

        return view('products.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $product = AmazonProduct::findOrFail($id);

        $validatedData = $request->validate([
            'product_id' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'featured_image' =>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'nullable|numeric',
            'affiliate_link' => 'required|string|max:1000',
        ]);

        $product->update($validatedData);
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            if ($product->featured_image && file_exists(public_path('uploads/products/' . $product->featured_image))) {
                unlink(public_path('uploads/products/' . $product->featured_image));
            }
            $fileName = $product->id . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/products/', $fileName);
            $validatedData['featured_image'] = $fileName;
        }

        $product->update($validatedData);
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = AmazonProduct::findOrFail($id);
        if ($product->featured_image) {
            $existingFilePath = public_path('uploads/products/' . $product->featured_image);
            if (file_exists($existingFilePath)) {
                unlink($existingFilePath);
            }
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
