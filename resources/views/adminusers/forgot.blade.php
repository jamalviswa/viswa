@extends('layouts.login')
@section('content')
<!-- Forgot password Section Start-->
<div class="col-lg-4">
    <div class="card">
        <div class="header">
            <p class="lead">Recover my password</p>
        </div>
        <div class="body">
            <p>Please enter your email address below to receive instructions for resetting password.</p>
            <form class="form-auth-small" action="{{ url('admin/login') }}">
                <div class="form-group">
                    <input type="password" class="form-control" id="signup-password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark btn-lg btn-block">RESET PASSWORD</button>
                <div class="bottom">
                    <span class="helper-text">Know your password? <a href="{{ url('admin/login') }}">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Forgot password Section End-->
@endsection