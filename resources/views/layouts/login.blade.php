<!doctype html>
<html lang="en">

<head>
<title>Viswa Technology Solutions - Coimbatore</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="When Tech Meets Empowerment">
<meta name="author" content="Viswa Technology Solutions">

<link rel="icon" href="{{URL::to('images/v_favicon.png')}}" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/font-awesome/css/font-awesome.min.css') }}">

<link rel="stylesheet" href="{{ URL::asset('css/admin/css/sweetalert.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ URL::asset('css/admin/css/main.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/admin/css/color_skins.css') }}">
</head>

<body class="theme-orange">
<div id="wrapper" class="auth-main">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12" id="j_logo">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="javascript:void(0);"><img src="{{URL::to('images/v_logo.png')}}" width="150" height="50" class="d-inline-block align-top mr-2" alt="VTS"></a>
                </nav>
            </div>
            <div class="col-lg-8">
                <div class="auth_detail">
                    <h2 class="text-monospace">
                        Viswa<br> Technology Solutions
                        <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">Our Vision</div>
                                <div class="carousel-item">Our Mission</div>
                                <div class="carousel-item">Our Values</div>
                                <div class="carousel-item">Our Goals</div>
                            </div>
                        </div>
                    </h2>
                    <p class="text-monospace" style=" margin-bottom: 20px;font-size: 40px;font-weight: 300;color: #fff">
                    <div id="carouselExampleControls" class="carousel hori slide" data-ride="carousel" data-interval="1500">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="font-size: 20px;font-weight: 300;color: #fff">To provide unique designs,products and highly secured service to our customers.</div>
                            <div class="carousel-item" style="font-size: 20px;font-weight: 300;color: #fff">We Strive to create local opportunity,growth, and impact in every country around the world.</div>
                            <div class="carousel-item" style="font-size: 20px;font-weight: 300;color: #fff">We give life to our customer's dream through our designs and innovative ideas.</div>
                            <div class="carousel-item" style="font-size: 20px;font-weight: 300;color: #fff">To provide a successful service for our customers, and make them shine in this fast moving world.</div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
            
@yield('content')
</div>
    </div>
</div>
<script src="{{ URL::asset('css/admin/bundles/libscripts.bundle.js') }}"></script>    
<script src="{{ URL::asset('css/admin/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ URL::asset('css/admin/js/sweetalert.min.js') }}"></script>

<script src="{{ URL::asset('css/admin/bundles/mainscripts.bundle.js') }}"></script>

<?php
    if (session()->has('message')) {
        $success = session()->get('message');
        $type = session()->get('alert-class');
    ?>
        <script>
            swal({
                title: "<?php echo ($type == 'success') ? 'Success' : "Error" ?>",
                text: "<?php echo $success; ?>",
                type: "<?php echo $type; ?>",
                showCancelButton: false,
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    <?php }
    ?>
    
</body>
</html>