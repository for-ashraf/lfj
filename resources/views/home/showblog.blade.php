@extends('../layout/landing_master')
<style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .text-justify {
        text-align: justify !important;
        text-justify: inter-word !important;
    }

    .try-on-studio-button {
        background-color: #ffc107; /* You can change the color here */
        color: #333;
        font-weight: bold;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: block;
        margin-bottom: 10px; /* Adjust the margin as needed */
    }

    .try-on-studio-button:hover {
        background-color: #ffca2b; /* Change the color on hover if desired */
    }
</style>
@section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img src="{{ asset('uploads/blogs/' . $blog->featured_image) }}" class="img-fluid rounded mx-auto" alt="{{ $blog->title }}" width="600" height="400">

                        <h1 class="mb-3">{{ $blog->title }}</h1>

                        {{-- Split blog content --}}
                        @php
                            $contentParts = explode("\n\n", $blog->content);
                            $firstPart = array_shift($contentParts);
                            $remainingContent = implode("\n\n", $contentParts);
                        @endphp

                        <p>{!! nl2br($firstPart) !!}</p>
                    </div>
                    <!-- Blog Detail End -->

                    <!-- Display 6 Amazon Products (First Part) -->
                    <div id="products_container" class="row">
                        @foreach ($amazonProducts->take(6) as $product)
                        <div class="col-md-4 mb-4">
                   
                            <a href="{{ $product->affiliate_link }}" target="_blank">
                                <div class="card box-shadow" style="max-height: 650px;">
                                    <img class="card-img-top" style="max-height: 400px;"
                                        src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                        alt="{{ $product->title }}">
                                    <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 class="card-title" style="color:red; margin: 0;">${{ $product->price }}</h4>
                                                <h6 class="card-text" style="color:green; margin: 0;">LFJ Code: {{ $product->id }}</h6>
                                            </div>
                                            <p class="card-text text-justify" style="overflow: hidden;">
                                                {{ substr($product->title, 0, 60) . "..." }}

                                            </p>
                                        </div>
                                    </div>
                                    <a href="{{ route('jewellerystudio.id', ['id' => $product->id]) }}" class="try-on-studio-button">Try on Studio</a>
        
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <!-- Display Remaining Blog Content -->
                    <p>{!! nl2br($remainingContent) !!}</p>

                    <!-- Display 6 More Amazon Products (Last Part) -->
                    <div id="products_container" class="row">
                        @foreach ($amazonProducts->skip(6)->take(6) as $product)
                        <div class="col-md-4 mb-4">
                   
                            <a href="{{ $product->affiliate_link }}" target="_blank">
                                <div class="card box-shadow" style="max-height: 650px;">
                                    <img class="card-img-top" style="max-height: 400px;"
                                        src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                        alt="{{ $product->title }}">
                                    <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                            <div style="display: flex; justify-content: space-between;">
                                                <h6 class="card-title" style="color:red; margin: 0;">${{ $product->price }}</h4>
                                                <h6 class="card-text" style="color:green; margin: 0;">LFJ Code: {{ $product->id }}</h6>
                                            </div>
                                            <p class="card-text text-justify" style="overflow: hidden;">
                                                {{ $product->title }}
                                            </p>
                                        </div>
                                    </div>
                                    <a href="{{ route('jewellerystudio.id', ['id' => $product->id]) }}" class="try-on-studio-button">Try on Studio</a>
        
                                </div>
                            </a>
                        </div>
                        @endforeach
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
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="/blogs/{{$category->category_name}}"><i
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
@endsection
