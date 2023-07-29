@extends('/layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Add Blog')
@section('content')
{{Form::Open(array('url'=>'submitBlogForm'))}}

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">                            
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Blog Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Blog Title...">
                            @error('title')
                              <span style="color: red;">{{ $message }}</span>
                            @enderror

                        </div>
                        <div>
                        <textarea class="summernote" name="content" id="content">
                        </textarea>
                           @error('content')
                               <span style="color: red;">{{ $message }}</span>
                           @enderror
            
                    </div>                                
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