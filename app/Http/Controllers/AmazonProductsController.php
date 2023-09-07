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
            'image_url' => 'nullable|string|max:1000',
            'price' => 'nullable|numeric',
            'affiliate_link' => 'required|string|max:1000',
        ]);

        $product = AmazonProduct::create($validatedData);

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
            'image_url' => 'nullable|string|max:1000',
            'price' => 'nullable|numeric',
            'affiliate_link' => 'required|string|max:1000',
        ]);

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = AmazonProduct::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
