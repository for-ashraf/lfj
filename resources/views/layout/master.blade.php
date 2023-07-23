<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LFJ-@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f8f9fa;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><span style="color: #ff4d4d; font-weight: bold;">Latest</span>
                Fashion
                <span style="color: #ff4d4d; font-weight: bold;">Jewellery</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i>
                            Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-list-ul"></i> Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                            <li><a class="dropdown-item" href="/necklaces">Necklaces</a></li>
                            <li><a class="dropdown-item" href="#">Earrings</a></li>
                            <li><a class="dropdown-item" href="#">Bracelets</a></li>
                            <li><a class="dropdown-item" href="#">Rings</a></li>
                            <li><a class="dropdown-item" href="#">Pendants</a></li>
                            <li><a class="dropdown-item" href="#">Anklets</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book"></i> Blogs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="blogsDropdown">
                            <li><a class="dropdown-item" href="#">Latest Trends</a></li>
                            <li><a class="dropdown-item" href="#">Style Tips</a></li>
                            <li><a class="dropdown-item" href="#">Jewelry Care</a></li>
                            <li><a class="dropdown-item" href="#">Celebrity Jewelry</a></li>
                            <li><a class="dropdown-item" href="#">DIY Jewelry Projects</a></li>
                            <li><a class="dropdown-item" href="#">Jewelry Gift Ideas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="eventsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-calendar"></i> Events
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="celebritiesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-star"></i> Celebrities
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="shopNowDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-shopping-bag"></i> Shop Now
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
    <script src="{{ asset('js/script.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>