@extends('../layout/landing_master')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Include Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Style for Cards -->
    <style>
        .card {
            border: none;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .card-title {
            color: #f0645c;
            text-align: center;
            /* Center-align the title */
        }

        .card-text {
            color: #5c5c5c;
            text-align: center;
            /* Center-align the text */
        }

        .card-img-top {
            max-height: 350px;
            /* Set a maximum height for the image */
            width: 100%;
            /* Ensure the image takes the full width of the container */
            object-fit: contain;
            /* Ensure the entire image is visible without cropping */
        }

        /* Additional style for blog cards */
        #blogs_container .card {
            /* Add specific styles for blog cards */
            // Customize the styles as per your preference
            background-color: #f8f9fa;
            /* Light gray background */
            border-radius: 10px;
            /* Rounded corners */
            transition: transform 0.3s ease-in-out;
            /* Smooth transition on hover */

            /* You can add more styles here */
        }

        #blogs_container .card:hover {
            transform: scale(1.05);
            /* Enlarge on hover */
        }

        #blogs_container .card-body {
            padding: 15px;
            /* Add some padding inside the card body */
        }

        .my-alert {
            border: 1px solid #32CD32;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>

    <main>
        <div class="container my-5">
            @if ($key)
                <div class="alert alert-success alert-dismissible fade show my-alert" role="alert">
                    <strong>Here is a list of itmes related to: </strong> {{ $key }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Products Section -->
            <h2 class="mb-4">Latest Elegant Designs</h2>
            <div id="products_container" class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <a href="{{ $product->affiliate_link }}" target="_blank">
                            <div class="card box-shadow" style="height: 100%;">
                                <img class="card-img-top" style="height: 90%;"
                                    src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                    alt="{{ $product->title }}">
                                <div class="card-body" style="height: 20%;">
                                    <h4 class="card-title">${{ $product->price }}</h4>
                                    <p class="card-text">{{ $product->title }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <!-- Load More card for Products -->
                <div id="load_more_products_card" class="col-md-4 content_box" style="display: none;">
                    <div class="card mb-4 box-shadow" style="height: 440px;">
                        <div class="card-body d-flex align-items-center justify-content-center text-center">
                            <button class="btn btn-primary" id="load_more_products_button">Load More</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Section -->
            <h2 class="mb-4">Latest Blog Posts</h2>
            <div id="blogs_container" class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <a href="{{ route('home.showblog', ['id' => $blog->blog_id]) }}">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('uploads/blogs/' . $blog->featured_image) }}"
                                    alt="{{ $blog->title }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $blog->title }}</h4>
                                    <p class="card-text">{{ \Illuminate\Support\Str::words($blog->content, 20, '...') }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <!-- Load More card for Blogs -->
                <div id="load_more_blog_card" class="col-md-4 content_box">
                    <a href="{{ route('blogs') }}">
                        <div class="card mb-4 box-shadow" style="height: 440px;">
                            <div class="card-body d-flex align-items-center justify-content-center text-center">
                                <button class="btn btn-primary" id="load_more_blog_button">Load More</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Events Section -->

            <h2 class="mb-4">Upcoming Events</h2>
            <div id="events_container" class="row">
                @foreach ($events as $event)
                    <div class="col-md-4">
                        <a href="{{ route('eventShow', ['id' => $event->event_id]) }}">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('uploads/events/' . $event->event_image) }}"
                                    alt="{{ $event->event_name }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $event->event_name }}</h4>
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::words($event->event_description, 20, '...') }}</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <small
                                        class="text-muted">{{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</small>
                                    <small class="text-muted">{{ $event->event_location }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <!-- Load More card for Events -->
                <div id="load_more_event_card" class="col-md-4 content_box">
                    <a href="{{ route('events') }}">
                        <div class="card mb-4 box-shadow" style="height: 440px;">
                            <div class="card-body d-flex align-items-center justify-content-center text-center">
                                <button class="btn btn-primary" id="load_more_event_button">Load More</button>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <small class="text-muted"></small>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <h2 class="mb-4">Featured Celebrities</h2>
            <div id="celebrities_container" class="row">
                @foreach ($celebrities as $celebrity)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('celebrityShow', ['id' => $celebrity->celebrity_id]) }}"
                            class="text-decoration-none">
                            <div class="card box-shadow">
                                <img class="card-img-top" src="{{ asset('uploads/celebrities/' . $celebrity->image) }}"
                                    alt="{{ $celebrity->name }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $celebrity->name }}</h4>
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::words($celebrity->description, 20, '...') }}</p>
                                </div>
                                <div class="card-footer bg-light d-flex justify-content-between">
                                    <small
                                        class="fa fa-birthday-cake">&nbsp;{{ $celebrity->birthdate ? \Carbon\Carbon::parse($celebrity->birthdate)->format('M d, Y') : 'Birthdate Unknown' }}</small>
                                    <div class="d-flex">
                                        <a href="https://instagram.com/{{ $celebrity->instagram }}" target="_blank"
                                            class="text-muted me-2"><i class="fab fa-instagram"></i></a>
                                        <a href="https://twitter.com/{{ $celebrity->twitter }}" target="_blank"
                                            class="text-muted me-2"><i class="fab fa-twitter"></i></a>
                                        <a href="https://facebook.com/{{ $celebrity->facebook }}" target="_blank"
                                            class="text-muted me-2"><i class="fab fa-facebook"></i></a>
                                        <a href="https://youtube.com/{{ $celebrity->youtube }}" target="_blank"
                                            class="text-muted me-2"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <!-- Load More card for Celebrities -->
                <div id="load_more_celebrity_card" class="col-md-4 content_box">
                    <a href="{{ route('celebrities') }}" class="text-decoration-none">
                        <div class="card mb-4 box-shadow" style="height: 440px;">
                            <div class="card-body d-flex align-items-center justify-content-center text-center">
                                <button class="btn btn-primary" id="load_more_celebrity_button">Load More</button>
                            </div>
                            <div class="card-footer bg-light d-flex justify-content-between">
                                <small class="text-muted"></small>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>



        </div>
    </main>

    <!-- Your JavaScript -->
    <script>
        var startProduct = 6;

        $(document).ready(function() {
            var baseUrl = "{{ asset('/uploads/products/') }}";

            $('#load_more_products_button').click(function() {
                loadMoreItems('products', startProduct, '#products_container', '#load_more_products_card',
                    '#load_more_products_button');
            });

            function loadMoreItems(type, start, containerId, loadMoreCardId, buttonId) {
                $.ajax({
                    url: "{{ route('load.more') }}",
                    method: "GET",
                    data: {
                        start: start,
                        type: type
                    },
                    dataType: "json",
                    beforeSend: function() {
                        // You can add loading indicators if needed
                        $(buttonId).html('Loading...');
                        $(buttonId).attr('disabled', true);
                    },
                    success: function(data) {
                        if (data.data && data.data.length > 0) {
                            var html = '';
                            for (var i = 0; i < data.data.length; i++) {
                                html += `<div class="col-md-4 mb-4">
                             <a href="${data.data[i].affiliate_link}" target="_blank">
                            <div class="card box-shadow" style="height: 100%;">
                                <img class="card-img-top" style="height: 90%;" src="${baseUrl + "/" + data.data[i].featured_image}" alt="${data.data[i].title}">
                                <div class="card-body" style="height: 20%;">
                                    <h4 class="card-title">$${data.data[i].price}</h4>
                                    <p class="card-text">${data.data[i].title}</p>
                                </div>
                            </div>
                        </div>`;
                            }

                            // Append the new content within the existing container
                            $(containerId).append($(html).hide().fadeIn(1000));

                            // Ensure the Load More card is always at the end
                            $(loadMoreCardId).appendTo(containerId).show();

                            // Update the start value for the next load
                            start = data.next;

                            // Enable the Load More button
                            $(buttonId).html('Load More');
                            $(buttonId).attr('disabled', false);
                        } else {
                            // No more data available, hide the load more button and card
                            $(buttonId).html('No More Data Available');
                            $(buttonId).attr('disabled', true);
                            $(loadMoreCardId).hide();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                        console.error("Status:", status);
                    },
                    complete: function() {
                        // This will run after success or error
                    }
                });
            }

            // Show load more buttons and cards initially
            $('#load_more_products_button').show();
            $('#load_more_products_card').show();
        });
    </script>
@endsection
