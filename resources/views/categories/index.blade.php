@extends('../layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')
@section('css_files')
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('css/theme1.css')}}" id="theme_stylesheet"/>
@endsection
@section('content')
<
<div class="section-body mt-3">
    <div class="container-fluid">
        {{-- <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="create" class="btn btn-primary mr-2">New Category</a>
                        <div class="page-subtitle ml-0"> Total {{ $categories->count() }} Products</div>
                        <div class="page-options d-flex">
                            <select class="form-control custom-select w-auto">
                                <option value="asc">- Select -</option>
                                <option value="asc">Newest</option>
                                <option value="desc">Oldest</option>
                            </select>
                            <div class="input-icon ml-2">
                                <span class="input-icon-addon">
                                    <i class="fe fe-search"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="Search Post">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary mr-2">New Category</a>
                        <div class="page-subtitle ml-0"> Total <font color='blue'>{{ $categories->count() }} </font>Categories</div>
                        <!-- Rest of the sorting and search options code -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-columns">
                    @foreach($categories as $category)
                    
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{ getCategoryImageUrl($category->category_id) }}" style="max-height: 300px;">
                        </a>
                        <!-- Add category details and layout here -->
                        <div class="card-body d-flex flex-column">
                            <h5><a href="#">{{ $category->category_name }}</a></h5>
                            <div class="text-muted">{{ $category->category_description }}</div>
                            <!-- Add more category details if needed -->
                           <hr>
                            <div class="row"> 
                                <div class="text-muted"><small class="d-block text-muted">Published:{{ $category->created_at->diffForHumans() }}</small>
                                </div>
                            <div class="ml-auto text-muted">
                                <a href="{{ route('categories.edit', ['category' => $category->category_id]) }}" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-edit"></i></a>

                                <a href="{{$category->category_id}}" class="icon d-none d-md-inline-block ml-3" onclick="event.preventDefault(); deleteCategory({{ $category->category_id }});">
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
    function deleteCategory(categoryId) {
        if (confirm('Are you sure you want to delete this Category?')) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ url("categories") }}/' + categoryId;
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