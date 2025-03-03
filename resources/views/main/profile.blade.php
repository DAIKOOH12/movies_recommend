@extends('layout.main_master')

@section('content')
<!-- page title -->
<section class="section section--first section--bg" data-bg="{{asset('assets')}}/main/img/bg/section__bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <h1 class="section__title section__title--head">My FlixGo</h1>
                    <!-- end section title -->

                    <!-- breadcrumbs -->
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item"><a href="index.html">Home</a></li>
                        <li class="breadcrumbs__item breadcrumbs__item--active">Profile</li>
                    </ul>
                    <!-- end breadcrumbs -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- content -->
<div class="content">
    <!-- profile -->
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profile__content">
                        <div class="profile__user">
                            <div class="profile__avatar">
                                <img src="{{asset('assets')}}/main/img/user.svg" alt="">
                            </div>
                            <div class="profile__meta">
                                <h3>Username</h3>
                                <span>FlixGo ID: 23562</span>
                            </div>
                        </div>

                        <!-- content tabs nav -->
                        <ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button id="1-tab" class="active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">Profile</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button id="2-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button id="3-tab" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false">Settings</button>
                            </li>
                        </ul>
                        <!-- end content tabs nav -->

                        <button class="profile__logout" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z" />
                            </svg>
                            <span>Logout</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end profile -->

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
                <div class="row">
                    <!-- stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats">
                            <span>Premium plan</span>
                            <p>$19.99</p>
                            <img src="{{asset('assets')}}/main/img/credit-card.svg" alt="">
                        </div>
                    </div>
                    <!-- end stats -->

                    <!-- stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats">
                            <span>Films watched</span>
                            <p>1 172</p>
                            <img src="{{asset('assets')}}/main/img/film.svg" alt="">
                        </div>
                    </div>
                    <!-- end stats -->

                    <!-- stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats">
                            <span>Your comments</span>
                            <p>2 573</p>
                            <img src="{{asset('assets')}}/main/img/comments.svg" alt="">
                        </div>
                    </div>
                    <!-- end stats -->

                    <!-- stats -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="stats">
                            <span>Your reviews</span>
                            <p>1 021</p>
                            <img src="{{asset('assets')}}/main/img/star-half-alt.svg" alt="">
                        </div>
                    </div>
                    <!-- end stats -->

                    <!-- dashbox -->
                    <div class="col-12 col-xl-6">
                        <div class="dashbox">
                            <div class="dashbox__title">
                                <h3><img src="{{asset('assets')}}/main/img/film.svg" alt="">Recent Views</h3>

                                <div class="dashbox__wrap">
                                    <a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
                                        </svg></a>
                                    <a class="dashbox__more" href="catalog.html">View All</a>
                                </div>
                            </div>

                            <div class="dashbox__table-wrap dashbox__table-wrap--1">
                                <table class="dashbox__table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TITLE</th>
                                            <th>CATEGORY</th>
                                            <th>RATING</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">321</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">The Lost City</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Movie</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">9.2</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">54</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">Undercurrents</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Anime</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">9.1</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">670</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">Tales from the Underworld</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">TV Show</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">9.0</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">241</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">The Unseen World</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">TV Show</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">8.9</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">22</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">Redemption Road</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Movie</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">8.9</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end dashbox -->

                    <!-- dashbox -->
                    <div class="col-12 col-xl-6">
                        <div class="dashbox">
                            <div class="dashbox__title">
                                <h3><img src="{{asset('assets')}}/main/img/star-half-alt.svg" alt="">Latest reviews</h3>

                                <div class="dashbox__wrap">
                                    <a class="dashbox__refresh" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
                                        </svg></a>
                                    <a class="dashbox__more" href="reviews.html">View All</a>
                                </div>
                            </div>

                            <div class="dashbox__table-wrap dashbox__table-wrap--2">
                                <table class="dashbox__table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ITEM</th>
                                            <th>AUTHOR</th>
                                            <th>RATING</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">126</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">I Dream in Another Language</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Jackson Brown</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">7.2</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">125</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">Benched</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Quang</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">6.3</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">124</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">Whitney</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Brian Cranston</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">8.4</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">123</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">Blindspotting</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Ketut</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">9.0</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="dashbox__table-text">122</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text"><a href="details1.html">I Dream in Another Language</a></div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text">Eliza Josceline</div>
                                            </td>
                                            <td>
                                                <div class="dashbox__table-text dashbox__table-text--rate">7.7</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end dashbox -->
                </div>
            </div>

            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
                <div class="row">
                    <!-- active price plan -->
                    <div class="col-12 col-md-6 col-lg-4 order-md-2 order-lg-1">
                        <div class="plan plan--active">
                            <h3 class="plan__title">Starter</h3>
                            <span class="plan__price">Free</span>
                            <ul class="plan__list">
                                <li>7 days</li>
                                <li>720p Resolution</li>
                                <li>Limited Availability</li>
                                <li>Desktop Only</li>
                                <li>Limited Support</li>
                            </ul>
                            <button type="button" class="plan__btn"><span>Current plan</span></button>
                        </div>
                    </div>
                    <!-- end active price plan -->

                    <!-- price -->
                    <div class="col-12 col-lg-4 order-md-1 order-lg-2">
                        <div class="plan plan--premium">
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
                        <div class="plan">
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

            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab" tabindex="0">
                <div class="row">
                    <!-- details form -->
                    <div class="col-12 col-lg-6">
                        <form action="#" class="sign__form sign__form--profile">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="sign__title">Profile details</h4>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="username">Login</label>
                                        <input id="username" type="text" name="username" class="sign__input" placeholder="User 123">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="email">Email</label>
                                        <input id="email2" type="text" name="email" class="sign__input" placeholder="email@email.com">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="firstname">First Name</label>
                                        <input id="firstname" type="text" name="firstname" class="sign__input" placeholder="John">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="lastname">Last Name</label>
                                        <input id="lastname" type="text" name="lastname" class="sign__input" placeholder="Doe">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="sign__btn sign__btn--small" type="button"><span>Save</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end details form -->

                    <!-- password form -->
                    <div class="col-12 col-lg-6">
                        <form action="#" class="sign__form sign__form--profile">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="sign__title">Change password</h4>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="oldpass">Old Password</label>
                                        <input id="oldpass" type="password" name="oldpass" class="sign__input">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="newpass">New Password</label>
                                        <input id="newpass" type="password" name="newpass" class="sign__input">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="sign__group">
                                        <label class="sign__label" for="confirmpass">Confirm New Password</label>
                                        <input id="confirmpass" type="password" name="confirmpass" class="sign__input">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="sign__btn sign__btn--small" type="button"><span>Change</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end password form -->
                </div>
            </div>
        </div>
        <!-- end content tabs -->
    </div>
</div>
<!-- end content -->
@endsection