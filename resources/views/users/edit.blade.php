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
<h3 style="text-align: center">Edit User</h3>
<br>

{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}


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
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ $user->name }}">
                                    @error('name')
                                    <span style="color: red;">{{ $message }}</span>
                                    @enderror
                              </div>
                              <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your email address" value="{{ $user->email }}">
                                    @error('email')
                                    <span style="color: red;">{{ $message }}</span>
                                    @enderror
                              </div>
                              
                              <div class="form-group">
                                    <label class="form-label">Password(Leave blank if not required to change</label>
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                    <span style="color: red;">{{ $message }}</span>
                                    @enderror
                              </div>

                              <div class="form-group">
                                <label class="form-label">Roles</label>
                                <select class="form-control" multiple name="roles[]" value="{{ old('name') }}">
                                    @foreach ($roles as $role)
                                       <option value="{{ $role->id }}" @if(in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif> {{$role->name}}
                                       </option>
                                    @endforeach
                                </select>
                                @error('roles')
                                <span style="color: red;">{{ $message }}</span>
                                @enderror
                            </div>
                              
                              <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
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