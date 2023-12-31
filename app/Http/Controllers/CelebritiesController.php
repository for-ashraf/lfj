<?php

namespace App\Http\Controllers;

use App\Models\Celebrities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CelebritiesController extends Controller
{
    public function loadCelebrities()
    {
        return Celebrities::all();
    }

    public function index()
    {
        $celebrities = $this->loadCelebrities();
        return view('celebrities.index', compact('celebrities'));
    }

    public function show($id)
    {
        $celebrity = Celebrities::findOrFail($id);
        return view('celebrities.show', compact('celebrity'));
    }

    public function create()
    {
        return view('celebrities.create');
    }

    public function store(Request $request)
    {
        Log::debug($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'birthdate' => 'nullable|date',
            'nationality' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:300',
            'twitter' => 'nullable|string|max:300',
            'facebook' => 'nullable|string|max:300',
            'youtube' => 'nullable|string|max:300',
            'tiktok' => 'nullable|string|max:300',
            'snapchat' => 'nullable|string|max:300',
            'website' => 'nullable|string|max:300',
            'celebrity_type' => 'required|string|max:30',
            // Add any other validation rules for the celebrity fields
        ]);
        $validatedData['description'] = strip_tags($validatedData['description']);
        $validatedData['description'] = trim($validatedData['description']);

        $celebrity = Celebrities::create($validatedData);

        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = $celebrity->celebrity_id . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/celebrities', $fileName);
                $celebrity->update(['image' => $fileName]);
            }
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
        }

        return redirect()->route('celebrities.index')->with('success', 'Celebrity added successfully!');
    }

    public function edit($id)
    {
        $celebrity = Celebrities::findOrFail($id);
        return view('celebrities.edit', compact('celebrity'));
    }

    public function update(Request $request, $id)
    {
        $celebrity = Celebrities::findOrFail($id);

         $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'birthdate' => 'nullable|date',
            'nationality' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:300',
            'twitter' => 'nullable|string|max:300',
            'facebook' => 'nullable|string|max:300',
            'youtube' => 'nullable|string|max:300',
            'tiktok' => 'nullable|string|max:300',
            'snapchat' => 'nullable|string|max:300',
            'website' => 'nullable|string|max:300',
            'celebrity_type' => 'required|string|max:30',
            // Add any other validation rules for the celebrity fields
        ]);
        $validatedData['description'] = strip_tags($validatedData['description']);
        $validatedData['description'] = trim($validatedData['description']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($celebrity->image && file_exists(public_path('uploads/celebrities/' . $celebrity->image))) {
                unlink(public_path('uploads/celebrities/' . $celebrity->image));
            }
            $fileName = $celebrity->celebrity_id . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/celebrities', $fileName);
            $validatedData['image'] = $fileName;
        }

        $celebrity->update($validatedData);
        return redirect()->route('celebrities.index')->with('success', 'Celebrity updated successfully!');
    }

    public function destroy($id)
    {
        $celebrity = Celebrities::findOrFail($id);
        if ($celebrity->image) {
            $existingFilePath = public_path('uploads/celebrities/' . $celebrity->image);
            if (file_exists($existingFilePath)) {
                unlink($existingFilePath);
            }
        }
        $celebrity->delete();
        return redirect()->route('celebrities.index')->with('success', 'Celebrity deleted successfully!');
    }
}
