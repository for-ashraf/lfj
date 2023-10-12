@extends('../layout/landing_master')

@section('content')
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

    <style>
        .owl-carousel .item {
            background: #e0e4cc;
            text-align: center;
            padding: 10px; /* Add padding here */
            margin: 10px;
            border-radius: 5px;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 300px;
        }

        .card-image {
            width: 100%;
            height: 170px;
            object-fit: cover;
            border-radius: 5px 5px 0 0;
        }

        .card-cost {
            padding: 10px;
        }
    </style>

    <div class="container">
        <div class="row">

            <!-- First Section -->
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('uploads/home/blogs1.jpg')}}" style="width: 100px; height:100px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Blogs</h5>
                        <p class="card-text" style="text-align: justify">Explore exquisite jewelry trends, expert buying guides, and timeless pieces in our captivating jewelry blog.</p>
                        <a href="#" class="btn btn-primary">Blogs to Cover {{$blogs}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('uploads/home/celeb1.jpg')}}" class="card-img-top" style="width: 100px; height:100px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Celebrities</h5>
                        <p class="card-text" style="text-align: justify">Explore how your favorite celebrities adorn themselves with exquisite jewelry, adding sparkle to their glamorous lives. </p>
                        <a href="#" class="btn btn-primary">Coverage of {{$celebrities}} Beauties</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('uploads/home/events1.jpg')}}" class="card-img-top" style="width: 100px; height:100px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text" style="text-align: justify">Discover the dazzling world of jewelry events, where elegance and creativity unite in stunning showcases</p>
                        <a href="#" class="btn btn-primary">{{$events}} Upcoming Events</a>
                    </div>
                </div>
            </div>
             <!-- End First Section -->
             <!-- Second Section -->
             <div class="col-md-12" style="margin-top: 20px;"> <!-- Add margin-top here -->
                <img src="{{asset('uploads/home/jewellery_studio.jpg')}}" alt="Large Image" class="img-fluid">
            </div>
             <!-- End Second Section -->
            <br>
             <!-- Third Section -->
            <section id="demos" style="margin-top: 20px; margin-bottom: 20px;">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="owl-carousel owl-theme">
                            @foreach ($amazonProducts as $amazonProduct)
                                <a href="{{ $amazonProduct->affiliate_link }}" target="_blank">
                                    <div class="item">
                                        <div class="card">
                                            <img src="{{ asset('uploads/products/' . $amazonProduct->featured_image) }}"
                                                class="card-image" alt="Item 1">
                                            <div class="card-cost">
                                                ${{ $amazonProduct->price }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
           <!-- End Third Section -->
           <!-- Fourth Section -->
           <div class="card custom-card" style="max-width: 48%; margin-right: 20px; margin-top: 20px;" > <!-- Add margin-top here -->
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/home/imageGallery.jpg')}}" style="height:200px" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Image Gallery</h5>
                            <p class="card-text" style="text-align: justify">Step into a world of elegance and beauty with our captivating jewelry image gallery. Explore timeless masterpieces with collection of over {{$images}} precious items.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card custom-card" style="max-width: 48%; margin-top: 20px;"> <!-- Add margin-top here -->
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/home/shopNow.jpg')}}" style="height:200px" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Shop fabulous Jewellery</h5>
                            <p class="card-text" style="text-align: justify">Discover exquisite jewelry pieces that reflect your style and personality. Explore our variety of more than {{$products}} collection and shop now</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Fourth Section -->
        </div>
    </div>
    </div>
    </div>


    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                loop: true,
                nav: true,
                margin: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    960: {
                        items: 5
                    },
                    1200: {
                        items: 6
                    }
                },
                autoplay: true, // Enable automatic sliding
                autoplayTimeout: 3000, // Set the interval in milliseconds (e.g., 3000ms for 3 seconds)
                autoplayHoverPause: true, // Pause on mouse hover
            });
            owl.on('mousewheel', '.owl-stage', function(e) {
                if (e.deltaY > 0) {
                    owl.trigger('next.owl');
                } else {
                    owl.trigger('prev.owl');
                }
                e.preventDefault();
            });
        });
    </script>
@endsection
