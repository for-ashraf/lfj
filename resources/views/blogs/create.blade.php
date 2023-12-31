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
                                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" value="{{ old('title') }}" placeholder="Enter Blog Title...">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Blog Category</label>
                                        <select class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}" name="category_id">
                                            <option value="">Select a Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->category_id }}" {{ old('category_id') == $category->category_id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div>
                                <textarea class="summernote {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="featured_image">Featured Image</label>
                                <input type="file" class="form-control-file {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image" name="featured_image">
                                @error('featured_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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

                            <div class="form-group">
                                <label class="form-label">Author</label>
                                <select class="form-control {{ $errors->has('author_name') ? 'is-invalid' : '' }}" name="author_name">
                                    <option value="">Select an Author</option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->author_name }}" {{ old('author_name') == $author->author_name ? 'selected' : '' }}>
                                            {{ $author->author_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('author_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Celebrity (Optional)</label>
                                <select class="form-control {{ $errors->has('celebrity_id') ? 'is-invalid' : '' }}" name="celebrity_id">
                                    <option value="">Select Celebrity</option>
                                    @foreach ($celebrities as $celebrity)
                                        <option value="{{ $celebrity->celebrity_id }}" {{ old('celebrity_id') == $celebrity->celebrity_id ? 'selected' : '' }}>
                                            {{ $celebrity->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('celebrity_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Meta Tags (Optional)</label>
                                    <input type="text" class="form-control {{ $errors->has('meta_tags') ? 'is-invalid' : '' }}" name="meta_tags" value="{{ old('meta_tags') }}" placeholder="Meta Tags...">
                                    @error('meta_tags')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            </div>
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
