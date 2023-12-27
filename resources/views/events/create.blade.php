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

{!! Form::open(['route' => 'events.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Event Name</label>
                            <input type="text" class="form-control" name="event_name" placeholder="Enter Event Name">
                            @error('event_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Event From Date</label>
                            <input type="date" class="form-control" name="event_from_date">
                            @error('event_from_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Event To Date</label>
                            <input type="date" class="form-control" name="event_to_date">
                            @error('event_to_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Event Description</label>
                            <textarea class="form-control" name="event_description" placeholder="Enter Event Description"></textarea>
                            @error('event_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label class="form-label">Event Location</label>
                            <input type="text" class="form-control" name="event_location" placeholder="Enter Event Location">
                            @error('event_location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Registration Link</label>
                            <input type="text" class="form-control" name="registration_link" placeholder="Enter Registration Link">
                            @error('registration_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">GPS Location</label>
                            <input type="text" class="form-control" name="gps_location" placeholder="Enter GPS Location">
                            @error('gps_location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Event Website</label>
                            <input type="text" class="form-control" name="event_website" placeholder="Enter Event Website">
                            @error('event_website')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Event Category</label>
                            <select class="form-control" name="event_category">
                                <option value="">Select a Category</option>
                             @foreach ($categories as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                             @endforeach
                             </select>
                             @error('event_category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Event Organizer</label>
                            <input type="text" class="form-control" name="event_organizer" placeholder="Enter Event Organizer">
                            @error('event_organizer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Event Contact</label>
                            <input type="text" class="form-control" name="event_contact" placeholder="Enter Event Contact">
                            @error('event_contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                        <div class="form-group">
                <label class="form-label">Event Image</label>
                <input type="file" class="form-control-file" name="event_image">
               
                @error('event_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
            </div>
        <div class="col-md-6">
            <div class="card" style="background-color:khaki">
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Add Event</button>
            </div>
            </div>
        
    </div>
        </div>
    </div>
</div>

{!! Form::close() !!}

@endsection

@section('script_files')
    <script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('bundles/summernote.bundle.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('js/page/summernote.js')}}"></script>
@endsection