<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Services\MovieAPIServices;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\WishlistMovies;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->moviesServices = new MovieAPIServices();
    }
    public function index()
    {
        $movies_banner = $this->getMovieBanner();
        return view('main.index', compact('movies_banner'));
    }

    public function getMovieBanner()
    {
        $genres = $this->moviesServices->getGenres()['genres'];
        $genres = collect($genres)->sortBy('id')->values()->all();

        $movies_banner = $this->moviesServices->getPopularMovies()['results'];
        foreach ($movies_banner as &$movie) {
            $movie = $this->moviesServices->getMovieDetails($movie['id']);
        }
        foreach ($movies_banner as &$movie) {
            $movie_certification = $this->moviesServices->getMovieCertificate($movie['id']);
            $movie['certificate'] = $movie_certification['results'][0]['iso_3166_1'];
        }
        $movies_banner = collect($movies_banner)->take(3)->values();
        // dd($movies_banner);

        return $movies_banner;
    }
}
