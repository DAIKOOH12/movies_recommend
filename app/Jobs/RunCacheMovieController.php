<?php

namespace App\Jobs;

use App\Http\Controllers\main\HomeController;
use App\Services\MovieAPIServices;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RunCacheMovieController implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(MovieAPIServices $movieAPIServices): void
    {
        $controller = new HomeController($movieAPIServices);

        $controller->index();
    }
}
