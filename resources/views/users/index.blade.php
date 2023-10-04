@php
    // Assuming you have a $user variable available with user data
    $user = Auth::user(); // You can replace this with your method of retrieving the user
@endphp
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
<div class="dropdown me-3">
    <a href="javascript:void(0)" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name }}
    </a>
  
        <li><a class="dropdown-item" href="{{ route('users.show', ['user' => auth()->user()->id]) }}">Profile</a></li>
        <li><a href="{{ route('password.request') }}">Reset Password</a></li>
        <!-- Add other menu items here -->
        <li><hr class="dropdown-divider"></li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
   
</div>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif
<h3 style="text-align: center">All Users</h3>
<br>
<a href="{{route('users.create')}}" class="btn btn-dark mb-2">Add User</a>
<div class="section-body  py-4">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="table-responsive mb-4">
                            <table class="table table-hover js-basic-example dataTable table_custom spacing5">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Roles</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                        <td>{{$loop->index + 1}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                        @foreach($user->roles as $role)
                                            {{ $role->name}} {{!$loop->last ? ', ':''}}
                                        @endforeach
                                        </td>
                                        <td>
                                            <a href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-dark">View</a>
                                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-dark">Edit</a>
                                            <form action="{{route('users.destroy',$user->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            </td>
                                    </tr>
                                    @endforeach
                                        </tbody>
                                    </table>
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
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>

    <script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('bundles/dataTables.bundle.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('js/table/datatable.js')}}"></script>
@endsection