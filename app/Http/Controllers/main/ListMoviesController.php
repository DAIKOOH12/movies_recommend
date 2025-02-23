<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Services\MovieAPIServices;
use Illuminate\Http\Request;

class ListMoviesController extends Controller
{
    public function __construct(MovieAPIServices $movieAPIServices)
    {
        $this->movieAPIServices = $movieAPIServices;
    }
    public function index($type = null, $key = null)
    {
        if ($type == null) {
            return redirect()->route('index');
        } else {
            switch ($type) {
                case 'list':
                    switch ($key) {
                        case 'top_rated':
                            $list = $this->getTopRatedMovies();
                            break;
                        case 'upcoming':
                            $list = $this->getUpcomingMovies();
                            break;
                        case 'all':
                            $list = $this->getNowPlayingMovies();
                            break;
                    }
                    break;
                case 'genres':
                    $list = $this->getGenresListMovies($key);
                    break;
                case 'tags':
                    echo "Danh sách theo tag";
                    break;
            }
            return view('main.all_movies_list', compact('list'));
        }
    }
    public function getTopRatedMovies()
    {
        $top_rated = $this->movieAPIServices->getTopRatedMovie()['results'];
        // dd($top_rated);
        return $top_rated;
    }
    public function getUpcomingMovies()
    {
        $upcoming = $this->movieAPIServices->getUpcomingMovies()['results'];
        return $upcoming;
    }
    public function getNowPlayingMovies()
    {
        $now_playing = $this->movieAPIServices->getNowPlayingMovies()['results'];
        return $now_playing;
    }
    public function getGenresListMovies($id)
    {
        $list = $this->movieAPIServices->getListMoviesWithGenres($id)['results'];
        // dd($list);
        return $list;
    }
}
