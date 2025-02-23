<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MovieAPIServices;
use Illuminate\Support\Facades\Cache;


class MovieController extends Controller
{
    public function __construct(MovieAPIServices $moviesServices)
    {
        $this->moviesServices = $moviesServices;
    }
    public function index(Request $request)
    {
        $id = $request->segment(3);
        if (!isset($id)) {
            return redirect()->route(route: 'index');
        } else {
            $list = $this->getMoviesList($id);
            $movie_detail = $this->getMovieDetails($id);
            $recommendations = $list['recommendations'];
            $related = $list['related'];
            // dd($related);
            return view('main.movie_detail', compact('recommendations', 'related', 'movie_detail'));
        }
    }
    public function getMovieDetails($id)
    {
        if (Cache::has('genres_list')) {
            $genres = Cache::get('genres_list');
        } else {
            $genres = $this->moviesServices->getGenres()['genres'];
            $genres = collect($genres)->sortBy('id')->values()->all();
            Cache::put('genres_list', $genres, now()->addMinutes(60));
        }
        $details = $this->moviesServices->getMovieDetails($id);
        $trailer = $this->moviesServices->getMovieTrailer($id);
        $details['key_trailer'] = $trailer;
        $movie_certification = $this->moviesServices->getMovieCertificate($details['id']);
        $details['certificate'] = $movie_certification['results'][0]['iso_3166_1'];
        $casts = $this->moviesServices->getMovieCasts($details['id'])['cast'];
        $details['cast_represent'] = collect($casts)->sortByDesc('popularity')->values()->all();
        $tags = $this->moviesServices->getMovieTags($details['id'])['keywords'];
        $details['tags'] = collect($tags)->take(3)->all();
        // dd($details);
        return $details;
    }

    public function getMoviesList($id)
    {
        $array = $this->moviesServices->getMoviesList($id);
        $recommendations = json_decode($array['recommendations']->getBody(), true)['results'];
        $related = json_decode($array['similar']->getBody(), true)['results'];

        $lists = [
            'recommendations' => $recommendations,
            'related' => $related
        ];
        return $lists;
    }
}
