@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Experts</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Edit Experts</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Back To List</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">
                        <h2>Edit Experts Details</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" class="form-control" value="Nivedha">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <input type="text" class="form-control" value="App Developer">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Image</label>
                                        <input type="file" class="form-control" id="exampleInputFile" aria-describedby="fileHelp">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group m-t-20">
                                        <img src="{{URL::to('images/A1.jpg')}}" width="150" height="150" alt="VTS">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Twitter</label>
                                        <input type="text" class="form-control" value="https://twitter.com">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Facebook</label>
                                        <input type="text" class="form-control" value="https://www.facebook.com">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">LinkedIn</label>
                                        <input type="text" class="form-control" value="https://www.linkedin.com">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Instagram</label>
                                        <input type="text" class="form-control" value="https://www.instagram.com">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Edit</a>
                            <a href="javascript:void(0);" class="btn btn-sm btn-danger" title="">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection