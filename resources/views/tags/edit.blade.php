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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['route' => ['tags.update', $tag->id], 'method' => 'put']) !!} <!-- Update the form action and method -->
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        {!! Form::text('title', $tag->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Enter Name']) !!} <!-- Update the input field value -->
                        @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!} <!-- Update the button label -->
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('script_files')
    <script src="{{ asset('bundles/lib.vendor.bundle.js') }}"></script>
    <script src="{{ asset('bundles/summernote.bundle.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/page/summernote.js') }}"></script>
    <!-- Include any additional JavaScript files here -->
@endsection
