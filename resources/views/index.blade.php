@extends('/layout/admin_master') <!-- Specify the parent view to extend -->
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
<div id="page_top" class="section-white ">
    <div class="container-fluid">
        <div class="page-header">
            <div class="left">
                <h1 class="page-title">Dashboard</h1>
                <select class="custom-select">
                    <option>Year</option>
                    <option>Month</option>
                    <option>Week</option>
                </select>
                <div class="input-group xs-hide">
                    <input type="text" class="form-control" placeholder="Search...">
                </div>                        
            </div>
            <div class="right">
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('images/flags/us.svg')}}" alt="">English</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('images/flags/es.svg')}}" alt="">Spanish</a>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('images/flags/jp.svg')}}" alt="">japanese</a>
                            <a class="dropdown-item" href="#"><img class="w20 mr-2" src="{{asset('images/flags/bl.svg')}}" alt="">France</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                            <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Graphics Design</a>                                    
                            <a class="dropdown-item" href="#">Angular Admin</a>
                            <a class="dropdown-item" href="#">PSD to HTML</a>
                            <a class="dropdown-item" href="#">iOs App Development</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Home Development</a>
                            <a class="dropdown-item" href="#">New Blog post</a>
                        </div>
                    </li>
                </ul>
                <div class="notification d-flex">
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="right_chat list-unstyled w250 p-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{asset('images/xs/avatar4.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Donald Gardner</span>
                                                <span class="message">Designer, Blogger</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{asset('images/xs/avatar5.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Wendy Keen</span>
                                                <span class="message">Java Developer</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{asset('images/xs/avatar2.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Matt Rosales</span>
                                                <span class="message">CEO, anchortheme</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="{{asset('images/xs/avatar3.jpg')}}" alt="">
                                            <div class="media-body">
                                                <span class="name">Phillip Smith</span>
                                                <span class="message">Writter, Mag Editor</span>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                        
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <ul class="list-unstyled feeds_widget">
                                <li>
                                    <div class="feeds-left"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">11:05</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">New User <small class="float-right text-muted">10:45</small></h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small class="float-right text-muted">10:50</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </li>
                                <li>
                                    <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title">7 New Orders <small class="float-right text-muted">11:35</small></h4>
                                        <small>You received a new oder from Tina.</small>
                                    </div>
                                </li>                                   
                            </ul>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                        </div>
                    </div>
                    <div class="dropdown d-flex">
                        <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <a class="dropdown-item" href="page-profile.html"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                            <a class="dropdown-item" href="app-setting.html"><i class="dropdown-icon fe fe-settings"></i> Settings</a>
                            <a class="dropdown-item" href="app-email.html"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> Message</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> Need help?</a>
                            <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-white ">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="d-sm-flex justify-content-between mt-5">
                    <div>
                        <h4>Welcome Jason Porter!</h4>
                        <h6 class="mb-0">Recurring Revenue Growth</h6>
                        <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                    </div>
                    <div class="selectgroup w250">
                        <label class="selectgroup-item">
                            <input type="radio" name="intensity" value="low" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">7 Day</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="intensity" value="medium" class="selectgroup-input">
                            <span class="selectgroup-button">15 Day</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="intensity" value="high" class="selectgroup-input">
                            <span class="selectgroup-button">30 Day</span>
                        </label>
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
                       <h6>Customers</h6>
                       <h3 class="pt-3 counter">36,254</h3>
                       <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> Since last month</span>                               
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                       <h6>Revenue</h6>
                       <h3 class="pt-3">$<span class="counter">8,751</span></h3>
                       <span><span class="text-success mr-2"><i class="fa fa-long-arrow-up"></i> 11.38%</span> Since last month</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                       <h6>Growth</h6>
                       <h3 class="pt-3">+<span class="counter">27.27</span>%</h3>
                       <span><span class="text-success mr-2"><i class="fa fa-long-arrow-up"></i> 9.61%</span> Since last month</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="card">
                    <div class="card-body">
                       <h6>Orders</h6>
                       <h3 class="pt-3 counter">3,204</h3>
                       <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-down"></i> 2.27%</span> Since last month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix row-deck">
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
                            <img src="{{asset('images/we-released.svg')}}" alt="..." class="img-fluid mb-4 mt-4" style="max-width: 272px;">
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
        </div>
    </div>
</div>

@endsection

@section('script_files')
<script src="{{asset('bundles/lib.vendor.bundle.js')}}"></script>

<script src="{{asset('bundles/counterup.bundle.js')}}"></script>
<script src="{{asset('bundles/jvectormap1.bundle.js')}}"></script>
<script src="{{asset('bundles/c3.bundle.js')}}"></script>

<script src="{{asset('js/core.js')}}"></script>
<script src="{{asset('js/page/index.js')}}"></script>
@endsection