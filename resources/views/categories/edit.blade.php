@extends('../layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')

@section('css_files')
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('plugins/summernote/dist/summernote.css')}}"/>
<!-- Core css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('css/theme1.css')}}" id="theme_stylesheet"/>
@endsection


@section('content')
\
{!! Form::model($category, ['route' => ['categories.update', $category->category_id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Category Name</label>
            <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
            @error('category_name')
            <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Parent Category</label>
            <select class="form-control" name="parent_category_id">
                <option value="">Select a Parent Category</option>
                @foreach ($categories    as $cat)
                    <option value="{{ $cat->category_id }}" {{ $category->parent_category_id == $cat->category_id ? 'selected' : '' }}>
                        {{ $cat->category_name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="form-label">Category Description</label>
    <textarea class="form-control" name="category_description">{{ $category->category_description }}</textarea>
    @error('category_description')
    <span style="color: red;">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label for="category_image">Category Image</label>
    <input type="file" class="form-control-file" id="category_image" name="category_image">
</div>

<div class="card-footer text-right">
    <button type="submit" class="btn btn-primary">Update Category</button>
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