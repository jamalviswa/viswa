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
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Add Blogs</li>
                </ul>
                <a href="{{ route('resources.blogs_index') }}" class="btn btn-sm btn-primary">Back To List</a>
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
                    <form id="basic-form" action="{{ route('resources.blogs_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" autocomplete="off" value="{{old('title')}}" class="form-control">
                                        @error('title')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="custom-select" name="category">
                                        <option value="">Select Category</option>
                                            <?php
                                                 $categories = App\Models\Category::where('status','Active')->get();
                                                 foreach ($categories as $category) {
                                            ?>
                                            <option value="<?php echo $category->id  ?>"><?php echo $category->category_name ?></option>
                                            <?php } ?>
                                        </select>
                                        @error('category')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea class="form-control" name="description"></textarea>
                                        @error('description')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Content</label>
                                        <textarea class="form-control" id="ckeditor" name="content"></textarea>
                                        @error('content')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
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
                            <a href="{{ route('resources.blogs_index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection