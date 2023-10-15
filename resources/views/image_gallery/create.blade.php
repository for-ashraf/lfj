@extends('../layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Add New Celebrity')

@section('css_files')
    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote.css') }}" />
    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme1.css') }}" id="theme_stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}" />
@endsection

@section('content')

    {!! Form::open(['route' => 'image_gallery.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Category</label>
                                        <select class="form-control" name="category">
                                            <option value="">Select a Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->category_name }}">
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Image Title</label>
                                        <input type="text" class="form-control" name="title"
                                            placeholder="Enter Image Title...">
                                        @error('title')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Celebrity (Optional)</label>
                                        <select class="form-control {{ $errors->has('celebrity_id') ? 'is-invalid' : '' }}"
                                            name="celebrity_id">
                                            <option value="">Select Celebrity</option>
                                            @foreach ($celebrities as $celebrity)
                                                <option value="{{ $celebrity->celebrity_id }}"
                                                    {{ old('celebrity_id') == $celebrity->celebrity_id ? 'selected' : '' }}>
                                                    {{ $celebrity->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('celebrity_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control-file" id="image" name="image">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Add Image</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}

@endsection

@section('script_files')
    <script src="{{ asset('bundles/lib.vendor.bundle.js') }}"></script>
    <script src="{{ asset('bundles/summernote.bundle.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/page/summernote.js') }}"></script>
@endsection
