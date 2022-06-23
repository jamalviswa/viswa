@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Clients</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Add Clients</li>
                </ul>
                <a href="{{ url('admin/about/index') }}" class="btn btn-sm btn-primary" title="">Back To List</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">
                        <h2>Add Clients Details</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{ url('admin/about/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="row clearfix">      
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Image</label>
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            <a href="{{ url('admin/about/index') }}" class="btn btn-sm btn-danger" title="">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection