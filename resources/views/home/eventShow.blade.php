@extends('../layout/landing_master') <!-- Specify the parent view to extend -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    .search-box {
        border: 2px solid #FF5733;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 16px;
        color: #FF5733;
        background-color: #FADBD8; /* Light pink background */
    }

    .search-box::placeholder {
        color: #FF5733;
    }

    .search-box:focus {
        border-color: #FFC300; /* Bright yellow border on focus */
        box-shadow: 0 0 5px rgba(255, 195, 0, 0.7);
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        background-color: #FCE5CD; /* Light orange background */
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #FFC300; /* Eye-catching title color (bright yellow) */
    }

    .card-text {
        font-size: 1rem;
        color: #FF5733; /* Eye-catching text color (bright orange) */
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

    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px; /* Adjust the height as needed */
    }

    .celebrity-image {
        max-width: 800px; /* Set your preferred maximum width */
        max-height: 400px; /* Set your preferred maximum height */
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="center-content">
                        <div class="celebrity-image">
                            @if ($celebrity->image != '')
                            <img src="{{ asset('/uploads/celebrities/' . $celebrity->image) }}" class="card-img celebrity-image" alt="{{ $celebrity->name }}">
                                <br>
                                <br>
                                <div class="social-links" style="text-align:center">
                                    @if ($celebrity->instagram)
                                        @php
                                            $instagramLink = strpos($celebrity->instagram, 'http') === 0 ? $celebrity->instagram : "https://www.instagram.com/{$celebrity->instagram}";
                                        @endphp
                                        <a href="{{ $instagramLink }}" target="_blank"><i
                                                class="fab fa-instagram fa-2x text-primary"></i></a>&nbsp;&nbsp;
                                    @endif
                                    @if ($celebrity->twitter)
                                        @php
                                            $twitterLink = strpos($celebrity->twitter, 'http') === 0 ? $celebrity->twitter : "https://twitter.com/{$celebrity->twitter}";
                                        @endphp
                                        <a href="{{ $twitterLink }}" target="_blank"><i
                                                class="fab fa-twitter fa-2x text-info"></i></a>&nbsp;&nbsp;
                                    @endif
                                    @if ($celebrity->facebook)
                                        @php
                                            $facebookLink = strpos($celebrity->facebook, 'http') === 0 ? $celebrity->facebook : "https://www.facebook.com/{$celebrity->facebook}";
                                        @endphp
                                        <a href="{{ $facebookLink }}" target="_blank"><i
                                                class="fab fa-facebook fa-2x text-primary"></i></a>&nbsp;&nbsp;
                                    @endif
                                    @if ($celebrity->youtube)
                                        @php
                                            $youtubeLink = strpos($celebrity->youtube, 'http') === 0 ? $celebrity->youtube : "https://www.youtube.com/{$celebrity->youtube}";
                                        @endphp
                                        <a href="{{ $youtubeLink }}" target="_blank"><i
                                                class="fab fa-youtube fa-2x text-danger"></i></a>&nbsp;&nbsp;
                                    @endif
                                    @if ($celebrity->tiktok)
                                        @php
                                            $tiktokLink = strpos($celebrity->tiktok, 'http') === 0 ? $celebrity->tiktok : "https://www.tiktok.com/{$celebrity->tiktok}";
                                        @endphp
                                        <a href="{{ $tiktokLink }}" target="_blank"><i
                                                class="fab fa-tiktok fa-2x text-primary"></i></a>&nbsp;&nbsp;
                                    @endif
                                    @if ($celebrity->snapchat)
                                        @php
                                            $snapchatLink = strpos($celebrity->snapchat, 'http') === 0 ? $celebrity->snapchat : "https://www.snapchat.com/add/{$celebrity->snapchat}";
                                        @endphp
                                        <a href="{{ $snapchatLink }}" target="_blank"><i
                                                class="fab fa-snapchat fa-2x text-yellow"></i></a>&nbsp;&nbsp;
                                    @endif
                                    @if ($celebrity->website)
                                        @php
                                            $websiteLink = strpos($celebrity->website, 'http') === 0 ? $celebrity->website : "https://{$celebrity->website}";
                                        @endphp
                                        <a href="{{ $websiteLink }}" target="_blank"><i
                                                class="fas fa-globe fa-2x text-success"></i></a>&nbsp;&nbsp;
                                    @endif
                                </div>
                            @else
                            <img src="{{ asset('/uploads/celebrities/' . $celebrity->image) }}" class="card-img celebrity-image" alt="{{ $celebrity->name }}">

                            @endif
                            <p class="card-title" style="display: flex; justify-content: center; align-items: center;font-size:50px;">{{ $celebrity->name }}</p>    
                        </div>
                    </div>
                    <br><br><br><br><br>
                    <div class="card-body">
                        
                        <p class="card-text" style="color: black;">{{ $celebrity->description }}</p>
                        <p class="card-title"><strong style="color:black;">Birthdate:</strong> {{ $celebrity->birthdate }}</p>
                        <p class="card-title"><strong style="color:black;">Nationality:</strong> {{ $celebrity->nationality }}</p>
                    </div>
                     <div class="container mt-5">
                        <h3 class="mb-3">Popular Related Blogs</h3>
                        <div class="blog-list">
                            @foreach ($blogs as $blog)
                                <div class="blog-item">
                                    <div class="blog-content">
                                        <h2 class="blog-title">
                                            <a href="{{ route('home.showblog', $blog->blog_id) }}">{{ $blog->title }}</a>
                                        </h2>
                                        <table>
                                            <tr>
                                                <td style="vertical-align: top; width: 80%;">
                                                    <div class="content-wrapper">
                                                        {{ \Illuminate\Support\Str::words($blog->content, 30, '...') }}
                                                        <a href="{{ route('home.showblog', $blog->blog_id) }}" class="read-more">Read More</a>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: top; width: 20%;">
                                                    <img width="100px" height="100px" src="/uploads/blogs/{{ $blog->featured_image }}" alt="Featured Image" style="border: 2px solid #ccc; border-radius: 5px;">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
        </div>
                </div>
               
        </div>
    </div>
@endsection
