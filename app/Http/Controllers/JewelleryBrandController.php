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
        return view('brands.index', compact('jewelleryBrands'));
    }

    public function show($id)
    {
        $jewelleryBrand = JewelleryBrand::findOrFail($id);
        return view('brands.show', compact('jewelleryBrand'));
    }

    public function create()
    {
        return view('brands.create');
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
            // Generate a unique filename based on the brand's ID
            $imageFileName = $jewelleryBrand->id . '.' . $request->file('brand_image')->getClientOriginalExtension();
            $imagePath = $this->uploadImage($request->file('brand_image'), 'uploads/brands', $imageFileName);
    
            // Update the brand with the generated image filename
            $jewelleryBrand->update(['brand_image' => $imagePath]);
        }
    
        return redirect()->route('brands.index')->with('success', 'Jewellery brand added successfully!');
    }
    
    private function uploadImage($file, $path, $fileName)
    {
        $file->move($path, $fileName);
        return $path . '/' . $fileName;
    }
    

    public function edit($id)
    {
        $jewelleryBrand = JewelleryBrand::findOrFail($id);
        return view('brands.edit', compact('jewelleryBrand'));
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
            $this->deleteImage($jewelleryBrand->brand_image);
    
            // Define $imageFileName before using it
            $imageFileName = $jewelleryBrand->id . '.' . $request->file('brand_image')->getClientOriginalExtension();
    
            // Upload and update the new image
            $imagePath = $this->uploadImage($request->file('brand_image'), 'uploads/brands', $imageFileName);
            $validatedData['brand_image'] = $imagePath;
        }
    
        $jewelleryBrand->update($validatedData);
    
        return redirect()->route('brands.index')->with('success', 'Jewellery brand updated successfully!');
    }
    

    public function destroy($id)
    {
        $jewelleryBrand = JewelleryBrand::findOrFail($id);
    
        // Delete the brand image
        $this->deleteImage($jewelleryBrand->brand_image);
    
        $jewelleryBrand->delete();
    
        return redirect()->route('brands.index')->with('success', 'Jewellery brand deleted successfully!');
    }
    


    private function deleteImage($imagePath)
    {
        if ($imagePath && file_exists(public_path($imagePath))) {
            unlink(public_path($imagePath));
        }
    }
}
