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
<h3 style="text-align: center">Add New User</h3>
<br>
{!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}

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
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ old('name') }}">
                                    @error('name')
                                    <span style="color: red;">{{ $message }}</span>
                                    @enderror
                              </div>
                              <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your email address" value="{{ old('email') }}">
                                    @error('email')
                                    <span style="color: red;">{{ $message }}</span>
                                    @enderror
                              </div>
                              
                              <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                                    @error('password')
                                    <span style="color: red;">{{ $message }}</span>
                                    @enderror
                              </div>

                              <div class="form-group">
                                <label class="form-label">Roles</label>
                                <select class="form-control" multiple name="roles[]" value="{{ old('name') }}">
                                    @foreach ($roles as $role)
                                       <option value="{{ $role->id }}" {{ in_array($role->id, old('roles', [])) ? 'selected' : '' }}>
                                            {{ $role->name }}
                                       </option>
                                    @endforeach
                                </select>
                                @error('roles')
                                <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                              
                              <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>


                            </div>
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
    <script src="{{asset('bundles/dataTables.bundle.js')}}"></script>
    <script src="{{asset('js/core.js')}}"></script>
    <script src="{{asset('js/table/datatable.js')}}"></script>
@endsection