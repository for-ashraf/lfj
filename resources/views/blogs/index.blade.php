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
                                <a href="{{ route('blogs.create') }}" class="btn btn-primary mr-2">New Blog</a>
                                <div class="page-subtitle ml-0"> Total <font color='blue'> {{ $blogs->count() }} </font> Blogs</div>
                                <!-- Rest of the sorting and search options code -->
                            </div>
                        </div>
                    </div>
                </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    @foreach($blogs as $blog)
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{getBlogImageUrl($blog->blog_id) }}" >                       
                         </a>
                        <div class="card-body d-flex flex-column">
                            <h5><a href="#">{{ $blog->title }}</a></h5>
                            <div class="text-muted">{{ substr($blog->content,0,100)}}...</div>
                            <div class="d-flex align-items-center pt-5 mt-auto">
                                <a href="/authors/{{$blog->author_id}}"><img class="avatar avatar-md mr-3" src="{{asset('images/xs/avatar3.jpg')}}" alt="{{$blog->author_name}}"/></a>
                                <div>
                                    
                                    <small class="d-block text-muted">{{ $blog->created_at->diffForHumans() }}</small>
                                </div>
                                <div class="ml-auto text-muted">
                                    <a href="{{ route('blogs.edit', ['blog' => $blog->blog_id]) }}" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-edit"></i></a>
                                    <a href="{{$blog->blog_id}}" class="icon d-none d-md-inline-block ml-3" onclick="event.preventDefault(); deleteBlog({{ $blog->blog_id }});">
                                        <i class="fa fa-trash"></i>
                                     
                                </div>
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
    function deleteBlog(blogId) {
        if (confirm('Are you sure you want to delete this blog?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ url("admin/blogs") }}/' + blogId;
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
    <script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
@endsection