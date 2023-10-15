<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Celebrities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ImageGallery;

class ImageGalleryController extends Controller
{
    public function loadCategories()
    {
        return Categories::all();
    }

    public function index()
    {
        $categories = $this->loadCategories(); // Call the getAuthorNames function
        $images = ImageGallery::all();
        $celebrities=Celebrities::all();
        return view('image_gallery.index', compact('images','categories','celebrities'));
    }

    public function show($id)
    {
        $image = ImageGallery::findOrFail($id);

        return view('image_gallery.show', compact('image'));
    }

    public function create()
    {
        $categories = $this->loadCategories(); // Call the getAuthorNames function
        $celebrities = Celebrities::all();
        return view('image_gallery.create', compact('categories','celebrities'));
    }

    public function store(Request $request)
    {
        Log::debug($request->all());

        $validatedData = $request->validate([
            'category' => 'required|string|max:50',
            'title' => 'required|string|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'celebrity_id'=> 'nullable',
        ]);
        $image = ImageGallery::create($validatedData);
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = $image->id . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/image_gallery/', $fileName);

                $image->update(['image' => $fileName]);
            }

           

            return redirect()->route('image_gallery.index')->with('success', 'Image added successfully!');
        } catch (\Exception $e) {
            Log::error('Error while storing image: ' . $e->getMessage());
            return redirect()->route('image_gallery.create')->with('error', 'Failed to add image. Please try again.');
        }
    }

    public function edit($id)
    {
        $categories = $this->loadCategories(); 
        $image = ImageGallery::findOrFail($id);
        $celebrities = Celebrities::all();

        return view('image_gallery.edit', compact('image','categories','celebrities'));
    }

    public function update(Request $request, $id)
    {
        $image = ImageGallery::findOrFail($id);
    
        $validatedData = $request->validate([
            'category' => 'required|string|max:50',
            'title' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'celebrity_id' => 'nullable',
        ]);
    
        $fileName = null; // Initialize $fileName to null
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
    
            // Delete the old image file if it exists
            if ($image->image && file_exists(public_path('uploads/image_gallery/' . $image->image))) {
                unlink(public_path('uploads/image_gallery/' . $image->image));
            }
    
            $fileName = $image->id . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/image_gallery/', $fileName);
            $validatedData['image'] = $fileName;
        }
    
        $image->update($validatedData);
        return redirect()->route('image_gallery.index')->with('success', 'Image updated successfully!');
    }
    

    public function destroy($id)
    {
        $image = ImageGallery::findOrFail($id);

        try {
            // Delete the image file
            if ($image->image && file_exists(public_path('uploads/image_gallery/' . $image->image))) {
                unlink(public_path('uploads/image_gallery/' . $image->image));
            }

            $image->delete();

            return redirect()->route('image_gallery.index')->with('success', 'Image deleted successfully!');
        } catch (\Exception $e) {
            Log::error('Error while deleting image: ' . $e->getMessage());
            return redirect()->route('image_gallery.index')->with('error', 'Failed to delete image. Please try again.');
        }
    }
}