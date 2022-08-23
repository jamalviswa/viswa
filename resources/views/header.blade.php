<?php $sitesettings = App\Models\Sitesetting::first(); ?>

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{$sitesettings->mobile_number}}</small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{$sitesettings->email}}</small>
            </div>
        </div>

        <!-- Header Social Icon Start-->
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="{{$sitesettings->whatsapp_url}}"><i class="fab fa-whatsapp  fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="{{$sitesettings->instagram_url}}"><i class="fab fa-instagram fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="{{$sitesettings->facebook_url}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="{{$sitesettings->linkedin_url}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="{{$sitesettings->twitter_url}}"><i class="fab fa-twitter fw-normal"></i></a>
            </div>
        </div>
        <!-- Header Social Icon End-->

    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('home.index') }}" class="navbar-brand p-0">
            <img src="{{URL::to('images/sitesettings/'.$sitesettings['logo'])}}" width="150" height="50" alt="VTS">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <!-- Header Nav Start Here-->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home.index') }}" class="nav-item nav-link {{ Request::is('/') ? 'active':'' }}">Home</a>
                <a href="{{ route('about.index') }}" class="nav-item nav-link {{ Request::is('about') ? 'active':'' }}">About</a>
                <a href="{{ route('services.index') }}" class="nav-item nav-link {{ Request::is('services') ? 'active':'' }}">Services</a>
                <a href="{{ route('products.index') }}" class="nav-item nav-link {{ Request::is('portfolio') ? 'active':'' }}">portfolio</a>
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle {{ Request::is('blogs') || Request::is('videos') ? 'active':'' }}" data-bs-toggle="dropdown">Resources</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('resources.blogs') }}" class="dropdown-item {{ Request::is('blogs') ? 'active':'' }}">Blogs</a>
                        <a href="{{ route('resources.videos') }}" class="dropdown-item {{ Request::is('videos') ? 'active':'' }}">Videos</a>
                    </div>
                </div>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link {{ Request::is('contact') ? 'active':'' }}">Contact</a>
            </div>
        </div>
        <!-- Header Nav End Here-->

    </nav>
</div>
<!-- Navbar & Carousel End -->