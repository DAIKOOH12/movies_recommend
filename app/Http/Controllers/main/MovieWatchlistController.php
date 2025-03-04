<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Models\WishlistMovies;
use App\Services\MovieAPIServices;
use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;

class MovieWatchlistController extends Controller
{
    private $movieServices;
    public function __construct(MovieAPIServices $movieServices)
    {
        $this->movieServices = $movieServices;
    }
    public function index($id, $slug)
    {
        $find_watchlist = WishlistMovies::where('wishlist_id', $id)->with('wishlist')->get();

        $watchlist = Wishlist::where('wishlist_id', $id)->first();

        Debugbar::info($watchlist->wishlist_id);

        $movies = $this->movieServices->getMoviesWithID($find_watchlist);

        // Debugbar::info($movies);



        return view('main.detail_watchlist', compact('movies','watchlist'));
    }
}
