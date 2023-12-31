@extends('../layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Add New Celebrity')

@section('css_files')
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('plugins/summernote/dist/summernote.css')}}"/>
<!-- Core css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('css/theme1.css')}}" id="theme_stylesheet"/>
<link rel="stylesheet" href="{{asset('css/mystyle.css')}}"/>
@endsection

@section('content')
<div class="container">
    <h1>Edit Event</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($event, ['route' => ['events.update', $event->event_id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                    <!-- Event Information -->
                    <div class="form-group">
                        <label for="event_name">Event Name</label>
                        <input type="text" class="form-control" id="event_name" name="event_name" value="{{ $event->event_name }}">
                        @error('event_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_date">Event From Date</label>
                        <input type="date" class="form-control" id="event_from_date" name="event_from_date" value="{{ $event->event_from_date }}">
                        @error('event_from_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_date">Event To Date</label>
                        <input type="date" class="form-control" id="event_to_date" name="event_to_date" value="{{ $event->event_to_date }}">
                        @error('event_to_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_description">Event Description</label>
                        <textarea class="form-control summernote" id="event_description" name="event_description">{{ $event->event_description }}</textarea>
                        @error('event_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                  
                    
                </div>
            </div>
        </div>
        <!-- Third Column -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="event_category">Event Category</label>
                        
                        <select class="form-control" name="event_category">
                            @foreach ($categories as $category)
                            <option value="{{ $category->category_name }}" {{ $category->category_name == $event->event_category ? 'selected' : '' }}>
                             {{ $category->category_name }}
                         </option>
                            @endforeach
                            </select>
                            
                            @error('event_category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_organizer">Event Organizer</label>
                        <input type="text" class="form-control" id="event_organizer" name="event_organizer" value="{{ $event->event_organizer }}">
                        @error('event_organizer')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="event_contact">Event Contact</label>
                        <input type="text" class="form-control" id="event_contact" name="event_contact" value="{{ $event->event_contact }}">
                        @error('event_contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="event_location">Event Location</label>
                        <input type="text" class="form-control" id="event_location" name="event_location" value="{{ $event->event_location }}">
                        @error('event_location')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Second Column -->
                    <div class="form-group">
                        <label for="registration_link">Registration Link</label>
                        <input type="text" class="form-control" id="registration_link" name="registration_link" value="{{ $event->registration_link }}">
                        @error('registration_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gps_location">GPS Location</label>
                        <input type="text" class="form-control" id="gps_location" name="gps_location" value="{{ $event->gps_location }}">
                        @error('gps_location')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="event_website">Event Website</label>
                        <input type="text" class="form-control" id="event_website" name="event_website" value="{{ $event->event_website }}">
                        @error('event_website')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="event_image">Event Image</label>
                        <input type="file" class="form-control-file" id="event_image" name="event_image">
                        @error('event_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update Event</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script_files')
    <script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('bundles/summernote.bundle.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('js/page/summernote.js')}}"></script>
@endsection