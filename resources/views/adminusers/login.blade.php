@extends('layouts.login')
@section('content')
<!-- Login Section Start-->
<div class="col-lg-4">
    <div class="card">
        <div class="header">
            <p class="lead">Login to your account</p>
        </div>
        <div class="body">
            <form class="form-auth-small" action="{{ url('admin/dashboard') }}">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">LOGIN</button>
                <div class="bottom">
                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i><a href="{{ url('admin/forgot') }}" class="text-secondary"> Forgot password?</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Login Section End-->
@endsection