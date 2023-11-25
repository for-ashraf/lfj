<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
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
        $blogs = Blogs::count();
        $events = Events::count();
        $images = ImageGallery::count();
        $celebrities = Celebrities::count();
        $products = AmazonProduct::count();
        $amazonProducts = AmazonProduct::all();
        $categories = Categories::all();

        $products = AmazonProduct::inRandomOrder()
            ->limit(30)
            ->get();

        $jbrands = $this->loadJBrands();
        $upcomingEvents = $this->loadEvents();

        return view('home.index', compact('blogs', 'celebrities', 'events', 'categories', 'jbrands', 'upcomingEvents', 'products'));
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
    public function jstudio($id = null)
    {
        $categories = Categories::all();
        $imageURL = null;

        if ($id) {
            // Load the product image based on the ID
            $product = Product::find($id);

            if ($product && $product->featured_image) {
                $imagePath = 'uploads/products/' . $product->featured_image;
                $imageURL = asset($imagePath);
            }
        }

        return view('home.jstudio', compact('categories', 'imageURL'));
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

        // Check if $id is numeric
        if (is_numeric($id)) {
            $celebrities = Celebrities::find($id);
            $blogs = Blogs::where('title', 'LIKE', "%$celebrities->name%")
                ->orWhere('content', 'LIKE', "%$celebrities->name%")
                ->get();

        } else {
            // If $id is not numeric, assume it's a celebrity name and find by name
            $celebrities = Celebrities::where('name', 'LIKE', "%$id%")
                ->orWhere('description', 'LIKE', "%$id%")
                ->orWhere('celebrity_type', 'LIKE', "%$id%")
                ->get();


            $blogs = Blogs::where('title', 'LIKE', "%$id%")
                ->orWhere('content', 'LIKE', "%$id%")
                ->get();

        }

        return view('home.celebrityShow', compact('celebrities', 'categories', 'blogs'));
    }

    public function showEvent($id)
    {
        $categories = Categories::all();

        // Check if $id is numeric
        if (is_numeric($id)) {
            $events = Events::find($id);
            $category_id = $events->category_id;
            $blogs = Blogs::where('category_id', $category_id)->take(4)->get();

        } else {
            // If $id is not numeric, try finding in event_category first
            $events = Events::where('event_category', 'LIKE', "%$id%")->get();

            if ($events->isEmpty()) {
                // If not found in event_category, assume it's an event name and find by name
                $events = Events::where('event_name', 'LIKE', "%$id%")
                    ->orWhere('event_description', 'LIKE', "%$id%")
                    ->get();
            }

            $blogs = Blogs::where('title', 'LIKE', "%$id%")
                ->orWhere('content', 'LIKE', "%$id%")
                ->get();
        }
        return view('home.eventShow', compact('events', 'categories', 'blogs'));
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
    public function category($key)
    {
        $currentDate = Carbon::now();
        $categoryName = '';
        $categories = Categories::all();
        if (is_numeric($key)) {
            // Find category_id based on numeric key
            $category = Categories::where('category_id', $key)->first();

            // If category exists, use its name for searching
            if ($category) {
                $categoryName = $category->category_name;

                $blogs = Blogs::where('category_id', $key)
                    ->orWhere('content', 'like', '%' . $categoryName . '%')
                    ->inRandomOrder()
                    ->take(5)
                    ->get();

                // Search in Celebrities table
                $celebrities = Celebrities::where('description', 'like', '%' . $categoryName . '%')
                    ->inRandomOrder()
                    ->take(5)
                    ->get();
                $products = AmazonProduct::where('title', 'like', '%' . $categoryName . '%')
                    ->orWhere('description', 'like', '%' . $categoryName . '%')
                    ->paginate(5);

                $events = Events::where('event_date', '>=', $currentDate)
                    ->where(function ($query) use ($categoryName) {
                        $query->where('event_name', 'like', '%' . $categoryName . '%')
                            ->orWhere('event_description', 'like', '%' . $categoryName . '%');
                    })
                    ->orderBy('event_date')
                    ->take(5)
                    ->get();
            }
            // Search in Blogs table
        } else {
            $blogs = Blogs::where('category_id', $key)
                ->orWhere('content', 'like', '%' . $key . '%')
                ->inRandomOrder()
                ->take(5)
                ->get();

            // Search in Celebrities table
            $celebrities = Celebrities::where('description', 'like', '%' . $key . '%')
                ->inRandomOrder()
                ->take(5)
                ->get();
            $products = AmazonProduct::where('title', 'like', '%' . $key . '%')
                ->orWhere('description', 'like', '%' . $key . '%')
                ->paginate(5);

            $events = Events::where('event_date', '>=', $currentDate)
                ->where(function ($query) use ($key) {
                    $query->where('event_name', 'like', '%' . $key . '%')
                        ->orWhere('event_description', 'like', '%' . $key . '%');
                })
                ->orderBy('event_date')
                ->take(5)
                ->get();

        }
        return view('home.category', compact('categories', 'products', 'blogs', 'events', 'celebrities', 'key'));
    }

    public function loadMoreData(Request $request)
    {
        $start = $request->input('start');

        $data = AmazonProduct::orderBy('id', 'ASC')
            ->offset($start)
            ->limit(3)
            ->get();

        // Log the data for debugging

        // Calculate the next start point for pagination
        $nextStart = $start + count($data);

        // Return the blog data and the next start point
        return response()->json(['message' => 'Success', 'data' => $data, 'next' => $nextStart]);
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
    public function products()
    {
        $currentDate = Carbon::now();
        $categories = Categories::all();
    
        $allProducts = AmazonProduct::all();
        $perPage = 14;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $allProducts->slice(($currentPage - 1) * $perPage, $perPage)->all();
    
        $products = new LengthAwarePaginator($currentItems, count($allProducts), $perPage);
    
        return view('home.products', compact('categories', 'products'));
    }
}