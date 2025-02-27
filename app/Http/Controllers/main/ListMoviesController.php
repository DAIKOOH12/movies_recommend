<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Services\MovieAPIServices;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsEmpty;

use function PHPUnit\Framework\isEmpty;

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
                            // $filter_list = $this->moviesWithFilter($list);
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
            if (request()->input('min_time') != null || request()->input('vote_min') != null || request()->input('order_by') != null) {
                $min_run_time = request()->input('min_time');
                $max_run_time = request()->input('max_time');
                $min_vote = request()->input('vote_min');
                $max_vote = request()->input('vote_max');
                $sort_by = request()->input(key: 'order_by');
                $list = $this->moviesWithFilter($min_run_time, $max_run_time, $min_vote, $max_vote, $sort_by);
            }
            // dd($list);
            return view('main.all_movies_list', compact('list'));
        }
    }
    public function getTopRatedMovies()
    {
        $top_rated = $this->movieAPIServices->getTopRatedMovie()['results'];
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
        return $list;
    }

    public function moviesWithFilter($min_run_time, $max_run_time, $min_vote, $max_vote, $sort_by)
    {
        $list = $this->movieAPIServices->getMoviesWithFilter($min_run_time, $max_run_time, $min_vote, $max_vote, $sort_by);
        $list=json_decode($list['movies_filter']->getBody(), true)['results'];
        return $list;
    }
}
