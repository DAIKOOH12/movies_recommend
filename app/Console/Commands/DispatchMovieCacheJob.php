<?php

namespace App\Console\Commands;

use App\Jobs\RunCacheMovieController;
use Illuminate\Console\Command;

class DispatchMovieCacheJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:dispatch-movie-cache-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cập nhật cache không cần request';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        dispatch(new RunCacheMovieController());

        $this->info('Cache được cập nhật thành công');
    }
}
