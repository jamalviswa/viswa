@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Projects</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Edit Projects</li>
                </ul>
                <a href="{{ route('products.admin_index') }}" class="btn btn-sm btn-primary">Back To List</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">
                        <h2>Edit Projects Details</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{ route('products.admin_update',$detail['id']) }}" method="post" enctype="multipart/form-data">
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
                                        <label class="control-label">Project Link</label>
                                        <input type="text" name="project_link" autocomplete="off" value="{{$detail['project_link']}}" class="form-control">
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
                                        <a href="{{URL::to('images/products/'.$detail['image'].'')}}" target="_blank">
                                            <img src="{{URL::to('images/products/'.$detail['image'].'')}}" width="150" height="50" alt="VTS" />
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            <a href="{{ route('products.admin_index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection