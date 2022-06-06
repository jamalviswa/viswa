@extends('layouts.back')
@section('content')
<!-- Profile Content Start-->
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>My Profile</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">

            <div class="col-lg-4 col-md-12">
                <div class="card profile-header">
                    <div class="body text-center">
                        <div class="profile-image mb-3"><img src="{{URL::to('images/ajith.jpg')}}" widht="140" height="140" class="rounded-circle" alt=""></div>
                        <div>
                            <h4 class="mb-0"><strong>Viswa</strong> Technology Solutions</h4>
                            <span>info@viswatechnologysolutions.com</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs-new">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Overview">Edit Profile</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Settings">Change
                                    Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content padding-0">
                    <div class="tab-pane blog-page active" id="Overview">
                        <div class="card">
                            <div class="header bline">
                                <h2>Edit Profile</h2>
                                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="Admin" disabled placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Settings">
                        <div class="card">
                            <div class="header bline">
                                <h2>Change Password</h2>
                                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Current Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="New Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Profile Content End-->
@endsection