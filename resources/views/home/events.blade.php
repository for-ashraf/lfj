@extends('../layout/landing_master') <!-- Specify the parent view to extend -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
   .card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    background-color: #fc98b9;
    position: relative;
    overflow: hidden;
    height: 300px; /* Set the desired height of the cards */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.card:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
    background-color: transparent;
}

.card-title {
    font-size: 1.6rem;
    font-weight: bold;
    color: #ffffff;
    /* Eye-catching title color (e.g., orange) */
}

.card-text {
    font-size: 1.3rem;
    color: #faf6f6;
    /* Eye-catching text color (e.g., blue) */
}

.card-image {
    position: relative;
}

.card-img {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    object-fit: cover;
    height: 100%;
    width: 100%;
    opacity: 0.6;
}

.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 1;
    transition: opacity 0.3s;
    z-index: 1;
}

.card:hover .card-overlay .card-title{
    opacity: 1;
    color: #f8d122;
}
.card:hover .card-img {
    opacity: 1;
}

.card-overlay-content {
    text-align: center;
    color: #fff;
    padding: 20px;
}
.event-details-btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        background-color: rgb(251, 252, 249); /* Default button color */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .event-details-btn:hover {
        background-color: orange; /* Button color on hover */
    }
</style>

@section('content')
<div class="container">
    <input type="text" id="searchInput" name="searchInput" style="height: 60px;color:rgb(233, 106, 117);" class="form-control search-box" placeholder="Search celebrities...">
</div>
<br> 
<div class="container">
    <div class="row">
        @foreach ($events as $event)
        <div class="col-md-6">
            <a href="{{ route('eventShow', $event->event_id) }}">
                <div class="card mb-3">
                    <a href="{{ route('eventShow', $event->event_id) }}">
                        <div class="card-image">
                            <img src="{{ asset('/uploads/events/' . $event->event_image) }}" alt="{{ $event->event_name }}" class="card-img">
                            <div class="card-overlay">
                                <div>
                                    <h5 class="card-title">{{ $event->event_name }}</h5>
                                    <p class="card-text">
                                        <span>{{ date('d', strtotime($event->event_from_date)) }}</span> -
                                        <span>{{ date('M', strtotime($event->event_from_date)) }}</span> -
                                        <span>{{ date('Y', strtotime($event->event_from_date)) }}</span>
                                    </p>
                                    <p class="card-text">{{ $event->event_location }}</p>
                                    <div class="event-details-btn">
                                        <a href="{{ route('eventShow', $event->event_id) }}">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#searchInput").on("keyup", function () {
            var searchText = $(this).val().toLowerCase();

            // Loop through each card
            $(".card").each(function () {
                var cardText = $(this).find(".card-title, .card-text").text().toLowerCase();

                // If the card's text contains the search text, show it; otherwise, hide it
                if (cardText.includes(searchText)) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>
@endsection