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
							<select class="filter__select" name="genre" id="filter__genre">
								<option value="0">All genres</option>
								<option value="1">Action/Adventure</option>
								<option value="2">Animals</option>
								<option value="3">Animation</option>
								<option value="4">Biography</option>
								<option value="5">Comedy</option>
								<option value="6">Cooking</option>
								<option value="7">Dance</option>
								<option value="8">Documentary</option>
								<option value="9">Drama</option>
								<option value="10">Education</option>
								<option value="11">Entertainment</option>
								<option value="12">Family</option>
								<option value="13">Fantasy</option>
								<option value="14">History</option>
								<option value="15">Horror</option>
								<option value="16">Independent</option>
								<option value="17">International</option>
								<option value="18">Kids</option>
								<option value="19">Medical</option>
								<option value="20">Military/War</option>
								<option value="21">Music</option>
								<option value="22">Mystery/Crime</option>
								<option value="23">Nature</option>
								<option value="24">Paranormal</option>
								<option value="25">Politics</option>
								<option value="26">Racing</option>
								<option value="27">Romance</option>
								<option value="28">Sci-Fi/Horror</option>
								<option value="29">Science</option>
								<option value="30">Science Fiction</option>
								<option value="31">Science/Nature</option>
								<option value="32">Spanish</option>
								<option value="33">Travel</option>
								<option value="34">Western</option>
							</select>

							<select class="filter__select" name="quality" id="filter__quality">
								<option value="0">Any quality</option>
								<option value="1">HD 1080</option>
								<option value="2">HD 720</option>
								<option value="3">DVD</option>
								<option value="4">TS</option>
							</select>

							<select class="filter__select" name="rate" id="filter__rate">
								<option value="0">Any rating</option>
								<option value="1">from 3.0</option>
								<option value="2">from 5.0</option>
								<option value="3">from 7.0</option>
								<option value="4">Golder Star</option>
							</select>

							<select class="filter__select" name="sort" id="filter__sort">
								<option value="0">Relevance</option>
								<option value="1">Newest</option>
								<option value="2">Oldest</option>
							</select>
						</div>
						<!-- end filter desk -->

						<!-- apply btn -->
						<button class="filter__btn" type="button"><span>apply</span></button>
						<!-- end apply btn -->

						<!-- amount -->
						<span class="filter__amount">Showing 12 of 169</span>
						<!-- end amount -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end filter -->
	<div class="container-fluid">
		<div class="card-style-grid">
			<div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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


				</div>
				<div class="col mb-4">
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
				</div>
			</div>
		</div>
	</div>
</div>
@endsection