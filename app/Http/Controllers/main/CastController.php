<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Services\MovieAPIServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;


class CastController extends Controller
{
    private $movieAPIServices;
    public function __construct(MovieAPIServices $movieAPIServices)
    {
        $this->movieAPIServices = $movieAPIServices;
    }
    public function index()
    {
        $perPage = 20;
        $currentPage = request()->input('page');
        $casts_list = $this->movieAPIServices->getPopularCasts($currentPage);

        $list = $casts_list['results'];
        // dd($top_rated_results);
        $array = $casts_list['results'];
        $total = $casts_list['total_results'];

        $paginated_movies = new LengthAwarePaginator(
            $array,
            $total,
            $perPage,
            $currentPage,
            ['path' => request()->url()]
        );
        $list = collect($list)->take(12)->toArray();

        return view('main.actor', compact('list','paginated_movies'));
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
