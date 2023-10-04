@extends('../layout/admin_master')
@section('title', 'Latest Fashion Jewellery')
@section('css_files')
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('css/theme1.css')}}" id="theme_stylesheet"/>
@endsection
@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary mr-2">New Event</a>
                        <div class="page-subtitle ml-0"> Total <font size='3' color='blue'>{{ $events->count() }} </font>Events</div>
                        <!-- Rest of the sorting and search options code -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    @foreach($events as $event)
                    <div class="card">
                        <div class="card-body">
                            <h4 style="color: #e75480" class="card-title">{{ $event->event_name }}</h4>
                            <div class="event-info">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <i class="fa fa-calendar"></i> {{ $event->event_date }}
                                    </div>
                                    <div class="mr-3">
                                        <i class="fa fa-clock"></i> {{ $event->event_time }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <img class="card-img-top event-thumbnail" src="{{ getEventImageUrl($event->event_id) }}" alt="{{ $event->event_title }}">
                        </a>
                        <div class="card-body">
                            <div class="text-muted">{{ substr($event->event_description, 0, 150) }}...</div>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i> {{ $event->event_location }}
                                </div>
                                <div class="ml-auto text-muted">
                                    <!-- Edit and Delete buttons -->
                                    <a href="{{ route('events.edit', $event->event_id) }}" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('events.destroy', $event->event_id) }}" class="icon d-none d-md-inline-block ml-3" onclick="event.preventDefault(); deleteEvent({{ $event->event_id }});">  <i class="fa fa-trash"></i>
                                </div>
                            </div>
                            <small class="d-block text-muted">{{ $event->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function deleteEvent(eventId) {
        if (confirm('Are you sure you want to delete this event?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ route("events.destroy", "") }}/' + eventId;
            form.style.display = 'none';

            const csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('name', '_token');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');

            const methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'DELETE');

            form.appendChild(csrfToken);
            form.appendChild(methodInput);

            document.body.appendChild(form);
            form.submit();
        }
    }
</script>

@section('script_files')
<script src="{{ asset('bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
@endsection