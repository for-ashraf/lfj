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
    <div class="page-header">
        <h1 class="page-title">
            <a href="app-blog.html"><i class="fa fa-arrow-left"></i></a> Blog Post
        </h1>
        <div class="d-flex">
            <select class="custom-select mr-3">
                <option>Year</option>
                <option>Month</option>
                <option>Week</option>
            </select>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            {!! Form::open(['route' => 'products.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="form-label">Product Category</label>
                        <select class="form-control" name="category">
                            <option value="">Select a Category</option>
                         @foreach ($categories as $category)
                            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                         @endforeach
                         </select>
                         @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Product ID</label>
                        {!! Form::text('product_id', null, ['class' => 'form-control', 'placeholder' => 'Enter Product ID']) !!}
                        @error('product_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Product Title</label>
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Product Title']) !!}
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Product Description</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter Product Description']) !!}
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Image URL</label>
                        {!! Form::text('image_url', null, ['class' => 'form-control', 'placeholder' => 'Enter Image URL']) !!}
                        @error('image_url')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Price</label>
                      
                        {!! Form::number('price', null, ['class' => 'form-control', 'step' => '0.01', 'placeholder' => 'Enter Price']) !!}

                      
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Affiliate Link</label>
                        {!! Form::text('affiliate_link', null, ['class' => 'form-control', 'placeholder' => 'Enter Affiliate Link']) !!}
                        @error('affiliate_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="card">
               
                <div class="card-footer text-right">
                    {!! Form::submit('Add Product', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
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