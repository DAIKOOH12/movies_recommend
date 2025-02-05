@extends('layout.main_master')

@section('content')
<section class="section-padding">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="main-title text-capitalize mb-0">Movie Tag</h4>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 row-cols-xl-6">
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Action
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Adventure
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Animation
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Comedy
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Drama
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Family
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Fantasy
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        History
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Horror
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Mystery
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Recommended
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Sci-Fi
                    </span>
                </a>
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
            <h4 class="main-title text-capitalize mb-0">Tv-Show Tag</h4>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 row-cols-xl-6">
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        4K Ultra
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Brother
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Brother Relationship
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Kings
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        music
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Mythology
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Premieres
                    </span>
                </a>
            </div>
            <div class="col">
                <a href="{{route('allmovies')}}" class="iq-tag-box">
                    <span class="iq-tag">
                        Vikings
                    </span>
                </a>
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