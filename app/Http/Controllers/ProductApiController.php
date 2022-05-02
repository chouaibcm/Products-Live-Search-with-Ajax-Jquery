<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(){
        return Product::all();
    }
    public function show_product(Product $product){
        return $product;
    }
    public function show_product_price(Product $product){
        return $product->price;
    }
}
