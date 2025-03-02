<?php

use App\Http\Controllers\main\CastController;
use App\Http\Controllers\main\GenresController;
use App\Http\Controllers\main\HomeController;
use App\Http\Controllers\main\ListMoviesController;
use App\Http\Controllers\main\MovieController;
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
    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/catalog-grid', [GenresController::class, 'index'])->name('cataloggrid');

    Route::get('/all-movies/{type?}/{key?}', [ListMoviesController::class, 'index'])->name('allmovies');

    Route::get('/movies/{any?}', [MovieController::class, 'index'])->name('details');

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

    Route::get('/casts', [CastController::class, 'index'])->name('actor');

    Route::get('/info/{any?}', [CastController::class, 'getCastDetail'])->name('actorinfo');

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
