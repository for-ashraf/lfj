<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
<meta name="author" content="PuffinTheme the theme designer">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>LFJ-@yield('title')</title>

@yield('css_files')


</head>

<body class="font-opensans">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="main_content">    

    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="index.html"><i class="fa fa-dashboard brand-logo"></i></a>
                <div class="dropdown">
                    <a href="page-search.html" class="nav-link icon"><i class="fa fa-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
                    <a href="javascript:void(0)" class="nav-link icon create_page xs-hide"><i class="fa fa-plus" data-toggle="tooltip" data-placement="right" title="Create New"></i></a>
                    <a href="app-email.html"  class="nav-link icon app_inbox"><i class="fa fa-envelope" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
                    <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fa fa-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
                    <a href="app-social.html"  class="nav-link icon xs-hide"><i class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon xs-hide"><i class="fa fa-bullhorn" data-toggle="tooltip" data-placement="right" title="Projects"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon xs-hide"><i class="fa fa-cloud-upload" data-toggle="tooltip" data-placement="right" title="Cloud Upload"></i></a>
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fa fa-paint-brush" data-toggle="tooltip" data-placement="right" title="Themes"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin" data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="{{asset('/images/user.png')}}" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                </div>            
            </div>
        </div>
    </div>

    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-opensans" checked="">
                            <span class="custom-control-label">Open Sans Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                    <div class="custom-controls-stacked arrow_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="marrow" value="arrow-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                    <div class="custom-controls-stacked list_option">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-a" checked="">
                            <span class="custom-control-label">A</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                            <span class="custom-control-label">B</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                            <span class="custom-control-label">C</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group">
                    <label class="d-block">Storage <span class="float-right">77%</span></label>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="{{asset('/images/xs/avatar1.jpg')}}" alt="Avatar"></li>
                                <li><img src="{{asset('/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                <li><img src="{{asset('/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                <li><img src="{{asset('/images/xs/avatar4.jpg')}}" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="theme_div">
        <div class="card">
            <div class="card-body">
                <ul class="list-group list-unstyled">
                    <li class="list-group-item mb-2">
                        <p>Default Theme</p>
                        <a href="light/index.html"><img src="{{asset('/images/themes/default.png')}}" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Night Mode Theme</p>
                        <a href="dark/index.html"><img src="{{asset('/images/themes/dark.png')}}" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Horizontal Version</p>
                        <a href="horizontal/index.html"><img src="{{asset('/images/themes/horizontal.png')}}" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>RTL Version</p>
                        <a href="rtl/index.html"><img src="{{asset('/images/themes/rtl.png')}}" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Theme two colors</p>
                        <a href="theme1/index.html"><img src="{{asset('/images/themes/theme1.png')}}" alt="" class="img-fluid" /></a>
                    </li>
                    <li class="list-group-item mb-2">
                        <p>Theme2 with Crypto Dashboard</p>
                        <a href="theme2/index.html"><img src="{{asset('/images/themes/theme2.png')}}" alt="" class="img-fluid" /></a>
                    </li>
                </ul>
            </div>
        </div>        
    </div>

    <div class="user_div">
        <h5 class="brand-name mb-4">Crush On<a href="javascript:void(0)" class="user_btn"><i class="icon-logout"></i></a></h5>
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img class="avatar avatar-xl mr-3" src="{{asset('/images/sm/avatar1.jpg')}}" alt="avatar">
                    <div class="media-body">
                        <h5 class="m-0">Sara Hopkins</h5>
                        <p class="text-muted mb-0">Webdeveloper</p>
                        <ul class="social-links list-inline mb-0 mt-2">
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip" data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Statistics</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>                                
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <div class="row">
                        <div class="col-6 pb-3">
                            <label class="mb-0">Balance</label>
                            <h4 class="font-30 font-weight-bold">$545</h4>
                        </div>
                        <div class="col-6 pb-3">
                            <label class="mb-0">Growth</label>
                            <h4 class="font-30 font-weight-bold">27%</h4>
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <label class="d-block">Total Income<span class="float-right">77%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Friends</h3>
                <div class="card-options">
                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>                                
                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">                
                <ul class="right_chat list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="{{asset('/images/xs/avatar4.jpg')}}" alt="">
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
                                <img class="media-object " src="{{asset('/images/xs/avatar5.jpg')}}" alt="">
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
                                <img class="media-object " src="{{asset('/images/xs/avatar2.jpg')}}" alt="">
                                <div class="media-body">
                                    <span class="name">Matt Rosales</span>
                                    <span class="message">CEO, anchortheme</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>                            
                    </li>                      
                </ul>
            </div>
        </div>
        <div class="card b-none">
            <ul class="list-group">
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-blue"><i class="fa fa-credit-card"></i> </div>
                    <div class="ml-3">
                        <div>+$29 New sale</div>
                        <a href="javascript:void(0)">Admin Template</a>
                        <div class="text-muted font-12">5 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-pink"><i class="fa fa-upload"></i> </div>
                    <div class="ml-3">
                        <div>Project Update</div>
                        <a href="javascript:void(0)">New HTML page</a>
                        <div class="text-muted font-12">10 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-teal"><i class="fa fa-file-word-o"></i> </div>
                    <div class="ml-3">
                        <div>You edited the file</div>
                        <a href="javascript:void(0)">reposrt.doc</a>
                        <div class="text-muted font-12">11 min ago</div>
                    </div>
                </li>
                <li class="list-group-item d-flex">
                    <div class="box-icon sm rounded bg-cyan"><i class="fa fa-user"></i> </div>
                    <div class="ml-3">
                        <div>New user</div>
                        <a href="javascript:void(0)">Puffin web - view</a>
                        <div class="text-muted font-12">17 min ago</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="left-sidebar" class="sidebar ">
        <h5 class="brand-name">Crush On <a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Directories</li>
                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="icon-home"></i><span>Dashboard</span></a></li>                        
                <li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                <li><a href="app-chat.html"><i class="icon-speech"></i><span>Chat</span></a></li>
                <li><a href="app-contact.html"><i class="icon-notebook"></i><span>Contact</span></a></li>
                <li class="{{ request()->is('blogs') ? 'active' : '' }}"><a href="blogs"><i class="icon-globe"></i><span>Blog</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgot-password.html">Forgot password</a></li>
                        <li><a href="404.html">404 error</a></li>
                        <li><a href="500.html">500 error</a></li>   
                    </ul>
                </li>
                <li class="g_heading">Pages</li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-tag"></i><span>Icons</span></a>
                    <ul>
                        <li><a href="icons-feather.html">Feather Icons</a></li>
                        <li><a href="icons-line.html">Line Icons</a></li>
                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                        <li><a href="icons-flags.html">Flags Icons</a></li>
                        <li><a href="icons-payments.html">Payments Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-bar-chart"></i><span>Charts</span></a>
                    <ul>
                        <li><a href="charts-apex.html">Charts Apex</a></li>
                        <li><a href="charts-e.html">EChart</a></li>
                        <li><a href="charts-c3.html">C3 Chart</a></li>
                        <li><a href="charts-knob.html">JQuery Knob</a></li>
                        <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-layers"></i><span>Forms</span></a>
                    <ul>
                        <li><a href="form-elements.html">Basic Elements</a></li>
                        <li><a href="form-advanced.html">Advanced Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-tag"></i><span>Tables</span></a>
                    <ul>
                        <li><a href="table-normal.html">Bootstrap Table</a></li>
                        <li><a href="table-datatable.html">Jquery Datatable</a></li>
                    </ul>
                </li>                
                <li><a href="widgets.html"><i class="icon-puzzle"></i><span>Widgets</span></a></li>
                <li class="g_heading">Extra</li>
                <li><a href="page-maps.html"><i class="icon-map"></i><span>Maps</span></a></li>
                <li><a href="page-gallery.html"><i class="icon-picture"></i><span>Gallery</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fe fe-file"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="page-empty.html">Empty page</a></li>
                        <li><a href="page-profile.html">Profile</a></li>
                        <li><a href="page-search.html">Search Results</a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>                                
                        <li><a href="page-invoices.html">Invoices</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>
                        <li><a href="page-carousel.html">Carousel</a></li>                        
                    </ul>
                </li>                
            </ul>
        </nav>        
    </div>

    <div class="page">
        
          
      @yield('content')
      
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2019 <a href="javascript:void(0)">PuffinTheme</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
@yield('script_files')
</body>
</html>