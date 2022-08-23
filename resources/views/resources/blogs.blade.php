@extends('layouts.front')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header4">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn"></h1>
            <a href="" class="h5 text-white"></a>
            <a href="" class="h5 text-white"></a>
        </div>
    </div>
</div>
<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="assets/blog-1.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3">How to develop a website</h4>
                                <p>We provide the website development services that are on the cutting edge of Today's Technologies.</p>
                                <a class="text-uppercase" href="detail.html">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="assets/blog-2.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="detail.html">Software Development</a>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3">How to customize a software </h4>
                                <p>We develop a custom software’s to the industry in the various domains as per the industry requirements.</p>
                                <a class="text-uppercase" href="blog 2.html">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="assets/blog-3.jpg" alt="">
                                <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Graphic Design</a>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3">How to design a logo for Business</h4>
                                <p>We are experts in getting your brand ready to connect deeply with the ones for you to improve your business faster and easier.</p>
                                <a class="text-uppercase" href="blog 3.html">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg m-0">
                                <li class="page-item disabled">
                                    <a class="page-link rounded-0" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="blog.html">1</a></li>
                                <li class="page-item"><a class="page-link" href="blog 2.html">2</a></li>
                                <li class="page-item"><a class="page-link" href="blog 3.html">3</a></li>
                                <li class="page-item">
                                    <a class="page-link rounded-0" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">


                <!-- Category Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Categories</h3>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="app development.html"><i class="bi bi-arrow-right me-2"></i>App Development</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="Software Development.html"><i class="bi bi-arrow-right me-2"></i>Software Development</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="E-commerce.html"><i class="bi bi-arrow-right me-2"></i>E-Commerce Solution</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="web design.html"><i class="bi bi-arrow-right me-2"></i>Web Design & Development</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="digital marketing.html"><i class="bi bi-arrow-right me-2"></i>Digital Marketing</a>
                        <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="graphical design.html"><i class="bi bi-arrow-right me-2"></i>Graphic Design</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Recent Post</h3>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="detail.html" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">How to develop a website for business</a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="blog 2.html" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">How to customize a software</a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="blog 3.html" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">How to design a Business logo </a>
                    </div>




                </div>
                <!-- Recent Post End -->


            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection