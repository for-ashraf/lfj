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
        return view('backend.dashboard', compact('totalBlogs', 'totalProd', 'totalEvents', 'totalCelebrities','users'));

    }
    public function blogs()
    {
        //$roles = Role::all();
        return view('home.blogs');
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