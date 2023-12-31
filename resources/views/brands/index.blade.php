@extends('../layout/admin_master')

@section('title', 'Jewellery Brands')

@section('css_files')
    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme1.css') }}" id="theme_stylesheet"/>
@endsection

@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('brands.create') }}" class="btn btn-primary mr-2">New Jewellery Brand</a>
                        <div class="page-subtitle ml-0"> Total <font color='blue'> {{ $jewelleryBrands->count() }} </font> Jewellery Brands</div>
                        <!-- Rest of the sorting and search options code -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    @foreach($jewelleryBrands as $brand)
                    <a href="{{ route('brands.show', ['brand' => $brand->id]) }}">    
                    <div class="card">
                          
                                <img class="card-img-top" src="{{ getBrandImageUrl($brand->id) }}" alt="{{ $brand->brand_name }}">
                         
                            <div class="card-body d-flex flex-column">
                                <div class="text-muted" style="color:blue;text-align:center;">{{ $brand->brand_name }}</div>
                                <div class="text-muted">{{ $brand->description }}</div>
                                <!-- Additional brand information can be displayed here -->
                                <div class="d-flex align-items-center pt-5 mt-auto" style="align-content:flex-end">
                                    <a href="{{ route('brands.edit', ['brand' => $brand->id]) }}" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="icon d-none d-md-inline-block ml-3" onclick="event.preventDefault(); deleteBrand({{ $brand->id }});"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function deleteBrand(brandId) {
        if (confirm('Are you sure you want to delete this Jewellery Brand?')) {
            // Assuming you have a named route for the destroy action
            const deleteUrl = "{{ route('brands.destroy', ['brand' => ':brandId']) }}";
            const formattedUrl = deleteUrl.replace(':brandId', brandId);

            const form = document.createElement('form');
            form.method = 'POST';
            form.action = formattedUrl;
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
