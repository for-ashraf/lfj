<!DOCTYPE html>
<html lang="en">

<head>
       <!-- Google Tag Manager -->
       <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MS4Z5WJ7');
    </script>
    <!-- End Google Tag Manager -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1999165272148254"
     crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z8WPXRT9C1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Z8WPXRT9C1');
    </script>
    <title>LFJ-@yield('title')</title>
    

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    @yield('close_header')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="text-light"><i
                            class="fa fa-envelope-open me-2"></i>info@latestfashionjewellery.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://twitter.com/"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/latestfashionjewellery.2023"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.linkedin.com/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                        href="https://www.youtube.com/educationsoul/"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Latest Fashion Jewellery</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="{{ request()->is('/') ? 'active' : '' }}; nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <div class="nav-item dropdown">
                        <a href="/categories"
                            class="nav-link dropdown-toggle {{ request()->is('categories') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu m-0">
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ url('/category/' . $category->category_name) }}">{{ $category->category_name }}</a>
                                </li>
                            @endforeach

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="/blogs" class="nav-link dropdown-toggle {{ request()->is('blog') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Blog</a>
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
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->is('events') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Events</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="/events/Fashion Show">Fashion Show</a>
                            <a class="dropdown-item" href="/events/Jewellry Exhibition">Jewellry Exhibition</a>
                            <a class="dropdown-item" href="/events/Workshops">Workshops</a>
                            <a class="dropdown-item" href="/events/Start ups">Start ups</a>
                            <a class="dropdown-item" href="/events/Jewellry Launch Events">Jewellry Launch Events</a>
                            <a class="dropdown-item" href="/events/Networking Events">Networking Events</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->is('blog') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Celebrities</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="/celebrities/Hollywood Actresses">Hollywood Actresses</a>
                            <a class="dropdown-item" href="/celebrities/Hollywood Actors">Hollywood Actors</a>
                            <a class="dropdown-item" href="/celebrities/Bollywood Actresses">Bollywood Actresses</a>
                            <a class="dropdown-item" href="/celebrities/Influencers and Fashion Icons">Influencers and
                                Fashion Icons</a>
                            <a class="dropdown-item" href="/celebrities/Red Carpet Jewellery Moments">Red Carpet Jewellery
                                Moments</a>
                            <a class="dropdown-item" href="/celebrities/Celebrity Collaborations">Celebrity
                                Collaborations</a>
                            <a class="dropdown-item"
                                href="/celebrities/Jewellery Brands Loved by Celebrities">Jewellery
                                Brands Loved by Celebrities</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->is('shopNow') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Shop Now</a>
                        <div class="dropdown-menu m-0">
                            @foreach ($categories as $category)
                                <a class="dropdown-item"
                                    href="/products/{{ $category->category_name }}">{{ $category->category_name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">&nbsp;</h1>
                    <a href="" class="h5 text-white">&nbsp;</a>
                    <i class="far text-white px-2"></i>
                    <a href="" class="h5 text-white">&nbsp;</a>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid bg-primary py-5 bg-header2"
            style="margin-bottom: 90px; background-image: url('{{ asset('images/home/3.jpg') }}');">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h2 class="display-4 text-white animated zoomIn">Opulent</h1>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Navbar End -->

    @yield('content')



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0 ">&copy; <a class="text-white border-bottom" href="#">Latest Fashion Jewellery</a>. All Rights Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed by <a class="text-white border-bottom" href="https://www.educationsoul.com">EducationSoul</a>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
