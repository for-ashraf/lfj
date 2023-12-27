@extends('../layout/landing_master')

<style>
    /* Add your styles here */

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        background-color: #FCE5CD;
        text-align: center;
        color: #FF5733;
        padding: 20px;
        margin: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #FFC300;
    }

    .card-text {
        font-size: 1rem;
        color: #FF5733;
    }

    .card-img {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    .container {
        padding: 20px;
    }

    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 400px;
    }
</style>

@section('content')
<div class="container">
    <div class="row">
        @if(isset($brand))
            <!-- Display a single brand card -->
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-image">
                        <img src="{{ asset('/uploads/brands/' . $brand->brand_image) }}" alt="{{ $brand->brand_name }}" class="card-img">
                        <div class="card-overlay">
                            <h5 class="card-title">{{ $brand->brand_name }}</h5>
                            <p class="card-text">{{ $brand->description }}</p>
                            <div class="brand-details-btn">
                                <a href="{{ $brand->website_url }}" target="_blank">Visit Website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- Handle the case when $brand is not set -->
            <div class="col-md-12">
                <p>No brand found.</p>
            </div>
        @endif
    </div>
</div>
@endsection
