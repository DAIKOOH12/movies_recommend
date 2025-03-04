<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Models\WishlistMovies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WatchlistController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->user_id;

        $watchlists = Wishlist::with('user')->where('user_id', $user_id)->get();
        return view('main.watchlists', compact('watchlists'));
    }

    public function createWatchlist(Request $request)
    {
        $validatetor = Validator::make($request->all(), [
            'wl-name' => 'required',
            'wl-description' => 'required',
            'wl-thumbnail' => 'image|mimes:jpeg,jpg,png'
        ]);

        if ($validatetor->fails()) {
            return redirect()->back()->withErrors($validatetor)->withInput();
        }

        $image = $request->file('wl-thumbnail');
        $file_name = $image->getClientOriginalName();
        $destination = public_path('assets/main/img');

        $image->move($destination, $file_name);

        $user_id = Auth::user()->user_id;

        $new_watchlist = new Wishlist();
        $new_watchlist->wishlist_id = 'wl' . count(Wishlist::all()) + 1;
        $new_watchlist->wishlist_title = $request->input('wl-name');
        $new_watchlist->wishlist_description = $request->input('wl-description');
        $new_watchlist->wishlist_state = $request->input('wl-privacy');
        $new_watchlist->wishlist_image = $image->getClientOriginalName();
        $new_watchlist->user_id = $user_id;

        $new_watchlist->save();

        return redirect()->route('yourwatchlist');
    }

    public function getWatchList()
    {
        $user_id = Auth::user()->user_id;

        $watchlists = Wishlist::with('user')->where('user_id', $user_id)->get();

        return response()->json($watchlists);
    }

    public function addToWatchList(Request $request)
    {
        $movie_id = $request->input('movieId');
        $watchlist_id = $request->input('watchlistId');

        $watchlist_id = explode(',', $watchlist_id);


        $data = [];

        foreach ($watchlist_id as $id) {
            $data[] = [
                'movie_id' => $movie_id,
                'wishlist_id' => $id,
            ];
        }

        WishlistMovies::upsert($data, ['movie_id', 'wishlist_id'], ['movie_id', 'wishlist_id']);

        return response()->json(['message' => 'success']);
    }
}
