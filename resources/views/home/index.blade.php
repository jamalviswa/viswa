@extends('layouts.front')
@section('content')

<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="{{URL::to('images/banners/vts.mp4')}}" type="video/mp4" />
    </video>
</div>

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">The Best IT Solution With 2 Years of Experience</h1>
                </div>
                <p class="mb-4">The quality of our processes, the sanctity of our promises, and our ever growing wealth of experience are all leveraged in each project. The quality we offer our clients in terms of effective software functionalities and customer service is seldom matched.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Save Your Time</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Improve Your Productivity</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Give Technical Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Can Automated Your Process</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">+91 78679 97754</h4>
                    </div>
                </div>
                <a href="{{ route('about.index') }}" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Reed More</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{URL::to('images/banners/about.png')}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Save Your Time</h4>
                        <p class="mb-0">Joining hands with Viswa Technology Solution will allow you to save your time and get the best results in the form of reliable effective tech solutions.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Improve Your Productivity</h4>
                        <p class="mb-0">By giving us a fair chance to help you out, we can provide your business with the required productivity it needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative h-100">
                    <img class="position-absolute w-150 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{URL::to('images/banners/why-choose-us.jpg')}}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Automated Your Process</h4>
                        <p class="mb-0">Viswa Technology Solution are working nights and days to automate your processes with business development.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>Technical Support</h4>
                        <p class="mb-0">Our technical team will always be at your service, irrespective of the time and type of issues you come up with.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Ultimate Services for your Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3">App Development</h4>
                    <p class="m-0">We develop Android mobile apps using the tools and techniques applied for the top apps in mobile applications</p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="app development.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-display text-white"></i>
                    </div>
                    <h4 class="mb-3">Software Development</h4>
                    <p class="m-0">We develop a custom software’s to the industry in the various domains as per the industry requirements.</p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="Software Development.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-cart4 text-white"></i>
                    </div>
                    <h4 class="mb-3">E-Commerce Solution</h4>
                    <p class="m-0">Our E-Commerce portal development service mainly focuses on our clients desires and needs and work for that to gratify them.</p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="E-commerce.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-display text-white"></i>
                    </div>
                    <h4 class="mb-3">Web Design & Development</h4>
                    <p class="m-0">We provide the website development services that are on the cutting edge of Today's Technologies.</p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="web design.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5" style="background-color: #000 !important;">
                    <img src="{{URL::to('images/banners/shine black.gif')}}" alt="VTS">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-google text-white"></i>
                    </div>
                    <h4 class="mb-3">Digital Marketing</h4>
                    <p class="m-0">Digital Marketing refers to the use of the digital media in order to promote, sell or buy products and services to businesses. </p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="digital marketing.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-display text-white"></i>
                    </div>
                    <h4 class="mb-3">Graphic Design</h4>
                    <p class="m-0">We are experts in getting your brand ready to connect deeply with the ones for you to improve your business faster and easier.</p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="graphical design.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-phone text-white"></i>
                    </div>
                    <h4 class="mb-3">Message Provider</h4>
                    <p class="m-0">Our Simple Platform helps to Send Promotionals , Marketing , OTP , Notification , Alert SMS.</p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="message provider.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-cloud text-white"></i>
                    </div>
                    <h4 class="mb-3">Hosting</h4>
                    <p class="m-0"> A Prompt services team ensures that your website is up and running 24x7, and if any issue arises is tackled at the very first minute</p>
                    <!--<a class="btn btn-lg btn-primary rounded" href="Hosting.html">
                        <i class="bi bi-arrow-right"></i>
                    </a>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
            <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{URL::to('images/banners/blog-1.jpg')}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">How to build a website</h4>
                        <p>We provide the website development services that are on the cutting edge of Today's Technologies.</p>
                        <a class="text-uppercase" href="detail.html">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{URL::to('images/banners/blog-2.jpg')}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Software Development</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">How to customize a software </h4>
                        <p>We develop a custom software’s to the industry in the various domains as per the industry requirements.</p>
                        <a class="text-uppercase" href="blog 2.html">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{URL::to('images/banners/blog-3.jpg')}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Graphic Design</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">How to design a Business logo </h4>
                        <p>We are experts in getting your brand ready to connect deeply with the ones for you to improve your business faster and easier.</p>
                        <a class="text-uppercase" href="blog 3.html">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Start -->

<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <img src="{{URL::to('images/banners/1.png')}}" alt="">
                <img src="{{URL::to('images/banners/2.png')}}" alt="">
                <img src="{{URL::to('images/banners/cell.png')}}" alt="">
                <img src="{{URL::to('images/banners/4.png')}}" alt="">
                <img src="{{URL::to('images/banners/5.png')}}" alt="">
                <img src="{{URL::to('images/banners/6.png')}}" alt="">
                <img src="{{URL::to('images/banners/7.png')}}" alt="">
                <img src="{{URL::to('images/banners/8.png')}}" alt="">
                <img src="{{URL::to('images/banners/9.png')}}" alt="">
                <img src="{{URL::to('images/banners/10.png')}}" alt="">
                <img src="{{URL::to('images/banners/11.png')}}" alt="">
                <img src="{{URL::to('images/banners/12.png')}}" alt="">
                <img src="{{URL::to('images/banners/13.png')}}" alt="">
                <img src="{{URL::to('images/banners/14.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
@endsection