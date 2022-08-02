@extends('layouts.back')
@section('content')
<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Our Videos</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Add Our Videos</li>
                </ul>
                <a href="{{ route('resources.videos_index') }}" class="btn btn-sm btn-primary" title="">Back To List</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="header">
                        <h2>Add Our Videos</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{ route('resources.videos_update', $detail['id']) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Video URL</label>
                                        <input type="text" name="video_url" autocomplete="off" value="{{$detail['video_url']}}" class="form-control">
                                        @error('video_url')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                        @if(!empty($detail['video_url']))
                                        <iframe class="embed-responsive-item" src="{{$detail->video_url}}" width="150" height="50" style="padding-top:5px;"></iframe>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            <a href="{{ route('resources.videos_index') }}" class="btn btn-sm btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection