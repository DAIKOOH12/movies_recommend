@extends('layout.main_master')

@section('content')
<section class="section-padding">
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 row-cols-xl-6">
            @foreach($list as $cast)
            <div class="col">
                <div class="iq-cast">
                    <img src="{{ env('TMDB_CAST_URL') }}{{ $cast['profile_path'] }}" class="img-fluid" alt="castImg" />
                    <div class="card-img-overlay iq-cast-body">
                        <h6 class="cast-title fw-500">
                            <a href="{{route('actorinfo')}}/{{ $cast['id'].'-'.Str::slug($cast['name']) }}">{{ $cast['name'] }}</a>
                        </h6>
                        <span class="cast-subtitle">{{ $cast['known_for_department'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $paginated_movies->links("pagination::bootstrap-4") }}
    </div>
</section>
@endsection