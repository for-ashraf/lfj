<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Tag;
use App\Models\Celebrities;
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
    public function loadBlogs()
    {
        return Blogs::all();
    }
    public function loadBlogsRange(Request $request)
{
    $startIndex = $request->input('startIndex');
    $batchSize = $request->input('batchSize');

    // Fetch the next batch of blogs based on $startIndex and $batchSize
    $blogs = Blogs::skip($startIndex)->take($batchSize)->get();

    // Return a Blade view with the loaded blogs
    return view('partials.blog_items', compact('blogs'))->render();
}

    public function index()
    {
        $authors = $this->loadAuthors();
        $categories = $this->loadCategories();
        $blogs = $this->loadBlogs(); // Fetch the blogs data from the database (adjust the query as needed)
    
        return view('blogs.index', compact('authors', 'categories', 'blogs'));
    }
    public function show($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }
    public function appblog()
    {
        $blogs = $this->loadBlogs();
        return view('app-blog', compact('blogs'));
    }
  
    // Existing methods...

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $celebrities=Celebrities::all();
        $tags = Tag::pluck('title', 'title')->all();
        $authors = $this->loadAuthors(); // Call the getAuthorNames function
        $categories = $this->loadCategories(); // Call the getAuthorNames function
        return view('blogs.create', compact('authors', 'categories','tags','celebrities'));
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
            'author_name' => 'required|exists:blog_authors,author_name',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required',
            'celebrity_id'=>'nullable',
            'meta_tags' => 'nullable|string',
        ]);
     
        // If the validation passes, it means the form data is valid.
        // Now you can process the form data (e.g., save it to the database).
        $author = BlogAuthor::where('author_name', $request['author_name'])->first();
        $validatedData['author_id'] = $author->author_id;

        // Create a new blog entry with the validated data, including the author_id
        $blog = Blogs::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],    
            'author_name' => $validatedData['author_name'],
            'author_id' => $validatedData['author_id'],            
            'celebrity_id' => $validatedData['celebrity_id'],            
            'featured_image' => '', // Set an empty value for now, we'll update it later
            'category_id' => $validatedData['category_id'],
            'publication_date' => now(),
            'meta_tags' => $validatedData['meta_tags'] ?? null,

        ]);
        if ($blog->save()){
            $tagsId = collect($request->tags)->map(function ($tag) {
                $tag = Tag::where('title', $tag)->first();
            
                if ($tag) {
                    return $tag->id;
                }
            
                return null;
            })->filter(function ($tagId) {
                return $tagId !== null;
            })->all();
            $blog->tags()->attach($tagsId);
        }
        // Get the uploaded file
        try {
            if ($request->hasFile('featured_image')) {
             
               
                $file = $request->file('featured_image');
    
                // Generate the file name using the blog_id
                $fileName = $blog->blog_id . '.' . $file->getClientOriginalExtension();
    
                // Move the file to the desired location (e.g., public/uploads)
                $file->move('uploads/blogs', $fileName);
                $blog->update(['featured_image' => $fileName]);
            }
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
        }
    
        // After processing the data, you can redirect the user to a success page
        // or the same page with a success message.
        return redirect()->route('blogs.index')->with('success', 'Blog has been added successfully!');
    }
public function edit($id)
{
    $blog = Blogs::findOrFail($id); // Load the existing blog post
    $authors = $this->loadAuthors();
    $categories = $this->loadCategories();
    $tags = Tag::all();
    $celebrities=Celebrities::all();
    $selectedTags = $blog->tags->pluck('title')->all();
    return view('blogs.edit',compact('blog', 'authors', 'categories','tags','selectedTags','celebrities'));
}

public function update(Request $request, $id)
{
    // Find the blog entry by its ID
    $blog = Blogs::findOrFail($id);
   
    // Validate the form data, including the uploaded file
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'author_name' => 'required|exists:blog_authors,author_name',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'category_id' => 'required',
        'celebrity_id'=>'nullable',
        'meta_tags' => 'nullable|string',
    ]);
      // Retrieve the author by name and update the author_id in the validated data
    $author = BlogAuthor::where('author_name', $validatedData['author_name'])->first();
    $validatedData['author_id'] = $author->author_id;

    // Update the blog entry with the validated data
    $blog->update([
        'title' => $validatedData['title'],
        'content' => $validatedData['content'],
        'author_name' => $validatedData['author_name'],
        'author_id' => $validatedData['author_id'],
        'category_id' => $validatedData['category_id'],
        'celebrity_id'=> $validatedData['celebrity_id'],
        'meta_tags' => $validatedData['meta_tags'] ?? null,

    ]);

    // Update the tags associated with the blog entry
    $tagsId = collect($request->tags)->map(function ($tag) {
        $tag = Tag::where('title', $tag)->first();
    
        if ($tag) {
            return $tag->id;
        }
    
        return null;
    })->filter(function ($tagId) {
        return $tagId !== null;
    })->all();
    
    $blog->tags()->sync($tagsId);

    // Handle the featured image upload
    try {
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');

            // Generate the file name using the blog_id
            $fileName = $blog->blog_id . '.' . $file->getClientOriginalExtension();

            // Move the file to the desired location (e.g., public/uploads)
            $file->move('uploads/blogs/', $fileName);

            // Update the featured_image column
            $blog->update(['featured_image' => $fileName]);
        }
    } catch (\Exception $e) {
        Log::error('File upload failed: ' . $e->getMessage());
    }

    // After updating the data, you can redirect the user to a success page
    // or the same page with a success message.
    return redirect()->route('blogs.index')->with('success', 'Blog entry updated successfully!');
}

public function destroy($id)
{
    $blog = Blogs::findOrFail($id); // Find the blog entry by ID

    // Detach the related tags from the blog entry
    $blog->tags()->detach();

    // Delete the associated featured image if it exists
    if ($blog->featured_image) {
        $existingFilePath = public_path('uploads/blogs/' . $blog->featured_image);
        if (file_exists($existingFilePath)) {
            unlink($existingFilePath);
        }
    }

    // Delete the blog entry from the database
    $blog->delete();

    return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
}

    
    

}
