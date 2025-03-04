@extends('layout.main_master')

@section('content')
<section class="section-padding-bottom">
    <div class="profile-box" style="margin-top:100px">
        <div class="container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-3">
                    <div class="account-logo d-flex align-items-center position-relative">
                        <img src="{{asset('assets')}}/main/img/pages/profile.html" class="img-fluid object-cover rounded-3" alt="profile">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </div>
                    <div>
                        <h6 class="font-size-18 text-capitalize text-white fw-500">{{ Auth::user()->user_fullname }}</h6>
                        <span class="font-size-14 text-white fw-500">{{ Auth::user()->email }}</span>
                    </div>
                </div>
                <div class="iq-button">
                    <a href="pricing-plan.html" class="btn text-uppercase position-relative">
                        <span class="button-text">Subscription</span>
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs">
        <div class="container-fluid">
            <div class="content-details iq-custom-tab-style-two">
                <ul class="d-flex justify-content-center nav nav-pills tab-header" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="pill" href="#playlist" role="tab" aria-selected="true">Watchlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#favorites" role="tab" aria-selected="false">Favorites</a>
                    </li>
                </ul>
                <div class="tab-content px-0">
                    <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                        <div class="overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between my-4">
                                <h5 class="main-title text-capitalize mb-0">My watchlists</h5>
                            </div>
                            @if($watchlists==null||$watchlists->isEmpty())
                            <p class="text-center">You don't have any watchlist. Please create one</p>
                            @else
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                @foreach($watchlists as $item)
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="{{route('detailwatchlist',['id'=>$item->wishlist_id,'slug'=>Str::slug($item->wishlist_title) ])}}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="{{ asset('assets/main/img') }}/{{ $item->wishlist_image==null?'logo.jpg':$item->wishlist_image }}" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="#">{{ $item->wishlist_title }}</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">{{ $item->wishlist_state }}</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            <div class="text-center">
                                <div class="iq-button">
                                    <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                        <span class="button-text">Create Playlist</span>
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
</section>
<div class="modal fade" id="addNewPlaylist" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content border-0" style="background-color: #141314;">
            <div class="modal-header border-0">
                <div>
                    <h1 class="modal-title text-capitalize fs-5 fw-500">Create new Watchlist</h1>
                    <p class="mb-0">Please fill in all information below to create new watchlist.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($errors->any())
                @foreach($errors->all() as $error)
                <p style="color:red;min-width:100%;margin:3px 0">*{{ $error }}</p>
                @endforeach
                @endif
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-white fw-500 mb-2">Name *</label>
                        <input type="text" class="form-control" name="wl-name" placeholder="Enter watchlist's name">
                    </div>
                    <div class="form-group">
                        <label class="text-white fw-500 mb-2">Description</label>
                        <textarea class="form-control" cols="5" name="wl-description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="text-white fw-500 mb-2">Privacy</label>
                        <select class="form-control" name="wl-privacy">
                            <option value="public">Public</option>
                            <option value="private">Private</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-white fw-500">Watchlist Thumbnail</label>
                        <small class="d-block my-2">Support *jpg, *jpeg, *png. Maximun upload file size: 5MB.</small>
                        <input type="file" class="form-control" name="wl-thumbnail" accept="image/x-png,image/jpeg">
                    </div>
                    <div class="form-group d-flex align-items-center gap-3">
                        <button class="btn btn-sm btn-light text-uppercase fw-medium">cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary text-uppercase fw-medium">save</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection