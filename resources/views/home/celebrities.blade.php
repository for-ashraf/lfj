@extends('../layout/landing_master') <!-- Specify the parent view to extend -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    .search-box {
        border: 2px solid #007BFF;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 16px;
        color: #007BFF;
    }

    .search-box::placeholder {
        color: #007BFF;
    }

    .search-box:focus {
        border-color: #FF5733;
        box-shadow: 0 0 5px rgba(255, 87, 51, 0.7);
    }
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        background-color: #fc98b9;
    }

    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        background-color:lightblue;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #ee9e96; /* Eye-catching title color (e.g., orange) */
    }

    .card-text {
        font-size: 1rem;
        color: #e77bde; /* Eye-catching text color (e.g., blue) */
    }

    .card-img {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .text-muted {
        color: #999;
    }

    .container {
        padding: 20px;
    }
</style>
@section('content')
<div class="container">
    <input type="text" id="searchInput" name="searchInput" class="form-control search-box" placeholder="Search celebrities...">
</div>

<div class="container">
    <div class="row">
        @foreach($celebrities as $celebrity)
            <div class="col-md-6">
                <a href="{{ route('celebrityShow', $celebrity->celebrity_id) }}">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('/uploads/celebrities/' . $celebrity->image) }}" class="card-img" alt="{{ $celebrity->name }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $celebrity->name }}</h5>
                                    <p class="card-text">{{ $celebrity->description }}</p>
                                    <p class="card-text"><small class="text-muted">Birthdate: {{ $celebrity->birthdate }}</small></p>
                                    <p class="card-text"><small class="text-muted">Nationality: {{ $celebrity->nationality }}</small></p>
                                    <div class="social-links">
                                        @if($celebrity->instagram)
                                            @php
                                                $instagramLink = (strpos($celebrity->instagram, 'http') === 0) ? $celebrity->instagram : "https://www.instagram.com/{$celebrity->instagram}";
                                            @endphp
                                            <a href="{{ $instagramLink }}" target="_blank"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;
                                        @endif
                                        @if($celebrity->twitter)
                                            @php
                                                $twitterLink = (strpos($celebrity->twitter, 'http') === 0) ? $celebrity->twitter : "https://twitter.com/{$celebrity->twitter}";
                                            @endphp
                                            <a href="{{ $twitterLink }}" target="_blank"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;
                                        @endif
                                        @if($celebrity->facebook)
                                            @php
                                                $facebookLink = (strpos($celebrity->facebook, 'http') === 0) ? $celebrity->facebook : "https://www.facebook.com/{$celebrity->facebook}";
                                            @endphp
                                            <a href="{{ $facebookLink }}" target="_blank"><i class="fab fa-facebook"></i></a>&nbsp;&nbsp;
                                        @endif
                                        @if($celebrity->youtube)
                                            @php
                                                $youtubeLink = (strpos($celebrity->youtube, 'http') === 0) ? $celebrity->youtube : "https://www.youtube.com/{$celebrity->youtube}";
                                            @endphp
                                            <a href="{{ $youtubeLink }}" target="_blank"><i class="fab fa-youtube"></i></a>&nbsp;&nbsp;
                                        @endif
                                        @if($celebrity->tiktok)
                                            @php
                                                $tiktokLink = (strpos($celebrity->tiktok, 'http') === 0) ? $celebrity->tiktok : "https://www.tiktok.com/{$celebrity->tiktok}";
                                            @endphp
                                            <a href="{{ $tiktokLink }}" target="_blank"><i class="fab fa-tiktok"></i></a>&nbsp;&nbsp;
                                        @endif
                                        @if($celebrity->snapchat)
                                            @php
                                                $snapchatLink = (strpos($celebrity->snapchat, 'http') === 0) ? $celebrity->snapchat : "https://www.snapchat.com/add/{$celebrity->snapchat}";
                                            @endphp
                                            <a href="{{ $snapchatLink }}" target="_blank"><i class="fab fa-snapchat"></i></a>&nbsp;&nbsp;
                                        @endif
                                        @if($celebrity->website)
                                            @php
                                                $websiteLink = (strpos($celebrity->website, 'http') === 0) ? $celebrity->website : "https://{$celebrity->website}";
                                            @endphp
                                            <a href="{{ $websiteLink }}" target="_blank"><i class="fas fa-globe"></i></a>&nbsp;&nbsp;
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
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

