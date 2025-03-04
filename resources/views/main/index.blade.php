@extends('layout.main_master')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="iq-banner-thumb-slider">
    <div class="slider">
        <div class="position-relative slider-bg d-flex justify-content-end">
            <div class="position-relative my-auto">
                <div class="horizontal_thumb_slider" data-swiper="slider-thumbs-ott">
                    <div class="banner-thumb-slider-nav">
                        <div class="swiper-container " data-swiper="slider-thumbs-inner-ott">
                            <div class="swiper-wrapper">
                                @foreach($movies_banner as $movie)
                                <div class="swiper-slide swiper-bg">
                                    <div class="block-images position-relative ">
                                        <div class="img-box">
                                            <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" class="img-fluid" alt=""
                                                loading="lazy">
                                            <div class="block-description">
                                                <h6 class="iq-title fw-500 mb-0">{{ $movie['title'] }}</h6>
                                                <span class="fs-12">Voted: {{ $movie['vote_count'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="slider-prev swiper-button">
                            <i class="iconly-Arrow-Left-2 icli"></i>
                        </div>
                        <div class="slider-next swiper-button">
                            <i class="iconly-Arrow-Right-2 icli"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-images" data-swiper="slider-images-ott">
                <div class="swiper-container" data-swiper="slider-images-inner-ott">
                    <div class="swiper-wrapper m-0">
                        @foreach($movies_banner as $movie)
                        <div class="swiper-slide p-0">
                            <div class="slider--image block-images">
                                <img src="https://image.tmdb.org/t/p/w1280{{ $movie['backdrop_path'] }}" loading="lazy" alt="banner" />
                            </div>
                            <div class="description">
                                <div class="row align-items-center h-100">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="slider-content">
                                            <div class="d-flex align-items-center RightAnimate mb-3">
                                                <span
                                                    class="badge rounded-0 text-dark text-uppercase px-3 py-2 me-3 bg-white mr-3">{{ $movie['certificate'] }}</span>
                                                <ul class="p-0 mb-0 list-inline d-flex flex-wrap align-items-center movie-tag">
                                                    @foreach($movie['genres'] as $genre)
                                                    <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                                        <a href="{{route('allmovies')}}/genres/{{ $genre['id'] }}-{{ Str::slug($genre['name']) }}" class="text-decoration-none">{{ $genre['name'] }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <h1
                                                class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                                {{ $movie['title'] }}
                                            </h1>
                                            <p class="line-count-3 RightAnimate-two">{{ $movie['overview'] }}</p>
                                            <div class="d-flex flex-wrap align-items-center gap-3 RightAnimate-three">
                                                <div class="slider-ratting d-flex align-items-center">
                                                    <ul
                                                        class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                        <li>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                        </li>
                                                    </ul>
                                                    <span class="text-white ms-2 font-size-14 fw-500">{{ $movie['vote_average'] }}/10</span>
                                                    <span class="ms-2">
                                                        <img src="{{asset('assets')}}/main/img/movies/imdb-logo.svg" alt="imdb logo"
                                                            class="img-fluid">
                                                    </span>
                                                </div>
                                                <span class="font-size-14 fw-500">
                                                    @php
                                                    $time=$movie['runtime'];
                                                    $runtime=intdiv($time, 60);
                                                    $remainingMinutes = $time % 60;
                                                    @endphp
                                                    {{ $runtime }}h {{ $remainingMinutes }}m
                                                </span>
                                                <div class="text-primary font-size-14 fw-500 text-capitalize">Starting: <a
                                                        href="{{ route('myprofile') }}/{{ $movie['cast_represent']['id'] }}" class="text-decoration-none ms-1">{{ $movie['cast_represent']['name'] }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="RightAnimate-four">
                                            <div class="iq-button">
                                                <a href="{{route('details')}}/{{ $movie['id'] }}-{{ Str::slug($movie['title']) }}" class="btn text-uppercase position-relative">
                                                    <span class="button-text">Details</span>
                                                    <i class="fa-solid fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="top-ten-block" style="margin-top:30px;">
    <div class="container-fluid">
        <section class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 mb-4">
                <h5 class="main-title text-capitalize mb-0">Top ten movies to watch</h5>
                <a href="{{route('allmovies')}}/list/top_rated" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="position-relative swiper swiper-card iq-top-ten-block-slider" data-slide="6" data-laptop="6"
                data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="false"
                data-navigation="true" data-pagination="true">
                <ul class="p-0 swiper-wrapper mb-5 list-inline">
                    @php $i=1; @endphp
                    @foreach($movie_top_ten as $m)
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}/{{ $m['id'] }}-{{ Str::slug($m['title']) }}">
                                        <img src="https://image.tmdb.org/t/p/w500{{ $m['poster_path'] }}" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">{{ $i }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @php $i++; @endphp
                    @endforeach
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </section>
    </div>
</div>

<div class="streamit-block">
    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">Upcoming</h5>
                <a href="{{route('allmovies')}}/list/upcoming" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        @foreach($movie_upcoming as $movie)
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}/{{ $movie['id'] }}-{{ Str::slug($movie['title']) }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}/{{ $movie['id'] }}-{{ Str::slug($movie['title']) }}">{{ $movie['title'] }}</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">
                                                        @php
                                                        $time=$movie['runtime'];
                                                        $runtime=intdiv($time, 60);
                                                        $remainingMinutes = $time % 60;
                                                        @endphp
                                                        {{ $runtime }}h {{ $remainingMinutes }}m
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a href="" class="watch-list-not" data-movie-id="{{ $movie['id'] }}" name="addbutton" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Add To Watchlist </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-social-info align-items-center">
                                        <ul class="p-0 m-0 d-flex gap-2 music-play-lists">
                                            <li class="share position-relative d-flex align-items-center text-center mb-0">
                                                <span class="w-100 h-100 d-inline-block bg-transparent">
                                                    <i class="fas fa-share-alt"></i>
                                                </span>
                                                <div class="share-wrapper">
                                                    <div class="share-boxs d-inline-block">
                                                        <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                                        </svg>
                                                        <div class=" overflow-hidden">
                                                            <a href="#" target="_blank">
                                                                <i class="fab fa-facebook-f"></i>
                                                            </a>
                                                            <a href="#" target="_blank">
                                                                <i class="fab fa-twitter"></i>
                                                            </a>
                                                            <a href="#">
                                                                <i class="fas fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="share position-relative d-flex align-items-center text-center mb-0">
                                                <span class="w-100 h-100 d-inline-block bg-transparent">
                                                    <i class="fa-regular fa-heart"></i>
                                                </span>
                                                <div class="share-wrapper">
                                                    <div class="share-boxs d-inline-block">
                                                        <svg width="15" height="40" class="share-shape" viewBox="0 0 15 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z" fill="#191919"></path>
                                                        </svg>
                                                        <div class=" overflow-hidden">
                                                            <span>+51</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="iq-button">
                                            <a href="{{route('details')}}/{{ $movie['id'] }}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="verticle-slider section-padding-bottom">
    <div class="slider">
        <div class="slider-flex position-relative">
            <div class="slider--col position-relative">
                <div class="vertical-slider-prev swiper-button"><i class="iconly-Arrow-Up-2 icli"></i></div>
                <div class="slider-thumbs" data-swiper="slider-thumbs">
                    <div class="swiper-container " data-swiper="slider-thumbs-inner">
                        <div class="swiper-wrapper top-ten-slider-nav">
                            @foreach($movie_trending as $movie)
                            <div class="swiper-slide swiper-bg">
                                <div class="block-images position-relative ">
                                    <div class="img-box slider--image">
                                        <img src="https://image.tmdb.org/t/p/w1280{{ $movie['backdrop_path'] }}" class="img-fluid" alt="" loading="lazy">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="{{ route('details') }}/{{ $movie['id'] }}-{{ Str::slug($movie['title']) }}">{{ $movie['title'] }}</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-body">
                                                @php
                                                $time=$movie['runtime'];
                                                $runtime=intdiv($time, 60);
                                                $remainingMinutes = $time % 60;
                                                @endphp
                                                {{ $runtime }}h {{ $remainingMinutes }}m
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="vertical-slider-next swiper-button"><i class="iconly-Arrow-Down-2 icli"></i></div>
            </div>
            <div class="slider-images" data-swiper="slider-images">
                <div class="swiper-container " data-swiper="slider-images-inner">
                    <div class="swiper-wrapper ">
                        @foreach($movie_trending as $movie)
                        <div class="swiper-slide">
                            <div class="slider--image block-images"><img src="https://image.tmdb.org/t/p/w1280{{ $movie['backdrop_path'] }}"
                                    loading="lazy" alt="" /></div>
                            <div class="description">
                                <div class="block-description">
                                    <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                        @foreach($movie['genres'] as $genre)
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}/genres/{{ $genre['id'] }}-{{ Str::slug($genre['name']) }}" class="text-white text-decoration-none">{{ $genre['name'] }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <h2 class="iq-title mb-3"><a href="{{ route('details') }}/{{ $movie['id'] }}"></a></h2>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="slider-ratting d-flex align-items-center">
                                            <ul
                                                class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <span class="text-white ms-2 font-size-14 fw-500">{{ $movie['vote_average'] }}/10</span>
                                        </div>
                                        <span class="text-body">
                                            @php
                                            $time=$movie['runtime'];
                                            $runtime=intdiv($time, 60);
                                            $remainingMinutes = $time % 60;
                                            @endphp
                                            {{ $runtime }}h {{ $remainingMinutes }}m
                                        </span>
                                    </div>
                                    <p class="mt-0 mb-3 line-count-2">{{ $movie['overview'] }}</p>
                                    <div class="iq-button">
                                        <a href="{{route('details')}}/{{ $movie['id'] }}-{{ Str::slug($movie['title']) }}" class="btn text-uppercase position-relative">
                                            <span class="button-text">Details</span>
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="favourite-person-block">
    <div class="container-fluid">
        <section class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">Most Popular Casts </h5>
                <a href="all-personality.html" class="text-primary iq-view-all text-decoration-none">View All</a>
            </div>
            <div class="position-relative swiper swiper-card" data-slide="11" data-laptop="11" data-tab="4" data-mobile="2"
                data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                <ul class="p-0 swiper-wrapper m-0  list-inline personality-card">
                    @foreach($popular_casts as $cast)
                    <li class="swiper-slide">
                        <img src="https://image.tmdb.org/t/p/w1280{{ $cast['profile_path'] }}" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="{{ route('actorinfo') }}/{{ $cast['id'] }}-{{ Str::slug($cast['name']) }}" class="font-size-14 text-decoration-none cast-title text-capitalize">{{ $cast['name'] }}</a>
                            </h6>
                            <a href="{{ route('myprofile') }}/{{ $cast['id'] }}-{{ Str::slug($cast['name']) }}" class="font-size-14 text-decoration-none text-capitalize text-body">{{ $cast['known_for_department'] }}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </section>
    </div>
</div>
<div class="movie-geners-block">
    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">Movie Genres</h5>
                <a href="{{ route('cataloggrid') }}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline geners-card">
                        @foreach($genres_list as $genre)
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/bgr_genre.jpg" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="{{ route('allmovies') }}/genres/{{ $genre['id'] }}-{{ Str::slug($genre['name']) }}" class="text-decoration-none text-capitalize line-count-2 p-2">{{ $genre['name'] }}</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addNewPlaylist" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0" style="background-color: #141314;">
            @if(!Auth::check())
            <div class="modal-header border-0">
                <div>
                    <h1 class="modal-title text-capitalize fs-5 fw-500">Sign In to continue</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="form-group d-flex align-items-center justify-content-center gap-3">
                <a href="{{ route('signinform') }}" class="btn btn-sm btn-primary text-uppercase fw-medium" id="signInBtn">SignIn</a>
            </div>
            @else
            <div class="modal-header border-0">
                <div>
                    <h1 class="modal-title text-capitalize fs-5 fw-500">Select Your WatchList</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="form-group d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-light text-uppercase fw-medium">cancel</button>
                <button type="submit" class="btn btn-sm btn-primary text-uppercase fw-medium" id="addWatchlist">add</button>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
<script src="{{asset('assets')}}/main/js/add-watchlist.js"></script>
@endsection