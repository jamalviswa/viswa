<!doctype html>
<html lang="en">

<head>
    <title>Viswa Technology Solutions - Coimbatore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="when Tech Meets Empowerment">
    <meta name="author" content="Viswa Technology Solutions">

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
    <link rel="stylesheet" href="{{ URL::asset('css/admin/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/css/color_skins.css') }}">
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

    @include('nav')

    @include('sidebar')

    @yield('content')


    </div>

    <!-- Javascript -->
    <script src="{{ URL::asset('css/admin/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ URL::asset('css/admin/bundles/vendorscripts.bundle.js') }}"></script>

    <script src="{{ URL::asset('css/admin/bundles/c3.bundle.js') }}"></script>
    <script src="{{ URL::asset('css/admin/bundles/chartist.bundle.js') }}"></script>
    <script src="{{ URL::asset('css/admin/vendor/toastr/toastr.js') }}"></script>

    <script src="{{ URL::asset('css/admin/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ URL::asset('css/admin/js/index.js') }}"></script>
</body>

</html>