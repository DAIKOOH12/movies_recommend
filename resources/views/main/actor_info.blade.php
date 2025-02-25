@extends('layout.main_master')

@section('content')

<div class="section-padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-5">
        <div class="cast-box position-relative">
          <img src="{{ env('TMDB_CAST_URL') }}{{ $cast_detail['profile_path'] }}" class="img-fluid object-cover w-100" alt="person"
            loading="lazy">
          <ul class="p-0 m-0 list-unstyled widget_social_media position-absolute w-100 text-center">
            <li>
              <a href="https://www.facebook.com/" class="position-relative">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/" class="position-relative">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://github.com/" class="position-relative">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/" class="position-relative">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
        <h5 class="mt-5 mb-4 text-white fw-500">Personal Details</h5>
        <h6 class="font-size-18 text-white fw-500">Official Sites :</h6>
        <p><a href="https://iqonic.design/" target="_blank" class="text-uppercase">Iqonic Design</a></p>
        <h6 class="font-size-18 text-white fw-500">Born :</h6>
        <div class="seperator d-flex align-items-center flex-wrap mb-3">
          <span>{{ date('d F Y',strtotime($cast_detail['birthday'])) }}</span>
          <span class="circle"></span>
          <span>{{ $cast_detail['place_of_birth'] }}</span>
        </div>
        <h6 class="font-size-18 text-white fw-500">Gender :</h6>
        <p>{{ $cast_detail['gender']==1?"Female":"Male" }}</p>
      </div>
      <div class="col-lg-9 col-md-7 mt-5 mt-md-0">
        <h4 class="fw-500">{{ $cast_detail['name'] }}</h4>
        <div class="seperator d-flex align-items-center flex-wrap mb-3">
          @foreach($cast_detail['also_known_as'] as $item)
          <span class="fw-semibold">{{ $item }}</span>
          <span class="circle"></span>
          @endforeach
        </div>
        <p>{!! $cast_detail['biography'] !!}</p>
        <div class="awards-box border-bottom">
          <h5>Awards</h5>
          <span class="text-white fw-500">56 WINS & 83 NOMINATIONS</span>
        </div>
        <div class="pb-md-5">
          <h5 class="main-title text-capitalize mb-4">Most View Movies</h5>
          <div class="card-style-grid mb-5">
            <div class="row row-cols-xl-5 row-cols-sm-2 row-cols-1">
              @foreach($most_views as $m)
              <div class="col mb-4">
                <div class="iq-card card-hover">
                  <div class="block-images position-relative w-100">
                    <div class="img-box w-100">
                      <a href="{{route('details')}}/{{ $m['id'] }}-{{ Str::slug($m['title']) }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                      <img src="{{ env('TMDB_URL') }}{{ $m['poster_path'] }}" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                    </div>
                    <div class="card-description with-transition">
                      <div class="cart-content">
                        <div class="content-left">
                          <h5 class="iq-title text-capitalize">
                            <a href="{{route('details')}}/{{ $m['id'] }}-{{ Str::slug($m['title']) }}">{{ $m['title'] }}</a>
                          </h5>
                          <div class="movie-time d-flex align-items-center my-2">
                            <span class="movie-time-text font-normal">Voted: {{ $m['vote_count'] }}</span>
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
                        <a href="{{route('details')}}/{{ $m['id'] }}-{{ Str::slug($m['title']) }}" class="btn text-uppercase position-relative rounded-circle">
                          <i class="fa-solid fa-play ms-0"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="col d-xl-block d-none"></div>
            </div>
          </div>
        </div>
        <div class="content-details trending-info">
          <ul class="nav nav-underline d-flex nav nav-pills align-items-center text-center mb-5 gap-5" role="tablist">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="pill" href="#all" role="tab" aria-selected="true">
                Movies
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="movies" class="tab-pane animated fadeInUp active show" role="tabpanel">
              <div class="description-content">
                <div class="table-responsive">
                  <table class="table">
                    <tbody>
                      @php $i=0; @endphp
                      @foreach($most_views as $movie_item)
                      <tr>
                        <td class="w-15"><img src="{{ env('TMDB_URL') }}{{ $movie_item['poster_path'] }}" alt="image-icon"
                            class="img-fluid person-img object-cover"></td>
                        <td class="w-20">
                          <div class="font-size-18 d-flex gap-4 text-white fw-500">
                            <span>{{ ++$i }}</span>
                            <span class="text-capitalize"> {{ $cast_detail['name'] }} <span class="fw-normal text-body">as {{ $movie_item['character'] }}</span></span>
                          </div>
                        </td>
                        <td><span class="fw-500 font-size-18 text-white">{{ date('Y',strtotime($movie_item['release_date'])) }}</span></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection