@extends('../layout/admin_master')
@section('title', 'Latest Fashion Jewellery')
@section('css_files')
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('css/theme1.css')}}" id="theme_stylesheet"/>
@endsection
@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('products.create') }}" class="btn btn-primary mr-2">New Product</a>
                        <div class="page-subtitle ml-0"> Total <font color='blue'> {{ $products->count() }} </font> Products</div>
                        <!-- Rest of the sorting and search options code -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    @foreach($products as $product)
                    <div class="card">
                        <div class="card-body">
                            <h4 style="color: #e75480" class="card-title">{{ $product->title }}</h4>
                            <div class="product-info">
                                <!-- Add any additional information you want to display -->
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <i class="fa fa-dollar"></i> {{ $product->price }}
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        {!! $product->affiliate_link !!}
                      
                        <div class="card-body">
                            <div class="text-muted">{{ substr($product->description, 0, 150) }}...</div>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Edit and Delete buttons -->
                                <div class="ml-auto text-muted">
                                    <a href="{{ route('products.edit', $product->id) }}" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('products.destroy', $product->id) }}" class="icon d-none d-md-inline-block ml-3" onclick="event.preventDefault(); deleteProduct({{ $product->id }});"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                            <small class="d-block text-muted">{{ $product->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function deleteProduct(productId) {
        if (confirm('Are you sure you want to delete this Product?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ route("products.destroy", "") }}/' + productId;
            form.style.display = 'none';

            const csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('name', '_token');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');

            const methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'DELETE');

            form.appendChild(csrfToken);
            form.appendChild(methodInput);

            document.body.appendChild(form);
            form.submit();
        }
    }
</script>

@section('script_files')
<script src="{{ asset('bundles/lib.vendor.bundle.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
@endsection