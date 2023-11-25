@extends('../layout/landing_master') <!-- Specify the parent view to extend -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Latest Elegant Designs</h2>
    <div id="products_container" class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <a href="{{ $product->affiliate_link }}" target="_blank">
                    <div class="card box-shadow" style="height: 440px;">
                        <img class="card-img-top" style="height: 70%;"
                            src="{{ asset('uploads/products/' . $product->featured_image) }}"
                            alt="{{ $product->title }}">
                        <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                <div style="display: flex; justify-content: space-between;">
                                    <h6 class="card-title" style="color:red; margin: 0;">${{ $product->price }}</h4>
                                    <h6 class="card-text" style="color:green; margin: 0;">LFJ Code: {{ $product->id }}</h6>
                                </div>
                                <p class="card-text text-center">{{ $product->title }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

        <!-- Load More card for Products -->
        <div id="load_more_products_card" class="col-md-4 content_box" style="display: none;">
            <div class="card mb-4 box-shadow" style="height: 300px;">
                <div class="card-body d-flex align-items-center justify-content-center text-center">
                    <button class="btn btn-primary" id="load_more_products_button">Load More</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var startProduct = 15;

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
                        <div class="card box-shadow" style="height: 440px;">
                            <img class="card-img-top" style="height: 70%;" src="${baseUrl + "/" + data.data[i].featured_image}" alt="${data.data[i].title}">
                            <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                            <div class="card-body" style="height: 30%; display: flex; flex-direction: column; justify-content: space-between;">
                                <div style="display: flex; justify-content: space-between;">
                                    <h6 class="card-title" style="color:red; margin: 0;">${{ $product->price }}</h4>
                                    <h6 class="card-text" style="color:green; margin: 0;">LFJ Code: {{ $product->id }}</h6>
                                </div>
                                <p class="card-text text-center">{{ $product->title }}</p>
                            </div>
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