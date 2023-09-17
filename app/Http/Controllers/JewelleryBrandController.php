<?php

namespace App\Http\Controllers;

use App\Models\JewelleryBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class JewelleryBrandController extends Controller
{
    public function loadJewelleryBrands()
    {
        return JewelleryBrand::all();
    }

    public function index()
    {
        $jewelleryBrands = $this->loadJewelleryBrands();
        return view('jewellery_brands.index', compact('jewelleryBrands'));
    }

    public function show($id)
    {
        $jewelleryBrand = JewelleryBrand::findOrFail($id);
        return view('jewellery_brands.show', compact('jewelleryBrand'));
    }

    public function create()
    {
        return view('jewellery_brands.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required|string|max:255',
            'brand_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'website_url' => 'nullable|string|max:255',
            // Add any other validation rules for the brand fields
        ]);

        $validatedData['description'] = strip_tags($validatedData['description']);
        $validatedData['description'] = trim($validatedData['description']);

        $jewelleryBrand = JewelleryBrand::create($validatedData);

        // Handle brand image upload if provided
        if ($request->hasFile('brand_image')) {
            $imagePath = $request->file('brand_image')->store('uploads/jewellery_brands', 'public');
            $jewelleryBrand->update(['brand_image' => $imagePath]);
        }

        return redirect()->route('jewellery_brands.index')->with('success', 'Jewellery brand added successfully!');
    }

    public function edit($id)
    {
        $jewelleryBrand = JewelleryBrand::findOrFail($id);
        return view('jewellery_brands.edit', compact('jewelleryBrand'));
    }

    public function update(Request $request, $id)
    {
        $jewelleryBrand = JewelleryBrand::findOrFail($id);

        $validatedData = $request->validate([
            'brand_name' => 'required|string|max:255',
            'brand_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'website_url' => 'nullable|string|max:255',
            // Add any other validation rules for the brand fields
        ]);

        $validatedData['description'] = strip_tags($validatedData['description']);
        $validatedData['description'] = trim($validatedData['description']);

        // Handle brand image update if provided
        if ($request->hasFile('brand_image')) {
            // Delete the old image
            if ($jewelleryBrand->brand_image) {
                Storage::disk('public')->delete($jewelleryBrand->brand_image);
            }

            // Upload and update the new image
            $imagePath = $request->file('brand_image')->store('uploads/jewellery_brands', 'public');
            $validatedData['brand_image'] = $imagePath;
        }

        $jewelleryBrand->update($validatedData);

        return redirect()->route('jewellery_brands.index')->with('success', 'Jewellery brand updated successfully!');
    }

    public function destroy($id)
    {
        $jewelleryBrand = JewelleryBrand::findOrFail($id);

        // Delete the brand image
        if ($jewelleryBrand->brand_image) {
            Storage::disk('public')->delete($jewelleryBrand->brand_image);
        }

        $jewelleryBrand->delete();

        return redirect()->route('jewellery_brands.index')->with('success', 'Jewellery brand deleted successfully!');
    }
}
