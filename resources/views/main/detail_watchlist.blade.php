@extends('layout.main_master')

@section('content')
<section class="section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="playlist-main-banner position-relative">
                    <a href="video-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0 z-1"></a>
                    <div class="img-box">
                        <img src="{{ asset('assets/main/img') }}/{{ $watchlist->wishlist_image==null?'logo.jpg':$watchlist->wishlist_image }}" alt="movie-card" class="img-fluid object-cover d-block">
                    </div>
                    <div class="img-detail z-3">
                        <a data-fslightbox="html5-video" href="" class="video-open playbtn text-decoration-none"
                            tabindex="0">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" width="25px" height="25px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7"
                                xml:space="preserve">
                                <polygon class="triangle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 "></polygon>
                                <circle class="circle" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"></circle>
                            </svg>
                            <span class="w-trailor text-uppercase font-size-14 ms-2 fw-500">Watch Trailer</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="playlist-listing mt-4 mt-md-0">
                    <h4 class="fw-500">Playlist Demo 1</h4>
                    <div class="seperator d-flex align-items-center">
                        <span class="text-body fw-semibold font-size-12 text-capitalize">{{ $watchlist->wishlist_state }}</span>
                        <span class="circle circle-small"></span>
                        <span class="text-body fw-semibold font-size-12 text-capitalize">{{ count($movies) }} movies</span>
                    </div>
                    <ul class="list-inline mt-3 mt-md-5 p-0">
                        @foreach($movies as $movie)
                        <li>
                            <div class="watchlist-warpper card-style-two">
                                <div class="block-images d-flex align-items-center flex-wrap gap-2 gap-md-3">
                                    <div class="img-box">
                                        <a href="{{ route('details') }}/{{ $movie['id']}}-{{ Str::slug($movie['title']) }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                        <img src="{{ env('TMDB_URL') }}/{{ $movie['backdrop_path'] }}" alt="movie-card" class="img-fluid object-cover d-block border-0">
                                    </div>
                                    <div class="card-description">
                                        <h5 class="text-capitalize fw-500"> <a href="{{ route('details') }}/{{ $movie['id']}}-{{ Str::slug($movie['title']) }}">{{ $movie['title'] }}</a> </h5>
                                        <div class="seperator d-flex align-items-center">
                                            <span class="text-body fw-semibold font-size-12 text-capitalize"></span>
                                            <span class="circle circle-small"></span>
                                            <span class="text-body fw-semibold font-size-12 text-capitalize"></span>
                                        </div>
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
</section>
@endsection