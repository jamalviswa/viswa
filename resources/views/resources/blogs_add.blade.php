@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Blogs</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Add Blogs</li>
                </ul>
                <a href="{{ url('admin/resources/blogs/index') }}" class="btn btn-sm btn-primary" title="">Back To List</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">
                        <h2>Add Blogs Details</h2>
                    </div>
                    <div class="body">
                        <form action="" id="basic-form" method="post" enctype="multipart/form-data">

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="name" autocomplete="off" value="{{old('name')}}" class="form-control">
                                        @error('name')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="custom-select">
                                            <option value="Web Design & Development">Web Design & Development</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Hosting">Hosting</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Content</label>
                                        <textarea class="form-control" id="ckeditor"></textarea>
                                    </div>
                                </div>
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
                            <a href="{{ url('admin/resources/blogs/index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection