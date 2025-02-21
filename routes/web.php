<?php

use App\Http\Controllers\main\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::prefix('mvr')->group(function () {
    Route::get('/', function () {
        return view('main.index');
    })->name('index');

    Route::get('/catalog-grid', function () {
        return view('main.catalog_grid');
    })->name('cataloggrid');

    Route::get('/all-movies', function () {
        return view('main.all_movies_list');
    })->name('allmovies');

    Route::get('/details', function () {
        return view('main.movie_detail');
    })->name('details');

    Route::get('/lists', function () {
        return view('main.movies_list');
    })->name('movies-list');

    Route::get('/pricing', function () {
        return view('main.pricing_plan');
    })->name('pricing');

    Route::get('/about', function () {
        return view('main.about_us');
    })->name('aboutus');

    Route::get('/tags', function () {
        return view('main.tags');
    })->name('tags');

    Route::get('/fag', function () {
        return view('main.help_center');
    })->name('helpcenter');

    Route::get('/profile', function () {
        return view('main.profile');
    })->name('myprofile');

    Route::get('/actor', function () {
        return view('main.actor');
    })->name('actor');

    Route::get('/actor-info', function () {
        return view('main.actor_info');
    })->name('actorinfo');

    Route::get('/contacts', function () {
        return view('main.contacts');
    })->name('contactus');

    Route::get('/signin', function () {
        return view('main.login');
    })->name('signinform');

    Route::get('/signup', function () {
        return view('main.signup');
    })->name('signupform');

    Route::get('/reset-password', function () {
        return view('main.forgot_password');
    })->name('resetpassword');

    Route::get('/not-found', function () {
        return view('main.404');
    })->name('notfound');

    Route::get('/playlists', function () {
        return view('main.playlist');
    })->name('playlists');

    Route::get('/your-watchlist', function () {
        return view('main.watchlists');
    })->name('yourwatchlist');

    Route::get('/detail-watchlist', function () {
        return view('main.detail_watchlist');
    })->name('detailwatchlist');
});
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');

    Route::get('/genres', function () {
        return view('admin.genres_admin');
    })->name('genres');
});