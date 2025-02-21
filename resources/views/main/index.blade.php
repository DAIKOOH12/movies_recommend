@extends('layout.main_master')

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
                                                        <a href="{{route('allmovies')}}" class="text-decoration-none">{{ $genre['name'] }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <h1
                                                class="texture-text big-font letter-spacing-1 line-count-1 text-capitalize RightAnimate-two">
                                                {{ $movie['title'] }} </h1>
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
                                                <span class="font-size-14 fw-500">2hr : 6mins</span>
                                                <div class="text-primary font-size-14 fw-500 text-capitalize">genres: <a
                                                        href="{{route('allmovies')}}" class="text-decoration-none ms-1">Drama</a>
                                                </div>
                                                <div class="text-primary font-size-14 fw-500 text-capitalize">Starting: <a
                                                        href="person-detail.html" class="text-decoration-none ms-1">Jeffrey Silver</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="RightAnimate-four">
                                            <div class="iq-button">
                                                <a href="{{route('details')}}" class="btn text-uppercase position-relative">
                                                    <span class="button-text">Info</span>
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

<div class="top-ten-block">
    <div class="container-fluid">
        <section class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 mb-4">
                <h5 class="main-title text-capitalize mb-0">top ten movies to watch</h5>
                <a href="{{route('allmovies')}}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="position-relative swiper swiper-card iq-top-ten-block-slider" data-slide="6" data-laptop="6"
                data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="false"
                data-navigation="true" data-pagination="true">
                <ul class="p-0 swiper-wrapper mb-5 list-inline">
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/01.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">1</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/02.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">2</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/03.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">3</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/04.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">4</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/05.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">5</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/06.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">6</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/07.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">7</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/08.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">8</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/09.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">9</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="iq-top-ten-block">
                            <div class="block-image position-relative">
                                <div class="img-box">
                                    <a class="overly-images" href="{{route('details')}}">
                                        <img src="{{asset('assets')}}/main/img/top-ten-number/10.html" alt="movie-card" class="img-fluid object-cover">
                                    </a>
                                    <span class="top-ten-numbers texture-text">10</span>
                                </div>
                            </div>
                        </div>
                    </li>
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
                <h5 class="main-title text-capitalize mb-0">Only on Streamit</h5>
                <a href="{{route('allmovies')}}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">giikre</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 12mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">YoShi</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 22mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">We Gare</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Avengers</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 45mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Chosfies</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Tf Oaler</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Another Danger</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="streamit-card-height-block d-none">
    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">Only on Streamit</h5>
                <a href="{{route('allmovies')}}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        <li class="swiper-slide">
                            <div class="iq-card card-hover iq-card-style-2">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">giikre</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 12mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover iq-card-style-2">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">YoShi</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 22mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover iq-card-style-2">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">We Gare</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover iq-card-style-2">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Avengers</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 38mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover iq-card-style-2">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Chosfies</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 10mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover iq-card-style-2">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Tf Oaler</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 40mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover iq-card-style-2">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/related/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Another Danger</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 40mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
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
                            <div class="swiper-slide swiper-bg">
                                <div class="block-images position-relative ">
                                    <div class="img-box slider--image">
                                        <img src="{{asset('assets')}}/main/img/top-10/01.html" class="img-fluid" alt="" loading="lazy">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="tv-show-detail.html">lostti n sacee</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-body">2hr : 30mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-bg">
                                <div class="block-images position-relative ">
                                    <div class="img-box slider--image">
                                        <img src="{{asset('assets')}}/main/img/top-10/02.html" class="img-fluid" alt="" loading="lazy">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="tv-show-detail.html">Ret Seap</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-body">3hr : 0min</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-bg">
                                <div class="block-images position-relative">
                                    <div class="img-box slider--image">
                                        <img src="{{asset('assets')}}/main/img/top-10/03.html" class="img-fluid" alt="" loading="lazy">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="tv-show-detail.html">X-Men</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-body">1hr : 45mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-bg">
                                <div class="block-images position-relative">
                                    <div class="img-box slider--image">
                                        <img src="{{asset('assets')}}/main/img/top-10/04.html" class="img-fluid" alt="" loading="lazy">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="tv-show-detail.html">Logan</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-body">1hr : 22mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-bg">
                                <div class="block-images position-relative">
                                    <div class="img-box slider--image">
                                        <img src="{{asset('assets')}}/main/img/top-10/05.html" class="img-fluid" alt="" loading="lazy">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="tv-show-detail.html">Black Queen</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <span class="text-body">1hr : 45mins</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vertical-slider-next swiper-button"><i class="iconly-Arrow-Down-2 icli"></i></div>
            </div>
            <div class="slider-images" data-swiper="slider-images">
                <div class="swiper-container " data-swiper="slider-images-inner">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <div class="slider--image block-images"><img src="{{asset('assets')}}/main/img/top-10/01.html"
                                    loading="lazy" alt="" /></div>
                            <div class="description">
                                <div class="block-description">
                                    <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Comedy</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Romance</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Action</a>
                                        </li>
                                    </ul>
                                    <h2 class="iq-title mb-3"><a href="tv-show-detail.html">lostti n sacee</a></h2>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="slider-ratting d-flex align-items-center">
                                            <ul
                                                class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                        </div>
                                        <span class="text-body">2hr : 30mins</span>
                                    </div>
                                    <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <div class="iq-button">
                                        <a href="{{route('details')}}" class="btn text-uppercase position-relative">
                                            <span class="button-text">play now</span>
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider--image block-images"><img src="{{asset('assets')}}/main/img/top-10/02.html"
                                    loading="lazy" alt="" /></div>
                            <div class="description">
                                <div class="block-description">
                                    <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Comedy</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Romance</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Action</a>
                                        </li>
                                    </ul>
                                    <h2 class="iq-title mb-3"><a href="tv-show-detail.html">Ret Seap</a></h2>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="slider-ratting d-flex align-items-center">
                                            <ul
                                                class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                        </div>
                                        <span class="text-body">3hr 0min</span>
                                    </div>
                                    <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <div class="iq-button">
                                        <a href="{{route('details')}}" class="btn text-uppercase position-relative">
                                            <span class="button-text">play now</span>
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider--image block-images"><img src="{{asset('assets')}}/main/img/top-10/03.html"
                                    loading="lazy" alt="" /></div>
                            <div class="description">
                                <div class="block-description">
                                    <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Comedy</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Romance</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Action</a>
                                        </li>
                                    </ul>
                                    <h2 class="iq-title mb-3"><a href="tv-show-detail.html">X Men</a></h2>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="slider-ratting d-flex align-items-center">
                                            <ul
                                                class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                        </div>
                                        <span class="text-body">1hr : 45mins</span>
                                    </div>
                                    <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <div class="iq-button">
                                        <a href="{{route('details')}}" class="btn text-uppercase position-relative">
                                            <span class="button-text">play now</span>
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider--image block-images"><img src="{{asset('assets')}}/main/img/top-10/04.html"
                                    loading="lazy" alt="" /></div>
                            <div class="description">
                                <div class="block-description">
                                    <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Comedy</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Romance</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Action</a>
                                        </li>
                                    </ul>
                                    <h2 class="iq-title mb-3"><a href="tv-show-detail.html">Logan</a></h2>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="slider-ratting d-flex align-items-center">
                                            <ul
                                                class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                        </div>
                                        <span class="text-body">1hr : 22mins</span>
                                    </div>
                                    <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <div class="iq-button">
                                        <a href="#" class="btn text-uppercase position-relative">
                                            <span class="button-text">play now</span>
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider--image block-images"><img src="{{asset('assets')}}/main/img/top-10/05.html"
                                    loading="lazy" alt="" /></div>
                            <div class="description">
                                <div class="block-description">
                                    <ul class="ps-0 mb-0 mb-1 pb-1 list-inline d-flex flex-wrap align-items-center movie-tag">
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Comedy</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Romance</a>
                                        </li>
                                        <li class="position-relative text-capitalize font-size-14 letter-spacing-1">
                                            <a href="{{route('allmovies')}}" class="text-white text-decoration-none">Action</a>
                                        </li>
                                    </ul>
                                    <h2 class="iq-title mb-3"><a href="tv-show-detail.html">Black Queen</a></h2>
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <div class="slider-ratting d-flex align-items-center">
                                            <ul
                                                class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                                <li>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </li>
                                            </ul>
                                            <span class="text-white ms-2 font-size-14 fw-500">4.3/5</span>
                                        </div>
                                        <span class="text-body">1hr : 45mins</span>
                                    </div>
                                    <p class="mt-0 mb-3 line-count-2">The point of using Lorem Ipsum is that it has a
                                        more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                    <div class="iq-button">
                                        <a href="video-detail.html" class="btn text-uppercase position-relative">
                                            <span class="button-text">play now</span>
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <h5 class="main-title text-capitalize mb-0">your favourite personality</h5>
                <a href="all-personality.html" class="text-primary iq-view-all text-decoration-none">View All</a>
            </div>
            <div class="position-relative swiper swiper-card" data-slide="11" data-laptop="11" data-tab="4" data-mobile="2"
                data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                <ul class="p-0 swiper-wrapper m-0  list-inline personality-card">
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/01.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">john Abraham</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/02.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Leena burton</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/03.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Lorina williams </a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/04.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Davina decorous</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/05.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Thomas bailey</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">producer</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/06.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Kelly Reilly</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/07.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">smith Jonas</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">director</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/08.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">angel louis</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">producer</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/09.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Millar joseph</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/10.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">mark wilson</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actor</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/11.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Kelley walker</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">director</a>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <img src="{{asset('assets')}}/main/img/cast/12.html" alt="personality" class="img-fluid object-cover mb-4 rounded">
                        <div class="text-center">
                            <h6 class="mb-0">
                                <a href="person-detail.html" class="font-size-14 text-decoration-none cast-title text-capitalize">Amy Sedaris</a>
                            </h6>
                            <a href="cast-category.html" class="font-size-14 text-decoration-none text-capitalize text-body">actress</a>
                        </div>
                    </li>
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </section>
    </div>
</div>

<div class="popular-movies-block">
    <div class="container-fluid">
        <section class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">popular movies</h5>
                <a href="{{route('allmovies')}}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/popular/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">CRW</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 12mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/popular/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Batte Wiire</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 22mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/popular/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Goal</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/popular/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Dandacg</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/popular/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">mexcan</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/popular/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">oit moleld</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/popular/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Dragon Fire</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="tab-slider">
    <div class="slider">
        <div class="position-relative swiper swiper-card" data-slide="1" data-laptop="1" data-tab="1" data-mobile="1"
            data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true"
            data-effect="fade">
            <ul class="p-0 swiper-wrapper m-0 list-inline">
                <li class="swiper-slide tab-slider-banner p-0">
                    <div class="tab-slider-banner-images">
                        <img src="{{asset('assets')}}/main/img/tab-slider/01.html" alt="tab-slider-background">
                    </div>
                    <div class="block-images position-relative w-100">
                        <div class="container-fluid">
                            <div class="row align-items-center min-vh-100 h-100 my-4">
                                <div class="col-md-5 col-lg-5 col-xxl-5">
                                    <div class="tab-left-details">
                                        <div class="d-flex align-items-center gap-3 mb-4">
                                            <a href="javascriptvoid(0)%3b.html"><img
                                                    src="{{asset('assets')}}/main/img/movies/trending-label.html" class="img-fluid"
                                                    alt=""></a>
                                            <h5 class="text-gold"><span class="text-primary">#4</span> in Series Today</h5>
                                        </div>
                                        <h1 class="mb-2 fw-500 text-capitalize texture-text">The hunter</h1>
                                        <p class="mb-0 font-size-14 line-count-2">Sand and dust storms (SDS), also known as
                                            sirocco, haboob, yellow dust, white storms, and the harmattan, are a natural phenomenon
                                            linked with land</p>
                                        <ul class="d-flex align-items-center list-inline gap-2 movie-tag p-0 mt-3 mb-40">
                                            <li class="font-size-18">Nov 2022</li>
                                            <li class="font-size-18">Season 1</li>
                                        </ul>
                                        <div class="iq-button">
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative">
                                                <span class="button-text">stream
                                                    now</span>
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-2 col-xxl-3">
                                </div>
                                <div class="col-md-6 col-lg-5 col-xxl-4 mt-5 mt-md-0">
                                    <div class="tab-block">
                                        <h4 class="tab-title text-capitalize mb-0">All Episode</h4>
                                        <div class="tab-bottom-bordered border-0">
                                            <ul class="nav nav-tabs nav-pills mb-3 overflow-x-scroll" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series1-season-one" type="button" role="tab"
                                                        aria-selected="false">Season 1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series1-season-two" type="button" role="tab"
                                                        aria-selected="false">Season 2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series1-season-three" type="button" role="tab"
                                                        aria-selected="false">Season 3</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content iq-tab-fade-up">
                                            <div class="tab-pane fade show active" id="pills-series1-season-one" role="tabpanel"
                                                tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/01.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Fire and Blood</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/02.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> - The
                                                                Pointy Endr</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/03.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - You
                                                                Win or You Die</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/04.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - The
                                                                Black Queen</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-series1-season-two" role="tabpanel" tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/05.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Valar Morghulis</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/06.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                                Blackwater</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/07.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - The
                                                                Ghost of Harrenhal</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/08.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                                Garden of Bones</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-series1-season-three" role="tabpanel"
                                                tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/09.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Mhysa</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/10.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                                Second Sons</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/11.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - The
                                                                Climb</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/12.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                                Kissed by Fire</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide tab-slider-banner p-0">
                    <div class="tab-slider-banner-images">
                        <img src="{{asset('assets')}}/main/img/tab-slider/02.html" alt="tab-slider-background">
                    </div>
                    <div class="block-images position-relative w-100">
                        <div class="container-fluid">
                            <div class="row align-items-center min-vh-100 h-100 my-4">
                                <div class="col-md-5 col-lg-5 col-xxl-5">
                                    <div class="tab-left-details">
                                        <div class="d-flex align-items-center gap-3 mb-4">
                                            <a href="javascriptvoid(0)%3b.html"><img
                                                    src="{{asset('assets')}}/main/img/movies/trending-label.html" class="img-fluid"
                                                    alt=""></a>
                                            <h5 class="text-gold"><span class="text-primary">#4</span> in Series Yesterday</h5>
                                        </div>
                                        <h1 class="mb-2 fw-500 text-capitalize texture-text">Pirates of Dayones</h1>
                                        <p class="mb-0 font-size-14 line-count-2">Sand and dust storms (SDS), also known as
                                            sirocco, haboob, yellow dust, white storms, and the harmattan, are a natural phenomenon
                                            linked with land</p>
                                        <ul class="d-flex align-items-center list-inline gap-2 movie-tag p-0 mt-3 mb-40">
                                            <li class="font-size-18">Nov 2022</li>
                                            <li class="font-size-18">Season 1</li>
                                        </ul>
                                        <div class="iq-button">
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative">
                                                <span class="button-text">stream
                                                    now</span>
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-2 col-xxl-3">
                                </div>
                                <div class="col-md-6 col-lg-5 col-xxl-4 mt-5 mt-md-0">
                                    <div class="tab-block">
                                        <h4 class="tab-title text-capitalize mb-0">All Episode</h4>
                                        <div class="tab-bottom-bordered border-0">
                                            <ul class="nav nav-tabs nav-pills mb-3 overflow-x-scroll" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series2-season-one" type="button" role="tab"
                                                        aria-selected="false">Season 1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series2-season-two" type="button" role="tab"
                                                        aria-selected="false">Season 2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series2-season-three" type="button" role="tab"
                                                        aria-selected="false">Season 3</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content iq-tab-fade-up">
                                            <div class="tab-pane fade show active" id="pills-series2-season-one" role="tabpanel"
                                                tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/13.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> - The
                                                                Curse of the Black Pearl</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/14.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                                Dead Man's Chest</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/15.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - At
                                                                World's End</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/16.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - On
                                                                Stranger Tides</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-series2-season-two" role="tabpanel" tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/17.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Dead Men Tell No Tales</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/18.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                                Tales of the Code</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/19.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                                Romance Dawn</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/20.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - The
                                                                Man in the Straw Hat</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-series2-season-three" role="tabpanel"
                                                tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/21.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Tell No Tales</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/22.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> - The
                                                                Pirates Are Coming</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/23.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> - Eat
                                                                at Baratie!</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/24.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> - The
                                                                Chef and the Chore Boy</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="swiper-slide tab-slider-banner p-0">
                    <div class="tab-slider-banner-images">
                        <img src="{{asset('assets')}}/main/img/tab-slider/03.html" alt="tab-slider-background">
                    </div>
                    <div class="block-images position-relative w-100">
                        <div class="container-fluid">
                            <div class="row align-items-center min-vh-100 h-100 my-4">
                                <div class="col-md-5 col-lg-5 col-xxl-5">
                                    <div class="tab-left-details">
                                        <div class="d-flex align-items-center gap-3 mb-4">
                                            <a href="javascriptvoid(0)%3b.html"><img
                                                    src="{{asset('assets')}}/main/img/movies/trending-label.html" class="img-fluid"
                                                    alt=""></a>
                                            <h5 class="text-gold"><span class="text-primary">#4</span> in Series tomorrow</h5>
                                        </div>
                                        <h1 class="mb-2 fw-500 text-capitalize texture-text">peaky blinders</h1>
                                        <p class="mb-0 font-size-14 line-count-2">Sand and dust storms (SDS), also known as
                                            sirocco, haboob, yellow dust, white storms, and the harmattan, are a natural phenomenon
                                            linked with land</p>
                                        <ul class="d-flex align-items-center list-inline gap-2 movie-tag p-0 mt-3 mb-40">
                                            <li class="font-size-18">Nov 2022</li>
                                            <li class="font-size-18">Season 1</li>
                                        </ul>
                                        <div class="iq-button">
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative">
                                                <span class="button-text">stream
                                                    now</span>
                                                <i class="fa-solid fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-lg-2 col-xxl-3">
                                </div>
                                <div class="col-md-6 col-lg-5 col-xxl-4 mt-5 mt-md-0">
                                    <div class="tab-block">
                                        <h4 class="tab-title text-capitalize mb-0">All Episode</h4>
                                        <div class="tab-bottom-bordered border-0">
                                            <ul class="nav nav-tabs nav-pills mb-3 overflow-x-scroll" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series3-season-one" type="button" role="tab"
                                                        aria-selected="false">Season 1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series3-season-two" type="button" role="tab"
                                                        aria-selected="false">Season 2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" data-bs-toggle="pill"
                                                        data-bs-target="#pills-series3-season-three" type="button" role="tab"
                                                        aria-selected="false">Season 3</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content iq-tab-fade-up">
                                            <div class="tab-pane fade show active" id="pills-series3-season-one" role="tabpanel"
                                                tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/25.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Episode 1</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/26.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                                Episode 2</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/27.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                                Episode 3</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/28.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                                Episode 4</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-series3-season-two" role="tabpanel" tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/29.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Episode 1</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/30.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                                Episode 2</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/31.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                                Episode 3</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/32.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                                Episode 4</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane fade" id="pills-series3-season-three" role="tabpanel"
                                                tabindex="0">
                                                <ul class="list-inline m-0 p-0">
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/33.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E1</span> -
                                                                Episode 1</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/34.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E2</span> -
                                                                Episode 2</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/35.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E3</span> -
                                                                Episode 3</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-3">
                                                        <div class="image-box flex-shrink-0">
                                                            <img src="{{asset('assets')}}/main/img/tv-show/season/36.html" alt="image-icon"
                                                                class="img-fluid rounded">
                                                        </div>
                                                        <div class="image-details">
                                                            <h6 class="mb-1 text-capitalize"><span class="text-primary">E4</span> -
                                                                Episode 4</h6>
                                                            <small>45 mins</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="joint-arrows">
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>

<div class="movie-geners-block">
    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">movie geners</h5>
                <a href="all-geners.html" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline geners-card">
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/01.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">action</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/02.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">adventure</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/03.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">animation</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/04.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">Crime</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/05.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">horror</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/06.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">mystery</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card-geners card-hover-style-two">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box rounded position-relative">
                                        <img src="{{asset('assets')}}/main/img/genre/07.html" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                                        <div class="blog-description">
                                            <h6 class="mb-0 iq-title"><a href="#" class="text-decoration-none text-capitalize line-count-2 p-2">romance</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="recommended-block">
    <div class="container-fluid">
        <section class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">recommended for you</h5>
                <a href="{{route('allmovies')}}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/recommended/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Giikre</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 12mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/recommended/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Arrival</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 22mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/recommended/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Pricess</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/recommended/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Soull Meate</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/recommended/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Dangacg</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 45mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/recommended/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">crcikeft</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 25mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/recommended/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Avengrs</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 45mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="top-pics-block">
    <div class="container-fluid">
        <section class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-md-3 px-1 my-4">
                <h5 class="main-title text-capitalize mb-0">Top pics for you</h5>
                <a href="{{route('allmovies')}}" class="text-primary iq-view-all text-decoration-none flex-none">View All</a>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="6" data-laptop="6" data-tab="3"
                    data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true"
                    data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/top-picks/01.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Frzzen</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">2hr : 12mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/top-picks/02.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">The Crew</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 22mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/top-picks/03.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Cromeus</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/top-picks/04.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">Reodg</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/top-picks/05.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">guiility</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/top-picks/06.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">syyvcihonic</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </li>
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{asset('assets')}}/main/img/movies/top-picks/07.html" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}">tittanc</a>
                                                </h5>
                                                <div class="movie-time d-flex align-items-center my-2">
                                                    <span class="movie-time-text font-normal">1hr : 30mins</span>
                                                </div>
                                            </div>
                                            <div class="watchlist">
                                                <a class="watch-list-not" href="playlist.html">
                                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-10">
                                                        <path d="M12 4V20M20 12H4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="watchlist-label"> Watchlist </span>
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
                                            <a href="{{route('details')}}" class="btn text-uppercase position-relative rounded-circle">
                                                <i class="fa-solid fa-play ms-0"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </li>
                    </ul>
                    <div class="swiper-button swiper-button-next"></div>
                    <div class="swiper-button swiper-button-prev"></div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection