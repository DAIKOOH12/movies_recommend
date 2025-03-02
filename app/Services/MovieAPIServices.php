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
    public function getMovieTags($movie_id, $page = 1)
    {
        $url = "{$this->base_url}movie/{$movie_id}/keywords";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => $page
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

    public function getPopularCasts($page = 1)
    {
        $url = "{$this->base_url}person/popular";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => $page
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
    public function getListMoviesWithGenres($id, $page = 1)
    {
        $url = "{$this->base_url}discover/movie";

        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => $page,
            'include_adult' => false,
            'with_genres' => $id
        ]);
        return $response->json();
    }

    public function getListMoviesWithPages($page = 1, $type)
    {
        $url = "{$this->base_url}movie/{$type}";
        $response = Http::get($url, [
            'api_key' => $this->api_key,
            'language' => 'en-US',
            'page' => $page,
            'include_adult' => false,
        ]);
        return $response->json();
    }

    public function getMoviesWithCast($person_id)
    {
        $client = new Client();
        $promise = [
            'cast_detail' => $client->getAsync("{$this->base_url}person/{$person_id}?api_key={$this->api_key}&language=en-US"),
            'most_views_movies' => $client->getAsync("{$this->base_url}person/{$person_id}/movie_credits?api_key={$this->api_key}&language=en-US"),
        ];

        $response = Promise\Utils::unwrap($promise);
        return $response;
    }

    public function getMoviesWithFilter($min_run_time, $max_run_time, $min_vote, $max_vote, $sort_by)
    {
        $uri = "{$this->base_url}discover/movie?api_key={$this->api_key}&include_adult=false&include_video=false&language=en-US&page=1";
        if ($min_run_time != null) {
            $uri .= "&with_runtime.gte={$min_run_time}&with_runtime.lte={$max_run_time}";
        }
        if ($min_vote != null) {
            $uri .= "&vote_average.gte={$min_vote}&vote_average.lte={$max_vote}";
        }
        if ($sort_by != null) {
            $uri .= "&sort_by={$sort_by}";
        }
        $client = new Client();

        $promise = [
            'movies_filter' => $client->getAsync($uri),
        ];

        $response = Promise\Utils::unwrap($promise);
        return $response;
    }
}
