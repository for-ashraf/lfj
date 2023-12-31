@extends('../layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Add New Celebrity')

@section('css_files')
    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote.css') }}" />
    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/theme1.css') }}" id="theme_stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}" />
@endsection

@section('content')
    {!! Form::open(['route' => 'celebrities.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
    <div class="section-body mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Celebrity Name</label>
                                        <input type="text" class="custom-select" name="name"
                                            placeholder="Enter Celebrity Name...">
                                        @error('name')
                                            <span style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <select class="custom-select" name="nationality">
                                            <option value="">Select Nationality</option>
                                            @foreach (getCountriesList() as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                        @error('nationality')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Description</label>
                                <textarea class="summernote" name="description" id="description"></textarea>
                                @error('description')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Birthdate</label>
                                <input type="date" class="form-control" name="birthdate">
                                @error('birthdate')
                                    <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-instagram"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="instagram"
                                                placeholder="Enter Instagram URL...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="form-label">Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="twitter"
                                                placeholder="Enter Twitter URL...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-facebook"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="facebook"
                                                placeholder="Enter Facebook URL...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">YouTube</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-youtube"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="youtube"
                                                placeholder="Enter YouTube URL...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="form-label">TikTok</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-tiktok"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="tiktok"
                                                placeholder="Enter TikTok URL...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label class="form-label">Snapchat</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-snapchat"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="snapchat"
                                                placeholder="Enter Snapchat URL...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Website</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-globe"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="website"
                                                placeholder="Enter Website URL...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Celebrity Type</label>
                                        <select class="custom-select" name="celebrity_type">
                                            <option value="">Select Type</option>
                                            <option value="Hollywood Actresses">Hollywood Actresses</option>
                                            <option value="Bollywood Actresses">Bollywood Actresses</option>
                                            <option value="Influencers and Fashion Icons">Influencers and Fashion Icons
                                            </option>
                                            <option value="Sports Personalities">Sports Personalities</option>
                                            <option value="Musicians and Singers">Musicians and Singers</option>
                                            <option value="Social Media Stars">Social Media Stars</option>
                                            <option value="TV Show Hosts">TV Show Hosts</option>
                                            <option value="Models">Models</option>
                                            <option value="Politicians">Politicians</option>
                                            <option value="Comedians">Comedians</option>
                                            <option value="Authors and Writers">Authors and Writers</option>
                                            <option value="Business Leaders">Business Leaders</option>
                                            <option value="Scientists and Innovators">Scientists and Innovators</option>
                                            <option value="Philanthropists">Philanthropists</option>
                                            <option value="Artists and Painters">Artists and Painters</option>
                                            <option value="Dancers">Dancers</option>
                                        </select>
                                        @error('celeb_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary">Add Celebrity</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}

    @endsection

    @section('script_files')
        <script src="{{ asset('bundles/lib.vendor.bundle.js') }}"></script>
        <script src="{{ asset('bundles/summernote.bundle.js') }}"></script>
        <script src="{{ asset('js/core.js') }}"></script>
        <script src="{{ asset('js/page/summernote.js') }}"></script>
    @endsection
