@extends('../layout/admin_master')
@section('title', 'Latest Fashion Jewellery')
@section('css_files')
<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Plugins css -->
<link rel="stylesheet" href="{{asset('plugins/charts-c3/c3.min.css')}}"/>
<link rel="stylesheet" href="{{asset('plugins/jvectormap/jvectormap-2.0.3.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('css/theme1.css')}}" id="theme_stylesheet"/>
@endsection
@section('content')
<div class="section-white ">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="d-sm-flex justify-content-between mt-5">
                    <div>
                        <h4>Welcome {{ auth()->user()->name }}!</h4>
                        <h6 class="mb-0">Recurring Revenue Growth</h6>
                        <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                    </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-white  pl-0 pr-0">
    <div id="chart-area-spline" style="height: 25rem;"></div>
</div>
<div class="section-body py-4 mt--75">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                       <h6>Blogs</h6>
                       <h3 class="pt-3 counter">{{$totalBlogs}}</h3>
                      {{--  <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> Since last month</span>                                --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                       <h6>Affiliate Products</h6>
                       <h3 class="pt-3 counter">{{$totalProd}}</h3>
                      {{--  <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> Since last month</span>                                --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                
                    <div class="card">
                        <div class="card-body">
                           <h6>Events</h6>
                           <h3 class="pt-3 counter">{{$totalEvents}}</h3>
                          {{--  <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> Since last month</span>                                --}}
                        </div>
                    </div>
                </div>
     
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="card">
                        <div class="card-body">
                           <h6>Celebrities</h6>
                           <h3 class="pt-3 counter">{{$totalCelebrities}}</h3>
                          {{--  <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> Since last month</span>                                --}}
                        </div>
                    </div>
                </div>
        </div>
       {{--  <div class="row clearfix row-deck">
            <div class="col-lg-4 col-md-12">
                <div class="card visitors-map">
                    <div class="card-header">
                        <h3 class="card-title">Revenue By Location</h3>
                        <div class="card-options">
                            <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            <div class="item-action dropdown ml-2">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="world-map-markers" style="height:300px;"></div>
                        <div class="form-group">
                            <label class="d-block">San Francisco(USA) <span class="float-right">77%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-lightgray" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">London(UK) <span class="float-right">50%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-lightgray" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Dubai(UAE) <span class="float-right">23%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-lightgray" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">New Delhi(IND) <span class="float-right">77%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-lightgray" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Sydney(AUS) <span class="float-right">50%</span></label>
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-lightgray" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Projects</h2>
                        <div class="card-options">
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            <div class="item-action dropdown ml-2">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table card-table mb-3">
                            <tbody>
                                <tr>
                                    <td>Admin Template</td>
                                    <td class="text-right">
                                    <span class="badge badge-default">65%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Landing Page</td>
                                    <td class="text-right">
                                    <span class="badge badge-success">Finished</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Backend UI</td>
                                    <td class="text-right">
                                    <span class="badge badge-danger">Rejected</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Personal Blog</td>
                                    <td class="text-right">
                                    <span class="badge badge-default">40%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-mail Templates</td>
                                    <td class="text-right">
                                    <span class="badge badge-default">13%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Corporate Website</td>
                                    <td class="text-right">
                                    <span class="badge badge-warning">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="chart-bar-stacked" style="height: 14rem"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Transaction History</h2>
                        <div class="card-options">
                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            <div class="item-action dropdown ml-2">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="chart-donut" style="height: 15rem"></div>
                    </div>
                    <table class="table card-table">
                        <tbody>
                            <tr>
                                <td class="width45"><span class="avatar avatar-green"><i class="fa fa-check"></i></span></td>
                                <td>
                                    <p class="mb-0">Payment from #1598</p>
                                    <span class="text-muted font-13">Feb 21, 2019, 3:30pm</span>
                                </td>
                                <td class="text-right">
                                    <p class="mb-0">$300</p>
                                    <span class="text-success font-13">Done</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="width45"><span class="avatar avatar-green"><i class="fa fa-truck"></i></span></td>
                                <td>
                                    <p class="mb-0">Process delivery to #85236</p>
                                    <span class="text-muted font-13">March 14, 2019, 2:30pm</span>
                                </td>
                                <td class="text-right">
                                    <p class="mb-0">$300</p>
                                    <span class="text-success font-13">For pickup</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="width45"><span class="avatar avatar-orange"><i class="fa fa-angle-left"></i></span></td>
                                <td>
                                    <p class="mb-0">Process refund #4568</p>
                                    <span class="text-muted font-13">March 18, 2019, 6:30pm</span>
                                </td>
                                <td class="text-right">
                                    <p class="mb-0">$300</p>
                                    <span class="text-success font-13">Done</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="width45"><span class="avatar avatar-red"><i class="fa fa-cc-visa"></i></span></td>
                                <td>
                                    <p class="mb-0">Payment failed from #32658</p>
                                    <span class="text-muted font-13">April 27, 2019, 3:48pm</span>
                                </td>
                                <td class="text-right">
                                    <p class="mb-0">$300</p>
                                    <span class="text-danger font-13">Declined</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row clearfix row-deck">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body text-center d-flex align-items-center justify-content-center">
                        <div style="max-width: 340px;">
                            <img src="../assets/images/we-released.svg" alt="..." class="img-fluid mb-4 mt-4" style="max-width: 272px;">
                            <h5 class="mb-2">We released Bootstrap 4x versions of our theme.</h5>
                            <p class="text-muted">This is a true story and totally not made up. This is going to be better in the long run but for now this is the way it is.</p>
                            <a href="#!" class="btn btn-primary">Try it for free</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recent Earnings</h3>
                        <div class="card-options">
                            <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                            <div class="item-action dropdown ml-2">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-sm-flex mb-3">
                            <div class="top_counter mb-2 mr-4">
                                <div class="icon bg-green"><i class="fa fa-area-chart"></i> </div>
                                <div class="content">
                                    <span>Gross Income</span>
                                    <h5 class="number mb-0">$2,02,150.52</h5>
                                </div>
                            </div>
                            <div class="top_counter mb-2">
                                <div class="icon bg-red"><i class="fa fa-area-chart"></i> </div>
                                <div class="content">
                                    <span>Tax Withheld</span>
                                    <h5 class="number mb-0">$92,150.00</h5>
                                </div>
                            </div>
                            <div class="ml-auto mb-2">
                                <div class="sale_Monthly">3,1,5,4,2,3,1,5,4,7,8,6,5,4,4,2</div>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th class="text-right">Sales Count</th>
                                        <th class="text-right">Gross Earnings</th>
                                        <th class="text-right">Tax Withheld</th>
                                        <th class="text-right">Net Earnings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>03/05/2018</td>
                                        <td class="tx-medium text-right">1,050</td>
                                        <td class="text-right text-cyan">+ $32,254.00</td>
                                        <td class="text-right text-pink">- $3,023.09</td>
                                        <td class="tx-medium text-right">$28,670.65 <span class="text-success ml-1"><i class="fa fa-caret-up"></i> 8.5%</span></td>
                                    </tr>
                                    <tr>
                                        <td>03/04/2018</td>
                                        <td class="tx-medium text-right">980</td>
                                        <td class="text-right text-cyan">+ $30,005.10</td>
                                        <td class="text-right text-pink">- $2,780.00</td>
                                        <td class="tx-medium text-right">$26,761.40  <span class="text-danger ml-1"><i class="fa fa-caret-down"></i> 1.8%</span></td>
                                    </tr>
                                    <tr>
                                        <td>03/04/2018</td>
                                        <td class="tx-medium text-right">980</td>
                                        <td class="text-right text-cyan">+ $30,654.11</td>
                                        <td class="text-right text-pink">- $2,780.08</td>
                                        <td class="tx-medium text-right">$26,930.40  <span class="text-danger ml-1"><i class="fa fa-caret-down"></i> 0.5%</span></td>
                                    </tr>
                                    <tr>
                                        <td>03/04/2018</td>
                                        <td class="tx-medium text-right">980</td>
                                        <td class="text-right text-cyan">+ $30,065.10</td>
                                        <td class="text-right text-pink">- $2,486.00</td>
                                        <td class="tx-medium text-right">$26,930.40  <span class="text-danger ml-1"><i class="fa fa-caret-down"></i> 0.8%</span></td>
                                    </tr>
                                    <tr>
                                        <td>03/04/2018</td>
                                        <td class="tx-medium text-right">980</td>
                                        <td class="text-right text-cyan">+ $30,500.25</td>
                                        <td class="text-right text-pink">- $2,137.00</td>
                                        <td class="tx-medium text-right">$26,842.40  <span class="text-danger ml-1"><i class="fa fa-caret-down"></i> 2.4%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>                    
        </div> --}}
        <a href="{{ route('users.create') }}" class="btn btn-dark mb-2">Add User</a>
        <div class="section-body py-4">
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
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach($user->roles as $role)
                                                    {{ $role->name }}{{ !$loop->last ? ', ' : '' }}
                                                @endforeach
                                            </td>
                                            <td>
                                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-dark">View</a>
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-dark">Edit</a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
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
@endsection

@section('script_files')


<script src="{{ asset('bundles/lib.vendor.bundle.js')}}"></script>

<script src="{{ asset('bundles/counterup.bundle.js')}}"></script>
<script src="{{ asset('bundles/jvectormap1.bundle.js')}}"></script>
<script src="{{ asset('bundles/c3.bundle.js')}}"></script>

<script src="{{ asset('js/core.js')}}"></script>
<script src="{{ asset('js/page/index.js')}}"></script>

@endsection