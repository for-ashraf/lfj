@extends('../layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Edit Jewellery Brand')

@section('css_files')
    <!-- Bootstrap Core and vendor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote.css') }}" />
    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme1.css') }}" id="theme_stylesheet" />
@endsection

@section('content')

    {!! Form::model($jewelleryBrand, ['route' => ['brands.update', $jewelleryBrand->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}

    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Brand Name</label>
                                        <input type="text" class="form-control {{ $errors->has('brand_name') ? 'is-invalid' : '' }}" name="brand_name" value="{{ old('brand_name', $jewelleryBrand->brand_name) }}" placeholder="Enter Brand Name...">
                                        @error('brand_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Brand Image</label>
                                        <input type="file" class="form-control-file {{ $errors->has('brand_image') ? 'is-invalid' : '' }}" name="brand_image">
                                        @error('brand_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="summernote {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description">{{ old('description', $jewelleryBrand->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-label">Website URL</label>
                                <input type="text" class="form-control {{ $errors->has('website_url') ? 'is-invalid' : '' }}" name="website_url" value="{{ old('website_url', $jewelleryBrand->website_url) }}" placeholder="Enter Website URL...">
                                @error('website_url')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
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
