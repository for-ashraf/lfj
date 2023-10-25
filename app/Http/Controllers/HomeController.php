<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Categories;
use App\Models\Blogs;
use App\Models\AmazonProduct;
use App\Models\ImageGallery;
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


        $products = AmazonProduct::inRandomOrder()
        ->limit(30)
        ->get();

        $categories = $this->loadCategories();
        $jbrands = $this->loadJBrands();
        $upcomingEvents = $this->loadEvents();
      
        return view('home.index', compact('categories', 'jbrands', 'upcomingEvents', 'initialBlogs','products'));
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
        $myBlogs = Blogs::inRandomOrder()
            ->limit(10)
            ->get();
        //$roles = Role::all();
        return view('home.blogs', compact('blogs', 'categories', 'myBlogs'));
    }
    public function celebrities()
    {
        $categories = Categories::all();
        $blogs = Blogs::latest()->take(6)->get();
        $celebrities = Celebrities::all();
        $myBlogs = Blogs::inRandomOrder()
            ->limit(10)
            ->get();
        //$roles = Role::all();
        return view('home.celebrities', compact('blogs', 'categories', 'myBlogs', 'celebrities'));
    }
    public function events()
    {
        $categories = Categories::all();

        $now = Carbon::now();

        $events = Events::where('event_date', '>=', $now)->get();

        //$roles = Role::all();
        return view('home.events', compact('events', 'categories'));
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
    public function showCelebrity($id)
    {
        $categories = Categories::all();
        $blogs = Blogs::where('celebrity_id', $id)->get();
        $celebrity = Celebrities::find($id); // Replace 'Celebrity' with your actual model name

        return view('home.celebrityShow', compact('celebrity', 'categories', 'blogs'));
    }
    public function showEvent($id)
    {
        $categories = Categories::all();
        $event = Events::find($id); // Replace 'Celebrity' with your actual model name
        $category_id = $event->category_id;
        $blogs = Blogs::where('category_id', $category_id)->take(4)->get();
        return view('home.eventShow', compact('event', 'categories', 'blogs'));
    }

    public function showCategory($category)
    {
        $sblogs = Blogs::latest()->take(6)->get();
        $categories = Categories::all();
        $query = $category;
        $blogs = Blogs::whereHas('categories', function ($query) use ($category) {
            $query->where('category_name', $category);
        })->get();

        if ($blogs->count() > 0) {
            return view('home.searchblog', compact('blogs', 'sblogs', 'categories', 'query'));
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

    public function about()
    {
        $categories = Categories::all();
        return view('home.about', compact('categories'));
    }
    public function categories()
    {
        $blogs = Blogs::count();
        $events = Events::count();
        $images = ImageGallery::count();
        $celebrities = Celebrities::count();
        $products = AmazonProduct::count();
        $amazonProducts = AmazonProduct::all();
        $categories = Categories::all();
        return view('home.categories', compact('categories', 'amazonProducts', 'blogs', 'events', 'images', 'celebrities', 'products'));
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