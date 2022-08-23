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
                    <li class="breadcrumb-item active">Edit Blogs</li>
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
                        <h2>Edit Blogs Details</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{ route('resources.blogs_update',$detail['id']) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        <input type="text" name="title" autocomplete="off" value="{{$detail['title']}}" class="form-control">
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
                                              <option {!!($category['id']==$detail['category'])? "selected" :""; !!} value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
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
                                        <textarea class="form-control" name="description">{{$detail['description']}}</textarea>
                                        @error('description')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Content</label>
                                        <textarea class="form-control" id="ckeditor" name="content">{{$detail['content']}}</textarea>
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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group m-t-20">
                                        @if(!empty($detail['image']))
                                        <a href="{{URL::to('images/blogs/'.$detail['image'].'')}}" target="_blank">
                                            <img src="{{URL::to('images/blogs/'.$detail['image'].'')}}" width="150" height="50" alt="VTS" />
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            <a href="{{ route('resources.blogs_index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection