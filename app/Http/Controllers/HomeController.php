<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Post;
use App\Models\Events;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function loadCategories()
    {
        return Categories::all();
    }

    public function loadEvents()
    {
        // Use the 'orderBy' method to order events by 'event_date' in ascending order (closest to furthest).
        // Then, use the 'take' method to limit the results to the top 3 events.
        return Events::orderBy('event_date')->take(3)->get();
    }
    
    public function index()
    {
        $categories = $this->loadCategories();
        $upcomingEvents = $this->loadEvents();
        //$posts = Post::latest()->take(5)->get();
        //$products = Product::inRandomOrder()->take(8)->get();

        return view('home.index',compact('categories','upcomingEvents'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function contact()
    {
        return view('home.contact');
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