<!doctype html>
<html lang="en">

<head>
    <title>Viswa Technology Solutions - Coimbatore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="HexaBit Bootstrap 4x Admin Template">
    <meta name="author" content="WrapTheme, www.thememakker.com">

    <link rel="icon" href="{{URL::to('images/v_favicon.png')}}" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/toastr/toastr.min.css') }}">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/admin/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/color_skins.css') }}">
</head>

<body class="theme-orange">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{URL::to('images/v_favicon.png')}}" width="48" height="48" alt="VTS"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <!-- Navbar Section Start-->
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="index.html"><img src="../assets/images/v_logo.png" alt="HexaBit Logo"
                                class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i
                                class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                    <a href="javascript:void(0);" class="icon-menu btn-toggle-fullwidth"><i
                            class="fa fa-arrow-left"></i></a>
                </div>
                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar Section End-->

        <!-- Sidebar Section Start-->
        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand">
                <a href="index.html"><img src="../assets/images/v_logo.png" alt="HexaBit Logo"
                        class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i
                        class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
            </div>
            <div class="sidebar-scroll">
                <div class="user-account">
                    <div class="user_div">
                        <img src="../assets/images/ajith.jpg" class="user-photo" alt="User Profile Picture">
                    </div>
                    <div class="dropdown">
                        <span>Welcome,</span>
                        <a href="javascript:void(0);" class="dropdown-toggle user-name"
                            data-toggle="dropdown"><strong>Viswa Technology Solutions</strong></a>
                        <ul class="dropdown-menu dropdown-menu-right account">
                            <li><a href="#"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="active"><a href="#"><i class="icon-home"></i><span>Dashboard</span></a></li>
                        <li><a href="#"><i class="icon-settings"></i><span>Site Settings</span></a></li>
                        <li><a href="#"><i class="icon-size-fullscreen"></i><span>Banner</span></a></li>
                        <li><a href="#"><i class="icon-wrench"></i><span>Services</span></a></li>
                        <li><a href="#"><i class="icon-book-open"></i><span>Projects</span></a></li>
                        <li><a href="#"><i class="icon-book-open"></i><span>Contact Enquiries</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Sidebar Section End-->

        

    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/c3.bundle.js"></script>
    <script src="assets/bundles/chartist.bundle.js{{ URL::asset('css/admin/vendor/toastr/toastr.js') }}"></script>
    <script src="{{ URL::asset('css/admin/vendor/toastr/toastr.js') }}"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>