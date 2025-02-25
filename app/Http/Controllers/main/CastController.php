<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Services\MovieAPIServices;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function __construct(MovieAPIServices $movieAPIServices)
    {
        $this->movieAPIServices = $movieAPIServices;
    }
    public function index()
    {
        $casts_list = $this->movieAPIServices->getPopularCasts()['results'];
        $casts_list = collect($casts_list)->take(12)->toArray();

        return view('main.actor', compact('casts_list'));
    }
    public function getCastDetail(Request $request)
    {
        $id = explode('-', $request->segment(3))[0];
        $array = $this->movieAPIServices->getMoviesWithCast($id);
        $cast_detail = json_decode($array['cast_detail']->getBody(), true);
        $most_views = json_decode($array['most_views_movies']->getBody(), true)['cast'];
        $most_views = collect($most_views)->sortByDesc('vote_count')->take(5)->toArray();
        // dd($most_views);
        return view('main/actor_info', compact('cast_detail', 'most_views'));
    }
}
