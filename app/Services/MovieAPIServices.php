<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MovieAPIServices
{
    protected $api_key;
    protected $base_url;

    public function __construct()
    {
        $this->api_key = config('services.tmdb.api');
        $this->base_url = config('services.tmdb.endpoint');
    }

    public function getPopularMovies()
    {
        $url = "{$this->base_url}movie/popular";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => 1
        ]);

        return $response->json();
    }
    public function getMovieTrailer($movie_id)
    {
        $url = "{$this->base_url}movie/{$movie_id}/videos";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US'
        ]);
        $official_trailer = $response['results'];

        $result = [];
        foreach ($official_trailer as $trailer) {
            if (Str::contains($trailer['name'], 'Official Trailer')) {
                $result = $trailer['key'];
                break;
            }
        }
        return $result;
    }

    public function getGenres()
    {
        $url = "{$this->base_url}genre/movie/list";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US'
        ]);

        return $response->json();
    }

    public function getMovieCertificate($movie_id)
    {
        $url = "{$this->base_url}movie/{$movie_id}/release_dates";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US'
        ]);

        return $response->json();
    }

    public function getMovieDetails($movie_id) {
        $url = "{$this->base_url}movie/{$movie_id}";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US'
        ]);

        return $response->json();
    }
}
