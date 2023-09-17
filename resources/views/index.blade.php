@extends('/layout/front_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')



@section('content')
<header class="jumbotron jumbotron-fluid">

    <h1 class="display-4">Find Your Perfect Jewellery Style</h1>
    <p class="lead">Explore our wide selection of categories and find the perfect piece to add to your jewellery
        collection.</p>

</header>
<div class="container">
    <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Category Item 1 -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card category-card">
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Necklaces</h3>
                                <p class="card-text">Discover our collection of necklaces and find the perfect piece
                                    to add</p>
                            </div>
                        </div>
                    </div>
                    <!-- Category Item 2 -->
                    <div class="col-md-4">
                        <div class="card category-card">
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Earrings</h3>
                                <p class="card-text">Shop our collection of earrings and find the perfect pair to
                                    match your style.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Category Item 3 -->
                    <div class="col-md-4">
                        <div class="card category-card">
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Bracelets</h3>
                                <p class="card-text">Complete your look with our stunning collection of bracelets.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Category Item 4 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card category-card">
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Rings</h3>
                                <p class="card-text">Explore our collection of rings and find the perfect fit for
                                    you.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Category Item 5 -->
                    <div class="col-md-4">
                        <div class="card category-card">
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Anklets</h3>
                                <p class="card-text">Add a touch of elegance to your ankle with our collection of
                                    anklets.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Category Item 6 -->
                    <div class="col-md-4">
                        <div class="card category-card">
                            <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Brooches</h3>
                                <p class="card-text">Make a statement with our unique and stylish brooches.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add next and prev buttons if required -->
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
        <div class="col-md-2 col-6" style="padding-right: 15px;">
            <div class="section-column">
                <div class="card">
                    <div class="card-header">
                        Upcoming Events
                    </div>
                    <div class="card-body">
                        <ul class="event-list">
                            <li>Event 1</li>
                            <li>Event 2</li>
                            <li>Event 3</li>
                            <li>Event 3</li>
                            <li>Event 3</li>
                            <li>Event 3</li>
                            <li>Click for More....</li>
                            <!-- Add more events as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6" style="padding-right: 15px;">
            <div class="section-column">
                <img src="home/1.jpg" alt="Image" style="max-height:300px;" class="large-image">
            </div>
        </div>
        <div class="col-md-4 col-6" style="padding-right: 15px;">
            <div class="section-column">
                <img src="home/2.jpg" alt="Image" style="max-height:125px;" class="small-image">
                <img src="home/3.jpg" alt="Image" style="max-height:175px;" class="large-image">
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="section-column">
                <img src="home/4.jpg" style="max-height:300px;" alt="Image" class="large-image">
            </div>
        </div>
    </div>
</div>

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
        <button type="button" style="background-color: black" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" style="background-color: black" data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="home/h17.jpg" class="d-block mx-auto my-auto carousel-image" alt="..."
                style="max-width: fit-content; max-height:300px;">
            <div class="carousel-caption d-none d-md-block">
                <h4
                    style="color: goldenrod; font-family: 'Arial', sans-serif; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                    Milan Jewellery</h4>
            </div>
        </div>
        <div class="carousel-item">
            <img src="home/h16.jpg" class="d-block mx-auto my-auto carousel-image" alt="..."
                style="max-width: fit-content; max-height: 300px;">
            <div class="carousel-caption d-none d-md-block">
                <h4
                    style="color: goldenrod; font-family: 'Arial', sans-serif; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                    Known for its uniqueness.</h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <section class="blog">
        <h2>Blogs</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card blog-card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Top 10 Jewellery Styles for 2023</h3>
                        <p class="card-text">Find out what the top 10 jewellery styles for 2023 are and how you can
                            incorporate them into your wardrobe.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">How to Choose the Perfect Engagement Ring</h3>
                        <p class="card-text">Get expert tips on how to choose the perfect engagement ring for your
                            partner.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog-card">
                    <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">DIY Jewellery Making</h3>
                        <p class="card-text">Learn how to make your own jewellery with these easy DIY tutorials.</p>
                    </div>
                </div>
            </div>
            <!-- Add more blog posts here -->
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
@endsection