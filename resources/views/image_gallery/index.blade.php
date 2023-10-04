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
                        <a href="{{ route('image_gallery.create') }}" class="btn btn-primary mr-2">New Image</a>
                        <div class="page-subtitle ml-0"> Total <font size='3' color='blue'>{{ $images->count() }} </font>Images</div>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    @foreach($images as $image)
                    <div class="card">
                        <div class="card-body">
                            <h4 style="color: #e75480" class="card-title">{{ $image->title }}</h4>
                        </div>
                        <a href="#">
                            <img class="card-img-top" src="{{ getImageGalleryUrl($image->id) }}" alt="{{ $image->title }}">
                        </a>
                       
                        <div class="card-footer text-muted">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="ml-auto text-muted">
                                    <!-- Edit and Delete buttons -->
                                    <a href="{{ route('image_gallery.edit', $image->id) }}" class="btn btn-sm btn-primary mr-2"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('image_gallery.destroy', $image->id) }}" class="btn btn-sm btn-danger" onclick="event.preventDefault(); deleteImage({{ $image->id }});"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                            <small class="d-block text-muted">{{ $image->created_at->diffForHumans() }}</small>
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
    function deleteImage(imageId) {
        if (confirm('Are you sure you want to delete this Image?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ route("image_gallery.destroy", "") }}/' + imageId;
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