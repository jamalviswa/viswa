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
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/dropify/css/dropify.min.css') }}"> -->

    <link rel="stylesheet" href="{{ URL::asset('css/admin/css/sweetalert.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/charts-c3/plugin.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
    <!-- <link rel="stylesheet" href="{{ URL::asset('css/admin/vendor/toastr/toastr.min.css') }}"> -->


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
    <!-- <script src="{{ URL::asset('css/admin/vendor/toastr/toastr.js') }}"></script> -->
    <!-- <script src="{{ URL::asset('css/admin/vendor/dropify/js/dropify.min.js') }}"></script> -->

    <script src="{{ URL::asset('css/admin/js/sweetalert.min.js') }}"></script>

    <script src="{{ URL::asset('css/admin/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ URL::asset('css/admin/js/index.js') }}"></script>
    <!-- <script src="{{ URL::asset('css/admin/js/pages/forms/dropify.js') }}"></script> -->

    <script src="{{ URL::asset('css/admin/vendor/ckeditor/ckeditor.js') }}"></script><!-- Ckeditor -->
    <script src="{{ URL::asset('css/admin/js/pages/forms/editors.js') }}"></script>

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
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        @csrf
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are You Sure, Do you want Delete this Record?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a class="btn btn-primary" href="javascript:;">Yes</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#deleteModal').modal('show');
            $('#deleteModal').find('.btn-primary').attr('href', $(this).attr('href'));
        });
    </script>
</body>

</html>