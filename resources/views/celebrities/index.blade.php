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
                        <a href="{{ route('celebrities.create') }}" class="btn btn-primary mr-2">New celebrity</a>
                        <div class="page-subtitle ml-0"> Total <font size='3' color='blue'>{{ $celebrities->count() }} </font>Celebrities</div>
                        <!-- Rest of the sorting and search options code -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    @foreach($celebrities as $celebrity)
                    <div class="card">
                        <div class="card-body">
                            <h4 style="color: #e75480" class="card-title">{{ $celebrity->name }}</h4>
                            <div class="celebrity-info">
                                <div class="d-flex align-items-center">
                                    <div class="mr-3">
                                        <i class="fa fa-globe"></i> {{ $celebrity->nationality }}
                                    </div>
                                    <div class="mr-3">
                                        <i class="fa fa-calendar"></i> {{ $celebrity->birthdate }}
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <img class="card-img-top celebrity-thumbnail" src="{{ getCelebrityImageUrl($celebrity->celebrity_id) }}" alt="{{ $celebrity->name }}">
                        </a>
                        <div class="card-body">
                            <div class="text-muted">{{ substr($celebrity->description, 0, 150) }}...</div>
                        </div>
                        <div class="card-footer text-muted">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="social-media-links">
                                    <!-- Social media links -->
                                    @if($celebrity->instagram)
                                    <a href="https://instagram.com/{{ $celebrity->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>
                                    @endif
                                    @if($celebrity->twitter)
                                    <a href="https://twitter.com/{{ $celebrity->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    @endif
                                    @if($celebrity->facebook)
                                    <a href="https://facebook.com/{{ $celebrity->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    @endif
                                    @if($celebrity->youtube)
                                    <a href="https://youtube.com/{{ $celebrity->youtube }}" target="_blank"><i class="fa fa-youtube"></i></a>
                                    @endif
                                    @if($celebrity->tiktok)
                                    <a href="https://tiktok.com/{{ $celebrity->tiktok }}" target="_blank"><i class="fa fa-tiktok"></i></a>
                                    @endif
                                    @if($celebrity->snapchat)
                                    <a href="https://snapchat.com/add/{{ $celebrity->snapchat }}" target="_blank"><i class="fa fa-snapchat"></i></a>
                                    @endif
                                    @if($celebrity->website)
                                    <a href="{{ $celebrity->website }}" target="_blank"><i class="fa fa-globe"></i></a>
                                    @endif
                                </div>
                                <div class="social-media-buttons">
                                    <!-- Edit and Delete buttons -->
                                    <a href="{{ route('celebrities.edit', $celebrity->celebrity_id) }}" class="btn btn-sm btn-primary mr-2"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="{{ route('celebrities.destroy', $celebrity->celebrity_id) }}" class="btn btn-sm btn-danger" onclick="event.preventDefault(); deleteCelebrity({{ $celebrity->celebrity_id }});"><i class="fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                            <small class="d-block text-muted">{{ $celebrity->created_at->diffForHumans() }}</small><hr>
                            <div class="mr-3">
                                {{ $celebrity->celebrity_type }}
                             </div>
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
    function deleteCelebrity(celebrityId) {
        if (confirm('Are you sure you want to delete this celebrity?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ route("celebrities.destroy", "") }}/' + celebrityId;
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