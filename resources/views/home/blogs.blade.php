@extends('../layout/landing_master') <!-- Specify the parent view to extend -->
@section('title', 'Blogs Page')
@section('close_header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Unleash your inner sparkle! ✨ Dive into our captivating jewelry blog, a treasure trove of expert tips, trend reports, and dazzling inspiration. Explore stunning rings, statement necklaces, chic earrings, trendy bracelets, captivating watches, and playful anklets. Find your perfect accessory, stay ahead of the curve, and unlock the secrets of jewelry styling with Latest Fashion Jewellery.">
<meta name="keywords" content="jewelry blog, jewelry trends 2024, fashion jewelry, celebrity styles, rings trends, statement necklaces, minimalist earrings, stackable bracelets, affordable watches, gift ideas, anklet layering, jewelry care tips, sustainable jewelry brands, personalized jewelry, engagement rings, bridal jewelry, men's jewelry">
<meta name="author" content="Latest Fashion Jewellery">
<meta name="robots" content="index, follow">
<meta name="og:title" content="Latest Fashion Jewelry Blog: Your Guide to Sparkling Trends & Irresistible Styles">
<meta name="og:description" content="Unleash your inner sparkle! ✨ Dive into our captivating jewelry blog, a treasure trove of expert tips, trend reports, and dazzling inspiration. Explore stunning rings, statement necklaces, chic earrings, trendy bracelets, captivating watches, and playful anklets. Find your perfect accessory, stay ahead of the curve, and unlock the secrets of jewelry styling with Latest Fashion Jewellery.">
<meta name="og:image" content="{{ asset('uploads/blogs/5.jpg') }}">
<meta name="og:url" content="https://www.latestfashionjewellery.com/blogs">
<meta name="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Rings, Necklaces, Earrings & More: Uncover Your Jewelry Obsession on Our Blog">
<meta name="twitter:description" content="Unleash your inner sparkle! ✨ Dive into our captivating jewelry blog, a treasure trove of expert tips, trend reports, and dazzling inspiration. Explore stunning rings, statement necklaces, chic earrings, trendy bracelets, captivating watches, and playful anklets. Find your perfect accessory, stay ahead of the curve, and unlock the secrets of jewelry styling with Latest Fashion Jewellery.">
<meta name="twitter:image" content="{{ asset('uploads/blogs/5.jpg') }}">

    </head>
@endsection
@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
               <div class="col-lg-8">
    <div class="row g-5">
        @foreach ($myBlogs as $blogs)
            @if ($loop->index % 2 == 0)
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="blog-item bg-light rounded overflow-hidden">
            @else
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
                    <div class="blog-item bg-white rounded overflow-hidden">
            @endif
          <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset('uploads/blogs/' . $blogs->featured_image) }}"
                                    alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                    href="{{ url('/categories/' . $blogs->categories->category_name) }}">{{ $blogs->categories->category_name }}</a>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="me-3"><i
                                        class="far fa-user text-primary me-2"></i>{{ $blogs->author_name }}</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $blogs->created_at }}</small>
                            </div>
                            <h4 class="mb-3">{{ $blogs->title }}</h4>
                            <p style="text-align: justify">
                                {{ implode(' ', array_slice(str_word_count($blogs->content, 1), 0, 35)) }}
                            </p>
                            <a class="text-uppercase" href="{{ url('/blog/' . $blogs->blog_id) }}">
                                Read More <i class="bi bi-arrow-right"></i>
                            </a>
                    </div>
                </div>
        @endforeach
    </div>
    <br><br>
    <!-- Pagination Links -->
    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
        <nav aria-label="Page navigation">
            <ul class="pagination pagination-lg m-0">
       {!! $myBlogs->links('pagination::bootstrap-5') !!}
            </ul>
        </nav>
    </div>
</div>
        <!-- Blog list End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4">
            <!-- Search Form Start -->
            <form action="{{ route('home.searchBlog') }}" method="GET">
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3"
                            placeholder="Search for blogs by title, content, or keywords..." name="query">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Search Form End -->

            <!-- Category Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <a href="/categories">
                        <h3 class="mb-0">Categories</h3>
                    </a>
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
                @foreach ($latestBlogs as $blog)
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{ asset('uploads/blogs/' . $blog->featured_image) }}" style="width: 100px; height: 100px; object-fit: cover;"
                            alt="{{ implode(' ', array_slice(str_word_count($blog->title, 1), 0, 6)) }}">
                        <a href="{{ url('/blogs/' . $blog->blog_id)}}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                            {{ implode(' ', array_slice(str_word_count($blog->title, 1), 0, 6)) }}
                        </a>
                    </div>
                @endforeach
            </div>
            
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                <img src="{{asset('uploads/blogs/5.jpg')}}" alt="Feature Blog Post" class="img-fluid rounded">
            </div>
            <!-- Image End -->

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
        <!-- Tags End -->
    </div>
    <!-- Sidebar End -->
    </div>
    </div>
    </div>
@endsection
