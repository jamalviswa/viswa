@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Dashboard</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-info"><i class="fa fa-phone"></i></div>
                        <div class="content">
                            <div class="text">Total Contact Enquiries</div>
                            <h5 class="number">0</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-warning"><i class="fa fa-globe"></i></div>
                        <div class="content">
                            <div class="text">Total Blogs</div>
                            <h5 class="number">0</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-danger"><i class="fa fa-video-camera"></i></div>
                        <div class="content">
                            <div class="text">Total Videos</div>
                            <h5 class="number">0</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-primary"><i class="fa fa-user"></i></div>
                        <div class="content">
                            <div class="text">Total Clients</div>
                            <h5 class="number">0</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon"><i class="fa fa-folder"></i></div>
                        <div class="content">
                            <div class="text">Total Projects</div>
                            <h5 class="number">0</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card top_counter">
                    <div class="body">
                        <div class="icon text-warning"><i class="fa fa-user-plus"></i></div>
                        <div class="content">
                            <div class="text">Total Experts</div>
                            <h5 class="number">0</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection