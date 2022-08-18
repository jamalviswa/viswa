@extends('layouts.front')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header1">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn"></h1>
            <a href="" class="h5 text-white"></a>
            <a href="" class="h5 text-white"></a>
        </div>
    </div>
</div>
<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-3">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">The Best IT Solution With 2 Years of Experience</h1>
                </div>
                <p class="mb-4"> We are one of the best in the
                    software industry. We bringing
                    technology vise to improve your
                    business. Our services help start-ups,
                    business owners to move and adapt
                    the best methodologies and
                    technologies in the Indian market.
                    Flexibility, commitment, assurance,
                    customer satisfaction, and
                    sustainability adds another feather to
                    our cap.<br /><br />
                    The quality of our processes, the sanctity of our promises, and our ever growing wealth of
                    experience are all leveraged in each project. The quality we offer our clients in terms of
                    effective software functionalities and customer service is seldom matched.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Save Your Time</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Improve Your Productivity
                        </h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Give Technical Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>We Can Automated Your Process
                        </h5>
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
<!-- Testimonial Section Start -->
<div class="testimonial-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-1 pt-100 pb-100">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="slider-items">
                        <img src="{{URL::to('images/banners/vision.png')}}" alt="testimonial image">
                        <h3>Vision</h3>

                        <p> To Provide Unique Designs , Customized Products And Highly Secured Service To Our
                            Customers.</p>
                    </div>

                    <div class="slider-items">
                        <img src="{{URL::to('images/banners/I-con-1.png')}}" alt="testimonial image">
                        <h3>Mission</h3>

                        <p> We Strive To Create Local Oppurtunity , Growth , And Impact In Every Country Around The
                            <br /> World.
                        </p>
                    </div>

                    <div class="slider-items">
                        <img src="{{URL::to('images/banners/I-con-3.png')}}" alt="testimonial image">
                        <h3>Values</h3>

                        <p> We Give Life To Our Customer's Dream Through Our Design And Innovative <br />Ideas.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 p-0">
                <div class="testimonial-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Team Start-->
<div class="container">
    <div class="row blog">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                    <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
                </div>
                <section class="team-area2 pt-120 pb-70 pt-md-60 pb-md-30 pt-xs-60 pb-xs-30">
                    <div class="container">
                        <div id="team-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="owl-carousel vendors-carousel">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="team-wrapper text-center mb-45">
                                            <div class="team-thumb">
                                                <img src="{{URL::to('images/banners/nivy.jpg')}}" alt="Image" width="220" height="220">
                                            </div>
                                            <div class="team-content">
                                                <h6 class="theme-col">App Developer</h6>
                                                <h4 class="sub-title text-heding2">M.Bremi Nivedhaa</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="team-wrapper text-center mb-45">
                                            <div class="team-thumb">
                                                <img src="{{URL::to('images/banners/JAMAL.jpg')}}" alt="Image" width="220" height="220">
                                            </div>
                                            <div class="team-content">
                                                <h6 class="theme-col">Web Developer</h6>
                                                <h4 class="sub-title text-heding2">K.Jamal Ahamed</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="team-wrapper text-center mb-45">
                                            <div class="team-thumb">
                                                <img src="{{URL::to('images/banners/DIVYA.jpg')}}" alt="Image" width="220" height="220">
                                            </div>
                                            <div class="team-content">
                                                <h6 class="theme-col">Web Developer</h6>
                                                <h4 class="sub-title text-heding2">R.Divya</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="team-wrapper text-center mb-45">
                                            <div class="team-thumb">
                                                <img src="{{URL::to('images/banners/NAVEEN.jpg')}}" alt="Image" width="220" height="220">
                                            </div>
                                            <div class="team-content">
                                                <h6 class="theme-col">Graphic Designer</h6>
                                                <h4 class="sub-title text-heding2">L.Naveen</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="team-wrapper text-center mb-45">
                                            <div class="team-thumb">
                                                <img src="{{URL::to('images/banners/MARI.jpg')}}" alt="Image" width="220" height="220">
                                            </div>
                                            <div class="team-content">
                                                <h6 class="theme-col">Digital Marketing</h6>
                                                <h4 class="sub-title text-heding2">M.Mariyappan</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="team-wrapper text-center mb-45">
                                            <div class="team-thumb">
                                                <img src="{{URL::to('images/banners/WINSON.jpg')}}" alt="Image" width="220" height="220">
                                            </div>
                                            <div class="team-content">
                                                <h6 class="theme-col">Web Developer</h6>
                                                <h4 class="sub-title text-heding2">G.Winson</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- Team End -->

@endsection