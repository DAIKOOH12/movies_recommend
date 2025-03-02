<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\MovieAPIServices;

class GenresController extends Controller
{
    private $moviesServices;
    public function __construct(MovieAPIServices $moviesServices)
    {
        $this->moviesServices = $moviesServices;
    }
    public function index()
    {
        $genres_list = Cache::get('genres_list');
        if (empty($genres_list)) {
            $genres_list = $this->moviesServices->getGenres()['genres'];
        }
        // dd($genres_list);
        return view('main.catalog_grid',compact('genres_list'));
    }
}
