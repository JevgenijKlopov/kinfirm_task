<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\StocksImportService;

class ImportStocks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importStocks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import from json to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        StocksImportService::import();
    }
}
