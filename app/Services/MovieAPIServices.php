<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MovieAPIServices{
    protected $api_key;
    protected $base_url;

    public function __construct(){
        $this->api_key=config('services.tmdb.api');
        $this->base_url=config('services.tmdb.endpoint');
    }

    public function getPopularMovies(){
        $url="{$this->base_url}movie/popular";

        $response=Http::get($url,[
            'api_key'=>$this->api_key,
            'language'=>'en-US',
            'page'=>1
        ]);

        return $response->json();
    }
}