<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function apiData(Request $request)
    {
        $collection = Product::get();
        return $collection->toJson();
    }

}
