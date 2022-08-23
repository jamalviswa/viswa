@extends('layouts.login')
@section('content')
<!-- Login Section Start-->
<div class="col-lg-4">
    <div class="card">
        <div class="header">
            <p class="lead">Login to your account</p>
        </div>
        <div class="body">
            <form class="form-auth-small" action="{{ route('adminusers.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                    @error('email')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
                    @error('password')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>
                </div> -->
                <button type="submit" class="btn btn-dark btn-lg btn-block">LOGIN</button>
                <div class="bottom">
                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i><a href="{{ route('adminusers.forgot') }}" class="text-secondary"> Forgot password?</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Login Section End-->
@endsection