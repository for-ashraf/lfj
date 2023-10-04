@extends('/layout/admin_master') <!-- Specify the parent view to extend -->
@section('title', 'Latest Fashion Jewellery')
@section('css_files')


<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Plugins css -->
<link rel="stylesheet" href="{{asset('plugins/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css')}}">
<style>
    td.details-control {
    background: url("{{asset('images/details_open.png')}}") no-repeat center center;
    cursor: pointer;
}
    tr.shown td.details-control {
        background: url("{{asset('images/details_close.png')}}") no-repeat center center;
    }
</style>

<!-- Core css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('css/theme1.css')}}" id="theme_stylesheet"/>
@endsection


@section('content')
<h3 style="text-align: center">User Details</h3>
<br>
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <p>{{ $user->name }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <p>{{ $user->email }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Roles</label>
                                    <ul>
                                        @foreach ($user->roles as $role)
                                            <li>{{ $role->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


@section('script_files')
    <script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('bundles/dataTables.bundle.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('js/table/datatable.js')}}"></script>
@endsection