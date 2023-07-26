@extends('/layout/front_master') <!-- Specify the parent view to extend -->

@section('title', 'Neclace Page') <!-- Define the title for the child page -->

@section('content')
<div class="container" style="padding-top: 10px">
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
                                    <p class="card-text">Discover our collection of necklaces and find the perfect
                                        piece to add to your jewellery collection.</p>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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
                            <p class="card-text">Learn how to make your own jewellery with these easy DIY tutorials.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Add more blog posts here -->
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
        <!-- Add more sections hereس -->
    </div>

    @endsection