@extends('../layout/front_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
        border: 2px solid black;
        width: 30px;
        height: 30px;
        border-radius: 50%;
    }
  
    .product-card {
            width: 300px;
            margin: 10px;
            padding: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .product-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

    
    

        .product-delivery {
            font-size: 12px;
            color: #555555;
            margin-top: 8px;
        }

 

    .buttons {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }
    .centered-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgb(236, 199, 205);
    color: rgb(12, 12, 12);
    padding: 10px 20px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    opacity: 0.70;
}

       .centered-button:hover {
        background-color: #ff6b00;
        /* Change color on hover */
        color: rgb(252, 251, 251);
    }

    .myCard {

        color: rgb(12, 12, 12);
        padding: 10px 20px;
        font-size: 28px;
        text-align: center;
    }
    .product-details {
        text-align: center;
    }

    .product-title {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
        margin-bottom: 6px;
        color: #333333;
    }

    .product-price {
        font-size: 16px;
        color: #b12704;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .product-link {
        display: inline-block;
        font-size: 14px;
        color:yellow;
        padding: 8px 16px;
        border-radius: 4px;
        transition: background-color 0.3s;
        opacity: 0.4;
        margin-right: 5px;
    }
    .product-buy {
        display: inline-block;
        font-size: 14px;
        color:yellow;
        padding: 8px 16px;
        border-radius: 4px;
        transition: background-color 0.3s;
        opacity: 0.4;
        margin-left: 5px;
    }

    .product-link:hover {
        background-color: #c74f61;
    }
    .product-buy:hover {
        background-color: #75c74f;
    }
</style>
@section('content')

    <header class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('/images/home/sliderimage1.jpg') }}');">

        <h1 class="display-4">Find Your Perfect Jewellery Style</h1>
        <p class="lead">Explore our wide selection of <a href="/categories">
                <h3 class="mb-0">Categories
            </a> and find the perfect piece to add to your jewellery
            collection.</p>

    </header>
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
                                            <img src="{{ asset('images/categories/' . $category->category_image) }}" class="card-img-top" alt="{{$category->category_name}}">
                                        
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

    <div class="container-fluid" style="padding-top: 50px;">
        <div class="row">
            <div class="col-md-2" style="padding-right: 15px;">
                <!-- Section 1 -->
                <div class="features-section-column" style="padding-right: 10px;">
                    <div class="features-card" style="background-color: #f7f7f7; padding: 20px; border-radius: 10px;">
                        <div class="features-card-header">
                            <h2 style="color:gold; font-size: 22px;">Upcoming Events</h2>
                        </div>
                        <div class="features-card-body">
                            <ul class="features-event-list" style="list-style-type: none; padding: 0;">
                                @foreach ($upcomingEvents as $event)
                                    <li style="margin-bottom: 10px;">
                                        <div class="meta">
                                            <div>
                                                <div class="meta-left">
                                                    <span class="up-month" style="color: #007bff;"><i
                                                            class="fa fa-calendar"></i>
                                                        {{ date('M', strtotime($event->event_date)) }}</span>
                                                    <span class="up-day" style="color: #007bff;"><i
                                                            class="fa fa-calendar-day"></i>
                                                        {{ date('d', strtotime($event->event_date)) }},</span>
                                                    <span class="up-day" style="color: #007bff;"><i
                                                            class="fa fa-calendar-alt"></i>
                                                        {{ date('y', strtotime($event->event_date)) }}</span>
                                                </div>
                                                <div class="meta-right">
                                                    <div property="summary" class="title"
                                                        style="overflow-wrap: break-word;">
                                                        <a href="{{ $event->event_website }}"
                                                            title="{{ $event->event_name }}" target="_blank">
                                                            <h3 style="color: #333; font-size: 18px;">
                                                                {{ $event->event_name }}</h3>
                                                        </a>
                                                    </div>
                                                    <span class="up-venue toh" style="color: #555;"><i
                                                            class="fa fa-map-marker"></i>
                                                        {{ $event->event_location }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section 3 (Blog Card 2) -->
            @foreach ($randBlogs as $myBlogs)
                <div class="col-md-3" style="padding-right: 5px;">
                    <div class="features-section-column">
                        <div class="card" style="display: flex; flex-direction: column;">
                            <img src="{{ asset('uploads/blogs/' . $myBlogs->featured_image) }}"
                                alt="{{ $myBlogs->title }}" class="card-img-top"
                                style="max-height: 325px; margin-bottom: 10px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $myBlogs->title }}</h5>
                                <p>{{ \Illuminate\Support\Str::words($myBlogs->content, 20, '...') }}</p>
                                <a href="{{ route('home.showblog', ['id' => $myBlogs->blog_id]) }}" class="btn btn-primary">Read More</a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    <hr>
    <div class="container">
        <div id="shopCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products->chunk(3) as $index => $chunk)
                    <div class="carousel-item {{ $index === count($products->chunk(3)) - 1 ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($chunk as $product)
                                <div class="col-md-4">
                                    <div class="product-card">
                                        <!-- Product Image -->
                                        <a href="{{ route('productShow', ['key' => $product->id]) }}"><img class="product-image" src="uploads/products/{{ $product->featured_image }}"
                                        alt="{{ $product->title }}"></a>
                                        
                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <div class="product-title">{{ $product->title }}</div>
                                            <div class="product-price">${{ $product->price }}</div>
                                            <div class="product-link"><a style="text-decoration: none;" href="{{ route('jewellerystudio', ['id' => $product->id]) }}">Try Studio</a></div>
                                            <div class="product-buy"><a style="text-decoration: none;" href="{{ $product->link}}">Buy</a></div>
                                        </div>
                                    </div>  
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#shopCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#shopCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; background-color: #f9f3ff; border-color: #8c61ff;">
                    <img src="{{ asset('uploads/home/blogs1.jpg') }}" style="width: 100px; height:100px;"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8c61ff;">Blogs</h5>
                        <p class="card-text" style="text-align: justify; color: #4f4f4f;">Explore exquisite jewelry
                            trends, expert buying guides, and timeless pieces in our captivating jewelry blog.</p>
                        <a href="/blogs" class="btn btn-primary"
                            style="background-color: #8c61ff; border-color: #8c61ff;">Blogs to Cover
                            {{ $blogs }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem; background-color: #fff3e6; border-color: #ffa94d;">
                    <img src="{{ asset('uploads/home/celeb1.jpg') }}" class="card-img-top"
                        style="width: 100px; height:100px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #ff6b00;">Celebrities</h5>
                        <p class="card-text" style="text-align: justify; color: #6c757d;">Explore how your favorite
                            celebrities adorn themselves with exquisite jewelry, adding sparkle to their glamorous lives.
                        </p>
                        <a href="/celebrities" class="btn btn-primary"
                            style="background-color: #ff6b00; border-color: #ff6b00;">Coverage of {{ $celebrities }}
                            Beauties</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem; background-color: #f9f3ff; border-color: #8c61ff;">
                    <img src="{{ asset('uploads/home/events1.jpg') }}" class="card-img-top"
                        style="width: 100px; height:100px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #8c61ff;">Events</h5>
                        <p class="card-text" style="text-align: justify; color: #4f4f4f;">Discover the dazzling world of
                            jewelry events, where elegance and creativity unite in stunning showcases.</p>
                        <a href="/events" class="btn btn-primary"
                            style="background-color: #8c61ff; border-color: #8c61ff;">Coverage of {{ $events }}
                            Events</a>
                    </div>
                </div>
            </div>
            <!-- End First Section -->
            <!-- Second Section -->
            <div class="col-md-12" style="margin-top: 20px; position: relative;">
                <img src="{{ asset('uploads/home/jewellery_studio.jpg') }}" alt="Large Image" class="img-fluid">
                <a href="{{ route('jewellerystudio') }}" class="centered-button">Try our Jewelry Studio</a>
            </div>

        </div>
    </div>
    <!-- End Second Section -->
    <br>
    <div class="container">
        <div class="container my-4">
            <div class="row">
                <div class="col text-center">
                    <h3>Best Brands</h3>
                </div>
            </div>
        </div>
    </div>
    
    <div id="carouselExampleCaptions" class="carousel slide pointer-event" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($jbrands as $index => $jbrand)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <a href="{{ route('brandShow', $jbrand->id) }}"> <!-- Add this line -->
                        <img src="{{ $jbrand->brand_image }}" class="d-block mx-auto my-auto carousel-image"
                            alt="{{ $jbrand->brand_name }}" style="max-width: fit-content; max-height: 300px;">
                        <br>
                        <div class="carousel-caption d-none d-md-block text-center">
                            <p style="color: goldenrod; font-family: 'Arial', sans-serif; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                {{ $jbrand->brand_name }}
                            </p>
                            <p style="color: #333; font-size: 16px;">{{ \Illuminate\Support\Str::words($jbrand->description, 10, '...') }}</p>
                        </div>
                    </a> <!-- Add this line -->
                    <br>
                    <br>
                </div>
            @endforeach
        </div>
        <div class="carousel-indicators">
            @foreach ($jbrands as $index => $jbrand)
                <button type="button" style="background-color: black" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                    aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
    </div>
    
@endsection

@section('script_files')
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/page/index.js') }}"></script>
@endsection
