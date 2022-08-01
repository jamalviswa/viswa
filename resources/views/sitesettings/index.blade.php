@extends('layouts.back')
@section('content')

<!-- Main Content Start-->
<div id="main-content">

    <!-- Sub Header Section Start-->
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Site Settings</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('adminusers.dashboard') }}"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active">Site Settings</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Header Section Start-->

    <!-- Edit Sitesettings Section Start-->
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Edit Site Settings</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" action="{{ route('sitesettings.update',$detail['id']) }}" method="post" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Site Title</label>
                                        <input type="text" name="site_title" autocomplete="off" value="{{$detail['site_title']}}" class="form-control">
                                        @error('site_title')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Meta Description</label>
                                        <input type="text" name="meta_description" autocomplete="off" value="{{$detail['meta_description']}}" class="form-control">
                                        @error('meta_description')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Meta Keywords</label>
                                        <input type="text" name="meta_keywords" autocomplete="off" value="{{$detail['meta_keywords']}}" class="form-control">
                                        @error('meta_keywords')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Logo</label>
                                        <input type="file" class="form-control" name="logo">
                                        @error('logo')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group m-t-20">
                                        @if(!empty($detail['logo']))
                                        <a href="{{URL::to('images/'.$detail['logo'].'')}}" target="_blank"><img src="{{URL::to('images/'.$detail['logo'].'')}}" width="50" height="50" />
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">FavIcon</label>
                                        <input type="file" class="form-control" name="favicon">
                                        @error('favicon ')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group m-t-20">
                                        @if(!empty($detail['favicon']))
                                        <a href="{{URL::to('images/'.$detail['favicon'].'')}}" target="_blank"><img src="{{URL::to('images/'.$detail['favicon'].'')}}" width="48" height="48" />
                                        </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Mobile Phone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
                                            </div>
                                            <input type="text" name="mobile_number" autocomplete="off" value="{{$detail['mobile_number']}}" class="form-control">
                                            @error('mobile_number')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Telephone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="text" name="telephone_number" autocomplete="off" value="{{$detail['telephone_number']}}" class="form-control">
                                            @error('telephone_number')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                            </div>
                                            <input type="text" name="email" autocomplete="off" value="{{$detail['email']}}" class="form-control">
                                            @error('email')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Alternate Email</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                            </div>
                                            <input type="text" name="alt_email" autocomplete="off" value="{{$detail['alt_email']}}" class="form-control">
                                            @error('alt_email')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <textarea class="form-control" rows="5" cols="30"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Map Url</label>
                                        <input type="text" name="map_url" autocomplete="off" value="{{$detail['map_url']}}" class="form-control">
                                        @error('map_url')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Facebook Url</label>
                                        <input type="text" name="facebook_url" autocomplete="off" value="{{$detail['facebook_url']}}" class="form-control">
                                        @error('facebook_url')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Whatsapp Url</label>
                                        <input type="text" name="whatsapp_url" autocomplete="off" value="{{$detail['whatsapp_url']}}" class="form-control">
                                        @error('whatsapp_url')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">LinkedIn Url</label>
                                        <input type="text" name="linkedin_url" autocomplete="off" value="{{$detail['linkedin_url']}}" class="form-control">
                                        @error('linkedin_url')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Instagram Url</label>
                                        <input type="text" name="instagram_url" autocomplete="off" value="{{$detail['instagram_url']}}" class="form-control">
                                        @error('instagram_url')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Twitter Url</label>
                                        <input type="text" name="twitter_url" autocomplete="off" value="{{$detail['twitter_url']}}" class="form-control">
                                        @error('twitter_url')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Sitesettings Section End-->

</div>
<!-- Main Content End-->
@endsection