<?php
namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Http;

class ProductsImportService
 {
    public static function import(){
        $response = Http::withoutVerifying()
        ->withOptions(["verify"=>false])
        ->get('https://kinfirm.com/app/uploads/laravel-task/products.json')->json();
        foreach($response as $product){
                Product::updateOrCreate(['sku'=> $product['sku']],  [   
                    "description" => $product['description'],
                    "size" => $product['size'],
                    "photo" => $product['photo'],
                    "tags" => $product['tags']
                ]);
            }
    }
}