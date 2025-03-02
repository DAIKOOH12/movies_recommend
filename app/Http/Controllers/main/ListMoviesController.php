<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Services\MovieAPIServices;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsEmpty;

use function PHPUnit\Framework\isEmpty;

class ListMoviesController extends Controller
{
    private $movieAPIServices;
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
                            $perPage = 20;
                            $currentPage = request()->input('page');
                            $top_rated_results = $this->getTopRatedMovies($currentPage);
                            $list = $top_rated_results['results'];
                            // dd($top_rated_results);
                            $array = $top_rated_results['results'];
                            $total = $top_rated_results['total_results'];

                            $paginated_movies = new LengthAwarePaginator(
                                $array,
                                $total,
                                $perPage,
                                $currentPage,
                                ['path' => request()->url()]
                            );
                            break;
                        case 'upcoming':
                            $perPage = 20;
                            $currentPage = request()->input('page');
                            $upcoming = $this->getUpcomingMovies($currentPage);
                            $list = $upcoming['results'];
                            // dd($top_rated_results);
                            $array = $upcoming['results'];
                            $total = $upcoming['total_results'];

                            $paginated_movies = new LengthAwarePaginator(
                                $array,
                                $total,
                                $perPage,
                                $currentPage,
                                ['path' => request()->url()]
                            );
                            break;
                        case 'all':
                            $perPage = 20;
                            $currentPage = request()->input('page');
                            $now_playing = $this->getNowPlayingMovies($currentPage);
                            $list = $now_playing['results'];
                            // dd($top_rated_results);
                            $array = $now_playing['results'];
                            $total = $now_playing['total_results'];

                            $paginated_movies = new LengthAwarePaginator(
                                $array,
                                $total,
                                $perPage,
                                $currentPage,
                                ['path' => request()->url()]
                            );
                            break;
                    }
                    break;
                case 'genres':
                    $perPage = 20;
                    $currentPage = request()->input('page');
                    $genres = $this->getGenresListMovies($key, $currentPage);
                    $list = $genres['results'];
                    $array = $genres['results'];
                    $total = $genres['total_results'];

                    $paginated_movies = new LengthAwarePaginator(
                        $array,
                        $total,
                        $perPage,
                        $currentPage,
                        ['path' => request()->url()]
                    );
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

            return view('main.all_movies_list', compact('list', 'paginated_movies'));
        }
    }
    public function getTopRatedMovies($page = 1)
    {
        $top_rated = $this->movieAPIServices->getListMoviesWithPages($page, 'top_rated');
        return $top_rated;
    }
    public function getUpcomingMovies($page = 1)
    {
        $upcoming = $this->movieAPIServices->getListMoviesWithPages($page, 'upcoming');
        return $upcoming;
    }
    public function getNowPlayingMovies($page = 1)
    {
        $now_playing = $this->movieAPIServices->getListMoviesWithPages($page, 'now_playing');
        return $now_playing;
    }
    public function getGenresListMovies($id, $page)
    {
        $list = $this->movieAPIServices->getListMoviesWithGenres($id, $page);
        return $list;
    }

    public function moviesWithFilter($min_run_time, $max_run_time, $min_vote, $max_vote, $sort_by)
    {
        $list = $this->movieAPIServices->getMoviesWithFilter($min_run_time, $max_run_time, $min_vote, $max_vote, $sort_by);
        $list = json_decode($list['movies_filter']->getBody(), true)['results'];
        return $list;
    }
    public function paginate($item,  $page = 1) {}
}
