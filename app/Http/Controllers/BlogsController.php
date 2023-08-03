<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use App\Models\Blogs;
use App\Models\BlogAuthor; // Import the BlogAuthor model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Import the Log facade

class BlogsController extends Controller
{
    public function loadAuthors()
    {
        return BlogAuthor::all();
    }
    public function loadCategories()
    {
        return Categories::all();
    }

    public function index()
    {
        $authors = $this->loadAuthors();
        $categories = $this->loadCategories();
        
        return view('app-blog-post', compact('authors', 'categories'));
    }
    
    // Existing methods...

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = $this->getAuthorNames(); // Call the getAuthorNames function
        $categories = $this->getCategoryNames(); // Call the getAuthorNames function
        return view('app-blog-post', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::debug($request->all());
    
        // Validate the form data, including the uploaded file
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_id' => 'required|exists:blog_authors,author_id',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
        ]);
    
        // If the validation passes, it means the form data is valid.
        // Now you can process the form data (e.g., save it to the database).
    
        // Create a new blog entry with the validated data, including the author_id
        $blog = Blogs::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'author_id' => $validatedData['author_id'],
            'featured_image' => '', // Set an empty value for now, we'll update it later
            'category_id' => $validatedData['category_id'],
        ]);
    
        // Get the uploaded file
        try {
            if ($request->hasFile('featured_image')) {
                $file = $request->file('featured_image');
    
                // Generate the file name using the blog_id
                $fileName = $blog->blog_id . '.' . $file->getClientOriginalExtension();
    
                // Move the file to the desired location (e.g., public/uploads)
                $file->move('uploads', $fileName);
                $blog->update(['featured_image' => $fileName]);
            }
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
        }
    
        // After processing the data, you can redirect the user to a success page
        // or the same page with a success message.
        return redirect()->route('app-blog')->with('success', 'Blog added successfully!');
    }
    
    
    

}
