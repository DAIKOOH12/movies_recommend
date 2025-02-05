@extends('layout.main_master')

@section('content')
<section class="section-padding">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="main-title text-capitalize mb-0">Movie Genres</h4>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/01.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}" class="text-decoration-none text-capitalize line-count-2 p-2">Action</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/02.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}" class="text-decoration-none text-capitalize line-count-2 p-2">Adventure</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/03.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}" class="text-decoration-none text-capitalize line-count-2 p-2">Animation</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/04.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}" class="text-decoration-none text-capitalize line-count-2 p-2">Crime</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/05.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}" class="text-decoration-none text-capitalize line-count-2 p-2">Horror</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/06.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}" class="text-decoration-none text-capitalize line-count-2 p-2">Mystery</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/07.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}" class="text-decoration-none text-capitalize line-count-2 p-2">Romance</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="iq-button">
                <a href="javascript:void(0)" class="btn text-uppercase position-relative">
                    <span class="button-text">load more</span>
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding-bottom">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="main-title text-capitalize mb-0">Tv-Show Genres</h4>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/01.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Action</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/02.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Adventure</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/03.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Animation</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/04.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Comedy</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/05.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Drama</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/06.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Family</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/07.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Fantacy</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="iq-button">
                <a href="javascript:void(0)" class="btn text-uppercase position-relative">
                    <span class="button-text">load more</span>
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<section class="section-padding-bottom">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="main-title text-capitalize mb-0">Video Genres</h4>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/01.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Action</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/02.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Adventure</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/03.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Animation</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/04.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Comedy</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/05.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Drama</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/06.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Family</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/07.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Fantacy</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="iq-button">
                <a href="javascript:void(0)" class="btn text-uppercase position-relative">
                    <span class="button-text">load more</span>
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection