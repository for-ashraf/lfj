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
        @if($events instanceof \Illuminate\Database\Eloquent\Collection && $events->count() > 1)
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
                                                <span>{{ date('d', strtotime($event->event_date)) }}</span> -
                                                <span>{{ date('M', strtotime($event->event_date)) }}</span> -
                                                <span>{{ date('Y', strtotime($event->event_date)) }}</span>
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
                @elseif($events instanceof \App\Models\Events)
                  <!-- Display a single event card -->
        <div class="card">
            <img src="{{ asset('/uploads/events/' . $events->event_image) }}" alt="{{ $events->event_name }}" class="card-img">
            <div class="center-content">
                <div class="card-overlay">
                    <h5 class="card-title">{{ $events->event_name }}</h5>
                    <p class="card-text" style="color: grey">
                        Date: {{ date('d', strtotime($events->event_date)) }} - {{ date('M', strtotime($events->event_date)) }} - {{ date('Y', strtotime($events->event_date)) }}
                    </p>
                    <p class="card-text" style="color: grey">Location: {{ $events->event_location }}</p>
                    <p class="card-text" style="color: grey">Description: {{ $events->event_description }}</p>
                    <div class="event-details-btn">
                        <a target="_blank" href="{{ $events->registration_link }}">
                            <h5 style="color: orange">{{ $events->registration_link }}</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
            </div>
        </div>
        
        
        
                <div class="container mt-5" style="text-align: left">
                    <h3 class="mb-3">Related Blogs</h3>
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
