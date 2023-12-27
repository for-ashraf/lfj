<!doctype html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z8WPXRT9C1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z8WPXRT9C1');
</script>
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
                <a class="header-brand" href="index.html"><i class="fa fa-diamond brand-logo"></i></a>
                <div class="dropdown">
                    <a href="page-search.html" class="nav-link icon"><i class="fa fa-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
                    {{-- <a href="javascript:void(0)" class="nav-link icon create_page xs-hide"><i class="fa fa-plus" data-toggle="tooltip" data-placement="right" title="Create New"></i></a>
                    <a href="app-email.html"  class="nav-link icon app_inbox"><i class="fa fa-envelope" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
                    <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fa fa-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
                    <a href="app-social.html"  class="nav-link icon xs-hide"><i class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon xs-hide"><i class="fa fa-bullhorn" data-toggle="tooltip" data-placement="right" title="Projects"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon xs-hide"><i class="fa fa-cloud-upload" data-toggle="tooltip" data-placement="right" title="Cloud Upload"></i></a> --}}
                </div>
            </div>
            <div class="hright">
                <div class="dropdown">
                    {{-- <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fa fa-paint-brush" data-toggle="tooltip" data-placement="right" title="Themes"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin" data-toggle="tooltip" data-placement="right" title="Settings"></i></a> --}}
                    <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar" src="{{asset('/images/user.png')}}" alt="" data-toggle="tooltip" data-placement="right" title="User Menu"/></a>
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa  fa-align-left"></i></a>
                </div>            
            </div>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar">
        <a href="\"><h5 class="brand-name">Latest Fashion Jewellery<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5></a>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul class="metismenu">
                <li class="g_heading">Directories</li>
<li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('backend.dashboard') }}"><i class="icon-home"></i><span>Dashboard</span></a></li>                        
<li class="{{ request()->is('admin/categories') ? 'active' : '' }}"><a href="{{ route('categories.index') }}"><i class="fa fa-bars"></i><span>Categories</span></a></li>
<li class="{{ request()->is('admin/products') ? 'active' : '' }}"><a href="{{ route('products.index') }}"><i class="fa fa-shopping-bag"></i><span>Products</span></a></li>
<li class="{{ request()->is('admin/blogs') ? 'active' : '' }}"><a href="{{ route('blogs.index') }}"><i class="fa fa-qrcode"></i><span>Blogs</span></a></li>
<li class="{{ request()->is('admin/tags') ? 'active' : '' }}"><a href="{{ route('tags.index') }}"><i class="fa fa-qrcode"></i><span>Tags</span></a></li>
<li class="{{ request()->is('admin/events') ? 'active' : '' }}"><a href="{{ route('events.index') }}"><i class="fa fa-globe"></i><span>Events</span></a></li>
<li class="{{ request()->is('admin/celebrities') ? 'active' : '' }}"><a href="{{ route('celebrities.index') }}"><i class="fa fa-star"></i><span>Celebrities</span></a></li>
<li class="{{ request()->is('admin/image_gallery') ? 'active' : '' }}"><a href="{{ route('image_gallery.index') }}"><i class="fa fa-picture-o"></i><span>Image Gallery</span></a></li>
<li class="{{ request()->is('admin/users') ? 'active' : '' }}"><a href="{{ route('users.index') }}"><i class="fa fa-lock"></i><span>Users</span></a></li>
                {{-- <li >
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-lock"></i><span>Users</span></a>
                    <ul>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="forgot-password.html">Forgot password</a></li>
                        <li><a href="404.html">404 error</a></li>
                        <li><a href="500.html">500 error</a></li>   
                    </ul>
                </li> --}}
                <li class="g_heading">Pages</li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-home"></i><span>Home</span></a>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-bars"></i><span>Categories</span></a>
                    <ul>
                        <li><a href="charts-apex.html">Earrings</a></li>
                        <li><a href="charts-e.html">Necklace</a></li>
                        <li><a href="charts-c3.html">Rings</a></li>
                        <li><a href="charts-knob.html">Bracelets</a></li>
                        <li><a href="charts-sparkline.html">pendants</a></li>
                        <li><a href="charts-knob.html">Anklets</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-qrcode"></i><span>Blogs</span></a>
                
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-globe"></i><span>Events</span></a>
                
                </li>  
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-star"></i><span>Celebrities</span></a>
                
                </li>              
                <li><a href="widgets.html"><i class="fa fa-info-circle"></i><span>About</span></a></li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-envelop"></i><span>Contact</span></a>
                
                </li> 
                
                    <a href="javascript:void(0)" class="has-arrow"><i class="fe fe-file"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="page-carousel.html">Home</a></li> 
                        <li><a href="page-empty.html">Categories</a></li>
                        <li><a href="page-profile.html">Blogs</a></li>
                        <li><a href="page-search.html">Events</a></li>
                        <li><a href="page-timeline.html">Celebrities</a></li>                                
                        <li><a href="page-invoices.html">About</a></li>
                        <li><a href="page-pricing.html">Contact</a></li>                       
                    </ul>
                </li>                
            </ul>
        </nav>        
    </div>

    <div class="page">
        
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

    <!-- Add your header here -->
    <div id="page_top" class="section-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="left">
                    <h1 class="page-title">Dashboard</h1>
                    {{-- <select class="custom-select">
                        <option>Year</option>
                        <option>Month</option>
                        <option>Week</option>
                    </select>
                    <div class="input-group xs-hide">
                        <input type="text" class="form-control" placeholder="Search...">
                    </div> --}}
                </div>
                <div class="right">
                    {{-- <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                            <!-- Language dropdown menu -->
                            <div class="dropdown-menu">
                                <!-- Add language options here -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                            <!-- Reports dropdown menu -->
                            <div class="dropdown-menu">
                                <!-- Add report options here -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                            <!-- Project dropdown menu -->
                            <div class="dropdown-menu">
                                <!-- Add project options here -->
                            </div>
                        </li>
                    </ul> --}}
                    <div class="notification d-flex">
                        {{-- <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                            <!-- Notification dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <!-- Add notification items here -->
                            </div>
                        </div> --}}
                        {{-- <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                            <!-- Notification dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <!-- Add notification items here -->
                            </div>
                        </div> --}}
                        <div class="dropdown d-flex">
                            <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown">
                                <!-- Greeting message with user's name -->
                                Hi, {{ auth()->user()->name }}
                                &nbsp;&nbsp;<i class="fa fa-user"></i>
                            </a>
                            <!-- User dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <!-- Profile link -->
                                <a class="dropdown-item" href="{{ route('users.show', auth()->user()->id) }}"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                <!-- Sign Out link -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                    </button>
                                </form></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
      @yield('content')
      
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2023 &nbsp;&nbsp;<a href="javascript:void(0)">Latest Fashion Jewellery</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
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