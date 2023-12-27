<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z8WPXRT9C1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z8WPXRT9C1');
</script>
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
                            <li><a class="dropdown-item" href="{{ url('/category/' . $category->category_name) }}">{{ $category->category_name }}</a></li>

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
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('events') ? 'active' : '' }}" data-bs-toggle="dropdown">Events</a>
                        <ul class="dropdown-menu" aria-labelledby="eventsDropdown">
                            <li><a class="dropdown-item" href="/events/Fashion Show">Fashion Show</a></li>
                            <li><a class="dropdown-item" href="/events/Jewelry Exhibition">Jewelry Exhibition</a></li>
                            <li> <a class="dropdown-item" href="/events/Workshops">Workshops</a></li>
                            <li> <a class="dropdown-item" href="/events/Start ups">Start ups</a></li>
                            <li><a class="dropdown-item" href="/events/Jewelry Launch Events">Jewelry Launch Events</a></li>
                            <li> <a class="dropdown-item" href="/events/Networking Events">Networking Events</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-title">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('blog') ? 'active' : '' }}" data-bs-toggle="dropdown">Celebrities</a>
                        <ul class="dropdown-menu" aria-labelledby="celebritiesDropdown">
                            <li> <a class="dropdown-item" href="/celebrities/Hollywood Actresses">Hollywood Actresses</a></li>
                            <li> <a class="dropdown-item" href="/celebrities/Bollywood Actresses">Bollywood Actresses</a></li>
                            <li><a class="dropdown-item" href="/celebrities/Influencers and Fashion Icons">Influencers and
                                Fashion Icons</a></li>
                            <li><a class="dropdown-item" href="/celebrities/Red Carpet Jewelry Moments">Red Carpet Jewelry
                                Moments</a></li>
                            <li> <a class="dropdown-item" href="/celebrities/Celebrity Collaborations">Celebrity
                                Collaborations</a></li>
                            <li> <a class="dropdown-item" href="/celebrities/Jewellery Brands Loved by Celebrities">Jewellery
                                Brands Loved by Celebrities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-title">
                        <a class="nav-link dropdown-toggle {{ request()->is('shopNow') ? 'active' : '' }}" href="#" id="shopNowDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                           Shop Now
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="shopNowDropdown">
                            @foreach ($categories as $category)
                                <li>
                                    <a class="dropdown-item" href="/products/{{ $category->category_name }}">
                                        {{ $category->category_name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @show
    
        @yield('content')

    

 <!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <!-- First Section -->
            <div class="col col-md-12 mb-4">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="index.html" class="navbar-brand">
                        <h2 class="m-0 text-white">Fashion Jewellery</h2>
                    </a>
                    <p class="mt-3 mb-4">Admiring your style? Visit Latest Fashion Jewellery for the trendiest
                        pieces that will elevate your look. Stay in touch with us for more fashion inspiration and
                        exclusive offers!</p>
                    <form action="">
                       <h2 style="color:yellow">Join Our WhatsApp Group for Latest Designs and Offers</h2>&nbsp;&nbsp;&nbsp;<h1><a href="https://chat.whatsapp.com/E2XyBOg8A2fFfilZ6F81Zs" style="color:black">https://chat.whatsapp.com/E2XyBOg8A2fFfilZ6F81Zs</a></h1>
                    </form>
                </div>
            </div>
            <!-- Second Section -->
            <div class="col col-md-12 mb-4">
                <div class="d-flex justify-content-center align-items-center">
                    <i class="bi bi-envelope-open text-primary me-2"></i>
                    <a href="mailto:info@latestfashionjewellery.com"><p class="mb-0">info@latestfashionjewellery.com</p></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-primary btn-square me-2" href="#"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-primary btn-square me-2" href="#"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-primary btn-square me-2" href="#"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-primary btn-square" href="#"><i
                            class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
            <!-- Third Section -->
            <div class="col col-md-12 mb-4">
                <div class="d-flex justify-content-center align-items-center">
                    &copy;<a class="text-white border-bottom" href="/">Latest Fashion Jewellery </a>.
                    <hr> All Rights Reserved. Designed by <a class="text-white border-bottom"
                        href="http://www.educationsoul.com">EducationSoul</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="{{ asset('/js/myScript.js') }}"></script> --}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>