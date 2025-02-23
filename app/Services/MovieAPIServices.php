<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;

class MovieAPIServices
{
    protected $api_key;
    protected $base_url;

    public function __construct()
    {
        $this->api_key = config('services.tmdb.api');
        $this->base_url = config('services.tmdb.endpoint');
    }

    public function getNowPlayingMovies()
    {
        $url = "{$this->base_url}movie/now_playing";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => 1
        ]);

        return $response->json();
    }
    public function getTopRatedMovie()
    {
        $url = "{$this->base_url}movie/top_rated";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => 1
        ]);

        return $response->json();
    }

    public function getUpcomingMovies()
    {
        $url = "{$this->base_url}movie/upcoming";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => 1
        ]);

        return $response->json();
    }
    public function getTrendingMovies()
    {
        $url = "{$this->base_url}trending/movie/day";

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
            } else if (Str::contains($trailer['name'], 'Trailer')) {
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

    public function getMovieDetails($movie_id)
    {
        $url = "{$this->base_url}movie/{$movie_id}";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US'
        ]);

        return $response->json();
    }
    public function getMovieTags($movie_id)
    {
        $url = "{$this->base_url}movie/{$movie_id}/keywords";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US'
        ]);

        return $response->json();
    }
    public function getMovieCasts($movie_id)
    {
        $url = "{$this->base_url}movie/{$movie_id}/credits";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US'
        ]);

        return $response->json();
    }

    public function getPopularCasts()
    {
        $url = "{$this->base_url}person/popular";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => 1
        ]);

        return $response->json();
    }

    public function getMoviesList($movie_id)
    {
        $client = new Client();

        $promise = [
            'recommendations' => $client->getAsync("{$this->base_url}movie/{$movie_id}/recommendations?api_key={$this->api_key}&language=en-US&page=1"),
            'similar' => $client->getAsync("{$this->base_url}movie/{$movie_id}/similar?api_key={$this->api_key}&language=en-US&page=1"),
        ];

        $response = Promise\Utils::unwrap($promise);
        return $response;
    }
    public function getListMoviesWithGenres($id)
    {
        $url = "{$this->base_url}discover/movie";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => 1,
            'include_adult' => false,
            'with_genres' => $id
        ]);
        return $response->json();
    }
}
