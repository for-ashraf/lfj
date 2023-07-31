<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\BlogAuthor; // Import the BlogAuthor model
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function loadAuthors()
    {
        return BlogAuthor::all();
    }

    public function index()
    {
        $authors = $this->loadAuthors();
        return view('app-blog-post', compact('authors'));
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
        return view('app-blog-post', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_id' => 'required|exists:blog_authors,author_id', // Add validation for author_id
        ]);

        // If the validation passes, it means the form data is valid.
        // Now you can process the form data (e.g., save it to the database).

        // Create a new blog entry with the validated data, including the author_id
        Blogs::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'author_id' => $validatedData['author_id'],
        ]);

        // After processing the data, you can redirect the user to a success page
        // or the same page with a success message.
        return redirect()->route('app-blog')->with('success', 'Blog added successfully!');
    }
    

}
