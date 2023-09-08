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
    <h1>Edit Product</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                    <!-- Product Information -->
                    <div class="form-group">
                        <label for="category">Product Category</label>
                        
                        <select class="form-control" name="category">
                            @foreach ($categories as $category)
                            <option value="{{ $category->category_name }}" {{ $category->category_name == $product->category ? 'selected' : '' }}>
                             {{ $category->category_name }}
                         </option>
                            @endforeach
                            </select>
                            
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Product ID</label>
                        {!! Form::text('product_id', null, ['class' => 'form-control', 'placeholder' => 'Enter Product ID']) !!}
                        @error('product_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Product Title</label>
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Product Title']) !!}
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Product Description</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter Product Description']) !!}
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="featured_image">Select Image</label>
                        {!! Form::file('featured_image', null, ['class' => 'form-control', 'placeholder' => 'Upload File']) !!}
                        @error('featured_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        {!! Form::number('price', null, ['class' => 'form-control', 'step' => '0.01', 'placeholder' => 'Enter Price']) !!}
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="affiliate_link">Affiliate Link</label>
                        {!! Form::text('affiliate_link', null, ['class' => 'form-control', 'placeholder' => 'Enter Affiliate Link']) !!}
                        @error('affiliate_link')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Update Product</button>
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