<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Blogs;
use App\Models\AmazonProduct;
use App\Models\Events;
use App\Models\Celebrities;
use App\Models\User;
use App\Models\JewelleryBrand;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function loadBlogsRange($startIndex, $batchSize)
    {
        // Fetch the next batch of blogs based on $startIndex and $batchSize
        $blogs = Blogs::skip($startIndex)->take($batchSize)->get();

        // Return a Blade view with the loaded blogs
        return $blogs;
    }


    public function loadCategories()
    {
        return Categories::all();
    }

    public function loadEvents()
    {

        return Events::orderBy('event_date', 'desc')->take(4)->get();
    }
    public function loadJBrands()
    {

        return JewelleryBrand::orderBy('id')->take(4)->get();
    }

    public function index()
    {
        // Define the start index and batch size
        $startIndex = 0; // Adjust this based on your needs
        $batchSize = 4; // Adjust this based on your needs

        // Load the initial batch of blogs
        $initialBlogs = $this->loadBlogsRange($startIndex, $batchSize);

        $categories = $this->loadCategories();
        $jbrands = $this->loadJBrands();
        $upcomingEvents = $this->loadEvents();

        return view('home.index', compact('categories', 'jbrands', 'upcomingEvents', 'initialBlogs'));
    }
    public function dashboard()
    {
        $users = User::latest()->get();
        // Your dashboard logic here...
        $totalBlogs = Blogs::count();
        $totalProd = AmazonProduct::count();
        $totalEvents = Events::count();
        $totalCelebrities = Celebrities::count();
        // Then, return a view and pass the data to be displayed on the dashboard.
        return view('backend.dashboard', compact('totalBlogs', 'totalProd', 'totalEvents', 'totalCelebrities', 'users'));

    }
    public function blogs()
    {
        $categories = Categories::all();
        $blogs = Blogs::latest()->take(6)->get();
        //$roles = Role::all();
        return view('home.blogs', compact('blogs', 'categories'));
    }
    public function searchBlog(Request $request)
    {
        $sblogs = Blogs::latest()->take(6)->get();
        $categories = Categories::all();
        $query = $request->input('query');
        $blogs = Blogs::where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->orWhereHas('tags', function ($tagQuery) use ($query) {
                $tagQuery->where('title', 'like', '%' . $query . '%');
            })
            ->get();



        return view('home.searchblog', compact('sblogs', 'blogs', 'query', 'categories'));
    }
    public function showCategory($category)
{
    //dd($category);
    $sblogs = Blogs::latest()->take(6)->get();
    $categories = Categories::all();
    $query = $category;
    // Assuming you have a 'category_id' column in the 'blogs' table
    $blogs = Blogs::whereHas('categories', function ($query) use ($category) {
        $query->where('category_name', $category);
    })->get();
    
    if ($blogs->count() > 0) {
        return view('home.searchblog', compact('blogs', 'sblogs', 'categories','query'));
    } else {
        // If no blogs are found in the specified category, perform a search
   
        $blogs = Blogs::from('blogs as b')
        ->distinct()
        ->leftJoin('blog_tag as bt', 'b.blog_id', '=', 'bt.blog_id')
        ->leftJoin('tags as t', 'bt.tag_id', '=', 't.id')
        ->where('t.title', $category)
        ->select('b.*')
        ->get();
        
        return view('home.searchblog', compact('blogs', 'sblogs', 'query', 'categories'));
    }
}

    
    
    public function showBlog($id)
    {
        $categories = Categories::all();
        // Retrieve the blog with the given ID from your database
        $blogs = Blogs::latest()->take(6)->get();
        $blog = Blogs::find($id);

        // Check if the blog exists
        if (!$blog) {
            abort(404); // Display a 404 error page if the blog is not found
        }

        return view('home.showblog', compact('blog', 'blogs', 'categories'));
    }




    public function sendContactForm(Request $request)
    {
        // Validate the contact form inputs
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process and send the contact form data (e.g., send email, store in database)

        // Redirect back to the contact page with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}