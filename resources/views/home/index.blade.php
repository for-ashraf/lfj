@extends('.../layout/front_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')



@section('content')

<header class="jumbotron jumbotron-fluid" style="background-image: url('{{ asset('/images/home/sliderimage1.jpg') }}');">

    <h1 class="display-4">Find Your Perfect Jewellery Style</h1>
    <p class="lead">Explore our wide selection of categories and find the perfect piece to add to your jewellery
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
                            <img src="/images/categories/{{ $category->category_image }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">{{ $category->category_name }}</h3>
                                <p class="card-text">{{ $category->category_description }}</p>
                            </div>
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
                            @foreach($upcomingEvents as $event)
                            <li style="margin-bottom: 10px;">
                                <div class="meta">
                                    <div>
                                        <div class="meta-left">
                                            <span class="up-month" style="color: #007bff;"><i class="fa fa-calendar"></i> {{ date('M', strtotime($event->event_date)) }}</span>
                                            <span class="up-day" style="color: #007bff;"><i class="fa fa-calendar-day"></i> {{ date('d', strtotime($event->event_date)) }},</span>
                                            <span class="up-day" style="color: #007bff;"><i class="fa fa-calendar-alt"></i> {{ date('y', strtotime($event->event_date)) }}</span>
                                        </div>
                                        <div class="meta-right">
                                            <div property="summary" class="title" style="overflow-wrap: break-word;">
                                                <a href="{{ $event->event_website }}" title="{{ $event->event_name }}" target="_blank">
                                                    <h3 style="color: #333; font-size: 18px;">{{ $event->event_name }}</h3>
                                                </a>
                                            </div>
                                            <span class="up-venue toh" style="color: #555;"><i class="fa fa-map-marker"></i> {{ $event->event_location }}</span>
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
            <!--Section 2-->
            <div class="col-md-3" style="padding-right: 5px;">
                <div class="features-section-column">
                    <img src="/images/home/1.jpg" alt="Image" style="max-width: 100%; height: auto;" class="features-large-image img-fluid">
                </div>
            </div>
             <!--Section 3-->
            <div class="col-md-4" style="padding-right: 5px;">
                <div class="features-section-column" style="display: flex; flex-direction: column;">
                    <img src="/images/home/2.jpg" alt="Image" style="max-height: 125px; margin-bottom: 10px;" class="features-small-image">
                    <img src="/images/home/3.jpg" alt="Image" style="max-height:400px;" class="features-large-image">
                </div>
            </div>
             <!--Section 4-->
            <div class="col-md-3" style="padding-left: 15px;">
                <div class="features-section-column" style="padding-right: 15px;">
                    <img src="/images/home/4.jpg" style="max-width: 100%; height: auto;" alt="Image" class="features-large-image img-fluid">
                </div>
            </div>
        
    </div>
</div>
<br><hr>
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
    <div class="carousel-indicators">
        @foreach($jbrands as $index => $jbrand)
        <button type="button" style="background-color: black" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($jbrands as $index => $jbrand)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <img src="{{ $jbrand->brand_image }}" class="d-block mx-auto my-auto carousel-image"
                alt="{{ $jbrand->brand_name }}"
                style="max-width: fit-content; max-height: 300px;">
                <br><hr>
            <div class="carousel-caption d-none d-md-block">
                <h4 style="color: goldenrod; font-family: 'Arial', sans-serif; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                    </h4>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container">
    <section class="blog">
        <h2>Blogs</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="blog-container">
                    @foreach($initialBlogs as $blog)
                    <div class="col-md-4">
                        <div class="card blog-card">
                            <img src="{{ asset($blog->featured_image) }}" class="card-img-top" alt="{{ $blog->title }}">
                            <div class="card-body">
                                <h3 class="card-title">{{ $blog->title }}</h3>
                                <p class="card-text">{{ $blog->content }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="controls">
            <button class="scroll-left">◄</button>
            <button class="scroll-right">►</button>
        </div>
    </section>
    
    <div id="image-zoom-card" class="image-zoom-card">
        <span id="close-zoom-card" class="close-zoom-card">×</span>
        <img id="zoomed-image" class="zoomed-image">
        <div id="image-title" class="image-title"></div>
    </div>
    <section class="picture-gallery">
        <h2>Picture Gallery</h2>
        <div class="row" id="gallery-container">
            <!-- Pictures will be loaded here dynamically -->
        </div>
        <div class="text-center">
            <button id="load-more" class="btn btn-primary">Load More</button>
        </div>
    </section>
    <section class="events">
        <h2>Events</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card event-card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Fashion Show</h3>
                        <p class="card-text">Attend our upcoming fashion show and witness the latest jewellery
                            trends on the runway.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Jewellery Exhibition</h3>
                        <p class="card-text">Visit our exhibition to explore a wide range of exquisite jewellery
                            designs from renowned artists.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Workshop: Jewellery Care</h3>
                        <p class="card-text">Join our workshop to learn essential tips for caring and maintaining
                            your precious jewellery.</p>
                    </div>
                </div>
            </div>
            <!-- Add more events here -->
        </div>
    </section>
    <section class="celebrities">
        <h2>Celebrities</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card celebrity-card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Hollywood Actresses</h3>
                        <p class="card-text">Check out these Hollywood actresses flaunting their latest jewellery
                            designs.</p>
                        <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card celebrity-card">
                    <img src="https://via.placeholder.com/350x250" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Bollywood Actresses</h3>
                        <p class="card-text">See these Bollywood actresses dazzle in their latest jewellery
                            collections.</p>
                        <a href="#" class="btn btn-primary">View more</a>
                    </div>
                </div>
            </div>
            <!-- Add more celebrity sections here -->
        </div>
    </section>
    <section class="purchase">
        <h2>Purchase</h2>
        <p>Click on the button below to purchase our latest collection on Amazon.</p>
        <a href="https://www.amazon.com/" class="btn btn-primary">Buy now</a>
    </section>
    <!-- Add more sections here -->
</div>
@endsection

@section('script_files')
<script src="{{asset('js/core.js')}}"></script>
<script src="{{asset('js/page/index.js')}}"></script>
<script src="{{asset('js/myScript.js')}}"></script>
@endsection