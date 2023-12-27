@extends('../layout/admin_master')

@section('title', 'Jewellery Product Details')

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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-4 text-center">
                                <img src="{{ getBrandImageUrl($jewelleryBrand->id) }}" alt="{{ $jewelleryBrand->name }}" class="img-fluid mx-auto d-block">
                            </div>

                            <div class="mt-4 text-center">
                                <h3 style="color: blue;">{{ $jewelleryBrand->brand_name }}</h3>
                                <p>{{ $jewelleryBrand->description }}</p>
    
                                <!-- You can include additional sections for product details or specifications -->
                                <!-- For example, you might have attributes like material, weight, etc. -->
                                
                                <p class="text-right">{{ $jewelleryBrand->website_url }}</p>
                                <!-- Add more details as needed -->
                            </div>

                            <!-- Add any other relevant content -->

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script_files')
    <script src="{{ asset('bundles/lib.vendor.bundle.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
@endsection