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

{!! Form::model($blog, ['route' => ['blogs.update', $blog->blog_id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}


<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">                            
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Blog Title</label>
                                <input type="text" class="form-control" name="title" value="{{$blog->title}}">
                                @error('title')
                                  <span style="color: red;">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label class="form-label">Blog Category</label>
                                  <select class="form-control" name="category_id">
                                   @foreach ($categories as $category)
                                   <option value="{{ $category->category_id }}" {{ $category->category_id == $blog->category_id ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                                   @endforeach
                                   </select>
                              </div>
                            </div>
                          </div>
                          
                        <div>
                            <textarea class="summernote" name="content" id="content">
                                {{$blog->content}}
                            </textarea>
                               @error('content')
                                   <span style="color: red;">{{ $message }}</span>
                               @enderror
                
                        </div> 
                        
                        <div class="form-group">
                            <label for="featured_image">Featured Image:{{$blog->featured_image}}</label>
                            <input type="file" class="form-control-file" id="featured_image" name="featured_image">
                        </div>
                        <div class="mb-3">
                            <label for="tags">Tag</label>
                            <select class="form-control js-tags @error('tags') is-invalid @enderror" name="tags[]" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', $selectedTags)) ? 'selected' : '' }}>{{ $tag->title }}</option>
                                @endforeach
                            </select>
                            @error('tags')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- ... existing form code ... -->
                        <div class="form-group">
                            <label class="form-label">Author</label>
                            <select class="form-control" name="author_name">
                     
                                @foreach ($authors as $author)
                                <option value="{{ $author->author_name }}" {{ $author->author_name == $blog->author_name ? 'selected' : '' }}>{{$author->author_name}}</option>
                                
                                @endforeach
                            </select>
                        </div>
                        <!-- ... existing form code ... -->
                              
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{Form::close()}}

@endsection

@section('script_files')
    <script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('bundles/summernote.bundle.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('js/page/summernote.js')}}"></script>
@endsection