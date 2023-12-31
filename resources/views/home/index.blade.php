@extends('../layout/front_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')
@section('close_header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Discover the Latest in Fashion Jewelry at our Studio – featuring global jewelry events, celebrity styles, insightful blogs, and curated category lists. Explore a vast collection of Amazon affiliate jewelry products and stay on top of the latest trends and exquisite designs">
<meta name="keywords" content="jewellery studio, jewellery events, celebrity styles, jewelry blogs, curated lists, amazon affiliate, latest trends, exquisite designs">
<meta name="author" content="Latest Fashion Jewellery">
<meta name="robots" content="index, follow">
<meta name="og:title" content="Latest Fashion Jewellery | Jewellery Studio, Events, Celebrity Styles, Blogs, Categories, Amazon Affiliate Products">
<meta name="og:description" content="Explore the Latest Fashion Jewellery Studio, worldwide jewellery events, celebrity styles, insightful blogs, category-wise curated lists, and a vast collection of Amazon affiliate jewellery products. Experience the latest trends and discover exquisite jewelry designs.">
<meta name="og:image" content="{{ asset('uploads/home/jewellery_studio.jpg') }}">
<meta name="og:url" content="https://www.latestfashionjewellery.com/">
<meta name="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Latest Fashion Jewellery | Jewellery Studio, Events, Celebrity Styles, Blogs, Categories, Amazon Affiliate Products">
<meta name="twitter:description" content="Explore the Latest Fashion Jewellery Studio, worldwide jewellery events, celebrity styles, insightful blogs, category-wise curated lists, and a vast collection of Amazon affiliate jewellery products. Experience the latest trends and discover exquisite jewelry designs.">
<meta name="twitter:image" content="{{ asset('uploads/home/jewellery_studio.jpg') }}">

    </head>
@endsection
<style>
    .hover-zoom {
        transition: transform 0.5s;
    }

    .hover-zoom:hover {
        transform: scale(1.1);
        cursor: zoom-in;
        /* Change the cursor to zoom-in on hover */
    }

    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    @import url("https://use.fontawesome.com/releases/v5.13.0/css/all.css");

    :root {
        --font1: 'Heebo', sans-serif;
        --font2: 'Fira Sans Extra Condensed', sans-serif;
        --font3: 'Roboto', sans-serif;

        --btnbg: #ffcc00;
        --btnfontcolor: rgb(61, 61, 61);
        --btnfontcolorhover: rgb(255, 255, 255);
        --btnbghover: #ffc116;
        --btnactivefs: rgb(241, 195, 46);


        --label-index: #960796;
        --danger-index: #5bc257;
        /* PAGINATE */
        --link-color: #000;
        --link-color-hover: #fff;
        --bg-content-color: #ffcc00;

    }

    .container-fluid {
        max-width: 1400px;

    }

    .card {
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 0;
        border-radius: 1rem;
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px);
    }


    .card h5 {
        overflow: hidden;
        height: 55px;
        font-weight: 300;
        font-size: 1rem;
    }

    .card h5 a {
        color: black;
        text-decoration: none;
    }

    .card-img-top {
        width: 100%;
        min-height: 250px;
        max-height: 250px;
        object-fit: contain;
        padding: 30px;
    }

    .card h2 {
        font-size: 1rem;
    }


    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    /* Centered text */
    .label-top {
        position: absolute;
        background-color: var(--label-index);
        color: #fff;
        top: 8px;
        right: 8px;
        padding: 5px 10px 5px 10px;
        font-size: .7rem;
        font-weight: 600;
        border-radius: 3px;
        text-transform: uppercase;
    }

    .top-right {
        position: absolute;
        top: 24px;
        left: 24px;

        width: 90px;
        height: 90px;
        border-radius: 50%;
        font-size: 1rem;
        font-weight: 900;
        background: #8bc34a;
        line-height: 90px;
        text-align: center;
        color: white;
    }

    .top-right span {
        display: inline-block;
        vertical-align: middle;
        /* line-height: normal; */
        /* padding: 0 25px; */
    }

    .aff-link {
        /* text-decoration: overline; */
        font-weight: 500;
    }

    .over-bg {
        background: rgba(53, 53, 53, 0.85);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(0.0px);
        -webkit-backdrop-filter: blur(0.0px);
        border-radius: 10px;
    }

    .bold-btn {

        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px;
    }

    .box .btn {
        font-size: 1.5rem;
    }

    @media (max-width: 1025px) {
        .btn {
            padding: 5px 40px 5px 40px;
        }
    }

    @media (max-width: 250px) {
        .btn {
            padding: 5px 30px 5px 30px;
        }
    }

    /* START BUTTON */
    .btn-warning {
        background: var(--btnbg);
        color: var(--btnfontcolor);
        fill: #ffffff;
        border: none;
        text-decoration: none;
        outline: 0;
        /* box-shadow: -1px 6px 19px rgba(247, 129, 10, 0.25); */
        border-radius: 100px;
    }

    .btn-warning:hover {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    .btn-check:focus+.btn-warning,
    .btn-warning:focus {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    .btn-warning:active:focus {
        box-shadow: 0 0 0 0.25rem var(--btnactivefs);
    }

    .btn-warning:active {
        background: var(--btnbghover);
        color: var(--btnfontcolorhover);
        /* box-shadow: -1px 6px 13px rgba(255, 150, 43, 0.35); */
    }

    /* END BUTTON */

    .bg-success {
        font-size: 1rem;
        background-color: var(--btnbg) !important;
        color: var(--btnfontcolor) !important;
    }

    .bg-danger {
        font-size: 1rem;
    }


    .price-hp {
        font-size: 1rem;
        font-weight: 600;
        color: darkgray;
    }

    .amz-hp {
        A font-size: .7rem;
        font-weight: 600;
        color: darkgray;
    }

    .fa-question-circle:before {
        /* content: "\f059"; */
        color: darkgray;
    }

    .fa-heart:before {
        color: crimson;
    }

    .fa-chevron-circle-right:before {
        color: darkgray;
    }
</style>
@section('content')


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0 align-items-center justify-content-center">

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">

                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <img src="{{ asset('img/blog-icon.png') }}" alt="Blogs Count">
                        </div>
                        <a href="{{ route('blogs') }}">
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Most Rated Blogs</h5>
                                <h2 class="text-white mb-0" data-toggle="counter-up">{{ $blogs }}</h2>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <img src="{{ asset('img/elegant-jewellery.jpg') }}" alt="Elegant Jewellery">
                        </div>
                        <a href="{{ route('products') }}">
                            <div class="ps-4">
                                <h5 class="text-primary mb-0">Elegant Jewellery</h5>
                                <h2 class="mb-0" data-toggle="counter-up">{{$product}}</h2>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Facts Start -->
    <!-- Categories -->
    <div class="container">
        <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($categories->chunk(3) as $index => $chunk)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $category)
                                <div class="col-md-4">

                                    <div class="card category-card">
                                        <a style = "color:inherit; text-decoration:none;"
                                            href="{{ url('/category/' . $category->category_name) }}">
                                            <img src="{{ asset('uploads/categories/' . $category->category_image) }}"
                                                class="card-img-top" alt="{{ $category->category_name }}"
                                                style="border: 2px solid pink;" alt="{{ $category->category_name }}">

                                            <div class="card-body">
                                                <h3 class="card-title">{{ $category->category_name }}</h3>
                                                <h6 class="card-text">{{ $category->category_description }}</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Categories End -->
    <!-- Jewellery Studio Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Feel the Elegance</h5>
                <h1 class="mb-0">Try Our Jewellery Studio-Wear the Jewellery <span style="color:pink">You</span> Love</h1>
            </div>
            <a href="{{ route('jewellerystudio') }}">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-upload text-white"></i>
                                </div>
                                <h4>Upload Your Image</h4>
                                <p class="mb-0">Upload your photograph that best fits the jewelry you love to wear</p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-diamond text-white"></i>
                                </div>
                                <h4>Select the Jewellery You Love</h4>
                                <p class="mb-0">Select your own jewelry or choose from our extensive library, which you
                                    can also purchase</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('uploads/home/jewellery_studio.jpg') }}" style="object-fit: cover;" alt="Jewellery Studio Picture">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row g-5">
                            <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-users-cog text-white"></i>
                                </div>
                                <h4>Adjust Your Style</h4>
                                <p class="mb-0">Adjust the placement of the jewelry in your photo to suit your
                                    preferences and desires</p>
                            </div>
                            <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-download text-white"></i>
                                </div>
                                <h4>Download the Jewellery</h4>
                                <p class="mb-0">Voila! Now you can download the masterpiece</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Jewellery Studio End -->
    <!-- Products Start -->
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Selected Jewellery</h5>
        <h2 class="mb-0">Elevate your style with exquisite jewelry collections</h2>
    </div>

    <div class="container-fluid bg-transparent my-4 p-3" style="position: relative">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-3 g-3">

            @foreach ($products as $product)
                <div class="col hp">
                    <div class="card h-100 shadow-sm">
                        <img src="uploads/products/{{ $product->featured_image }}" alt="{{ $product->title }}"
                            style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#myModal{{ $product->id }}"
                            class="card-img-top hover-zoom" />
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <a href="{{ $product->affiliate_link }}" target="_blank">
                                    <span class="float-start badge rounded-pill bg-success">Click to Buy</span>
                                </a>
                                <a href="{{ $product->affiliate_link }}" target="_blank">
                                    <span class="float-end">Reviews</span>
                                </a>
                            </div>
                            <h5 class="card-title">
                                <a target="_blank" href="{{ url('/products/' . $product->id) }}">
                                    {{ implode(' ', array_slice(str_word_count($product->title, 1), 0, 11)) }}
                                    <span style="color:orange">...For Details</span>
                                </a>
                            </h5>
                            <div class="d-grid gap-2 my-5">
                                <a href="{{ url('/jewellerystudio/' . $product->id) }}"
                                    class="btn btn-warning bold-btn">Try at Jewellery Studio</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal{{ $product->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <div class="magnify d-flex justify-content-center align-items-center">
                                    <img src="uploads/products/{{ $product->featured_image }}"
                                        class="img-fluid rounded-lg" alt="{{ $product->title }}" id="magnify-image">
                                </div>
                                <div class="details mt-4">
                                    <p class="lead">
                                        {{ implode(' ', array_slice(str_word_count($product->description, 1), 0, 35)) }}
                                        <span style="color:blue">....</span>
                                    </p>
                                    <a href="{{ url('/products/' . $product->id) }}"
                                        class="btn btn-outline-warning btn-lg mt-4">Full Details</a>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <a href="{{ url('/jewellerystudio/' . $product->id) }}"
                                    class="btn btn-warning bold-btn">Try at Jewellery Studio</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col hp" id="loadMoreCard">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center"
                        style="display:flex; background-color:rgb(230, 229, 229); justify-content: center; align-items: center;">
                        <a href="{{ route('products') }}" class="btn btn-primary" id="loadMoreBtn">Load More</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products End -->
    <!-- Events Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Upcoming Events</h5>
                <h2 class="mb-0">Discover these captivating upcoming events</h2>
            </div>
            <div class="row g-0">
                @foreach ($upcomingEvents as $event)
                    @if ($loop->index % 2 == 0)
                        <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">
                            <div class="bg-light rounded">
                            @else
                                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    @endif
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h5 class="text-primary mb-1">{{ $event->event_name }}</h5>
                    </div>
                    <div class="p-5 pt-0">
                        <h2 class="display-5 mb-3">
                            <small class="align-top" style="font-size: 11px; line-height: 22px;">Starts</small><small
                                class="align-top"
                                style="font-size: 20px; line-height: 40px;">{{ \Carbon\Carbon::parse($event->event_from_date)->format('jS M Y') }}
                            </small>
                        </h2>
                        <div class="d-flex justify-content-between mb-3" style="text-align:justify;"><span>
                                {{ implode(' ', array_slice(str_word_count($event->event_description, 1), 0, 35)) }}<span><span
                                        style="color:blue"><a href="{{ url('/events/' . $event->event_id) }}">....Read
                                            more</a></span></div>
                        <a href="{{ url('/events/' . $event->event_id) }}" class="btn btn-primary py-2 px-4 mt-4">View
                            Details</a>
                    </div>
            </div>
        </div>
        @endforeach
        <div style="display: flex; background-color: lightblue; justify-content: center; align-items: center;"
            class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">
            <!-- Your existing card content goes here -->

            <!-- Load More Button -->
            <div class="text-center mb-4">
                <button class="btn btn-outline-dark"
                    style="background-color: orange; mouse-hover:var(--link-color-hover): black; border-color: orange;">Explore
                    More</button>
            </div>
        </div>
    </div>
    <!-- Events End -->
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h2 class="mb-0">Unveiling Gems of Inspiration: Read Our Fresh Blog Content</h2>
            </div>
            <div class="row g-5">
                @foreach ($randBlogs as $blogs)
                    @if ($loop->index % 2 == 0)
                        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                            @else
                                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                                    <div class="blog-item bg-white rounded overflow-hidden">
                    @endif
                    <div class="blog-img position-relative overflow-hidden d-flex align-items-center justify-content-center">
                        <img class="img-fluid mx-auto" style="max-width: 100%; height: 200px; object-fit: cover;"
                            src="{{ asset('uploads/blogs/' . $blogs->featured_image) }}" alt="{{ $blogs->title }}">


                        <a class="position-absolute top-0 start-0 bg-danger text-white rounded-end mt-5 py-2 px-4"
                            href="">{{ $blogs->categories->category_name }}</a>
                    </div>
                    <div class="p-4">
                        <h5 class="mb-3">{{$blogs->title}}</h5>
                        <p style="text-align: justify"> {{ implode(' ', array_slice(str_word_count($blogs->content, 1), 0, 35)) }}</p>
                        <a class="text-uppercase" href="{{ url('/blog/' . $blogs->blog_id) }}">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
            </div>
        </div>
        @endforeach
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
            <div class="blog-item bg-light rounded overflow-hidden h-100 d-flex flex-column">
                <div class="blog-img position-relative overflow-hidden d-flex align-items-center justify-content-center flex-grow-1">
                    <h4 class="text-center"><a href="{{route('blogs')}}">Explore More Blogs</a></h4>
                </div>
                
            </div>
        </div>
        
    </div>
    </div>
    </div>
    <!-- End Blog -->
    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Celebrities</h5>
                <h2 class="mb-0">From Studio to Spotlight: Celebrities Bringing Our Designs to Life</h2>
            </div>
            <div class="row g-5">
                @foreach($celebrities as $celebrity)
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('uploads/celebrities/' . $celebrity->image) }}" alt="$celebrity->name">
                            <div class="team-social">
                                
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/{{$celebrity->twitter}}"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/{{$celebrity->facebook}}"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/{{$celebrity->instagram}}"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.tiktok.com/{{$celebrity->tiktok}}"><i
                                        class="fab fa-tiktok fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">{{$celebrity->name}}</h4>
                            <p class="m-0">Date of Birth:<span style="color:orange"> {{\Carbon\Carbon::parse($celebrity->birthdate)->format('jS M Y') }}</span></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden h-100 d-flex align-items-center justify-content-center">
                        <div class="team-img overflow-hidden">
                            <h4 class="text-center"><a href="{{ route('celebrities') }}">Explore More</a></h4>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach($jbrands as $jbrand)
                    <a href="{{ url('/brands/' . $jbrand->id) }}"><img src="{{ asset($jbrand->brand_image) }}" alt="{{$jbrand->brand_name}}"></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->
@endsection
