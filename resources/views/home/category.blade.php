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
        /* Common styles */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
        }

        .text-link {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FFC300;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transition: transform 0.3s;
            background-color: #FCE5CD;
            padding: 20px;
            margin: 20px;
            max-width: 600px;
            /* Adjust as needed */
        }
        .try-on-studio-button
        {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: #b2d100;
            color: black;
            opacity: 0.8;
        }
        .card-img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            object-fit: cover;
            max-width: 100%;
            max-height: 100%;
        }

        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FFC300;
            text-align: center;
        }

        .card-text {
            font-size: 1rem;
            color: #5c5c5c;
            text-align: center;
        }

        .product-details-btn a,
        .product-link,
        .product-buy {
            text-decoration: none;
            color: yellow;
        }

        .product-link,
        .product-buy {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s;
            opacity: 0.4;
            margin: 0 5px;
            font-size: 14px;
        }

        /* Additional styles for blog cards */
        #blogs_container .card {
            background-color: #f8f9fa;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        #blogs_container .card:hover {
            transform: scale(1.05);
        }

        #blogs_container .card-body {
            padding: 15px;
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
                            <div class="card box-shadow" style="max-height: 650px;">
                                <img class="card-img-top" style="max-height: 400px;"
                                    src="{{ asset('uploads/products/' . $product->featured_image) }}"
                                    alt="{{ $product->title }}">
                                <div class="card-body"
                                    style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="card-body"
                                        style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div style="display: flex; justify-content: space-between;">
                                            <h6 class="card-title" style="color:red; margin: 0;">${{ $product->price }}</h6>
                                                <h6 class="card-text" style="color:green; margin: 0;">LFJ Code:
                                                    {{ $product->id }}</h6>
                                        </div>
                                        <p class="card-text text-justify" style="overflow: hidden;">
                                            {{ $product->title }}
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ route('jewellerystudio.id', ['id' => $product->id]) }}"
                                    class="try-on-studio-button">Try on Studio</a>

                            </div>
                        </a>
                    </div>
                @endforeach

                <!-- Load More card for Products -->
                <div id="load_more_products_card" class="col-md-4 content_box" style="display: none;">
                    <div class="card mb-4 box-shadow" style="height: 440px;">
                        <div class="card-body d-flex align-items-center justify-content-center text-center">
                            <button class="btn btn-primary" id="load_more_products_button">Load
                                More</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Section -->
            <h2 class="mb-4">Latest Blog Posts</h2>
            @if(count($blogs) > 0)
            <div id="blogs_container" class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <a href="{{ route('home.showblog', ['id' => $blog->blog_id]) }}">
                            <div class="card mb-4">
                                <img class="card-img-top" src="{{ asset('uploads/blogs/' . $blog->featured_image) }}"
                                    alt="{{ $blog->title }}">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $blog->title }}</h4>
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::words($blog->content, 20, '...') }}
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
                                <button class="btn btn-primary" id="load_more_blog_button">Load
                                    More</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            <!-- Events Section -->
            @if(count($events) > 0)
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
                                        {{ \Illuminate\Support\Str::words($event->event_description, 20, '...') }}
                                    </p>
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
                                <button class="btn btn-primary" id="load_more_event_button">Load
                                    More</button>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <small class="text-muted"></small>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            
            <h2 class="mb-4">Featured Celebrities</h2>
            @if(count($celebrities) > 0)
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
                                        {{ \Illuminate\Support\Str::words($celebrity->description, 20, '...') }}
                                    </p>
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
            @endif


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
                                                <div class="card box-shadow" style="max-height: 650px;">
                                                    <img class="card-img-top" style="max-height: 400px;" src="${baseUrl + "/" + data.data[i].featured_image}" alt="${data.data[i].title}">
                                                    <div class="card-body"
                                    style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                    <div class="card-body"
                                        style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                  
                                                    <div style="display: flex; justify-content: space-between;">
                                                        <h6 class="card-title" style="color:red; margin: 0;">${data.data[i].price }</h6>
                                                        <h6 class="card-text" style="color:green; margin: 0;">LFJ Code: ${data.data[i].id }</h6>
                                                        </div
                                                        <p class="card-text text-justify" style="overflow: hidden;"> ${data.data[i].title }</p>
                                                        </div>
                                                        </div>
                                                        <a href="/jewellerystudio/${data.data[i].id}" class="try-on-studio-button" target="_blank">Try on Studio</a>
                                                        </div>
                                                        </a>
                                                        </div>
                                                        `;
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
