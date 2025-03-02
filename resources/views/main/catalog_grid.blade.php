@extends('layout.main_master')

@section('content')
<section class="section-padding">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h4 class="main-title text-capitalize mb-0">Movie Genres</h4>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            @foreach($genres_list as $item)
            <div class="col mb-4">
                <div class="iq-card-geners card-hover-style-two">
                    <div class="block-images position-relative w-100">
                        <div class="img-box rounded position-relative">
                            <img src="{{asset('assets')}}/main/img/genre/bgr_genre.jpg" alt="geners-img" class="img-fluid object-cover w-100 rounded">
                            <div class="blog-description">
                                <h6 class="mb-0 iq-title"><a href="{{route('allmovies')}}/genres/{{ $item['id'] }}-{{ Str::slug($item['name']) }}" class="text-decoration-none text-capitalize line-count-2 p-2">{{ $item['name'] }}</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection