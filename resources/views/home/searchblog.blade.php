@extends('../layout/landing_master') <!-- Specify the parent view to extend -->
@section('content')
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    @if ($blogs->count() > 0)
                        <h2>Search Results for: "{{ $query }}"</h2>
                        <ul>
                            @foreach ($blogs as $blog)
                                <li>
                                    <a href="{{ route('home.showblog', $blog->blog_id) }}">{{ $blog->title }}</a>

                                    {{-- <a href="">{{ $blog->title }}</a> --}}

                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No results found for: "{{ $query }}"</p>
                    @endif

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
                    <!-- Tags End -->
                    {{--     
                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">3 Comments</h3>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                        <div class="d-flex ms-5 mb-4">
                            <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Leave A Comment</h3>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End --> --}}
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
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            @foreach ($categories as $category)
                                <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i
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
                        @foreach ($sblogs as $blog)
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="{{ asset('uploads/' . $blog->featured_image) }}"
                                    style="width: 100px; height: 100px; object-fit: cover;" alt="">

                                <a href=""
                                    class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">{{ $blog->title }}
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


                    {{-- <!-- Plain Text Start -->
                    <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Plain Text</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div>
                    <!-- Plain Text End --> --}}
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
