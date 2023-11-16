<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Latest Fashion Jewellery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Template Stylesheet -->
</head>

<body>
  


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="/"><small class="me-3 text-light">Latest Fashion Jewellery</small></a>
                    <a href="mailto:info@latestfashionjewellery.com"><small class="text-light"><i
                                class="fa fa-envelope-open me-2"></i>info@latestfashionjewellery.com</small></a>

                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>LFJ</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}; nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <div class="nav-item dropdown">
                        <a href="/categories" class="nav-link dropdown-toggle {{ request()->is('categories') ? 'active' : '' }}" data-bs-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu m-0">
                            @foreach ($categories as $category)
                                <a class="dropdown-item"
                                    href="categories/{{ $category->category_name }}">{{ $category->category_name }}</a>
                            @endforeach

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="/blogs" class="nav-link dropdown-toggle {{ request()->is('blog') ? 'active' : '' }}" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="/blogs/Latest Trends">Latest Trends</a>
                            <a class="dropdown-item" href="/blogs/Style Tips">Style Tips</a>
                            <a class="dropdown-item" href="/blogs/Jewellery Care">Jewellery Care</a>
                            <a class="dropdown-item" href="/blogs/Celebrity Jewellery">Celebrity Jewellery</a>
                            <a class="dropdown-item" href="/blogs/DIY Jewellery Projects">DIY Jewellery Projects</a>
                            <a class="dropdown-item" href="/blogs/Jewellery Gift Ideas">Jewellery Gift Ideas</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('events') ? 'active' : '' }}" data-bs-toggle="dropdown">Events</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="/events/Fashion Show">Fashion Show</a>
                            <a class="dropdown-item" href="/events/Jewelry Exhibition">Jewelry Exhibition</a>
                            <a class="dropdown-item" href="/events/Workshops">Workshops</a>
                            <a class="dropdown-item" href="/events/Start ups">Start ups</a>
                            <a class="dropdown-item" href="/events/Jewelry Launch Events">Jewelry Launch Events</a>
                            <a class="dropdown-item" href="/events/Networking Events">Networking Events</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('blog') ? 'celebrities' : '' }}" data-bs-toggle="dropdown">Celebrities</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="/celebrities/Hollywood Actresses">Hollywood Actresses</a>
                            <a class="dropdown-item" href="/celebrities/Bollywood Actresses">Bollywood Actresses</a>
                            <a class="dropdown-item" href="/celebrities/Influencers and Fashion Icons">Influencers and
                                Fashion Icons</a>
                            <a class="dropdown-item" href="/celebrities/Red Carpet Jewelry Moments">Red Carpet Jewelry
                                Moments</a>
                            <a class="dropdown-item" href="/celebrities/Celebrity Collaborations">Celebrity
                                Collaborations</a>
                            <a class="dropdown-item" href="/celebrities/Jewellery Brands Loved by Celebrities">Jewellery
                                Brands Loved by Celebrities</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('shopNow') ? 'active' : '' }}" data-bs-toggle="dropdown">Shop Now</a>
                        <div class="dropdown-menu m-0">
                            @foreach ($categories as $category)
                                <a class="dropdown-item"
                                    href="categories/{{ $category->category_name }}">{{ $category->category_name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header2"
            style="margin-bottom: 90px; background-image: url('{{ asset('images/home/3.jpg') }}');">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Opulent</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <form action="{{ route('home.searchBlog') }}" method="GET">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" name="query" class="form-control bg-transparent border-primary p-3"
                                placeholder="Type search keyword">
                            <button type="submit" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
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




<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i
        class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
