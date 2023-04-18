<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Services\ProductsImportService;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'importProducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import json data to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       ProductsImportService::import();

    }
}
