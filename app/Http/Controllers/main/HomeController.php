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
        // $new_user=new User();
        // $new_user->user_id="user2";
        // $new_user->username="truongpham";
        // $new_user->email="abc@gmail.com";
        // $new_user->password=Hash::make('123');
        // $new_user->save();

        // $users=User::all();

        // $movies_in_wishlist = WishlistMovies::select("*")
        //     ->join("wishlists", "wishlists_movies.wishlist_id", "=", "wishlists.wishlist_id")->get();

        $movies_in_wishlist = WishlistMovies::whereHas('wishlist', function ($query) {
            $query->where('wishlist_id', 'wishlist1');
        })->get();

        $movies_popular = $this->moviesServices->getPopularMovies();

        // dd($movies_popular);
        return view('main.index');
    }
}
