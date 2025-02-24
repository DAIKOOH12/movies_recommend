<?php

namespace App\Console\Commands;

use App\Http\Controllers\main\HomeController;
use App\Services\MovieAPIServices;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RefreshMovieCache extends Command
{
    protected $signature = 'controller:run-cache';
    protected $description = 'Cập nhật cache phim từ API';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(MovieAPIServices $moviesServices)
    {
        $controller = new HomeController($moviesServices);

        $controller->index();

        $this->info('Các function trong controller được thực thi tự động.');
    }
}
