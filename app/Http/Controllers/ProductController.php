<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(Request $request){
        return view('home.products.index');
    }

    public function show(Product $product){
        return view('home.products.show', compact('product'));
    }    
}
