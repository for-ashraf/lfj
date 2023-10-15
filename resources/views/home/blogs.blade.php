@extends('../layout/landing_master') <!-- Specify the parent view to extend -->
@section('content')
    <style>
        *,
        *::after,
        *::before {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            outline: none;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #e8e8e8;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #363636;
            font-size: 40px;
        }

        .inner-wrapper {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
        }

        .card {
            flex-basis: 33.33333%;
            padding: 15px;
        }

        .inner-card {
            background-color: #fff;
            padding: 15px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
        }

        .img-wrapper {
            width: 100%;
            height: 250px;
            margin-bottom: 10px;
        }

        .img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .content {
            margin-bottom: 20px;
        }

        .content h1 {
            font-weight: 900;
            font-size: 16px;
            margin-bottom: 10px;
            color: #444;
        }

        .content p {
            font-size: 14px;
            line-height: 1.5;
            color: #555;
        }

        .btn-wrapper {
            display: block;
            text-align: center;
        }

        .view-btn {
            width: 70%;
            height: 40px;
            border: none;
            background-color: steelblue;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .view-btn:hover {
            box-shadow: 0 3px 6px rgba(0, 0, 0, .4);
        }

        .light-box {
            position: fixed;
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, .6);
            width: 100%;
            height: 100vh;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            transition: all 200ms ease-out;
        }

        .box {
            width: 600px;
            height: 400px;
            background-color: #fff;
            transform: scale(0);
            transition: all 200ms ease-in-out;
            padding: 10px;
            box-shadow: 0 3px 9px rgba(0, 0, 0, .1);
            position: relative;
        }

        .box-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            padding: 15px;
        }

        .box .light-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .box .close-btn {
            position: absolute;
            z-index: 100;
            font-size: 30px;
            color: #ccc;
            left: 100%;
            top: 0;
            border: 2px solid #ccc;
            border-radius: 50%;
            display: block;
            width: 40px;
            height: 40px;
            text-align: center;
            line-height: 35px;
            margin-left: 10px;
            cursor: pointer;
            transition: all 200ms linear;
        }

        /* Effect */
        .effect .light-box {
            opacity: 1;
            visibility: visible;
        }

        .effect .light-box .box {
            transform: scale(1);
        }

        @media (max-width: 780px) {
            .card {
                flex-basis: 50%;
            }

            .title {
                font-size: 30px;
            }
        }

        @media (max-width: 500px) {
            .card {
                flex-basis: 5100%;
            }

            .box .close-btn {
                margin-left: 0;
                left: 80%;
                top: -12%;
            }
        }

        .credit {
            font-size: 14px;
        }
    </style>
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="row">
                        @foreach ($myBlogs as $myblog)
                            <div class="col-md-6 mb-4"> <!-- Adjust the column width and margin as needed -->
                                <div class="card h-100">
                                    <div class="inner-card">
                                        <div class="img-wrapper">
                                            <img src="{{ asset('uploads/blogs/' . $myblog->featured_image) }}" alt="">
                                        </div>
                                        <div class="content">
                                            <h1>{{$myblog->title}}</h1>
                                            <p>{{ \Illuminate\Support\Str::words($myblog->content, 10, '...') }}</p>
                                        </div>
                                        <div class="btn-wrapper">
                                            <button class="view-btn" data-src="{{ route('home.showblog', $myblog->blog_id) }}">View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->iteration % 2 == 0)
                                </div><div class="row">
                            @endif
                        @endforeach
                        <h4 style="color:#478559">Search for huge collection of Jewellery Blogs</h4><br>   <!-- Search Form Start -->
                        <form action="{{ route('home.searchBlog') }}" method="GET">
                            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                                <div class="input-group">
                                    <input type="text" class="form-control p-3" placeholder="Keyword" name="query">
                                    <!-- Add the name attribute to capture the input value -->
                                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <!-- Search Form End -->{{-- <h3 style="color:red">For more blogs, click <a href="{{route('home.categories')}}">here</a> or seach keyword above, please.</h3> --}}
                    </div>

                    <!-- Blog Detail End -->
                    <hr>
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Jewellery</a>
                            <a href="" class="btn btn-light m-1">Fashion</a>
                            <a href="" class="btn btn-light m-1">Events</a>
                            <a href="" class="btn btn-light m-1">Celebrities</a>
                            <a href="" class="btn btn-light m-1">Blogs</a>
                            <a href="" class="btn btn-light m-1">Shop</a>
                            <a href="" class="btn btn-light m-1">Latest</a>
                            <a href="" class="btn btn-light m-1">Admirable</a>
                            <a href="" class="btn btn-light m-1">Trends</a>
                            <a href="" class="btn btn-light m-1">Fashionable</a>
                            <a href="" class="btn btn-light m-1">Accessories</a>
                            <a href="" class="btn btn-light m-1">Style</a>
                            <a href="" class="btn btn-light m-1">Trendy</a>
                            <a href="" class="btn btn-light m-1">Statement</a>
                            <a href="" class="btn btn-light m-1">Elegant</a>
                            <a href="" class="btn btn-light m-1">Luxury</a>
                            <a href="" class="btn btn-light m-1">Sparkling</a>
                            <a href="" class="btn btn-light m-1">Glamorous</a>
                            <a href="" class="btn btn-light m-1">Handcrafted</a>
                            <a href="" class="btn btn-light m-1">Artisan</a>
                            <a href="" class="btn btn-light m-1">Fashion Week</a>
                            <a href="" class="btn btn-light m-1">Red Carpet</a>
                            <a href="" class="btn btn-light m-1">Designer</a>
                            <a href="" class="btn btn-light m-1">Runway</a>
                        </div>
                    </div>

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <form action="{{ route('home.searchBlog') }}" method="GET">
                        <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" placeholder="Keyword" name="query">
                                <!-- Add the name attribute to capture the input value -->
                                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <a href="/categories"><h3 class="mb-0">Categories</h3></a>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach ($categories as $category)
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2"
                                    href="/blogs/{{ $category->category_name }}"><i
                                        class="bi bi-arrow-right me-2"></i>{{ $category->category_name }} </a>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent Post</h3>
                        </div>
                        @foreach ($blogs as $blog)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('uploads/blogs/' . $blog->featured_image) }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">

                                <a href="/blog/{{ $blog->blog_id }}"
                                    class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{ $blog->title }}
                                </a>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->

                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <script>
        let lightImg = document.querySelector(".light-img");
        let viewBtn = document.querySelectorAll(".view-btn");

        viewBtn.forEach(el => {
            el.addEventListener("click", () => {
                document.body.classList.add("effect");
                let imgSrc = el.getAttribute("data-src");
                lightImg.src = imgSrc;
            });
        });

        window.addEventListener("click", event => {
            if (event.target.className == "box-wrapper" || event.target.className == "close-btn") {
                document.body.classList.remove("effect");
            }
        })
    </script>
@endsection
