@extends('../layout/landing_master')

<style>
    .search-box {
        border: 2px solid #FF5733;
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 16px;
        color: #FF5733;
        background-color: #FADBD8;
    }

    .search-box::placeholder {
        color: #FF5733;
    }

    .search-box:focus {
        border-color: #FFC300;
        box-shadow: 0 0 5px rgba(255, 195, 0, 0.7);
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        background-color: #FCE5CD;
        text-align: center;
        color: #FF5733;
        padding: 20px;
        margin: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #FFC300;
    }

    .card-text {
        font-size: 1rem;
        color: #FF5733;
    }

    .card-img {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .container {
        padding: 20px;
    }

    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px;
    }

    .celebrity-image {
        max-width: 800px;
        max-height: 400px;
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            @if($celebrities instanceof \Illuminate\Database\Eloquent\Collection && $celebrities->count() > 0)
                @foreach ($celebrities as $celebrity)
                    <div class="col-md-6">
                        <a href="{{ route('celebrityShow', $celebrity->celebrity_id) }}">
                            <div class="card mb-3">
                                <a href="{{ route('celebrityShow', $celebrity->celebrity_id) }}">
                                    <div class="card-image">
                                        @if ($celebrity->image)
                                            <img src="{{ asset('/uploads/celebrities/' . $celebrity->image) }}" alt="{{ $celebrity->name }}" class="card-img celebrity-image">
                                        @endif
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
                                    </div>
                                </a>
                                <p class="card-title" style="display: flex; justify-content: center; align-items: center;font-size:50px;">{{ $celebrity->name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @elseif($celebrities instanceof \App\Models\Celebrities)
                <!-- Display a single celebrity card -->
                <div class="card">
                    @if ($celebrities->image)
                        <img src="{{ asset('/uploads/celebrities/' . $celebrities->image) }}" alt="{{ $celebrities->name }}" class="card-img celebrity-image">
                    @endif
                    <br>
                    <br>
                    <div class="social-links" style="text-align:center">
                        @if ($celebrities->instagram)
                            @php
                                $instagramLink = strpos($celebrities->instagram, 'http') === 0 ? $celebrities->instagram : "https://www.instagram.com/{$celebrities->instagram}";
                            @endphp
                            <a href="{{ $instagramLink }}" target="_blank"><i
                                    class="fab fa-instagram fa-2x text-primary"></i></a>&nbsp;&nbsp;
                        @endif
                        @if ($celebrities->twitter)
                            @php
                                $twitterLink = strpos($celebrities->twitter, 'http') === 0 ? $celebrities->twitter : "https://twitter.com/{$celebrities->twitter}";
                            @endphp
                            <a href="{{ $twitterLink }}" target="_blank"><i
                                    class="fab fa-twitter fa-2x text-info"></i></a>&nbsp;&nbsp;
                        @endif
                        @if ($celebrities->facebook)
                            @php
                                $facebookLink = strpos($celebrities->facebook, 'http') === 0 ? $celebrities->facebook : "https://www.facebook.com/{$celebrities->facebook}";
                            @endphp
                            <a href="{{ $facebookLink }}" target="_blank"><i
                                    class="fab fa-facebook fa-2x text-primary"></i></a>&nbsp;&nbsp;
                        @endif
                        @if ($celebrities->youtube)
                            @php
                                $youtubeLink = strpos($celebrities->youtube, 'http') === 0 ? $celebrities->youtube : "https://www.youtube.com/{$celebrities->youtube}";
                            @endphp
                            <a href="{{ $youtubeLink }}" target="_blank"><i
                                    class="fab fa-youtube fa-2x text-danger"></i></a>&nbsp;&nbsp;
                        @endif
                        @if ($celebrities->tiktok)
                            @php
                                $tiktokLink = strpos($celebrities->tiktok, 'http') === 0 ? $celebrities->tiktok : "https://www.tiktok.com/{$celebrities->tiktok}";
                            @endphp
                            <a href="{{ $tiktokLink }}" target="_blank"><i
                                    class="fab fa-tiktok fa-2x text-primary"></i></a>&nbsp;&nbsp;
                        @endif
                        @if ($celebrities->snapchat)
                            @php
                                $snapchatLink = strpos($celebrities->snapchat, 'http') === 0 ? $celebrities->snapchat : "https://www.snapchat.com/add/{$celebrities->snapchat}";
                            @endphp
                            <a href="{{ $snapchatLink }}" target="_blank"><i
                                    class="fab fa-snapchat fa-2x text-yellow"></i></a>&nbsp;&nbsp;
                        @endif
                        @if ($celebrities->website)
                            @php
                                $websiteLink = strpos($celebrities->website, 'http') === 0 ? $celebrities->website : "https://{$celebrities->website}";
                            @endphp
                            <a href="{{ $websiteLink }}" target="_blank"><i
                                    class="fas fa-globe fa-2x text-success"></i></a>&nbsp;&nbsp;
                        @endif
                    </div>
                    <p class="card-title" style="display: flex; justify-content: center; align-items: center;font-size:50px;">{{ $celebrities->name }}</p>
                    <p class="card-title" style="color: blueviolet; display: flex; justify-content: justify; align-items: justify; font-size: 18px; text-align: justify;">{{ $celebrities->description }}</p>
                </div>
            @endif
        </div>

        <!-- Related Blogs section -->
        <div class="container mt-5" style="text-align: left">
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
                                        @if ($blog->featured_image)
                                            <img width="100px" height="100px" src="/uploads/blogs/{{ $blog->featured_image }}" alt="Featured Image" style="border: 2px solid #ccc; border-radius: 5px;">
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
