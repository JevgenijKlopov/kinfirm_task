<?php
namespace App\Services;

use App\Models\Stock;
use Illuminate\Support\Facades\Http;

class StocksImportService {

    public static function import(){
        $response = Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->get('https://kinfirm.com/app/uploads/laravel-task/stocks.json')->json();
            Stock::upsert($response,['sku'],['stock']);
    }
}