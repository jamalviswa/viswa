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
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Edit Service Category</li>
                </ul>
                <a href="{{ route('resources.admin_index') }}" class="btn btn-sm btn-primary">Back To List</a>
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
                        <form id="basic-form" action="{{ route('resources.admin_update',$detail['id']) }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                                        @error('category_image')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group m-t-20">
                                        @if(!empty($detail['category_image']))
                                        <a href="{{URL::to('images/categories/'.$detail['category_image'].'')}}" target="_blank">
                                            <img src="{{URL::to('images/categories/'.$detail['category_image'].'')}}" width="150" height="50" alt="VTS" />
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            <a href="{{ route('resources.admin_index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection