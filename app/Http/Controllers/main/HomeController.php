<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Services\MovieAPIServices;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\WishlistMovies;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct(MovieAPIServices $moviesServices)
    {
        $this->moviesServices = $moviesServices;
    }
    public function index()
    {
        $movies_banner = Cache::remember('movies_banner', now()->addMinutes(60), function () {
            return $this->getMovieBanner();
        });

        $movie_top_ten = Cache::remember('movie_top_ten', now()->addMinutes(60), function () {
            return $this->getTopTenMovies();
        });

        $movie_upcoming = Cache::remember('movie_upcoming', now()->addMinutes(60), function () {
            return $this->getUpcomingMovies();
        });

        $movie_trending = Cache::remember('movie_trending', now()->addMinutes(60), function () {
            return $this->getTrendingMovies();
        });

        $popular_casts = Cache::remember('popular_casts', now()->addMinutes(60), function () {
            return $this->getPopularCasts();
        });

        $genres_list = Cache::remember('genres_list', now()->addMinutes(60), function () {
            return $this->getGenresList();
        });
        return view('main.index', compact('movies_banner', 'movie_top_ten', 'movie_upcoming', 'movie_trending', 'popular_casts', 'genres_list'));
    }

    public function getMovieBanner()
    {
        $genres = $this->moviesServices->getGenres()['genres'];
        $genres = collect($genres)->sortBy('id')->values()->all();

        $movies_banner = $this->moviesServices->getNowPlayingMovies()['results'];
        foreach ($movies_banner as &$movie) {
            $movie = $this->moviesServices->getMovieDetails($movie['id']);
        }
        foreach ($movies_banner as &$movie) {
            $movie_certification = $this->moviesServices->getMovieCertificate($movie['id']);
            $movie['certificate'] = $movie_certification['results'][0]['iso_3166_1'];
            $casts = $this->moviesServices->getMovieCasts($movie['id'])['cast'];
            $casts = collect($casts)->sortByDesc('popularity')->values()->take(1)->first();
            $movie['cast_represent'] = $casts;
        }
        $movies_banner = collect($movies_banner)->take(3)->values();
        return $movies_banner;
    }
    public function getTopTenMovies()
    {
        $movie_top_ten = $this->moviesServices->getTopRatedMovie();
        $movie_top_ten = collect($movie_top_ten['results'])->sortByDesc('popularity')->take(10)->values();
        return $movie_top_ten;
    }
    public function getUpcomingMovies()
    {
        $movie_upcoming = $this->moviesServices->getUpcomingMovies()['results'];
        foreach ($movie_upcoming as &$movie) {
            $movie = $this->moviesServices->getMovieDetails($movie['id']);
        }
        // dd($movie_upcoming);
        return $movie_upcoming;
    }
    public function getTrendingMovies()
    {
        $movie_trending = $this->moviesServices->getTrendingMovies()['results'];
        foreach ($movie_trending as &$movie) {
            $movie = $this->moviesServices->getMovieDetails($movie['id']);
        }
        foreach ($movie_trending as &$movie) {
            $movie_certification = $this->moviesServices->getMovieCertificate($movie['id']);
            $movie['certificate'] = $movie_certification['results'][0]['iso_3166_1'];
            $casts = $this->moviesServices->getMovieCasts($movie['id'])['cast'];
            $casts = collect($casts)->sortByDesc('popularity')->values()->take(1)->first();
            $movie['cast_represent'] = $casts;
        }
        $movie_trending = collect($movie_trending)->take(5)->values();
        // dd($movie_trending);
        return $movie_trending;
    }

    public function getPopularCasts()
    {
        $popular_casts = $this->moviesServices->getPopularCasts()['results'];
        $popular_casts = collect($popular_casts)->sortByDesc('popularity')->values();
        $popular_casts = collect($popular_casts)->take(20)->values();
        // dd($popular_casts);
        return $popular_casts;
    }
    public function getGenresList()
    {
        $genres_list = $this->moviesServices->getGenres()['genres'];
        // dd($genres_list);
        return $genres_list;
    }
}
