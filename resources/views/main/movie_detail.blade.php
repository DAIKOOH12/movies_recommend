@extends('layout.main_master')

@section('content')
<!-- Banner Start -->
<div class="iq-main-slider site-video" style="margin-top:100px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-0">
                    <iframe height="788" src="https://www.youtube.com/embed/{{ $movie_detail['key_trailer'] }}" title="Marvel Studios&#39; Avengers: Infinity War Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" id="my-video" allowfullscreen style="min-width: 100%"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<div class="details-part">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <!-- Movie Description Start-->
                <div class="trending-info mt-4 pt-0 pb-4">
                    <div class="row">
                        <div class="col-md-9 col-12 mb-auto">
                            <div class="d-block d-lg-flex align-items-center">
                                <h2 class="trending-text fw-bold texture-text text-uppercase my-0 fadeInLeft animated d-inline-block"
                                    data-animation-in="fadeInLeft" data-delay-in="0.6" style="opacity: 1; animation-delay: 0.6s">
                                    {{ $movie_detail['title'] }}
                                </h2>
                                <div class="slider-ratting d-flex align-items-center ms-lg-3 ms-0">
                                    <ul class="ratting-start p-0 m-0 list-inline text-warning d-flex align-items-center justify-content-left">
                                        @php
                                        $i=1;
                                        @endphp
                                        @while ($i<$movie_detail['vote_average'])
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            @php $i++; @endphp
                                            @endwhile
                                            @if(!is_int($movie_detail['vote_average']))
                                            <li><i class="fa fa-star-half" aria-hidden="true"></i></li>
                                            @endif
                                    </ul>
                                    <span class="text-white ms-2">{{ round($movie_detail['vote_average'],1) }} (tmdb)</span>
                                </div>
                            </div>
                            <ul class="p-0 mt-2 list-inline d-flex flex-wrap movie-tag">
                                @foreach($movie_detail['genres'] as $genre)
                                <li class="trending-list"><a class="text-primary" href="{{route('allmovies')}}/genres/{{ $genre['id'] }}-{{ Str::slug($genre['name']) }}">{{ $genre['name'] }}</a></li>
                                @endforeach
                            </ul>
                            <div class="d-flex flex-wrap align-items-center text-white text-detail flex-wrap mb-4">
                                <span class="badge bg-secondary">{{ $movie_detail['certificate'] }}</span>
                                <span class="ms-3 font-Weight-500 genres-info me-1">
                                    @php
                                    $time=$movie_detail['runtime'];
                                    $runtime=intdiv($time, 60);
                                    $remainingMinutes = $time % 60;
                                    @endphp
                                    {{ $runtime }}h {{ $remainingMinutes }}m -
                                </span>
                                <span class="trending-year trending-year-list font-Weight-500 genres-info">
                                    {{ date('d F Y',strtotime($movie_detail['release_date'])) }}
                                </span>
                            </div>
                            <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                <ul class="list-inline p-0 share-icons music-play-lists mb-n2 mx-n2">
                                    <li class="share">
                                        <span><i class="fa-solid fa-share-nodes"></i></span>
                                        <div class="share-box">
                                            <svg width="15" height="40" viewBox="0 0 15 40" class="share-shape" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.8842 40C6.82983 37.2868 1 29.3582 1 20C1 10.6418 6.82983 2.71323 14.8842 0H0V40H14.8842Z"
                                                    fill="#191919"></path>
                                            </svg>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="share-ico"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#" class="share-ico"><i class="fa-brands fa-twitter"></i></a>
                                                <a href="#" class="share-ico"><i class="fa-solid fa-link"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><span><i class="fa-solid fa-heart"></i></span></li>
                                    <li><span><i class="fa-solid fa-plus"></i></span></li>
                                    <li><span><a href="{{asset('assets')}}/main/img/video/trailer.mp4" download><i
                                                    class="fa-solid fa-download"></i></a></span></li>
                                </ul>
                            </div>
                            <ul class="iq-blogtag list-unstyled d-flex flex-wrap align-items-center gap-3 p-0">
                                <li class="iq-tag-title text-primary mb-0">
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    Tags:
                                </li>
                                @foreach($movie_detail['tags'] as $tag)
                                <li><a class="title" href="{{route('allmovies')}}">{{ $tag['name'] }}</a><span class="text-secondary">,</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="trailor-video col-md-3 col-12 mt-lg-0 mt-4 mb-md-0 mb-1 text-lg-right">
                            <a data-fslightbox="html5-video" href="https://www.youtube.com/watch?v={{ $movie_detail['key_trailer'] }}"
                                class="video-open playbtn block-images position-relative playbtn_thumbnail">
                                <img src="https://image.tmdb.org/t/p/w1280{{ $movie_detail['backdrop_path'] }}" class="attachment-medium-large size-medium-large wp-post-image"
                                    alt="" loading="lazy" />
                                <span class="content btn btn-transparant iq-button">
                                    <i class="fa fa-play me-2 text-white"></i>
                                    <span>Trailer Link</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Movie Description End --> <!-- Movie Source Start -->
                <div class="content-details trending-info">
                    <ul
                        class="iq-custom-tab tab-bg-gredient-center d-flex nav nav-pills align-items-center text-center mb-5 justify-content-center list-inline"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="pill"
                                href="#description-01" role="tab" aria-selected="true">
                                Description
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#review-01" role="tab"
                                aria-selected="false">
                                Rate &amp; Review
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description-01" class="tab-pane animated fadeInUp active show"
                            role="tabpanel">
                            <div class="description-content">
                                <p>
                                    {{ $movie_detail['overview'] }}
                                </p>
                            </div>
                        </div>
                        <div id="review-01" class="tab-pane animated fadeInUp" role="tabpanel">
                            <div class="streamit-reviews">
                                <div id="comments" class="comments-area validate-form">
                                    <p class="masvideos-noreviews mt-3">
                                        There are no reviews yet.
                                    </p>
                                </div>
                                <div class="review_form">
                                    <div class="comment-respond">
                                        <h3 class="fw-500 my-2">
                                            Be the first to review “Zombie Island”
                                        </h3>
                                        <p class="comment-notes"><span>Your email address will not be
                                                published.</span><span> Required fields are marked<span
                                                    class="required"> * </span></span></p>
                                        <div class="d-flex align-items-center mb-4"><label>Your
                                                rating</label>
                                            <div class="star ms-4 text-primary"><span><i
                                                        class="fa-regular fa-star"></i></span> <span><i
                                                        class="fa-regular fa-star"></i></span> <span><i
                                                        class="fa-regular fa-star"></i></span> <span><i
                                                        class="fa-regular fa-star"></i></span> <span><i
                                                        class="fa-regular fa-star"></i></span></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mb-2">
                                                        Your review
                                                        <span class="required">
                                                            *
                                                        </span>
                                                    </label>
                                                    <textarea class="form-control" name="comment" cols="5"
                                                        rows="8" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-2">
                                                        Name
                                                        <span class="required">
                                                            *
                                                        </span>
                                                    </label>
                                                    <input class="form-control" name="author" type="text" value
                                                        size="30" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-2">
                                                        Email&nbsp;
                                                        <span class="required">
                                                            *
                                                        </span>
                                                    </label>
                                                    <input class="form-control" name="email" type="email" value
                                                        size="30" required />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mt-3 mt-3 d-flex gap-2 align-items-center">
                                                    <input class="form-check-input mt-0" type="checkbox" value
                                                        id="check1" checked />
                                                    <label class="form-check-label" for="check1">
                                                        Save my name, email, and website in this browser for the
                                                        next time I comment.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-submit mt-4">
                                                    <div class="iq-button">
                                                        <button name="submit" type="submit" id="submit"
                                                            class="btn text-uppercase position-relative"
                                                            value="Submit">
                                                            <span class="button-text">Submit</span>
                                                            <i class="fa-solid fa-play"></i>
                                                        </button>
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
                <!-- Movie Source End -->
            </div>
        </div>
    </div>
</div>

<div class="cast-tabs">
    <div class="container-fluid">
        <div class="content-details trending-info g-border iq-rtl-direction">
            <ul class="iq-custom-tab tab-bg-fill d-flex nav nav-pills mb-5 " role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="pill" href="#cast-1" role="tab" aria-selected="true">Cast</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="cast-1" class="tab-pane animated fadeInUp active show" role="tabpanel">
                    <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2"
                        data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
                        <ul class="list-inline swiper-wrapper">
                            @foreach($movie_detail['cast_represent'] as $cast)
                            <li class="swiper-slide">
                                <div class="cast-images m-0 row align-items-center position-relative">
                                    <div class="col-4 img-box p-0">
                                        <img src="https://image.tmdb.org/t/p/w200{{ $cast['profile_path'] }}" class="img-fluid" alt="image" loading="lazy">
                                    </div>
                                    <div class="col-8 block-description">
                                        <h6 class="iq-title">
                                            <a href="person-detail.html" tabindex="0">{{ $cast['name'] }}</a>
                                        </h6>
                                        <div class="video-time d-flex align-items-center my-2">
                                            <small class="text-white">As {{ $cast['character'] }}</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="recommended-block">
    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-3 pt-2 my-4">
                <h5 class="main-title text-capitalize mb-0">Movies Recommended</h5>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
                    data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        @foreach($recommendations as $recom)
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}/{{ $recom['id'] }}-{{ Str::slug($recom['title']) }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="https://image.tmdb.org/t/p/w1280{{ $recom['poster_path'] }}" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}/{{ $recom['id'] }}-{{ Str::slug($recom['title']) }}">{{ $recom['title'] }}</a>
                                                </h5>
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
                                            <a href="{{route('details')}}/{{ $recom['id'] }}-{{ Str::slug($recom['title']) }}" class="btn text-uppercase position-relative rounded-circle">
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
</section>
<section class="related-movie-block">
    <div class="container-fluid">
        <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-3 pt-2 my-4">
                <h5 class="main-title text-capitalize mb-0">Related Movies</h5>
            </div>
            <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="2" data-mobile="2"
                    data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                    <ul class="p-0 swiper-wrapper m-0  list-inline">
                        @foreach($related as $rel)
                        <li class="swiper-slide">
                            <div class="iq-card card-hover">
                                <div class="block-images position-relative w-100">
                                    <div class="img-box w-100">
                                        <a href="{{route('details')}}/{{ $rel['id'] }}-{{ Str::slug($rel['title']) }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="https://image.tmdb.org/t/p/w1280{{ $rel['poster_path'] }}" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                    </div>
                                    <div class="card-description with-transition">
                                        <div class="cart-content">
                                            <div class="content-left">
                                                <h5 class="iq-title text-capitalize">
                                                    <a href="{{route('details')}}/{{ $rel['id'] }}-{{ Str::slug($rel['title']) }}">{{ $rel['title'] }}</a>
                                                </h5>
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
                                            <a href="{{route('details')}}/{{ $rel['id'] }}-{{ Str::slug($rel['title']) }}" class="btn text-uppercase position-relative rounded-circle">
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
</section>
@endsection