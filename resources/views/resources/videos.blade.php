@extends('layouts.front')
@section('content')
<!-- Banner -->
<div class="container-fluid bg-primary py-5 bg-header5">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn"></h1>
            <a href="" class="h5 text-white"></a>
            <a href="" class="h5 text-white"></a>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="row g-5">
                    <?php
                    foreach ($videos as $video) {
                    ?>
                        <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="embed-responsive">
                                    <iframe class="embed-responsive-item" src="{{$video->video_url}}" width="400" height="250"></iframe>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    
                    <!-- Pagination -->
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                            {{ $videos->links('layouts.webpagination') }}
                        </nav>
                    </div>
                    <!-- Pagination End -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

@endsection