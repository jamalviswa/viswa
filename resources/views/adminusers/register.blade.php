@extends('layouts.login')
@section('content')
<!-- Register Section Start-->
<div class="col-lg-4">
    <div class="card">
        <div class="header">
            <p class="lead">Register to your account</p>
        </div>
        <div class="body">
            <form class="form-auth-small" action="{{ route('adminusers.register_store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                    @error('name')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
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
                <button type="submit" class="btn btn-dark btn-lg btn-block">REGISTER</button>
            </form>
        </div>
    </div>
</div>
<!-- Register Section End-->
@endsection