@extends('../layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')

@section('css_files')
    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote.css') }}" />
    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme1.css') }}" id="theme_stylesheet" />
@endsection


@section('content')
  
    {!! Form::open(['route' => 'blogs.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}


    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Blog Title</label>
                                        <input type="text" class="form-control" name="title"
                                            placeholder="Enter Blog Title...">
                                        @error('title')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Blog Category</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Select a Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->category_id }}">
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <textarea class="summernote" name="content" id="content">
                            </textarea>
                                @error('content')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="featured_image">Featured Image</label>
                                <input type="file" class="form-control-file" id="featured_image"
                                    name="featured_image">
                            </div>
                            <div class="mb-3">
                                <label for="tags">Tags</label>
                                <select class="form-control js-tags @error('tags') is-invalid @enderror" name="tags[]" multiple="multiple">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag }}" {{ in_array($tag, old('tags', [])) ? 'selected' : '' }}>{{ $tag }}</option>
                                    @endforeach
                                </select>
                                @error('tags')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- ... existing form code ... -->
                            <div class="form-group">
                                <label class="form-label">Author</label>
                                <select class="form-control" name="author_name">
                                    <option value="">Select an Author</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->author_name }}">{{ $author->author_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- ... existing form code ... -->

                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ Form::close() }}

@endsection
@section('script_files')  
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('bundles/lib.vendor.bundle.js') }}"></script>
    <script src="{{ asset('bundles/summernote.bundle.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
    <script src="{{ asset('js/page/summernote.js') }}"></script>
@endsection
