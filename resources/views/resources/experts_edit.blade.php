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
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Edit Experts</li>
                </ul>
                <a href="{{ route('resources.experts_index') }}" class="btn btn-sm btn-primary">Back To List</a>
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
                        <form id="basic-form" action="{{ route('resources.experts_update',$detail['id']) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" autocomplete="off" value="{{$detail['name']}}" class="form-control">
                                        @error('name')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <input type="text" name="position" autocomplete="off" value="{{$detail['position']}}" class="form-control">
                                        @error('position')
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
                                        <a href="{{URL::to('images/experts/'.$detail['image'].'')}}" target="_blank">
                                            <img src="{{URL::to('images/experts/'.$detail['image'].'')}}" width="150" height="50" alt="VTS" />
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Twitter</label>
                                        <input type="text" name="twitter" autocomplete="off" value="{{$detail['twitter']}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Facebook</label>
                                        <input type="text" name="facebook" autocomplete="off" value="{{$detail['facebook']}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">LinkedIn</label>
                                        <input type="text" name="linkedin" autocomplete="off" value="{{$detail['linkedin']}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Instagram</label>
                                        <input type="text" name="instagram" autocomplete="off" value="{{$detail['instagram']}}" class="form-control">
                                    </div>
                                </div>    
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            <a href="{{ route('resources.experts_index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection