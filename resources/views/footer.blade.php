<?php $sitesettings = App\Models\Sitesetting::first(); ?>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">

            <!-- Footer First Part start-->
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100  p-4" style="background-color: #000 !important;">
                    <a href="{{ route('home.index') }}" class="navbar-brand">
                        <h1 class="m-0 text-white"><img src="{{URL::to('images/sitesettings/'.$sitesettings['logo'])}}" width="250" alt="VTS"></h1>
                    </a>
                    <p class="mt-3 mb-4 text-white">We are a web design and development Company from Coimbatore,Tamilnadu helping enterprise business in their digital transition through our suite of web and mobile application Services.</p>
                </div>
            </div>
            <!-- Footer First Part End-->

            <!-- Footer Second Part start-->
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">

                    <!-- Business Hours Start -->
                    <div class="col-lg-5 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Business Hours</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <h6 class="fw-bold text-primary text-uppercase mb-3"> Opening Days :</h6>
                            <p class="mb-4"> Monday - Friday : 10 am to 6 pm</p>

                        </div>
                    </div>
                    <!-- Business Hours End -->

                    <!-- Quick Link Start -->
                    <div class="col-lg-3 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="{{ route('home.index') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="{{ route('about.index') }}"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                            <a class="text-light mb-2" href="{{ route('services.index') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                            <a class="text-light mb-2" href="{{ route('resources.blogs') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Blogs</a>
                            <a class="text-light mb-2" href="{{ route('resources.videos') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Videos</a>
                            <a class="text-light mb-2" href="{{ route('portfolio.index') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Portfolio</a>
                            <a class="text-light" href="{{ route('contact.index') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                        </div>
                    </div>
                    <!-- Quick Link End -->

                    <!-- Get in touch start -->
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3  mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">{{$sitesettings->address}}</p>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">{{$sitesettings->email}}</p>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">{{$sitesettings->mobile_number}}</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" target="_blank" href="{{$sitesettings->whatsapp_url}}"><i class="fab fa-whatsapp fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" target="_blank" href="{{$sitesettings->instagram_url}}"><i class="fab fa-instagram fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" target="_blank" href="{{$sitesettings->facebook_url}}"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" target="_blank" href="{{$sitesettings->linkedin_url}}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" target="_blank" href="{{$sitesettings->twitter_url}}"><i class="fab fa-twitter fw-normal"></i></a>
                        </div>
                    </div>
                    <!-- Get in touch End -->

                </div>
            </div>
            <!-- Footer Second Part End-->

        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright section Start -->
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">2022 Viswa Technology Solutions</a>. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Copyright section End -->