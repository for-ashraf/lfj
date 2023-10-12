<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LFJ-@yield('title')</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f8f9fa;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/images/home/website-icon.png')}}" alt="Website Icon" class="website-icon">
                <span class="website-title">Latest </span><span
                    style="color: gold;  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Fashion</span> <span
                    class="website-title">Jewellery</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown menu-title {{ request()->is('categories') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="categories/{{ $category->category_name }}">{{ $category->category_name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-title">
                 
                        <a class="nav-link dropdown-toggle {{ request()->is('blog') ? 'active' : '' }}" href="/blogs" id="blogsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blogs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="blogsDropdown">
                            <li><a class="dropdown-item" href="/blogs/Latest Trends">Latest Trends</a></li>
                            <li><a class="dropdown-item" href="/blogs/Style Tips">Style Tips</a></li>
                            <li><a class="dropdown-item" href="/blogs/Jewellery Care">Jewellery Care</a></li>
                            <li><a class="dropdown-item" href="/blogs/Celebrity Jewellery">Celebrity Jewellery</a></li>
                            <li><a class="dropdown-item" href="/blogs/DIY Jewelry Projects">DIY Jewelry Projects</a></li>
                            <li><a class="dropdown-item" href="/blogs/Jewelry Gift Ideas">Jewelry Gift Ideas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-title">
                        <a class="nav-link dropdown-toggle {{ request()->is('events') ? 'active' : '' }}" href="#" id="eventsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           Events
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="eventsDropdown">
                            <li><a class="dropdown-item" href="#">Fashion Show</a></li>
                            <li><a class="dropdown-item" href="#">Jewelry Exhibition</a></li>
                            <li><a class="dropdown-item" href="#">Workshops</a></li>
                            <li><a class="dropdown-item" href="#">Charity Events</a></li>
                            <li><a class="dropdown-item" href="#">Jewelry Launch Events</a></li>
                            <li><a class="dropdown-item" href="#">Networking Events</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-title">
                        <a class="nav-link dropdown-toggle {{ request()->is('Celebrities') ? 'active' : '' }}" href="#" id="celebritiesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                             Celebrities
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="celebritiesDropdown">
                            <li><a class="dropdown-item" href="#">Hollywood Actresses</a></li>
                            <li><a class="dropdown-item" href="#">Bollywood Actresses</a></li>
                            <li><a class="dropdown-item" href="#">Influencers and Fashion Icons</a></li>
                            <li><a class="dropdown-item" href="#">Red Carpet Jewelry Moments</a></li>
                            <li><a class="dropdown-item" href="#">Celebrity Collaborations</a></li>
                            <li><a class="dropdown-item" href="#">Jewelry Brands Loved by Celebrities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-title">
                        <a class="nav-link dropdown-toggle {{ request()->is('shopNow') ? 'active' : '' }}" href="#" id="shopNowDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           Shop Now
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="shopNowDropdown">
                            <li><a class="dropdown-item" href="#">Necklaces</a></li>
                            <li><a class="dropdown-item" href="#">Earrings</a></li>
                            <li><a class="dropdown-item" href="#">Bracelets</a></li>
                            <li><a class="dropdown-item" href="#">Rings</a></li>
                            <li><a class="dropdown-item" href="#">Sets and Collections</a></li>
                            <li><a class="dropdown-item" href="#">Custom Jewelry</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @show
    
        @yield('content')

    

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Latest Fashion Jewellery. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/js/myScript.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>