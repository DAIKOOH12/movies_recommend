@extends('layout.main_master')

@section('content')
<!-- page title -->
<section class="section section--first section--bg" data-bg="{{asset('assets')}}/main/img/bg/section__bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <h1 class="section__title section__title--head">Pricing Plans</h1>
                    <!-- end section title -->

                    <!-- breadcrumbs -->
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="index.html">Home</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">Pricing plans</li>
                    </ul>
                    <!-- end breadcrumbs -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- pricing -->
<div class="section">
    <div class="container">
        <div class="row">
            <!-- price -->
            <div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
                <div class="plan plan--mt0">
                    <h3 class="plan__title">Starter</h3>
                    <span class="plan__price">Free</span>
                    <ul class="plan__list">
                        <li>7 days</li>
                        <li>720p Resolution</li>
                        <li>Limited Availability</li>
                        <li>Desktop Only</li>
                        <li>Limited Support</li>
                    </ul>
                    <a href="signin.html" class="plan__btn"><span>Register</span></a>
                </div>
            </div>
            <!-- end price -->

            <!-- price -->
            <div class="col-12 col-lg-4 order-md-1 order-lg-2">
                <div class="plan plan--premium plan--mt1">
                    <h3 class="plan__title">Premium</h3>
                    <span class="plan__price">$19.99</span>
                    <ul class="plan__list">
                        <li>1 Month</li>
                        <li>Full HD</li>
                        <li>Lifetime Availability</li>
                        <li>TV & Desktop</li>
                        <li>24/7 Support</li>
                    </ul>
                    <button type="button" data-bs-toggle="modal" class="plan__btn" data-bs-target="#plan-modal"><span>Choose plan</span></button>
                </div>
            </div>
            <!-- end price -->

            <!-- price -->
            <div class="col-12 col-md-6 col-lg-4 order-md-3 order-lg-3">
                <div class="plan plan--mt2">
                    <h3 class="plan__title">Cinematic</h3>
                    <span class="plan__price">$39.99</span>
                    <ul class="plan__list">
                        <li>2 Months</li>
                        <li>Ultra HD</li>
                        <li>Lifetime Availability</li>
                        <li>Any Device</li>
                        <li>24/7 Support</li>
                    </ul>
                    <button type="button" data-bs-toggle="modal" class="plan__btn" data-bs-target="#plan-modal"><span>Choose plan</span></button>
                </div>
            </div>
            <!-- end price -->
        </div>
    </div>
</div>
<!-- end pricing -->

<!-- features -->
<section class="section section--dark">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title">Our Features</h2>
                <p class="section__text">Welcome to <b>FlixGo</b> movie site, the ultimate destination for all film enthusiasts. Immerse yourself in a world of captivating stories, stunning visuals, and unforgettable performances. Explore our extensive library of movies, spanning across genres, eras, and cultures.</p>
            </div>
            <!-- end section title -->

            <!-- feature -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M19,2H5A3,3,0,0,0,2,5V15a3,3,0,0,0,3,3H7.64l-.58,1a2,2,0,0,0,0,2,2,2,0,0,0,1.75,1h6.46A2,2,0,0,0,17,21a2,2,0,0,0,0-2l-.59-1H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM8.77,20,10,18H14l1.2,2ZM20,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V14H20Zm0-3H4V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                        </svg>
                    </span>
                    <h3 class="feature__title">Ultra HD</h3>
                    <p class="feature__text">Experience movies like never before with our Ultra HD feature. Immerse yourself in stunning visuals, vibrant colors, and crystal-clear detail.</p>
                </div>
            </div>
            <!-- end feature -->

            <!-- feature -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M21,2a1,1,0,0,0-1,1V5H18V3a1,1,0,0,0-2,0V4H8V3A1,1,0,0,0,6,3V5H4V3A1,1,0,0,0,2,3V21a1,1,0,0,0,2,0V19H6v2a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V19h2v2a1,1,0,0,0,2,0V3A1,1,0,0,0,21,2ZM6,17H4V15H6Zm0-4H4V11H6ZM6,9H4V7H6Zm10,9H8V13h8Zm0-7H8V6h8Zm4,6H18V15h2Zm0-4H18V11h2Zm0-4H18V7h2Z" />
                        </svg>
                    </span>
                    <h3 class="feature__title">Large movie database</h3>
                    <p class="feature__text">Discover a vast and diverse collection of movies in our extensive database. With thousands of titles to choose from, you'll never run out of options.</p>
                </div>
            </div>
            <!-- end feature -->

            <!-- feature -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M18,6H14.41l2.3-2.29a1,1,0,1,0-1.42-1.42L12,5.54l-1.17-2a1,1,0,1,0-1.74,1L10,6H6A3,3,0,0,0,3,9v8a3,3,0,0,0,3,3v1a1,1,0,0,0,2,0V20h8v1a1,1,0,0,0,2,0V20a3,3,0,0,0,3-3V9A3,3,0,0,0,18,6Zm1,11a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V9A1,1,0,0,1,6,8H18a1,1,0,0,1,1,1Z"></path>
                        </svg>
                    </span>
                    <h3 class="feature__title">Online TV</h3>
                    <p class="feature__text">Expand your entertainment horizons with our Online TV. Stream live TV channels, catch up on your favorite shows, and enjoy a wide range of television content online.</p>
                </div>
            </div>
            <!-- end feature -->

            <!-- feature -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z"></path>
                        </svg>
                    </span>
                    <h3 class="feature__title">Early access to new items</h3>
                    <p class="feature__text">Be the first to experience the latest movies and exclusive content with our Early Access feature. Get a sneak peek into upcoming releases, gain access to special screenings, and stay ahead of the curve.</p>
                </div>
            </div>
            <!-- end feature -->

            <!-- feature -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M12.83,13.45a1,1,0,0,0-1.66,0l-4,6a1,1,0,0,0,0,1A1,1,0,0,0,8,21h8a1,1,0,0,0,.88-.53,1,1,0,0,0-.05-1ZM9.87,19,12,15.8,14.13,19ZM19,3H5A3,3,0,0,0,2,6v9a3,3,0,0,0,3,3h.85a1,1,0,1,0,0-2H5a1,1,0,0,1-1-1V6A1,1,0,0,1,5,5H19a1,1,0,0,1,1,1v9a1,1,0,0,1-1,1h-.85a1,1,0,0,0,0,2H19a3,3,0,0,0,3-3V6A3,3,0,0,0,19,3Z"></path>
                        </svg>
                    </span>
                    <h3 class="feature__title">Airplay</h3>
                    <p class="feature__text">Seamlessly stream movies from your device to the big screen with Airplay integration. Experience the cinematic magic in the comfort of your living room and share the excitement with friends and family.</p>
                </div>
            </div>
            <!-- end feature -->

            <!-- feature -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M21.05566,12h-2a1,1,0,0,0,0,2v2H17.8714a2.96481,2.96481,0,0,0,.18426-1A2.99955,2.99955,0,0,0,12.458,13.50049a.99992.99992,0,1,0,1.73242.999A1.0009,1.0009,0,0,1,15.05566,14a1,1,0,0,1,0,2,1,1,0,0,0,0,2,1,1,0,1,1,0,2,1.0009,1.0009,0,0,1-.86523-.49951.99992.99992,0,1,0-1.73242.999A2.99955,2.99955,0,0,0,18.05566,19a2.96481,2.96481,0,0,0-.18426-1h1.18426v3a1,1,0,0,0,2,0V14a1,1,0,1,0,0-2ZM9.08594,11.24268a.99963.99963,0,1,0,1.93945-.48536L9.26855,3.72754a2.28044,2.28044,0,0,0-4.4248,0L3.08594,10.75732a.99963.99963,0,1,0,1.93945.48536L5.58618,9H8.52545ZM6.0863,7l.6969-2.78711a.29222.29222,0,0,1,.5459,0L8.02563,7Zm7.96936,0h1a1.001,1.001,0,0,1,1,1V9a1,1,0,0,0,2,0V8a3.00328,3.00328,0,0,0-3-3h-1a1,1,0,0,0,0,2Zm-4,9h-1a1.001,1.001,0,0,1-1-1V14a1,1,0,0,0-2,0v1a3.00328,3.00328,0,0,0,3,3h1a1,1,0,0,0,0-2Z"></path>
                        </svg>
                    </span>
                    <h3 class="feature__title">Multi language subtitles</h3>
                    <p class="feature__text">Break language barriers and enjoy movies from around the world with our multi-language subtitles. Explore different cultures, expand your cinematic horizons, and appreciate the beauty of global cinema.</p>
                </div>
            </div>
            <!-- end feature -->
        </div>
    </div>
</section>
<!-- end features -->

<!-- partners -->
<section class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12 col-xl-10">
                <h2 class="section__title">Our Partners</h2>

                <p class="section__text">We strive for long-term cooperation with our partners, and our team is always ready to meet and consider new opportunities for mutual benefits. If you would like to become our partner, we are always open to new offers and look forward to hearing from you. <a href="contacts.html">Become a partner</a></p>
            </div>
            <!-- end section text -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="partners">
                    <a href="#" class="partners__item">
                        <img src="{{asset('assets')}}/main/img/partners/themeforest-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__item">
                        <img src="{{asset('assets')}}/main/img/partners/audiojungle-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__item">
                        <img src="{{asset('assets')}}/main/img/partners/codecanyon-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__item">
                        <img src="{{asset('assets')}}/main/img/partners/photodune-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__item partners__item--prelast">
                        <img src="{{asset('assets')}}/main/img/partners/activeden-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__item partners__item--last">
                        <img src="{{asset('assets')}}/main/img/partners/3docean-light-background.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end partners -->
@endsection