@extends('layout.main_master')

@section('content')
<div class="section-padding">
	<!-- filter -->
	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<!-- menu btn -->
						<button class="filter__menu" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M19,2H5A3,3,0,0,0,2,5V6.17a3,3,0,0,0,.25,1.2l0,.06a2.81,2.81,0,0,0,.59.86L9,14.41V21a1,1,0,0,0,.47.85A1,1,0,0,0,10,22a1,1,0,0,0,.45-.11l4-2A1,1,0,0,0,15,19V14.41l6.12-6.12a2.81,2.81,0,0,0,.59-.86l0-.06A3,3,0,0,0,22,6.17V5A3,3,0,0,0,19,2ZM13.29,13.29A1,1,0,0,0,13,14v4.38l-2,1V14a1,1,0,0,0-.29-.71L5.41,8H18.59ZM20,6H4V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z"></path>
							</svg>Filter</button>
						<!-- end menu btn -->

						<!-- filter desk -->
						<div class="filter__items">
							<span>Runtime:</span>
							<select class="filter__select" name="runtiume" id="filter__runtime">
								<option value="0">None</option>
								<option value="" data-gte="60" data-lte="119">1 hour+</option>
								<option value="" data-gte="120" data-lte="179">2 hours+</option>
								<option value="" data-gte="180" data-lte="300">3 hours+</option>
							</select>

							<span>Voted:</span>
							<select class="filter__select" name="rate" id="filter__rate">
								<option value="0">None</option>
								<option value="" data-gte="4" data-lte="5">4 - 5</option>
								<option value="" data-gte="5" data-lte="6">5 - 6</option>
								<option value="" data-gte="6" data-lte="7">6 - 7</option>
								<option value="" data-gte="7" data-lte="8">7 - 8</option>
								<option value="" data-gte="8" data-lte="10">8+</option>
							</select>

							<span>Order By:</span>
							<select class="filter__select" name="sort" id="filter__sort">
								<option value="">None</option>
								<option value="vote_count.desc">Most Voted</option>
								<option value="primary_release_date.desc">Newest</option>
								<option value="primary_release_date.asc">Oldest</option>
							</select>
						</div>
						<!-- end filter desk -->

						<!-- apply btn -->
						<button class="filter__btn" id="filter__btn" type="button"><span>apply</span></button>
						<!-- end apply btn -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->
	<div class="container-fluid">
		<div class="card-style-grid">
			<div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
				@foreach($list as $item)
				<div class="col mb-4">
					<div class="iq-card card-hover">
						<div class="block-images position-relative w-100">
							<div class="img-box w-100">
								<a href="{{route('details')}}/{{ $item['id'] }}-{{ Str::slug($item['title']) }}" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
								<img src="{{ env('TMDB_URL') }}{{ $item['poster_path'] }}" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
							</div>
							<div class="card-description with-transition">
								<div class="cart-content">
									<div class="content-left">
										<h5 class="iq-title text-capitalize">
											<a href="{{route('details')}}/{{ $item['id'] }}">{{ $item['title'] }}</a>
										</h5>
										<div class="movie-time d-flex align-items-center my-2">
											<span class="movie-time-text font-normal">Voted: {{ $item['vote_count'] }}</span>
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
									<a href="{{route('details')}}/{{ $item['id'] }}" class="btn text-uppercase position-relative rounded-circle">
										<i class="fa-solid fa-play ms-0"></i>
									</a>
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
@endsection

@section('scripts')
<script src="{{asset('assets')}}/main/js/movies-filter.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection