@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Service Category</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Edit Service Category</li>
                </ul>
                <a href="{{ url('admin/resources/index') }}" class="btn btn-sm btn-primary">Back To List</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">
                        <h2>Edit Service Category</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{ url('admin/resources/update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$detail['id']}}">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Category Name</label>
                                        <input type="text" name="category_name" autocomplete="off" value="{{$detail['category_name']}}" class="form-control">
                                        @error('category_name')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Image</label>
                                        <input type="file" class="form-control" name="category_image">
                                        @if(!empty($detail['category_image']))
                                        <a href="{{URL::to('images/categories/'.$detail['category_image'].'')}}" target="_blank"><img src="{{URL::to('images/categories/'.$detail['category_image'].'')}}" class="avatar" width="50" height="50" />
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            <a href="{{ url('admin/resources/index') }}" class="btn btn-sm btn-danger" title="">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection