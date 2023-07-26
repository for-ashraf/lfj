@extends('/layout/admin_master') <!-- Specify the parent view to extend -->



@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">                            
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Blog Title</label>
                            <input type="text" class="form-control" name="example-text-input" placeholder="Enter Blog Title...">
                        </div>
                        <div class="summernote">
                            Hello there,
                            <br/>
                            <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                            <p>Please try <b>paste some texts</b> here</p>
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
@endsection